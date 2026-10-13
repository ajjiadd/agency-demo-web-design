@extends('frontend.layouts.master')

@section('title', 'GA4 & GTM Setup | SOURCE 365')
@section('meta_description', 'Professional Google Analytics 4 and Google Tag Manager setup for precise website tracking and user behavior insights.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Data & Insights</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Master Your Data with <span class="text-brand-red">GA4 & GTM</span></h1>
            <p class="text-gray-300 text-lg mb-8">Understand exactly how users interact with your website through professional Google Analytics 4 and Tag Manager configuration.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Setup My Analytics <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">We implement Google Tag Manager (GTM) to centralize all your tracking scripts and configure Google Analytics 4 (GA4) to track modern user journeys across your website or app. This gives you deep insights into traffic sources, user engagement, and conversion paths.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Every business website that wants to understand their traffic.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Companies needing to track specific button clicks, video views, or form submissions.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-code text-brand-red"></i> GTM Container Installation & Setup</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-chart-line text-brand-red"></i> GA4 Property Creation & Configuration</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-hand-pointer text-brand-red"></i> Custom Event Tracking (Clicks, Scrolls)</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-link text-brand-red"></i> Cross-Domain Tracking Setup</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bug-slash text-brand-red"></i> Tag Testing & Debugging</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Stop guessing. Start measuring.</h2>
        <p class="mb-8 opacity-90">Unlock the power of your website data with a flawless analytics setup.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to an Expert</a>
    </section>
@endsection