<?php 
include 'koneksi.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama_lengkap = $_POST['name'];
    $username = $_POST['username'];
    $passwords = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nohp = $_POST['Nohp'];
if ($nama_lengkap != null && $username != null){
    $query = 'INSERT INTO User(nama_user,Username,Password,No_Hp)  VALUES (?,?,?,?)';
    $prepareStatement = mysqli_prepare($konek, $query);
     
    mysqli_stmt_bind_param($prepareStatement,"ssss",$nama_lengkap,$username,$password,$nohp);
    if (mysqli_stmt_execute($prepareStatement) != null){
            echo "<script>alert('Berhasil daftar')</script>";
            header("Location: insert.php");
            exit();
        
    }else {
        mysqli_error($konek);
    }

}   
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar </title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
    <div class="container">
    <form action="insert.php" method="post" class="forms">
        <input type="text" name="name" placeholder="Nama anda">
        <input type="text" name="username" placeholder="UserName anda">
        <input type="password" name="password" placeholder="password anda">
        <input type="tel" name="Nohp" placeholder="No Hp ">
        <button type="submit">Daftar </button>
        <a href="login.php">Sudah punya akun? Login</a>
    </form>
    </div>
</body>
</html>