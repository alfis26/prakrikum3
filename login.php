
<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

if($email == "syifaahmad609@gmail.com" && $password == "qwerty" ){
    $_SESSION ['login'] = true;
    //echo "<b>login berhasil</b>
    header('location: http://localhost/prakrikum3/dashboard.php');
}else {
     header('location: http://localhost/prakrikum3/index.php?error=Login Gagal ');
    
}

