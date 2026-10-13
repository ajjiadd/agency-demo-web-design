@extends('frontend.layouts.master')

@section('title', 'Google & TikTok Ads | SOURCE 365')
@section('meta_description', 'Capture high-intent search traffic with Google Ads and engage viral audiences with TikTok Ads. Expert campaign management by SOURCE 365.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Search & Viral Marketing</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Dominate Search & <span class="text-brand-red">Video Audiences</span></h1>
            <p class="text-gray-300 text-lg mb-8">Capture customers actively searching for you on Google, or build explosive brand awareness on TikTok.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get a Custom Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">A dual-platform approach based on your specific business needs. <strong>Google Ads</strong> captures high-intent users actively searching for your services. <strong>TikTok Ads</strong> leverages short-form video to reach younger, highly engaged demographics rapidly.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> <strong>Google Ads:</strong> Service-based businesses, local trades, and high-ticket e-commerce needing immediate leads.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> <strong>TikTok Ads:</strong> Trendy product brands, lifestyle e-commerce, and businesses targeting Gen Z / Millennials.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                
                <h4 class="font-bold text-ink mb-3"><i class="fa-brands fa-google text-brand-red mr-2"></i> Google Ads Management</h4>
                <ul class="space-y-2 mb-6 text-sm text-gray-600 ml-6">
                    <li>• Keyword Research & Search Intent Mapping</li>
                    <li>• Search, Display, and Performance Max Campaigns</li>
                    <li>• Ad Copywriting & Extension Setup</li>
                    <li>• Negative Keyword Management & Bid Optimization</li>
                </ul>

                <h4 class="font-bold text-ink mb-3"><i class="fa-brands fa-tiktok text-brand-red mr-2"></i> TikTok Ads Management</h4>
                <ul class="space-y-2 text-sm text-gray-600 ml-6">
                    <li>• Video Creative Direction & Trend Analysis</li>
                    <li>• Spark Ads & In-Feed Ad Setup</li>
                    <li>• Interest & Behavior Audience Targeting</li>
                    <li>• Conversion Tracking & Pixel Setup</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Platform Strategy</span>
                <h2>Our Campaign <span class="text-brand-red">Process</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-line text-center shadow-sm">
                    <div class="text-brand-red font-bold text-xl mb-3 border-b border-line pb-2">1. Audit & Select</div>
                    <p class="text-sm text-gray-500">We analyze your business to determine if Google, TikTok, or both are the right fit for your budget.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center shadow-sm">
                    <div class="text-brand-red font-bold text-xl mb-3 border-b border-line pb-2">2. Research</div>
                    <p class="text-sm text-gray-500">Deep dive into search keywords (Google) or current viral trends and creative hooks (TikTok).</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center shadow-sm">
                    <div class="text-brand-red font-bold text-xl mb-3 border-b border-line pb-2">3. Setup & Launch</div>
                    <p class="text-sm text-gray-500">Creating the campaigns, setting up conversion tracking, and launching the ads.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center shadow-sm">
                    <div class="text-brand-red font-bold text-xl mb-3 border-b border-line pb-2">4. Optimize</div>
                    <p class="text-sm text-gray-500">Managing bids, adding negative keywords, and refreshing creatives to maintain high ROI.</p>
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
                    <summary class="font-bold cursor-pointer flex justify-between items-center">Which platform is right for my business? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">If your customers search for your solution when they have a problem (e.g., plumbers, software, specific products), Google is best. If you have a visually appealing product that relies on impulse buying or trend awareness, TikTok is highly effective.</p>
                </details>
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">Do you create the videos for TikTok? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">We provide the creative direction, script ideas, and trend analysis. Depending on your service agreement, our graphics team can assist with editing, but raw footage is typically provided by the client.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Tap into new traffic sources today.</h2>
        <p class="mb-8 opacity-90">Expand beyond Facebook and reach customers where they search and watch.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Discuss Platform Options</a>
    </section>
@endsection