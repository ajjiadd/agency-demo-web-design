@extends('frontend.layouts.master')

@section('title', 'Email Automation Services | SOURCE 365')
@section('meta_description', 'Set up powerful email automation flows including Welcome series, Abandoned Cart recovery, and Post-Purchase sequences.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Automated Growth</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Make Money While You <span class="text-brand-red">Sleep</span></h1>
            <p class="text-gray-300 text-lg mb-8">Set up intelligent, trigger-based email flows that automatically welcome subscribers, recover lost sales, and nurture customers 24/7.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Automate Your Emails <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Essential Automation Flows</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3"><i class="fa-solid fa-hand-wave text-brand-red mt-1 text-xl"></i> <div><strong>Welcome Email Series:</strong> Greet new subscribers, introduce your brand, and offer a first-time discount.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-cart-arrow-down text-brand-red mt-1 text-xl"></i> <div><strong>Abandoned Cart Email:</strong> Automatically remind shoppers who left items in their cart to complete the purchase.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-box-open text-brand-red mt-1 text-xl"></i> <div><strong>Post Purchase Email:</strong> Send order confirmations, shipping updates, and review requests automatically.</div></li>
                    <li class="flex gap-3"><i class="fa-solid fa-headset text-brand-red mt-1 text-xl"></i> <div><strong>Customer Follow Up:</strong> Check in on recent buyers to ensure satisfaction and recommend related products.</div></li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Email Automation (also known as Email Flows) allows you to send highly personalized emails to users based on their behavior. Instead of manually sending emails, we set up systems that trigger emails automatically when a user signs up, abandons a cart, or makes a purchase.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Why It Is Crucial:</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Recovers 15-20% of abandoned cart revenue automatically.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Builds immediate trust with instant Welcome sequences.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Saves hundreds of hours of manual follow-up work.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-dark-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Advanced Strategies</span>
                <h2>Beyond the <span class="text-brand-red">Basics</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)]">
                    <div class="w-12 h-12 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-lg flex items-center justify-center text-2xl mb-4"><i class="fa-solid fa-vial"></i></div>
                    <h4 class="font-bold mb-2 text-xl text-white">A/B Testing Flows</h4>
                    <p class="text-sm text-gray-400">We constantly test different subject lines, send times, and offers within your automations to find the highest converting combinations.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)]">
                    <div class="w-12 h-12 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-lg flex items-center justify-center text-2xl mb-4"><i class="fa-solid fa-tags"></i></div>
                    <h4 class="font-bold mb-2 text-xl text-white">Dynamic Content</h4>
                    <p class="text-sm text-gray-400">Emails that dynamically populate with the exact products the user viewed or abandoned, making the message highly relevant.</p>
                </div>
                <div class="border border-[rgba(255,255,255,0.1)] p-8 rounded-2xl bg-[rgba(255,255,255,0.02)]">
                    <div class="w-12 h-12 bg-[rgba(255,0,0,0.1)] text-brand-red rounded-lg flex items-center justify-center text-2xl mb-4"><i class="fa-solid fa-chart-pie"></i></div>
                    <h4 class="font-bold mb-2 text-xl text-white">Performance Analytics</h4>
                    <p class="text-sm text-gray-400">Detailed reporting on open rates, click-through rates, and exact revenue generated by each individual automated flow.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Stop leaving money on the table.</h2>
        <p class="mb-8 opacity-90">Recover lost sales and nurture your audience automatically.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Setup Automations</a>
    </section>
@endsection