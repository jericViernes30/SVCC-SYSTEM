<?php
    session_start();
    include("connect.php");
    include("functions.php");

    $user_data = check_login_teacher($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <a href="teachers_index_logout.php">Logout</a>
    <h1>This is the teachers page</h1>

    <br>

    Hello, Username!
</body>
</html>