<?php
include 'koneksi.php';
    $Userlogin = $_POST['Usr'];
    $paslogin = $_POST['Pw'];
    $query = "SELECT Username,Password,Saldo FROM User WHERE Username = ? AND Password = ? ";
    $psmt = mysqli_prepare($konek,$query);
    mysqli_stmt_bind_param($psmt,'ss',$Userlogin ,$paslogin);
    mysqli_stmt_execute($psmt);
    $hasil = mysqli_stmt_get_result($psmt);
     while ($data = mysqli_fetch_array($hasil)){
            $userDb = $data['Username'];
            $passDb = $data['Password'];
            If($Userlogin == $userDb && $passDb == $passDb){
                echo "<script>alert('Login Berhasil')</script>";
            
            }else {
                echo "<script>alert('Login Gagal')</script>";
            }
     }