<?php 
require ('connect.php');

$id = $_GET['id'];

if (isset($_POST['submit'])) {
	$tensanpham = $_POST['tensanpham'];
	$giasanpham = $_POST['giasanpham'];
	$danhmuc = $_POST['danhmuc'];
	$nhacungcap = $_POST['nhacungcap'];

	$sql = "UPDATE sanpham SET tensanpham = '$tensanpham', giasanpham = '$giasanpham', danhmuc = '$danhmuc', nhacungcap = '$nhacungcap' WHERE id = $id";
	$conn->exec($sql);


header("location: show.php");
}
 ?>

