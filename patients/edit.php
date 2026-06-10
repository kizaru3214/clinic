<?php
    include '../db.php';
    $id = $_GET["id"];
    $pat = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM patient WHERE patID = $id"));
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["patFName"];
        $lname = $_POST["patLName"];
        $bdate = $_POST["patBDate"];
        $telno = $_POST["patTelNo"];
        mysqli_query($conn,"UPDATE patient SET patFName = '$fname', patLName = '$lname', patBDate = '$bdate', patTelNo = '$telno' WHERE patID = $id");
        header("Location: view.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
</head>
<body>
    <h2>Edit Patient</h2>
    <form method = "POST">
        <label>First Name:</label>
        <input type = "text" name = "patFName" value = "<?= $pat['patFName'] ?>" required><br><br>
        
        <label>Last Name: </label>
        <input type = "text" name = "patLName" value = "<?= $pat['patLName'] ?>" required><br><br>

        <label>Birth Date: </label>
        <input type = "text" name = "patBDate" value = "<?=  $pat['patBDate'] ?>" required><br><br>

        <label>Telephone Number: </label>
        <input type = "Text" name = "patTelNo" value = "<?=  $pat['patTelNo'] ?>" required><br><br>
        <input type = "submit" value = "Save">
    </form>
    <br><a href = "view.php">Back</a>
</body>
</html>