@extends('frontend.layouts.master')

@section('title', 'Conversion Tracking Setup | SOURCE 365')
@section('meta_description', 'Expert conversion tracking setup for Meta Pixel, Google Ads, TikTok Ads, and E-commerce events.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Performance Tracking</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Track Every Lead & <span class="text-brand-red">Sale</span> Accurately</h1>
            <p class="text-gray-300 text-lg mb-8">Optimize your ad spend by knowing exactly which campaign drove the purchase or lead form submission.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Setup Conversion Tracking <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Supported Platforms</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-brands fa-meta text-brand-red mt-1 text-xl"></i> <div><strong>Meta Pixel:</strong> Standard events and Custom Conversions.</div></li>
                    <li class="flex gap-3"><i class="fa-brands fa-google text-brand-red mt-1 text-xl"></i> <div><strong>Google Ads:</strong> Conversion Tag & Remarketing Tag setup.</div></li>
                    <li class="flex gap-3"><i class="fa-brands fa-tiktok text-brand-red mt-1 text-xl"></i> <div><strong>TikTok Pixel:</strong> Event setup for viral ad tracking.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-cart-shopping text-brand-red mt-1 text-xl"></i> <div><strong>E-Commerce Events:</strong> Dynamic Value, View Content, AddToCart, Purchase.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Running ads without conversion tracking is like driving blind. We install and configure Pixels and conversion tags so your advertising platforms know exactly who converted, allowing their algorithms to find you more high-quality customers.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Anyone spending money on Facebook, Google, or TikTok Ads.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce stores needing dynamic ROAS tracking.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <h2>Frequently Asked <span class="text-brand-red">Questions</span></h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-3">
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">What is the difference between this and Server-Side tracking? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">Standard conversion tracking relies on browser pixels (which can be blocked). Server-Side tracking is a more advanced version that sends data directly from your server, bypassing those blocks. We recommend starting with standard tracking and upgrading to Server-Side for e-commerce.</p>
                </details>
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">How long does setup take? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">Standard setup via GTM is usually completed within 1-2 business days once access is provided.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Don't waste ad spend on unmeasured clicks.</h2>
        <p class="mb-8 opacity-90">Let us ensure your campaigns are learning from real conversion data.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Setup Tracking Now</a>
    </section>
@endsection