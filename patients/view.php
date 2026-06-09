<?php
    include '../db.php';
    $result = mysqli_query($conn, "SELECT * FROM patient");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
</head>
<body>
    <h2>Patient List</h2>
    <a href = "add.php">Add Patient</a><br><br>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Tel No</th>
            <th>Actions</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
          <td><?= $row['patID']?></td>
          <td><?= $row['patFName']?></td>
          <td><?= $row['patLName']?></td>
          <td><?= $row['patBDate']?></td>
          <td><?= $row['patTelNo']?></td>
          <td>
            <a href = "edit.php?id=<?= $row['patID']?>">Edit</a>
            <a href = "delete.php?id=<?= $row['patID']?>" onclick="return confirm('Delete this patient?')">Delete</a>
          </td>
        </tr>
        <?php endwhile;?>
    </table>
<br><a href = "../index.php">Back to Menu </a>
</body>
</html>