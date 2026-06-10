<?php
    include '../db.php';
    $doctors = mysqli_query("SELECT * FROM doctor");
    $patients = mysqli_query("SELECT * FROM patient");

    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $patID = $_POST['patID'];
        $docID = $_POST['docID'];
        $date = $_POST['consultDate'];
        $diagnosis = $_POST['diagnosis'];
        $prescription = $_POST['prescription'];
        mysqli_query($conn, "INSERT INTO consultation (patID, docID, consultDate, diagnosis, prescription) VALUES ('$patID', '$docID', '$date', '$diagnosis', '$prescription')");
        header ("Location: view.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Consultations</title>
</head>
<body>
    <h2>Add Consultations</h2>
    <form method = "POST">
        <select name = "patID" required>
            <label>Patient: </label>
            <?php while($p = mysqli_fetch_assoc($patients)): ?> 
            <option value = "<?= $p['patID']?>">
             <?= $p['patFName'] . ' ' . $p['patLName'] ?> 
            </option>
            <?php endwhile; ?>
            </select><br><br>
        
            <select name = "docID" required>
            <label>Doctor: </label>
            <?php while($d = mysqli_fetch_assoc($doctors)): ?>
             <option value = "<?= $d['docID']?>">
             <?= $d['docFName'] . ' ' . $d['docLName'] ?>
             </option>
            <?php endwhile; ?>
        </select><br><br>
        <label>Date: </label>
        <input type = "datetime-local" name = "consultDate" required><br><br>
        <label>Diagnosis</label>
        <input type = "text" name = "diagnosis" required><br><br>
        <label>Prescription</label>
        <input type = "text" name = "prescription" required> <br><br>
        <input type = "submit" value = "Save">
    </form>
    <br><a href = "view.php">Back</a>
    
</body>
</html>