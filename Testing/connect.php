<?php

$server = 'localhost';
$user = 'root';
$userPass = '';
$dbName = 'lms_svcc1';

$conn = mysqli_connect($server, $user, $userPass, $dbName) or die("Connection to database error!").mysqli_connect_error();