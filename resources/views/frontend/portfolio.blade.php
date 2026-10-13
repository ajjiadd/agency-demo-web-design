@extends('frontend.layouts.master')

@section('title', 'Our Portfolio | SOURCE 365 Selected Work')
@section('meta_description', 'Explore the successful projects delivered by SOURCE 365. Discover our work in Marketing, SEO, Website Development, App Development, and Design.')

@section('styles')
<style>
    /* Portfolio Specific Styles */
    .portfolio-hero {
        position: relative;
        padding: 140px 0 100px;
        background: var(--ink);
        color: var(--white);
        overflow: hidden;
    }
    .portfolio-hero::before {
        content: '';
        position: absolute;
        top: -20%; right: -10%;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(255,0,0,0.15) 0%, transparent 70%);
        pointer-events: none;
    }
    .filter-btn {
        padding: 10px 24px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 0.9rem;
        background: var(--white);
        color: var(--muted);
        border: 1px solid var(--line);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .filter-btn:hover {
        border-color: var(--brand-red);
        color: var(--brand-red);
    }
    .filter-btn.active {
        background: var(--brand-red);
        color: var(--white);
        border-color: var(--brand-red);
        box-shadow: 0 5px 15px rgba(255,0,0,0.2);
    }

    .portfolio-item {
        transition: transform 0.4s ease, opacity 0.4s ease;
    }
    .portfolio-item.hide {
        display: none;
    }

    .project-card {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 24px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
    }
    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: rgba(255,0,0,0.2);
    }
    .project-image-wrap {
        height: 240px;
        overflow: hidden;
        position: relative;
        background: #f0f0f0;
    }
    .project-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .project-card:hover .project-image-wrap img {
        transform: scale(1.08);
    }
    .project-content {
        padding: 30px 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .project-category {
        color: var(--brand-red);
        font-size: 0.75rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 10px;
    }
    .project-title {
        font-family: 'Manrope', sans-serif;
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--ink);
        margin-bottom: 20px;
        line-height: 1.3;
    }
    .project-details {
        font-size: 0.9rem;
        color: var(--muted);
        display: flex;
        flex-direction: column;
        gap: 12px;
        flex-grow: 1;
    }
    .detail-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .detail-icon {
        flex-shrink: 0;
        margin-top: 3px;
    }
    .project-result {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px dashed var(--line);
        font-weight: 700;
        color: var(--ink);
    }
</style>
@endsection

