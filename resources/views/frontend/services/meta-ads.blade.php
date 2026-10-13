@extends('frontend.layouts.master')

@section('title', 'Meta Ads Management | SOURCE 365')
@section('meta_description', 'Advanced Meta Ads management for Facebook and Instagram. High ROI campaigns, custom audiences, pixel tracking, and scaling.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Advanced Advertising</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Data-Driven <span class="text-brand-red">Meta Ads</span> Management</h1>
            <p class="text-gray-300 text-lg mb-8">Move beyond simple boosting. We build full-funnel Facebook and Instagram ad campaigns optimized for conversions and scaling.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get a Custom Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Comprehensive Ads Setup</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-solid fa-chart-line text-brand-red mt-1"></i> <div><strong>Campaign Strategy:</strong> Full funnel planning (Awareness, Consideration, Conversion).</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-users-rays text-brand-red mt-1"></i> <div><strong>Advanced Targeting:</strong> Custom audiences, Lookalike audiences, and retargeting.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-wand-magic-sparkles text-brand-red mt-1"></i> <div><strong>Optimization & Scaling:</strong> A/B testing creatives, managing underperforming ads, and budget scaling.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-chart-pie text-brand-red mt-1"></i> <div><strong>Analytics:</strong> Pixel integration, Conversion API checking, and daily reporting.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Unlike basic boosting, Meta Ads Management utilizes the full power of the Meta Business Manager. We create sophisticated ad structures designed to lower your Cost Per Acquisition (CPA) and maximize your Return on Ad Spend (ROAS).</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce websites looking for consistent sales and tracking.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Service providers generating high-quality B2B or B2C leads.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Brands wanting to run dynamic retargeting catalogs.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Our Process</span>
                <h2>How We <span class="text-brand-red">Scale</span> Your Ads</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">01. Research</h3>
                    <p class="text-gray-400 text-sm">Audience analysis, competitor ad review, and creative angle planning.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">02. Setup</h3>
                    <p class="text-gray-400 text-sm">Campaign structuring, pixel verification, and ad copywriting.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">03. Testing</h3>
                    <p class="text-gray-400 text-sm">A/B testing different audiences and creatives to find winning combinations.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">04. Scale</h3>
                    <p class="text-gray-400 text-sm">Increasing budget on winning ads and turning off underperforming ones.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <h2>Frequently Asked <span class="text-brand-red">Questions</span></h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-3">
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">What is the difference between this and Boosting? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">Boosting is a simplified tool for quick engagement. Meta Ads Management uses Ads Manager for deep targeting, detailed placement control, objective-based bidding (like conversions), and advanced retargeting.</p>
                </details>
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">Do I need a Business Manager account? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">Yes, but don't worry if you don't have one. Our team will guide you through setting up your Meta Business Manager and granting us the appropriate agency access.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Stop Wasting Ad Spend</h2>
        <p class="mb-8 opacity-90">Let our experts structure your campaigns for maximum profitability.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Book a Strategy Call</a>
    </section>
@endsection