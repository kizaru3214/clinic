<?php
include "../db.php";
$id =$_GET["id"];
mysqli_query($conn, "DELETE FROM doctor WHERE docID = $id");
header("Location: view.php");

?>