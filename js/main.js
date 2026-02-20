// Smooth scroll utility
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

// Navbar scroll effects
const navbar = document.getElementById('navbar');
const progressBar = document.getElementById('progressBar');

window.addEventListener('scroll', () => {
    // Add scrolled class if navbar exists
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    // Update progress bar only when present (guard against pages without it)
    if (progressBar) {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progressBar.style.transform = `scaleX(${scrolled / 100})`;
    }
});

// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        const icon = mobileMenuBtn.querySelector('i');
        if (icon) {
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        }
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('.mobile-link');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });
}

// Create floating particles
function createParticles() {
    const particlesContainer = document.getElementById('particles');
    if (!particlesContainer) return;

    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 2 + 's';
        particle.style.animationDuration = (3 + Math.random() * 2) + 's';
        particlesContainer.appendChild(particle);
    }
}

// Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1
});

// Observe all elements with animate-on-scroll class
function observeElements() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(el => observer.observe(el));
}

// Counter animation for impact stats
function animateCounter(element) {
    const target = parseInt(element.dataset.target);
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current).toLocaleString();
    }, 16);
}

// Observe impact stats for counter animation
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.dataset.animated) {
            entry.target.dataset.animated = 'true';
            animateCounter(entry.target);
        }
    });
}, { threshold: 0.5 });

function observeStats() {
    const stats = document.querySelectorAll('.impact-number');
    stats.forEach(stat => statsObserver.observe(stat));
}

// Scroll to top button
const scrollTopBtn = document.getElementById('scrollTopBtn');

if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth scroll for all anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        if (targetId) {
            scrollToSection(targetId);
        }
    });
});

// Add parallax effect to hero background
function parallaxEffect() {
    const heroSection = document.querySelector('.hero');
    if (!heroSection) return;

    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const heroHeight = heroSection.offsetHeight;
        
        if (scrolled < heroHeight) {
            const heroImg = heroSection.querySelector('.hero-bg img');
            if (heroImg) {
                heroImg.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        }
    });
}

// Add hover effect to program cards
function initProgramCards() {
    const programCards = document.querySelectorAll('.program-card');
    
    programCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
}

// Add hover effect to purpose cards
function initPurposeCards() {
    const purposeCards = document.querySelectorAll('.purpose-card');
    
    purposeCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.purpose-icon');
            if (icon) {
                icon.style.transform = 'rotate(360deg) scale(1.1)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.purpose-icon');
            if (icon) {
                icon.style.transform = 'rotate(0deg) scale(1)';
            }
        });
    });
}

// Create floating particles for impact section
function createImpactParticles() {
    const container = document.querySelector('.impact .floating-particles');
    if (!container) return;

    for (let i = 0; i < 15; i++) {
        const particle = document.createElement('div');
        particle.style.position = 'absolute';
        particle.style.width = '8px';
        particle.style.height = '8px';
        particle.style.borderRadius = '50%';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animation = `float ${3 + Math.random() * 2}s ease-in-out infinite`;
        particle.style.animationDelay = Math.random() * 2 + 's';
        container.appendChild(particle);
    }
}

// Create particles for program images
function createProgramParticles() {
    const programParticles = document.querySelectorAll('.program-particles');
    
    programParticles.forEach(container => {
        for (let i = 0; i < 5; i++) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.width = '4px';
            particle.style.height = '4px';
            particle.style.background = 'white';
            particle.style.borderRadius = '50%';
            particle.style.left = (20 + i * 15) + '%';
            particle.style.top = (30 + i * 10) + '%';
            particle.style.animation = `float ${2 + i * 0.5}s ease-in-out infinite`;
            particle.style.animationDelay = i * 0.2 + 's';
            particle.style.opacity = '0';
            container.appendChild(particle);
        }
        
        // Show particles on hover
        const card = container.closest('.program-card');
        if (card) {
            card.addEventListener('mouseenter', () => {
                const particles = container.querySelectorAll('div');
                particles.forEach(p => {
                    p.style.opacity = '1';
                });
            });
            
            card.addEventListener('mouseleave', () => {
                const particles = container.querySelectorAll('div');
                particles.forEach(p => {
                    p.style.opacity = '0';
                });
            });
        }
    });
}

