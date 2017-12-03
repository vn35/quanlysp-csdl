<?php 
require ('connect.php');

$sql = "SELECT * FROM sanpham";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();



function danhmuc($id) {
	include ('connect.php');

	$sql = "SELECT * FROM danhmuc WHERE id=$id";
	$name = $conn->prepare($sql);
	$name->execute();
	$result = $name->fetch();
	return $result['tendanhmuc'];
}

function nhacungcap($id) {
	include ('connect.php');

	$sql = "SELECT * FROM nhacungcap WHERE id=$id";
	$name = $conn->prepare($sql);
	$name->execute();
	$result = $name->fetch();
	return $result['tennhacungcap'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Danh Sách Sản Phẩm</title>
	<style>
		img {
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
<ul class="nav nav-pills">
  		<li class="active"><a href="show.php">HOME</a>
  		<li><a href="from.php">Thêm Sản Phẩm</a></li>
  		<li><a href="showdm.php">Danh Mục</a></li>
  		<li><a href="showcc.php">Nhà Cung Cấp</a></li>
	</ul>
	
	<h3>Danh Sách Sản Phẩm</h3>
	<table class="table table-hover">
		<tr>
			<th>Tên Sản Phẩm</th>
			<th>Giá Sản Phẩm</th>
			<th>Danh Mục</th>
			<th>Nhà Cung Cấp</th>
			<th>Ảnh</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($result as $key => $value) { ?>
			<tr>
				<td><?php echo $value['tensanpham']; ?></td>
				<td><?php echo $value['giasanpham']; ?></td>
				<td><?php echo danhmuc($value['danhmucID']); ?></td>
				<td><?php echo nhacungcap($value['nhacungcapID']); ?></td>
				<td><img src="<?php echo $value['anh']; ?>"></td>
				<td>
					<a class="glyphicon glyphicon-pencil" href="edit.php?id=<?php echo $value['id']; ?>"></a>
					<a class="glyphicon glyphicon-remove" href="delete.php?id=<?php echo $value['id']; ?>"></a>
				</td>

			</tr>
		<?php } ?>
	</table>
</body>
</html>