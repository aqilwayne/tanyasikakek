<?php
require 'function.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung > 0){
        $_SESSION['log']='True';
        header("location:beranda.php");
    } else {
        echo("location:login.php");
    }
}

if(!isset($_SESSION['login'])){
}
else{
    header('location:beranda.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-style.css">
    <title>Login | Tanya Si Kakek</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <img src="img/logo.png" alt="Tanya Si Kakek" class="logo-kakek">
            <h2 class="judul-login">Selamat datang kembali!</h2>
            <form method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
            
                <div class="field">
                    <button type="submit" name="login">Login</button>
                </div>
                <div class="daftar-container">
                    <p>Belum punya akun? <a href="register.php" class="link-daftar">Daftar sekarang</a></p>
                </div>

            </form>
        </div>
    </div>
</body>
</html>