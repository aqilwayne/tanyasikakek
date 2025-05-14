<?php
require 'function.php';

// Cek apakah user sudah login
$isLoggedIn = isset($_SESSION['id_user']);

$getdata = mysqli_query($con, "SELECT * FROM user");
$data = mysqli_fetch_array($getdata);

$username = $data['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya Kakek</title>
    <link rel="stylesheet" href="login-view.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript Bootstrap (harus sebelum </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
            <?php endif; ?> <!-- ✅ Tutup if (isset($_SESSION['username'])) -->
    <?php endif; ?> <!-- ✅ Tutup if($isLoggedIn) -->
        </div>
    </nav>

    <div class="container">
        <div class="left-column">
            <div class="profile-card">
                <div class="profile-header">
                    <img src="img/user.png" alt="Profile" class="profile-avatar">
                    <h2 class="profile-name-large">
                        <?=$username; ?>
                    </h2>
                    <div class="profile-title">Cucu Kakek</div>
                </div>
                <div class="profile-stats">
                    <div class="stat">
                        <div class="stat-icon"><i class="fas fa-star"></i></div>
                        <div>
                            <span class="stat-value">75</span>
                            <span>Poin</span>
                        </div>
                    </div>
                    <div class="stat">
                        <div class="stat-icon"><i class="fas fa-crown"></i></div>
                        <div>
                            <span class="stat-value">0</span>
                        </div>
                    </div>
                </div>
                <div class="profile-action">
                    <a href="#" class="action-button">
                        Lihat Pencapaianku
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>

            <div class="categories-card">
                <div class="categories-header">Kategori</div>
                <ul class="categories-list">
                    <li class="category-item">
                        <div class="category-icon"><i class="fas fa-utensils" style="color: #e74c3c;"></i></div>
                        <div class="category-name">Rumah Tangga & Dapur</div>
                    </li>
                    <li class="category-item">
                        <div class="category-icon"><i class="fas fa-leaf" style="color: #2ecc71;"></i></div>
                        <div class="category-name">Kesehatan & Herbal</div>
                    </li>
                    <li class="category-item">
                        <div class="category-icon"><i class="fas fa-seedling" style="color: #f39c12;"></i></div>
                        <div class="category-name">Pertanian & Perkebunan</div>
                    </li>
                    <li class="category-item">
                        <div class="category-icon"><i class="fas fa-palette" style="color: #9b59b6;"></i></div>
                        <div class="category-name">Kerajinan & DIY (Do It Yourself)</div>
                    </li>
                    <li class="category-item">
                        <div class="category-icon"><i class="fas fa-coins" style="color: #f1c40f;"></i></div>
                        <div class="category-name">Keuangan & Ekonomi Keluarga</div>
                    </li>
                </ul>
            </div>
            <div class="kirim-btn">
                <button>Kirim Pertanyaan</button>
            </div>
        </div>

        <div class="feed-container">
            <div class="tabs">
                <div class="tab-buttons">
                    <button class="tab-button active">Untuk Anda</button>
                    <button class="tab-button">Mengikuti</button>
                    <button class="tab-button">Postingan Anda</button>
                </div>
            </div>

        <div class="post-composer">
            <form action="" method="post">
                <div class="composer-header">
                    <img src="img/user.png" alt="Profile" class="composer-avatar">
                    <input type="hidden" name="id_user" value="<?=$id_user;?>">
                    <input type="text" class="composer-input" name="judul" placeholder="Apa judul pertanyaan anda?">
                    <input type="text" class="composer-input" name="pertanyaan" placeholder="Apa yang ingin anda tanya atau bagikan?">
                    <button class="post-button" name="unggah-pertanyaan" type="submit">Unggah</button>
                </div>
                <div class="composer-actions">
                    <div class="composer-tools">
                        <button class="tool-button"><i class="fas fa-image"></i></button>
                        <button class="tool-button"><i class="fas fa-list"></i></button>
                        <button class="tool-button"><i class="fas fa-video"></i></button>
                        <button class="tool-button"><i class="far fa-smile"></i></button>
                    </div>
                </div>
            </form>
        </div>
            <?php
            $getdataquestion = mysqli_query($con, "SELECT u.id_user, u.username, q.judul, q.pertanyaan, q.tanggal, q.id_question FROM question q JOIN user u ON u.id_user = q.id_user");

            while($data = mysqli_fetch_array($getdataquestion)){
                $id_user = $data['id_user'];
                $username = $data['username'];
                $judul = $data['judul'];
                $pertanyaan = $data['pertanyaan'];
                $tanggal = $data['tanggal'];
                $id_question = $data['id_question'];
            ?>
                <div class="feed-post">
                    <div class="post-header">
                        <div class="post-author">
                            <img src="img/user.png" alt="Author" class="post-avatar">
                            <div class="post-info">
                                <div class="author-name"><?= htmlspecialchars($username);?></div>
                                <div class="post-meta">Kakek - <?= htmlspecialchars($tanggal);?></div>
                            </div>
                        </div>
                        <div class="post-actions"><i class="fas fa-ellipsis-h"></i></div>
                    </div>
                    <div class="post-content">
                        <?=htmlspecialchars($pertanyaan);?>
                    </div>
                    <div class="post-footer">
                        <div class="post-reaction">
                            <i class="fas fa-arrow-up"></i>
                            <span>123</span>
                        </div>
                        <div class="post-reaction">
                            <i class="fas fa-arrow-down"></i>
                            <span>123</span>
                        </div>
                        <div class="post-reaction">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                        Delete
                        </button>
                        </div>
                        <button class="bookmark-button"><i class="far fa-bookmark"></i></button>
                    </div>
                </div>
            <?php
            }
        if(!$getdataquestion){
            echo "Query error: " . mysqli_error($con);
        }
            ?>
</div> <!-- Penutup div jika ada sebelumnya -->

<!-- Delete Modal -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus Pertanyaan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    Anda yakin ingin menghapus <strong><?= htmlspecialchars($judul); ?></strong>?
                    <br><br>
                    <input type="hidden" name="id_question" value="<?= htmlspecialchars($id_question); ?>">
                    <button class="btn btn-danger" type="submit" name="deletequestion">Hapus</button>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>