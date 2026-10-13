@extends('frontend.layouts.master')

@section('title', 'Dollar Buy & Sell Service | SOURCE 365')
@section('meta_description', 'Reliable Dollar buy and sell services for digital marketing, advertising, and international payments. Strictly adheres to platform policies.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Financial Support</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Reliable <span class="text-brand-red">Dollar Buy & Sell</span></h1>
            <p class="text-gray-300 text-lg mb-8">Secure exchange services for your digital campaigns, international tools, and platform requirements.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Check Today's Rate <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Managing international payments and advertising budgets can be a hassle without the right financial support. We provide secure dollar buying and selling services to help you seamlessly fund your digital operations.</p>
                
                <div class="bg-red-50 border-l-4 border-brand-red p-5 rounded-r-xl mt-6 shadow-sm">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-exclamation text-brand-red mt-1 text-xl"></i>
                        <div>
                            <strong class="block text-ink mb-1 font-heading">Important Notice</strong>
                            <p class="text-sm text-gray-700">সব Dollar এবং Payment related service applicable rules, platform policy এবং transaction requirements অনুযায়ী পরিচালিত হবে।</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Our Services Include</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-white border border-red-100 flex items-center justify-center text-brand-red flex-shrink-0"><i class="fa-solid fa-money-bill-transfer"></i></div>
                        <div>
                            <strong class="block text-ink">Dollar Buy Service</strong>
                            <p class="text-sm text-gray-500">Purchase dollars securely for your business needs.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-white border border-red-100 flex items-center justify-center text-brand-red flex-shrink-0"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        <div>
                            <strong class="block text-ink">Dollar Sell Service</strong>
                            <p class="text-sm text-gray-500">Cash out your digital earnings at competitive rates.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-white border border-red-100 flex items-center justify-center text-brand-red flex-shrink-0"><i class="fa-solid fa-chart-line"></i></div>
                        <div>
                            <strong class="block text-ink">Dollar Rate Support</strong>
                            <p class="text-sm text-gray-500">Get the most updated and fair market rates before any transaction.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Need to process a transaction?</h2>
        <p class="mb-8 opacity-90">Contact our support team to verify the current rates and policies.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to Support Team</a>
    </section>
@endsection