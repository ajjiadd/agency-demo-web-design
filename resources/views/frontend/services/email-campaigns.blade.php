@extends('frontend.layouts.master')

@section('title', 'Email Campaigns & Marketing | SOURCE 365')
@section('meta_description', 'Complete email marketing solutions. From basic newsletter setups to advanced custom templates, A/B testing, and campaign management.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Direct Marketing</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">High-Converting <span class="text-brand-red">Email Campaigns</span></h1>
            <p class="text-gray-300 text-lg mb-8">Reach your audience directly in their inbox. We manage everything from platform setup and template design to advanced A/B testing and reporting.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Start Your Campaign <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Email marketing remains one of the highest ROI channels available. Our Email Campaign service handles the entire lifecycle of your email marketing: building your audience lists, designing stunning templates, segmenting your users, and sending promotional emails and newsletters that drive sales.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce brands wanting to announce new product launches.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Service businesses keeping their audience engaged with monthly newsletters.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Companies looking to run Special Offer campaigns and flash sales.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Key Elements We Handle</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-envelope-open-text text-brand-red"></i> Promotional Emails</div>
                    <div class="flex items-center gap-3"><i class="fa-regular fa-newspaper text-brand-red"></i> Engaging Newsletters</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-users-rectangle text-brand-red"></i> Audience Segmentation</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-swatchbook text-brand-red"></i> Custom Template Design</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-vial text-brand-red"></i> A/B Testing</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-chart-line text-brand-red"></i> Performance Analytics</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Scalable Plans</span>
                <h2>Email Marketing <span class="text-brand-red">Packages</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Starter -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">Email Starter</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Perfect for new businesses.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Platform & Audience Setup</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Email List Setup</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Basic Email Template</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Promotional Email Setup</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Campaign Management</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
                <!-- Standard -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col relative">
                    <h3 class="font-bold text-xl mb-2">Email Standard</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">For active, growing brands.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Email Template Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Audience Segmentation</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Basic Email Automation</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Promo Email & Newsletter</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Performance Monitoring</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
                <!-- Growth -->
                <div class="bg-ink text-white p-6 rounded-2xl border border-brand-red flex flex-col relative transform md:-translate-y-4 shadow-xl">
                    <div class="absolute top-0 right-0 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-xl uppercase">Most Popular</div>
                    <h3 class="font-bold text-xl mb-2">Email Growth</h3>
                    <p class="text-sm text-gray-400 border-b border-[rgba(255,255,255,0.1)] pb-4 mb-4">Advanced scaling strategy.</p>
                    <ul class="space-y-3 text-sm text-gray-300 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Custom Template Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Customer Segmentation</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Multiple Automation Flows</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> A/B Testing</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Campaign Performance Report</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-red w-full text-center border-none">Select Package</a>
                </div>
                <!-- Professional -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">Email Pro</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Complete enterprise solution.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Advanced Campaign Mgt.</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Advanced Segmentation</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Customer Retention Campaign</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Performance Analytics</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Monthly Reporting</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Select Package</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to reach your customers' inbox?</h2>
        <p class="mb-8 opacity-90">Maximize your sales with professionally managed email campaigns.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to an Expert</a>
    </section>
@endsection