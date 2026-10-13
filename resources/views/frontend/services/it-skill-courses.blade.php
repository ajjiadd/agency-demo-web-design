@extends('frontend.layouts.master')

@section('title', 'IT Skill Courses with AI | SOURCE 365')
@section('meta_description', 'Learn highly demanding IT skills including Web Development, Digital Marketing, Graphics Design, and Computer Basics integrated with AI tools.')

@section('content')
    <section class="section-dark relative overflow-hidden pt-32 pb-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.15)_0%,transparent_60%)] pointer-events-none"></div>
        <div class="container relative z-10 text-center max-w-4xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Education & Training</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Master Your Future with <span class="text-brand-red">AI-Integrated Skills</span></h1>
            <p class="text-gray-300 text-lg mb-8">Upgrade your career with our practical, hands-on IT courses. Every course is uniquely designed to incorporate modern AI tools, making you faster and more efficient.</p>
            <a href="#course-list" class="btn btn-red">Explore Our Courses <i class="fa-solid fa-arrow-down"></i></a>
        </div>
    </section>

    <section id="course-list" class="section section-paper">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Course Catalog</span>
                <h2>Our <span class="text-brand-red">Training Programs</span></h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Course 1 -->
                <div class="bg-white p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-6 border-b border-line pb-4">
                        <div class="w-14 h-14 bg-red-50 text-brand-red rounded-xl flex items-center justify-center text-3xl flex-shrink-0"><i class="fa-solid fa-laptop"></i></div>
                        <h3 class="font-heading font-bold text-2xl">Computer Basic to Advance with AI</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-sm text-gray-600">
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Computer Fundamentals</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Microsoft Word, Excel, PowerPoint</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Internet & Online Tools</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Google Workspace</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Basic Troubleshooting</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Tools for Productivity</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Assisted Office Work</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Practical Computer Skills</div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="bg-white p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-6 border-b border-line pb-4">
                        <div class="w-14 h-14 bg-red-50 text-brand-red rounded-xl flex items-center justify-center text-3xl flex-shrink-0"><i class="fa-solid fa-bullhorn"></i></div>
                        <h3 class="font-heading font-bold text-2xl">Digital Marketing Course</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-sm text-gray-600">
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Digital Marketing Fundamentals</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Marketing Strategy</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Facebook & TikTok Marketing</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Meta Ads & Google Ads</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Content & Email Marketing</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> SEO Basics</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Analytics & Conversion Tracking</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Tools & Practical Campaigns</div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="bg-white p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-6 border-b border-line pb-4">
                        <div class="w-14 h-14 bg-red-50 text-brand-red rounded-xl flex items-center justify-center text-3xl flex-shrink-0"><i class="fa-solid fa-palette"></i></div>
                        <h3 class="font-heading font-bold text-2xl">Graphics Design Basic to Advance with AI</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-sm text-gray-600">
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Graphic Design Fundamentals</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Design Principles, Photoshop, Illustrator</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Social Media & Marketing Creative</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Banner & Product Design</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Logo Design & Branding</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Design Tools</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Assisted Creative Design</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Practical Design Projects</div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="bg-white p-8 rounded-2xl border border-line hover:border-brand-red hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-6 border-b border-line pb-4">
                        <div class="w-14 h-14 bg-red-50 text-brand-red rounded-xl flex items-center justify-center text-3xl flex-shrink-0"><i class="fa-solid fa-code"></i></div>
                        <h3 class="font-heading font-bold text-2xl">Website Development with AI</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-sm text-gray-600">
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Web Development Fundamentals</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> HTML, CSS, JavaScript</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> WordPress & Website Design</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Responsive & Landing Page Dev</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Database & API Basics</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Assisted Coding</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> AI Website Development Tools</div>
                        <div class="flex items-start gap-2"><i class="fa-solid fa-check text-brand-red mt-1"></i> Practical Website Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-red text-white text-center px-4">
        <h2 class="font-heading font-extrabold text-3xl md:text-4xl mb-4">Ready to start your learning journey?</h2>
        <p class="mb-8 opacity-90">Enroll now and build highly demanding skills for your career or business.</p>
        <a href="{{ route('contact') }}" class="btn bg-white text-ink hover:shadow-xl">Contact for Admission</a>
    </section>
@endsection