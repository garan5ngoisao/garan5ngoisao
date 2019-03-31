<?php
if(!isset($_SESSION)) session_start();
if (!isset($_SESSION['userdangnhap']))
{
header("location:../module/signup.php");exit;

}
if (count($_SESSION['giohang'])<1)
{
header("location:../checkout.php");exit;

}
//
$id_user = $_SESSION['userdangnhap']['iduser'];

  $id_hoadon = time() ."_". $id_user;
  $ngaydat = Date("Y-m-d");
  $hoten  = $_POST['hoten'];
  $diachi =  $_POST['diachi'];
  $sdt =  $_POST['sdt'];
  $ghichu= $_POST['ghichu'];
  

  	$o = new PDO('mysql:host=localhost; dbname=quanlypizza1', 'root', '');
	$o->query("set names 'utf8' ");
	/*include "include/connect.php";*/
	$sql_ctgh ="insert into tbhoadon (idhoadon, iduser, ngaydat,tennguoinhan,diachinguoinhan,sdtnguoinhan, tinhtrang,ghichu) 
VALUES ('$id_hoadon','$id_user','$ngaydat','$hoten','$diachi',$sdt,'damua','ghichu')";

	$o->query($sql_ctgh);
	

	foreach ($_SESSION['giohang'] as $key => $value) {
		$sql_dh ="select * from thucankem where MATHUCAN='$key' ";
		$data_dh = $o->query($sql_dh);
		$arrDH = $data_dh->fetchAll();
		$id_sanpham = $key;
		$soluong = $value;
		$gia = $arrDH[0]['DONGIA'];
		echo "$gia";
		$sql ="insert into chitietgoidoan (idhoadon, MATHUCAN, SOLUONG, DONGIA) VALUES ('$id_hoadon', '$id_sanpham', $soluong, $gia)";
		$o->query($sql);
	}
	unset($_SESSION['giohang']);
	header("location:../hoadon.php?idhoadon=$id_hoadon");exit;
?>
