/* ================================
   PRELOADER
================================ */
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.classList.add('hide');
        setTimeout(() => preloader.remove(), 700);
    }
});

/* ================================
   DARK MODE
================================ */
const darkModeToggle = document.getElementById('darkModeToggle');
const darkModeIcon = document.getElementById('darkModeIcon');

function setLogos(isDark) {
    document.querySelectorAll('.site-logo').forEach(img => {
        img.src = isDark ? 'assets/logo-2.png' : 'assets/logo.png';
    });
}

const isDarkOnLoad = localStorage.getItem('theme') === 'dark';
if (isDarkOnLoad) {
    document.body.classList.add('dark');
    if (darkModeIcon) darkModeIcon.className = 'ph ph-sun';
}
setLogos(isDarkOnLoad);

if (darkModeToggle) {
    darkModeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        const isDark = document.body.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        if (darkModeIcon) darkModeIcon.className = isDark ? 'ph ph-sun' : 'ph ph-moon';
        setLogos(isDark);
    });
}

/* ================================
   CUSTOM CURSOR
================================ */
const cursorDot = document.getElementById('cursorDot');
const cursorRing = document.getElementById('cursorRing');

if (cursorDot && cursorRing) {
    let mouseX = 0, mouseY = 0;
    let ringX = 0, ringY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        cursorDot.style.left = mouseX + 'px';
        cursorDot.style.top = mouseY + 'px';
    });

    (function animateRing() {
        ringX += (mouseX - ringX) * 0.12;
        ringY += (mouseY - ringY) * 0.12;
        cursorRing.style.left = ringX + 'px';
        cursorRing.style.top = ringY + 'px';
        requestAnimationFrame(animateRing);
    })();

    document.querySelectorAll('a, button, .brand-card, .team-card, .testimonial-card').forEach(el => {
        el.addEventListener('mouseenter', () => cursorRing.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursorRing.classList.remove('hover'));
    });
}

/* ================================
   SCROLL PROGRESS BAR
================================ */
const scrollProgress = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
    if (scrollProgress) {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        scrollProgress.style.width = ((scrollTop / docHeight) * 100) + '%';
    }
}, { passive: true });

/* ================================
   NAVBAR ON SCROLL
================================ */
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 40);
}, { passive: true });

/* ================================
   MOBILE MENU
================================ */
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');

if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('open');
        hamburger.classList.toggle('active', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            hamburger.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
}

/* ================================
   BACK TO TOP
================================ */
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (backToTop) backToTop.classList.toggle('visible', window.scrollY > 400);
}, { passive: true });

if (backToTop) {
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

/* ================================
   SCROLL REVEAL
================================ */
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => {
    revealObserver.observe(el);
});

/* ================================
   COUNTER ANIMATION
================================ */
function animateCounter(el) {
    const target = parseInt(el.dataset.target);
    const duration = 1800;
    const startTime = performance.now();

    function step(now) {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 4);
        el.textContent = Math.floor(eased * target);
        if (progress < 1) requestAnimationFrame(step);
        else el.textContent = target;
    }
    requestAnimationFrame(step);
}

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.dataset.counted) {
            entry.target.dataset.counted = '1';
            animateCounter(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

/* ================================
   TYPING EFFECT
================================ */
const typedTextEl = document.getElementById('typedText');
if (typedTextEl) {
    const words = ['AI Automation', 'AI Innovation'];
    let wordIndex = 0, charIndex = 0, isDeleting = false;

    function type() {
        const word = words[wordIndex];

        if (isDeleting) {
            typedTextEl.textContent = word.substring(0, --charIndex);
        } else {
            typedTextEl.textContent = word.substring(0, ++charIndex);
        }

        let delay = isDeleting ? 55 : 95;

        if (!isDeleting && charIndex === word.length) {
            delay = 2200;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            delay = 450;
        }

        setTimeout(type, delay);
    }

    setTimeout(type, 1200);
}

/* ================================
   FAQ ACCORDION
================================ */
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        const wasOpen = item.classList.contains('open');

        document.querySelectorAll('.faq-item.open').forEach(open => open.classList.remove('open'));

        if (!wasOpen) item.classList.add('open');
    });
});

/* ================================
   CARD TILT EFFECT
================================ */
document.querySelectorAll('.brand-card, .testimonial-card, .process-step').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const cx = rect.width / 2;
        const cy = rect.height / 2;
        const rx = ((y - cy) / cy) * -4;
        const ry = ((x - cx) / cx) * 4;
        card.style.transform = `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateZ(6px)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});

/* ================================
   HERO PARALLAX
================================ */
const heroImage = document.querySelector('.hero-image');
if (heroImage) {
    window.addEventListener('scroll', () => {
        if (window.scrollY < window.innerHeight) {
            heroImage.style.transform = `translateY(${window.scrollY * 0.07}px)`;
        }
    }, { passive: true });
}

/* ================================
   PRODUCT FILTER TABS
================================ */
document.querySelectorAll('.filter-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const filter = tab.dataset.filter;
        document.querySelectorAll('.nova-card').forEach(card => {
            const match = filter === 'all' || card.dataset.category === filter;
            card.classList.toggle('hidden', !match);
        });
    });
});

/* ================================
   ACTIVE NAV LINK
================================ */
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.nav-links a').forEach(link => {
    link.classList.toggle('active', link.getAttribute('href') === currentPage);
});

/* ================================
   BOOK A MEETING WIDGET
================================ */
const meetWidget = document.getElementById('meetWidget');
const meetClose = document.getElementById('meetClose');

if (meetWidget && meetClose) {
    let shown = false;
    let closed = false;

    const productsSection = document.getElementById('products');
    if (productsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !shown && !closed) {
                    meetWidget.classList.add('show');
                    shown = true;
                    observer.disconnect();
                }
            });
        }, { threshold: 0.1 });
        observer.observe(productsSection);
    }

    meetClose.addEventListener('click', () => {
        meetWidget.classList.remove('show');
        closed = true;
    });
}
