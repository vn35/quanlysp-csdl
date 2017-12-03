<?php 
require ('connect.php');

$sql = "SELECT * FROM sanpham
		INNER JOIN danhmuc ON sanpham.danhmucID = danhmuc.id
		INNER JOIN nhacungcap ON sanpham.nhacungcapID = nhacungcap.id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

$sql_1 = "SELECT * FROM danhmuc";
$stmt1 = $conn->prepare($sql_1);
$stmt1->execute();
$stmt1->setFetchMode(PDO::FETCH_ASSOC);
$result1 = $stmt1->fetchAll();

$sql_2 = "SELECT * FROM nhacungcap";
$stmt2 = $conn->prepare($sql_2);
$stmt2->execute();
$stmt2->setFetchMode(PDO::FETCH_ASSOC);
$result2 = $stmt2->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Nhập Dữ Liệu Sản Phẩm</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<style type="text/css">

		.A {
			border: 1px solid;
			float : left;
		}
		.B {
			border: 1px solid;
			float: left;
			margin-left: 10px;
		}

		.C {
			border: 1px solid;
			float: left;
			margin-left: 10px;
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
	<div class="wreaper">
		<div class="A">
			<H3>Nhập Dữ Liệu Thông Tin Sản Phẩm</H3>
			<form action="insert.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Tên Sản Phẩm</td>
						<td><input type="text" name="tensanpham"></td>
					</tr>
					<tr>
						<td>Giá Sản Phẩm</td>
						<td><input type="text" name="giasanpham"></td>
					</tr>
					<tr>
						<td>Danh Mục</td>
						<td>
							<select name="danhmuc">
							<?php foreach ($result1 as $key => $value) { ?>
								<option value="<?php echo $value['id'] ?>"> <?php echo $value['tendanhmuc']; ?></option>
							<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Nhà Cung Cấp</td>
						<td>
						<select name="nhacungcap">
							<?php foreach ($result2 as $key => $value) { ?>
								<option value="<?php echo $value['id'] ?>"> <?php echo $value['tennhacungcap']; ?></option>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td>Ảnh Sản Phẩm</td>
						<td><input type="file" name="avatar"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Nhập"></td>
						
					</tr>

				</table>
			</form>
		</div>




	<div class="B">
			<h3>Tạo Danh Mục Sản Phẩm </h3>
			<form action="insert.php" method="post">
				<div class="input-group">
				  <span class="input-group-addon">Danh Mục</span>
				  <input type="text" class="form-control" placeholder="Tên Danh Mục">
				  <input type="submit" name="submitb" value="Nhập">
				</div>
			</form>
		</div>




		<div class="C">
			<h3>Dữ Liệu Nhà Cung Cấp</h3>
			<form action="insert.php" method="post">
				<div class="input-group">
				  <span class="input-group-addon">Nhà Cung Cấp</span>
				  <input type="text" class="form-control" placeholder="Tên Nhà Cung Cấp">
				  <input type="submit" name="submitc" value="Nhập">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>
