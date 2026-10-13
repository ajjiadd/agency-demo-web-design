@extends('frontend.layouts.master')

@section('title', 'Privacy Policy | SOURCE 365')
@section('meta_description', 'Privacy Policy of SOURCE 365. Learn how we collect, use, and protect your personal and business information.')

@section('styles')
<style>
    .legal-hero {
        position: relative;
        padding: 140px 0 80px;
        background: var(--ink);
        color: var(--white);
        text-align: center;
        overflow: hidden;
    }

    .legal-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: 50%;
        transform: translateX(-50%);
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, rgba(255, 0, 0, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .legal-content-wrap {
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 24px;
        padding: 50px 60px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.03);
        margin-top: -40px;
        position: relative;
        z-index: 10;
    }

    .legal-doc h2 {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        font-size: 1.5rem;
        color: var(--ink);
        margin-top: 40px;
        margin-bottom: 16px;
        border-bottom: 1px solid var(--line);
        padding-bottom: 10px;
    }

    .legal-doc h2:first-child {
        margin-top: 0;
    }

    .legal-doc p {
        color: #4b5563;
        /* text-gray-600 */
        line-height: 1.8;
        margin-bottom: 16px;
        font-size: 0.95rem;
    }

    .legal-doc ul {
        list-style-type: none;
        padding-left: 0;
        margin-bottom: 24px;
    }

    .legal-doc ul li {
        color: #4b5563;
        line-height: 1.8;
        margin-bottom: 10px;
        font-size: 0.95rem;
        position: relative;
        padding-left: 24px;
    }

    .legal-doc ul li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 8px;
        height: 8px;
        background-color: var(--brand-red);
        border-radius: 50%;
    }

    .contact-card {
        background: var(--paper);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 24px;
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        .legal-content-wrap {
            padding: 30px 20px;
        }

        .legal-hero {
            padding: 100px 0 60px;
        }
    }
</style>
@endsection

@section('content')

{{-- Hero Section --}}
<section class="legal-hero">
    <div class="container relative z-10">
        <h1 class="font-heading font-extrabold text-4xl md:text-5xl mb-4">Privacy Policy</h1>
        <p class="text-gray-400 text-sm tracking-wider uppercase font-bold">Last Updated: October 9, 2026</p>
    </div>
</section>

{{-- Privacy Policy Content --}}
<section class="section-paper pb-24">
    <div class="container max-w-4xl mx-auto">
        <div class="legal-content-wrap legal-doc">

            <h2>1. Introduction</h2>
            <p><strong>SOURCE 365</strong> values the personal information and business confidentiality of our website visitors and clients. This Privacy Policy explains what type of information we collect, why we use it, and the measures we take to keep it secure.</p>

            <h2>2. What Information Do We Collect?</h2>
            <p>When you use our website or services, we may collect the following information as needed:</p>
            <ul>
                <li>Name, email address, phone number, and company name.</li>
                <li>Business type, website URL, and service-related information.</li>
                <li>Files, content, and necessary account access provided for project execution.</li>
                <li>Invoices, payment records, and Agreement-related details.</li>
                <li>Technical information required to maintain website functionality and security, if applicable technologies are used.</li>
            </ul>

            <h2>3. Purpose of Using Information</h2>
            <p>We may use the collected information for the following purposes:</p>
            <ul>
                <li>To communicate with clients and properly understand service requirements.</li>
                <li>To plan, manage, and successfully complete projects.</li>
                <li>To process payments, manage Agreements, and handle customer service.</li>
                <li>To improve our website's functionality and overall security.</li>
                <li>To fulfill legal obligations and resolve potential disputes.</li>
            </ul>

            <h2>4. Information Sharing</h2>
            <p>If necessary for providing our services, we may share required information with authorized technology, hosting, payment, or software service providers. Information may also be disclosed to relevant authorities if required by law.</p>
            <p><strong>Note:</strong> SOURCE 365 does not collect clients' personal information for the purpose of selling it to third parties.</p>

            <h2>5. Information Security</h2>
            <p>We implement reasonable security measures to protect your information from unauthorized access, disclosure, alteration, or destruction. However, please note that no method of data transmission over the Internet or electronic storage can be guaranteed to be 100% secure.</p>

            <h2>6. Information Provided by Clients</h2>
            <p>Clients are required to provide accurate information. If a client needs to provide information, content, or account access belonging to another individual or organization, the client must ensure that appropriate permission has been obtained.</p>

            <h2>7. Information Retention</h2>
            <p>We may retain your information as long as necessary to provide our services, manage accounting, enforce Agreements, resolve disputes, and comply with legal requirements.</p>

            <h2>8. Third-Party Websites & Platforms</h2>
            <p>SOURCE 365 services may integrate or utilize third-party platforms such as Facebook, Google, various payment gateways, and hosting providers. The collection, use, and security of information by these organizations are strictly subject to their own respective Privacy Policies.</p>

            <h2>9. Changes to the Policy</h2>
            <p>We reserve the right to update this Privacy Policy as needed. Any revised version will be published directly on this page with an updated modification date.</p>

            <h2>10. Contact Us</h2>
            <p>If you have any questions, concerns, or requests regarding this Privacy Policy, please feel free to contact us:</p>

            <div class="contact-card">
                <p class="mb-2"><strong class="text-ink">Company:</strong> SOURCE 365</p>
                <p class="mb-2"><strong class="text-ink">Whatsapp:</strong> <a href="https://wa.me/8801931623820" class="text-brand-red hover:underline" target="_blank" rel="noopener noreferrer" aria-label="Chat with SOURCE 365 on WhatsApp">+880 19 3162 3820</a></p>
                <p class="mb-2"><strong class="text-ink">Email:</strong> <a href="mailto:contact@source365.org" class="text-brand-red hover:underline">contact@source365.org</a></p>
                <p class="mb-0"><strong class="text-ink">Website:</strong> <a href="https://source365.org/" target="_blank" class="text-brand-red hover:underline">https://source365.org/</a></p>

            </div>

        </div>
    </div>
</section>

@endsection