// Add floating animation to CTA orbs
function createCTAOrbs() {
    const container = document.querySelector('.cta .cta-orbs');
    if (!container) return;

    for (let i = 0; i < 8; i++) {
        const orb = document.createElement('div');
        const size = 50 + Math.random() * 100;
        orb.style.position = 'absolute';
        orb.style.width = size + 'px';
        orb.style.height = size + 'px';
        orb.style.background = 'rgba(255, 255, 255, 0.1)';
        orb.style.borderRadius = '50%';
        orb.style.left = Math.random() * 100 + '%';
        orb.style.top = Math.random() * 100 + '%';
        orb.style.animation = `float ${5 + Math.random() * 5}s ease-in-out infinite`;
        orb.style.animationDelay = Math.random() * 2 + 's';
        container.appendChild(orb);
    }
}

// Add shimmer effect to buttons
function initButtonEffects() {
    const buttons = document.querySelectorAll('.btn-primary, .btn-light');
    
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const shimmer = document.createElement('span');
            shimmer.style.position = 'absolute';
            shimmer.style.top = '0';
            shimmer.style.left = '-100%';
            shimmer.style.width = '100%';
            shimmer.style.height = '100%';
            shimmer.style.background = 'linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent)';
            shimmer.style.transition = 'left 0.6s ease';
            shimmer.style.pointerEvents = 'none';
            
            this.appendChild(shimmer);
            
            setTimeout(() => {
                shimmer.style.left = '100%';
            }, 10);
            
            setTimeout(() => {
                shimmer.remove();
            }, 600);
        });
    });
}

// Lazy load images
function lazyLoadImages() {
    const images = document.querySelectorAll('img');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => {
        if (img.dataset.src) {
            imageObserver.observe(img);
        }
    });
}

// Add cursor effect to cards
function initCardEffects() {
    const cards = document.querySelectorAll('.purpose-card, .program-card, .contact-card');
    
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });
}

// Helper to run a function without crashing the rest of the script
function safeRun(fn) {
    try {
        fn();
    } catch (err) {
        console.error('Animation error:', err);
    }
}

// Initialize all animations and effects
function init() {
    safeRun(createParticles);
    safeRun(observeElements);
    safeRun(observeStats);
    safeRun(parallaxEffect);
    safeRun(initProgramCards);
    safeRun(initPurposeCards);
    safeRun(createImpactParticles);
    safeRun(createProgramParticles);
    safeRun(createCTAOrbs);
    safeRun(initButtonEffects);
    safeRun(lazyLoadImages);
    safeRun(initCardEffects);
}

// Run initialization when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}

// fallback: if animations haven't triggered after a few seconds, reveal everything
setTimeout(() => {
    document.querySelectorAll('.animate-on-scroll').forEach(el => el.classList.add('visible'));
}, 3000);

// Add keyboard navigation
document.addEventListener('keydown', (e) => {
    // Press 'T' to scroll to top
    if (e.key === 't' || e.key === 'T') {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // Press 'B' to scroll to bottom
    if (e.key === 'b' || e.key === 'B') {
        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
    }
});

// Performance optimization: Throttle scroll events
let ticking = false;
function optimizedScroll(callback) {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            callback();
            ticking = false;
        });
        ticking = true;
    }
}

// Add loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
    
    // Trigger entrance animations
    const heroElements = document.querySelectorAll('.hero .animate-fade-in-up');
    heroElements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, index * 100);
    });
});

// Easter egg: Console message
console.log('%c🌟 Manboba Mngqithi Foundation', 'color: #22c55e; font-size: 20px; font-weight: bold;');
console.log('%cEmpowering South African Youth', 'color: #f97316; font-size: 14px;');
console.log('%cBuilt with ❤️ for the future of South Africa', 'color: #6b7280; font-size: 12px;');

