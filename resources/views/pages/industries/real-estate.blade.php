@extends('layouts.app')

@php($isHome = false)

@section('title', 'Real Estate ERP & CRM Software in Bangladesh | Unova')

@section('meta')
    <meta name="description" content="Unova is Bangladesh's first AI-powered Real Estate ERP — CRM, Lead Management, Project & Unit Management, Installment Collection, Commission Automation, HR & Payroll, and Accounting in one platform.">
    <meta name="keywords" content="real estate ERP Bangladesh, real estate CRM Bangladesh, property management software, land management software, installment management software, real estate software Dhaka, Unova">
    <meta property="og:title" content="Real Estate ERP & CRM Software | Unova">
    <meta property="og:description" content="Centralize CRM, sales, installments, commissions, HR, and accounting for your real estate business — powered by AI.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://unova.bd/industries/real-estate">
    <meta property="og:image" content="https://unova.bd/assets/OG.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Real Estate ERP & CRM Software | Unova">
    <meta name="twitter:description" content="Bangladesh's first AI-powered Real Estate ERP — CRM, project management, installments, commissions, HR, and accounting in one platform.">
    <meta name="twitter:image" content="https://unova.bd/assets/OG.png">
    <link rel="canonical" href="https://unova.bd/industries/real-estate">
@endsection

@section('schema')
    <script type="application/ld+json">
    @verbatim
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "name": "Unova",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "Web, iOS, Android",
          "description": "AI-powered Real Estate ERP for Bangladesh covering CRM, lead management, project & unit management, installment collection, commission automation, HR & payroll, and accounting.",
          "url": "https://estate.unova.bd",
          "offers": {
            "@type": "Offer",
            "price": "1500",
            "priceCurrency": "BDT",
            "description": "Monthly subscription starting at BDT 1,500"
          }
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is Unova?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unova is an AI-powered Real Estate Business Management Platform for Bangladesh that centralizes CRM, sales, project management, installment collection, commission management, HR & payroll, and accounting into a single system."
              }
            },
            {
              "@type": "Question",
              "name": "Can Unova handle installment collection for land and property sales?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Unova automatically tracks due dates, sends SMS, WhatsApp, and email reminders to customers, and reports on due and overdue collections in real time."
              }
            },
            {
              "@type": "Question",
              "name": "Does Unova calculate agent and employee commissions automatically?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Commission calculation is fully automated based on your configured rules, removing manual spreadsheet work and reducing errors."
              }
            },
            {
              "@type": "Question",
              "name": "How much does Unova cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Monthly subscription starts at BDT 200 per employee and BDT 100 per agent, with a minimum monthly charge of BDT 1,500. A one-time onboarding and setup fee also applies."
              }
            },
            {
              "@type": "Question",
              "name": "Is training and support included?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every subscription includes onboarding training, technical support, bug fixes, server maintenance, and regular software updates."
              }
            }
          ]
        }
      ]
    }
    @endverbatim
    </script>
@endsection

