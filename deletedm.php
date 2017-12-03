<?php 
require ('connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM danhmuc WHERE id=$id";
$conn->exec($sql);

header("location: showdm.php");
?>