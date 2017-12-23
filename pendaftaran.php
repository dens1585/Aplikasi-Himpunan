<h1 align="center"> Form Pendaftaran </h1>
<h1 align="center"> Kegiatan Himpunan </h1>
<form action="simpan.php" method="POST" />
<table align="center">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" /></td> 
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="jurusan" /> *Informatika/Sipil/Arsitek/Elektro</td> 
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tmp" /></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><select name="hari">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>8</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>
			<select name="bulan">
				<option>Januari</option>
				<option>Februari</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>September</option>
				<option>Oktober</option>
				<option>November</option>
				<option>Desember</option>
			</select>
			<select name="tahun">
				<option>2017</option>
				<option>2016</option>
				<option>2015</option>
				<option>2014</option>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
				<option>2007</option>
				<option>2006</option>
				<option>2005</option>
				<option>2004</option>
				<option>2003</option>
				<option>2002</option>
				<option>2001</option>
				<option>2000</option>
				<option>1999</option>
				<option>1998</option>
				<option>1997</option>
				<option>1996</option>
			</select>
			
		</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
			</select>	
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jk" value="L">Pria
			<input type="radio" name="jk" value="P">Wanita
		</td>
	</tr>
	<tr>
		<td style="vertical-align:text-top">Hobby</td>
		<td style="vertical-align:text-top">:</td>
		<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<br/>
			<input type="checkbox" name="hobi[]" value="Sepak Bola">Sepak Bola<br/>
			<input type="checkbox" name="hobi[]" value="Mancing">Mancing<br/>
			<input type="checkbox" name="hobi[]" value="Basket">Basket<br/>
			<input type="checkbox" name="hobi[]" value="Gaming">Maen Game<br/>
			<input type="checkbox" name="hobi[]" value="Ngoding">Ngoding<br/>
			<input type="checkbox" name="hobi[]" value="Badminton">Badminton<br/>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea cols="60" rows="5" name="alamat" /></textarea></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="Daftar"> 
		<input type="reset" value="Batal"></td>
	</tr>
</table>
</form>