<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="@yield('meta_description', 'SOURCE 365 helps businesses grow with digital marketing, SEO, tracking, design and development services.')">
    <title>@yield('title', 'SOURCE 365 | Digital Growth & IT Solutions')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            red: '#ff0000',
                            dark: '#d90000'
                        },
                        ink: {
                            DEFAULT: '#101010',
                            soft: '#181818'
                        },
                        paper: '#f6f6f6',
                    },
                    fontFamily: {
                        sans: ['"DM Sans"', 'sans-serif'],
                        heading: ['Manrope', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* =========================================
           GLOBAL CSS VARIABLES & RESET
           ========================================= */
        :root {
            --brand-red: #ff2525;
            --brand-red-dark: #d61313;
            --brand-red-glow: rgba(255, 37, 37, 0.4);
            --brand-red-subtle: rgba(255, 37, 37, 0.08);
            --ink: #101010;
            --ink-soft: #181818;
            --surface-dark: #090a0f;
            --surface-dark-card: #12131a;
            --white: #ffffff;
            --paper: #f6f6f6;
            --muted: #6b6b6b;
            --muted-dark: #bdbdbd;
            --line: #e5e5e5;
            --line-dark: rgba(255, 255, 255, .14);
            --border-glass: rgba(255, 255, 255, 0.08);
            --radius: 22px;
            --shadow: 0 20px 60px rgba(0, 0, 0, .09);
            --content-width: 1200px;
            --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
            --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ===== DOUBLE SCROLLBAR FIX =====
           html e kono overflow set kora hoyni, body te overflow-x: clip
           (clip scroll-container banay na, tai ekta-i scrollbar thake) */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--white);
            color: var(--ink);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            overflow-x: clip;
            width: 100%;
        }

        body,
        button,
        input,
        textarea,
        select {
            font-family: 'DM Sans', sans-serif;
        }

        img {
            max-width: 100%;
            display: block;
            height: auto;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            cursor: pointer;
            border: none;
            background: none;
        }

        /* =========================================
           GLOBAL LAYOUT & SECTIONS
           ========================================= */
        .container {
            width: min(var(--content-width), calc(100% - 48px));
            margin-inline: auto;
        }

        .section {
            padding: 100px 0;
            overflow-x: clip;
        }

        .section-light {
            background: var(--white);
            color: var(--ink);
        }

        .section-paper {
            background-color: #fafafc;
            color: var(--ink);
            background-image: radial-gradient(rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .section-dark,
        .section-dark-soft {
            background-color: var(--surface-dark);
            color: var(--white);
            background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
            background-size: 28px 28px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--brand-red);
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: '';
            width: 28px;
            height: 2px;
            background: currentColor;
        }

        .section-heading {
            max-width: 760px;
            margin: 0 auto 48px;
            text-align: center;
            padding: 0 15px;
        }

        .section-heading h2 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(2rem, 4vw, 3.4rem);
            line-height: 1.12;
            letter-spacing: -.045em;
            margin: 14px 0 16px;
            font-weight: 800;
        }

        .section-heading p {
            color: var(--muted);
            max-width: 650px;
            margin: 0 auto;
        }

        .section-dark .section-heading p,
        .section-dark-soft .section-heading p {
            color: var(--muted-dark);
        }

        .accent {
            color: var(--brand-red);
        }

        /* =========================================
           GLOBAL SCROLL REVEAL (LIGHTWEIGHT - NO BLUR)
           JS animation shesh hole eই classgulo remove kore dey,
           tai hover transition er sathe conflict ba delay hoy na
           ========================================= */
        .reveal {
            opacity: 0;
            transform: translate3d(0, 40px, 0);
            transition: opacity .9s var(--ease-out-expo), transform .9s var(--ease-out-expo) !important;
            will-change: opacity, transform;
        }

        .reveal-left {
            transform: translate3d(-50px, 0, 0);
        }

        .reveal-right {
            transform: translate3d(50px, 0, 0);
        }

        .reveal-scale {
            transform: translate3d(0, 30px, 0) scale(.96);
        }

        .reveal.active {
            opacity: 1;
            transform: translate3d(0, 0, 0) scale(1);
        }

        /* =========================================
           BUTTONS
           ========================================= */
        .btn {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            padding: 14px 28px;
            font-weight: 800;
            letter-spacing: -0.01em;
            transition: transform .4s var(--ease-out-expo), box-shadow .4s var(--ease-out-expo), border-color .3s, color .3s, background .3s;
            z-index: 1;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(255, 255, 255, 0.4) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 0;
        }

        .btn:hover::before {
            opacity: 1;
        }

        .btn-red {
            background: linear-gradient(135deg, var(--brand-red) 0%, var(--brand-red-dark) 100%);
            color: #fff;
            box-shadow: 0 10px 25px rgba(255, 37, 37, 0.28);
            border: 1px solid transparent;
        }

        .btn-red:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 18px 40px rgba(255, 37, 37, 0.42);
            color: #fff;
        }

        .btn-outline {
            background: transparent;
            color: var(--ink);
            border: 1px solid #cfcfcf;
        }

        .btn-outline:hover {
            transform: translateY(-4px);
            border-color: var(--brand-red);
            color: var(--brand-red);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
        }

        .btn-outline-light {
            color: var(--white);
            border: 1px solid rgba(255, 255, 255, .32);
        }

        .btn-outline-light:hover {
            border-color: var(--brand-red);
            color: var(--white);
            background: rgba(255, 0, 0, .08);
        }

        /* =========================================
           HEADER & NAVIGATION
           ========================================= */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(0, 0, 0, .08);
            width: 100%;
        }

        .nav-wrap {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
        }

        .brand-logo {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            flex-shrink: 0;
        }

        .brand-logo img {
            width: auto;
            height: 44px;
            object-fit: contain;
        }

        .brand-wordmark {
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 1.25rem;
            letter-spacing: -.05em;
        }

        .brand-wordmark span {
            color: var(--brand-red);
        }

        .main-nav {
            display: flex;
            align-items: center;
            gap: clamp(16px, 2.3vw, 30px);
        }

        .main-nav a {
            text-decoration: none;
            font-size: .9rem;
            font-weight: 700;
            color: #262626;
            transition: color .2s;
        }

        .main-nav a:hover,
        .main-nav a[aria-current="page"] {
            color: var(--brand-red);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-actions .btn {
            min-height: 44px;
            padding: 10px 18px;
            font-size: .84rem;
        }

        .menu-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid var(--line);
            background: var(--white);
            border-radius: 50%;
            color: var(--ink);
            font-size: 1.1rem;
            align-items: center;
            justify-content: center;
        }

        main {
            min-height: 60vh;
            overflow-x: clip;
            width: 100%;
            position: relative;
        }

        /* =========================================
           FOOTER
           ========================================= */
        .site-footer {
            background: var(--surface-dark);
            color: var(--white);
            padding: 72px 0 22px;
            overflow: hidden;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1.1fr;
            gap: 42px;
            padding: 0 15px;
        }

        .footer-brand .brand-wordmark {
            display: inline-block;
            margin-bottom: 18px;
            font-size: 1.6rem;
        }

        .footer-col h3 {
            font-size: .98rem;
            margin-bottom: 18px;
            font-family: 'Manrope', sans-serif;
        }

        .footer-col p,
        .footer-col li,
        .footer-col a {
            color: #bdbdbd;
            font-size: .9rem;
            line-height: 1.9;
        }

        .footer-col ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .footer-col a {
            text-decoration: none;
            transition: color .2s;
        }

        .footer-col a:hover {
            color: var(--white);
        }

        .footer-contact i {
            width: 22px;
            color: var(--brand-red);
        }

        .footer-bottom {
            margin-top: 48px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            color: #a8a8a8;
            font-size: .82rem;
            padding: 20px 15px 0;
        }

        .footer-legal {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
        }

        /* =========================================
           FLOATING WHATSAPP & POPUP
           ========================================= */
        .whatsapp-float-container {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 999;
            display: flex;
            align-items: flex-end;
            gap: 12px;
        }

        @keyframes waGlow {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.6);
            }

            70% {
                box-shadow: 0 0 0 16px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        .whatsapp-float {
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: #fff;
            background: #25d366;
            text-decoration: none;
            font-size: 1.9rem;
            flex-shrink: 0;
            animation: waGlow 2s infinite;
            transition: background .3s ease, transform .3s ease;
        }

        .whatsapp-float:hover {
            background: #1ebc5b;
            animation-play-state: paused;
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 12px 28px rgba(37, 211, 102, 0.4);
        }

        .whatsapp-popup {
            background: #ffffff;
            color: #101010;
            padding: 14px 18px;
            border-radius: 18px;
            border-bottom-right-radius: 4px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
            font-size: 0.92rem;
            font-weight: 800;
            max-width: 250px;
            opacity: 0;
            transform: translateY(15px) scale(0.9);
            pointer-events: none;
            transition: opacity .4s var(--ease-out-expo), transform .4s var(--ease-out-expo);
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            border: 1px solid #eaeaea;
        }

        .whatsapp-popup.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        .wa-popup-close {
            font-size: 1.4rem;
            line-height: 0.8;
            color: #a0a0a0;
            transition: color 0.2s;
            cursor: pointer;
            margin-top: -2px;
        }

        .wa-popup-close:hover {
            color: #ff2525;
        }

        /* =========================================
           RESPONSIVE
           ========================================= */
        @media (max-width: 1020px) {
            .nav-wrap {
                gap: 16px;
            }

            .main-nav {
                gap: 15px;
            }

            .main-nav a {
                font-size: .84rem;
            }

            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 820px) {
            .container {
                width: min(100% - 36px, var(--content-width));
            }

            .section {
                padding: 76px 0;
            }

            .menu-toggle {
                display: inline-grid;
                place-items: center;
            }

            .nav-wrap {
                min-height: 72px;
            }

            .nav-actions .btn {
                display: none;
            }

            .main-nav {
                display: none;
                position: absolute;
                top: 71px;
                left: 0;
                right: 0;
                width: 100%;
                padding: 18px 24px 24px;
                background: var(--white);
                border-bottom: 1px solid var(--line);
                box-shadow: 0 20px 30px rgba(0, 0, 0, .08);
                flex-direction: column;
                gap: 0;
                z-index: 1001;
            }

            .main-nav.is-open {
                display: flex;
            }

            .main-nav a {
                padding: 13px 0;
                border-bottom: 1px solid #f0f0f0;
                font-size: .96rem;
                width: 100%;
            }

            .main-nav a:last-child {
                border-bottom: 0;
            }
        }

        @media (max-width: 620px) {
            .container {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .section {
                padding: 62px 0;
            }
        }

        @media (max-width: 560px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-bottom {
                margin-top: 32px;
                flex-direction: column;
                align-items: flex-start;
            }

            .brand-logo img {
                height: 38px;
            }

            .whatsapp-float-container {
                right: 16px;
                bottom: 16px;
            }

            .whatsapp-float {
                width: 50px;
                height: 50px;
                font-size: 1.55rem;
            }
        }

        /* Motion kom korte chaile (accessibility + performance) */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }

            .reveal {
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>

    <!-- Dynamic Page Styles -->
    @yield('styles')
</head>

<body>

    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand-logo" href="{{ route('home') }}" aria-label="SOURCE 365 home">
                <img src="{{ asset('Logo/SRC_Logo_NBG.png') }}" alt="SOURCE 365"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-block';">
                <span class="brand-wordmark" style="display:none">SOURCE <span>365</span></span>
            </a>

            <nav class="main-nav" id="primary-navigation" aria-label="Main navigation">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('business-scale-up') }}">Business Scale Up</a>
                {{-- <a href="{{ route('portfolio') }}">Portfolio</a> --}}
                <a href="{{ route('contact') }}">Contact</a>
            </nav>

            <div class="nav-actions">
                <a href="{{ route('contact') }}" class="btn btn-red">Talk to an Expert <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-navigation">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-brand">
                    <div class="brand-wordmark">SOURCE <span>365</span></div>
                    <p>Your Complete Digital Growth Partner. Marketing, SEO, design, tracking and development solutions shaped around your business goals.</p>
                </div>

                <div class="footer-col">
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="{{ route('business-scale-up') }}">Business Scale Up</a></li>
                        {{-- <li><a href="{{ route('portfolio') }}">Portfolio</a></li> --}}
                        <li><a href="{{ route('about') }}">About Us</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/terms-and-conditions') }}">Terms &amp; Conditions</a></li>
                        <li><a href="{{ url('/refund-service-policy') }}">Refund / Service Policy</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fa-solid fa-phone" aria-hidden="true"></i> <a href="tel:+8801931623820">01931-623820</a></p>
                    <p><i class="fa-solid fa-envelope" aria-hidden="true"></i> <a href="mailto:contact@source365.org">contact@source365.org</a></p>
                    <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Ashulia, Savar, Dhaka</p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SOURCE 365. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="{{ url('/privacy-policy') }}">Privacy</a>
                    <a href="{{ url('/terms-and-conditions') }}">Terms</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Action Button with Popup -->
    <div class="whatsapp-float-container">
        <div class="whatsapp-popup" id="wa-popup">
            <span id="wa-popup-text">বিস্তারিত জানতে Whatsapp করুন।</span>
            <button class="wa-popup-close" aria-label="Close message">&times;</button>
        </div>
        <a href="https://wa.me/8801931623820" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with SOURCE 365 on WhatsApp">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div>

    <!-- =========================================
         GLOBAL SCRIPTS (MENU & ANIMATIONS)
         ========================================= -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // 1. Mobile Menu Toggle
            const toggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('#primary-navigation');

            if (toggle && nav) {
                toggle.addEventListener('click', () => {
                    const open = toggle.getAttribute('aria-expanded') === 'true';
                    toggle.setAttribute('aria-expanded', String(!open));
                    toggle.setAttribute('aria-label', open ? 'Open navigation' : 'Close navigation');
                    toggle.innerHTML = open ?
                        '<i class="fa-solid fa-bars" aria-hidden="true"></i>' :
                        '<i class="fa-solid fa-xmark" aria-hidden="true"></i>';
                    nav.classList.toggle('is-open', !open);
                });

                nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
                    nav.classList.remove('is-open');
                    toggle.setAttribute('aria-expanded', 'false');
                    toggle.setAttribute('aria-label', 'Open navigation');
                    toggle.innerHTML = '<i class="fa-solid fa-bars" aria-hidden="true"></i>';
                }));
            }

            // 2. Scroll Reveal (stagger + auto cleanup)
            const staggerGroups = [{
                    selector: '.service-grid .spotlight-card',
                    step: 0.10
                },
                {
                    selector: '.portfolio-grid .project-card',
                    step: 0.12
                },
                {
                    selector: '.why-list .why-item',
                    step: 0.12
                },
                {
                    selector: '.process-grid .process-card',
                    step: 0.10
                },
                {
                    selector: '.grid > .reveal',
                    step: 0.10
                }
            ];

            staggerGroups.forEach(group => {
                document.querySelectorAll(group.selector).forEach((item, index) => {
                    // max 0.5s delay, jate beshi wait korte na hoy
                    const delay = Math.min(index * group.step, 0.5);
                    item.style.setProperty('transition-delay', delay + 's', 'important');
                    item.dataset.revealDelay = delay;
                });
            });

            const cleanup = (el) => {
                el.classList.remove('reveal', 'reveal-left', 'reveal-right', 'reveal-scale', 'active');
                el.style.removeProperty('transition-delay');
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    el.classList.add('active');
                    observer.unobserve(el);

                    // Animation shesh hole class sorie felo: hover transition delay
                    // hobe na, ar will-change GPU layer free hobe
                    const delay = parseFloat(el.dataset.revealDelay || 0);
                    setTimeout(() => cleanup(el), (delay + 1) * 1000 + 150);
                });
            }, {
                root: null,
                rootMargin: '0px 0px -40px 0px',
                threshold: 0.1
            });

            document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

            // 3. Button Ripple Position
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    btn.style.setProperty('--mouse-x', (e.clientX - rect.left) + 'px');
                    btn.style.setProperty('--mouse-y', (e.clientY - rect.top) + 'px');
                });
            });

            // 4. WhatsApp Popup Loop
            const waPopup = document.getElementById('wa-popup');
            const waPopupText = document.getElementById('wa-popup-text');
            const waCloseBtn = document.querySelector('.wa-popup-close');

            if (waPopup && waPopupText) {
                const popupData = [{
                        msg: "👋 স্বাগতম! আপনার কোনো প্রশ্ন আছে?",
                        time: 6000
                    },
                    {
                        msg: "সেলস বা লিড নিয়ে চিন্তিত? আমরা আছি!",
                        time: 7000
                    },
                    {
                        msg: "বিজনেস এর জন্য প্রফেশনাল মার্কেটিং টীম লাগবে?",
                        time: 8000
                    },
                    {
                        msg: "🚀 SCALE-UP সার্ভিস কি, বিস্তারিত জানতে চান?",
                        time: 7000
                    },
                    {
                        msg: "নতুন ওয়েবসাইট বা অ্যাপ বানাতে চান?",
                        time: 6000
                    },
                    {
                        msg: "ফ্রি কনসালটেন্সি নিতে এখনই মেসেজ দিন 💬",
                        time: 7000
                    }
                ];

                let isPopupClosed = false;
                let currentIndex = 0;

                if (waCloseBtn) {
                    waCloseBtn.addEventListener('click', () => {
                        isPopupClosed = true;
                        waPopup.classList.remove('show');
                    });
                }

                const runPopupLoop = () => {
                    if (isPopupClosed) return;
                    const currentData = popupData[currentIndex];
                    waPopupText.innerText = currentData.msg;
                    waPopup.classList.add('show');

                    setTimeout(() => {
                        if (isPopupClosed) return;
                        waPopup.classList.remove('show');
                        currentIndex = (currentIndex + 1) % popupData.length;
                        setTimeout(runPopupLoop, 1000);
                    }, currentData.time);
                };

                setTimeout(runPopupLoop, 2500);
            }
        });
    </script>

    <!-- Dynamic Page Scripts -->
    @yield('scripts')
</body>

</html>