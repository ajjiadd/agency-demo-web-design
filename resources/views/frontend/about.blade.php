@extends('frontend.layouts.master')

@section('title', 'About Us | SOURCE 365')
@section('meta_description', 'Learn about SOURCE 365, our mission, vision, expertise, and how we approach digital growth for businesses.')

@section('styles')
<style>
    /* Custom specific styles for About Page (combining with Tailwind) */
    .about-hero-bg {
        background: radial-gradient(circle at top right, rgba(255, 0, 0, 0.05), transparent 50%), var(--white);
    }
    .glass-box {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
    }
</style>
@endsection

@section('content')

<!-- 1. Company Overview (Hero Section) -->
<section class="about-hero-bg pt-32 pb-20 lg:pt-40 lg:pb-28 relative overflow-hidden">
    <div class="container mx-auto px-4 max-w-[1200px]">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-flex items-center gap-2 text-[var(--brand-red)] text-sm font-extrabold tracking-widest uppercase mb-6 reveal">
                <span class="w-8 h-[2px] bg-current reveal"></span> Who We Are
            </span>
            <h1 class=" reveal font-['Manrope'] text-4xl md:text-5xl lg:text-[4rem] font-extrabold leading-tight tracking-tight text-[var(--ink)] mb-8">
                Driving real growth through <span class="text-[var(--brand-red)]">digital excellence.</span>
            </h1>
            <p class=" reveal text-lg md:text-xl text-[var(--muted)] leading-relaxed max-w-3xl mx-auto">
                <strong>SOURCE 365</strong> is a dynamic IT and Digital Marketing Agency. We bridge the gap between strategy, design, and technology to provide complete digital solutions. Instead of managing multiple freelancers, we work as your dedicated partner to scale your business seamlessly.
            </p>
        </div>
    </div>
</section>

<!-- 2. Mission & Vision -->
<section class="py-20 lg:py-28 bg-[var(--paper)]">
    <div class="container mx-auto px-4 max-w-[1200px]">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Mission -->
            <div class="bg-white reveal p-10 lg:p-14 rounded-[24px] border border-[#e5e5e5] shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 rounded-2xl bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-3xl mb-8">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h2 class="font-['Manrope'] reveal text-2xl lg:text-3xl font-bold text-[var(--ink)] mb-4">Our Mission</h2>
                <p class="text-[var(--muted)] text-base leading-relaxed">
                    To empower businesses of all sizes with data-driven marketing, robust technology, and creative design. We aim to simplify the digital transformation journey, making scalable growth accessible and measurable for our clients.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="bg-white p-10 lg:p-14  reveal rounded-[24px] border border-[#e5e5e5] shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 rounded-2xl bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-3xl mb-8">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h2 class="font-['Manrope'] reveal text-2xl lg:text-3xl font-bold text-[var(--ink)] mb-4">Our Vision</h2>
                <p class="text-[var(--muted)] text-base leading-relaxed">
                    To become the most trusted and reliable digital growth partner globally, recognized for delivering transparent, innovative, and results-oriented IT and marketing solutions that shape the future of modern businesses.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Approach -->
<section class="py-20 lg:py-32 bg-[var(--ink)] text-white relative">
    <div class="container mx-auto px-4 max-w-[1200px] relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-24">
            <span class="inline-flex items-center gap-2 text-[var(--brand-red)] text-sm font-extrabold tracking-widest uppercase mb-4">
                <span class="w-8 h-[2px] bg-current"></span> Our Approach
            </span>
            <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold tracking-tight mb-6">How we work with you</h2>
            <p class="text-[#bdbdbd] text-lg">We don't just execute tasks; we collaborate. Our process is designed to bring clarity, strategy, and continuous improvement.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="glass-box p-8 lg:p-10 rounded-[22px] group hover:border-[rgba(255,0,0,0.4)] transition-colors duration-300">
                <div class="text-[var(--brand-red)] font-['Manrope'] text-5xl font-extrabold opacity-40 mb-6 group-hover:opacity-100 transition-opacity">01</div>
                <h3 class="font-['Manrope'] text-xl font-bold mb-4">Understand & Align</h3>
                <p class="text-[#a8a8a8] text-sm leading-relaxed">We start by diving deep into your business model, target audience, and current challenges to align our goals with your vision.</p>
            </div>
            <!-- Step 2 -->
            <div class="glass-box p-8 lg:p-10 rounded-[22px] group hover:border-[rgba(255,0,0,0.4)] transition-colors duration-300">
                <div class="text-[var(--brand-red)] font-['Manrope'] text-5xl font-extrabold opacity-40 mb-6 group-hover:opacity-100 transition-opacity">02</div>
                <h3 class="font-['Manrope'] text-xl font-bold mb-4">Strategize & Plan</h3>
                <p class="text-[#a8a8a8] text-sm leading-relaxed">We develop a tailored roadmap—whether it's an ad campaign, a custom web application, or a full business scale-up strategy.</p>
            </div>
            <!-- Step 3 -->
            <div class="glass-box p-8 lg:p-10 rounded-[22px] group hover:border-[rgba(255,0,0,0.4)] transition-colors duration-300">
                <div class="text-[var(--brand-red)] font-['Manrope'] text-5xl font-extrabold opacity-40 mb-6 group-hover:opacity-100 transition-opacity">03</div>
                <h3 class="font-['Manrope'] text-xl font-bold mb-4">Execute & Optimize</h3>
                <p class="text-[#a8a8a8] text-sm leading-relaxed">Our expert team executes the plan with precision, tracks performance with server-side analytics, and optimizes for maximum ROI.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. Our Expertise -->
