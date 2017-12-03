<?php
require('connect.php');

$id = $_GET['id'];

if (isset($_POST['submit'])) {
	$editcc = $_POST['tennhacc'];

	$sql= "UPDATE nhacungcap SET tennhacungcap = '$editcc' WHERE id=$id";

	$conn->exec($sql);

header('location: showcc.php');
}
?>