@section('content')

    {{-- 1. Portfolio Hero --}}
    <section class="portfolio-hero">
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Our Selected Work</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Explore Our <span class="text-brand-red">Success Stories</span></h1>
            <p class="text-gray-300 text-lg">We don't just deliver services; we deliver measurable results. Browse through our recent projects to see how we help businesses scale, design, and grow.</p>
        </div>
    </section>

    {{-- 2. Portfolio Projects & Filters --}}
    <section class="section section-paper min-h-screen">
        <div class="container">
            
            {{-- Category Filter --}}
            <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-14" id="portfolio-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="marketing">Marketing</button>
                <button class="filter-btn" data-filter="seo">SEO</button>
                <button class="filter-btn" data-filter="tracking">Tracking</button>
                <button class="filter-btn" data-filter="design">Design</button>
                <button class="filter-btn" data-filter="website">Website</button>
                <button class="filter-btn" data-filter="app">App</button>
            </div>

            {{-- Project Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                
                <!-- Project 1: Marketing -->
                <div class="portfolio-item marketing">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="E-Commerce Scale Up" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">Marketing</span>
                            <h3 class="project-title">Fashion Brand Scale-Up</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> High Customer Acquisition Cost (CAC) and inconsistent ad performance.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Solution:</strong> Restructured Meta Ads funnel, targeted Lookalike audiences, and refreshed ad creatives.</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-arrow-trend-up text-green-500 detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> Achieved 350% ROAS and reduced CPA by 40% within 2 months.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Website -->
                <div class="portfolio-item website">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=800&q=80" alt="Corporate Website" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">Website</span>
                            <h3 class="project-title">Corporate Portal Development</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> Outdated website with slow loading speed and poor mobile responsiveness.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Scope:</strong> Custom Laravel development, dynamic CMS, and UI/UX modernization.</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-bolt text-brand-red detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> 95+ PageSpeed score and a 60% increase in lead form submissions.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Tracking -->
                <div class="portfolio-item tracking">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Server Side Tracking" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">Tracking</span>
                            <h3 class="project-title">E-commerce Data Accuracy</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> Missing 30% of purchase data on Meta Ads due to iOS14+ restrictions.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Solution:</strong> Setup Server-Side Tracking using Google Tag Manager and Meta Conversion API (CAPI).</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-check-double text-blue-500 detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> 100% data tracking accuracy with perfect Event Deduplication.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4: SEO -->
                <div class="portfolio-item seo">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1572177812156-58036aae439c?auto=format&fit=crop&w=800&q=80" alt="SEO Ranking" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">SEO</span>
                            <h3 class="project-title">Local Service SEO Domination</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> Zero visibility on Google for local service-related keywords.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Scope:</strong> Full Website SEO Audit, Technical SEO fixes, and Local citation building.</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-ranking-star text-brand-red detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> Ranked #1 on Google Maps and Top 3 organically for main keywords.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5: Design -->
                <div class="portfolio-item design">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=800&q=80" alt="UI UX Design" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">Design</span>
                            <h3 class="project-title">Fintech App UI/UX Redesign</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> Clunky user interface causing high user drop-off during onboarding.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Solution:</strong> Complete UX research, user flow restructuring, and modern dark-theme UI design in Figma.</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-face-smile text-brand-red detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> Onboarding completion rate increased by 55%.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6: App -->
                <div class="portfolio-item app">
                    <div class="project-card">
                        <div class="project-image-wrap">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80" alt="Mobile App Development" loading="lazy">
                        </div>
                        <div class="project-content">
                            <span class="project-category">App Development</span>
                            <h3 class="project-title">Service Booking Application</h3>
                            <div class="project-details">
                                <div class="detail-row">
                                    <i class="fa-solid fa-circle-exclamation text-gray-400 detail-icon"></i>
                                    <div><strong>Problem:</strong> Client was managing all service bookings manually via phone calls.</div>
                                </div>
                                <div class="detail-row">
                                    <i class="fa-solid fa-lightbulb text-yellow-500 detail-icon"></i>
                                    <div><strong>Scope:</strong> Native Android/iOS app development with real-time booking, API, and payment gateway integration.</div>
                                </div>
                                <div class="detail-row project-result">
                                    <i class="fa-solid fa-mobile-screen-button text-blue-500 detail-icon text-lg"></i>
                                    <div><strong>Result:</strong> Automated 90% of bookings, saving the business 40+ hours per week.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="mt-12 text-center text-gray-500 text-sm">
                <p><i class="fa-solid fa-lock text-brand-red mr-1"></i> Client privacy is our priority. Sensitive performance metrics and actual client names are shown only with prior approval.</p>
            </div>
        </div>
    </section>



    {{-- FINAL CALL TO ACTION --}}
<section class="py-24 bg-[var(--brand-red)] text-white relative overflow-hidden mt-10">
    <!-- Big Background Text -->
    <div class="absolute -right-8 -bottom-16 font-['Manrope'] font-extrabold text-[10rem] lg:text-[16rem] leading-none text-black opacity-10 select-none pointer-events-none">
        PROJECTS
    </div>

    <div class="container mx-auto px-4 max-w-[1200px] relative z-10 text-center">
        <h2 class="font-['Manrope'] text-3xl md:text-5xl font-extrabold mb-6 tracking-tight">Ready to feature your business here?</h2>
        <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
            Whether you need marketing, a new website, or better tracking, our team is ready to deliver measurable results.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-white text-[var(--ink)] font-extrabold text-[15px] px-8 py-4 rounded-full hover:shadow-[0_10px_25px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all duration-300">
            Discuss Your Project <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

    

@endsection

@section('scripts')
<script>
    // Portfolio Filtering Logic
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all') {
                        item.classList.remove('hide');
                        setTimeout(() => item.style.opacity = '1', 50);
                    } else {
                        if (item.classList.contains(filterValue)) {
                            item.classList.remove('hide');
                            setTimeout(() => item.style.opacity = '1', 50);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => item.classList.add('hide'), 300); // Wait for fade out transition
                        }
                    }
                });
            });
        });
    });
</script>
@endsection