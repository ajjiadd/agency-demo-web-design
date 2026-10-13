@extends('frontend.layouts.master')

@section('title', 'Business Scale Up | SOURCE 365 Complete Marketing Solution')
@section('meta_description', 'Get a complete marketing solution for your business with SOURCE 365. Dedicated team, strategy, Meta/Google ads, and daily reporting.')

@section('styles')
<style>
    /* Scale Up Hero */
    .scale-hero {
        position: relative;
        padding: 140px 0 100px;
        background: var(--ink);
        color: var(--white);
        overflow: hidden;
    }
    .scale-hero::before {
        content: '';
        position: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        background: radial-gradient(circle at top right, rgba(255,0,0,0.15) 0%, transparent 60%);
        pointer-events: none;
    }
    .scale-hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .scale-hero h1 {
        font-family: 'Manrope', sans-serif;
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin: 20px 0;
        letter-spacing: -.03em;
    }
    .scale-hero p {
        font-size: 1.15rem;
        color: #c7c7c7;
        margin-bottom: 35px;
    }
    
    /* Challenges Section */
    .challenges-box {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 20px;
        padding: 40px;
        height: 100%;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .challenges-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }
    .challenge-icon {
        width: 50px;
        height: 50px;
        background: #fff0f0;
        color: var(--brand-red);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.3rem;
        margin-bottom: 20px;
    }

    /* Core Pillars (Zig-Zag Layout) */
    .pillar-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 100px;
    }
    .pillar-row:nth-child(even) .pillar-content {
        order: 2;
    }
    .pillar-row:nth-child(even) .pillar-visual {
        order: 1;
    }
    .pillar-visual {
        background: var(--paper);
        border-radius: 24px;
        padding: 50px;
        text-align: center;
        position: relative;
        border: 1px solid var(--line);
    }
    .pillar-visual i {
        font-size: 5rem;
        color: var(--brand-red);
        opacity: 0.9;
    }
    .pillar-content h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: var(--ink);
    }
    .pillar-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 15px;
        color: var(--muted);
    }
    .pillar-list li i {
        color: var(--brand-red);
        margin-top: 5px;
    }

    /* Workflow Section */
    .workflow-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        position: relative;
    }
    .workflow-card {
        background: var(--ink);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 20px;
        padding: 40px 30px;
        color: var(--white);
    }
    .step-num {
        font-family: 'Manrope', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        color: var(--brand-red);
        opacity: 0.5;
        margin-bottom: 10px;
        line-height: 1;
    }

    /* FAQ reused from master */
    .faq-list { max-width: 850px; margin: 0 auto; display: grid; gap: 12px; padding: 0 15px; }
    .faq-item { border: 1px solid #e5e5e5; border-radius: 15px; background: #fff; overflow: hidden; }
    .faq-item summary { cursor: pointer; list-style: none; padding: 20px 23px; font-weight: 800; display: flex; align-items: center; justify-content: space-between; gap: 20px; }
    .faq-item summary::-webkit-details-marker { display: none; }
    .faq-item summary::after { content: '+'; color: var(--brand-red); font-size: 1.4rem; }
    .faq-item[open] summary::after { content: '−'; }
    .faq-answer { padding: 0 23px 21px; color: #686868; font-size: .92rem; }

    /* Responsive */
    @media (max-width: 991px) {
        .pillar-row, .pillar-row:nth-child(even) .pillar-content, .pillar-row:nth-child(even) .pillar-visual {
            grid-template-columns: 1fr;
            order: initial;
            gap: 40px;
            margin-bottom: 60px;
        }
        .pillar-visual { padding: 40px; }
    }
    @media (max-width: 768px) {
        .scale-hero { padding: 100px 0 60px; }
    }
</style>
@endsection

@section('content')

    {{-- 1. Hero Section --}}
    <section class="scale-hero">
        <div class="container scale-hero-content">
            <span class="eyebrow" style="color: #ff7777;">Business Scale Up Service</span>
            <h1>Complete Marketing Solution for <span class="accent">Your Business</span></h1>
            <p>Stop hiring multiple freelancers. Get a dedicated expert marketing team, tailored strategies, and transparent reporting to scale your business efficiently.</p>
            <a href="#consultation" class="btn btn-red mt-4">Book a Consultation <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- {{-- 2. Marketing Challenges --}}
    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">The Problem</span>
                <h2>Common Marketing <span class="accent">Challenges</span></h2>
                <p>Many businesses struggle to grow because they lack a unified marketing approach. Sound familiar?</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="challenges-box">
                    <div class="challenge-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
                    <h3 class="font-heading font-bold text-xl mb-3">Wasted Ad Budget</h3>
                    <p class="text-gray-600 text-sm">Running ads without proper tracking, target audience research, or a sales funnel wastes your hard-earned money.</p>
                </div>
                <div class="challenges-box">
                    <div class="challenge-icon"><i class="fa-solid fa-compass"></i></div>
                    <h3 class="font-heading font-bold text-xl mb-3">No Clear Strategy</h3>
                    <p class="text-gray-600 text-sm">Posting randomly on social media without a content calendar or competitor analysis leads to inconsistent results.</p>
                </div>
                <div class="challenges-box">
                    <div class="challenge-icon"><i class="fa-solid fa-users-slash"></i></div>
                    <h3 class="font-heading font-bold text-xl mb-3">Fragmented Team</h3>
                    <p class="text-gray-600 text-sm">Managing separate freelancers for design, ads, and SEO causes miscommunication and delays in execution.</p>
                </div>
            </div>
        </div>
    </section> -->


{{-- Business Scale-Up Service Flowchart --}}
<section class="bg-white py-16 sm:py-20 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-1 text-xl font-black tracking-widest text-gray-900 mb-4">
                SOURCE<span class="text-red-600">365</span>
            </div>

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight text-gray-950">
                BUSINESS
                <span class="text-red-600">SCALE-UP</span>
                <span class="block">SERVICE</span>
            </h2>

            <p class="mt-4 text-gray-600 text-sm sm:text-base">
                Smart Strategy. Stronger Presence. Sustainable Growth.
            </p>
        </div>

        {{-- Main Flowchart Node --}}
        <div class="max-w-3xl mx-auto rounded-2xl bg-gradient-to-r from-gray-950 to-gray-800 p-6 sm:p-8 border-b-4 border-red-600 shadow-xl">
            <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                <div class="w-16 h-16 shrink-0 rounded-2xl bg-red-600 text-white flex items-center justify-center text-4xl font-black">
                    ↗
                </div>

                <div>
                    <h3 class="text-xl sm:text-2xl font-black text-white">
                        Business Scale-Up Strategy
                    </h3>
                    <p class="text-sm text-gray-300 mt-2">
                        Complete Marketing Management &amp; Sustainable Growth
                    </p>
                </div>
            </div>
        </div>

        {{-- Connector --}}
        <div class="flex justify-center h-12">
            <div class="w-0.5 bg-red-500 relative">
                <span class="absolute bottom-0 -left-1.5 w-3 h-3 border-r-2 border-b-2 border-red-500 rotate-45"></span>
            </div>
        </div>

        {{-- Strategic Planning --}}
        <div class="rounded-2xl border border-gray-200 bg-gray-50/70 p-4 sm:p-7 shadow-sm">

            <div class="flex items-center justify-center gap-3 mb-7">
                <span class="h-px flex-1 bg-red-200"></span>
                <h3 class="text-xs sm:text-sm font-black tracking-widest text-red-600 text-center">
                    01. STRATEGIC PLANNING
                </h3>
                <span class="h-px flex-1 bg-red-200"></span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                {{-- Service 1 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Web &amp; Page Health Analysis</h4>
                        <p class="mt-1 text-sm text-gray-500">Review your website and page performance.</p>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Platform Allocation</h4>
                        <p class="mt-1 text-sm text-gray-500">Set up and optimize your key platforms.</p>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Tailored Strategy + Content Calendar</h4>
                        <p class="mt-1 text-sm text-gray-500">A clear strategy and monthly content plan.</p>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Budget Allocation</h4>
                        <p class="mt-1 text-sm text-gray-500">Plan campaign budgets around your goals.</p>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Competitor Analysis &amp; Strategy Making</h4>
                        <p class="mt-1 text-sm text-gray-500">Analyze competitors and shape your strategy.</p>
                    </div>
                </div>

                {{-- Service 6 --}}
                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:p-5 transition duration-300 hover:border-red-400 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Expert Marketing Manager</h4>
                        <p class="mt-1 text-sm text-gray-500">Dedicated expertise for your marketing.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Connector --}}
        <div class="flex justify-center h-12">
            <div class="w-0.5 bg-red-500 relative">
                <span class="absolute bottom-0 -left-1.5 w-3 h-3 border-r-2 border-b-2 border-red-500 rotate-45"></span>
            </div>
        </div>

        {{-- Media Management Parent --}}
        <div class="rounded-2xl border-2 border-red-500 bg-gradient-to-b from-red-50/70 to-white p-4 sm:p-7 shadow-xl">

            {{-- Parent Node --}}
            <div class="max-w-xl mx-auto flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left py-3 sm:py-5">
                <div class="w-16 h-16 shrink-0 rounded-2xl bg-red-600 text-white flex items-center justify-center text-3xl shadow-lg">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>

                <div>
                    <span class="text-xs font-black tracking-widest text-red-600">
                        CORE SERVICE
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black text-gray-950 mt-1">
                        Media Management
                    </h3>
                    <p class="text-sm text-gray-600 mt-1">
                        Manage your brand's digital media presence.
                    </p>
                </div>
            </div>

            {{-- Parent to Child Connector --}}
            <div class="flex justify-center h-10">
                <div class="w-0.5 bg-red-400"></div>
            </div>

            <div class="flex items-center gap-3 mb-5">
                <span class="h-px flex-1 bg-red-200"></span>
                <h4 class="text-xs sm:text-sm font-black tracking-wider text-red-600 text-center">
                    MEDIA MANAGEMENT SERVICES
                </h4>
                <span class="h-px flex-1 bg-red-200"></span>
            </div>

            {{-- Child Services --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-circle-play"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Ads Run</h4>
                        <p class="text-sm text-gray-500 mt-1">Launch targeted advertising campaigns.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Ads Monitoring</h4>
                        <p class="text-sm text-gray-500 mt-1">Track campaign performance continuously.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Ads Optimize</h4>
                        <p class="text-sm text-gray-500 mt-1">Refine campaigns for better performance.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Copywriting</h4>
                        <p class="text-sm text-gray-500 mt-1">Clear, persuasive copy for your brand.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Daily Reporting</h4>
                        <p class="text-sm text-gray-500 mt-1">Daily campaign updates.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Weekly &amp; Monthly Reporting</h4>
                        <p class="text-sm text-gray-500 mt-1">Regular performance insights.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Ads Kill</h4>
                        <p class="text-sm text-gray-500 mt-1">Pause underperforming ads.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

                <div class="group flex items-center gap-4 rounded-xl border border-red-100 bg-white p-4 transition duration-300 hover:border-red-500 hover:shadow-lg">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xl group-hover:bg-red-600 group-hover:text-white transition">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900">Ads Scale</h4>
                        <p class="text-sm text-gray-500 mt-1">Scale successful campaigns.</p>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square text-red-500 text-sm"></i>
                </div>

            </div>
        </div>

        {{-- Connector --}}
        <div class="flex justify-center h-12">
            <div class="w-0.5 bg-red-500 relative">
                <span class="absolute bottom-0 -left-1.5 w-3 h-3 border-r-2 border-b-2 border-red-500 rotate-45"></span>
            </div>
        </div>

        {{-- Ongoing Management --}}
        <div class="rounded-2xl border border-gray-200 bg-gray-50/70 p-4 sm:p-7">

            <div class="flex items-center justify-center gap-3 mb-7">
                <span class="h-px flex-1 bg-red-200"></span>
                <h3 class="text-xs sm:text-sm font-black tracking-widest text-red-600 text-center">
                    02. ONGOING MANAGEMENT
                </h3>
                <span class="h-px flex-1 bg-red-200"></span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-5 hover:border-red-400 hover:shadow-md transition">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Monthly Meeting</h4>
                        <p class="text-sm text-gray-500 mt-1">Review performance and plan next steps.</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-5 hover:border-red-400 hover:shadow-md transition">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Performance Review</h4>
                        <p class="text-sm text-gray-500 mt-1">Evaluate results and identify growth opportunities.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Final CTA --}}
        <div class="mt-10 rounded-2xl bg-gray-950 px-5 py-9 sm:p-10 text-center relative overflow-hidden">
            <div class="absolute -top-16 -right-16 w-48 h-48 rounded-full bg-red-600/20 blur-3xl"></div>
            <div class="absolute -bottom-16 -left-16 w-48 h-48 rounded-full bg-red-600/20 blur-3xl"></div>

            <div class="relative">
                <h3 class="text-2xl sm:text-3xl font-black text-white">
                    Let's Scale Your Business Together!
                </h3>

                <p class="text-gray-300 mt-3 text-sm sm:text-base">
                    Smart Strategy. Stronger Presence. Sustainable Growth.
                </p>

                <div class="mt-6 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-4 sm:gap-8">
                    <a href="https://www.source365.org"
                       class="inline-flex items-center gap-2 text-white hover:text-red-400 transition">
                        <i class="fa-solid fa-globe text-red-500"></i>
                        www.source365.org
                    </a>

                    <a href="tel:01408185323"
                       class="inline-flex items-center gap-2 text-white hover:text-red-400 transition">
                        <i class="fa-solid fa-phone text-red-500"></i>
                        01408 185323
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

    {{-- 3, 4, 5, 6. How SOURCE 365 Helps (Core Pillars) --}}
    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">The Solution</span>
                <h2>How SOURCE 365 <span class="accent">Helps You Grow</span></h2>
                <p>We act as your in-house marketing department. Everything is planned, executed, and monitored by our experts.</p>
            </div>

            {{-- Pillar 1: Research --}}
            <div class="pillar-row">
                <div class="pillar-content">
                    <h3>1. Product & Business Research</h3>
                    <p class="mb-4 text-gray-600">Before spending a single dollar on ads, we dive deep into your business ecosystem to understand your unique value proposition.</p>
                    <ul class="pillar-list">
                        <li><i class="fa-solid fa-check"></i> Web & Page Health Analysis</li>
                        <li><i class="fa-solid fa-check"></i> Competitor Analysis & Market Research</li>
                        <li><i class="fa-solid fa-check"></i> Identifying Target Audience Persona</li>
                        <li><i class="fa-solid fa-check"></i> Finding the perfect Market-Product Fit</li>
                    </ul>
                </div>
                <div class="pillar-visual">
                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                </div>
            </div>

            {{-- Pillar 2: Strategy --}}
            <div class="pillar-row">
                <div class="pillar-content">
                    <h3>2. Marketing Strategy & Planning</h3>
                    <p class="mb-4 text-gray-600">We create a concrete roadmap for your brand. No guesswork, just data-driven strategies designed to scale.</p>
                    <ul class="pillar-list">
                        <li><i class="fa-solid fa-check"></i> Complete Marketing Strategy Development</li>
                        <li><i class="fa-solid fa-check"></i> Monthly Content Strategy & Calendar</li>
                        <li><i class="fa-solid fa-check"></i> Marketing Budget Planning & Allocation</li>
                        <li><i class="fa-solid fa-check"></i> Copywriting & Creative Direction</li>
                    </ul>
                </div>
                <div class="pillar-visual">
                    <i class="fa-solid fa-chess-knight"></i>
                </div>
            </div>

            {{-- Pillar 3: Ads & Optimization --}}
            <div class="pillar-row">
                <div class="pillar-content">
                    <h3>3. Campaign Setup & Ads Management</h3>
                    <p class="mb-4 text-gray-600">We don't just run ads everywhere. We select the platforms that actually make sense for your specific business.</p>
                    <ul class="pillar-list">
                        <li><i class="fa-solid fa-check"></i> <strong>Platform Allocation:</strong> Meta Ads, Google Ads, or TikTok Ads based on research.</li>
                        <li><i class="fa-solid fa-check"></i> Professional Campaign Setup & Media Management</li>
                        <li><i class="fa-solid fa-check"></i> Continuous Ads Monitoring & Optimization</li>
                        <li><i class="fa-solid fa-check"></i> Underperforming Ads Management & Scaling</li>
                    </ul>
                    <div class="mt-4 p-4 bg-red-50 border-l-4 border-red-500 text-sm text-gray-700 rounded">
                        <strong>Note:</strong> We determine the right platform (Facebook, Google, TikTok, etc.) after analyzing your business. Using every platform is not mandatory for everyone.
                    </div>
                </div>
                <div class="pillar-visual">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. Workflow & Client Communication --}}
    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Communication</span>
                <h2>Dedicated Support & <span class="accent">Reporting</span></h2>
                <p>Stay informed at every step. You will never have to wonder what your marketing team is doing.</p>
            </div>
            
            <div class="workflow-grid">
                <div class="workflow-card">
                    <div class="step-num">01</div>
                    <h3 class="font-heading font-bold text-xl mb-2">Dedicated Manager</h3>
                    <p class="text-gray-400 text-sm">You will be assigned an Expert Marketing Manager who monitors your campaigns all the time and acts as your single point of contact.</p>
                </div>
                <div class="workflow-card">
                    <div class="step-num">02</div>
                    <h3 class="font-heading font-bold text-xl mb-2">Daily Reporting</h3>
                    <p class="text-gray-400 text-sm">Receive regular daily updates on what was done today, campaign performance, and immediate next steps.</p>
                </div>
                <div class="workflow-card">
                    <div class="step-num">03</div>
                    <h3 class="font-heading font-bold text-xl mb-2">Monthly Meetings</h3>
                    <p class="text-gray-400 text-sm">Comprehensive weekly and monthly marketing meetings to review overall business growth, revenue sheets, and scale-up planning.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 8. FAQ --}}
    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">FAQ</span>
                <h2>Frequently Asked <span class="accent">Questions</span></h2>
            </div>
            <div class="faq-list">
                <details class="faq-item">
                    <summary>Do I have to run ads on Meta, Google, and TikTok all at once?</summary>
                    <div class="faq-answer">Not at all. After our initial business and product research, we will recommend the specific platform(s) that will bring the best ROI for your specific industry.</div>
                </details>
                <details class="faq-item">
                    <summary>Is content creation (Graphics/Video) included in this service?</summary>
                    <div class="faq-answer">We provide complete Content Strategy, Copywriting, and a Monthly Content Calendar. Depending on your customized package, graphic design and video editing can be integrated directly into the scale-up service.</div>
                </details>
                <details class="faq-item">
                    <summary>How will I know if my business is growing?</summary>
                    <div class="faq-answer">Your Dedicated Marketing Manager will provide you with Daily Campaign Reporting and detailed Weekly & Monthly Performance Analytics, showing exactly where your revenue stands and what optimizations are being made.</div>
                </details>
                <details class="faq-item">
                    <summary>What is the minimum budget required for Business Scale Up?</summary>
                    <div class="faq-answer">Since this is a comprehensive, tailored solution, the budget depends entirely on your business size, goals, and the platforms chosen. Please book a consultation with us to get a custom quotation.</div>
                </details>
            </div>
        </div>
    </section>



    {{-- FINAL CALL TO ACTION --}}
    <section class="py-24 bg-[var(--brand-red)] text-white relative overflow-hidden mt-10">
        <!-- Big Background Text -->
        <div class="absolute -right-8 -bottom-16 font-['Manrope'] font-extrabold text-[10rem] lg:text-[16rem] leading-none text-black opacity-10 select-none pointer-events-none">
            BIZ-SCALE
        </div>
        
        <div class="container mx-auto px-4 max-w-[1200px] relative z-10 text-center">
            <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold mb-6 tracking-tight">Ready to transform your business?</h2>
            <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
                Stop struggling with fragmented marketing. Let our expert team build and execute your growth strategy.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-white text-[var(--ink)] font-extrabold text-[15px] px-8 py-4 rounded-full hover:shadow-[0_10px_25px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all duration-300">
                Talk to an Expert <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>

@endsection