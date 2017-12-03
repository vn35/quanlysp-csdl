<?php 
require('connect.php');


$sql_1 = "SELECT * FROM danhmuc";
$stmt1 = $conn->prepare($sql_1);
$stmt1->execute();
$stmt1->setFetchMode(PDO::FETCH_ASSOC);
$result1 = $stmt1->fetchAll();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<title>Danh Mục Sản Phẩm</title>
 </head>
 <body>
 		<ul class="nav nav-pills">
  		<li class="active"><a href="show.php">HOME</a>
  		<li><a href="from.php">Thêm Sản Phẩm</a></li>
  		<li><a href="showdm.php">Danh Mục</a></li>
  		<li><a href="showcc.php">Nhà Cung Cấp</a></li>
	</ul>
 	<h3>Danh Mục Sản Phẩm</h3>
 	<table class="table table-condensed">
 		<tr>
 		<th>ID</th>
 		<th>Danh Mục</th>
 		<th>Actions</th>
 		</tr>
 		<?php foreach ($result1 as $key => $value) { ?>
 			<tr>
 				<td><?php echo $value['id']; ?></td>
 				<td><?php echo $value['tendanhmuc']; ?></td>
 				<td>
 					<a class="glyphicon glyphicon-pencil" href="editdm.php?id=<?php echo $value['id']; ?>"></a>
					<a class="glyphicon glyphicon-remove" href="deletedm.php?id=<?php echo $value['id']; ?>"></a>
 				</td>
 			</tr>

 		<?php } ?>

 	</table>
 </body>
 </html>