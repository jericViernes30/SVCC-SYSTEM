<?php

require 'connect.php';

$studentName = $studentId = $studentSec = $businessCom = $infoAssurance = 
$philLit = $networking = $fundamentalsofDatabase = $philPopCulture = $educ = 
$lwofRizal = $quantiMethods = $probStats = "";
$inputFieldsCompleted = array();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if(isset($_POST['studentName']) && isset($_POST['studentId']) && isset($_POST['businessCom']) && isset($_POST['infoAssurance'])) {
        if (empty($_POST['studentName']) || !preg_match("/^[a-zA-z\s]*$/", $studentName)) {
            echo "Name submission Error";
        } else {
            $studentName = $_POST['studentName'];
            array_push($inputFieldsCompleted, $studentName);}
        if (empty($_POST['studentId']) || !preg_match("/^[a-zA-z0-9-]*$/", $studentId)) {
            echo "Student ID empty or invalid";
        } else {
            $studentId = $_POST['studentId'];
            array_push($inputFieldsCompleted, $studentId);}
        if (empty($_POST['studentSec']) || !preg_match("/^[a-zA-z0-9-]*$/", $studentSec)) {
            echo "Student section empty or invalid";
        } else {
            $studentSec = $_POST['studentSec'];
            array_push($inputFieldsCompleted, $studentSec);}
        if (empty($_POST['businessCom'])) {
            echo "s1Error!";
        } else {
            $businessCom = $_POST['businessCom'];
            if (preg_match('/[^0-9]/', $businessCom)) {
                echo "number only";
            } else {
                array_push($inputFieldsCompleted, $businessCom);}}
        if (empty($_POST['infoAssurance'])) {
            echo "s2Error!";
        } else {
            $infoAssurance = $_POST['infoAssurance'];
            if (preg_match('/[^0-9]/', $infoAssurance)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $infoAssurance);} }
        if (empty($_POST['philLit'])) {
            echo "s3Error!";
        } else {
            $philLit = $_POST['philLit'];
            if (preg_match('/[^0-9]/', $philLit)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $philLit);}}
        if (empty($_POST['networking'])) {
            echo "s4Error!";
        } else {
            $networking = $_POST['networking'];
            if (preg_match('/[^0-9]/', $networking)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $networking);}}
        if (empty($_POST['fundamentalsofDatabase'])) {
            echo "s5Error!";
        } else {
            $fundamentalsofDatabase = $_POST['fundamentalsofDatabase'];
            if (preg_match('/[^0-9]/', $fundamentalsofDatabase)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $fundamentalsofDatabase);}}
        if (empty($_POST['philPopCulture'])) {
            echo "s6Error!";
        } else {
            $philPopCulture = $_POST['philPopCulture'];
            if (preg_match('/[^0-9]/', $philPopCulture)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $philPopCulture);}}
        if (empty($_POST['educ'])) {
            echo "s7Error!";
        } else {
            $educ = $_POST['educ'];
            if (preg_match('/[^0-9]/', $educ)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $educ);}}
        if (empty($_POST['lwofRizal'])) {
            echo "s8Error!";
        } else {
            $lwofRizal = $_POST['lwofRizal'];
            if (preg_match('/[^0-9]/', $lwofRizal)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $lwofRizal);}}
        if (empty($_POST['quantiMethods'])) {
            echo "s9Error!";
        } else {
            $quantiMethods = $_POST['quantiMethods'];
            if (preg_match('/[^0-9]/', $quantiMethods)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $quantiMethods);}}
        if (empty($_POST['probStats'])) {
            echo "s10Error!";
        } else {
            $probStats = $_POST['probStats'];
            if (preg_match('/[^0-9]/', $probStats)){
                echo "number only";
            } else {                
                array_push($inputFieldsCompleted, $probStats);}}

        // echo (count($inputFieldsCompleted));

        if (count($inputFieldsCompleted) == 13) {
            $sql = "INSERT INTO `student_grades` (`studentName`, `studentId`, `studentSec`, `businessCom`,`infoAssurance`, `philLit`, `networking`, 
            `fundamentalsofDatabase`, `philPopCulture`, `educ`, `lwofRizal`, `quantiMethods`, `probStats`) 
            VALUES ('$studentName', '$studentId', '$studentSec', '$businessCom', '$infoAssurance', '$philLit', '$networking', '$fundamentalsofDatabase', '$philPopCulture',
            '$educ', '$lwofRizal', '$quantiMethods', '$probStats')";

            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("Location: index.php");
            } else {
                echo "Error submission!";
            }
        } else {
            header("Location: index.php");
        }  
    }
}
?>