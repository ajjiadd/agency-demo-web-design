@extends('frontend.layouts.master')

@section('title', 'Landing Page Design & Development | SOURCE 365')
@section('meta_description', 'High-converting sales, lead generation, and campaign landing pages designed and developed for maximum ROI.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Conversion Focused</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">High-Converting <span class="text-brand-red">Landing Pages</span></h1>
            <p class="text-gray-300 text-lg mb-8">Stop sending ad traffic to your homepage. We build targeted, blazing-fast landing pages designed specifically to capture leads and generate sales.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Build My Landing Page <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">A landing page is a standalone web page created specifically for a marketing or advertising campaign. It’s where a visitor "lands" after they click on your Facebook or Google ad, designed with a single goal: Conversion.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Businesses running paid ad campaigns.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Anyone selling a specific digital product or course.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Agencies collecting B2B leads or webinar signups.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Types of Landing Pages We Build</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-sack-dollar text-brand-red"></i> Sales Landing Page</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-filter text-brand-red"></i> Lead Generation Page</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-box text-brand-red"></i> Product Landing Page</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bullhorn text-brand-red"></i> Campaign Landing Page</div>
                </div>
                <div class="mt-8 p-4 bg-white rounded-xl border border-red-100 flex items-start gap-4 shadow-sm">
                    <i class="fa-solid fa-gear text-brand-red text-xl mt-1"></i>
                    <div>
                        <strong class="block text-ink">Built-in Features:</strong>
                        <span class="text-sm text-gray-600">100% Mobile Responsive • Conversion Optimized UI • Pixel & Server Side Tracking Integration</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Turn your clicks into customers.</h2>
        <p class="mb-8 opacity-90">Maximize your advertising ROI with a page built to convert.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Get Started</a>
    </section>
@endsection