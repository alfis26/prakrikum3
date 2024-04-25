
<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$umur = $_POST["umur"];
if($email == "syifaahmad609@gmail.com" && $password == "qwerty" && $umur >= 14 && $umur <= 44){
    $_SESSION ['login'] = true;
    //echo "<b>login berhasil</b>
    header('location: http://localhost/prakrikum3/dashboard.php');
}else {
     header('location: http://localhost/prakrikum3/index.php?error=Login Gagal ');
    
}

