<?php
// memanggil file koneksi untuk menghubungkan ke database
include_once("koneksi.php");
 
// digunakan untuk menampilkan datapegawai dengan id yang urut
$result = mysqli_query($koneksi, "SELECT * FROM datapegawai ORDER BY id DESC");
?>
<html>
<head>    
    <title>Data Pegawai</title>
</head>
<body>
<a href="tambah.php">Tambah</a><br/><br/>
    <table width='80%' border=1>
    <tr>
        <th>Nomor Pegawai</th><th>Name</th> <th>Email</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($pegawai = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$pegawai['nomor_peg']."</td>";
        echo "<td>".$pegawai['nama']."</td>";
        echo "<td>".$pegawai['email']."</td>";
        echo "<td>".$pegawai['alamat']."</td>";    
        echo "<td><a href='update.php?id=$pegawai[id]'>Edit</a> | <a href='hapus.php?id=$pegawai[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>