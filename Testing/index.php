<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .submit-btn{
            padding: 10px 20px;
            border: none;
            background: aquamarine;
            border-radius: 5px;
            transition: .5s;
            color: white;
        }

        .submit-btn:hover{
            transform: translateX(50px);
        }
    </style>
</head>
<body>
    <h1>Advising Panel</h1>
    <form action="insert.php" method="post">
        <label for="name">Student Name: </label>
        <input type="text" name="studentName" required placeholder="Surname, First name, MI."><br><br>

        <label for="student ID">Student ID: </label>
        <input type="text" name="studentId" required placeholder="Ex. AY2021-00159"><br><br>

        <label for="studentSec">Section: </label>
        <input type="text" name="studentSec" required><br><br>

        <label for="businessCom">Business Communication: </label>
        <input type="text" name="businessCom" required><br><br>

        <label for="informationAssurance">Information Assurance: </label>
        <input type="text" name="infoAssurance" required><br><br>

        <label for="PhilippineLiterature">Philippine Literature: </label>
        <input type="text" name="philLit" required><br><br>

        <label for="networking">Networking 2: </label>
        <input type="text" name="networking" required><br><br>

        <label for="fundamentalofDatabase">Fundamental of Database System: </label>
        <input type="text" name="fundamentalsofDatabase" required><br><br>

        <label for="philPopCulture">Philippine Pop Culture: </label>
        <input type="text" name="philPopCulture" required><br><br>

        <label for="physicalEduc">Physical Education: </label>
        <input type="text" name="educ" required><br><br>

        <label for="lwofRizal">Life and Works of Rizal: </label>
        <input type="text" name="lwofRizal" required><br><br>

        <label for="quantiMethods">Quantitative Methods: </label>
        <input type="text" name="quantiMethods" required><br><br>

        <label for="probStats">Probabilty and Statistics: </label>
        <input type="text" name="probStats" required><br><br>

        <input class="submit-btn" type="submit" name="submit">
    </form>
</body>
</html>