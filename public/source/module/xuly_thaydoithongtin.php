<?php
	include "../include/connect.php";
	$hoten = isset($_GET['hoten'])?$_GET['hoten']:"";
	$email = isset($_GET['email'])?$_GET['email']:"";
	$sdt = isset($_GET['sdt'])?$_GET['sdt']:"";
	$diachi = isset($_GET['diachi'])?$_GET['diachi']:"";
	$id_user=$_SESSION['userdangnhap']['iduser'];
	echo "$iduser<br>$hoten<br>$email<br>$sdt<br>$diachi";
	$sql_update="update tbthanhvien set hoten = '$hoten', email = '$email', sdt = $sdt, diachi = '$diachi' where iduser='$id_user'";
	$o->query($sql_update);
	header('location:../qltn.php');
?>