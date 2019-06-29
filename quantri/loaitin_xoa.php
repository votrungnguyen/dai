<?php
session_start();
require_once "../class/quantritin.php";
$qt = new quantritin;
$qt-> checkLogin ();
$idLT = $_GET['idLT']; settype($idLT,"int");
if ($qt->SoTinTrongLoaiTin($idLT>0))
{
die("Loai tin $idLT co chua tin nên bạn không xóa được");	
}
?>