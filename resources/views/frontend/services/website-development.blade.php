@extends('frontend.layouts.master')

@section('title', 'Website Development | SOURCE 365')
@section('meta_description', 'Professional website development services. From WordPress to Custom Laravel Web Applications and E-commerce platforms.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Web Solutions</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Build a Powerful <span class="text-brand-red">Digital Presence</span></h1>
            <p class="text-gray-300 text-lg mb-8">We develop fast, secure, and scalable websites tailored to your business needs using WordPress, Custom Code, and Laravel.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Discuss Your Project <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Our Technologies</span>
                <h2>Complete <span class="text-brand-red">Web Development</span></h2>
                <p>We choose the right technology stack based on your project requirements, budget, and scalability needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- WordPress -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-3xl mb-6 shadow-sm"><i class="fa-brands fa-wordpress"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">WordPress Websites</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Business & Corporate Websites</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> E-commerce (WooCommerce)</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Theme Customization & Plugins</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Speed & Security Setup</li>
                    </ul>
                </div>

                <!-- Custom Code -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-solid fa-code"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Custom Code Websites</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Custom Business & E-commerce</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Web Application Development</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Custom Feature Development</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> API Integration & Support</li>
                    </ul>
                </div>

                <!-- Laravel -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-brands fa-laravel"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Laravel Development</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Laravel Web Applications</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Custom Backend & API Dev</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Database Integration</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Advanced Maintenance & Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-400 mb-6">A website is the digital storefront of your business. We build websites that are not only visually stunning but also technically sound, fast-loading, and optimized for search engines.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Startups needing a professional digital identity.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Brands wanting to sell products online (E-commerce).</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Enterprises requiring custom portals and backend systems.</li>
                </ul>
            </div>
            <div class="bg-ink p-8 rounded-[24px] border border-[rgba(255,0,0,0.3)]">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-[rgba(255,255,255,0.1)] pb-4">Our Development Process</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded bg-brand-red text-white flex items-center justify-center font-bold flex-shrink-0">1</div>
                        <div><strong class="text-white block">Requirement Analysis</strong><span class="text-sm text-gray-400">Understanding your business logic.</span></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded bg-brand-red text-white flex items-center justify-center font-bold flex-shrink-0">2</div>
                        <div><strong class="text-white block">UI/UX & Prototyping</strong><span class="text-sm text-gray-400">Designing the perfect interface.</span></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded bg-brand-red text-white flex items-center justify-center font-bold flex-shrink-0">3</div>
                        <div><strong class="text-white block">Development & Coding</strong><span class="text-sm text-gray-400">Building the frontend and secure backend.</span></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded bg-brand-red text-white flex items-center justify-center font-bold flex-shrink-0">4</div>
                        <div><strong class="text-white block">Testing & Launch</strong><span class="text-sm text-gray-400">QA testing and deploying to the live server.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to build your digital presence?</h2>
        <p class="mb-8 opacity-90">Let our developers bring your vision to life with robust technology.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Request a Quote</a>
    </section>
@endsection