<?php
	include "koneksi.php";
	$xno		= $_POST['id'];
	$xnim 		= $_POST['nim'];
	$xnama 		= $_POST['nama'];
	$xjrs 		= $_POST['jurusan'];
	$xtmp 		= $_POST['tmp'];
	$xtgl 		= $_POST['hari']."-".$_POST['bulan']."-".$_POST['tahun'];
	$xagama 	= $_POST['agama'];
	$xjk 		= $_POST['jk'];
	$xhobi 		= implode (",",$_POST['hobi']);
	$xalm 		= $_POST['alamat'];
	$sql = "UPDATE biodata SET nim='$xnim',nama='$xnama',jurusan='$xjrs',tmp_lahir='$xtmp',tgl_lahir='$xtgl',agama='$xagama',jk='$xjk',hobi='$xhobi',alamat='$xalm' WHERE no='$xno'";
			
	$query = mysql_query($sql);
	
	if ($query){
		header('location:view.php');
	} else {
		header('location:pendaftaran.php');
	}
?>
