<?php
//deklarasi variabel untuk nama server, username, password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//script membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//script memeriksa koneksi
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    //outputan data dari setiap barisan
    while($row = mysqli_fetch_assoc($result)){
        echo "kode:" . $row["kode"]. " - Negara" . 
        $row["negara"]. " ". $row["champion"]. "<br>";
    }  
} else {
    echo "0 result";
}
//untuk menutup koneksi
mysqli_close($conn);
?>
