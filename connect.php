<?php 
try {
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbName = 'quanlysanpham';


	$conn = new PDO ("mysql:host=$servername; dbname=$dbName", $username, $password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
	echo "Lỗi Kết Nối" . $e->getMessage();
}
 ?>