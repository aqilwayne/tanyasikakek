<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-style.css">
    <title>Register | Tanya Si Kakek</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <?php
            
            include("php/config.php");
            if(isset(($_POST['submit']))){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con, "SELECT email FROM user WHERE email = '$email'");

                if(mysqli_num_rows($verify_query) !=0 ){
                    echo "<div class = 'message>
                            <p>Email ini sudah pernah digunakan, coba yang lain</p>
                          </div><br>";
                    echo "<a href ='javascript:self.history.back()'><button class='btn'>Kembali</button></a>";
                }
                else{

                    mysqli_query($con, "INSERT INTO user(Username, Email, Password, poin) VALUES('$username', '$email', '$password', 0)") or die("Query Error: " . mysqli_error($con));

                    echo "<div class = 'message>
                            <p>Registrasi berhasil</p>
                          </div> <br>";
                    echo "<a href ='login.php'><button class='btn'>Masuk Sekarang</button></a>";

                }
            }else{

            ?>
            <img src="img/logo.png" alt="Tanya Si Kakek" class="logo-kakek">
            <h2 class="judul-login">Selamat Datang di Tanya Si Kakek</h2>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
            
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Daftar" required>
                </div>
                <div class="daftar-container">
                    <p>Sudah punya akun? <a href="login.php" class="link-daftar">Masuk</a></p>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>