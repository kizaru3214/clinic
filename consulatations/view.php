<?php
    include '../db.php';
    $result = mysqli_query($conn, "SELECT c.consultID, p.patFName, p.patLName, d.docFName, d.docLName, c.consultDate, c.diagnosis, c.prescription
        FROM consultation c
        JOIN patient p ON c.patID = p.patID
        JOIN doctor d ON c.docID = d.docID
        ");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
</head>
<body>
    <h2>Consultation List</h2>
    <a href = "add.php">Add Consultation>Add Consulatation</a><br><br>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Diagnosis</th>
            <th>Prescription</th>
            <th>Actions</th>

        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row ['consultID'] ?></td>
            <td><?= $row ['patFName'] . ' ' . $row ['patLName'] ?></td>
            <td><?= $row ['docFName'] . ' ' . $row ['docLName'] ?></td>
            <td><?= $row ['consultDate']?></td>
            <td><?= $row ['diagnosis']?></td> 
            <td><?= $row ['prescription']?></td>
            <td>
                <a href = "edit.php?id=<? $row ['consultID'] ?>"> Edit </a>
                <a href = "delete.php?id=<? $row ['consultID'] ?>" onclick = "return confirm('Delete this consultation?')"> Delete</a>
            </td>
        </tr>
        
        
        <?php endwhile; ?>
        </table>
        <br><a href = "..index.php"> Back to Menu</a>
</body>
</html>