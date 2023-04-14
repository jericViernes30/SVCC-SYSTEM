<?php
    session_start();
        include("connect.php");
        include("functions.php");
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $admin_name = $_POST['admin_name'];
            $admin_id = $_POST['admin_id'];
            $admin_pass = $_POST['admin_pass'];
            $admin_select = $_POST['admin_select'];

            if(!empty($admin_name) && !empty($admin_id) && !empty($admin_pass) && !is_numeric($admin_name))
            {
                $query = "INSERT INTO `admin` (`admin_name`, `admin_id`, `admin_select`, `admin_pass`) VALUES ('$admin_name', '$admin_id', '$admin_select', '$admin_pass')";
                mysqli_query($con, $query);
                header("Location: ../admin/index.php");
                die;
            }
            else{
                echo "Please enter some valid information";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="svcc-logo.png">
        <link rel="stylesheet" href="../css/signup.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
    </head>
    <body>
        <img src="../img/svcc-logo.png" alt="SVCC Logo">
        <div class="signup-container">
            <div class="signup">
            <form method="post">
                <h2>Signup</h2>
                <input id="text" type="text" name="admin_name" placeholder="Admin Name">
                <br>
                <input id="text" type="text" name="admin_id" placeholder="Admin ID">
                <br>
                <input id="text" type="text" name="admin_select" placeholder="Position">
                <br>
                <input id="text" type="password" name="admin_pass" maxlength="12" placeholder="Password">
                <br>
                <button id="button" type="submit" value="Signup">SIGNUP</button>
                <p class="nam">Already have an account? <a href="../admin/index.php">Login</a></p>
            </div>
        </div>
    </body>
</html>