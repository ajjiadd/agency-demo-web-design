@extends('frontend.layouts.master')

@section('title', 'SOURCE 365 | Your Complete Digital Growth Partner')

@section('meta_description', 'Grow your business with SOURCE 365: digital marketing, SEO, conversion tracking, design, website development and business growth support.')

@section('styles')
<style>
    /* NOTE: .reveal related CSS eikhane nei, eta master e ache (duplicate hole conflict hoy) */

    :root {
        --brand-red: #ff2525;
        --brand-red-dark: #d61313;
        --brand-red-glow: rgba(255, 37, 37, 0.4);
        --brand-red-subtle: rgba(255, 37, 37, 0.08);
        --surface-dark: #090a0f;
        --surface-dark-card: #12131a;
        --border-glass: rgba(255, 255, 255, 0.08);
        --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
        --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .hero,
    .section-paper {
        background-color: #fafafc;
        background-image: radial-gradient(rgba(0, 0, 0, 0.05) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    .section-dark {
        background-color: var(--surface-dark);
        background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 28px 28px;
    }

    .hero-copy h1 .stroke {
        background: linear-gradient(135deg, #ff2525 0%, #ff6b6b 50%, #ff1515 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        display: inline-block;
    }

    @keyframes livePing {
        0% {
            box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.8);
        }

        70% {
            box-shadow: 0 0 0 12px rgba(74, 222, 128, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(74, 222, 128, 0);
        }
    }

    @keyframes floatLevitate {

        0%,
        100% {
            transform: translate3d(0, 0, 0) rotate(0deg);
        }

        50% {
            transform: translate3d(0, -12px, 0) rotate(1deg);
        }
    }

    @keyframes marqueeInfinite {
        0% {
            transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(-50%, 0, 0);
        }
    }

    @keyframes marqueeReverse {
        0% {
            transform: translate3d(-50%, 0, 0);
        }

        100% {
            transform: translate3d(0, 0, 0);
        }
    }

    /* =========================================
       HERO
       ========================================= */
    .hero {
        position: relative;
        overflow: hidden;
        isolation: isolate;
        padding: 124px 0 100px;
    }

    /* Animation + blur soriye deya hoyeche (scroll lag er karon) */
    .hero-glow {
        position: absolute;
        width: 700px;
        height: 700px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 37, 37, 0.15) 0%, transparent 60%);
        right: -200px;
        top: -250px;
        z-index: -1;
        pointer-events: none;
    }

    .hero-layout {
        display: grid;
        grid-template-columns: 1.12fr .88fr;
        align-items: center;
        gap: 64px;
    }

    .hero-copy h1 {
        font-family: 'Manrope', sans-serif;
        font-size: clamp(2.8rem, 5.8vw, 5.2rem);
        letter-spacing: -.065em;
        line-height: 1.02;
        font-weight: 800;
        margin: 24px 0;
    }

    .hero-copy>p {
        color: #5a5a62;
        font-size: 1.15rem;
        max-width: 610px;
        margin-bottom: 34px;
        line-height: 1.6;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .hero-proof {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 24px;
        margin-top: 40px;
        color: #52525c;
        font-size: .88rem;
        font-weight: 600;
    }

    .hero-proof span {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        transition: transform 0.3s ease;
    }

    .hero-proof span:hover {
        transform: translateX(4px);
    }

    .hero-proof i {
        color: var(--brand-red);
        font-size: 1.1rem;
    }

    .hero-art {
        position: relative;
        min-height: 460px;
        display: grid;
        place-items: center;
    }

    .hero-art-main {
        width: 100%;
        max-width: 480px;
        aspect-ratio: 1 / 1.04;
        border-radius: 38px;
        overflow: hidden;
        background: #0f1015;
        position: relative;
        box-shadow: 0 35px 85px rgba(0, 0, 0, 0.22);
        border: 1px solid rgba(255, 255, 255, 0.25);
    }

    .hero-art-main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.85;
        transition: transform 1.2s var(--ease-out-expo), opacity .6s ease;
    }

    .hero-art-main:hover img {
        transform: scale(1.08);
        opacity: 1;
    }

    .hero-art-main::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(145deg, rgba(255, 37, 37, 0.25) 0%, transparent 55%, rgba(10, 10, 14, 0.9) 100%);
        pointer-events: none;
    }

    .hero-art-label {
        position: absolute;
        z-index: 2;
        left: 32px;
        right: 32px;
        bottom: 32px;
        color: #fff;
    }

    .hero-art-label small {
        text-transform: uppercase;
        letter-spacing: .16em;
        color: #ffa2a2;
        font-weight: 800;
        font-size: .78rem;
    }

    .hero-art-label h3 {
        font-family: 'Manrope', sans-serif;
        font-size: clamp(1.6rem, 3.2vw, 2.3rem);
        line-height: 1.15;
        margin-top: 8px;
        font-weight: 800;
    }

    /* backdrop-filter bhari, tai solid background */
    .floating-note {
        position: absolute;
        z-index: 3;
        top: 35px;
        left: -25px;
        background: rgba(255, 255, 255, 0.96);
        padding: 16px 22px;
        border-radius: 20px;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.85);
        display: flex;
        align-items: center;
        gap: 14px;
        animation: floatLevitate 5s ease-in-out infinite;
        will-change: transform;
    }

    .floating-note .note-icon {
        width: 44px;
        height: 44px;
        display: grid;
        place-items: center;
        border-radius: 14px;
        background: #ffebeb;
        color: var(--brand-red);
        font-size: 1.2rem;
        box-shadow: 0 5px 15px rgba(255, 37, 37, 0.15);
    }

    .floating-note strong {
        display: block;
        font-size: .92rem;
        color: #111;
    }

    .floating-note small {
        color: #666;
        font-size: .78rem;
    }

    .floating-stamp {
        position: absolute;
        right: -15px;
        bottom: 30px;
        z-index: 3;
        width: 115px;
        height: 115px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        text-align: center;
        background: linear-gradient(135deg, var(--brand-red) 0%, var(--brand-red-dark) 100%);
        color: white;
        font-family: 'Manrope', sans-serif;
        font-size: .82rem;
        font-weight: 800;
        line-height: 1.25;
        border: 7px solid white;
        transform: rotate(9deg);
        box-shadow: 0 16px 40px rgba(255, 37, 37, 0.45);
        transition: transform 0.5s var(--ease-spring);
    }

    .floating-stamp:hover {
        transform: rotate(25deg) scale(1.12);
    }

    /* =========================================
       TRUST STRIP MARQUEE
       ========================================= */
    .trust-strip {
        background: #0c0d12;
        color: #fff;
        padding: 22px 0;
        overflow: hidden;
        position: relative;
        border-top: 1px solid var(--border-glass);
        border-bottom: 1px solid var(--border-glass);
        contain: paint;
    }

    .marquee-track {
        display: flex;
        width: max-content;
        animation: marqueeInfinite 26s linear infinite;
        will-change: transform;
    }

    .marquee-track:hover {
        animation-play-state: paused;
    }

    /* gap na diye padding-right: tahole -50% e perfect seamless loop hoy */
    .trust-strip-inner {
        display: flex;
        align-items: center;
        gap: 40px;
        padding-right: 40px;
    }

    .trust-strip-inner p {
        color: #7f8190;
        font-size: .86rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        white-space: nowrap;
        margin: 0;
    }

    .trust-items {
        display: flex;
        gap: 36px;
        align-items: center;
    }

    .trust-items span {
        font-size: .88rem;
        font-weight: 700;
        color: #eee;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
    }

    .trust-items i {
        color: var(--brand-red);
        margin-right: 9px;
        font-size: 1rem;
    }

    /* =========================================
       BRAND LOGO STRIP
       ========================================= */
    .brand-strip {
        background: #fafafc;
        padding: 60px 0;
        overflow: hidden;
        position: relative;
        border-top: 1px solid var(--border-glass);
        border-bottom: 1px solid var(--border-glass);
        contain: paint;
    }

    .marquee-track-reverse {
        display: flex;
        width: max-content;
        animation: marqueeReverse 60s linear infinite;
        will-change: transform;
    }

    .marquee-track-reverse:hover {
        animation-play-state: paused;
    }

    .brand-strip-inner {
        display: flex;
        align-items: center;
        gap: 25px;
        padding-right: 25px;
    }

    .brand-logo-item {
        width: 180px;
        height: 170px;
        padding: 18px 24px;
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 16px;
        object-fit: contain;
        flex-shrink: 0;
        transition: transform 0.4s ease, border-color 0.4s ease;
        cursor: pointer;
    }

    .brand-logo-item:hover {
        transform: translateY(-5px) scale(1.03);
        border-color: rgba(255, 37, 37, 0.3);
    }

    /* =========================================
       SERVICES SPOTLIGHT CARDS
       ========================================= */
    .service-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
    }

    .spotlight-card {
        position: relative;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid #eaeaea;
        border-radius: 24px;
        padding: 36px 32px;
        min-height: 275px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        overflow: hidden;
        transition: transform 0.4s var(--ease-out-expo), box-shadow 0.4s var(--ease-out-expo), border-color 0.4s ease;
    }

    .spotlight-card::before {
        content: '';
        position: absolute;
        top: var(--mouse-y, 50%);
        left: var(--mouse-x, 50%);
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, rgba(255, 37, 37, 0.12) 0%, transparent 70%);
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        z-index: 0;
    }

    .spotlight-card:hover::before {
        opacity: 1;
    }

    .spotlight-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 37, 37, 0.4);
        box-shadow: 0 24px 50px rgba(0, 0, 0, 0.08);
    }

    .service-icon {
        width: 58px;
        height: 58px;
        display: grid;
        place-items: center;
        border-radius: 18px;
        background: #ffebeb;
        color: var(--brand-red);
        font-size: 1.45rem;
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
        transition: transform 0.4s var(--ease-spring), background 0.4s ease, color 0.4s ease;
    }

    .spotlight-card:hover .service-icon {
        transform: scale(1.15) rotate(8deg);
        background: var(--brand-red);
        color: #fff;
        box-shadow: 0 10px 25px var(--brand-red-glow);
    }

    .spotlight-card h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 1.25rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
        z-index: 1;
    }

    .spotlight-card p {
        color: #60606a;
        font-size: .94rem;
        margin-bottom: 24px;
        line-height: 1.55;
        position: relative;
        z-index: 1;
    }

    .text-link {
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: var(--ink);
        font-weight: 800;
        font-size: .9rem;
        position: relative;
        z-index: 1;
    }

    .text-link i {
        color: var(--brand-red);
        transition: transform 0.3s ease;
    }

    .spotlight-card:hover .text-link i {
        transform: translateX(8px);
    }

    /* =========================================
       GROWTH WORKFLOW (DARK)
       ========================================= */
    .scale-section {
        position: relative;
        overflow: hidden;
    }

    .scale-section::after {
        content: '365';
        position: absolute;
        right: -20px;
        bottom: -130px;
        font: 800 clamp(14rem, 36vw, 30rem)/1 'Manrope', sans-serif;
        color: rgba(255, 255, 255, 0.02);
        pointer-events: none;
    }

    .scale-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 76px;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    .scale-copy h2 {
        font: 800 clamp(2.2rem, 4vw, 3.8rem)/1.08 'Manrope', sans-serif;
        letter-spacing: -.05em;
        margin: 18px 0;
    }

    .scale-copy p {
        color: #a4a5b2;
        margin-bottom: 26px;
        max-width: 580px;
        font-size: 1.05rem;
    }

    .scale-points {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin: 28px 0 34px;
    }

    .scale-point {
        display: flex;
        gap: 12px;
        color: #e5e6ee;
        font-size: .92rem;
        font-weight: 600;
        transition: transform 0.3s ease, color .3s ease;
    }

    .scale-point:hover {
        transform: translateX(6px);
        color: #fff;
    }

    .scale-point i {
        color: var(--brand-red);
        margin-top: 4px;
    }

    .scale-visual {
        border: 1px solid var(--border-glass);
        border-radius: 28px;
        padding: 30px;
        background: linear-gradient(160deg, #15161f 0%, #0d0e14 100%);
        box-shadow: 0 35px 80px rgba(0, 0, 0, 0.6);
        position: relative;
    }

    .scale-visual-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        padding-bottom: 22px;
        border-bottom: 1px solid var(--border-glass);
    }

    .scale-visual-top h3 {
        font: 800 1.15rem 'Manrope', sans-serif;
        color: #fff;
    }

    .live-dot {
        width: 10px;
        height: 10px;
        display: inline-block;
        border-radius: 50%;
        background: #4ade80;
        margin-right: 8px;
        vertical-align: middle;
        animation: livePing 2.2s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    .scale-visual-top small {
        color: #8e90a2;
        font-weight: 700;
        text-transform: uppercase;
        font-size: .75rem;
        letter-spacing: 0.1em;
    }

    .strategy-list {
        display: grid;
        gap: 16px;
        padding-top: 24px;
        position: relative;
    }

    .strategy-row {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px 22px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.025);
        transition: transform 0.4s var(--ease-out-expo), background .4s ease, border-color .4s ease, box-shadow .4s ease;
        cursor: default;
    }

    .strategy-row:hover {
        background: rgba(255, 37, 37, 0.08);
        border-color: rgba(255, 37, 37, 0.4);
        transform: translateX(10px);
        box-shadow: 0 10px 30px rgba(255, 37, 37, 0.1);
    }

    .strategy-row>i {
        width: 46px;
        height: 46px;
        display: grid;
        place-items: center;
        border-radius: 14px;
        background: rgba(255, 37, 37, 0.15);
        color: #ff5555;
        font-size: 1.2rem;
        flex-shrink: 0;
        transition: transform 0.4s var(--ease-spring), background 0.4s ease, color 0.4s ease;
    }

    .strategy-row:hover>i {
        transform: scale(1.15) rotate(8deg);
        background: var(--brand-red);
        color: #fff;
    }

    .strategy-row strong {
        display: block;
        font-size: .96rem;
        font-weight: 800;
        color: #fff;
    }

    .strategy-row small {
        display: block;
        color: #8f91a2;
        font-size: .82rem;
        margin-top: 3px;
    }

    /* =========================================
       PORTFOLIO
       ========================================= */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
    }

    .project-card {
        overflow: hidden;
        border-radius: 24px;
        background: #13141a;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: transform 0.45s var(--ease-out-expo), box-shadow 0.45s ease, border-color .45s ease;
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 28px 60px rgba(0, 0, 0, 0.3);
        border-color: rgba(255, 37, 37, 0.35);
    }

    .project-image {
        height: 240px;
        overflow: hidden;
        background: #222;
        position: relative;
    }

    .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.9s var(--ease-out-expo);
    }

    .project-card:hover .project-image img {
        transform: scale(1.08);
    }

    .project-info {
        padding: 26px;
    }

    .project-category {
        display: inline-block;
        color: #ff7070;
        font-size: .74rem;
        letter-spacing: .14em;
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 9px;
    }

    .project-info h3 {
        font: 800 1.24rem 'Manrope', sans-serif;
        margin-bottom: 9px;
    }

    .project-info p {
        color: #a5a7b7;
        font-size: .9rem;
        line-height: 1.5;
    }

    .portfolio-note {
        color: #777;
        text-align: center;
        font-size: .84rem;
        margin-top: 28px;
    }

    /* =========================================
       WHY CHOOSE US
       ========================================= */
    .why-layout {
        display: grid;
        grid-template-columns: .88fr 1.12fr;
        align-items: start;
        gap: 76px;
    }

    .why-intro h2 {
        font: 800 clamp(2.2rem, 4vw, 3.5rem)/1.1 'Manrope', sans-serif;
        letter-spacing: -.05em;
        margin: 18px 0;
    }

    .why-intro p {
        color: #5a5a64;
        margin-bottom: 28px;
        font-size: 1.05rem;
    }

    .why-list {
        display: grid;
        gap: 16px;
    }

    .why-item {
        display: flex;
        gap: 20px;
        padding: 24px;
        background: white;
        border: 1px solid #eaeaea;
        border-radius: 20px;
        transition: transform 0.4s var(--ease-out-expo), box-shadow .4s ease, border-color .4s ease;
    }

    .why-item:hover {
        transform: translateX(10px);
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.06);
        border-color: rgba(255, 37, 37, 0.3);
    }

    .why-item i {
        flex-shrink: 0;
        color: var(--brand-red);
        font-size: 1.4rem;
        margin-top: 4px;
        transition: transform 0.3s ease;
    }

    .why-item:hover i {
        transform: scale(1.2) rotate(6deg);
    }

    .why-item h3 {
        font: 800 1.08rem 'Manrope', sans-serif;
        margin-bottom: 6px;
    }

    .why-item p {
        color: #64646e;
        font-size: .92rem;
        line-height: 1.5;
    }

    /* =========================================
       PROCESS
       ========================================= */
    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
    }

    .process-card {
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        padding: 28px;
        background: rgba(255, 255, 255, 0.03);
        transition: transform 0.4s var(--ease-out-expo), background .4s ease, border-color .4s ease;
    }

    .process-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 37, 37, 0.4);
    }

    .process-number {
        width: 50px;
        height: 50px;
        display: grid;
        place-items: center;
        background: var(--brand-red);
        color: white;
        border-radius: 16px;
        font: 800 1.08rem 'Manrope', sans-serif;
        margin-bottom: 24px;
        transition: transform 0.4s var(--ease-spring), box-shadow 0.4s ease;
    }

    .process-card:hover .process-number {
        transform: rotate(12deg) scale(1.12);
        box-shadow: 0 8px 22px var(--brand-red-glow);
    }

    .process-card h3 {
        font: 800 1.1rem 'Manrope', sans-serif;
        margin-bottom: 10px;
        color: #fff;
    }

    .process-card p {
        color: #9c9db2;
        font-size: .9rem;
        line-height: 1.5;
    }

    /* =========================================
       FAQ
       ========================================= */
    .faq-list {
        max-width: 860px;
        margin: 0 auto;
        display: grid;
        gap: 14px;
    }

    .faq-item {
        border: 1px solid #eaeaea;
        border-radius: 18px;
        background: #fff;
        overflow: hidden;
        transition: box-shadow .35s ease, border-color .35s ease;
    }

    .faq-item:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        border-color: #d6d6d6;
    }

    .faq-item summary {
        cursor: pointer;
        list-style: none;
        padding: 22px 26px;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        transition: color 0.3s;
    }

    .faq-item summary:hover {
        color: var(--brand-red);
    }

    .faq-item summary::-webkit-details-marker {
        display: none;
    }

    .faq-item summary::after {
        content: '+';
        color: var(--brand-red);
        font-size: 1.6rem;
        font-weight: 500;
    }

    .faq-item[open] summary::after {
        content: '−';
    }

    .faq-answer {
        padding: 0 26px 24px;
        color: #62626e;
        font-size: .94rem;
        line-height: 1.65;
    }

    /* =========================================
       FINAL CTA
       ========================================= */
    .final-cta {
        padding: 100px 0;
        background: linear-gradient(135deg, var(--brand-red) 0%, var(--brand-red-dark) 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .final-cta::after {
        content: 'S365';
        position: absolute;
        right: -25px;
        bottom: -95px;
        font: 800 clamp(10rem, 28vw, 24rem)/1 'Manrope', sans-serif;
        color: rgba(0, 0, 0, 0.08);
        pointer-events: none;
    }

    .final-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        position: relative;
        z-index: 1;
    }

    .final-cta h2 {
        font: 800 clamp(2.1rem, 4.2vw, 3.6rem)/1.1 'Manrope', sans-serif;
        letter-spacing: -.05em;
        max-width: 700px;
    }

    .final-cta p {
        color: rgba(255, 255, 255, 0.92);
        margin-top: 14px;
        font-size: 1.05rem;
    }

    .final-cta .btn {
        background: white;
        color: var(--ink);
        flex-shrink: 0;
        padding: 16px 34px;
        border-radius: 14px;
        font-weight: 800;
    }

    .final-cta .btn:hover {
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.35);
        transform: translateY(-4px) scale(1.03);
        color: var(--brand-red);
    }

    /* =========================================
       RESPONSIVE
       ========================================= */
    @media (max-width: 980px) {

        .hero-layout,
        .scale-layout,
        .why-layout {
            grid-template-columns: 1fr;
            gap: 45px;
        }

        .hero-art {
            min-height: 400px;
        }

        .hero-art-main {
            max-width: 560px;
            aspect-ratio: 1.25 / 1;
        }

        .floating-note {
            left: 0;
        }

        .service-grid,
        .portfolio-grid,
        .process-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .why-layout {
            gap: 36px;
        }
    }

    @media (max-width: 620px) {
        .hero {
            padding: 80px 0 60px;
        }

        .hero-copy h1 {
            font-size: clamp(2.4rem, 10vw, 3.2rem);
        }

        .hero-art {
            min-height: 330px;
        }

        .floating-note {
            top: 12px;
            left: 10px;
            padding: 12px 16px;
            max-width: 90%;
        }

        .floating-stamp {
            width: 85px;
            height: 85px;
            right: -5px;
            bottom: 15px;
            font-size: .68rem;
        }

        .service-grid,
        .portfolio-grid,
        .process-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .spotlight-card {
            min-height: auto;
            padding: 28px 24px;
        }

        .scale-points {
            grid-template-columns: 1fr;
        }

        .final-cta-inner {
            flex-direction: column;
            align-items: flex-start;
        }

        .final-cta {
            padding: 68px 0;
        }

        .brand-strip {
            padding: 40px 0;
        }

        .brand-strip-inner {
            gap: 16px;
            padding-right: 16px;
        }

        .brand-logo-item {
            width: 130px;
            height: 100px;
            padding: 12px 16px;
            border-radius: 12px;
        }
    }
