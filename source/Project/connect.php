<?php
	$con = mysqli_connect('localhost','root','','thitoeic');
	mysqli_set_charset($con, 'utf8');
	if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
