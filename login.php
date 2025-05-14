<?php
require 'function.php'; 

if(isset($_SESSION['log']) && $_SESSION['log'] == 'True'){
    header('location:beranda.php');
    exit();
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($con, "SELECT * FROM user WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        if($password === $row['password']) {
            $_SESSION['log'] = 'True';
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['poin'] = $row['poin'];
            
            header("location:beranda.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }
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
            
            <?php if(isset($error)): ?>
            <div class="message error">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
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
                    <button type="submit" name="login" class="btn submit">Login</button>
                </div>
                <div class="daftar-container">
                    <p>Belum punya akun? <a href="register.php" class="link-daftar">Daftar sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>