</style>
@endsection

@section('content')

{{-- HERO SECTION --}}
<section class="hero">
    <div class="hero-glow"></div>
    <div class="container hero-layout">
        <div class="hero-copy reveal reveal-left">
            <span class="eyebrow">Digital growth. Designed around you.</span>
            <h1>Your next stage of growth starts <span class="stroke">here.</span></h1>
            <p>From marketing and SEO to design, tracking and development, SOURCE 365 brings the digital expertise your business needs under one roof.</p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-red">Talk to an Expert <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                <a href="{{ route('services') }}" class="btn btn-outline">Explore Services</a>
            </div>
            <div class="hero-proof">
                <span><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Solutions built around your goals</span>
                <span><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Clear scope and communication</span>
            </div>
        </div>

        <div class="hero-art reveal reveal-right">
            <div class="floating-note">
                <span class="note-icon"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
                <span><strong>Strategy first</strong><small>Built for your business</small></span>
            </div>
            <div class="hero-art-main">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1100&q=85" alt="Digital business analytics on a screen" fetchpriority="high" decoding="async">
                <div class="hero-art-label">
                    <small>One partner. More possibilities.</small>
                    <h3>Make your digital presence work harder.</h3>
                </div>
            </div>
            <div class="floating-stamp">PLAN<br>SMARTER<br><i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i></div>
        </div>
    </div>
