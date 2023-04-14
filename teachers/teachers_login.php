<?php 

session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$teacher_id = $_POST['teacher_id'];
		$teacher_pass = $_POST['teacher_pass'];

		if(!empty($teacher_id) && !empty($teacher_pass))
		{

			//read from database
			$query = "select * from `teachers` where teacher_id = '$teacher_id' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['teacher_pass'] === $teacher_pass)
					{

						$_SESSION['teacher_id'] = $user_data['teacher_id'];
						header("Location: teachers.php");
						die;
					}
				}
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="svcc-logo.png">
    <link rel="stylesheet" href="login-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <img src="svcc-logo.png" alt="SVCC Logo">
    <div class="login-container">
        <div class="login">
        <form method="post">
            <h2>Login</h2>
            <input id="text" type="text" name="teacher_id" placeholder="ID Number">
            <br>
            <input id="text" type="password" name="teacher_pass" placeholder="Password">
            <br>
            <p class="fpass"><a href="#">Forgot Password?</a></p>
            <br>
            <button id="button" type="submit" value="Login">LOGIN</button>
            <p class="nam">Don't have an account? <a href="signup.php">Signup</a></p>
        </div>
    </div>
    
</body>
</html>