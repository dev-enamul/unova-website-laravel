/* ================================
   NEURAL NETWORK ANIMATION
================================ */
(function () {
    const canvas = document.getElementById('neuralCanvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    const ACCENT  = '#00D1C6';
    const PURPLE  = '#6C63FF';
    const PINK    = '#FF6B9D';
    const WHITE   = '#ffffff';
    const COLORS  = [ACCENT, ACCENT, ACCENT, PURPLE, PURPLE, PINK, WHITE];

    let W, H, nodes, pulses, frame;
    const COUNT = 62;
    const LINK_DIST = 130;
    const mouse = { x: -9999, y: -9999 };

    function hexRgba(hex, a) {
        const r = parseInt(hex.slice(1, 3), 16);
        const g = parseInt(hex.slice(3, 5), 16);
        const b = parseInt(hex.slice(5, 7), 16);
        return `rgba(${r},${g},${b},${a})`;
    }

    class Node {
        constructor() {
            this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            this.x  = Math.random() * W;
            this.y  = Math.random() * H;
            const ang = Math.random() * Math.PI * 2;
            const spd = Math.random() * 0.4 + 0.2;
            this.vx = Math.cos(ang) * spd;
            this.vy = Math.sin(ang) * spd;
            this.baseR = Math.random() * 3.5 + 1.5;
            this.r  = this.baseR;
            this.alpha = Math.random() * 0.4 + 0.55;
            this.phase = Math.random() * Math.PI * 2;
            this.speed = Math.random() * 0.018 + 0.008;
            this.active = Math.random() < 0.28;
            this.glowSize = this.active ? 18 : 7;
        }
        update() {
            const dx = this.x - mouse.x, dy = this.y - mouse.y;
            const d  = Math.sqrt(dx * dx + dy * dy);
            if (d < 110 && d > 0) {
                const f = (110 - d) / 110 * 0.35;
                this.vx += dx / d * f;
                this.vy += dy / d * f;
            }
            this.vx *= 0.998; this.vy *= 0.998;
            // Enforce minimum speed so nodes never stop
            const spd = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
            if (spd < 0.15) { this.vx = this.vx / spd * 0.15; this.vy = this.vy / spd * 0.15; }
            this.x  += this.vx; this.y += this.vy;
            if (this.x < 0 || this.x > W) this.vx *= -1;
            if (this.y < 0 || this.y > H) this.vy *= -1;
            this.x = Math.max(0, Math.min(W, this.x));
            this.y = Math.max(0, Math.min(H, this.y));
            this.phase += this.speed;
            const p = Math.sin(this.phase);
            this.r = this.baseR + (this.active ? p * 1.8 : p * 0.4);
            this.curAlpha = this.alpha + (this.active ? p * 0.25 : 0);
        }
        draw() {
            const g = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.glowSize);
            g.addColorStop(0, hexRgba(this.color, this.curAlpha * 0.55));
            g.addColorStop(1, hexRgba(this.color, 0));
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.glowSize, 0, Math.PI * 2);
            ctx.fillStyle = g;
            ctx.fill();
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.globalAlpha = this.curAlpha;
            ctx.fill();
            if (this.r > 2.5) {
                ctx.beginPath();
                ctx.arc(this.x - this.r * 0.25, this.y - this.r * 0.25, this.r * 0.4, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(255,255,255,0.5)';
                ctx.fill();
            }
            ctx.globalAlpha = 1;
        }
    }

    class Pulse {
        constructor(a, b) {
            this.a = a; this.b = b;
            this.t = 0;
            this.speed = Math.random() * 0.018 + 0.009;
            this.color = a.color;
            this.sz = Math.random() * 2.5 + 1.2;
        }
        update() { this.t += this.speed; return this.t < 1; }
        draw() {
            const x = this.a.x + (this.b.x - this.a.x) * this.t;
            const y = this.a.y + (this.b.y - this.a.y) * this.t;
            const tail = Math.max(0, this.t - 0.12);
            const tx = this.a.x + (this.b.x - this.a.x) * tail;
            const ty = this.a.y + (this.b.y - this.a.y) * tail;
            const grad = ctx.createLinearGradient(tx, ty, x, y);
            grad.addColorStop(0, hexRgba(this.color, 0));
            grad.addColorStop(1, hexRgba(this.color, 0.8));
            ctx.beginPath();
            ctx.moveTo(tx, ty); ctx.lineTo(x, y);
            ctx.strokeStyle = grad;
            ctx.lineWidth = this.sz * 0.9;
            ctx.stroke();
            const hg = ctx.createRadialGradient(x, y, 0, x, y, this.sz * 3.5);
            hg.addColorStop(0, hexRgba(this.color, 0.9));
            hg.addColorStop(1, hexRgba(this.color, 0));
            ctx.beginPath(); ctx.arc(x, y, this.sz * 3.5, 0, Math.PI * 2);
            ctx.fillStyle = hg; ctx.fill();
            ctx.beginPath(); ctx.arc(x, y, this.sz, 0, Math.PI * 2);
            ctx.fillStyle = '#fff'; ctx.globalAlpha = 0.95; ctx.fill();
            ctx.globalAlpha = 1;
        }
    }

    function resize() {
        const w = canvas.offsetWidth, h = canvas.offsetHeight;
        if (w > 0 && h > 0) { W = canvas.width = w; H = canvas.height = h; }
    }

    let tick = 0;
    function draw() {
        ctx.clearRect(0, 0, W, H);

        for (let i = 0; i < nodes.length; i++) {
            for (let j = i + 1; j < nodes.length; j++) {
                const dx = nodes[i].x - nodes[j].x;
                const dy = nodes[i].y - nodes[j].y;
                const d  = Math.sqrt(dx * dx + dy * dy);
                if (d < LINK_DIST) {
                    const alpha = (1 - d / LINK_DIST) * 0.28;
                    const gl = ctx.createLinearGradient(nodes[i].x, nodes[i].y, nodes[j].x, nodes[j].y);
                    gl.addColorStop(0, hexRgba(nodes[i].color, alpha));
                    gl.addColorStop(1, hexRgba(nodes[j].color, alpha));
                    ctx.beginPath();
                    ctx.moveTo(nodes[i].x, nodes[i].y);
                    ctx.lineTo(nodes[j].x, nodes[j].y);
                    ctx.strokeStyle = gl;
                    ctx.lineWidth = (1 - d / LINK_DIST) * 1.1;
                    ctx.stroke();
                }
            }
        }

        tick++;
        if (tick % 22 === 0) {
            const from = nodes[Math.floor(Math.random() * nodes.length)];
            const near = nodes.filter(n => n !== from && Math.hypot(n.x - from.x, n.y - from.y) < LINK_DIST);
            if (near.length) pulses.push(new Pulse(from, near[Math.floor(Math.random() * near.length)]));
        }

        pulses = pulses.filter(p => { p.draw(); return p.update(); });
        nodes.forEach(n => { n.update(); n.draw(); });

        frame = requestAnimationFrame(draw);
    }

    canvas.addEventListener('mousemove', e => {
        const r = canvas.getBoundingClientRect();
        mouse.x = e.clientX - r.left;
        mouse.y = e.clientY - r.top;
    });
    canvas.addEventListener('mouseleave', () => { mouse.x = -9999; mouse.y = -9999; });

    window.addEventListener('resize', () => {
        cancelAnimationFrame(frame);
        resize();
        if (W > 0 && H > 0) draw();
    });

    document.addEventListener('visibilitychange', () => {
        if (!document.hidden) { cancelAnimationFrame(frame); frame = requestAnimationFrame(draw); }
    });

    function start() {
        resize();
        if (W === 0 || H === 0) { requestAnimationFrame(start); return; }
        nodes  = Array.from({ length: COUNT }, () => new Node());
        pulses = [];
        draw();
    }

    requestAnimationFrame(start);
})();

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
(function () {
    const allNavLinks = document.querySelectorAll('.nav-links a');
    const path = window.location.pathname;
    const pageSeg = path.split('/').pop().replace('.html', '') || 'index';

    function setActive(matchHref) {
        allNavLinks.forEach(l => l.classList.remove('active'));
        allNavLinks.forEach(l => {
            if (l.getAttribute('href') === matchHref) l.classList.add('active');
        });
    }

    // Detect current page and set active
    allNavLinks.forEach(link => {
        const href = link.getAttribute('href') || '';
        const linkSeg = href.split('/').pop().replace('.html', '').split('#')[0] || 'index';
        if (linkSeg === pageSeg && !href.startsWith('#')) {
            link.classList.add('active');
        }
    });

    // Click → immediate active
    allNavLinks.forEach(link => {
        link.addEventListener('click', function () {
            setActive(this.getAttribute('href'));
        });
    });

    // On index page: watch sections via scroll
    if (pageSeg === 'index') {
        const sections = [
            { id: 'products', href: '#products' },
            { id: 'services', href: '#services' }
        ];

        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const s = sections.find(x => x.id === entry.target.id);
                    if (s) setActive(s.href);
                }
            });
        }, { threshold: 0.25, rootMargin: '-70px 0px -35% 0px' });

        sections.forEach(s => {
            const el = document.getElementById(s.id);
            if (el) obs.observe(el);
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY < 200) setActive('index.html');
        }, { passive: true });
    }
})();

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
