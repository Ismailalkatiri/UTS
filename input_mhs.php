<h3>Form Input Data Mahasiswa</h3>
<hr>
<form method="post"	action="">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="txtnim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="txtNama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtKelamin">
					<option value="">- Pilih -</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="txtAsal"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO mahasiswa (nim,nama_mhs,jk,asal)
		VALUES('$_POST[txtnim]','$_POST[txtNama]','$_POST[txtKelamin]','$_POST[txtAsal]')");

	if($simpan){
		header('location:data_mhs.php');
	}else{
		echo "Gagal menyimpan data...";
	}
}
?>