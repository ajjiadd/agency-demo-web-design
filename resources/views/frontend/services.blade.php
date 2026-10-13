@extends('frontend.layouts.master')

@section('title', 'Our Services | SOURCE 365 Digital Growth')
@section('meta_description', 'Explore SOURCE 365 services including Marketing, SEO, Website & App Development, UI/UX Design, and Email Marketing.')

@section('styles')
<style>
    /* Services Page Specific Styles */
    .services-hero {
        padding: 120px 0 80px;
        background: var(--ink);
        color: var(--white);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .services-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: 50%;
        transform: translateX(-50%);
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, rgba(255, 0, 0, 0.15) 0%, rgba(255, 0, 0, 0) 70%);
        z-index: 0;
    }

    .services-hero .container {
        position: relative;
        z-index: 1;
    }

    .services-hero h1 {
        font-family: 'Manrope', sans-serif;
        font-size: clamp(2.5rem, 5vw, 4.2rem);
        font-weight: 800;
        letter-spacing: -.05em;
        margin-bottom: 20px;
    }

    .services-hero p {
        color: var(--muted-dark);
        font-size: 1.1rem;
        max-width: 650px;
        margin: 0 auto 30px;
    }

    /* Category Section Styles */
    .category-section {
        padding: 80px 0;
        border-bottom: 1px solid var(--line);
    }

    .category-section:nth-child(even) {
        background: var(--paper);
    }

    .category-header {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 40px;
    }

    .category-header h2 {
        font-family: 'Manrope', sans-serif;
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--ink);
        margin-top: 10px;
    }

    /* Sub-service Grid */
    .sub-service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .sub-service-card {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 30px 24px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .category-section:nth-child(even) .sub-service-card {
        background: var(--white);
        border-color: #e5e5e5;
    }

    .sub-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
        border-color: rgba(255, 0, 0, 0.3);
    }

    .sub-icon {
        width: 48px;
        height: 48px;
        background: #fff0f0;
        color: var(--brand-red);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .sub-service-card h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--ink);
    }

    .sub-service-card p {
        color: var(--muted);
        font-size: 0.9rem;
        margin-bottom: 24px;
        flex-grow: 1;
    }

    .btn-read-more {
        align-self: flex-start;
        font-size: 0.85rem;
        font-weight: 800;
        color: var(--ink);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: color 0.2s;
    }

    .btn-read-more i {
        color: var(--brand-red);
        transition: transform 0.2s;
    }

    .btn-read-more:hover {
        color: var(--brand-red);
    }

    .btn-read-more:hover i {
        transform: translateX(4px);
    }

    @media (max-width: 768px) {
        .services-hero {
            padding: 80px 0 60px;
        }

        .category-section {
            padding: 60px 0;
        }

        .category-header h2 {
            font-size: 1.8rem;
        }
    }
</style>
@endsection

@section('content')

{{-- SERVICES HERO --}}
<section class="services-hero">
    <div class="container">
        <span class="eyebrow" style="color: #ff7777;">What We Do</span>
        <h1>Comprehensive <span class="accent">Digital Solutions</span></h1>
        <p>From strategic marketing and SEO to custom development and design. Discover how our specialized services can accelerate your business growth.</p>
        <a href="#explore-services" class="btn btn-red mt-4">Explore Services <i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
    </div>
</section>

