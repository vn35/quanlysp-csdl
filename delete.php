<?php 
require ('connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM sanpham WHERE id=$id";
$conn->exec($sql);



header("location: show.php");
 ?>

<?php 
require ('connect.php');

$iddanhmuc = $_GET['id'];
$sql1 = "DELETE FROM danhmuc WHERE id=$iddanhmuc";
$conn->exec($sql1);

?>