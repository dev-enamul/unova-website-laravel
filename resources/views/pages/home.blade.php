@extends('layouts.app')

@php($isHome = true)

@section('title', "Unova | #1 AI Automation & Business Software Company in Bangladesh")

@section('meta')
    <meta name="description" content="Unova is Bangladesh's leading AI automation company. We audit your business, find where AI can save you time and money, then build smart software to make it happen — starting with real estate.">
    <meta name="keywords" content="AI automation Bangladesh, business automation Bangladesh, real estate software Bangladesh, AI software company Bangladesh, business process automation Dhaka, Unova, real estate CRM Bangladesh, AI integration service Bangladesh">
    <meta name="author" content="Unova">
    <meta property="og:title" content="Unova | AI Automation & Business Software Bangladesh">
    <meta property="og:description" content="Bangladesh's #1 AI automation company. We audit your business and build smart software to automate it — starting with real estate.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://unova.bd/">
    <meta property="og:image" content="https://unova.bd/assets/OG.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Unova | AI Automation Bangladesh">
    <meta name="twitter:description" content="We help businesses in Bangladesh automate smarter using AI — from real estate to 20+ industries.">
    <meta name="twitter:image" content="https://unova.bd/assets/OG.png">
    <link rel="canonical" href="https://unova.bd/">
@endsection

@section('schema')
    <script type="application/ld+json">
    @verbatim
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://unova.bd/#organization",
          "name": "Unova",
          "url": "https://unova.bd",
          "logo": "https://unova.bd/assets/OG.png",
          "description": "Bangladesh's leading AI automation company. We audit businesses, find where AI helps most, and build smart software to automate it.",
          "email": "info@unova.bd",
          "telephone": "+8801766774016",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dhaka",
            "addressCountry": "BD"
          },
          "sameAs": [
            "https://www.facebook.com/unovarem",
            "https://www.linkedin.com/company/theunova"
          ]
        },
        {
          "@type": "LocalBusiness",
          "@id": "https://unova.bd/#localbusiness",
          "name": "Unova",
          "description": "AI automation and business software company in Dhaka, Bangladesh. Specializing in real estate automation and industry-specific software.",
          "url": "https://unova.bd",
          "telephone": "+8801766774016",
          "email": "info@unova.bd",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dhaka",
            "addressCountry": "BD"
          },
          "openingHours": "Mo-Fr 09:00-18:00",
          "priceRange": "$$",
          "sameAs": [
            "https://www.facebook.com/unovarem",
            "https://www.linkedin.com/company/theunova"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://unova.bd/#website",
          "url": "https://unova.bd",
          "name": "Unova",
          "publisher": { "@id": "https://unova.bd/#organization" }
        },
        {
          "@type": "SoftwareApplication",
          "name": "Unova",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "Web, iOS, Android",
          "description": "AI-powered real estate business management software for Bangladesh. Manage leads, site visits, property listings, and agent commissions.",
          "url": "https://estate.unova.bd",
          "offers": { "@type": "Offer", "price": "0", "priceCurrency": "BDT" },
          "author": { "@id": "https://unova.bd/#organization" }
        }
      ]
    }
    @endverbatim
    </script>
@endsection

@section('preloader')
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="preloader-logo">
                <img src="{{ asset('assets/logo.png') }}" alt="Unova Software" class="site-logo">
            </div>
            <div class="preloader-bar">
                <div class="preloader-progress"></div>
            </div>
        </div>
    </div>
@endsection

@section('widget')
    <script src="http://127.0.0.1:8000/widget.js" data-base-url="http://127.0.0.1:8000" data-token="rfpdQfkivBXI0UwTpwQS2ljnDVrblWywUCYkXDJ7"></script>
@endsection

