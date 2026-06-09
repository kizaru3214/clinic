<?php
include '../db.php';
$id =$_GET["id"];
mysqli_qiery("DELETE * FROM patient where patID = $id");
header("Location: view.php");

?>