<?php
include 'koneksi.php';
$Gambar = null;
$querySelect = "SELECT Judul_Buku,Author,Harga,ImgRes FROM Buku";
$hasil = mysqli_query($konek,$querySelect);
while ($data = mysqli_fetch_assoc($hasil)){
    $judulBuku = $data['Judul_Buku'];
    $author = $data['Author'];
    $Harga = $data['Harga'];
    $ImgResource = base64_encode( $data['ImgRes']);
    echo "
    <div class='container'>
        <div class='card'>
                <img src='data:image/jpeg;base64,$ImgResource'>
                    <div class='detail'>
                            <h3>$judulBuku</h3>
                            <B>$Harga</B>
                            <p>$author</p>
                            <Button>Beli</Button>
                    </div>
        </div>
    </div>";

}


  
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <style>
        
    </style>
</head>
<body>
    
</body>
</html>