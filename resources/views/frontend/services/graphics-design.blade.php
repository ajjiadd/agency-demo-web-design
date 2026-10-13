@extends('frontend.layouts.master')

@section('title', 'Graphics Design Services | SOURCE 365')
@section('meta_description', 'High-quality graphics design services including website banners, social media creatives, print design, and promotional materials by SOURCE 365.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Creative Design</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Visuals that Drive <span class="text-brand-red">Engagement</span></h1>
            <p class="text-gray-300 text-lg mb-8">From conversion-focused website banners to viral social media creatives and professional print materials. We design assets that make your brand stand out.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Discuss Your Project <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Service Catalog</span>
                <h2>Complete Graphics <span class="text-brand-red">Solutions</span></h2>
                <p>We provide a wide range of graphic design services to support your marketing, web, and offline campaigns.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Website & Product -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-solid fa-desktop"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Website & Product Design</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Website Banner & Slider Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Promotional & Offer Banners</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Product Banner & Image Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Campaign Specific Banners</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Website Promotional Creatives</li>
                    </ul>
                </div>

                <!-- Marketing & Social Media -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-brands fa-facebook"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Marketing & Social Media</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Facebook & Instagram Post Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Social Media Carousel Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> High-converting Facebook Ad Creatives</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Infographic & Campaign Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Product Promotional Design</li>
                    </ul>
                </div>

                <!-- Additional Graphics -->
                <div class="bg-paper p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="w-14 h-14 bg-white text-brand-red rounded-xl flex items-center justify-center text-2xl mb-6 shadow-sm"><i class="fa-solid fa-print"></i></div>
                    <h3 class="font-heading font-bold text-2xl mb-4 border-b border-line pb-3">Print & Additional Assets</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Flyer, Brochure & Poster Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Business Card & Print Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Product Catalogue & Packaging</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> YouTube Thumbnail Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Presentation & Certificate Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Workflow</span>
                <h2>Our Design <span class="text-brand-red">Process</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">01. Briefing</h3>
                    <p class="text-gray-400 text-sm">We gather your requirements, brand guidelines, dimensions, and visual preferences.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">02. Drafting</h3>
                    <p class="text-gray-400 text-sm">Our creative team develops the initial concepts based on marketing trends.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">03. Review</h3>
                    <p class="text-gray-400 text-sm">We send the concepts to you for feedback and make necessary revisions.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-6 rounded-xl bg-[rgba(255,255,255,0.02)]">
                    <h3 class="text-brand-red font-bold text-xl mb-2">04. Delivery</h3>
                    <p class="text-gray-400 text-sm">Final high-resolution files (JPG, PNG, PDF) and source files are handed over.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Need eye-catching visuals?</h2>
        <p class="mb-8 opacity-90">Let's create designs that represent your brand and convert your audience.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Request a Quote</a>
    </section>
@endsection