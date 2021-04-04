<?php
// memanggil file koneksi untuk menghubungkan ke database
include_once("koneksi.php");
 
// untuk mengecek pembaruan
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$nopeg=$_POST['nomor_peg'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
		
	// untuk update data pegawai
	$result = mysqli_query($koneksi, "UPDATE datapegawai SET nomor_peg='$nopeg',nama='$nama',email='$email',alamat='$alamat' WHERE id=$id");
	
	// redirect ke index jika sudah update
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
// digunakan untuk memilih id untuk di tampilkan
$result = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE id=$id"); 
while($pegawai = mysqli_fetch_array($result))
{
	$nopeg= $pegawai['nomor_peg'];
	$nama = $pegawai['nama'];
	$email = $pegawai['email'];
	$alamat = $pegawai['alamat'];
}
?>
<html>
<head>	
	<title>Edit Data Pegawai</title>
</head>
 
<body>
	<a href="index.php">Kembali</a>
	<br/><br/>
	<!-- digunakan untuk mengedit dari data sebelumnya -->
	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Nomor Pegawai</td>
				<td><input type="number" name="nomor_peg" value=<?php echo $nopeg;?>></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>