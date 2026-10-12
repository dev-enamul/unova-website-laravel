<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/logo.png') }}" alt="Unova Software" class="site-logo">
                </a>
                <p>Bangladesh's leading AI automation company. We help businesses work smarter — less manual work, more results.</p>
                <div class="footer-contact-list">
                    <div class="footer-contact-item">
                        <i class="ph ph-envelope"></i>
                        <a href="mailto:info@unova.bd">info@unova.bd</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="ph ph-phone"></i>
                        <a href="tel:+8801766774016">+880 1766774016</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="ph ph-map-pin"></i>
                        <span>Dhaka, Bangladesh</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/unovarem" target="_blank" rel="noopener" class="social-link" aria-label="Facebook"><i class="ph ph-facebook-logo"></i></a>
                    <a href="https://www.linkedin.com/company/theunova" target="_blank" rel="noopener" class="social-link" aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
                </div>
            </div>
            <div class="footer-links-col">
                <h4>Industries</h4>
                <ul>
                    <li><a href="{{ route('industries.show', 'real-estate') }}">Real Estate</a></li>
                    <li><a href="{{ route('home') }}#industries">Education</a></li>
                    <li><a href="{{ route('home') }}#industries">Digital Marketing</a></li>
                    <li><a href="{{ route('home') }}#industries">Industrial & B2B</a></li>
                    <li><a href="{{ route('home') }}#industries">View All →</a></li>
                </ul>
            </div>
            <div class="footer-links-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('book') }}">Book a Meeting</a></li>
                </ul>
            </div>
            <div class="footer-links-col">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Unova. All rights reserved.</p>
            <div class="footer-bottom-badge">Made with <span>♥</span> in Bangladesh</div>
            <div class="footer-bottom-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </div>
</footer>