<div id="explore-services">
    {{-- A. MARKETING SERVICES --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category A</span>
                <h2>Marketing Services</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-rocket"></i></div>
                    <h3>Business Scale Up</h3>
                    <p>Complete marketing solution with a dedicated expert team, strategy, planning, and regular performance reporting.</p>
                    <a href="{{ route('business-scale-up') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-brands fa-facebook"></i></div>
                    <h3>Facebook Boosting</h3>
                    <p>Reach, engagement, message, and traffic boosting with fixed dollar conversion rates and no hidden charges.</p>
                    <a href="{{ route('service.facebook-boosting') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>Meta Ads Management</h3>
                    <p>Advanced Facebook and Instagram campaign setup, monitoring, optimization, and scaling for maximum ROI.</p>
                    <a href="{{ route('service.meta-ads') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-brands fa-google"></i></div>
                    <h3>Google & TikTok Ads</h3>
                    <p>Platform-specific ad strategies based on business research to capture high-intent search and video audiences.</p>
                    <a href="{{ route('service.google-tiktok-ads') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- B. SEO & TRACKING --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category B</span>
                <h2>SEO & Tracking</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <h3>SEO Packages</h3>
                    <p>Basic to Pro packages covering On-Page, Technical SEO, Keyword Research, and continuous monthly monitoring.</p>
                    <a href="{{ route('service.seo-packages') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-server"></i></div>
                    <h3>Server Side Tracking</h3>
                    <p>Accurate data collection bypassing browser restrictions for WordPress, Shopify, and Custom websites.</p>
                    <a href="{{ route('service.server-side-tracking') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <h3>GA4 & GTM Setup</h3>
                    <p>Professional Google Tag Manager and GA4 configuration for deep insights into user behavior.</p>
                    <a href="{{ route('service.ga4-gtm-setup') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-filter"></i></div>
                    <h3>Conversion Tracking</h3>
                    <p>Meta Pixel, Conversion API (CAPI), event deduplication, and precise lead/purchase tracking.</p>
                    <a href="{{ route('service.conversion-tracking') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- C. DESIGN SERVICES --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category C</span>
                <h2>Design Services</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-pen-nib"></i></div>
                    <h3>Graphics Design</h3>
                    <p>Website banners, product images, promotional creatives, and social media post designs.</p>
                    <a href="{{ route('service.graphics-design') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>User-centric wireframes, interactive prototypes, and complete design systems for web and mobile apps.</p>
                    <a href="{{ route('service.ui-ux-design') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-swatchbook"></i></div>
                    <h3>Branding & Identity</h3>
                    <p>Logo design concepts, brand color selection, typography guidelines, and complete visual direction.</p>
                    <a href="{{ route('service.branding-identity') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- D. WEBSITE & APP --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category D</span>
                <h2>Website & App</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3>Website Development</h3>
                    <p>Corporate, E-commerce, and Custom web applications using WordPress or modern Laravel frameworks.</p>
                    <a href="{{ route('service.website-development') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                    <h3>App Development</h3>
                    <p>Native Android and iOS mobile applications for e-commerce, service booking, and business management.</p>
                    <a href="{{ route('service.app-development') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-pager"></i></div>
                    <h3>Landing Pages</h3>
                    <p>High-converting, responsive landing pages designed specifically for sales and lead generation campaigns.</p>
                    <a href="{{ route('service.landing-pages') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h3>Website Maintenance</h3>
                    <p>Content updates, plugin management, security checks, speed optimization, and bug fixing support.</p>
                    <a href="{{ route('service.website-maintenance') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- E. EMAIL MARKETING --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category E</span>
                <h2>Email Marketing</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <h3>Email Campaigns</h3>
                    <p>Platform setup, custom template design, audience segmentation, and promotional newsletter management.</p>
                    <a href="{{ route('service.email-campaigns') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-robot"></i></div>
                    <h3>Email Automation</h3>
                    <p>Welcome sequences, abandoned cart recovery, and post-purchase follow-up flows.</p>
                    <a href="{{ route('service.email-automation') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-users-viewfinder"></i></div>
                    <h3>Customer Retention</h3>
                    <p>Win-back campaigns, special offer distribution, and long-term customer relationship strategies.</p>
                    <a href="{{ route('service.customer-retention') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- F. COURSES & PAYMENT SUPPORT --}}
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <span class="eyebrow">Category F</span>
                <h2>Courses & Support</h2>
            </div>
            <div class="sub-service-grid">
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>IT Skill Courses</h3>
                    <p>AI-integrated courses in Computer Fundamentals, Digital Marketing, Graphics Design, and Web Development.</p>
                    <a href="{{ route('service.it-skill-courses') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-credit-card"></i></div>
                    <h3>Dollar Buy & Sell</h3>
                    <p>Reliable dollar exchange services for digital needs, adhering strictly to platform policies.</p>
                    <a href="{{ route('service.dollar-buy-sell') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="sub-service-card">
                    <div class="sub-icon"><i class="fa-solid fa-headset"></i></div>
                    <h3>Payment Support</h3>
                    <p>Guidance and troubleshooting for ad account payments, international services, and digital platforms.</p>
                    <a href="{{ route('service.payment-support') }}" class="btn-read-more">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- FINAL CALL TO ACTION --}}
<section class="py-24 bg-[var(--brand-red)] text-white relative overflow-hidden mt-10">
    <!-- Big Background Text -->
    <div class="absolute -right-8 -bottom-16 font-['Manrope'] font-extrabold text-[10rem] lg:text-[16rem] leading-none text-black opacity-10 select-none pointer-events-none">
        SERVICES
    </div>

    <div class="container mx-auto px-4 max-w-[1200px] relative z-10 text-center">
        <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold mb-6 tracking-tight">Not sure which service fits your needs?</h2>
        <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
            Let’s discuss your business goals and find the perfect digital solution for you.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-white text-[var(--ink)] font-extrabold text-[15px] px-8 py-4 rounded-full hover:shadow-[0_10px_25px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all duration-300">
            Talk to an Expert <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

@endsection