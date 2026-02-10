<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>alihdaya solutions</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&family=syne:600,700,800" rel="stylesheet" />
    <style>
        :root {
            --ink: #0d0f12;
            --ink-soft: #1b1f24;
            --sand: #f5f1ea;
            --sand-strong: #efe8dc;
            --accent: #ff7a1a;
            --accent-2: #2bd1c9;
            --accent-3: #f2c14e;
            --shadow: rgba(13, 15, 18, 0.12);
            --radius-lg: 24px;
            --radius-md: 16px;
            --radius-sm: 12px;
            --max-width: 1180px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Space Grotesk", "Segoe UI", sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 12% 10%, rgba(255, 122, 26, 0.12), transparent 40%),
                radial-gradient(circle at 88% 8%, rgba(43, 209, 201, 0.12), transparent 45%),
                radial-gradient(circle at 20% 60%, rgba(255, 122, 26, 0.08), transparent 45%),
                radial-gradient(circle at 85% 70%, rgba(43, 209, 201, 0.08), transparent 45%),
                linear-gradient(160deg, #fffaf3 0%, #f5f1ea 40%, #f2efe9 100%);
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .page {
            overflow-x: hidden;
            padding-top: 76px;
            position: relative;
        }

        .page::before,
        .page::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
        }

        .page::before {
            background:
                radial-gradient(circle at 15% 35%, rgba(255, 122, 26, 0.08), transparent 40%),
                radial-gradient(circle at 80% 45%, rgba(43, 209, 201, 0.08), transparent 45%),
                radial-gradient(circle at 35% 85%, rgba(242, 193, 78, 0.08), transparent 45%);
            opacity: 0.9;
        }

        .page::after {
            background:
                radial-gradient(circle at 10% 95%, rgba(255, 122, 26, 0.06), transparent 45%),
                radial-gradient(circle at 90% 90%, rgba(43, 209, 201, 0.06), transparent 45%);
            opacity: 0.8;
        }

        .page > * {
            position: relative;
            z-index: 1;
        }

        .container {
            width: min(100%, var(--max-width));
            margin: 0 auto;
            padding: 0 24px;
        }

        .nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
            background: rgba(245, 241, 234, 0.86);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(13, 15, 18, 0.08);
            transform: translateY(-100%);
            animation: navSlideDown 0.8s ease-out 0.2s forwards;
            transition: padding 0.25s ease, box-shadow 0.25s ease;
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
            gap: 16px;
        }

        .nav.is-compact .nav-inner {
            padding: 10px 0;
        }

        .nav.is-compact {
            box-shadow: 0 8px 20px rgba(13, 15, 18, 0.08);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .brand-name {
            color: var(--accent);
        }

        .brand-name .brand-rest {
            color: var(--ink);
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: conic-gradient(from 120deg, var(--accent), var(--accent-2), var(--accent), var(--accent-3));
            box-shadow: 0 12px 28px rgba(255, 122, 26, 0.2);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }

        .nav-links a {
            padding: 8px 0;
            border-bottom: 2px solid transparent;
            transition: border-color 0.2s ease;
        }

        .nav-links a:hover {
            border-color: var(--accent);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .lang-toggle {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(13, 15, 18, 0.18);
            border-radius: 999px;
            padding: 4px;
            background: #fff;
        }

        .lang-toggle button {
            border: none;
            background: transparent;
            padding: 6px 10px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 12px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            cursor: pointer;
        }

        .lang-toggle button.is-active {
            background: var(--ink);
            color: var(--sand);
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 22px;
            border-radius: 999px;
            border: 1px solid transparent;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        .button.primary {
            background: var(--ink);
            color: var(--sand);
            box-shadow: 0 16px 28px rgba(13, 15, 18, 0.18);
        }

        .button.primary:hover {
            transform: translateY(-2px);
        }

        .button.outline {
            border-color: rgba(13, 15, 18, 0.18);
            color: var(--ink);
            background: transparent;
        }

        .hero {
            position: relative;
            padding: 80px 0 100px;
            background: #f7efe2;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: min(46%, 640px);
            background-image: url("https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80");
            background-size: cover;
            background-position: center;
            opacity: 1;
            z-index: 1;
            clip-path: inset(0 0 0 100%);
            animation: heroImageReveal 1.4s ease-out 0.25s forwards;
        }

        .hero-grid {
            display: grid;
            gap: 28px;
            justify-items: start;
            margin-left: 16px;
        }

        @media (min-width: 900px) {
            .hero-grid {
                max-width: 54%;
            }
        }

        .hero h1 {
            font-family: "Syne", "Space Grotesk", sans-serif;
            font-size: clamp(2.4rem, 4vw, 4rem);
            letter-spacing: -0.03em;
            line-height: 1.05;
            text-align: left;
        }

        .hero p {
            margin-top: 18px;
            font-size: 1.1rem;
            line-height: 1.6;
            color: rgba(13, 15, 18, 0.7);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .hero-bottom {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            align-items: stretch;
        }

        .hero-secondary {
            padding-top: 32px;
        }

        .hero-stats {
            margin-top: 0;
        }

        .hero-card {
            background: var(--sand);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(13, 15, 18, 0.08);
            padding: 26px;
            box-shadow: 0 20px 40px var(--shadow);
            max-width: 560px;
        }

        .hero .container {
            position: relative;
            z-index: 2;
            margin-left: 0;
            margin-right: auto;
        }

        .hero-card h3 {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: rgba(13, 15, 18, 0.55);
        }

        .hero-card ul {
            margin-top: 16px;
            display: grid;
            gap: 12px;
        }

        .hero-card li {
            list-style: none;
            padding: 12px 14px;
            border-radius: var(--radius-sm);
            background: #fff;
            border: 1px solid rgba(13, 15, 18, 0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.95rem;
        }

        .contact-lines {
            display: grid;
            gap: 4px;
            text-align: right;
        }

        .contact-location {
            align-items: flex-start;
            gap: 28px;
        }

        .contact-location-value {
            text-align: right;
            max-width: 65%;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            background: #fff;
            border-radius: 999px;
            padding: 8px 14px;
            box-shadow: 0 8px 20px rgba(13, 15, 18, 0.08);
            border: 1px solid rgba(13, 15, 18, 0.08);
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
        }

        .section {
            padding: 80px 0;
        }

        .section[id] {
            scroll-margin-top: 80px;
        }

        .section-title {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 32px;
        }

        .section-title h2 {
            font-family: "Syne", "Space Grotesk", sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.6rem);
            letter-spacing: -0.02em;
        }

        .section-title p {
            max-width: 515px;
            color: rgba(13, 15, 18, 0.6);
        }

        .section-title-stack {
            flex-direction: column;
            align-items: flex-start;
        }

        .section-title-stack p {
            text-align: right;
            align-self: flex-end;
        }

        .grid {
            display: grid;
            gap: 20px;
        }

        .services {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .service-card {
            background: #fff;
            border-radius: var(--radius-md);
            border: 1px solid rgba(13, 15, 18, 0.08);
            padding: 22px;
            box-shadow: 0 18px 30px rgba(13, 15, 18, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 44px rgba(13, 15, 18, 0.12);
        }

        .service-card h3 {
            margin-top: 14px;
            font-size: 1.15rem;
        }

        .service-card p {
            margin-top: 10px;
            color: rgba(13, 15, 18, 0.65);
            line-height: 1.5;
        }

        .service-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(255, 122, 26, 0.12);
            font-weight: 700;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 18px;
        }

        .hero-secondary .stats {
            grid-template-columns: 1fr;
            height: 100%;
        }

        .hero-secondary .stat {
            height: 100%;
        }

        .stat {
            padding: 20px;
            border-radius: var(--radius-md);
            background: var(--ink-soft);
            color: var(--sand);
        }

        .stat h4 {
            font-size: 1.8rem;
            font-family: "Syne", "Space Grotesk", sans-serif;
        }

        .stat span {
            display: block;
            margin-top: 6px;
            color: rgba(245, 241, 234, 0.7);
            font-size: 0.9rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .process {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .step {
            padding: 22px;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, #fff, #f7f2ea);
            border: 1px solid rgba(13, 15, 18, 0.08);
        }

        .step-number {
            font-size: 0.85rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(13, 15, 18, 0.5);
        }

        .step h3 {
            margin-top: 10px;
            font-size: 1.1rem;
        }

        .feature {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            align-items: center;
            padding: 28px;
            border-radius: var(--radius-lg);
            background: #fff;
            border: 1px solid rgba(13, 15, 18, 0.08);
            box-shadow: 0 20px 40px rgba(13, 15, 18, 0.08);
        }

        .feature-card {
            background: var(--ink);
            color: var(--sand);
            padding: 24px;
            border-radius: var(--radius-md);
        }

        .feature-card p {
            margin-top: 12px;
            color: rgba(245, 241, 234, 0.7);
        }

        .testimonials {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }

        .quote {
            background: #fff;
            border-radius: var(--radius-md);
            padding: 22px;
            border: 1px solid rgba(13, 15, 18, 0.08);
        }

        .quote p {
            color: rgba(13, 15, 18, 0.7);
            line-height: 1.5;
        }

        .quote span {
            display: block;
            margin-top: 16px;
            font-weight: 600;
        }

        .portfolio-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }

        .portfolio-item {
            position: relative;
            border-radius: var(--radius-md);
            overflow: hidden;
        }

        .portfolio-item > a {
            display: block;
            height: 100%;
            color: inherit;
        }

        .portfolio-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            transform: scale(1);
            transition: transform 0.35s ease;
        }

        .portfolio-info {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            background: linear-gradient(180deg, rgba(13, 15, 18, 0) 20%, rgba(13, 15, 18, 0.78) 100%);
            color: #fff;
            opacity: 0;
            transform: translateY(12px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .portfolio-item:hover .portfolio-info {
            opacity: 1;
            transform: translateY(0);
        }

        .portfolio-item:hover img {
            transform: scale(1.06);
        }

        .portfolio-info h5 {
            font-size: 1.05rem;
        }

        .portfolio-info p {
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.5;
        }

        .contact {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
        }

        .contact-card {
            background: #fff;
            border-radius: var(--radius-md);
            padding: 24px;
            border: 1px solid rgba(13, 15, 18, 0.08);
        }

        .contact-card form {
            display: grid;
            gap: 12px;
            margin-top: 18px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid rgba(13, 15, 18, 0.14);
            font: inherit;
            background: #fff;
        }

        textarea {
            min-height: 200px;
            resize: vertical;
        }

        .footer {
            padding: 40px 0 60px;
            border-top: 1px solid rgba(13, 15, 18, 0.08);
            color: rgba(13, 15, 18, 0.6);
            font-size: 0.95rem;
        }

        .shapes {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border-radius: 999px;
            filter: blur(0px);
            opacity: 0.5;
        }

        .shape.one {
            width: 320px;
            height: 320px;
            background: rgba(255, 122, 26, 0.18);
            top: -120px;
            right: -140px;
        }

        .shape.two {
            width: 240px;
            height: 240px;
            background: rgba(43, 209, 201, 0.2);
            bottom: -80px;
            left: -100px;
        }

        .shape.three {
            width: 200px;
            height: 200px;
            background: rgba(242, 193, 78, 0.22);
            top: 45%;
            left: 45%;
            transform: translate(-50%, -50%);
        }

        .fade-up {
            animation: fadeUp 1s ease both;
        }

        .stagger > * {
            animation: fadeUp 1s ease both;
        }

        .fade-left {
            animation: fadeLeft 1s ease both;
        }

        .stagger > *:nth-child(2) { animation-delay: 0.1s; }
        .stagger > *:nth-child(3) { animation-delay: 0.2s; }
        .stagger > *:nth-child(4) { animation-delay: 0.3s; }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeLeft {
            from {
                opacity: 0;
                transform: translateX(18px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes heroImageReveal {
            from {
                clip-path: inset(0 0 0 100%);
            }
            to {
                clip-path: inset(0 0 0 0);
            }
        }

        @keyframes navSlideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 0.9s ease, transform 0.9s ease;
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (prefers-reduced-motion: reduce) {
            .fade-up,
            .stagger > * {
                animation: none;
            }

            .hero::before {
                animation: none;
                clip-path: inset(0 0 0 0);
            }

            .reveal {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }

        @media (max-width: 820px) {
            .nav-links {
                display: none;
            }

            .section-title {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <nav class="nav">
        <div class="container nav-inner">
            <div class="brand">
                <span class="brand-mark"></span>
                <span class="brand-name">alihdaya <span class="brand-rest">solutions</span></span>
            </div>
            <div class="nav-links">
                <a href="#services" data-i18n="nav.services">Services</a>
                <a href="#process" data-i18n="nav.process">Process</a>
                <a href="#work" data-i18n="nav.work">Work</a>
                <a href="#contact" data-i18n="nav.contact">Contact</a>
            </div>
            <div class="nav-actions">
                <!--
                <div class="lang-toggle" role="group" aria-label="Language">
                    <button type="button" class="is-active" aria-pressed="true" data-lang="en">EN</button>
                    <button type="button" aria-pressed="false" data-lang="id">ID</button>
                </div>
                -->
                <a class="button primary" href="https://wa.me/6285656324229?text=Halo!%20Saya%20ingin%20konsultasi%20proyek." target="_blank" rel="noopener noreferrer" data-i18n="nav.startProject">Start a Project</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="shapes">
            <div class="shape one"></div>
            <div class="shape two"></div>
            <div class="shape three"></div>
        </div>
        <div class="container hero-grid">
            <div class="fade-left hero-content">
                <div class="badge"><span class="badge-dot"></span><span data-i18n="hero.badge">Software solutions for bold teams</span></div>
                <h1 data-i18n="hero.title">We build websites and systems that make your business faster, clearer, and ready to scale.</h1>
                <p data-i18n="hero.subtitle">From marketing sites to custom platforms, we design, engineer, and launch software that solves real problems. Clean code, strong branding, and a partnership mindset.</p>
                <div class="hero-actions">
                    <a class="button primary" href="#contact" data-i18n="hero.requestQuote">Request a Quote</a>
                    <a class="button outline" href="#services" data-i18n="hero.exploreServices">Explore Services</a>
                </div>
            </div>
        </div>
    </header>

    <section class="section hero-secondary reveal">
        <div class="container">
                <div class="hero-bottom fade-up">
                <div class="hero-stats">
                    <div class="stats">
                        <div class="stat">
                            <h4>40+ </h4>
                            <span data-i18n="stats.projects">Projects shipped</span>
                        </div>
                        <div class="stat">
                            <h4>2-6 wks</h4>
                            <span data-i18n="stats.delivery">Typical delivery</span>
                        </div>
                        <div class="stat">
                            <h4>98%</h4>
                            <span data-i18n="stats.retention">Client retention</span>
                        </div>
                    </div>
                </div>
                <div class="hero-card">
                    <h3 data-i18n="hero.whatWeDo">What we do</h3>
                    <ul>
                        <li><span data-i18n="hero.list.website">Website Design &amp; Development</span> <strong data-i18n="hero.list.websiteStrong">Brand-first</strong></li>
                        <li><span data-i18n="hero.list.systems">Custom Systems</span> <strong data-i18n="hero.list.systemsStrong">Automate workflows</strong></li>
                        <li><span data-i18n="hero.list.mobile">Mobile App Development</span> <strong data-i18n="hero.list.mobileStrong">iOS &amp; Android</strong></li>
                        <li><span data-i18n="hero.list.product">Product Strategy</span> <strong data-i18n="hero.list.productStrong">Launch-ready</strong></li>
                        <li><span data-i18n="hero.list.support">Support &amp; Maintenance</span> <strong data-i18n="hero.list.supportStrong">Reliable care</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section reveal">
        <div class="container">
            <div class="section-title">
                <h2 data-i18n="services.title">Services built for modern businesses</h2>
                <p data-i18n="services.subtitle">We mix design thinking with engineering discipline to deliver software solutions that are simple to use and powerful under the hood.</p>
            </div>
            <div class="grid services stagger">
                <article class="service-card">
                    <div class="service-icon">01</div>
                    <h3 data-i18n="services.card1.title">Website Experiences</h3>
                    <p data-i18n="services.card1.body">High-performance sites that look sharp on every device, optimized for conversions and storytelling.</p>
                </article>
                <article class="service-card">
                    <div class="service-icon">02</div>
                    <h3 data-i18n="services.card2.title">Business Systems</h3>
                    <p data-i18n="services.card2.body">Custom dashboards, CRMs, and workflow tools that keep your operations in sync.</p>
                </article>
                <article class="service-card">
                    <div class="service-icon">03</div>
                    <h3 data-i18n="services.card3.title">Product Design</h3>
                    <p data-i18n="services.card3.body">UI/UX that turns complexity into clarity and keeps users moving forward.</p>
                </article>
                <article class="service-card">
                    <div class="service-icon">04</div>
                    <h3 data-i18n="services.card4.title">Ongoing Support</h3>
                    <p data-i18n="services.card4.body">Performance monitoring, content updates, and feature expansions as you grow.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="process" class="section reveal">
        <div class="container">
            <div class="section-title">
                <h2 data-i18n="process.title">Our process keeps everything moving</h2>
                <p data-i18n="process.subtitle">We collaborate in focused sprints so you always know what is happening and what is next.</p>
            </div>
            <div class="grid process stagger">
                <article class="step">
                    <div class="step-number" data-i18n="process.step1.number">Step 01</div>
                    <h3 data-i18n="process.step1.title">Discovery</h3>
                    <p data-i18n="process.step1.body">We map your goals, users, and success metrics before writing a line of code.</p>
                </article>
                <article class="step">
                    <div class="step-number" data-i18n="process.step2.number">Step 02</div>
                    <h3 data-i18n="process.step2.title">Design &amp; Prototype</h3>
                    <p data-i18n="process.step2.body">Visual direction and clickable prototypes so you can feel the product early.</p>
                </article>
                <article class="step">
                    <div class="step-number" data-i18n="process.step3.number">Step 03</div>
                    <h3 data-i18n="process.step3.title">Build &amp; Test</h3>
                    <p data-i18n="process.step3.body">Agile development with weekly demos, QA, and performance reviews.</p>
                </article>
                <article class="step">
                    <div class="step-number" data-i18n="process.step4.number">Step 04</div>
                    <h3 data-i18n="process.step4.title">Launch &amp; Support</h3>
                    <p data-i18n="process.step4.body">We deploy, train your team, and stay on call for updates and enhancements.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="work" class="section reveal">
        <div class="container">
            <div class="feature">
                <div>
                    <div class="badge"><span class="badge-dot"></span><span data-i18n="work.badge">Featured build</span></div>
                    <h2 data-i18n="work.title">Alihdaya Connect</h2>
                    <p data-i18n="work.subtitle">A unified platform for managing projects, proposals, and reporting. Built to keep a fast-growing agency aligned and profitable.</p>
                    <div class="hero-actions">
                        <a class="button primary" href="#contact" data-i18n="work.planSystem">Plan your system</a>
                        <a class="button outline" href="#services" data-i18n="work.viewCapabilities">View capabilities</a>
                    </div>
                </div>
                <div class="feature-card">
                    <h3 data-i18n="work.deliveredTitle">Delivered value</h3>
                    <p data-i18n="work.deliveredBody">40% faster onboarding, automated reporting, and a centralized place for client communication.</p>
                    <div class="stats">
                        <div class="stat">
                            <h4>12</h4>
                            <span data-i18n="work.integrations">Integrations</span>
                        </div>
                        <div class="stat">
                            <h4>4.8x</h4>
                            <span data-i18n="work.productivity">Productivity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section reveal">
        <div class="container">
            <div class="section-title">
                <h2 data-i18n="portfolio.title">Proyek Unggulan Kami</h2>
                <p data-i18n="portfolio.subtitle">Beberapa solusi digital yang kami bangun untuk membantu bisnis klien bergerak lebih cepat.</p>
            </div>
            <div class="grid portfolio-grid stagger">
                <div class="portfolio-item">
                    <a href="https://bursakarir.com/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/lowongankerja.png') }}" alt="Bursa Karir">
                        <div class="portfolio-info">
                            <h5 data-i18n="portfolio.card1.title">Bursa Karir</h5>
                            <p data-i18n="portfolio.card1.body">Website pencarian dan lamaran kerja dengan alur rekrutmen yang rapi.</p>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <img src="{{ asset('images/hris.png') }}" alt="Human Resources Information System">
                    <div class="portfolio-info">
                        <h5 data-i18n="portfolio.card2.title">Human Resources Information System (HRIS)</h5>
                        <p data-i18n="portfolio.card2.body">Sistem pengelolaan karyawan untuk data, absensi, dan workflow HR.</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <a href="http://connect.alihdayadigital.com/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/alihdayaconnect.png') }}" alt="Alihdaya Connect">
                        <div class="portfolio-info">
                            <h5 data-i18n="portfolio.card3.title">Alihdaya Connect</h5>
                            <p data-i18n="portfolio.card3.body">Sistem absensi karyawan yang terintegrasi dan mudah dipantau.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section reveal">
        <div class="container contact">
            <div>
                <div class="section-title section-title-stack">
                    <h2 data-i18n="contact.title">Ready to build something great?</h2>
                    <p data-i18n="contact.subtitle">Tell us about your project. We will respond with a plan, timeline, and next steps within two business days.</p>
                </div>
                <div class="hero-card">
                    <h3 data-i18n="contact.directTitle">Direct contact</h3>
                    <ul>
                        <li>
                            <span data-i18n="contact.emailLabel">Email</span>
                            <div class="contact-lines">
                                <strong>revita@alihdayadigital.com</strong>
                                <strong>kiki@alihdayadigital.com</strong>
                            </div>
                        </li>
                        <li>
                            <span data-i18n="contact.phoneLabel">Phone</span>
                            <div class="contact-lines">
                                <strong>+62 856-5632-4229</strong>
                                <strong>+62 814-1037-6870</strong>
                            </div>
                        </li>
                        <li class="contact-location">
                            <span data-i18n="contact.locationLabel">Location</span>
                            <div class="contact-location-value">
                                <strong data-i18n="contact.locationValue">Graha Enka Deli, Jl. Buncit Raya No.12 12, RT.12/RW.2, Kalibata, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-card">
                <h3 data-i18n="contact.formTitle">Start a project</h3>
                <form>
                    <input type="text" placeholder="Full name" data-i18n-placeholder="contact.form.name">
                    <input type="email" placeholder="Email address" data-i18n-placeholder="contact.form.email">
                    <input type="text" placeholder="Company / Organization" data-i18n-placeholder="contact.form.company">
                    <textarea placeholder="Tell us about your goals" data-i18n-placeholder="contact.form.goals"></textarea>
                    <button class="button primary" type="button" data-i18n="contact.form.submit">Send inquiry</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <strong>alihdaya solutions</strong> <span data-i18n="footer.tagline">- Software solutions for websites, systems, and digital products.</span>
        </div>
    </footer>
</div>
<script>
    (() => {
        const elements = document.querySelectorAll(".reveal");
        if (!elements.length) {
            return;
        }

        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.18 }
        );

        elements.forEach((el) => observer.observe(el));
    })();

    (() => {
        const translations = {
            en: {
                "nav.services": "Services",
                "nav.process": "Process",
                "nav.work": "Work",
                "nav.contact": "Contact",
                "nav.startProject": "Start a Project",
                "hero.badge": "Software solutions for bold teams",
                "hero.title": "We build websites and systems that make your business faster, clearer, and ready to scale.",
                "hero.subtitle": "From marketing sites to custom platforms, we design, engineer, and launch software that solves real problems. Clean code, strong branding, and a partnership mindset.",
                "hero.requestQuote": "Request a Quote",
                "hero.exploreServices": "Explore Services",
                "stats.projects": "Projects shipped",
                "stats.delivery": "Typical delivery",
                "stats.retention": "Client retention",
                "hero.whatWeDo": "What we do",
                "hero.list.website": "Website Design & Development",
                "hero.list.websiteStrong": "Brand-first",
                "hero.list.systems": "Custom Systems",
                "hero.list.systemsStrong": "Automate workflows",
                "hero.list.mobile": "Mobile App Development",
                "hero.list.mobileStrong": "iOS & Android",
                "hero.list.product": "Product Strategy",
                "hero.list.productStrong": "Launch-ready",
                "hero.list.support": "Support & Maintenance",
                "hero.list.supportStrong": "Reliable care",
                "services.title": "Services built for modern businesses",
                "services.subtitle": "We mix design thinking with engineering discipline to deliver software solutions that are simple to use and powerful under the hood.",
                "services.card1.title": "Website Experiences",
                "services.card1.body": "High-performance sites that look sharp on every device, optimized for conversions and storytelling.",
                "services.card2.title": "Business Systems",
                "services.card2.body": "Custom dashboards, CRMs, and workflow tools that keep your operations in sync.",
                "services.card3.title": "Product Design",
                "services.card3.body": "UI/UX that turns complexity into clarity and keeps users moving forward.",
                "services.card4.title": "Ongoing Support",
                "services.card4.body": "Performance monitoring, content updates, and feature expansions as you grow.",
                "process.title": "Our process keeps everything moving",
                "process.subtitle": "We collaborate in focused sprints so you always know what is happening and what is next.",
                "process.step1.number": "Step 01",
                "process.step1.title": "Discovery",
                "process.step1.body": "We map your goals, users, and success metrics before writing a line of code.",
                "process.step2.number": "Step 02",
                "process.step2.title": "Design & Prototype",
                "process.step2.body": "Visual direction and clickable prototypes so you can feel the product early.",
                "process.step3.number": "Step 03",
                "process.step3.title": "Build & Test",
                "process.step3.body": "Agile development with weekly demos, QA, and performance reviews.",
                "process.step4.number": "Step 04",
                "process.step4.title": "Launch & Support",
                "process.step4.body": "We deploy, train your team, and stay on call for updates and enhancements.",
                "work.badge": "Featured build",
                "work.title": "Alihdaya Connect",
                "work.subtitle": "Employee attendance platform with full mobile clock-in/clock-out integration and easy monitoring.",
                "work.planSystem": "Plan your system",
                "work.viewCapabilities": "View capabilities",
                "work.deliveredTitle": "Delivered value",
                "work.deliveredBody": "40% faster onboarding, automated reporting, and a centralized place for client communication.",
                "work.integrations": "Integrations",
                "work.productivity": "Productivity",
                "portfolio.title": "Proyek Unggulan Kami",
                "portfolio.subtitle": "Beberapa solusi digital yang kami bangun untuk membantu bisnis klien bergerak lebih cepat.",
                "portfolio.card1.title": "Bursa Karir",
                "portfolio.card1.body": "Website pencarian dan lamaran kerja dengan alur rekrutmen yang rapi.",
                "portfolio.card2.title": "Human Resources Information System (HRIS)",
                "portfolio.card2.body": "Sistem pengelolaan karyawan untuk data, absensi, dan workflow HR.",
                "portfolio.card3.title": "Alihdaya Connect",
                "portfolio.card3.body": "Sistem absensi karyawan yang terintegrasi dan mudah dipantau.",
                "contact.title": "Ready to build something great?",
                "contact.subtitle": "Tell us about your project. We will respond with a plan, timeline, and next steps within two business days.",
                "contact.directTitle": "Direct contact",
                "contact.emailLabel": "Email",
                "contact.phoneLabel": "Phone",
                "contact.locationLabel": "Location",
                "contact.locationValue": "Graha Enka Deli, Jl. Buncit Raya No.12 12, RT.12/RW.2, Kalibata, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740",
                "contact.formTitle": "Start a project",
                "contact.form.name": "Full name",
                "contact.form.email": "Email address",
                "contact.form.company": "Company / Organization",
                "contact.form.goals": "Tell us about your goals",
                "contact.form.submit": "Send inquiry",
                "footer.tagline": "- Software solutions for websites, systems, and digital products."
            },
            id: {
                "nav.services": "Solusi",
                "nav.process": "Proses",
                "nav.work": "Studi Kasus",
                "nav.contact": "Hubungi",
                "nav.startProject": "Konsultasi Proyek",
                "hero.badge": "Solusi software untuk bisnis yang ingin bertumbuh",
                "hero.title": "Kami membangun website dan sistem yang mempercepat operasional, memperjelas alur, dan siap skala.",
                "hero.subtitle": "Dari situs pemasaran hingga platform kustom, kami merancang, mengembangkan, dan meluncurkan software yang menyelesaikan masalah nyata. Rapi, terukur, dan siap digunakan tim.",
                "hero.requestQuote": "Minta Penawaran",
                "hero.exploreServices": "Jelajahi Solusi",
                "stats.projects": "Proyek terselesaikan",
                "stats.delivery": "Durasi pengerjaan",
                "stats.retention": "Retensi klien",
                "hero.whatWeDo": "Yang kami tangani",
                "hero.list.website": "Desain & Pengembangan Website",
                "hero.list.websiteStrong": "Fokus brand",
                "hero.list.systems": "Sistem kustom",
                "hero.list.systemsStrong": "Otomasi workflow",
                "hero.list.mobile": "Pengembangan Aplikasi Mobile",
                "hero.list.mobileStrong": "iOS & Android",
                "hero.list.product": "Strategi produk",
                "hero.list.productStrong": "Siap diluncurkan",
                "hero.list.support": "Dukungan & pemeliharaan",
                "hero.list.supportStrong": "Pendampingan berkelanjutan",
                "services.title": "Solusi untuk bisnis modern",
                "services.subtitle": "Kami memadukan strategi, desain, dan engineering untuk menghadirkan software yang mudah digunakan dan kuat di balik layar.",
                "services.card1.title": "Website Berorientasi Hasil",
                "services.card1.body": "Website cepat dan responsif yang siap meningkatkan konversi dan memperkuat brand.",
                "services.card2.title": "Sistem Bisnis",
                "services.card2.body": "Dashboard, CRM, dan workflow kustom yang menjaga operasional Anda tetap rapi dan terukur.",
                "services.card3.title": "Desain Produk Digital",
                "services.card3.body": "UI/UX yang memudahkan pengguna dan mengubah proses kompleks menjadi sederhana.",
                "services.card4.title": "Dukungan Berkelanjutan",
                "services.card4.body": "Monitoring performa, pembaruan konten, dan pengembangan fitur saat bisnis bertumbuh.",
                "process.title": "Proses yang menjaga proyek tetap on-track",
                "process.subtitle": "Kami bekerja dalam sprint terfokus agar Anda selalu tahu progres, prioritas, dan langkah berikutnya.",
                "process.step1.number": "Langkah 01",
                "process.step1.title": "Discovery",
                "process.step1.body": "Kami selaraskan tujuan bisnis, kebutuhan pengguna, dan metrik sukses sebelum eksekusi.",
                "process.step2.number": "Langkah 02",
                "process.step2.title": "Desain & Prototipe",
                "process.step2.body": "Arah visual dan prototipe agar Anda bisa menilai alur sebelum pembangunan.",
                "process.step3.number": "Langkah 03",
                "process.step3.title": "Build & QA",
                "process.step3.body": "Pengembangan agile dengan demo berkala, QA, dan optimasi performa.",
                "process.step4.number": "Langkah 04",
                "process.step4.title": "Peluncuran & Dukungan",
                "process.step4.body": "Kami rilis, serah terima, dan dukung pengembangan lanjutan sesuai kebutuhan.",
                "work.badge": "Studi kasus",
                "work.title": "Alihdaya Connect",
                "work.subtitle": "Platform terintegrasi untuk data karyawan, absensi, dan payroll yang menyederhanakan administrasi agar tim fokus pada pertumbuhan.",
                "work.planSystem": "Diskusikan sistem Anda",
                "work.viewCapabilities": "Lihat kapabilitas",
                "work.deliveredTitle": "Hasil yang dicapai",
                "work.deliveredBody": "Data karyawan terpusat, rekap payroll lebih cepat, dan pemantauan absensi yang akurat.",
                "work.integrations": "Integrasi",
                "work.productivity": "Produktivitas",
                "testimonials.title": "Dipercaya tim yang serius bertumbuh",
                "testimonials.subtitle": "Kami bertindak sebagai partner, memadukan visi bisnis, kecepatan eksekusi, dan perhatian pada detail.",
                "testimonials.quote1.body": "\"Mereka merapikan proses kami menjadi sistem yang benar-benar dipakai tim.\"",
                "testimonials.quote1.name": "Head of Operations, FinTech",
                "testimonials.quote2.body": "\"Desain dan engineering selaras, jadi peluncuran lebih cepat dengan revisi minimal.\"",
                "testimonials.quote2.name": "Founder, Health Startup",
                "testimonials.quote3.body": "\"Website kami tampil lebih premium dan meningkatkan kualitas lead.\"",
                "testimonials.quote3.name": "Marketing Director, Real Estate",
                "contact.title": "Siap bangun solusi bersama?",
                "contact.subtitle": "Ceritakan kebutuhan Anda. Kami akan merespons dengan rencana, estimasi waktu, dan langkah selanjutnya dalam dua hari kerja.",
                "contact.directTitle": "Kontak langsung",
                "contact.emailLabel": "Email",
                "contact.phoneLabel": "Telepon",
                "contact.locationLabel": "Lokasi",
                "contact.locationValue": "Graha Enka Deli, Jl. Buncit Raya No.12 12, RT.12/RW.2, Kalibata, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740",
                "contact.formTitle": "Mulai konsultasi",
                "contact.form.name": "Nama lengkap",
                "contact.form.email": "Email aktif",
                "contact.form.company": "Perusahaan / Organisasi",
                "contact.form.goals": "Ceritakan kebutuhan Anda",
                "contact.form.submit": "Kirim permintaan",
                "footer.tagline": "- Solusi software untuk website, sistem, dan produk digital."
            }
        };

        const setLanguage = (lang) => {
            const dictionary = translations[lang] || translations.en;
            document.documentElement.lang = lang === "id" ? "id" : "en";

            document.querySelectorAll("[data-i18n]").forEach((el) => {
                const key = el.getAttribute("data-i18n");
                if (dictionary[key]) {
                    el.textContent = dictionary[key];
                }
            });

            document.querySelectorAll("[data-i18n-placeholder]").forEach((el) => {
                const key = el.getAttribute("data-i18n-placeholder");
                if (dictionary[key]) {
                    el.setAttribute("placeholder", dictionary[key]);
                }
            });
        };

        // Toggle is disabled for now; keep the page in Indonesian.
        setLanguage("id");
    })();

    (() => {
        const nav = document.querySelector(".nav");
        if (!nav) {
            return;
        }

        const updateNav = () => {
            nav.classList.toggle("is-compact", window.scrollY > 40);
        };

        updateNav();
        window.addEventListener("scroll", updateNav, { passive: true });
    })();
</script>
</body>
</html>
