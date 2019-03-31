<?php

//Ket noi csdl
$o = new PDO("mysql:host=localhost; dbname=quanlypizza1", "root", "");
//Hien thi tieng viet co dau
$o->query("set names 'utf8' ");
$id = $_GET['id'];
echo "id la: $id";
$sql="insert into tbgiohang(`iduser`,`MATHUCAN`,`SOLUONG`) values('quan',$id,1)";
echo $sql;
$o->query($sql);
header('location:../index.php');