</section>

{{-- TRUST STRIP: RUNNING MARQUEE --}}
<section class="trust-strip" aria-label="Our service approach">
    <div class="marquee-track">
        @for ($i = 0; $i < 2; $i++)
            <div class="trust-strip-inner" @if($i===1) aria-hidden="true" @endif>
            <p>Practical digital support for businesses at every stage</p>
            <div class="trust-items">
                <span><i class="fa-solid fa-bullseye" aria-hidden="true"></i> Strategy-led</span>
                <span><i class="fa-solid fa-sliders" aria-hidden="true"></i> Tailored solutions</span>
                <span><i class="fa-solid fa-comments" aria-hidden="true"></i> Clear communication</span>
                <span><i class="fa-solid fa-bolt" aria-hidden="true"></i> High-Speed Execution</span>
            </div>
    </div>
    @endfor
    </div>
</section>

{{-- SERVICES (SPOTLIGHT EFFECT) --}}
<section class="section section-paper" id="services">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">What we do</span>
            <h2>Everything you need to <span class="accent">move forward.</span></h2>
            <p>Choose a focused service or talk to us about a joined-up plan for your business.</p>
        </div>

        <div class="service-grid">
            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-bullhorn" aria-hidden="true"></i></span>
                <h3>Marketing Services</h3>
                <p>Campaign planning, Meta Ads, boosting and other ad platforms when they fit your goals.</p>
                <a href="{{ route('services') }}" class="text-link">Explore marketing <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>

            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i></span>
                <h3>SEO &amp; Tracking</h3>
                <p>SEO improvements, GA4, GTM, Pixel, conversion events and server-side tracking setup.</p>
                <a href="{{ route('services') }}" class="text-link">Explore SEO &amp; tracking <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>

            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-pen-ruler" aria-hidden="true"></i></span>
                <h3>Graphics &amp; UI/UX</h3>
                <p>Brand assets, ad creatives, social content and thoughtful website or app interfaces.</p>
                <a href="{{ route('services') }}" class="text-link">Explore design <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>

            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i></span>
                <h3>Website &amp; App</h3>
                <p>Business websites, landing pages, custom development, app solutions and maintenance.</p>
                <a href="{{ route('services') }}" class="text-link">Explore development <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>

            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i></span>
                <h3>Email Marketing</h3>
                <p>Campaigns, customer segments and useful automations that support retention.</p>
                <a href="{{ route('services') }}" class="text-link">Explore email marketing <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>

            <article class="spotlight-card reveal reveal-scale">
                <span class="service-icon"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i></span>
                <h3>Courses &amp; Support</h3>
                <p>Practical digital skills training and payment-related support subject to applicable rules.</p>
                <a href="{{ route('services') }}" class="text-link">Explore courses &amp; support <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </article>
        </div>
    </div>
