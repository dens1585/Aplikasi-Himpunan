<?php
	include "koneksi.php";
	$xnim 		= $_POST['nim'];
	$xnama 		= $_POST['nama'];
	$xjrs 		= $_POST['jurusan'];
	$xtmp 		= $_POST['tmp'];
	$xtgl 		= $_POST['hari']."-".$_POST['bulan']."-".$_POST['tahun'];
	$xagama 	= $_POST['agama'];
	$xjk 		= $_POST['jk'];
	$xhobi 		= implode (",",$_POST['hobi']);
	$xalm 		= $_POST['alamat'];
	
	$sql = "INSERT INTO biodata (nim,nama,jurusan,tmp_lahir,tgl_lahir,agama,jk,hobi,alamat) VALUES
			('$xnim','$xnama','$xjrs','$xtmp','$xtgl','$xagama','$xjk','$xhobi','$xalm')";
			
	$query = mysql_query($sql);
	
	if ($query){
		header('location:view.php');
	} else {
		header('location:pendaftaran.php');
	}
?>

<a href="pendaftaran.php"> Kembali Daftar </a>