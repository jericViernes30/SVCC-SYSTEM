<?php 

session_start();

	include("../database/connect.php");
	include("../database/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$admin_id = $_POST['admin_id'];
		$admin_pass = $_POST['admin_pass'];
		if(!empty($admin_id) && !empty($admin_pass))
		{
			$query = "SELECT * FROM `admin` WHERE admin_id = '$admin_id' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['admin_pass'] === $admin_pass)
					{
						$_SESSION['admin_id'] = $user_data['admin_id'];
						header("Location: admin.php");
						die;
					}
				}
			}
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/svcc-logo.png">
    <link rel="stylesheet" href="../css/index-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <img id="image" src="../img/svcc-logo.png" alt="SVCC Logo">
    <div class="login-container">
        <div class="login">
        <form method="post">
            <h2>Login</h2>
            <input id="text" type="text" name="admin_id" placeholder="ID Number">
            <br>
            <input id="text" type="password" name="admin_pass" maxlength="12" placeholder="Password">
            <br>
            <p class="fpass"><a href="#">Forgot Password?</a></p>
            <button id="button" type="submit" value="Login">LOGIN</button>
            <p class="nam">Don't have an account? <a href="../database/signup.php">Signup</a></p>
        </div>
    </div>
    
</body>
</html>