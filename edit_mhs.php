<h3>Form Edit Data Mahasiswa</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form method="post"	action="">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="txtnim" value="<?php echo $e['nim']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="txtNama" value="<?php echo $e['nama_mhs']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtKelamin">
					<option value="<?php echo $e['jk']; ?>"><?php echo $e['jk']; ?></option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="txtAsal" value="<?php echo $e['asal']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE mahasiswa SET nama_mhs='$_POST[txtNama]',
														jk='$_POST[txtKelamin]',
														asal='$_POST[txtAsal]'
												WHERE nim='$_POST[txtnim]'");

	if($update){
		header('location:data_mhs.php');
	}else{
		echo "Gagal mengupdate data...";
	}
}
?>