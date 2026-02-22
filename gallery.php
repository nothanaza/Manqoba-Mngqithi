<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Manboba Mngqithi Foundation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="header-bg">
            <img src="https://images.unsplash.com/photo-1729962380300-d8c242371ef1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjB5b3V0aCUyMGVtcG93ZXJtZW50fGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Gallery">
            <div class="header-overlay"></div>
            <div class="header-gradient"></div>
        </div>

        <div class="container header-content">
            <div class="breadcrumb animate-fade-in-up" style="animation-delay: 0.2s">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Gallery</span>
            </div>

            <h1 class="page-title animate-fade-in-up" style="animation-delay: 0.4s">
                Our <span class="gradient-text">Gallery</span>
            </h1>

            <p class="page-description animate-fade-in-up" style="animation-delay: 0.6s">
                Capturing moments of transformation, growth, and hope across South Africa
            </p>
        </div>
    </section>

    <!-- Gallery Filter -->
    <section class="gallery-filter">
        <div class="container">
            <div class="filter-buttons animate-on-scroll">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="programs">Programs</button>
                <button class="filter-btn" data-filter="events">Events</button>
                <button class="filter-btn" data-filter="community">Community</button>
                <button class="filter-btn" data-filter="training">Training</button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <!-- Gallery Item 1 -->
                <div class="gallery-item animate-on-scroll" data-category="programs training">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1721153669404-a2cb374bf5ee?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjBzdHVkZW50cyUyMGxlYXJuaW5nfGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Education Program">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Education & Skills Program</h3>
                            <p>Students learning new skills</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item animate-on-scroll" data-category="community events">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1729962380300-d8c242371ef1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjB5b3V0aCUyMGVtcG93ZXJtZW50fGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Community Event">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Community Outreach</h3>
                            <p>Engaging with local youth</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item animate-on-scroll" data-category="training programs">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1761039808159-f02b58f07032?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb21tdW5pdHklMjBkZXZlbG9wbWVudCUyMEFmcmljYXxlbnwxfHx8fDE3NzEyNzU3NjF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Digital Training">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Digital Literacy Workshop</h3>
                            <p>Technology skills development</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item animate-on-scroll" data-category="programs community">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1768637757037-31720529ee53?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b3V0aCUyMGVkdWNhdGlvbiUyMGNvbW11bml0eXxlbnwxfHx8fDE3NzEyNzU3NjF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Mentorship">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Mentorship Session</h3>
                            <p>One-on-one guidance</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item animate-on-scroll" data-category="events">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhZnJpY2FuJTIwd29tYW4lMjBwcm9mZXNzaW9uYWx8ZW58MXx8fHwxNzcxMjc1NzYxfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Graduation">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Program Graduation</h3>
                            <p>Celebrating success</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item animate-on-scroll" data-category="training">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhZnJpY2FuJTIwbWFuJTIwcHJvZmVzc2lvbmFsfGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Business Training">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Entrepreneurship Workshop</h3>
                            <p>Building future business leaders</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="gallery-item animate-on-scroll" data-category="community">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhZnJpY2FuJTIwd29tYW4lMjBzbWlsaW5nfGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Community Visit">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Community Engagement</h3>
                            <p>Building relationships</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="gallery-item animate-on-scroll" data-category="programs events">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1721153669404-a2cb374bf5ee?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjBzdHVkZW50cyUyMGxlYXJuaW5nfGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Workshop">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Skills Development Workshop</h3>
                            <p>Hands-on learning experience</p>
                            <button class="gallery-btn"><i class="fas fa-expand"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load-more animate-on-scroll">
                <button class="btn btn-primary btn-lg">
                    Load More Images
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge section-badge-light">
                    <i class="fas fa-video rotating-icon"></i>
                    Video Gallery
                </div>

                <h2 class="section-title text-white">
                    Watch Our <span class="gradient-text-green-light">Impact</span>
                </h2>
            </div>

            <div class="video-grid">
                <div class="video-item animate-on-scroll">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1729962380300-d8c242371ef1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjB5b3V0aCUyMGVtcG93ZXJtZW50fGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Video">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Foundation Overview 2024</h3>
                        <p>See our impact across South Africa</p>
                    </div>
                </div>

                <div class="video-item animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1768637757037-31720529ee53?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b3V0aCUyMGVkdWNhdGlvbiUyMGNvbW11bml0eXxlbnwxfHx8fDE3NzEyNzU3NjF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Video">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Success Stories</h3>
                        <p>Hear from our beneficiaries</p>
                    </div>
                </div>

                <div class="video-item animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1761039808159-f02b58f07032?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb21tdW5pdHklMjBkZXZlbG9wbWVudCUyMEFmcmljYXxlbnwxfHx8fDE3NzEyNzU3NjF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Video">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Program Highlights</h3>
                        <p>Inside our training programs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <button class="scroll-top" id="scrollTopBtn">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="js/main.js"></script>
    <script>
        // Gallery Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                galleryItems.forEach(item => {
                    if (filter === 'all') {
                        item.style.display = 'block';
                    } else {
                        if (item.dataset.category.includes(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
