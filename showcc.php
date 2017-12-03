<?php 
require 'connect.php';

$sql_2 = "SELECT * FROM nhacungcap";
$stmt2 = $conn->prepare($sql_2);
$stmt2->execute();
$stmt2->setFetchMode(PDO::FETCH_ASSOC);
$result2 = $stmt2->fetchAll();

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Tên Nhà Cung Cấp</title>
</head>
<body>
		<ul class="nav nav-pills">
  		<li class="active"><a href="show.php">HOME</a>
  		<li><a href="from.php">Thêm Sản Phẩm</a></li>
  		<li><a href="showdm.php">Danh Mục</a></li>
  		<li><a href="showcc.php">Nhà Cung Cấp</a></li>
	</ul>
	<table class="table table-hover">
 		<tr>
 		<th>ID</th>
 		<th>Danh Mục</th>
 		<th>Actions</th>
 		</tr>
 		<?php foreach ($result2 as $key => $value) { ?>
 			<tr>
 				<td><?php echo $value['id']; ?></td>
 				<td><?php echo $value['tennhacungcap']; ?></td>
 				<td>
 					<a class="glyphicon glyphicon-pencil" href="editcc.php?id=<?php echo $value['id']; ?>"></a>
					<a class="glyphicon glyphicon-remove" href="deletecc.php?id=<?php echo $value['id']; ?>"></a>
 				</td>
 			</tr>

 		<?php } ?>
 		
 	</table>
</body>
</html>