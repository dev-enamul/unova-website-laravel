@extends('layouts.app')

@php($isHome = false)

@section('title', 'Book a Free Discovery Call | Unova AI Automation Bangladesh')

@section('meta')
    <meta name="description" content="Book a free call with Unova's AI experts. We'll study your business and show you exactly how AI can automate your work — no commitment, no tech knowledge needed.">
    <meta name="keywords" content="book meeting Unova, AI automation consultation Bangladesh, free business audit Bangladesh, real estate AI consultation">
    <meta property="og:title" content="Book a Free AI Consultation | Unova Bangladesh">
    <meta property="og:description" content="Book a free discovery call with Unova. We'll audit your business and show you where AI can save you time and money.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://unova.bd/book.html">
    <meta property="og:image" content="https://unova.bd/assets/OG.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Book a Free AI Consultation | Unova Bangladesh">
    <meta name="twitter:description" content="Free discovery call — we'll study your business and show you how AI automation can help.">
    <meta name="twitter:image" content="https://unova.bd/assets/OG.png">
    <link rel="canonical" href="https://unova.bd/book.html">
@endsection

@section('schema')
    <script type="application/ld+json">
    @verbatim
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "Free AI Business Discovery Call with Unova",
      "description": "Book a free consultation with Unova's AI experts. We audit your business and show you exactly how AI can automate your work.",
      "url": "https://unova.bd/book.html",
      "organizer": {
        "@type": "Organization",
        "name": "Unova",
        "url": "https://unova.bd"
      },
      "location": {
        "@type": "VirtualLocation",
        "url": "https://calendly.com/unovabd/30min"
      },
      "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
      "isAccessibleForFree": true
    }
    @endverbatim
    </script>
@endsection

@push('styles')
<style>
    .book-hero {
        padding: 100px 0 16px;
        text-align: center;
    }

    .book-hero h1 {
        font-size: 2.2rem;
        font-weight: 900;
        letter-spacing: -0.5px;
        margin-bottom: 8px;
    }

    .book-hero p {
        font-size: 0.92rem;
        color: var(--text-color);
        max-width: 440px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .calendly-wrap {
        padding: 72px 0 40px;
    }

    .calendly-inline-widget {
        min-width: 320px;
        height: 700px;
        border: none;
    }
</style>
@endpush

@section('content')

    <!-- Calendly Embed -->
    <section class="calendly-wrap">
        <div class="container">
            <div class="reveal-up" style="--delay:0.1s">
                <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                <script>
                    var _calBase = 'https://calendly.com/unovabd/30min?hide_gdpr_banner=1';
                    var _calDark = _calBase + '&background_color=151515&text_color=ffffff&primary_color=00d1c6';
                    var _calUrl = localStorage.getItem('theme') === 'dark' ? _calDark : _calBase;
                    document.write('<div class="calendly-inline-widget" id="calendlyWidget" data-url="' + _calUrl + '" style="min-width:320px;height:700px;"></div>');
                </script>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            setTimeout(function() {
                var widget = document.getElementById('calendlyWidget');
                var isDark = document.body.classList.contains('dark');
                var base = 'https://calendly.com/unovabd/30min?hide_gdpr_banner=1';
                var dark = base + '&background_color=151515&text_color=ffffff&primary_color=00d1c6';
                var url = isDark ? dark : base;
                widget.innerHTML = '';
                widget.setAttribute('data-url', url);
                Calendly.initInlineWidget({ url: url, parentElement: widget });
            }, 80);
        });
    </script>

@endsection
