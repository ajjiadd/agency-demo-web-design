@extends('frontend.layouts.master')

@section('title', 'Mobile App Development | SOURCE 365')
@section('meta_description', 'Custom Android and iOS App Development services. E-commerce, Business, and Service Booking apps with API and Payment integration.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Mobile Solutions</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">High-Performance <span class="text-brand-red">Mobile Apps</span></h1>
            <p class="text-gray-300 text-lg mb-8">Engage your customers directly on their smartphones with custom Android and iOS applications built for speed, security, and scalability.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Discuss Your App Idea <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">App Development Features</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-brands fa-android text-brand-red mt-1 text-xl"></i> <div><strong>Native & Cross-Platform:</strong> Android App & iOS App Development.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-credit-card text-brand-red mt-1 text-xl"></i> <div><strong>Integrations:</strong> Payment Gateway, Database, and secure API Integrations.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-fingerprint text-brand-red mt-1 text-xl"></i> <div><strong>Security & Engagement:</strong> Authentication Systems and Push Notifications.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-tools text-brand-red mt-1 text-xl"></i> <div><strong>Support:</strong> App Maintenance, Bug Fixing, and regular Updates.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">We turn your business logic into a mobile application. From designing the user interface to programming the backend logic and launching on the Google Play Store and Apple App Store.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Types of Apps We Build:</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> <strong>E-commerce Apps:</strong> Smooth shopping experiences.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> <strong>Service Booking Apps:</strong> Ride-sharing, salon, or consultation booking.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> <strong>Business Apps:</strong> Customer Management and internal tools.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Have an app idea?</h2>
        <p class="mb-8 opacity-90">Let our mobile development team map out the features and timeline.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Get an App Estimate</a>
    </section>
@endsection