<?php 
require ('connect.php');

if (isset($_POST['submit'])) {
	$tensanpham = $_POST['tensanpham'];
	$giasanpham = $_POST['giasanpham'];
	$danhmuc = $_POST['danhmuc'];
	$nhacungcap = $_POST['nhacungcap'];


	
	if (isset($_FILES['avatar'])) {
		if ($_FILES['avatar']['error'] > 0) {
			echo "File Upload Bị Lỗi";
		}else {	
			$test_input = $_FILES['avatar']['type'];
			if ($test_input == "image/jpeg"
				|| $test_input == "image/png"
				|| $test_input == "image/gif") {
				$current_date = "upload_category_".time();
			move_uploaded_file($_FILES['avatar']['tmp_name'], './images/'.$current_date. $_FILES['avatar']['name']);
			$url_img = './images/'.$current_date. $_FILES['avatar']['name'];
			} else {
				echo "chỉ cho phép định dạng ảnh (...JPG, JPEG, PNG, GIF.........)";
			}
		
		}
	} else {
		echo "Bạn chưa chọn file upload";
	}	
	

	$sql = "INSERT INTO sanpham (tensanpham, giasanpham, danhmucID, nhacungcapID, anh)
			VALUES ('$tensanpham', '$giasanpham', '$danhmuc', '$nhacungcap', '$url_img')";
	$conn->exec($sql);

	

}

if (isset($_POST['submitb'])) {
	$tabledanhmuc = $_POST['danhmucb'];

	$insert = "INSERT INTO danhmuc (tendanhmuc) VALUES ('$tabledanhmuc')";
	$conn->exec($insert);
}

if (isset($_POST['submitc'])) {
	$tablenhacungcap = $_POST['nhacungcapc'];


	$insetNhaCungCap = "INSERT INTO nhacungcap (tennhacungcap) VALUES ('$tablenhacungcap')";
	$conn->exec($insetNhaCungCap);
}


header("location: from.php");
 ?>


