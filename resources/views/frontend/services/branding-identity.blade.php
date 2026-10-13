@extends('frontend.layouts.master')

@section('title', 'Branding & Identity Design | SOURCE 365')
@section('meta_description', 'Build a memorable brand with SOURCE 365. Logo design, brand color selection, typography guidelines, and visual identity.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Brand Identity</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Build a Brand that <span class="text-brand-red">Resonates</span></h1>
            <p class="text-gray-300 text-lg mb-8">Your logo is just the beginning. We create complete, cohesive brand identities that communicate your values and establish trust.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Start Your Brand Journey <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-solid fa-pen-nib text-brand-red mt-1"></i> <div><strong>Logo Creation:</strong> Logo concept formulation, multiple variations, and social media adaptable versions.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-palette text-brand-red mt-1"></i> <div><strong>Brand Colors:</strong> Psychological color selection tailored to your industry and audience.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-font text-brand-red mt-1"></i> <div><strong>Typography Guidelines:</strong> Primary and secondary font selections for web and print.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-book-open text-brand-red mt-1"></i> <div><strong>Visual Direction:</strong> Basic brand identity rulebook to keep your team consistent.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Branding & Identity is the process of creating a distinct personality for your business. It ensures that no matter where a customer interacts with you—on your website, social media, or a business card—they experience the same professional, cohesive look and feel.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> New businesses launching and needing a professional foundation.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Existing companies undergoing a rebrand or modernization.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce brands wanting to establish trust and recognition.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Creative Process</span>
                <h2>How We Build <span class="text-brand-red">Your Brand</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-16 h-16 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4 border border-brand-red">1</div>
                    <h4 class="font-bold mb-2 text-xl text-white">Discovery</h4>
                    <p class="text-sm text-gray-400">We analyze your business values, target audience, and competitors to define your brand's unique positioning.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-16 h-16 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4 border border-brand-red">2</div>
                    <h4 class="font-bold mb-2 text-xl text-white">Concept Design</h4>
                    <p class="text-sm text-gray-400">Our designers sketch and digitize multiple logo concepts and pair them with initial color palettes and typography.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)] text-center">
                    <div class="w-16 h-16 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4 border border-brand-red">3</div>
                    <h4 class="font-bold mb-2 text-xl text-white">Refinement & Delivery</h4>
                    <p class="text-sm text-gray-400">After your feedback, we finalize the chosen identity and compile it into a usable guideline document with source files.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Give your business an identity.</h2>
        <p class="mb-8 opacity-90">Invest in professional branding to stand out from the competition.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Start Your Project</a>
    </section>
@endsection