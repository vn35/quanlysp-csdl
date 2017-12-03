<?php 
require ('connect.php');


$id = $_GET['id'];
$sql = "SELECT * FROM sanpham WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetch();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Sản Phẩm</title>
</head>
<body>
	<H3>Thay Đổi Thông Tin Sản Phẩm</H3>
	<form action="update.php?id=<?php echo $result['id']; ?>" method="post">
		<table>
			<tr>
				<td>Tên Sản Phẩm</td>
				<td><input type="text" name="tensanpham" value="<?php echo $result['tensanpham']; ?>"></td>
			</tr>
			<tr>
				<td>Giá Sản Phẩm</td>
				<td><input type="text" name="giasanpham" value="<?php echo $result['giasanpham']; ?>"></td>
			</tr>
			<tr>
				<td>Danh Mục</td>
				<td><input type="text" name="danhmuc" value="<?php echo $result['danhmucID']; ?>"></td>
			</tr>
			<tr>
				<td>Nhà Cung Cấp</td>
				<td><input type="text" name="nhacungcap" value="<?php echo $result['nhacungcapID']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Nhập"></td>
			</tr>
		</table>
	</form>
</body>

