@extends('layouts.app')

@php($isHome = false)

@section('title', 'Contact Unova | AI Automation Company Bangladesh')

@section('meta')
    <meta name="description" content="Get in touch with Unova — Bangladesh's leading AI automation company. Call, email, or book a free discovery call. We help businesses automate with AI.">
    <meta name="keywords" content="contact Unova Bangladesh, AI automation Dhaka, business automation contact, real estate software Bangladesh contact">
    <meta property="og:title" content="Contact Unova | AI Business Automation Bangladesh">
    <meta property="og:description" content="Talk to our team. We'll study your business and show you how AI can save you time and money.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://unova.bd/contact.html">
    <meta property="og:image" content="https://unova.bd/assets/OG.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Unova | AI Automation Bangladesh">
    <meta name="twitter:description" content="Talk to our team. Free business audit — we'll show you how AI can save you time and money.">
    <meta name="twitter:image" content="https://unova.bd/assets/OG.png">
    <link rel="canonical" href="https://unova.bd/contact.html">
@endsection

@section('schema')
    <script type="application/ld+json">
    @verbatim
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "url": "https://unova.bd/contact.html",
      "name": "Contact Unova",
      "description": "Get in touch with Unova — Bangladesh's leading AI automation company.",
      "publisher": {
        "@type": "Organization",
        "name": "Unova",
        "url": "https://unova.bd",
        "telephone": "+8801766774016",
        "email": "info@unova.bd"
      }
    }
    @endverbatim
    </script>
@endsection

@push('styles')
<style>
    .map-placeholder {
        background: var(--bg-light);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 32px;
        color: var(--text-muted);
        font-size: 0.9rem;
        gap: 10px;
    }
    .map-placeholder i { font-size: 1.5rem; color: var(--accent-color); }

    .offices-section { padding: 100px 0; background: var(--bg-light); }
    .offices-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }
    .office-card {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 36px;
        transition: var(--transition);
    }
    .office-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
    .office-flag {
        font-size: 2.5rem;
        margin-bottom: 16px;
        display: block;
    }
    .office-card h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 8px; }
    .office-card p { font-size: 0.88rem; color: var(--text-color); line-height: 1.7; }
    .office-card .office-tag {
        display: inline-block;
        background: var(--accent-glow);
        color: var(--accent-color);
        font-size: 0.75rem;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 50px;
        margin-bottom: 12px;
    }

    @media (max-width: 1024px) {
        .offices-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
        .offices-grid { grid-template-columns: 1fr; }
    }
</style>
@endpush

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-bg"></div>
        <div class="container">
            <div class="page-hero-content reveal-up">
                <span class="section-tag">Get In Touch</span>
                <h1>Talk to Our <span class="highlight">AI Experts</span></h1>
                <p>Tell us about your business. We'll show you exactly how AI can save you time and help you grow — no technical knowledge needed.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info reveal-left">
                    <span class="section-tag">Contact Info</span>
                    <h2>Let's Talk About <span class="highlight">Your Business</span></h2>
                    <p>Tell us about your business and we'll show you how AI automation can save you time and help you grow. We reply within 24 hours.</p>
                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="ph ph-envelope"></i></div>
                            <div class="contact-item-text">
                                <strong>Email Us</strong>
                                <span>info@unova.bd</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="ph ph-phone"></i></div>
                            <div class="contact-item-text">
                                <strong>Call Us</strong>
                                <span>+880 1766774016</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="ph ph-map-pin"></i></div>
                            <div class="contact-item-text">
                                <strong>Head Office</strong>
                                <span>Dhaka, Bangladesh</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="ph ph-clock"></i></div>
                            <div class="contact-item-text">
                                <strong>Business Hours</strong>
                                <span>Mon – Fri, 9am – 6pm (BST)</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="reveal-right">
                    <div class="contact-form">
                        <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:8px;letter-spacing:-0.3px">Send Us a Message</h3>
                        <p style="color:var(--text-color);font-size:0.9rem;margin-bottom:28px;line-height:1.6">Tell us about your business and what you need. We'll get back to you within one business day with a clear, honest reply.</p>
                        <form id="contactForm" onsubmit="handleSubmit(event)">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" placeholder="John" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastName" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" placeholder="john@company.com" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject">
                                    <option value="">Select a topic...</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="products">Product Question</option>
                                    <option value="support">Technical Support</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" placeholder="Tell us about your project or question..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-accent form-submit">
                                Send Message <i class="ph ph-paper-plane-right"></i>
                            </button>
                        </form>
                        <div id="successMsg" style="display:none;margin-top:20px;padding:18px 20px;background:var(--accent-glow);border:1px solid rgba(0,209,198,0.3);border-radius:10px;color:var(--accent-color);font-weight:600;font-size:0.92rem;display:none;align-items:center;gap:10px">
                            <i class="ph-fill ph-check-circle" style="font-size:1.2rem"></i>
                            Message sent! We'll get back to you within 24 hours.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner reveal-up">
                <div class="cta-glow"></div>
                <span class="section-tag light">Follow Unova</span>
                <h2>Stay Updated <span class="highlight">Online</span></h2>
                <p>Follow us on social media for AI tips, product updates, and real stories from businesses we've helped automate.</p>
                <div class="cta-buttons">
                    <a href="https://www.facebook.com/unovarem" target="_blank" rel="noopener" class="btn btn-accent"><i class="ph ph-facebook-logo"></i> Facebook</a>
                    <a href="https://www.linkedin.com/company/theunova" target="_blank" rel="noopener" class="btn btn-outline-white"><i class="ph ph-linkedin-logo"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    function handleSubmit(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        btn.textContent = 'Sending...';
        btn.disabled = true;
        setTimeout(() => {
            e.target.style.display = 'none';
            const msg = document.getElementById('successMsg');
            msg.style.display = 'flex';
        }, 1200);
    }
</script>
@endpush
