<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved - Manboba Mngqithi Foundation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="header-bg">
            <img src="images/about.jpeg" alt="Get Involved">
            <div class="header-overlay"></div>
            <div class="header-gradient"></div>
        </div>

        <div class="container header-content">
            <div class="breadcrumb animate-fade-in-up" style="animation-delay: 0.2s">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Get Involved</span>
            </div>

            <h1 class="page-title animate-fade-in-up" style="animation-delay: 0.4s">
                Get <span class="gradient-text">Involved</span>
            </h1>

            <p class="page-description animate-fade-in-up" style="animation-delay: 0.6s">
                Join us in creating positive change for South African youth
            </p>
        </div>
    </section>

    <!-- Ways to Get Involved -->
    <section class="involvement-ways">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">
                    <i class="fas fa-hands-helping rotating-icon"></i>
                    Ways to Contribute
                </div>

                <h2 class="section-title">
                    Make a <span class="gradient-text-green">Difference</span>
                </h2>
                <p class="section-description">
                    There are many ways you can support our mission and help empower South African youth
                </p>
            </div>

            <div class="ways-grid">
                <div class="way-card animate-on-scroll">
                    <div class="way-icon icon-volunteer">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3>Volunteer</h3>
                    <p>Share your skills and time to mentor, teach, or support our programs</p>
                    <ul class="way-benefits">
                        <li><i class="fas fa-check"></i> Flexible schedules</li>
                        <li><i class="fas fa-check"></i> Make direct impact</li>
                        <li><i class="fas fa-check"></i> Build connections</li>
                        <li><i class="fas fa-check"></i> Gain experience</li>
                    </ul>
                    <button class="btn btn-primary" onclick="document.getElementById('volunteer-form').scrollIntoView({behavior: 'smooth'})">
                        Volunteer Now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="way-card animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="way-icon icon-donate">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Donate</h3>
                    <p>Financial support helps us expand our reach and impact more lives</p>
                    <ul class="way-benefits">
                        <li><i class="fas fa-check"></i> Tax deductible</li>
                        <li><i class="fas fa-check"></i> Transparent use</li>
                        <li><i class="fas fa-check"></i> Regular updates</li>
                        <li><i class="fas fa-check"></i> Any amount helps</li>
                    </ul>
                    <button class="btn btn-primary" onclick="document.getElementById('donation-section').scrollIntoView({behavior: 'smooth'})">
                        Donate Now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="way-card animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="way-icon icon-partner">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Partner</h3>
                    <p>Collaborate with us to create sustainable youth development programs</p>
                    <ul class="way-benefits">
                        <li><i class="fas fa-check"></i> Strategic alignment</li>
                        <li><i class="fas fa-check"></i> Joint initiatives</li>
                        <li><i class="fas fa-check"></i> Shared impact</li>
                        <li><i class="fas fa-check"></i> CSR opportunities</li>
                    </ul>
                    <button class="btn btn-primary" onclick="window.location.href='contact.php'">
                        Partner With Us
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Opportunities -->
    <section class="volunteer-opportunities" id="volunteer-form">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Volunteer <span class="gradient-text-orange">Opportunities</span>
                </h2>
                <p class="section-description">
                    Find the perfect role that matches your skills and availability
                </p>
            </div>

            <div class="opportunities-grid">
                <div class="opportunity-card animate-on-scroll">
                    <div class="opportunity-header">
                        <div class="opportunity-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div>
                            <h3>Tutor & Mentor</h3>
                            <span class="opportunity-tag">Flexible</span>
                        </div>
                    </div>
                    <p>Help students with homework, exam preparation, and career guidance</p>
                    <div class="opportunity-details">
                        <span><i class="fas fa-clock"></i> 4-8 hours/week</span>
                        <span><i class="fas fa-map-marker-alt"></i> Remote or On-site</span>
                    </div>
                </div>

                <div class="opportunity-card animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="opportunity-header">
                        <div class="opportunity-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div>
                            <h3>Tech Instructor</h3>
                            <span class="opportunity-tag">Part-time</span>
                        </div>
                    </div>
                    <p>Teach coding, digital literacy, and technology skills to eager learners</p>
                    <div class="opportunity-details">
                        <span><i class="fas fa-clock"></i> 6-10 hours/week</span>
                        <span><i class="fas fa-map-marker-alt"></i> On-site</span>
                    </div>
                </div>

                <div class="opportunity-card animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="opportunity-header">
                        <div class="opportunity-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div>
                            <h3>Business Coach</h3>
                            <span class="opportunity-tag">Flexible</span>
                        </div>
                    </div>
                    <p>Guide aspiring entrepreneurs in starting and growing their businesses</p>
                    <div class="opportunity-details">
                        <span><i class="fas fa-clock"></i> 5-8 hours/week</span>
                        <span><i class="fas fa-map-marker-alt"></i> Hybrid</span>
                    </div>
                </div>

                <div class="opportunity-card animate-on-scroll" style="animation-delay: 0.3s">
                    <div class="opportunity-header">
                        <div class="opportunity-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div>
                            <h3>Content Creator</h3>
                            <span class="opportunity-tag">Remote</span>
                        </div>
                    </div>
                    <p>Document our impact through photos, videos, and storytelling</p>
                    <div class="opportunity-details">
                        <span><i class="fas fa-clock"></i> 3-6 hours/week</span>
                        <span><i class="fas fa-map-marker-alt"></i> Remote</span>
                    </div>
                </div>
            </div>

            <div class="volunteer-form-container animate-on-scroll">
                <h3>Apply to Volunteer</h3>
                <form class="volunteer-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="tel" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Area of Interest *</label>
                        <select required>
                            <option value="">Select an option</option>
                            <option>Tutoring & Mentorship</option>
                            <option>Technology Training</option>
                            <option>Business Coaching</option>
                            <option>Content Creation</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tell us about yourself *</label>
                        <textarea rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">
                        Submit Application
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation-section" id="donation-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge section-badge-light">
                    <i class="fas fa-gift rotating-icon"></i>
                    Support Our Mission
                </div>

                <h2 class="section-title text-white">
                    Your Donation <span class="gradient-text-green-light">Changes Lives</span>
                </h2>
                <p class="section-description text-gray-light">
                    Every contribution, no matter the size, helps us empower more youth
                </p>
            </div>

            <div class="donation-impact animate-on-scroll">
                <div class="impact-example">
                    <div class="impact-amount">R500</div>
                    <p>Provides a student with textbooks and study materials for a semester</p>
                </div>

                <div class="impact-example">
                    <div class="impact-amount">R1,500</div>
                    <p>Sponsors a youth's vocational training course and certification</p>
                </div>

                <div class="impact-example">
                    <div class="impact-amount">R5,000</div>
                    <p>Funds a complete digital literacy program for 10 young people</p>
                </div>

                <div class="impact-example">
                    <div class="impact-amount">R10,000+</div>
                    <p>Launches an entrepreneurship program in a new community</p>
                </div>
            </div>

            <div class="donation-methods animate-on-scroll">
                <h3>How to Donate</h3>
                <div class="methods-grid">
                    <div class="method-card">
                        <i class="fas fa-university"></i>
                        <h4>Bank Transfer</h4>
                        <p>Account: Manboba Mngqithi Foundation</p>
                        <p>Bank: Standard Bank</p>
                        <p>Account No: 123456789</p>
                        <p>Branch: 051001</p>
                    </div>

                    <div class="method-card">
                        <i class="fas fa-credit-card"></i>
                        <h4>Online Payment</h4>
                        <p>Secure online donations via PayFast</p>
                        <button class="btn btn-light">
                            Donate Online
                            <i class="fas fa-external-link-alt"></i>
                        </button>
                    </div>

                    <div class="method-card">
                        <i class="fas fa-file-invoice"></i>
                        <h4>Tax Certificate</h4>
                        <p>We are a registered NPO (123-456)</p>
                        <p>Section 18A tax certificates issued</p>
                        <a href="contact.php">Request Certificate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Partnerships -->
    <section class="corporate-partnerships">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Corporate <span class="gradient-text-green">Partnerships</span>
                </h2>
                <p class="section-description">
                    Partner with us to create meaningful CSR programs and make a lasting impact
                </p>
            </div>

            <div class="partnership-benefits animate-on-scroll">
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <h4>Strategic CSR Alignment</h4>
                    <p>Align your corporate social responsibility goals with impactful youth development</p>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <h4>Employee Engagement</h4>
                    <p>Provide meaningful volunteer opportunities for your team members</p>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <h4>Skills Development</h4>
                    <p>Support South Africa's skills development mandates and transformation goals</p>
                </div>

                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <h4>Brand Visibility</h4>
                    <p>Showcase your commitment to social impact and community development</p>
                </div>
            </div>

            <div class="cta-buttons animate-on-scroll">
                <a href="contact.php" class="btn btn-primary btn-lg">
                    Discuss Partnership
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <button class="scroll-top" id="scrollTopBtn">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="js/main.js"></script>
</body>
</html>
