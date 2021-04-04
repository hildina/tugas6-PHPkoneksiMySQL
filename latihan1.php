<html>
<head>
<title>Koneksi Database MySQL</title>
</head>
</html>
<body>
    <h1>Demo Koneksi Database MySQL</h1>
    <?php
    //script membuat koneksi
    $con = mysqli_connect("localhost","root","");
    //script untuk mengecek koneksi
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
        exit();
        }
    ?>
</body>