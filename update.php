<?php 

include "koneksi.php";
if(isset($_GET['kode']))
	$xno = $_GET['kode'];
else
	$xno = 0;
$query = mysql_query("SELECT * FROM biodata WHERE no='$xno'");
$data = mysql_fetch_array($query);
$tgl_lahir = explode("-",$data['tgl_lahir']);
$hobies = explode(",",$data['hobi']);
function getCheckedItem($input,$hobies){
	for($i = 0; $i<count($hobies); $i++){
		if($hobies[$i]==$input)
			echo "checked";
		else
			echo "";
	}
}
 ?>
 <?php getCheckedItem("Membaca",$hobies); ?>
 
<form action="ubah.php" method="POST" />
<table align="center">
	<tr>
		<td>NO</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $data['no'];?>" readonly="readonly"/></td> 
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" value="<?php echo $data['nim'];?>"/></td> 
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>"/> *Informatika/Sipil/Arsitek/Elektro</td> 
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tmp" value="<?php echo $data['tmp_lahir'];?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><select name="hari">
				<option <?php echo ($tgl_lahir[0] == '1')?"selected":"" ?> >1</option>
				<option <?php echo ($tgl_lahir[0] == '2')?"selected":"" ?> >2</option>
				<option <?php echo ($tgl_lahir[0] == '3')?"selected":"" ?> >3</option>
				<option <?php echo ($tgl_lahir[0] == '4')?"selected":"" ?> >4</option>
				<option <?php echo ($tgl_lahir[0] == '5')?"selected":"" ?> >5</option>
				<option <?php echo ($tgl_lahir[0] == '6')?"selected":"" ?> >6</option>
				<option <?php echo ($tgl_lahir[0] == '7')?"selected":"" ?> >7</option>
				<option <?php echo ($tgl_lahir[0] == '8')?"selected":"" ?> >8</option>
				<option <?php echo ($tgl_lahir[0] == '9')?"selected":"" ?> >8</option>
				<option <?php echo ($tgl_lahir[0] == '10')?"selected":"" ?> >10</option>
				<option <?php echo ($tgl_lahir[0] == '11')?"selected":"" ?> >11</option>
				<option <?php echo ($tgl_lahir[0] == '12')?"selected":"" ?> >12</option>
				<option <?php echo ($tgl_lahir[0] == '13')?"selected":"" ?> >13</option>
				<option <?php echo ($tgl_lahir[0] == '14')?"selected":"" ?> >14</option>
				<option <?php echo ($tgl_lahir[0] == '15')?"selected":"" ?> >15</option>
				<option <?php echo ($tgl_lahir[0] == '16')?"selected":"" ?> >16</option>
				<option <?php echo ($tgl_lahir[0] == '17')?"selected":"" ?> >17</option>
				<option <?php echo ($tgl_lahir[0] == '18')?"selected":"" ?> >18</option>
				<option <?php echo ($tgl_lahir[0] == '19')?"selected":"" ?> >19</option>
				<option <?php echo ($tgl_lahir[0] == '20')?"selected":"" ?> >20</option>
				<option <?php echo ($tgl_lahir[0] == '21')?"selected":"" ?> >21</option>
				<option <?php echo ($tgl_lahir[0] == '22')?"selected":"" ?> >22</option>
				<option <?php echo ($tgl_lahir[0] == '23')?"selected":"" ?> >23</option>
				<option <?php echo ($tgl_lahir[0] == '24')?"selected":"" ?> >24</option>
				<option <?php echo ($tgl_lahir[0] == '25')?"selected":"" ?> >25</option>
				<option <?php echo ($tgl_lahir[0] == '26')?"selected":"" ?> >26</option>
				<option <?php echo ($tgl_lahir[0] == '27')?"selected":"" ?> >27</option>
				<option <?php echo ($tgl_lahir[0] == '28')?"selected":"" ?> >28</option>
				<option <?php echo ($tgl_lahir[0] == '29')?"selected":"" ?> >29</option>
				<option <?php echo ($tgl_lahir[0] == '30')?"selected":"" ?> >30</option>
				<option <?php echo ($tgl_lahir[0] == '31')?"selected":"" ?> >31</option>
			</select>
			<select name="bulan">
				<option <?php echo ($tgl_lahir[1] == 'Januari')?"selected":"" ?> >Januari</option>
				<option <?php echo ($tgl_lahir[1] == 'Februari')?"selected":"" ?> >Februari</option>
				<option <?php echo ($tgl_lahir[1] == 'Maret')?"selected":"" ?> >Maret</option>
				<option <?php echo ($tgl_lahir[1] == 'April')?"selected":"" ?> >April</option>
				<option <?php echo ($tgl_lahir[1] == 'Mei')?"selected":"" ?> >Mei</option>
				<option <?php echo ($tgl_lahir[1] == 'Juni')?"selected":"" ?> >Juni</option>
				<option <?php echo ($tgl_lahir[1] == 'Juli')?"selected":"" ?> >Juli</option>
				<option <?php echo ($tgl_lahir[1] == 'Agustus')?"selected":"" ?> >Agustus</option>
				<option <?php echo ($tgl_lahir[1] == 'September')?"selected":"" ?> >September</option>
				<option <?php echo ($tgl_lahir[1] == 'Oktober')?"selected":"" ?> >Oktober</option>
				<option <?php echo ($tgl_lahir[1] == 'November')?"selected":"" ?> >November</option>
				<option <?php echo ($tgl_lahir[1] == 'Desember')?"selected":"" ?> >Desember</option>
			</select>
			<select name="tahun">
				<option <?php echo ($tgl_lahir[2] == '2017')?"selected":"" ?> >2017</option>
				<option <?php echo ($tgl_lahir[2] == '2016')?"selected":"" ?> >2016</option>
				<option <?php echo ($tgl_lahir[2] == '2015')?"selected":"" ?> >2015</option>
				<option <?php echo ($tgl_lahir[2] == '2014')?"selected":"" ?> >2014</option>
				<option <?php echo ($tgl_lahir[2] == '2013')?"selected":"" ?> >2013</option>
				<option <?php echo ($tgl_lahir[2] == '2012')?"selected":"" ?> >2012</option>
				<option <?php echo ($tgl_lahir[2] == '2011')?"selected":"" ?> >2011</option>
				<option <?php echo ($tgl_lahir[2] == '2010')?"selected":"" ?> >2010</option>
				<option <?php echo ($tgl_lahir[2] == '2009')?"selected":"" ?> >2009</option>
				<option <?php echo ($tgl_lahir[2] == '2008')?"selected":"" ?> >2008</option>
				<option <?php echo ($tgl_lahir[2] == '2007')?"selected":"" ?> >2007</option>
				<option <?php echo ($tgl_lahir[2] == '2006')?"selected":"" ?> >2006</option>
				<option <?php echo ($tgl_lahir[2] == '2005')?"selected":"" ?> >2005</option>
				<option <?php echo ($tgl_lahir[2] == '2004')?"selected":"" ?> >2004</option>
				<option <?php echo ($tgl_lahir[2] == '2003')?"selected":"" ?> >2003</option>
				<option <?php echo ($tgl_lahir[2] == '2002')?"selected":"" ?> >2002</option>
				<option <?php echo ($tgl_lahir[2] == '2001')?"selected":"" ?> >2001</option>
				<option <?php echo ($tgl_lahir[2] == '2000')?"selected":"" ?> >2000</option>
				<option <?php echo ($tgl_lahir[2] == '1999')?"selected":"" ?> >1999</option>
				<option <?php echo ($tgl_lahir[2] == '1998')?"selected":"" ?> >1998</option>
				<option <?php echo ($tgl_lahir[2] == '1997')?"selected":"" ?> >1997</option>
				<option <?php echo ($tgl_lahir[2] == '1996')?"selected":"" ?> >1996</option>
			</select>
			
		</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><select name="agama" value="<?php echo $data['agama'];?>">
				<option <?php echo ($data['agama'] == 'Islam')?"selected":"" ?> >Islam</option>
				<option <?php echo ($data['agama'] == 'Kristen')?"selected":"" ?> >Kristen</option>
				<option <?php echo ($data['agama'] == 'Hindu')?"selected":"" ?> >Hindu</option>
				<option <?php echo ($data['agama'] == 'Budha')?"selected":"" ?> >Budha</option>
			</select>	
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jk" value="L" <?php 
			if ($data['jk']=='L') {
				echo "checked='checked'";
			}
		?>
		>Pria
			<input type="radio" name="jk" value="P" <?php 
			if ($data['jk']=='P') {
				echo "checked='checked'";
			}
		?>
		
		>Wanita
		</td>
	</tr>
	<tr value="<?php echo $data['hobi'];?>" />
		<td style="vertical-align:text-top">Hobby</td>
		<td style="vertical-align:text-top">:</td>
		<td><input type="checkbox" name="hobi[]" value="Membaca" <?php getCheckedItem("Membaca",$hobies); ?>>Membaca<br/> <checkbox>
			<input type="checkbox" name="hobi[]" value="Sepak Bola" <?php getCheckedItem("Sepak Bola",$hobies); ?>>Sepak Bola<br/>
			<input type="checkbox" name="hobi[]" value="Mancing" <?php getCheckedItem("Mancing",$hobies); ?>>Mancing<br/>
			<input type="checkbox" name="hobi[]" value="Basket" <?php getCheckedItem("Basket",$hobies); ?>>Basket<br/>
			<input type="checkbox" name="hobi[]" value="Gaming" <?php getCheckedItem("Gaming",$hobies); ?>>Maen Game<br/>
			<input type="checkbox" name="hobi[]" value="Ngoding" <?php getCheckedItem("Ngoding",$hobies); ?>>Ngoding<br/>
			<input type="checkbox" name="hobi[]" value="Badminton" <?php getCheckedItem("Badminton",$hobies); ?>>Badminton<br/>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea cols="60" rows="5" name="alamat" value="" /><?php echo $data['alamat'];?></textarea></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="Update"> <Button>
		<input type="reset" value="Batal"></td>
	</tr>
</table>
</form>
</table>