@push('styles')
<style>
    /* Problem / Benefits */
    .challenge-section { padding: 100px 0; }
    .challenge-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 60px;
        align-items: start;
    }
    .challenge-list { display: flex; flex-direction: column; gap: 14px; margin-top: 8px; }
    .challenge-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 16px 18px;
        background: var(--bg-light);
        border-radius: 14px;
        border: 1px solid var(--border-color);
    }
    .challenge-item i { color: #E74C3C; font-size: 1.2rem; margin-top: 2px; flex-shrink: 0; }
    .challenge-item span { font-size: 0.93rem; color: var(--text-color); line-height: 1.55; }

    .benefits-section { padding: 100px 0; }
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    /* Workflow */
    .workflow-section { padding: 100px 0; background: var(--bg-light); }

    /* Persona / Role-based access */
    .persona-section { padding: 100px 0; }
    .persona-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    .persona-card {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 18px;
        padding: 32px 24px;
        transition: var(--transition);
    }
    .persona-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
    .persona-icon {
        width: 52px; height: 52px;
        border-radius: 14px;
        background: var(--accent-glow);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem; color: var(--accent-color);
        margin-bottom: 18px;
        transition: var(--transition);
    }
    .persona-card:hover .persona-icon { background: var(--accent-color); color: #fff; transform: rotate(-8deg) scale(1.08); }
    .persona-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; }
    .persona-card p { font-size: 0.86rem; color: var(--text-color); line-height: 1.6; }

    /* Pricing teaser */
    .pricing-teaser { padding: 0 0 100px; }
    .pricing-banner {
        background: var(--primary-color);
        border-radius: 24px;
        padding: 56px 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        position: relative;
        overflow: hidden;
    }
    .pricing-banner::before {
        content: '';
        position: absolute;
        top: -120px; right: -80px;
        width: 360px; height: 360px;
        background: radial-gradient(circle, var(--accent-glow) 0%, transparent 65%);
    }
    .pricing-banner-content { position: relative; z-index: 1; max-width: 560px; }
    .pricing-banner h2 { color: #fff; font-size: 2rem; font-weight: 800; margin-bottom: 12px; letter-spacing: -0.3px; }
    .pricing-banner p { color: rgba(255,255,255,0.65); font-size: 0.95rem; line-height: 1.7; margin-bottom: 18px; }
    .pricing-banner-list { display: flex; flex-wrap: wrap; gap: 10px 22px; }
    .pricing-banner-list span { color: rgba(255,255,255,0.85); font-size: 0.85rem; display: flex; align-items: center; gap: 6px; }
    .pricing-banner-list i { color: var(--accent-color); }
    .pricing-banner-price { position: relative; z-index: 1; text-align: right; flex-shrink: 0; }
    .pricing-banner-price .amount { font-size: 2.6rem; font-weight: 900; color: #fff; line-height: 1; }
    .pricing-banner-price .unit { color: rgba(255,255,255,0.5); font-size: 0.85rem; display: block; margin: 6px 0 20px; }

    @media (max-width: 1024px) {
        .challenge-grid { grid-template-columns: 1fr; gap: 40px; }
        .benefits-grid { grid-template-columns: 1fr 1fr; }
        .persona-grid { grid-template-columns: 1fr 1fr; }
        .pricing-banner { flex-direction: column; text-align: center; padding: 44px 32px; }
        .pricing-banner-content { max-width: 100%; }
        .pricing-banner-list { justify-content: center; }
        .pricing-banner-price { text-align: center; }
    }
    @media (max-width: 640px) {
        .benefits-grid { grid-template-columns: 1fr; }
        .persona-grid { grid-template-columns: 1fr; }
    }

    /* Industry Hero — dashboard mockup */
    .dashboard-mock {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }
    .dashboard-mock-topbar {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 12px 16px;
        border-bottom: 1px solid var(--border-color);
        flex-shrink: 0;
    }
    .dashboard-mock-topbar .dot { width: 9px; height: 9px; border-radius: 50%; }
    .dot-red { background: #E74C3C; }
    .dot-yellow { background: #F39C12; }
    .dot-green { background: #6DC042; }
    .dashboard-mock-url {
        margin-left: 14px;
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.75rem;
        color: var(--text-color);
        background: var(--bg-light);
        border-radius: 20px;
        padding: 4px 14px;
    }
    .dashboard-mock-body { display: flex; flex: 1; min-height: 0; }
    .dashboard-mock-sidebar {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        padding: 20px 0;
        background: var(--bg-light);
        border-right: 1px solid var(--border-color);
        flex-shrink: 0;
        width: 56px;
    }
    .dm-sidebar-icon {
        width: 34px; height: 34px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        color: var(--text-color);
        font-size: 1.05rem;
    }
    .dm-sidebar-icon.active { background: var(--accent-color); color: #fff; }
    .dashboard-mock-main { flex: 1; padding: 20px; display: flex; flex-direction: column; gap: 16px; min-width: 0; }
    .dm-stats-row { display: flex; gap: 12px; }
    .dm-stat-card {
        flex: 1;
        background: var(--bg-light);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 12px 14px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }
    .dm-stat-label { font-size: 0.68rem; color: var(--text-color); opacity: 0.75; }
    .dm-stat-value { font-size: 1.1rem; font-weight: 800; color: var(--text-heading); }
    .dm-chart {
        display: flex;
        align-items: flex-end;
        gap: 8px;
        height: 90px;
        padding: 10px 6px 0;
        background: var(--bg-light);
        border: 1px solid var(--border-color);
        border-radius: 12px;
    }
    .dm-bar {
        flex: 1;
        height: var(--h);
        background: linear-gradient(180deg, var(--accent-color), var(--accent-glow));
        border-radius: 5px 5px 0 0;
    }
    .dm-list { display: flex; flex-direction: column; gap: 8px; }
    .dm-list-row {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--bg-light);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 9px 12px;
        font-size: 0.8rem;
        color: var(--text-color);
    }
    .dm-list-row span:nth-child(2) { flex: 1; }
    .dm-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--c); flex-shrink: 0; }
    .dm-badge {
        font-size: 0.68rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 20px;
        background: var(--accent-glow);
        color: var(--accent-color);
    }
    .dm-badge.sold { background: rgba(109, 192, 66, 0.15); color: #6DC042; }

    @media (max-width: 480px) {
        .dashboard-mock-sidebar { width: 44px; }
        .dm-stats-row { flex-wrap: wrap; }
        .dm-stat-card { min-width: 40%; }
    }
</style>
@endpush

@section('content')

    <!-- Page Hero -->
    <header class="hero">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-grid"></div>
        <div class="container hero-container">
            <div class="hero-content reveal-left">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Real Estate Industry
                </div>
                <h1>Bangladesh's First <span class="highlight">AI-Powered Real Estate ERP</span></h1>
                <div class="hero-sub">
                    <p>Unova centralizes CRM, sales, project & unit management, installment collection, commission automation, HR & payroll, and accounting into one platform — built to increase your sales by up to 20%.</p>
                    <div class="hero-cta-group">
                        <a href="{{ route('book') }}" class="btn btn-accent">Book a Demo <i class="ph ph-arrow-right"></i></a>
                        <a href="https://estate.unova.bd" target="_blank" rel="noopener" class="btn btn-outline">Visit Live Platform <i class="ph ph-arrow-square-out"></i></a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number counter" data-target="6">0</span></div>
                            <span class="stat-label">Integrated Modules</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number counter" data-target="20">0</span><span class="stat-suffix-hero">%</span></div>
                            <span class="stat-label">Avg. Sales Increase</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item-hero">
                            <div class="stat-num-row"><span class="stat-number">6</span></div>
                            <span class="stat-label">Month Refund Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image reveal-right">
                <div class="hero-neural-wrap">
                    <div class="dashboard-mock">
                        <div class="dashboard-mock-topbar">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                            <span class="dashboard-mock-url"><i class="ph ph-lock-simple"></i> estate.unova.bd</span>
                        </div>
                        <div class="dashboard-mock-body">
                            <div class="dashboard-mock-sidebar">
                                <span class="dm-sidebar-icon active"><i class="ph-fill ph-squares-four"></i></span>
                                <span class="dm-sidebar-icon"><i class="ph-fill ph-funnel"></i></span>
                                <span class="dm-sidebar-icon"><i class="ph-fill ph-buildings"></i></span>
                                <span class="dm-sidebar-icon"><i class="ph-fill ph-receipt"></i></span>
                                <span class="dm-sidebar-icon"><i class="ph-fill ph-users-three"></i></span>
                            </div>
                            <div class="dashboard-mock-main">
                                <div class="dm-stats-row">
                                    <div class="dm-stat-card">
                                        <span class="dm-stat-label">Total Leads</span>
                                        <span class="dm-stat-value">1,284</span>
                                    </div>
                                    <div class="dm-stat-card">
                                        <span class="dm-stat-label">Units Sold</span>
                                        <span class="dm-stat-value">312</span>
                                    </div>
                                    <div class="dm-stat-card">
                                        <span class="dm-stat-label">Collected</span>
                                        <span class="dm-stat-value">৳48.2L</span>
                                    </div>
                                </div>
                                <div class="dm-chart">
                                    <div class="dm-bar" style="--h:40%"></div>
                                    <div class="dm-bar" style="--h:65%"></div>
                                    <div class="dm-bar" style="--h:50%"></div>
                                    <div class="dm-bar" style="--h:80%"></div>
                                    <div class="dm-bar" style="--h:60%"></div>
                                    <div class="dm-bar" style="--h:95%"></div>
                                    <div class="dm-bar" style="--h:70%"></div>
                                </div>
                                <div class="dm-list">
                                    <div class="dm-list-row"><span class="dm-dot" style="--c:#E67E22"></span><span>Prime Heights — Unit A4</span><span class="dm-badge">Booked</span></div>
                                    <div class="dm-list-row"><span class="dm-dot" style="--c:#3498DB"></span><span>Green Villa — Unit C2</span><span class="dm-badge sold">Sold</span></div>
                                    <div class="dm-list-row"><span class="dm-dot" style="--c:#1ABC9C"></span><span>Lakeview — Unit B7</span><span class="dm-badge">Booked</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="neural-float neural-float-1">
                        <i class="ph-fill ph-trend-up"></i>
                        <div class="neural-float-text">
                            <span class="nf-label">Sales Growth</span>
                            <span class="nf-val">+20%</span>
                        </div>
                        <div class="nf-dot"></div>
                    </div>
                    <div class="neural-float neural-float-2">
                        <i class="ph-fill ph-bell-ringing"></i>
                        <div class="neural-float-text">
                            <span class="nf-label">Reminders Sent Today</span>
                            <span class="nf-val">86</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Key Business Benefits -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Why Unova</span>
                <h2>Key Business <span class="highlight">Benefits</span></h2>
                <p>One integrated platform that removes manual work and gives management real-time control over the business.</p>
            </div>
            <div class="benefits-grid">
                <div class="brand-card reveal-up" style="--delay:0s">
                    <div class="brand-icon"><i class="ph-fill ph-funnel"></i></div>
                    <h3>Lead Loss Prevention</h3>
                    <p>No lead will ever be lost. Every lead will be tracked within the system, and follow-up schedules will be maintained automatically.</p>
                </div>
                <div class="brand-card reveal-up" style="--delay:0.06s">
                    <div class="brand-icon"><i class="ph-fill ph-trend-up"></i></div>
                    <h3>Sales Conversion Improvement</h3>
                    <p>Through lead qualification, automated follow-ups, and visual funnel analysis, more sales can be generated from existing leads.</p>
                </div>
                <div class="brand-card reveal-up" style="--delay:0.12s">
                    <div class="brand-icon"><i class="ph-fill ph-clock-countdown"></i></div>
                    <h3>Time Saving</h3>
                    <p>Manual reporting, follow-up tracking, payroll calculation, and accounting processes will be significantly reduced. Commission calculation and installment payment collection will be automated.</p>
                </div>
                <div class="brand-card reveal-up" style="--delay:0.18s">
                    <div class="brand-icon"><i class="ph-fill ph-gauge"></i></div>
                    <h3>Better Management Control</h3>
                    <p>Management will have real-time visibility into business operations.</p>
                </div>
                <div class="brand-card reveal-up" style="--delay:0.24s">
                    <div class="brand-icon"><i class="ph-fill ph-chart-line"></i></div>
                    <h3>Data-Driven Decision Making</h3>
                    <p>Business decisions will no longer be based on assumptions, but on real data.</p>
                </div>
                <div class="brand-card reveal-up" style="--delay:0.3s">
                    <div class="brand-icon"><i class="ph-fill ph-shield-check"></i></div>
                    <h3>Reduced Human Errors</h3>
                    <p>Automation of commission calculations, installment management, accounting, payroll, employee loans, and provident fund processing minimizes manual intervention and significantly reduces the chances of human error, ensuring higher accuracy and operational efficiency.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Challenge -->
    <section class="challenge-section">
        <div class="container">
            <div class="challenge-grid">
                <div class="reveal-left">
                    <span class="section-tag">The Challenge</span>
                    <h2 style="font-size:2.4rem; font-weight:800; line-height:1.2; letter-spacing:-0.5px; margin-bottom:16px;">Real Estate Still Runs on <span class="highlight">Manual Processes</span></h2>
                    <p style="color:var(--text-color); font-size:1rem; line-height:1.8;">Lead management, follow-ups, installment collection, commission calculation, and project costing are still handled manually or through fragmented systems at most real estate companies — causing inefficiencies that quietly cost businesses sales every month.</p>
                </div>
                <div class="challenge-list reveal-right">
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>Loss of potential leads with no centralized tracking</span></div>
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>Missed follow-ups and lost sales opportunities</span></div>
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>Delayed installment and payment collections</span></div>
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>Errors in manual commission calculations</span></div>
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>No real-time visibility into project costs</span></div>
                    <div class="challenge-item"><i class="ph-fill ph-x-circle"></i><span>Slow, assumption-based decision-making</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow -->
    <section class="workflow-section">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">How It Works</span>
                <h2>From First Contact to <span class="highlight">Closed Deal</span></h2>
                <p>One continuous workflow that takes a lead all the way through to a collected, commissioned sale.</p>
            </div>
            <div class="process-grid">
                <div class="process-step reveal-up" style="--delay:0s">
                    <span class="step-number">01</span>
                    <div class="step-icon"><i class="ph-fill ph-funnel-simple"></i></div>
                    <h3>Capture Lead</h3>
                    <p>Every inquiry from Facebook, WhatsApp, walk-in, or referral is captured instantly — no lead is ever lost.</p>
                </div>
                <div class="process-step reveal-up" style="--delay:0.1s">
                    <span class="step-number">02</span>
                    <div class="step-icon"><i class="ph-fill ph-kanban"></i></div>
                    <h3>Work the Pipeline</h3>
                    <p>BANT-qualified leads move through a fully customizable pipeline — New Lead, Opportunity, Prospect, Negotiation.</p>
                </div>
                <div class="process-step reveal-up" style="--delay:0.2s">
                    <span class="step-number">03</span>
                    <div class="step-icon"><i class="ph-fill ph-handshake"></i></div>
                    <h3>Close the Deal</h3>
                    <p>Visual funnel analytics show exactly where deals are won or lost — by employee, team, or campaign.</p>
                </div>
                <div class="process-step reveal-up" style="--delay:0.3s">
                    <span class="step-number">04</span>
                    <div class="step-icon"><i class="ph-fill ph-coins"></i></div>
                    <h3>Collect & Commission</h3>
                    <p>Installments are tracked and reminded automatically, and commissions are calculated without spreadsheets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Modules -->
    <section class="products-showcase">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Core Modules</span>
                <h2>Every Department, <span class="highlight">One Platform</span></h2>
                <p>Unova replaces spreadsheets, WhatsApp threads, and disconnected tools with a single connected system.</p>
            </div>
            <div class="nova-products-grid">
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#E67E22"></div>
                    <div class="nova-icon" style="--card-color:#E67E22"><i class="ph-fill ph-funnel"></i></div>
                    <span class="nova-industry">CRM</span>
                    <h3>CRM & Lead Management</h3>
                    <ul class="nova-features">
                        <li>Lead Capture, Assignment & Tracking</li>
                        <li>BANT Lead Qualification Framework</li>
                        <li>Visual Sales Funnel Analytics</li>
                        <li>Bulk SMS, Email & WhatsApp Marketing</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#3498DB"></div>
                    <div class="nova-icon" style="--card-color:#3498DB"><i class="ph-fill ph-buildings"></i></div>
                    <span class="nova-industry">Operations</span>
                    <h3>Project & Unit Management</h3>
                    <ul class="nova-features">
                        <li>Multiple Project Tracking</li>
                        <li>Available / Booked / Sold Unit Status</li>
                        <li>Project-Wise Cost Analytics</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#9B59B6"></div>
                    <div class="nova-icon" style="--card-color:#9B59B6"><i class="ph-fill ph-package"></i></div>
                    <span class="nova-industry">Inventory</span>
                    <h3>Inventory & Material Management</h3>
                    <ul class="nova-features">
                        <li>Material Purchase & Usage Tracking</li>
                        <li>Stock Monitoring & Material Transfer</li>
                        <li>Supplier Profiles & Due Tracking</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#F39C12"></div>
                    <div class="nova-icon" style="--card-color:#F39C12"><i class="ph-fill ph-receipt"></i></div>
                    <span class="nova-industry">Collections</span>
                    <h3>Installment Management</h3>
                    <ul class="nova-features">
                        <li>Automatic Due-Date Reminders (SMS/WhatsApp/Email)</li>
                        <li>Due & Overdue Reporting</li>
                        <li>Collection & Payment History Tracking</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#E74C3C"></div>
                    <div class="nova-icon" style="--card-color:#E74C3C"><i class="ph-fill ph-users-three"></i></div>
                    <span class="nova-industry">HR</span>
                    <h3>HR & Payroll</h3>
                    <ul class="nova-features">
                        <li>Attendance & Leave Management</li>
                        <li>Fully Automated Commission Calculation</li>
                        <li>Provident Fund & Employee Loan</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#2C3E50"></div>
                    <div class="nova-icon" style="--card-color:#2C3E50"><i class="ph-fill ph-calculator"></i></div>
                    <span class="nova-industry">Finance</span>
                    <h3>Accounting & Finance</h3>
                    <ul class="nova-features">
                        <li>Income, Expense & Cash Flow Tracking</li>
                        <li>Profit & Loss Reports</li>
                        <li>Project-Wise Profit Analysis</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#607D8B"></div>
                    <div class="nova-icon" style="--card-color:#607D8B"><i class="ph-fill ph-shield-check"></i></div>
                    <span class="nova-industry">Security</span>
                    <h3>Role-Based Permissions</h3>
                    <ul class="nova-features">
                        <li>Own Leads Only Access</li>
                        <li>Team / Department-Level Access</li>
                        <li>Company-Wide Access for Leadership</li>
                    </ul>
                </div>
                <div class="nova-card">
                    <div class="nova-card-top" style="--card-color:#1ABC9C"></div>
                    <div class="nova-icon" style="--card-color:#1ABC9C"><i class="ph-fill ph-chats-circle"></i></div>
                    <span class="nova-industry">Engagement</span>
                    <h3>Customer Engagement Automation</h3>
                    <ul class="nova-features">
                        <li>Birthday & Anniversary Wishes</li>
                        <li>Booking Anniversary & Due Reminders</li>
                        <li>Automated Follow-up Messaging</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Role-Based Access -->
    <section class="persona-section">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Built for Every Role</span>
                <h2>Everyone Sees <span class="highlight">What They Need</span></h2>
                <p>Flexible role-based access means each team member works in a view built for their responsibilities.</p>
            </div>
            <div class="persona-grid">
                <div class="persona-card reveal-up" style="--delay:0s">
                    <div class="persona-icon"><i class="ph-fill ph-chart-pie-slice"></i></div>
                    <h3>Managing Director</h3>
                    <p>Company-wide visibility into sales, collections, project cost, and team performance — in real time.</p>
                </div>
                <div class="persona-card reveal-up" style="--delay:0.08s">
                    <div class="persona-icon"><i class="ph-fill ph-strategy"></i></div>
                    <h3>Sales Manager</h3>
                    <p>Team-level pipeline view, conversion analytics, and performance comparison across employees.</p>
                </div>
                <div class="persona-card reveal-up" style="--delay:0.16s">
                    <div class="persona-icon"><i class="ph-fill ph-headset"></i></div>
                    <h3>Sales Executive</h3>
                    <p>A focused view of their own leads, follow-up reminders, and conversion progress — nothing else.</p>
                </div>
                <div class="persona-card reveal-up" style="--delay:0.24s">
                    <div class="persona-icon"><i class="ph-fill ph-briefcase"></i></div>
                    <h3>HR & Finance</h3>
                    <p>Payroll, commission, provident fund, and accounting tools without access to sales pipeline data.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header centered reveal-up">
                <span class="section-tag">Testimonials</span>
                <h2>Real Estate Companies <span class="highlight">Running on Unova</span></h2>
                <p>See how real estate businesses in Bangladesh are using Unova to grow.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal-up" style="--delay:0s">
                    <div class="stars">★★★★★</div>
                    <p>"Before Unova, our agents were managing everything through WhatsApp and spreadsheets. Now leads, follow-ups, and commissions are handled automatically. It's a completely different business."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#E67E22">RH</div>
                        <div>
                            <strong>Rafiqul Hasan</strong>
                            <span>Managing Director, Prime Properties Dhaka</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-up" style="--delay:0.1s">
                    <div class="stars">★★★★★</div>
                    <p>"Commission calculation used to take our accounts team two full days every month. With Unova it's automatic and accurate — and our sales team finally trusts the numbers."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#3498DB">SK</div>
                        <div>
                            <strong>Shahriar Kabir</strong>
                            <span>Sales Manager, Greenland Developers</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal-up" style="--delay:0.2s">
                    <div class="stars">★★★★★</div>
                    <p>"Installment collection was always our biggest headache. The automatic reminders alone improved our on-time collection rate within the first month."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="--avatar-color:#1ABC9C">NF</div>
                        <div>
                            <strong>Nusrat Farzana</strong>
                            <span>Finance Head, Horizon Land & Housing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Teaser -->
    <section class="pricing-teaser">
        <div class="container">
            <div class="pricing-banner reveal-up">
                <div class="pricing-banner-content">
                    <span class="section-tag light">Pricing</span>
                    <h2>Simple, Per-Seat Pricing</h2>
                    <p>One onboarding fee to get set up, then a low monthly fee per employee and agent. No hidden charges.</p>
                    <div class="pricing-banner-list">
                        <span><i class="ph-fill ph-check-circle"></i> Software Access</span>
                        <span><i class="ph-fill ph-check-circle"></i> Regular Updates</span>
                        <span><i class="ph-fill ph-check-circle"></i> Technical Support</span>
                        <span><i class="ph-fill ph-check-circle"></i> System Maintenance</span>
                    </div>
                </div>
                <div class="pricing-banner-price">
                    <div class="amount">৳1,500</div>
                    <span class="unit">minimum / month — ৳200 per employee, ৳100 per agent</span>
                    <a href="{{ route('contact') }}" class="btn btn-accent">Get Pricing Details <i class="ph ph-arrow-right"></i></a>
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
                    <p>Everything you want to know about Unova before getting started.</p>
                </div>
                <div class="faq-list reveal-right">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What is Unova?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Unova is an AI-powered Real Estate Business Management Platform built for Bangladesh. It centralizes CRM, sales, project management, installment collection, commission management, HR & payroll, and accounting into a single system.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Can it handle installment collection for land and property sales?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. Unova automatically tracks due dates, sends SMS, WhatsApp, and email reminders to customers, and gives you real-time due and overdue collection reports.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Does it calculate agent and employee commissions automatically?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. Commission calculation is fully automated based on rules you configure — removing manual spreadsheet work and reducing errors.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>How much does Unova cost?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Monthly subscription starts at ৳200 per employee and ৳100 per agent, with a minimum monthly charge of ৳1,500. A one-time onboarding and setup fee also applies — contact us for a full quote.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Is training and support included?</span>
                            <div class="faq-icon"><i class="ph ph-plus"></i></div>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. Every subscription includes onboarding training, technical support, bug fixes, server maintenance, and regular software updates at no extra cost.</p>
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
                <span class="section-tag light">Get Started Today</span>
                <h2>Ready to Run Your Real Estate <span class="highlight">Business on Unova?</span></h2>
                <p>Book a free demo and see exactly how Unova fits your sales, collection, and project workflow — no commitment needed.</p>
                <div class="cta-buttons">
                    <a href="{{ route('book') }}" class="btn btn-accent">Book a Demo <i class="ph ph-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-white">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

@endsection
