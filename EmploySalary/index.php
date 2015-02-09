<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employ Salary</title>
</head>
<body>

<form action="index.php" method="post">

    <label> Full Name: </label>
    <input type="text" name="fullName"><br>

    <label>Salary: </label>
    <input type="number" name="salary"><br>

    <label>House Rent: </label>
    <input type="number" name="houseRent">%<br>

    <label>Medical Allowance: </label>
    <input type="number" name="medicalAllowance">%<br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

<?php

require_once('salary.php');

if(isset($_POST['fullName']) && isset($_POST['salary']) && isset($_POST['houseRent']) && isset($_POST['medicalAllowance'])){

    $aSalary = new Salary();

    $fullName=$_POST['fullName'];
    $salary=$_POST['salary'];
    $houseRent= $_POST['houseRent'];
    $medicalAllowance= $_POST['medicalAllowance'];

    $aSalary->setFullName($fullName);
    $aSalary->setSalary($salary);
    $aSalary->setHouseRent($houseRent);
    $aSalary->setMedicalAllowance($medicalAllowance);
?>
    Full Name: <input type="text" value="<?php echo $aSalary->getFullName(); ?>"></br>
    Basic Salary: <input type="number" value="<?php echo $aSalary->getSalary(); ?>"></br>
    House Rent: <input type="number" value="<?php echo $aSalary->getHouseRent(); ?>"></br>
    Medical Allowance: <input type="number" value="<?php echo $aSalary->getMedicalAllowance(); ?>"></br>
    Total Amount: <input type="number" value="<?php echo $aSalary->getTotalAmount(); ?>">

<?php
}
?>

<!--    echo $aSalary->getFullName();-->
<!--        echo "<br>";-->
<!--    echo $aSalary->getSalary();-->
<!--        echo "<br>";-->
<!--    echo $aSalary->getHouseRent();-->
<!--         echo "<br>";-->
<!--    echo $aSalary->getMedicalAllowance();-->
<!--        echo "<br>";-->
<!--    echo $aSalary->getTotalAmount();-->
<!---->
<!--}-->
<!---->
<!--?>-->