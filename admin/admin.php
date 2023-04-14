<?php
    session_start();
    include("../database/connect.php");
    include("../database/functions.php");

    $user_data = check_login_admin($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/tanginamo.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/5bf9be4e76.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
</head>
<body>
    <section class="nav-sec">
        <div class="top-left">
            <img src="../img/head-img.png" alt="">
            <h2>St. Vincent College<br>of Cabuyao</h2>
        </div>

        <div class="navigation">
        <ul>
            <li><a href="admin.php"><i class="fa-solid fa-gauge fa-lg"></i>Dashboard</a></li>
            <li><a href="admin_contents/students-dash.php"><i class="fa-sharp fa-solid fa-graduation-cap fa-lg"></i>Students</a></li>
            <li><a href="admin_contents/teachers-dash.php"><i class="fa-solid fa-chalkboard-user fa-lg"></i>Professors</a></li>
            <li><a href="admin_contents/events-dash.php"><i class="fa-sharp fa-regular fa-calendar-check fa-lg"></i>Events</a></li>
            <li><a href="admin_contents/finance-dash.php"><i class="fa-solid fa-coins fa-lg"></i>Finance</a></li>
            <li><a href="admin_contents/calendar-dash.php"><i class="fa-regular fa-calendar-days fa-lg"></i>Calendar</a></li>
        </ul>
        </div>

        <div class="lower-left">
            <div class="image">
                <p><i class="fa-solid fa-user"></i></p>
            </div>
            <div class="name">
                <h3><?php echo $user_data['admin_name'] ?></h3>
                <p><?php echo $user_data['admin_select'] ?> </p>
            </div>
            <div class="logout">
                <a href="admin_index_logout.php">Logout</a>
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
        
        <div class="content">
            <div class="greet">
                <h1>Dasboard</h1>
                <p>Hi, <?php echo $user_data['admin_name']?>! Welcome to SVCC Dashboard.</p>
            </div>   
        </div>

        <div class="displays">
        <div class="num_of_profs">
            <h3>Total Professors</h3>
                <?php 
                
                    $profs_display_query = "SELECT * FROM professors";
                    $profs_display_query_run = mysqli_query($con, $profs_display_query);
                    if ($profs_total = mysqli_num_rows($profs_display_query_run))
                    {
                        echo '<h4 class="disp">'.$profs_total.'</h4>';
                    }else{
                        echo "NO DATA";
                    }
                
                ?>
        </div>

        <div class="num_of_students">
            <h3>Total Students</h3>
                <?php 
                
                    $students_display_query = "SELECT * FROM students";
                    $students_display_query_run = mysqli_query($con, $students_display_query);
                    if ($students_total = mysqli_num_rows($students_display_query_run))
                    {
                        echo '<h4 class="disp">'.$students_total.'</h4>';
                    }else{
                        echo "NO DATA";
                    }
                
                ?>
        </div> 
    </section>

</body>
</html>