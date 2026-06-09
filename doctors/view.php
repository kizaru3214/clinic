<?php
    include '../db.php';
    $result = mysqli_query($conn, "SELECT * FROM doctor");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
</head>
    <body>
    <h2>Doctors List</h2>
    <a href="add.php">Add Doctor</a><br><br>
    <table border = "1">
    <tr>
        <th>iD</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Specialization</th>
        <th>Actions</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?= $row['docID'] ?></td>
        <td><?= $row['docFName'] ?></td>
        <td><?= $row['docLName'] ?></td>
        <td><?= $row['docAddress'] ?></td>
        <td><?= $row['docSpecial'] ?></td>
        <td>
            <a href = "edit.php?id=<?= $row['docID']?>">Edit</a>
            <a href = "delete.php?id=<?= $row['docID']?>" onclick ="return confirm ('Delete this doctor?')">Delete</a>
        </td>
    </tr>    
    <?php endwhile; ?>
    </table>
    <br><a href = "../index.php">Back to Menu </a>
    </body>
</html>