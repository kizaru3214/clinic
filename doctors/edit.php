<?php
    include '../db.php';
    $id = $_GET["id"];
    $doc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM doctor WHERE docID = $id"));
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["docFName"];
        $lname = $_POST["docLName"];
        $address = $_POST["docAddress"];
        $special = $_POST["docSpecial"];
        mysqli_query($conn, "UPDATE doctor SET docFName = '$fname', docLName = '$lname', docAddress = '$address', docSpecial = '$special' WHERE docID =$id");
        header('Location: view.php');    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
</head>
<body>
    <h2>Edit Doctor</h2>
    <form method = "POST">
        <label>First Name:</label>
        <input type = "text" name = "docFName" value = "<?= $doc['docFName'] ?>" required><br><br>
        <label>Last Name:</label>
        <input type = "text" name = "docLName" value = "<?= $doc['docLName'] ?>" required><br><br>
        <label>Address:</label>
        <input type = "text" name = "docAddress" value = "<?= $doc['docAddress'] ?>" required> <br><br>
        <label>Specialization: </label>
        <input type = "text" name = "docSpecial" value = "<?= $doc['docSpecial'] ?>" required><br><br>
        <input type = "submit" value = "Update">
    </form>
    <a href = "view.php">Back </a>
</body>
</html>