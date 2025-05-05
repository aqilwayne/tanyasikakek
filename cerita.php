<?php
require 'cek.php';
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
    <header>
        <div class="logo">Medium</div>
        <div class="search-container">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34 6.5 6.5 0 0 0-7.27-5.08 6.5 6.5 0 0 0-5.24 7.18 6.5 6.5 0 0 0 5.64 5.35c1.9.19 3.79-.43 5.17-1.69l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="currentColor"></path>
            </svg>
            <input type="text" placeholder="Search">
        </div>
        <div class="right-nav">
            <button class="write-btn">Write</button>
            <div class="notifications-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="profile-avatar">
                <img src="/api/placeholder/32/32" alt="Profile Picture">
            </div>
        </div>
    </header>
    
    <nav class="tabs-nav">
        <button class="tab-add">+</button>
        <button class="tab active">For you</button>
        <button class="tab">Following</button>
        <button class="tab">Featured <span class="new-badge">New</span></button>
        <button class="tab">Design</button>
        <button class="tab">Feminism</button>
        <button class="tab">Music</button>
        <button class="tab">Film</button>
        <button class="tab">More</button>
    </nav>
    
    <div class="container">
        <main class="content">
            <article class="post">
                <div class="author-info">
                    <img src="/api/placeholder/20/20" alt="Author" class="author-img">
                    <div class="publication">In Write A Catalyst</div>
                    <div class="author-name">by Maya Sayvanova</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>The 3 Best Platforms For New Writers</h2>
                        <p>Build your solo business & quit your job in 2025.</p>
                    </div>
                    <div class="post-image">
                        <img src="/api/placeholder/200/134" alt="Article Image">
                    </div>
                </div>
                <div class="post-meta">
                    <div class="post-stats">
                        <div class="date">Nov 16, 2024</div>
                        <div class="views">22K</div>
                        <div class="comments">650</div>
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
                    <img src="/api/placeholder/20/20" alt="Author" class="author-img">
                    <div class="publication">In Books Are Our Superpower</div>
                    <div class="author-name">by James Gómez</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>Son of Southtown: My Thoughts on A Memoir of a Childhood Hero</h2>
                        <p>Sonny Sandoval and a Clash of Cultures</p>
                    </div>
                    <div class="post-image">
                        <img src="/api/placeholder/200/134" alt="Article Image">
                    </div>
                </div>
                <div class="post-meta">
                    <div class="post-stats">
                        <div class="date">Apr 2</div>
                        <div class="views">122</div>
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
                    <img src="/api/placeholder/20/20" alt="Author" class="author-img">
                    <div class="author-name">klywrites</div>
                </div>
                <div class="post-content">
                    <div class="post-info">
                        <h2>i always wanted to grow up, until i slowly started becoming one</h2>
                    </div>
                    <div class="post-image">
                        <img src="/api/placeholder/200/134" alt="Article Image">
                    </div>
                </div>
            </article>
        </main>
        
        <aside class="sidebar">
            <section class="staff-picks">
                <h3>Staff Picks</h3>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="/api/placeholder/20/20" alt="Medium" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">In The Medium Blog</div>
                            <div class="sidebar-author-name">by The Medium Newsletter</div>
                        </div>
                    </div>
                    <h4>Leadership is a fundamentally creative act</h4>
                    <div class="sidebar-date">6h ago</div>
                </div>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="/api/placeholder/20/20" alt="UX Collective" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">In UX Collective</div>
                            <div class="sidebar-author-name">by Pete Sena</div>
                        </div>
                    </div>
                    <h4>Cracking the code of vibe coding</h4>
                    <div class="sidebar-date">Mar 22</div>
                </div>
                
                <div class="sidebar-article">
                    <div class="sidebar-author">
                        <img src="/api/placeholder/20/20" alt="Medium" class="sidebar-author-img">
                        <div class="sidebar-author-info">
                            <div class="sidebar-publication">In The Medium Blog</div>
                            <div class="sidebar-author-name">by The Medium Newsletter</div>
                        </div>
                    </div>
                    <h4>What I Wish I Knew: "Your writing is not about you"</h4>
                    <div class="sidebar-date">Apr 2</div>
                </div>
                
                <a href="#" class="see-all">See the full list</a>
            </section>
            
            <section class="recommended-topics">
                <h3>Recommended topics</h3>
                <div class="topic-tags">
                    <a href="#" class="topic-tag">Programming</a>
                    <a href="#" class="topic-tag">Relationships</a>
                    <a href="#" class="topic-tag">Data Science</a>
                    <a href="#" class="topic-tag">Productivity</a>
                    <a href="#" class="topic-tag">Cryptocurrency</a>
                    <a href="#" class="topic-tag">Politics</a>
                </div>
            </section>
        </aside>
    </div>
</body>
</html>