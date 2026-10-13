@extends('frontend.layouts.master')

@section('title', 'Website Maintenance Services | SOURCE 365')
@section('meta_description', 'Keep your website secure, fast, and up-to-date with SOURCE 365 website maintenance services. Backups, bug fixing, and monitoring.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Support & Security</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Keep Your Website <span class="text-brand-red">Running Smoothly</span></h1>
            <p class="text-gray-300 text-lg mb-8">Focus on your business while we handle your website's security, updates, backups, and speed optimization.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get Maintenance Support <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-solid fa-pen-to-square text-brand-red mt-1"></i> <div><strong>Content & Updates:</strong> Regular Website Content, Product, Theme, and Plugin updates.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-shield-virus text-brand-red mt-1"></i> <div><strong>Security & Backups:</strong> Malware scanning, Security Updates, and secure Backup Management.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-gauge-high text-brand-red mt-1"></i> <div><strong>Performance:</strong> Speed Optimization and continuous Website Monitoring.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-wrench text-brand-red mt-1"></i> <div><strong>Technical Support:</strong> Rapid Bug Fixing and Dedicated Technical Support.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">A website requires constant care to prevent hacking, broken layouts, and slow loading times. Our maintenance service ensures your website is always updated, secure, and performing at its best.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce stores that cannot afford downtime or broken checkouts.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Businesses running older websites that need security patches.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Owners who want to focus on sales rather than fixing technical bugs.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Protect your digital asset.</h2>
        <p class="mb-8 opacity-90">Prevent downtime and hacking with our proactive maintenance plans.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Secure My Website</a>
    </section>
@endsection