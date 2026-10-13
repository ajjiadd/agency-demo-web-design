@extends('frontend.layouts.master')

@section('title', 'Payment & Business Support | SOURCE 365')
@section('meta_description', 'Expert payment support for ad accounts, international services, and digital platforms. Overcome payment troubleshooting with SOURCE 365.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Business Support</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Seamless Digital <span class="text-brand-red">Payment Support</span></h1>
            <p class="text-gray-300 text-lg mb-8">Struggling with ad account payments or international tool subscriptions? We provide guidance and troubleshooting to keep your business running smoothly.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get Payment Assistance <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Service Overview</span>
                <h2>Comprehensive <span class="text-brand-red">Financial Assistance</span></h2>
                <p>We ensure your digital operations never halt due to technical payment issues or lack of international cards.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Dollar Payment Support -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-solid fa-globe"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Payment Related Dollar Support</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Advertising Payment Support (Meta, Google, TikTok)</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> International Payment Support</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Digital Service Payment Support (Hosting, SaaS tools)</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Complete Payment Process Guidance</li>
                    </ul>
                </div>

                <!-- Business Payment Support -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-solid fa-briefcase"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Business Support</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Ad Account Payment Support & Setup</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Digital Platform Payment Guidance</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> International Service Payment Support</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Payment Related Troubleshooting (Declined cards, bans)</li>
                    </ul>
                </div>
            </div>

            <div class="bg-red-50 border-l-4 border-brand-red p-6 rounded-r-xl shadow-sm max-w-3xl mx-auto">
                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-circle-info text-brand-red mt-1 text-2xl"></i>
                    <div>
                        <strong class="block text-ink text-lg mb-2 font-heading">Regulatory Notice</strong>
                        <p class="text-sm text-gray-700 leading-relaxed">সব Dollar এবং Payment related service applicable rules, platform policy এবং transaction requirements অনুযায়ী পরিচালিত হবে। We ensure all transactions meet local and international platform compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Facing payment restrictions?</h2>
        <p class="mb-8 opacity-90">Contact us to resolve your advertising and platform payment issues.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to an Expert</a>
    </section>
@endsection