@section('content')

    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-grid"></div>
        <div class="container hero-container">
            <div class="hero-content reveal-left">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Bangladesh's #1 AI Automation Company
                </div>
                <h1>We Automate Your Business <span class="highlight typed-text" id="typedText"></span><span class="cursor-blink">|</span></h1>
                <div class="hero-sub">
                    <p>We study your business, find where AI can save you time and money, and then build the software to make it happen. Less manual work. More results.</p>
                    <div class="hero-cta-group">
                        <a href="{{ route('about') }}" class="btn btn-accent">About Us <i class="ph ph-arrow-right"></i></a>
                        <a href="{{ route('book') }}" class="btn btn-outline">Book a Meeting</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number counter" data-target="99">0</span><span class="stat-suffix-hero">%</span></div>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number counter" data-target="99">0</span><span class="stat-suffix-hero">%</span></div>
                            <span class="stat-label">On-Time Delivery</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number">24/7</span></div>
                            <span class="stat-label">Expert Support</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image reveal-right">
                <div class="hero-neural-wrap">
                    <canvas id="neuralCanvas"></canvas>
                    <div class="neural-float neural-float-1">
                        <i class="ph-fill ph-seal-check"></i>
                        <div class="neural-float-text">
                            <span class="nf-label">Client Satisfaction</span>
                            <span class="nf-val">99%</span>
                        </div>
                        <div class="nf-dot"></div>
                    </div>
                    <div class="neural-float neural-float-2">
                        <i class="ph-fill ph-clock-countdown"></i>
                        <div class="neural-float-text">
                            <span class="nf-label">Avg. Time Saved</span>
                            <span class="nf-val">40 hrs/mo</span>
                        </div>
                    </div>
                    <div class="neural-float neural-float-3">
                        <i class="ph-fill ph-trend-up"></i>
                        <div class="neural-float-text">
                            <span class="nf-label">Revenue Growth</span>
                            <span class="nf-val">3.2× ROI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Industries Marquee -->
    <section class="trusted-by">
        <div class="container">
            <p class="trusted-label">Industries We Serve</p>
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-inner">
                <span class="marquee-item"><i class="ph-fill ph-buildings"></i> Real Estate</span>
                <span class="marquee-item"><i class="ph-fill ph-couch"></i> Interior Design</span>
                <span class="marquee-item"><i class="ph-fill ph-megaphone"></i> Digital Marketing</span>
                <span class="marquee-item"><i class="ph-fill ph-graduation-cap"></i> Study Abroad Consultancy</span>
                <span class="marquee-item"><i class="ph-fill ph-video-camera"></i> Video Production</span>
                <span class="marquee-item"><i class="ph-fill ph-chalkboard-teacher"></i> Training & Skill Development</span>
                <span class="marquee-item"><i class="ph-fill ph-calculator"></i> Accounting & Tax Consultancy</span>
                <span class="marquee-item"><i class="ph-fill ph-scales"></i> Law Firm</span>
                <span class="marquee-item"><i class="ph-fill ph-confetti"></i> Event Management</span>
                <span class="marquee-item"><i class="ph-fill ph-broom"></i> Cleaning Service</span>
                <span class="marquee-item"><i class="ph-fill ph-shield-check"></i> Security Service</span>
                <span class="marquee-item"><i class="ph-fill ph-users"></i> HR & Recruitment</span>
                <!-- Duplicate for seamless loop -->
                <span class="marquee-item"><i class="ph-fill ph-buildings"></i> Real Estate</span>
                <span class="marquee-item"><i class="ph-fill ph-couch"></i> Interior Design</span>
                <span class="marquee-item"><i class="ph-fill ph-megaphone"></i> Digital Marketing</span>
                <span class="marquee-item"><i class="ph-fill ph-graduation-cap"></i> Study Abroad Consultancy</span>
                <span class="marquee-item"><i class="ph-fill ph-video-camera"></i> Video Production</span>
                <span class="marquee-item"><i class="ph-fill ph-chalkboard-teacher"></i> Training & Skill Development</span>
                <span class="marquee-item"><i class="ph-fill ph-calculator"></i> Accounting & Tax Consultancy</span>
                <span class="marquee-item"><i class="ph-fill ph-scales"></i> Law Firm</span>
                <span class="marquee-item"><i class="ph-fill ph-confetti"></i> Event Management</span>
                <span class="marquee-item"><i class="ph-fill ph-broom"></i> Cleaning Service</span>
                <span class="marquee-item"><i class="ph-fill ph-shield-check"></i> Security Service</span>
                <span class="marquee-item"><i class="ph-fill ph-users"></i> HR & Recruitment</span>
            </div>
        </div>
    </section>

    <!-- Industries Showcase Section -->
    <section class="products-showcase" id="industries">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Industries</span>
                <h2>Smart Software for <span class="highlight">Every Industry</span></h2>
                <p>Smart software purpose-built for every industry we serve.</p>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs reveal-up" style="--delay:0.1s">
                <button class="filter-tab active" data-filter="all">All Industry</button>
                <button class="filter-tab" data-filter="real-estate">Real Estate</button>
                <button class="filter-tab" data-filter="creative">Creative & Marketing</button>
                <button class="filter-tab" data-filter="education">Education</button>
                <button class="filter-tab" data-filter="service">Service Business</button>
                <button class="filter-tab" data-filter="industrial">Industrial & B2B</button>
            </div>

            <!-- Products Grid -->
            <div class="nova-products-grid">

                <div class="nova-card nova-card-featured" data-category="real-estate">
                    <div class="nova-card-featured-icon"><i class="ph-fill ph-buildings"></i></div>
                    <div class="nova-card-featured-body">
                        <span class="nova-industry">Our Main Industry</span>
                        <h3>Real Estate</h3>
                        <p>Bangladesh's first AI-powered Real Estate ERP — manage leads, site visits, property inventory, installments, commissions, and accounting in one platform.</p>
                        <a href="{{ route('industries.show', 'real-estate') }}" class="nova-link">View Industry Details <i class="ph ph-arrow-right"></i></a>
                    </div>
                </div>

                <div class="nova-card" data-category="creative">
                    <div class="nova-card-top" style="--card-color:#9B59B6"></div>
                    <div class="nova-icon" style="--card-color:#9B59B6"><i class="ph-fill ph-couch"></i></div>
                    <h3>Interior Design</h3>
                    <p>From first inquiry to final project handover — manage client briefs, material procurement, design milestones, and designer commissions seamlessly.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="creative">
                    <div class="nova-card-top" style="--card-color:#6DC042"></div>
                    <div class="nova-icon" style="--card-color:#6DC042"><i class="ph-fill ph-megaphone"></i></div>
                    <h3>Digital Marketing</h3>
                    <p>Track every lead from first contact to campaign delivery — manage client projects, creative assets, team tasks, and sales commissions with full visibility.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="education">
                    <div class="nova-card-top" style="--card-color:#3498DB"></div>
                    <div class="nova-icon" style="--card-color:#3498DB"><i class="ph-fill ph-graduation-cap"></i></div>
                    <h3>Study Abroad Consultancy</h3>
                    <p>From student inquiry to visa approval — manage document checklists, university applications, counselor commissions, and case progress in one dashboard.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="creative">
                    <div class="nova-card-top" style="--card-color:#E74C3C"></div>
                    <div class="nova-icon" style="--card-color:#E74C3C"><i class="ph-fill ph-video-camera"></i></div>
                    <h3>Video Production</h3>
                    <p>From client brief to final file delivery — manage shoots, equipment scheduling, crew assignments, project milestones, and invoicing for video studios.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="education">
                    <div class="nova-card-top" style="--card-color:#F39C12"></div>
                    <div class="nova-icon" style="--card-color:#F39C12"><i class="ph-fill ph-chalkboard-teacher"></i></div>
                    <h3>Training & Skill Development</h3>
                    <p>From enrollment to certification — manage courses, batches, learner progress, attendance, trainer commissions, and digital certificate issuance effortlessly.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#1ABC9C"></div>
                    <div class="nova-icon" style="--card-color:#1ABC9C"><i class="ph-fill ph-calculator"></i></div>
                    <h3>Accounting & Tax Consultancy</h3>
                    <p>From client onboarding to tax filing — manage ledgers, payroll, financial reports, document tracking, and staff performance for accounting firms.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#2C3E50"></div>
                    <div class="nova-icon" style="--card-color:#2C3E50"><i class="ph-fill ph-scales"></i></div>
                    <h3>Law Firm</h3>
                    <p>From client intake to case closure — manage cases, legal documents, hearing schedules, attorney billing, and retainers in one secure platform.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#E91E63"></div>
                    <div class="nova-icon" style="--card-color:#E91E63"><i class="ph-fill ph-confetti"></i></div>
                    <h3>Event Management</h3>
                    <p>From booking to event day — manage guest lists, vendor coordination, timelines, budgets, staff assignments, and post-event follow-ups in one platform.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#00BCD4"></div>
                    <div class="nova-icon" style="--card-color:#00BCD4"><i class="ph-fill ph-broom"></i></div>
                    <h3>Cleaning Service</h3>
                    <p>From booking to job completion — schedule crews, track service quality, manage supply inventory, and handle client invoicing without the chaos.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#607D8B"></div>
                    <div class="nova-icon" style="--card-color:#607D8B"><i class="ph-fill ph-shield-check"></i></div>
                    <h3>Security Service</h3>
                    <p>From contract to deployment — manage guard rosters, shift schedules, incident reports, client site monitoring, and patrol logs from one command center.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="service">
                    <div class="nova-card-top" style="--card-color:#FF5722"></div>
                    <div class="nova-icon" style="--card-color:#FF5722"><i class="ph-fill ph-users-three"></i></div>
                    <h3>HR & Recruitment</h3>
                    <p>From job posting to onboarding — manage candidate pipelines, interviews, offer letters, recruiter commissions, and employee records in one HR platform.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#795548"></div>
                    <div class="nova-icon" style="--card-color:#795548"><i class="ph-fill ph-gear-six"></i></div>
                    <h3>Industrial Machinery</h3>
                    <p>From inquiry to installation — manage machine inventory, project timelines, maintenance schedules, service logs, and sales commissions for machinery businesses.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#5C6BC0"></div>
                    <div class="nova-icon" style="--card-color:#5C6BC0"><i class="ph-fill ph-elevator"></i></div>
                    <h3>Elevator & Lift</h3>
                    <p>From sale to AMC renewal — manage elevator installations, spare parts inventory, technician dispatch, complaint handling, and annual contract renewals.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#FFA000"></div>
                    <div class="nova-icon" style="--card-color:#FFA000"><i class="ph-fill ph-lightning"></i></div>
                    <h3>Generator & Power</h3>
                    <p>From inquiry to service contract — manage generator sales, rentals, fuel consumption logs, maintenance schedules, and AMC agreements for power businesses.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#FF7043"></div>
                    <div class="nova-icon" style="--card-color:#FF7043"><i class="ph-fill ph-crane"></i></div>
                    <h3>Construction Equipment</h3>
                    <p>From enquiry to equipment return — manage fleet availability, rental agreements, operator scheduling, maintenance logs, and damage tracking for construction firms.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#F44336"></div>
                    <div class="nova-icon" style="--card-color:#F44336"><i class="ph-fill ph-fire-extinguisher"></i></div>
                    <h3>Fire Safety Equipment</h3>
                    <p>From sale to annual inspection — manage equipment inventory, installation records, inspection schedules, compliance certifications, and refill tracking for fire safety firms.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#26C6DA"></div>
                    <div class="nova-icon" style="--card-color:#26C6DA"><i class="ph-fill ph-wind"></i></div>
                    <h3>HVAC & Cooling</h3>
                    <p>From installation to AMC renewal — manage AC units, preventive maintenance visits, spare parts inventory, technician assignments, and service history for HVAC companies.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

                <div class="nova-card" data-category="industrial">
                    <div class="nova-card-top" style="--card-color:#AB47BC"></div>
                    <div class="nova-icon" style="--card-color:#AB47BC"><i class="ph-fill ph-flask"></i></div>
                    <h3>Chemical & Raw Material</h3>
                    <p>From order to batch delivery — manage raw material sourcing, batch processing, safety data sheets, supplier relations, and stock levels for chemical businesses.</p>
                    <a href="#" class="nova-link">Explore <i class="ph ph-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>



    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-box reveal-up" style="--delay:0s">
                    <div class="stat-num-row"><span class="stat-count counter" data-target="20">0</span><span class="stat-suffix">+</span></div>
                    <p>Industries Covered</p>
                </div>
                <div class="stat-box reveal-up" style="--delay:0.1s">
                    <div class="stat-num-row"><span class="stat-count counter" data-target="99">0</span><span class="stat-suffix">%</span></div>
                    <p>Client Satisfaction</p>
                </div>
                <div class="stat-box reveal-up" style="--delay:0.2s">
                    <div class="stat-num-row"><span class="stat-count stat-text">24/7</span></div>
                    <p>Expert Support</p>
                </div>
                <div class="stat-box reveal-up" style="--delay:0.3s">
                    <div class="stat-num-row"><span class="stat-count stat-text">AI</span></div>
                    <p>Powered — Every Product</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="teams" id="services">
        <div class="container">
            <div class="teams-header">
                <h2 class="reveal-left"><span class="our-text">Our</span> <span class="services-text">Services</span></h2>
                <p class="reveal-right">We study your business and use <span class="services-ai-highlight">AI to automate it.</span></p>
            </div>
            <div class="services-layout">
                <!-- Featured: AI -->
                <div class="service-featured reveal-left">
                    <div class="sf-glow"></div>
                    <div class="sf-icon"><i class="ph-fill ph-brain"></i></div>
                    <span class="sf-tag">What We Do Best</span>
                    <h3>AI Business Automation</h3>
                    <p>Most businesses waste hours every day on tasks that AI can do automatically. We come in, study how your business works, and find exactly where AI can save you the most time and money. Then we build it — and hand it over to you, fully working.</p>
                    <div class="sf-steps">
                        <div class="sf-step"><span>01</span> Audit Your Business</div>
                        <div class="sf-step"><span>02</span> Design the Solution</div>
                        <div class="sf-step"><span>03</span> Build & Automate</div>
                    </div>
                </div>

                <!-- Right stack -->
                <div class="services-stack">
                    <div class="service-card reveal-right" style="--delay:0s">
                        <div class="sc-icon"><i class="ph-fill ph-buildings"></i></div>
                        <div class="sc-body">
                            <h3>Industry-Specific Software</h3>
                            <p>We build complete business management software for specific industries — not a generic tool that barely fits, but a system built exactly for how your industry works.</p>
                            <div class="sc-tags">
                                <span>Real Estate</span>
                                <span>Law Firm</span>
                                <span>HR & Recruitment</span>
                                <span>Event Management</span>
                                <span>Accounting</span>
                                <span>+15 more</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-card reveal-right" style="--delay:0.12s">
                        <div class="sc-icon"><i class="ph-fill ph-devices"></i></div>
                        <div class="sc-body">
                            <h3>Web & Mobile Apps</h3>
                            <p>Need a website, web app, or mobile app? We build clean, fast, and easy-to-use digital products that work perfectly on every screen and device.</p>
                            <div class="sc-tags">
                                <span>React</span>
                                <span>Flutter</span>
                                <span>Node.js</span>
                                <span>REST API</span>
                                <span>PWA</span>
                                <span>iOS & Android</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Testimonials</span>
                <h2>Businesses That <span class="highlight">Trust Unova</span></h2>
                <p>See what business owners say after switching to AI-powered automation with Unova.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal-up" style="--delay:0s">
                    <div class="stars">★★★★★</div>
                    <p>"Before Unova, our agents were managing everything through WhatsApp and spreadsheets. Now Unova handles our leads, follow-ups, and commissions automatically. It's a completely different business."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#00D1C6">RH</div>
                        <div>
                            <strong>Rafiqul Hasan</strong>
                            <span>MD, Prime Properties Dhaka</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-up" style="--delay:0.1s">
                    <div class="stars">★★★★★</div>
                    <p>"Unova's team audited our whole workflow and found 6 places where AI could save us time. Within 3 months, we cut our admin work by more than half. The ROI was clear from day one."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#6C63FF">SA</div>
                        <div>
                            <strong>Sharif Ahmed</strong>
                            <span>CEO, BuildFast Construction</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-up" style="--delay:0.2s">
                    <div class="stars">★★★★★</div>
                    <p>"I didn't think AI was for a company like ours. Unova showed me exactly how it could work and built it step by step. Now I can't imagine running the business without it."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#FF6B6B">TI</div>
                        <div>
                            <strong>Tahmina Islam</strong>
                            <span>Founder, Horizon Interiors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container">
            <div class="faq-inner">
                <div class="section-header reveal-left">
                    <span class="section-tag">FAQ</span>
                    <h2>Common <span class="highlight">Questions</span></h2>
                    <p>Everything you want to know about Unova and how we can help your business.</p>
                </div>
                <div class="faq-list reveal-right">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What exactly does Unova do?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Unova helps businesses in Bangladesh automate their work using AI. We first study how your business runs, then find the best places to add AI — like auto-follow-up messages, smart lead tracking, or auto-reporting. Then we build and deliver the solution for you.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>I run a real estate business. How can Unova help me?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>We built Unova specifically for real estate businesses in Bangladesh. It helps you manage your property listings, track leads, schedule site visits, monitor agent performance, and handle commissions — all in one place. AI features automatically follow up with leads and send reminders, so nothing falls through the cracks.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Do I need to be tech-savvy to use your software?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Not at all. Our software is designed for business owners, not IT experts. Everything is simple and visual. We also provide full training and are available 24/7 if you ever get stuck. If you can use a smartphone, you can use our products.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>How long does it take to build a custom solution?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>It depends on what you need. If you use one of our ready Unova products, you can be up and running within days. For a fully custom AI automation project, it typically takes 4–12 weeks from the initial audit to final delivery. We'll give you a clear timeline after our discovery call.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What makes Unova different from other software companies?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Most software companies just build what you ask for. We go one step further — we audit your business first and tell you what you actually need, including where AI can help the most. Our software is also built for specific industries, not a generic tool you have to bend to fit your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner reveal-up">
                <div class="cta-glow"></div>
                <span class="section-tag light">Get Started Today</span>
                <h2>Ready to Automate Your <span class="highlight">Business with AI?</span></h2>
                <p>Book a free discovery call. We'll study your business and show you exactly where AI can save you time and money — no commitment needed.</p>
                <div class="cta-buttons">
                    <a href="{{ route('book') }}" class="btn btn-accent">Book a Meeting <i class="ph ph-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-white">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('meet-widget')
    <!-- Book a Meeting Widget -->
    <div class="meet-widget" id="meetWidget">
        <button class="meet-close" id="meetClose" aria-label="Close"><i class="ph ph-x"></i></button>
        <a href="{{ route('book') }}" class="meet-image-link">
            <img src="{{ asset('assets/one to one consulting.png') }}" alt="Book a Meeting" class="meet-img">
        </a>
    </div>
@endsection
