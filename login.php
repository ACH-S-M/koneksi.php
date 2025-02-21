<?php
include 'koneksi.php';

if(isset($_POST['Usr']) && isset($_POST['Pw'])) {
    $Userlogin = $_POST['Usr'];
    $paslogin = $_POST['Pw'];
    
    $query = "SELECT Username, Password, Saldo,roles FROM User WHERE Username = ? AND Password = ?";
    $psmt = mysqli_prepare($konek, $query);
    
    if ($psmt) {
        mysqli_stmt_bind_param($psmt, 'ss', $Userlogin, $paslogin);
        mysqli_stmt_execute($psmt);
        $hasil = mysqli_stmt_get_result($psmt);
        if ($data = mysqli_fetch_array($hasil)) {
            $roles = $data['roles'];
            if ($roles == 'User'){
                header("Location: user.php");
                exit();
            }else {
                header("Location: admin.php");
                exit();
            }
        } else {
            echo "<script>alert('Login Gagal')</script>";
        }
    } else {
        echo "Error: Query tidak bisa diproses!";
    }
} else {
    echo "Silakan masukkan username dan password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <H1>Login Disini</H1>
    <div class="container">
        <form action="login.php" method="post">
            <input type="text" name="Usr" placeholder="Username" >
            <input type="password" name="Pw" placeholder="password" >
            <Button type="submit">Login</Button>
        </form>
        <a href="insert.php">Belum punya akun? Daftar Disini</a>
    </div>
</body>
</html>
