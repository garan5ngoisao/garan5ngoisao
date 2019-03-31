<?php
//Ket noi csdl
$o = new PDO("mysql:host=sql206.byethost.com; dbname=b33_22902333_dbpizza", "b33_22902333", "0123456a");
//Hien thi tieng viet co dau
$o->query("set names 'utf8' ");
//khoi tao session
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = array();
