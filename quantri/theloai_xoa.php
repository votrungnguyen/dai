<?php
session_start();
require_once "../class/quantritin.php";
$qt = new quantritin;
$qt-> checkLogin();

$idTL = $_GET['idTL']; settype($idTL,"int");

if ($qt -> SoTinTrongTheLoai($idTL)>0)
{
	die("The loai $idTL có chứa loại tin nên bạn không xóa được");
}
?>