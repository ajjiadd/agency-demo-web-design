@extends('frontend.layouts.master')

@section('title', 'Customer Retention Campaigns | SOURCE 365')
@section('meta_description', 'Keep your customers coming back. Win-back campaigns, VIP segmentation, and post-purchase loyalty strategies.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Customer Loyalty</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Turn Buyers into <span class="text-brand-red">Lifelong Fans</span></h1>
            <p class="text-gray-300 text-lg mb-8">Acquiring a new customer is expensive. We build advanced retention and win-back campaigns to maximize the Lifetime Value (LTV) of the customers you already have.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Boost Customer Loyalty <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Customer Retention focuses on re-engaging your existing customer base. Utilizing advanced audience segmentation, we send highly targeted emails to bring back inactive users, reward VIP buyers, and foster long-term brand loyalty.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> E-commerce stores with a large base of one-time buyers.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Subscription-based businesses needing to reduce churn.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Brands looking to increase repeat purchase rates.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">Retention Strategies We Implement</h3>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-rotate-left text-brand-red"></i> <strong>Win Back Campaign:</strong> Re-engage customers who haven't purchased in 3-6 months.</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-gift text-brand-red"></i> <strong>Special Offer Campaigns:</strong> Exclusive discounts for specific customer segments.</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-crown text-brand-red"></i> <strong>VIP Segmentation:</strong> Special treatment and early access for your top spenders.</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bullhorn text-brand-red"></i> <strong>Product Launch Email:</strong> Notify past buyers first when a new product drops.</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-envelope-circle-check text-brand-red"></i> <strong>Customer Retention Email:</strong> Value-driven content to keep your brand top-of-mind.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-paper">
        <div class="container text-center max-w-3xl mx-auto">
            <h2 class="font-heading font-extrabold text-3xl mb-6">The Power of <span class="text-brand-red">Advanced Segmentation</span></h2>
            <p class="text-gray-600 mb-8">Sending the same email to everyone doesn't work anymore. As part of our <strong>Email Professional</strong> package, we analyze your data and segment your audience based on their behavior, purchase history, and engagement levels. This ensures that every customer receives the right message at exactly the right time.</p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-white border border-line px-4 py-2 rounded-full text-sm font-bold text-ink"><i class="fa-solid fa-user-clock text-brand-red mr-2"></i> Inactive Buyers</span>
                <span class="bg-white border border-line px-4 py-2 rounded-full text-sm font-bold text-ink"><i class="fa-solid fa-star text-brand-red mr-2"></i> High Rollers (VIPs)</span>
                <span class="bg-white border border-line px-4 py-2 rounded-full text-sm font-bold text-ink"><i class="fa-solid fa-eye text-brand-red mr-2"></i> Window Shoppers</span>
                <span class="bg-white border border-line px-4 py-2 rounded-full text-sm font-bold text-ink"><i class="fa-solid fa-tags text-brand-red mr-2"></i> Discount Seekers</span>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Don't let your customers slip away.</h2>
        <p class="mb-8 opacity-90">Maximize your revenue by retaining the buyers you already have.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Build a Retention Strategy</a>
    </section>
@endsection
