@extends('frontend.layouts.master')

@section('title', 'Server Side Tracking | SOURCE 365')
@section('meta_description', 'Bypass iOS14 restrictions and ad blockers with Server Side Tracking for WordPress, Shopify, and Custom sites.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Advanced Analytics</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Accurate Data Collection with <span class="text-brand-red">Server Side Tracking</span></h1>
            <p class="text-gray-300 text-lg mb-8">Bypass iOS14 updates, Ad Blockers, and ITP restrictions to feed your ad platforms 100% accurate conversion data.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get a Custom Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-brands fa-wordpress text-brand-red mt-1"></i> <div><strong>WordPress/WooCommerce:</strong> Complete event setup, GA4, Meta CAPI, and Standard Events.</div></li>
                    <li class="flex gap-3"><i class="fa-brands fa-shopify text-brand-red mt-1"></i> <div><strong>Shopify:</strong> E-commerce tracking (Product View, Add to Cart, Initiate Checkout, Purchase).</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-code text-brand-red mt-1"></i> <div><strong>Custom Websites:</strong> Custom Event Tracking, Lead Tracking, and API Integrations.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-shield-halved text-brand-red mt-1"></i> <div><strong>Quality Assurance:</strong> Event Deduplication, Troubleshooting, and Tracking Testing.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Traditional browser-based tracking (like standard Meta Pixel) is losing data due to privacy updates and ad blockers. Server Side Tracking moves the data processing to a secure cloud server, sending complete and accurate conversion data directly to advertising APIs (like Meta Conversion API).</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce owners running Meta/Google ads and facing missing purchase data.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Advertisers experiencing drops in ROAS due to iOS 14.5+ tracking prevention.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Data-driven businesses prioritizing data security and website speed.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Implementation Phase</span>
                <h2>Our <span class="text-brand-red">Process</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">1</div>
                    <h4 class="font-bold mb-2 text-white">Data Layer Setup</h4>
                    <p class="text-sm text-gray-400">Pushing accurate dynamic data (price, ID, etc.) to the GTM web container.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">2</div>
                    <h4 class="font-bold mb-2 text-white">Server Configuration</h4>
                    <p class="text-sm text-gray-400">Setting up Google Cloud or Stape.io server for secure processing.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">3</div>
                    <h4 class="font-bold mb-2 text-white">API Integration</h4>
                    <p class="text-sm text-gray-400">Connecting Meta Conversion API (CAPI) and GA4 Server tags.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">4</div>
                    <h4 class="font-bold mb-2 text-white">Deduplication Test</h4>
                    <p class="text-sm text-gray-400">Ensuring browser and server events don't duplicate, maximizing ad optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Fix your tracking issues today.</h2>
        <p class="mb-8 opacity-90">Don't let ad blockers waste your budget. Upgrade to Server-Side Tracking.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Request Custom Setup</a>
    </section>
@endsection