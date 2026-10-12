<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/fav-Icon.png') }}">
    <title>@yield('title', "Unova | #1 AI Automation & Business Software Company in Bangladesh")</title>
    @yield('meta')
    @yield('schema')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>

<body>

    @yield('preloader')

    <!-- Scroll Progress -->
    <div class="scroll-progress" id="scrollProgress"></div>

    @yield('widget')

    @include('partials.navbar', ['isHome' => $isHome ?? false])

    @include('partials.mobile-menu')

    @yield('content')

    @include('partials.footer')

    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="ph ph-arrow-up"></i>
    </button>

    @yield('meet-widget')

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
