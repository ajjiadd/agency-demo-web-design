@extends('frontend.layouts.master')

@section('title', 'Facebook Boosting Service | SOURCE 365')
@section('meta_description', 'Professional Facebook boosting service by SOURCE 365. No hidden charges, fixed dollar rate for reach, engagement, and message campaigns.')

@section('content')
    {{-- Service Hero --}}
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Boosting Service</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Reach More Customers <span class="text-brand-red">Instantly</span></h1>
            <p class="text-gray-300 text-lg mb-8">Quick, effective, and transparent Facebook boosting to increase your page engagement, messages, and overall visibility.</p>
            <a href="{{ route('contact') }}" class="btn btn-red">Get Started Today <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    {{-- Overview & Who Needs It --}}
    <section class="section section-light">
        <div class="container grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-heading font-extrabold text-3xl mb-4">What is this <span class="text-brand-red">Service?</span></h2>
                <p class="text-gray-600 mb-6">Our Facebook Boosting service is designed for businesses that need immediate visibility on specific posts, videos, or offers. We handle the technical setup of the boost, ensuring your content reaches your target demographic efficiently.</p>
                
                <h3 class="font-heading font-bold text-xl mb-3 mt-8">Who Needs It?</h3>
                <ul class="space-y-3 text-gray-600">
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Local businesses wanting foot traffic and local awareness.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Pages launching a new product or special discount offer.</li>
                    <li><i class="fa-solid fa-circle-check text-brand-red mr-2"></i> Brands looking for quick post engagement and page likes.</li>
                </ul>
            </div>
            <div class="bg-paper p-8 rounded-[24px] border border-line">
                <h3 class="font-heading font-bold text-2xl mb-6 border-b border-line pb-4">What's Included</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bolt text-brand-red"></i> Post & Video Boosting</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-users text-brand-red"></i> Reach & Engagement</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-message text-brand-red"></i> Message Boosting</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-globe text-brand-red"></i> Website Traffic</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-bullhorn text-brand-red"></i> Promotional Post</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-tags text-brand-red"></i> Offer Campaign</div>
                </div>
                <div class="mt-8 p-4 bg-white rounded-xl border border-red-100 flex items-start gap-4 shadow-sm">
                    <i class="fa-solid fa-star text-brand-red text-xl mt-1"></i>
                    <div>
                        <strong class="block text-ink">Special Feature:</strong>
                        <span class="text-sm text-gray-600">No Separate Service Charge • No Hidden Charges • Fixed Dollar Conversion Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing & Process --}}
    <section class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Clear Steps</span>
                <h2>How It <span class="text-brand-red">Works</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-line text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">1</div>
                    <h4 class="font-bold mb-2">Select Post</h4>
                    <p class="text-sm text-gray-500">Choose the specific post or offer you want to promote.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">2</div>
                    <h4 class="font-bold mb-2">Set Budget</h4>
                    <p class="text-sm text-gray-500">Decide your total budget based on our fixed dollar rate.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">3</div>
                    <h4 class="font-bold mb-2">Targeting</h4>
                    <p class="text-sm text-gray-500">We set up the basic demographics and location targeting.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-line text-center">
                    <div class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4">4</div>
                    <h4 class="font-bold mb-2">Go Live</h4>
                    <p class="text-sm text-gray-500">Your boost is activated and starts reaching customers.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section section-light">
        <div class="container">
            <div class="section-heading">
                <h2>Frequently Asked <span class="text-brand-red">Questions</span></h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-3">
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">Are there any hidden service charges? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">No. We operate on a strict transparent policy with a fixed dollar conversion rate and no separate service charges for standard boosting.</p>
                </details>
                <details class="group border border-line bg-white rounded-xl overflow-hidden p-4">
                    <summary class="font-bold cursor-pointer flex justify-between items-center">Is this service only for Facebook? <span class="text-brand-red group-open:rotate-45 transition-transform text-xl">+</span></summary>
                    <p class="text-gray-600 text-sm mt-3">Yes, this specific boosting package is tailored exclusively for Facebook posts and pages. If you need advanced Instagram or cross-platform ads, check our Meta Ads Management service.</p>
                </details>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to boost your first post?</h2>
        <p class="mb-8 opacity-90">Message us the post link and your budget to get started instantly.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Talk to an Expert</a>
    </section>
@endsection