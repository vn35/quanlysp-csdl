<?php
require('connect.php');

$id = $_GET['id'];

if (isset($_POST['submit'])) {
	$editdm = $_POST['tendanhmuc'];

	$sql= "UPDATE danhmuc SET tendanhmuc = '$editdm' WHERE id=$id";

	$conn->exec($sql);

header('location: showdm.php');
}
?>