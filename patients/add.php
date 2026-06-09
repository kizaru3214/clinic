<?php
    include '../db.php';
    if($_SERVER [REQUEST_METHOD] == "POST"){
        $fname = $_POST['patFName'];
        $lname = $_POST['patLName'];
        $bdate = $_POST['patBDate'];
        $telno = $_POST['parTelNo'];
        mysqli_query($conn, "INSERT INTO patient (patFName, patLName, patBDate, parTelNo) VALUES ('$fname','$lname','$bdate','$telno')");
        header ("Location: view.php");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
</head>
<body>
    <h2>Add Patient </h2>
    <form method = "POST">
    <label>FirstName: </label>
    <input type = "text" name = "patFName" required><br><br>
    <label>LastName: </label>
    <input type = "text" name = "patLName" required><br><br>
    <label>Birth Dater: </label>
    <input type = "text" name = "patBDate" required><br><br>
    <label>Telephone Number: </label>
    <input type = "text" name = "patTelNo" required><br><br>
    
    <input type = "submit" value = "Save">
    </form>
    <br><a href = "view.php">Back </a>
</body>
</html>