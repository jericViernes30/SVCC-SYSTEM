<?php
    session_start();
    include("../../database/connect.php");
    include("../../database/functions.php");

    $user_data = check_login_admin($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../css/samp-ctt.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/5bf9be4e76.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Students</title>
</head>
<body>
    <section class="nav-sec">
        <div class="top-left">
            <img src="../../img/head-img.png" alt="">
            <h2>St. Vincent College<br>of Cabuyao</h2>
        </div>

        <div class="navigation">
        <ul>
            <li><a href="../admin.php"><i class="fa-solid fa-gauge fa-lg"></i>Dashboard</a></li>
            <li><a href="students-dash.php"><i class="fa-sharp fa-solid fa-graduation-cap fa-lg"></i>Students</a></li>
            <li><a href="teachers-dash.php"><i class="fa-solid fa-chalkboard-user fa-lg"></i>Teachers</a></li>
            <li><a href="#"><i class="fa-sharp fa-regular fa-calendar-check fa-lg"></i>Events</a></li>
            <li><a href="finance-dash.php"><i class="fa-solid fa-coins fa-lg"></i>Finance</a></li>
            <li><a href="#"><i class="fa-regular fa-calendar-days fa-lg"></i>Calendar</a></li>
        </ul>
        </div>

        <div class="lower-left">
            <div class="image">
                <p><i class="fa-solid fa-user"></i></p>
            </div>
            <div class="name">
                <h3><?php echo $user_data['admin_name'] ?></h3>
                <p><?php echo $user_data['admin_select']?></p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="dash">
            <div class="top-nav">
                <ul>
                    <li><a href="">Notifications</a></li>
                    <li><a href="">Messages</a></li>
                    <li><a href="">Settings</a></li>
                </ul>
            </div>
        </div>

        <div class="selection">
            <ul>
                <li><a href="courses-tab.php">Courses</a></li>
                <li><a href="master-list-tab.php">Master List</a></li>
                <li><a href="#">Payment</a></li>
            </ul>
        </div>

        <div class="course-selection">
            <ul>
                <li><a href="#">BSBA</a></li>
                <li><a href="#">BSIT</a></li>
                <li><a href="#">BPED</a></li>
                <li><a href="#">BSED</a></li>
                <li><a href="#">BSA</a></li>
                <li><a href="#">BSCrim</a></li>
                <li><a href="#">BSPsych</a></li>
                <li><a href="#">BSHRM</a></li>
            </<ul>
        </div>
</body>
</html>