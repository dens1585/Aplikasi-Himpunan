<?php include "koneksi.php";?>
<h1><center>List Biodata Peserta</h1></center>
<table border="1" align="center">
	<tr align="center">
		<td>NO</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Jurusan</td>
		<td>Tempat Tanggal Lahir</td>
		<td>Agama</td>
		<td>Jenis Kelamin</td>
		<td>Hobby</td>
		<td>Alamat</td>
		<td>Action</td>
	</tr>

<?php
	$NO=1;
	$query = mysql_query("SELECT * FROM biodata");
	while ($data = mysql_fetch_array($query)) {
?>		
		<tr align="center">
		<td><?php echo $NO; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['jurusan']; ?></td>
		<td><?php echo $data['tmp_lahir'].",".$data['tgl_lahir']; ?></td>
		<td><?php echo $data['agama']; ?></td>
		<td><?php echo $data['jk']; ?></td>
		<td><?php echo $data['hobi']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td>
			<a href="delete.php?kode=<?php echo $data['no'];?>"> <input type="button" value="Delete"/> </a>
			<a href="update.php?kode=<?php echo $data['no'];?>"> <input type="button" value="Update"/> </a>
		</td>
	</tr>
		
<?php $NO=$NO+1; } ?>
</table>


<center><a href="pendaftaran.php"> Kembali ke Pendaftaran </a></center>