<section class="py-20 lg:py-28 bg-white reveal">
    <div class="container mx-auto px-4 max-w-[1200px]">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <span class="inline-flex items-center gap-2 text-[var(--brand-red)] text-sm font-extrabold tracking-widest uppercase mb-4">
                    <span class="w-8 h-[2px] bg-current"></span> Our Expertise
                </span>
                <h2 class="font-['Manrope'] text-3xl md:text-4xl lg:text-[2.8rem] font-extrabold text-[var(--ink)] leading-[1.1] mb-6">
                    A multi-disciplinary team built for digital success.
                </h2>
                <p class="text-[var(--muted)] mb-8 text-lg">
                    We bring together top-tier talents across different digital domains. From crafting high-converting ad copies to coding complex Laravel web applications, our expertise covers every angle of your digital presence.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 border-b border-[#f0f0f0] pb-4">
                        <i class="fa-solid fa-chart-line text-[var(--brand-red)] text-xl w-6"></i>
                        <span class="font-bold text-[var(--ink)]">Performance Marketing & SEO</span>
                    </div>
                    <div class="flex items-center gap-4 border-b border-[#f0f0f0] pb-4">
                        <i class="fa-solid fa-code text-[var(--brand-red)] text-xl w-6"></i>
                        <span class="font-bold text-[var(--ink)]">Custom Web & App Development</span>
                    </div>
                    <div class="flex items-center gap-4 border-b border-[#f0f0f0] pb-4">
                        <i class="fa-solid fa-server text-[var(--brand-red)] text-xl w-6"></i>
                        <span class="font-bold text-[var(--ink)]">Advanced Tracking & Analytics</span>
                    </div>
                    <div class="flex items-center gap-4 pb-4">
                        <i class="fa-solid fa-pen-nib text-[var(--brand-red)] text-xl w-6"></i>
                        <span class="font-bold text-[var(--ink)]">UI/UX & Branding Design</span>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/2 w-full">
                <!-- Image or Abstract Visual -->
                <div class="relative rounded-[32px] overflow-hidden shadow-2xl bg-[#111] aspect-[4/3]">
                    <img src="{{ asset('assets/team/Team_v.jpeg') }}" alt="SOURCE 365 Team working together" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[rgba(255,0,0,0.2)] to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Why Choose Source 365 -->
<section class="py-20 lg:py-28 bg-[var(--paper)]">
    <div class="container mx-auto px-4 max-w-[1200px]">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
            <span class="inline-flex items-center gap-2 text-[var(--brand-red)] text-sm font-extrabold tracking-widest uppercase mb-4">
                <span class="w-8 h-[2px] bg-current"></span> Why Source 365
            </span>
            <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold tracking-tight text-[var(--ink)]">Why clients choose us</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-8 rounded-[20px] border border-[#e5e5e5] hover:-translate-y-2 transition-transform duration-300">
                <div class="w-12 h-12 rounded-full bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-xl mb-6">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3 class="font-['Manrope'] font-bold text-lg text-[var(--ink)] mb-3">All-in-One Solution</h3>
                <p class="text-[var(--muted)] text-sm">Everything from branding to backend code, handled by one coordinated team.</p>
            </div>
            
            <div class="bg-white p-8 rounded-[20px] border border-[#e5e5e5] hover:-translate-y-2 transition-transform duration-300">
                <div class="w-12 h-12 rounded-full bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-xl mb-6">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <h3 class="font-['Manrope'] font-bold text-lg text-[var(--ink)] mb-3">Transparent Pricing</h3>
                <p class="text-[var(--muted)] text-sm">Clear, structured packages with no hidden costs. You get exactly what you pay for.</p>
            </div>

            <div class="bg-white p-8 rounded-[20px] border border-[#e5e5e5] hover:-translate-y-2 transition-transform duration-300">
                <div class="w-12 h-12 rounded-full bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-xl mb-6">
                    <i class="fa-solid fa-chart-pie"></i>
                </div>
                <h3 class="font-['Manrope'] font-bold text-lg text-[var(--ink)] mb-3">Data-Driven Focus</h3>
                <p class="text-[var(--muted)] text-sm">We don't guess. We use real-time analytics and tracking to ensure our strategies work.</p>
            </div>

            <div class="bg-white p-8 rounded-[20px] border border-[#e5e5e5] hover:-translate-y-2 transition-transform duration-300">
                <div class="w-12 h-12 rounded-full bg-[#fff0f0] text-[var(--brand-red)] flex items-center justify-center text-xl mb-6">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <h3 class="font-['Manrope'] font-bold text-lg text-[var(--ink)] mb-3">Clear Reporting</h3>
                <p class="text-[var(--muted)] text-sm">Daily, weekly, and monthly performance reports keep you informed at every step.</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. CTA -->
<section class="py-24 bg-[var(--brand-red)] text-white relative overflow-hidden">
    <!-- Big Background Text -->
    <div class="absolute -right-8 -bottom-16 font-['Manrope'] font-extrabold text-[12rem] lg:text-[18rem] leading-none text-black opacity-10 select-none pointer-events-none">
        SCALE-UP
    </div>
    
    <div class="container mx-auto px-4 max-w-[1200px] relative z-10 text-center">
        <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold mb-6 tracking-tight">Ready to take the next step?</h2>
        <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
            Let’s discuss your business goals and explore how our team can help you build an extraordinary digital presence.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-white text-[var(--ink)] font-extrabold text-[15px] px-8 py-4 rounded-full hover:shadow-[0_10px_25px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all duration-300">
            Talk to Our Team <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

@endsection