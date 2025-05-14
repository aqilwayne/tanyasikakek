<?php

$is_logged_in = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medium Clone</title>
    <link rel="stylesheet" href="cerita.css">
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
                <a href="cerita-kakek.php" class="<?php echo ($currentPage == 'cerita-kakek.php') ? 'active' : ''; ?>">Cerita Kakek</a>
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
    
    <div class="container">
        <main class="content">
            <article class="post">
                <div class="author-info">
                    <img src="img/user.png" alt="Author" class="author-img">
                    <div class="publication">RumahKita.id</div>
                    <div class="author-name">oleh Cynthia Egintha</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>Dapur Kecil, Cinta Besar: Menyatukan Hati Lewat Masakan Sehari-hari</h2>
                        <p>Temukan cara sederhana menjadikan dapur sebagai tempat penuh cinta.</p>
                    </div>
                    <div class="post-image">
                        <img src="https://asset2.morefurniture.id/NEWS/2024/4/Dapur%20Minimalis%20Modern%20Konsep%20Timeless%20Monokrom.jpg" alt="Article Image">
                    </div>
                </div>
                <div class="post-meta">
                    <div class="post-stats">
                        <div class="date">Jan 2025</div>
                    </div>
                    <div class="post-actions">
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="none" stroke="currentColor"></path>
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z" fill="none" stroke="currentColor"></path>
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>
            
            <article class="post">
                <div class="author-info">
                    <img src="img/user.png" alt="Author" class="author-img">
                    <div class="publication">FinansialSantuy.com</div>
                    <div class="author-name">oleh Ellyn Sibarani</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>Uang Suami Istri: Kerja Sama Finansial yang Bikin Rumah Tangga Awet</h2>
                        <p>Membahas pentingnya komunikasi finansial dalam pernikahan</p>
                    </div>
                    <div class="post-image">
                        <img src="https://api.ruangmenyala.com/api/uploads/on-c2-s3-ruangmenyala-prod/contents/800x480_a111f0999b97c172881acf28b75fae94.jpg" alt="Article Image">
                    </div>
                </div>
                <div class="post-meta">
                    <div class="post-stats">
                        <div class="date">Feb 2025</div>
                    </div>
                    <div class="post-actions">
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="none" stroke="currentColor"></path>
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z" fill="none" stroke="currentColor"></path>
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>
            
            <article class="post">
                <div class="author-info">
                    <img src="img/user.png" alt="Author" class="author-img">
                    <div class="author-name">nadnattoday</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>Belanja Cerdas, Rumah Tangga Hemat: Tips Budgeting Tanpa Ribut</h2>
                    </div>
                    <div class="post-image">
                        <img src="https://www.megasyariah.co.id/bms-new/edukasi-tips/Article_Harbolnas_1.jpg" alt="Article Image">
                    </div>
                </div>
            </article>
        </main>
        
        <aside class="sidebar">
            <section class="staff-picks">
                <h3>Rekomendasi untuk Kamu</h3>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="img/user.png" alt="Medium" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">Masak Weekly</div>
                            <div class="sidebar-author-name">oleh Nadira</div>
                        </div>
                    </div>
                    <h4>Meal Prep ala Ibu Rumah Tangga: Anti Ribet, Tetap Lezat!</h4>
                    <div class="sidebar-date">6 jam lalu</div>
                </div>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="img/user.png" alt="UX Collective" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">keluargasehat.co</div>
                            <div class="sidebar-author-name">oleh Nadira</div>
                        </div>
                    </div>
                    <h4>Ngatur Rumah, Ngatur Emosi: Biar Capeknya Nggak Meledak</h4>
                    <div class="sidebar-date">22 Maret</div>
                </div>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="img/user.png" alt="Medium" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">ruanghati.id</div>
                            <div class="sidebar-author-name">oleh Tidak Diketahui</div>
                        </div>
                    </div>
                    <h4>Ngobrol di Tengah Dapur: Komunikasi Kecil yang Menjaga Rumah Tangga</h4>
                    <div class="sidebar-date">2 April</div>
                </div>
                
                <a href="#" class="see-all">Liat semuanya</a>
            </section>
            
            <section class="recommended-topics">
                <h3>Topik Rekomendasi</h3>
                <div class="topic-tags">
                    <a href="#" class="topic-tag">Dapur</a>
                    <a href="#" class="topic-tag">Hubungan</a>
                    <a href="#" class="topic-tag">Parenting</a>
                    <a href="#" class="topic-tag">Pendidikan</a>
                    <a href="#" class="topic-tag">Kesehatan</a>
                    <a href="#" class="topic-tag">Finansial</a>
                </div>
            </section>
        </aside>
    </div>
</body>
</html>