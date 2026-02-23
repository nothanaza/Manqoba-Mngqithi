<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Manboba Mngqithi Foundation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="header-bg">
            <img src="images/about.jpeg" alt="Contact Us">
            <div class="header-overlay"></div>
            <div class="header-gradient"></div>
        </div>

        <div class="container header-content">
            <div class="breadcrumb animate-fade-in-up" style="animation-delay: 0.2s">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Contact</span>
            </div>

            <h1 class="page-title animate-fade-in-up" style="animation-delay: 0.4s">
                Get in <span class="gradient-text">Touch</span>
            </h1>

            <p class="page-description animate-fade-in-up" style="animation-delay: 0.6s">
                We'd love to hear from you. Reach out to learn more or get involved
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- Contact Info -->
                <div class="contact-info animate-on-scroll">
                    <h2>Let's Connect</h2>
                    <p>Whether you want to volunteer, partner, donate, or just learn more about our work, we're here to help.</p>

                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Visit Us</h3>
                                <p>Harry Gwala District<br>Umzimkhulu<br>South Africa</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h3>Call Us</h3>
                                <p>+27 (0) 12 345 6789<br>Mon-Fri: 8AM - 5PM</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email Us</h3>
                                <p>info@manbobafoundation.org.za<br>We'll respond within 24 hours</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Follow Us</h3>
                                <div class="social-links-contact">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper animate-on-scroll" style="animation-delay: 0.2s">
                    <form class="contact-form">
                        <h3>Send us a Message</h3>

                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input type="text" required placeholder="John">
                            </div>
                            <div class="form-group">
                                <label>Last Name *</label>
                                <input type="text" required placeholder="Doe">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" required placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" placeholder="+27 12 345 6789">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Subject *</label>
                            <select required>
                                <option value="">Select a topic</option>
                                <option>General Inquiry</option>
                                <option>Volunteer Opportunity</option>
                                <option>Partnership Proposal</option>
                                <option>Donation Information</option>
                                <option>Program Application</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Message *</label>
                            <textarea rows="6" required placeholder="Tell us how we can help..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            Send Message
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Find <span class="gradient-text-green">Us</span>
                </h2>
                <p class="section-description">
                    We operate across South Africa with our head office in Harry Gwala District
                </p>
            </div>

            <div class="map-wrapper animate-on-scroll">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Interactive Map Coming Soon</p>
                    <p class="map-location">📍 Harry Gwala District, Umzimkhulu, South Africa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">
                    <i class="fas fa-question-circle rotating-icon"></i>
                    FAQs
                </div>

                <h2 class="section-title">
                    Frequently Asked <span class="gradient-text-orange">Questions</span>
                </h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h3>How can I apply for your programs?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can apply through our website's contact form, selecting "Program Application" as your subject. You can also visit our office in Umzimkhulu or call us directly. Our team will guide you through the application process based on your area of interest.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="faq-question">
                        <h3>Are there any costs to join your programs?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, all our programs are completely free for beneficiaries. We believe financial barriers should never prevent young people from accessing opportunities for growth and development.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="faq-question">
                        <h3>How can my company partner with the foundation?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We welcome corporate partnerships! Contact us via email or phone to discuss CSR opportunities, employee volunteer programs, skills development initiatives, or sponsorship options. We'll work with you to create a partnership that aligns with your goals.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" style="animation-delay: 0.3s">
                    <div class="faq-question">
                        <h3>Do you provide tax certificates for donations?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We are a registered NPO with Section 18A status. All donations are tax-deductible, and we issue official tax certificates for your records.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" style="animation-delay: 0.4s">
                    <div class="faq-question">
                        <h3>What areas do you currently serve?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We started in Umzimkhulu and Harry Gwala District, but now operate in 50+ communities across South Africa, including both rural and urban areas. We're continuously expanding our reach.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll" style="animation-delay: 0.5s">
                    <div class="faq-question">
                        <h3>Can I volunteer if I don't live in South Africa?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We have remote volunteer opportunities in areas like online tutoring, digital content creation, and virtual mentorship. Contact us to learn about international volunteer options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content animate-on-scroll">
                <h2>Still Have Questions?</h2>
                <p>Our team is ready to help you learn more about our programs and how you can get involved</p>
                <div class="cta-buttons">
                    <a href="tel:+27123456789" class="btn btn-light btn-lg">
                        <i class="fas fa-phone"></i>
                        Call Us Now
                    </a>
                    <a href="mailto:info@manbobafoundation.org.za" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-envelope"></i>
                        Email Us
                    </a>
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
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked FAQ if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
