<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/logo.png') }}" alt="Unova Software" class="site-logo">
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ $isHome ? '#industries' : route('home') . '#industries' }}">Industry</a></li>
            <li><a href="{{ $isHome ? '#services' : route('home') . '#services' }}">Services</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <div class="nav-actions">
            <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle dark mode">
                <i class="ph ph-moon" id="darkModeIcon"></i>
            </button>
            <a href="{{ route('book') }}" class="btn btn-primary">Book a Meeting</a>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
