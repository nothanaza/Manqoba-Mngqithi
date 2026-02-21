<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manqoba Mngqithi Foundation - Empowering South African Youth</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="MMF Logo" class="logo-img">
                </a>
                <div class="nav-links desktop-nav">
                    <a href="about.php" class="nav-link">About</a>
                    <a href="#purpose" class="nav-link">Our Purpose</a>
                    <a href="programs.php" class="nav-link">Programs</a>
                    <a href="#impact" class="nav-link">Impact</a>
                    <a href="#contact" class="nav-link">Contact</a>
                    <button class="btn btn-primary" onclick="scrollToSection('contact')">Get Involved</button>
                </div>

                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="#about" class="mobile-link">About</a>
            <a href="#purpose" class="mobile-link">Our Purpose</a>
            <a href="#programs" class="mobile-link">Programs</a>
            <a href="#impact" class="mobile-link">Impact</a>
            <a href="#contact" class="mobile-link">Contact</a>
            <button class="btn btn-primary btn-block" onclick="scrollToSection('contact')">Get Involved</button>
        </div>

        <div class="progress-bar" id="progressBar"></div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <img src="images/Homepage.jpeg" alt="Youth empowerment">
            <div class="hero-overlay"></div>
            <div class="hero-gradient"></div>
        </div>

        <!-- Floating Particles -->
        <div class="particles" id="particles"></div>

        <div class="container hero-content">
            <div class="hero-text">
                <div class="hero-badge animate-fade-in-up" style="animation-delay: 0.2s">
                    <span>Empowering South Africa's Future</span>
                </div>

                <h1 class="hero-title animate-fade-in-up" style="animation-delay: 0.4s">
                    Empowering Youth, <span class="gradient-text">Transforming Communities</span>
                </h1>

                <p class="hero-description animate-fade-in-up" style="animation-delay: 0.6s">
                   The Manqoba Mngqithi Foundation is committed to developing youth talent across South
                    Africa through sports, education, and community empowerment initiatives
                </p>

                <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.8s">
                    <button class="btn btn-primary btn-lg" onclick="scrollToSection('about')">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="btn btn-outline btn-lg" onclick="scrollToSection('contact')">
                        Get Involved
                    </button>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-bg">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
        </div>

        <div class="container">
            <div class="about-grid">
                <div class="about-image animate-on-scroll">
                    <img src="images/about.jpeg" alt="Youth community">
                    <div class="image-overlay"></div>
                    <div class="about-decoration deco-1"></div>
                    <div class="about-decoration deco-2"></div>
                    
                    <div class="about-stats-badge">
                        <div class="stats-icon">
                            <i class="fas fa-sparkles"></i>
                        </div>
                        <div>
                            <div class="stats-number">5,000+</div>
                            <div class="stats-label">Lives Changed</div>
                        </div>
                    </div>
                </div>

                <div class="about-content animate-on-scroll">
                    <div class="section-badge">
                        <i class="fas fa-sparkles rotating-icon"></i>
                        About Us
                    </div>

                    <h2 class="section-title">
                        From Local Roots to <span class="gradient-text-green">National Impact</span>
                    </h2>

                    <div class="about-text">
                        <p>
                            The <strong>Manqoba Mngqithi Foundation,</strong> established in Umzimkhulu, KwaZulu Natal, focuses on holistic youth development. We go beyond talent identification by nurturing mental, emotional, educational, and technical growth to build well-rounded future leaders.
                        </p>

                    <button class="btn btn-primary btn-lg" onclick="scrollToSection('about')">
                        Read More
                    </button>



                </div>
            </div><!-- /.about-content -->
        </div><!-- /.about-grid -->
        </div><!-- /.container -->
    </section>

    <!-- Purpose Section -->
    <section class="purpose" id="purpose">
        <div class="purpose-bg">
            <div class="grid-overlay"></div>
            <div class="glowing-orb orb-1"></div>
            <div class="glowing-orb orb-2"></div>
        </div>

        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge section-badge-light">
                    <span class="rotating-emoji">⭐</span>
                    Our Purpose
                </div>

                <h2 class="section-title text-white">
                    Driving <span class="gradient-text-green-light">Meaningful Change</span>
                </h2>
                <p class="section-description text-gray-light">
                  Our programmes are designed to empower youth and strengthen communities through sports mentorship, educational support, food security, and health initiatives.
                </p>
            </div>

            <div class="purpose-grid">
                <div class="purpose-card animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="purpose-icon icon-blue">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="purpose-title">Youth Development</h3>
                    <p class="purpose-description">
                        Nurturing talent and building skills to prepare young people for successful futures through comprehensive training and mentorship programs.
                    </p>
                    <div class="purpose-decoration">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <div class="purpose-card animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="purpose-icon icon-green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="purpose-title">Socio-Economic Transformation</h3>
                    <p class="purpose-description">
                        Creating sustainable change in communities by addressing systemic barriers and fostering economic opportunities for marginalized youth.
                    </p>
                    <div class="purpose-decoration">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>

                <!-- Our Impact Page more information  

                <div class="purpose-card animate-on-scroll" style="animation-delay: 0.3s">
                    <div class="purpose-icon icon-orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="purpose-title">Financial Sustainability</h3>
                    <p class="purpose-description">
                        Building long-term financial independence through entrepreneurship training, financial literacy programs, and economic empowerment initiatives.
                    </p>
                    <div class="purpose-decoration">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>


                <div class="purpose-card animate-on-scroll" style="animation-delay: 0.4s">
                    <div class="purpose-icon icon-purple">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="purpose-title">Stakeholder Management</h3>
                    <p class="purpose-description">
                        Fostering strategic partnerships with government, private sector, and civil society to maximize impact and create lasting change.
                    </p>
                    <div class="purpose-decoration">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
               -->
            </div>
             <button class="btn btn-primary btn-lg" onclick="scrollToSection('about')">
                     Explore Programmes
              </button>
        </div>
    </section>

     <!-- Programs Section -->
    <section class="programs" id="programs">
        <div class="programs-bg"></div>

        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge section-badge-orange">
                   <!-- <span class="bouncing-emoji">🚀</span> -->
                    Our Programs
                </div>

                <h2 class="section-title">
                    Transformative <span class="gradient-text-orange">Initiatives</span>
                </h2>
                <p class="section-description">
                    Comprehensive programs designed to unlock potential and create opportunities
                </p>
            </div>

            <div class="programs-grid">
                <div class="program-card animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="program-image">
                        <img src="images/game.jpeg" alt="Education">
                        <div class="program-overlay gradient-blue"></div>
                        <div class="program-icon icon-blue">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="program-particles"></div>
                    </div>
                    <div class="program-content">
                        <div class="program-border gradient-blue-border"></div>
                        <h3 class="program-title">Education & Skills Development</h3>
                        <p class="program-description">
                            Providing access to quality education, vocational training, and skills development programs to enhance employability.
                        </p>
                        <div class="program-link">
                            <span>Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="program-card animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="program-image">
                        <img src="images/education.jpeg" alt="Technology">
                        <div class="program-overlay gradient-purple"></div>
                        <div class="program-icon icon-purple">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="program-particles"></div>
                    </div>
                    <div class="program-content">
                        <div class="program-border gradient-purple-border"></div>
                        <h3 class="program-title">Community Development</h3>
                        <p class="program-description">
                            Equipping youth with essential digital skills and technology knowledge to thrive in the modern economy.
                        </p>
                        <div class="program-link">
                            <span>Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <!--
                <div class="program-card animate-on-scroll" style="animation-delay: 0.3s">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1729962380300-d8c242371ef1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxTb3V0aCUyMEFmcmljYW4lMjB5b3V0aCUyMGVtcG93ZXJtZW50fGVufDF8fHx8MTc3MTI3NTc2MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Entrepreneurship">
                        <div class="program-overlay gradient-orange"></div>
                        <div class="program-icon icon-orange">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="program-particles"></div>
                    </div>
                    <div class="program-content">
                        <div class="program-border gradient-orange-border"></div>
                        <h3 class="program-title">Entrepreneurship & Innovation</h3>
                        <p class="program-description">
                            Fostering entrepreneurial mindsets and supporting young entrepreneurs to start and grow sustainable businesses.
                        </p>
                        <div class="program-link">
                            <span>Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="program-card animate-on-scroll" style="animation-delay: 0.4s">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1768637757037-31720529ee53?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b3V0aCUyMGVkdWNhdGlvbiUyMGNvbW11bml0eXxlbnwxfHx8fDE3NzEyNzU3NjF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Mentorship">
                        <div class="program-overlay gradient-green"></div>
                        <div class="program-icon icon-green">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="program-particles"></div>
                    </div>
                    <div class="program-content">
                        <div class="program-border gradient-green-border"></div>
                        <h3 class="program-title">Mentorship & Life Skills</h3>
                        <p class="program-description">
                            Connecting youth with mentors and providing life skills training to build confidence and resilience.
                        </p>
                        <div class="program-link">
                            <span>Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        -->
        
            <button class="btn btn-primary btn-lg" onclick="scrollToSection('about')">
                    View Our Impact 
              </button>


        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact" id="impact">
        <div class="impact-bg">
            <div class="mesh-overlay"></div>
            <div class="floating-particles"></div>
        </div>

        <div class="container">
            <div class="section-header animate-on-scroll">

                <h2 class="section-title text-white">
                    Our <span class="glowing-text">Impact</span>
                </h2>
                <p class="section-description text-green-light">
                    From hosting youth football tournaments in partnership with SAFA to delivering 
                    food parcels to vulnerable households, our initiatives have positively impacted 
                    communities in Harry Gwala District and beyond.
                </p>
            </div>

            <div class="impact-grid">
                <div class="impact-stat animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="impact-icon icon-blue-bg">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="impact-number" data-target="5000">0</div>
                    <div class="impact-suffix">+</div>
                    <div class="impact-label">Youth Empowered</div>
                </div>

                <div class="impact-stat animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="impact-icon icon-green-bg">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="impact-number" data-target="50">0</div>
                    <div class="impact-suffix">+</div>
                    <div class="impact-label">Communities Reached</div>
                </div>
            </div>

            <div class="impact-footer animate-on-scroll">
                <p class="impact-message">
                    ✨ Together, we're building a brighter future for South Africa ✨
                </p>

                 <button class="btn btn-primary btn-lg" onclick="scrollToSection('about')">
                    View Our Impact 
              </button>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <div class="cta-bg">
            <div class="cta-pattern"></div>
            <div class="cta-orbs"></div>
        </div>

        <div class="container">
            <div class="cta-content animate-on-scroll">
                <!--
                <div class="cta-emoji">🤝</div>
                --> 
                <h2 class="section-title text-white">
                    Ready to Make a <span class="glowing-text-orange">Difference?</span>
                </h2>

                <p class="cta-description">
                    Join us in empowering the next generation of South African leaders. Whether you want to volunteer, partner, or support our initiatives, we'd love to hear from you.
                </p>

                <div class="contact-grid">
                    <a href="mailto:info@manqobamngqithifoundation.org" class="contact-card animate-on-scroll" style="animation-delay: 0.1s">
                        <div class="contact-corner"></div>
                        <i class="fas fa-envelope contact-icon"></i>
                        <h3 class="contact-title">Email Us</h3>
                        <p class="contact-info">info@manqobamngqithifoundation.org</p>
                    </a>

                    <a href="tel:+27123456789" class="contact-card animate-on-scroll" style="animation-delay: 0.2s">
                        <div class="contact-corner"></div>
                        <i class="fas fa-phone contact-icon"></i>
                        <h3 class="contact-title">Call Us</h3>
                        <p class="contact-info">+27 (0) 12 345 6789</p>
                    </a>

                    <div class="contact-card animate-on-scroll" style="animation-delay: 0.3s">
                        <div class="contact-corner"></div>
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <h3 class="contact-title">Visit Us</h3>
                        <p class="contact-info">Harry Gwala District<br>Umzimkhulu, South Africa</p>
                    </div>
                </div>

                <div class="cta-buttons animate-on-scroll">
                    <button class="btn btn-light btn-lg">
                        Partner With Us
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="btn btn-outline-light btn-lg">
                        Donate Now
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>

                <!--
                <div class="trust-badges animate-on-scroll">
                    <span class="trust-badge">🏆 Award Winning</span>
                    <span class="trust-badge">✓ Verified NPO</span>
                    <span class="trust-badge">💚 Community Trusted</span>
                    <span class="trust-badge">⭐ 5-Star Rated</span>
                </div>
                -->

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bg"></div>

        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3 class="footer-title">Manboba Mngqithi <span class="text-green">Foundation</span></h3>
                    <p class="footer-description">
                        Empowering youth across South Africa through education, skills development, and community transformation.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#purpose">Our Purpose</a></li>
                        <li><a href="#programs">Programs</a></li>
                        <li><a href="#impact">Impact</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4 class="footer-heading">Get Involved</h4>
                    <ul>
                        <li><a href="#contact">Volunteer</a></li>
                        <li><a href="#contact">Donate</a></li>
                        <li><a href="#contact">Partner</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">
                    © <?php echo date('Y'); ?> Manboba Mngqithi Foundation. All rights reserved.
                </p>
                <p class="made-with">
                    Made with <i class="fas fa-heart heart-icon"></i> for South African youth
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTopBtn" title="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="js/main.js"></script>
</body>
</html>