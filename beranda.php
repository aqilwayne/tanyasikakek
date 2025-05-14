<?php
session_start();
$isLoggedIn = isset($_SESSION['log']) && $_SESSION['log'] === 'True';

$username = '';
if ($isLoggedIn && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Tanya Si Kakek</title>
    <link rel="stylesheet" href="beranda-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    
    <nav>
        <div class="logo-container">
            <img src="img/logo.png" alt="logo" class="logo">
        </div>
        <div class="search-box">
            <form action="search.php" method="GET">
                <input type="text" name="search" id="srch" placeholder="Apa yang kamu cari?">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div id="menu-icon" class="menu-icon">
            <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="nav-menu">
            <li>
                <a href="beranda.php" class="<?php echo ($currentPage == 'beranda.php') ? 'active' : ''; ?>">Beranda</a>
            </li>
            <li>
                <?php if($isLoggedIn): ?>
                    <a href="qna-login-view.php" class="<?php echo ($currentPage == 'qna-login-view.php') ? 'active' : ''; ?>">Tanya & Jawab</a>
                <?php else: ?>
                    <a href="qna-nonlogin-view.php" class="<?php echo ($currentPage == 'qna-nonlogin-view.php') ? 'active' : ''; ?>">Tanya & Jawab</a>
                <?php endif; ?>
            </li>
            <li>
                <a href="cerita.php" class="<?php echo ($currentPage == 'cerita-kakek.php') ? 'active' : ''; ?>">Cerita Kakek</a>
            </li>
        </ul>
        <div class="profile-section">
            <?php if($isLoggedIn): ?>
                <i class="fa fa-bell notification-icon">
                    <span class="badge"></span>
                </i>
                <?php if (isset($_SESSION['username'])): ?>
            <div class="profile-container" id="profile-container">
                <img src="img/user.png" alt="Profile" class="profile-img">
                <div class="profile-info">
                    <span class="profile-text">Profil</span>
                    <span class="profile-name">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </span>
                </div>
                <div class="profile-dropdown" id="profile-dropdown">
                    <ul>
                        <li><a href="profile.php"><i class="fa fa-user"></i> Lihat Profil</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <a href="login.php" class="btn-login">Login</a>
        <?php endif; ?>

            <?php else: ?>
                <a href="login.php" class="login-button">Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>Punya Pertanyaan?<br> Tanya Si Kakek</h1>
            <p>Tempat berbagi kisah dan kebijaksanaan dari generasi ke generasi. Temukan perspektif unik, solusi tradisional, dan pengalaman hidup dari mereka yang telah melewati berbagai zaman.</p>
            <a href="#" class="cta-button">Tanyakan Sesuatu</a>
        </div>
        <div class="hero-image">
            <img src="img/kakek1.png" alt="Ilustrasi Kakek">
        </div>
    </section>

    <section class="feature-section">
        <div class="feature-image">
            <img src="img/nenek-kakek.png" alt="Ilustrasi Kakek dan Nenek">
        </div>
        <div class="feature-text">
            <h2>Apa yang bisa kamu temukan di sini?</h2>
            <ul>
                <li><i class="fa fa-check-circle"></i> Diskusi menarik tentang kehidupan zaman dulu vs sekarang.</li>
                <li><i class="fa fa-check-circle"></i> Jawaban dari berbagai pertanyaan seputar kehidupan, tradisi, dan kebijaksanaan lama.</li>
                <li><i class="fa fa-check-circle"></i> Artikel inspiratif dan cerita dari kakek nenek yang penuh makna.</li>
                <li><i class="fa fa-check-circle"></i> Tantangan unik untuk mencoba gaya hidup zaman dulu.</li>
            </ul>
        </div>
    </section>

    <section class="trending-section">
        <h2>Trending Pertanyaan Hari Ini</h2>
        <div class="trending-container">
            <div class="trending-card">
                <h3>Benarkah makanan tradisional lebih sehat dibanding makanan modern?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 120 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Bagaimana cara orang zaman dulu menyelesaikan konflik rumah tangga?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 80 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Apakah kehidupan dulu lebih bahagia daripada sekarang?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 95 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Seberapa penting peran keluarga besar dalam kehidupan sehari-hari?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 110 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Apakah media sosial lebih banyak memberikan dampak positif atau negatif?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 140 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Bagaimana cara menghadapi tekanan dari lingkungan sosial?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 90 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Apa manfaat dari hidup minimalis dan bagaimana cara memulainya?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 75 Komentar</span>
            </div>
            <div class="trending-card">
                <h3>Apakah pendidikan online bisa menggantikan pendidikan tradisional?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate elit risus, id mattis ipsum...</p>
                <span><i class="ph ph-chat-circle"></i> 130 Komentar</span>
            </div>
        </div>
        <button class="see-more">Lihat Semua</button>
    </section>
    
    <!-- Section Artikel & Cerita Pilihan -->
    <section class="artikel-cerita">
        <div class="artikel-header">
            <h2>Artikel & Cerita Pilihan</h2>
            <a href="#" class="selengkapnya">Selengkapnya →</a>
        </div>
        <div class="artikel-container">
            <div class="artikel-card">
                <img src="img/img1.png" alt="Artikel 1">
                <h3>Bagaimana Orang Dulu Menjalin Hubungan Tanpa Chatting?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>1 April 2025</span>
            </div>
            <div class="artikel-card">
                <img src="img/img2.png" alt="Artikel 2">
                <h3>Kisah Inspiratif Kakek Budi: Hidup di Desa Tanpa Listrik</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>31 Maret 2025</span>
            </div>
            <div class="artikel-card">
                <img src="img/img3.png" alt="Artikel 3">
                <h3>Nenek Moyang Kita Jauh Lebih Mandiri, Ini Alasannya!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>3 April 2025</span>
            </div>
            <div class="artikel-card">
                <img src="img/img4.png" alt="Artikel 4">
                <h3>Bagaimana Cara Hidup Sederhana Tapi Tetap Bahagia?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>15 Maret 2025</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <h2>Tanya Si Kakek</h2>
                <p>Tanya si Kakek adalah platform diskusi lintas generasi untuk berbagi pengalaman...</p>
                <div class="social-icons">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
                </div>
            </div>
            <div class="nav-quick">
                <h3>Navigasi Cepat</h3>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Forum Diskusi</a></li>
                    <li><a href="#">Tanya & Jawab</a></li>
                    <li><a href="#">Dulu Vs Sekarang</a></li>
                    <li><a href="#">Cerita Kakek</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="beranda-script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuIcon = document.getElementById('menu-icon');
            const menuList = document.getElementById('menu-list');
            
            menuIcon.addEventListener('click', function() {
                menuList.classList.toggle('hidden');
            });

            const profileContainer = document.getElementById('profile-container');
            const profileDropdown = document.getElementById('profile-dropdown');
            
            if (profileContainer) {
                profileContainer.addEventListener('click', function(e) {
                    e.stopPropagation();
                    profileDropdown.classList.toggle('show');
                });

                document.addEventListener('click', function() {
                    if (profileDropdown.classList.contains('show')) {
                        profileDropdown.classList.remove('show');
                    }
                });
            }
        });
    </script>
</body>
</html>