</section>

{{-- BRANDS WE HAVE WORKED WITH (ekta-i marquee, duplicate muche deya hoyeche) --}}
<section class="brand-strip" aria-label="Brands we have worked with">
    <div class="container">
        <div class="text-center mb-10 reveal">
            <span class="eyebrow">Our Clients</span>
            <h2 class="font-heading font-extrabold text-3xl mt-3" style="color: var(--ink);">Brands we have <span style="color: var(--brand-red);">worked with</span></h2>
        </div>
    </div>

    <div class="marquee-track-reverse">
        {{-- Duita set hubohu ek, tahole loop e logo jump korbe na --}}
        @for ($set = 0; $set < 2; $set++)
            <div class="brand-strip-inner" @if($set===1) aria-hidden="true" @endif>
            @for ($i = 1; $i <= 23; $i++)
                <img src="{{ asset('assets/image/' . $i . '.png') }}" alt="Client brand {{ $i }}" class="brand-logo-item" loading="lazy" decoding="async">
                @endfor
    </div>
    @endfor
    </div>
</section>

{{-- BUSINESS SCALE UP --}}
<section class="section section-dark scale-section">
    <div class="container scale-layout">
        <div class="scale-copy reveal reveal-left">
            <span class="eyebrow">For ambitious businesses</span>
            <h2>One connected team for your <span class="accent">business growth.</span></h2>
            <p>Get a joined-up approach to research, planning, campaigns and performance review. We recommend channels and activities based on your business, not a one-size-fits-all checklist.</p>

            <div class="scale-points">
                <div class="scale-point"><i class="fa-solid fa-check" aria-hidden="true"></i><span>Business and competitor research</span></div>
                <div class="scale-point"><i class="fa-solid fa-check" aria-hidden="true"></i><span>Marketing strategy and planning</span></div>
                <div class="scale-point"><i class="fa-solid fa-check" aria-hidden="true"></i><span>Campaign execution and optimization</span></div>
                <div class="scale-point"><i class="fa-solid fa-check" aria-hidden="true"></i><span>Regular performance updates</span></div>
            </div>

            <a href="{{ route('business-scale-up') }}" class="btn btn-red">Explore Business Scale Up <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        {{-- Nested reveal soriye deya hoyeche: sudhu parent e reveal ache --}}
        <div class="scale-visual reveal reveal-right" aria-label="Our marketing workflow">
            <div class="scale-visual-top">
                <h3>Our growth workflow</h3>
                <small><span class="live-dot"></span> Goal-focused</small>
            </div>

            <div class="strategy-list">
                <div class="strategy-row">
                    <i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i>
                    <span><strong>01. Research &amp; Discovery</strong><small>Understand the business, audience and market.</small></span>
                </div>
                <div class="strategy-row">
                    <i class="fa-solid fa-chess" aria-hidden="true"></i>
                    <span><strong>02. Strategy &amp; Planning</strong><small>Prioritize channels, budgets and deliverables.</small></span>
                </div>
                <div class="strategy-row">
                    <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                    <span><strong>03. Execute &amp; Optimize</strong><small>Launch work and improve based on evidence.</small></span>
                </div>
                <div class="strategy-row">
                    <i class="fa-solid fa-chart-column" aria-hidden="true"></i>
                    <span><strong>04. Review &amp; Report</strong><small>Share progress, insights and next steps.</small></span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PORTFOLIO --}}
