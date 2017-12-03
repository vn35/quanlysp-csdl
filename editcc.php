<?php 
require('connect.php');

$id = $_GET['id'];
$sql = "SELECT * FROM nhacungcap WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetch();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Danh Mục Sản Phẩm</title>
 </head>
 <body>
 	<table border="1">
 	<H3>Thay Đổi Thông Tin Sản Phẩm</H3>
	<form action="updatecc.php?id=<?php echo $result['id']; ?>" method="post">
		<table>
			<tr>
				<td>Tên Sản Phẩm</td>
				<td><input type="text" name="tennhacc" value="<?php echo $result['tennhacungcap']; ?>"></td>
				<td><input type="submit" name="submit" value="Duyệt"></td>
			</tr>

 		<td> <a href="from.php">Back</a></td>
 	</table>
 	</form>>
 </body>
 </html>