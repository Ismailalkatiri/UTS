<h3>Data Mahasiswa</h3>
<hr>
<a href="input_mhs.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama Mahasiswa</th>
		<th>JK</th>
		<th>Asal</th>
	</tr>

	<?php
	include "koneksi.php";
	$no=1;
	$sqlMhs = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY nim ASC");

	while($d = mysqli_fetch_array($sqlMhs)){
		echo "<tr>
			<td align='center'>$no</td>
			<td>$d[nim]</td>
			<td>$d[nama_mhs]</td>
			<td align='center'>$d[jk]</td>
			<td>$d[asal]</td>
			<td align='center'>
				<a href='edit_mhs.php?nim=$d[nim]'>Edit</a> | <a href='hapus_mhs.php?nim=$d[nim]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>

</table>