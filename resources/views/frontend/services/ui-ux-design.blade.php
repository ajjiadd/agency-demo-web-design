@extends('frontend.layouts.master')

@section('title', 'UI/UX Design Packages | SOURCE 365')
@section('meta_description', 'Professional UI/UX Design services for websites and mobile apps. From wireframing to interactive prototypes and developer handoffs.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">User Experience</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Design Interfaces Users <span class="text-brand-red">Love</span></h1>
            <p class="text-gray-300 text-lg mb-8">We create intuitive, responsive, and aesthetically pleasing UI/UX designs for websites, web applications, and mobile apps using Figma.</p>
            <a href="#packages" class="btn btn-red">View Pricing Packages <i class="fa-solid fa-arrow-down"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Before writing a single line of code, we design exactly how your website or app will look and feel. Our UI/UX service includes user research, wireframing, high-fidelity designing, and interactive prototyping so you can test the experience before development.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Specialized Solutions</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Landing Page UI/UX Design</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Ecommerce Website Interface</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Mobile App UI/UX (Android/iOS)</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Dashboard & Web Application Design</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line text-center flex flex-col justify-center items-center">
                <i class="fa-brands fa-figma text-6xl text-[#F24E1E] mb-4"></i>
                <h3 class="font-heading font-bold text-2xl mb-2">Designed in Figma</h3>
                <p class="text-gray-600 text-sm max-w-sm">All our projects are designed using Figma, ensuring seamless collaboration, interactive prototyping, and perfect developer handoff.</p>
            </div>
        </div>
    </section>

    <section id="packages" class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Clear Pricing</span>
                <h2>UI/UX Design <span class="text-brand-red">Packages</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Starter -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">UI/UX Starter</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Ideal for landing pages.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Basic Website/Landing Page UI</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Desktop & Mobile Responsive</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Figma Source File</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Get Started</a>
                </div>
                <!-- Business -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">UI/UX Business</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Great for standard websites.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Multi-Page Website UI Design</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Wireframe & Basic UX Planning</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Interactive Prototype</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Figma Source File</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Get Started</a>
                </div>
                <!-- Professional -->
                <div class="bg-ink text-white p-6 rounded-2xl border border-brand-red flex flex-col relative transform md:-translate-y-4 shadow-xl">
                    <div class="absolute top-0 right-0 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-xl uppercase">Most Popular</div>
                    <h3 class="font-bold text-xl mb-2">Professional</h3>
                    <p class="text-sm text-gray-400 border-b border-[rgba(255,255,255,0.1)] pb-4 mb-4">For custom platforms.</p>
                    <ul class="space-y-3 text-sm text-gray-300 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Complete Website UI/UX</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> UX Wireframe & User Flow</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Interactive Prototype</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Design System Included</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-red w-full text-center border-none">Get Started</a>
                </div>
                <!-- Premium -->
                <div class="bg-white p-6 rounded-2xl border border-line flex flex-col">
                    <h3 class="font-bold text-xl mb-2">UI/UX Premium</h3>
                    <p class="text-sm text-gray-500 border-b border-line pb-4 mb-4">Complete enterprise solution.</p>
                    <ul class="space-y-3 text-sm text-gray-600 mb-6 flex-grow">
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> App or Advanced Web UI/UX</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> UX Research & Complete Flow</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Complete Design System</li>
                        <li><i class="fa-solid fa-check text-brand-red mr-2"></i> Developer Handoff Assets</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline w-full text-center">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to design your digital product?</h2>
        <p class="mb-8 opacity-90">Let our UX experts build a journey your customers will love.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to a Designer</a>
    </section>
@endsection