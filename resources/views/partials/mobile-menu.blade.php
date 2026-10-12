<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ $isHome ? '#industries' : route('home') . '#industries' }}">Industry</a></li>
        <li><a href="{{ $isHome ? '#services' : route('home') . '#services' }}">Services</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('contact') }}" class="btn btn-accent">Contact Us</a></li>
    </ul>
</div>
