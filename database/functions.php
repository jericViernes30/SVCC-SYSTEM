<?php

function check_login_admin($con)
{

	if(isset($_SESSION['admin_id']))
	{

		$id = $_SESSION['admin_id'];

		$query = "SELECT * FROM `admin` where admin_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: ../admin/index.php");
	die;

}

function check_login_teacher($con)
{

	if(isset($_SESSION['teacher_id']))
	{

		$id = $_SESSION['teacher_id'];

		$query = "SELECT * FROM `teachers` where teacher_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: ../teachers/teachers_login.php");
	die;

}