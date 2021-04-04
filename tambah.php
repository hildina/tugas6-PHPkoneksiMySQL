<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Kembali</a>
	<br/><br/>
 	<!-- untuk menginputkan data -->
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nomor Pegawai</td>
				<td><input type="number" name="nomor_peg"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// mengecek isi dari inputan form diatas
	if(isset($_POST['Submit'])) {
		$nopeg = $_POST['nomor_peg'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		
		// memanggil file koneksi
		include_once("koneksi.php");
				
		// menambahkan inputan ke database
		$result = mysqli_query($koneksi, "INSERT INTO datapegawai(nomor_peg,nama,email,alamat) VALUES('$nopeg','$nama','$email','$alamat')");
		
		echo "data pegawai telah tertambah <a href='index.php'>Lihat Data Pegawai</a>";
	}
	?>
</body>
</html>