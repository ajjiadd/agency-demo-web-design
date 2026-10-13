@extends('frontend.layouts.master')

@section('title', 'Contact Us | Get Started with SOURCE 365')
@section('meta_description', 'Get in touch with SOURCE 365 for your digital marketing, SEO, website, and app development needs. Start scaling your business today.')

@section('styles')
<style>
    /* Contact Page Hero */
    .contact-hero {
        position: relative;
        padding: 140px 0 80px;
        background: var(--ink);
        color: var(--white);
        overflow: hidden;
    }
    .contact-hero::before {
        content: '';
        position: absolute;
        top: -50%; left: -10%;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(255,0,0,0.15) 0%, transparent 70%);
        pointer-events: none;
    }
    
    /* Contact Info Cards */
    .info-card {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 20px;
        padding: 30px;
        transition: all 0.3s ease;
    }
    .info-card:hover {
        border-color: rgba(255,0,0,0.3);
        background: rgba(255,255,255,0.05);
        transform: translateY(-5px);
    }
    .info-icon {
        width: 50px; height: 50px;
        background: rgba(255,0,0,0.1);
        color: var(--brand-red);
        display: flex; align-items: center; justify-content: center;
        border-radius: 14px; font-size: 1.2rem;
        margin-bottom: 20px;
    }

    /* Form Styles */
    .contact-form-wrap {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.05);
    }
    .form-group { margin-bottom: 24px; }
    .form-label {
        display: block; font-weight: 700; font-size: 0.9rem;
        color: var(--ink); margin-bottom: 8px;
    }
    .form-control {
        width: 100%; padding: 14px 20px;
        background: var(--paper); border: 1px solid var(--line);
        border-radius: 12px; font-size: 0.95rem; color: var(--ink);
        transition: all 0.3s; font-family: 'DM Sans', sans-serif;
    }
    .form-control:focus {
        outline: none; border-color: var(--brand-red);
        background: var(--white); box-shadow: 0 0 0 4px rgba(255,0,0,0.1);
    }
    select.form-control {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23666' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 12px;
        padding-right: 40px;
    }
    textarea.form-control { resize: vertical; min-height: 120px; }

    /* Success Message Alert */
    .alert-success {
        background: #ecfdf5;
        border: 1px solid #10b981;
        color: #047857;
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
        animation: fadeInDown 0.5s ease-out;
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection

@section('content')

    {{-- Contact Hero --}}
    <section class="contact-hero">
        <div class="container relative z-10 text-center max-w-3xl mx-auto">
            <span class="eyebrow text-brand-red mb-4">Get Started</span>
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl mb-6">Let's Build Something <span class="text-brand-red">Extraordinary</span></h1>
            <p class="text-gray-300 text-lg">Have a project in mind or need a complete marketing solution? Fill out the form below and our team will get back to you within 24 hours.</p>
        </div>
    </section>

    <section class="section section-light relative -mt-10">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                {{-- Left Column: Contact Info --}}
                <div class="lg:col-span-5 space-y-6">
                    <div class="mb-10">
                        <h2 class="font-heading font-extrabold text-3xl mb-4 text-ink">Contact <span class="text-brand-red">Information</span></h2>
                        <p class="text-gray-600">Reach out to us directly via phone, email, or visit our office. We are always ready to assist you.</p>
                    </div>

                    <div class="info-card bg-ink text-white rounded-[24px]">
                        <div class="info-icon"><i class="fa-solid fa-headset"></i></div>
                        <h3 class="font-bold text-lg mb-2 text-white">Call Us Directly</h3>
                        <p class="text-gray-400 mb-1">01931-623820</p>
                        <p class="text-gray-400">01408-185323</p>
                    </div>

                    <div class="info-card bg-ink text-white rounded-[24px]">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <h3 class="font-bold text-lg mb-2 text-white">Email Address</h3>
                        <p class="text-gray-400">contact@source365.org</p>
                    </div>

                    <div class="info-card bg-ink text-white rounded-[24px]">
                        <div class="info-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                        <h3 class="font-bold text-lg mb-2 text-white">Office Location</h3>
                        <p class="text-gray-400 leading-relaxed">Ashulia School & College Market,<br>Ashulia, Savar, Dhaka, Bangladesh.</p>
                    </div>

                    <div class="mt-8">
                        <a href="https://wa.me/8801931623820" target="_blank" class="inline-flex items-center justify-center gap-3 bg-[#25d366] text-white font-extrabold text-[15px] w-full px-8 py-4 rounded-xl hover:shadow-[0_10px_25px_rgba(37,211,102,0.3)] hover:-translate-y-1 transition-all duration-300">
                            <i class="fa-brands fa-whatsapp text-xl"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Right Column: Inquiry Form --}}
                <div class="lg:col-span-7">
                    <div class="contact-form-wrap">
                        
                        {{-- Success Message Alert (Laravel Blade Logic) --}}
                        @if(session('success'))
                            <div class="alert-success">
                                <i class="fa-solid fa-circle-check text-xl"></i>
                                <div>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <h3 class="font-heading font-extrabold text-2xl mb-6 text-ink">Project Inquiry</h3>
                        <p class="text-gray-500 mb-8 text-sm">Fill in the details below. Required fields are marked with an asterisk (*).</p>

                        {{-- Form --}}
                        {{-- Ensure you create a POST route named 'contact.submit' in web.php --}}
                        <form action="{{ route('contact.submit') }}" method="POST" id="inquiryForm">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_info" class="form-label">Email or Phone Number *</label>
                                    <input type="text" id="contact_info" name="contact_info" class="form-control" placeholder="example@email.com or 01..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="service" class="form-label">Which service are you interested in? *</label>
                                <select id="service" name="service" class="form-control" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="business-scale-up" class="font-bold text-brand-red">🔥 Business Scale Up (Complete Marketing Solution)</option>
                                    <option value="facebook-boosting">Facebook Boosting Service</option>
                                    <option value="meta-google-tiktok-ads">Meta / Google / TikTok Ads</option>
                                    <option value="seo-tracking">SEO & Server Side Tracking</option>
                                    <option value="ui-ux-graphics">UI/UX & Graphics Design</option>
                                    <option value="website-app-dev">Website & App Development</option>
                                    <option value="email-marketing">Email Marketing & Automation</option>
                                    <option value="courses">IT Skill Courses</option>
                                    <option value="dollar-payment">Dollar Buy/Sell & Payment Support</option>
                                    <option value="other">Other / Custom Request</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="details" class="form-label">Detailed Requirements *</label>
                                <textarea id="details" name="details" class="form-control" placeholder="Tell us a bit about your business, your goals, and what you need help with..." required></textarea>
                            </div>

                            <div class="mt-8">
                                <button type="submit" class="btn btn-red w-full text-lg py-4 shadow-[0_10px_25px_rgba(255,0,0,0.2)]">
                                    Submit Inquiry <i class="fa-solid fa-paper-plane ml-2"></i>
                                </button>
                                <p class="text-center text-xs text-gray-400 mt-4"><i class="fa-solid fa-lock mr-1"></i> Your information is secure and will never be shared.</p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="section-paper border-t border-line">
        <div class="w-full h-[450px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.99474097017637!2d90.32963980517593!3d23.892602288518344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c24fc91b8991%3A0x6e9b2f4504f834d5!2sV8VH%2B2V9%2C%20Anwar%20Jang%20Sarak%2C%20Ashulia!5e0!3m2!1sen!2sbd!4v1786986659748!5m2!1sen!2sbd" width="100%" height="100%" style="border:0; filter: grayscale(100%) invert(92%) contrast(83%);" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </section>

@endsection

@section('scripts')
<script>
    // Optional: Interactive map filter removal on hover
    document.addEventListener('DOMContentLoaded', function() {
        const mapIframe = document.querySelector('iframe');
        if(mapIframe) {
            mapIframe.addEventListener('mouseenter', () => {
                mapIframe.style.filter = 'none';
            });
            mapIframe.addEventListener('mouseleave', () => {
                mapIframe.style.filter = 'grayscale(100%) invert(92%) contrast(83%)';
            });
        }
    });
</script>
@endsection