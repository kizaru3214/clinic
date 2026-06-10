<?php
    include '../db.php';
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM consultation WHERE consulationID = $id");
    header("Location: view.php");


?>