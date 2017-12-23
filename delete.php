<?php
include "koneksi.php";

$xno = $_GET['kode'];

$sql = "DELETE FROM biodata WHERE no='$xno'";

$query = mysql_query($sql);

if ($query){
		header('location:view.php?info=success&action=delete');
	} else {
		header('location:view.php?info=error&action=delete');
	}
?>