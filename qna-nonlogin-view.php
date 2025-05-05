<?php
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya & Jawab | Tanya Si Kakek</title>
    <link rel="stylesheet" href="nonlogin-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <nav>
        <div class="logo-container">
            <img src="img/logo-white.png" alt="logo" class="logo">
        </div>
        <div id="menu-icon" class="menu-icon">
            <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="hidden">
            <li>
                <a href="/beranda.php">Beranda</a>
            </li>
            <li>
                <a href="/q&a.php">Tanya & Jawab</a>
            </li>
            <li>
                <a href="#">Cerita Kakek</a>
            </li>
        </ul>
        <div class="profile-section">
            <i class="fa fa-bell notification-icon">
                <span class="badge"></span>
            </i>
            <div class="login-button">
                <div class="btn">
                    <a href="login.php" class="login-btn">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>Punya Pertanyaan Seputar<br>Kehidupan Rumah Tangga?<br>Tanya Si Kakek</h1>
            <p>Cari jawaban dari pengalaman dan kebijaksanaan orang orang terdahulu</p>
            <div class="search-box">
                <form action="">
                    <input type="text" name="search" id="srch" placeholder="Apa yang ingin kamu cari?">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="hero-image">
            <img src="img/cucu-kakek.png" alt="Ilustrasi Kakek">
        </div>
    </section>