<?php
// memanggil file koneksi
include_once("koneksi.php");
 
// untuk menampilkan id yang akan dihapus di url
$id = $_GET['id'];
 
// digunakan untuk menghapus data pegawai berdasarkan id yang dipilih
$result = mysqli_query($koneksi, "DELETE FROM datapegawai WHERE id=$id");
 
// redirect digunakan setelah isi id tersebut sudah terhapus
header("Location:index.php");
?>