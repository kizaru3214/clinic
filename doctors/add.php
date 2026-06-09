<?php
    include "../db.php";
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $fname = $_POST['docFName'];
        $lname = $_POST['docLName'];
        $address = $_POST['docAddress'];
        $special = $_POST['docSpecial'];
        mysqli_query($conn, "INSERT INTO doctor (docFName, docLName, docAddress, docSpecial) VALUES ('$fname', '$lname', '$address', '$special')");
        header("Location: view.php");
    }
  
?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Doctor</title>
    </head>
    <body>
        <h2>Add Doctor</h2>
        <form method = "POST">
            <label>Firstname: </label>
            <input type = "text" name = "docFName" required><br><br>
            <label>Lastname: </label>
            <input type = "text" name = "docLName" required><br><br>
            <label>Address:</label>
            <input type = "text" name = "docAddress" required><br><br>
            <label>Specialization:</label>
            <input type = "text" name = "docSpecial" required><br><br>

            <input type = "submit" value = "Save">

        </form>
        <br><a href="view.php">Back</a>
    </body>
    </html>
