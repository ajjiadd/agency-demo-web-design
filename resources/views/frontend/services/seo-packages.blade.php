@extends('frontend.layouts.master')

@section('title', 'SEO Packages | SOURCE 365')
@section('meta_description', 'Boost your organic traffic with SOURCE 365 SEO packages. Keyword research, on-page, technical SEO, and local SEO services.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Organic Growth</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Rank Higher on <span class="text-brand-red">Google</span></h1>
            <p class="text-gray-300 text-lg mb-8">Data-driven SEO strategies to improve your search engine rankings, drive targeted organic traffic, and grow your business.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get a Free SEO Audit <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Our SEO service focuses on optimizing your website so it appears at the top of search engine results. We cover everything from technical fixes to content strategy and on-page optimization.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Local businesses wanting to dominate "near me" searches.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce stores looking to increase organic product sales.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Corporate websites aiming for industry authority and B2B leads.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Core Benefits</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-arrow-trend-up text-brand-red"></i> Long-term Traffic</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bullseye text-brand-red"></i> Targeted Visitors</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-handshake text-brand-red"></i> Brand Trust</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-chart-line text-brand-red"></i> Higher ROI</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Transparent Pricing</span>
                <h2>Our SEO <span class="text-brand-red">Packages</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Basic -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">SEO Basic</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Essential foundation for new sites.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Website SEO Audit</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Keyword Research</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Basic On-Page SEO</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Meta Title & Description</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
                <!-- Standard -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col relative">
                    <h3 class="font-bold text-xl mb-2">SEO Standard</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Perfect for growing businesses.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Everything in Basic</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Technical SEO Setup</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Image Optimization</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Internal Linking Strategy</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
                <!-- Growth -->
                <div class="bg-ink text-white p-6 rounded-2xl border border-brand-red flex flex-col relative transform md:-translate-y-4 shadow-xl">
                    <div class="absolute top-0 right-0 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-xl uppercase">Most Popular</div>
                    <h3 class="font-bold text-xl mb-2">SEO Growth</h3>
                    <p class="text-sm text-gray-400 border-b border-[rgba(255,255,255,0.1)] pb-4 mb-4">Aggressive ranking strategy.</p>
                    <ul class="space-y-3 text-sm text-gray-300 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Everything in Standard</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Competitor Analysis</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Content Strategy</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Monthly SEO Report</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-red w-full text-center border-none">Select Package</a>
                </div>
                <!-- Pro -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">SEO Pro</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Complete domination package.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Everything in Growth</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Advanced Keyword Targeting</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Local SEO Management</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Monthly Performance Monitoring</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Methodology</span>
                <h2>Our SEO <span class="text-brand-red">Process</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">01. Audit</h3>
                    <p class="text-gray-400 text-sm">We analyze your current website health, identify errors, and uncover ranking opportunities.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">02. Strategy</h3>
                    <p class="text-gray-400 text-sm">Deep keyword research and competitor analysis to map out a clear content plan.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">03. Optimize</h3>
                    <p class="text-gray-400 text-sm">Implementing On-Page, Technical, and Image SEO fixes directly on your website.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">04. Monitor</h3>
                    <p class="text-gray-400 text-sm">Tracking ranking improvements, traffic flow, and providing monthly performance reports.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to boost your organic traffic?</h2>
        <p class="mb-8 opacity-90">Stop hiding on page 2. Let's get your website the visibility it deserves.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to an SEO Expert</a>
    </section>
@endsection