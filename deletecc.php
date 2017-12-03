<?php 
require ('connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM nhacungcap WHERE id=$id";
$conn->exec($sql);

header("location: showcc.php");
?>