<section class="section section-light">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Selected work</span>
            <h2>Good work should <span class="accent">speak for itself.</span></h2>
            <p>Show visitors the real work, the thinking behind it and the value delivered.</p>
        </div>

        <div class="portfolio-grid">
            <article class="project-card reveal reveal-scale">
                <div class="project-image"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=80" alt="Analytics dashboard concept" loading="lazy" decoding="async"></div>
                <div class="project-info"><span class="project-category">Marketing &amp; Analytics</span>
                    <h3>Campaign Performance Setup</h3>
                    <p>Explain the campaign goal, tracking setup and verified outcome for your actual project.</p>
                </div>
            </article>

            <article class="project-card reveal reveal-scale">
                <div class="project-image"><img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=900&q=80" alt="Website design displayed on a desktop screen" loading="lazy" decoding="async"></div>
                <div class="project-info"><span class="project-category">Website Development</span>
                    <h3>Business Website Experience</h3>
                    <p>Highlight the pages, features and user problems addressed in a completed website project.</p>
                </div>
            </article>

            <article class="project-card reveal reveal-scale">
                <div class="project-image"><img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=900&q=80" alt="Creative design and branding materials" loading="lazy" decoding="async"></div>
                <div class="project-info"><span class="project-category">Design &amp; Branding</span>
                    <h3>Brand Visual System</h3>
                    <p>Show the creative direction and final deliverables from a real design engagement.</p>
                </div>
            </article>
        </div>

        <p class="portfolio-note reveal">Before launch, replace these example cards with verified SOURCE 365 projects. Do not publish unverified performance claims.</p>

        <div style="text-align:center; margin-top:36px" class="reveal">
            <a href="{{ route('portfolio') }}" class="btn btn-outline">View All Projects <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="section section-paper">
    <div class="container why-layout">
        <div class="why-intro reveal reveal-left">
            <span class="eyebrow">Why SOURCE 365</span>
            <h2>Clear thinking. Useful work. <span class="accent">No unnecessary complexity.</span></h2>
            <p>We start by understanding what you need, then recommend a realistic scope and a practical next step.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Discuss Your Project <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="why-list">
            <article class="why-item reveal reveal-right"><i class="fa-solid fa-bullseye" aria-hidden="true"></i>
                <div>
                    <h3>Solutions tailored to your goals</h3>
                    <p>Service recommendations are based on your needs, audience and available resources.</p>
                </div>
            </article>

            <article class="why-item reveal reveal-right"><i class="fa-solid fa-list-check" aria-hidden="true"></i>
                <div>
                    <h3>Clear scope and deliverables</h3>
                    <p>Understand what is included, what it costs and what information we need from you.</p>
                </div>
            </article>

            <article class="why-item reveal reveal-right"><i class="fa-solid fa-comments" aria-hidden="true"></i>
                <div>
                    <h3>Communication you can follow</h3>
                    <p>Stay informed about progress, decisions, results and recommended next steps.</p>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="section section-dark-soft">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Simple by design</span>
            <h2>From first conversation to <span class="accent">real progress.</span></h2>
            <p>A straightforward process keeps expectations clear and work moving.</p>
        </div>

        <div class="process-grid">
            <article class="process-card reveal">
                <div class="process-number">01</div>
                <h3>Discover</h3>
                <p>We learn about your business, goals, audience and current challenges.</p>
            </article>

            <article class="process-card reveal">
                <div class="process-number">02</div>
                <h3>Plan</h3>
                <p>We recommend a suitable scope, timeline, deliverables and pricing.</p>
            </article>

            <article class="process-card reveal">
                <div class="process-number">03</div>
                <h3>Deliver</h3>
                <p>Work begins after approval, with agreed milestones and communication.</p>
            </article>

            <article class="process-card reveal">
                <div class="process-number">04</div>
                <h3>Review</h3>
                <p>We review the work or performance and agree on practical next steps.</p>
            </article>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section section-light">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Frequently asked questions</span>
            <h2>Before we <span class="accent">get started.</span></h2>
            <p>Some quick answers to help you choose the right next step.</p>
        </div>

        <div class="faq-list reveal">
            <details class="faq-item">
                <summary>How do I choose the right service?</summary>
                <div class="faq-answer">Tell us about your business, goals and current challenges. We can help identify the most relevant service or combination of services.</div>
            </details>

            <details class="faq-item">
                <summary>Are your services available as fixed packages?</summary>
                <div class="faq-answer">Some services have defined packages. Larger, technical or custom projects may need a tailored scope and quotation.</div>
            </details>

            <details class="faq-item">
                <summary>Can SOURCE 365 manage more than one digital service?</summary>
                <div class="faq-answer">Yes. For businesses that need coordinated support, our Business Scale Up service brings suitable marketing activities together under a shared plan.</div>
            </details>

            <details class="faq-item">
                <summary>How can I request a quotation?</summary>
                <div class="faq-answer">Use the Talk to an Expert button or Contact page and share your requirements. The team can follow up to clarify scope, timing and budget.</div>
            </details>
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="final-cta reveal">
    <div class="container final-cta-inner">
        <div>
            <h2>Have a goal in mind? Let's make a plan.</h2>
            <p>Tell us what you want to improve. We'll help you identify a practical next step.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn">Talk to an Expert <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Spotlight glow: requestAnimationFrame diye throttle kora
        document.querySelectorAll('.spotlight-card').forEach(card => {
            let ticking = false;
            card.addEventListener('mousemove', (e) => {
                if (ticking) return;
                ticking = true;
                requestAnimationFrame(() => {
                    const rect = card.getBoundingClientRect();
                    card.style.setProperty('--mouse-x', (e.clientX - rect.left) + 'px');
                    card.style.setProperty('--mouse-y', (e.clientY - rect.top) + 'px');
                    ticking = false;
                });
            }, {
                passive: true
            });
        });
    });
</script>
@endsection