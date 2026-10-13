@extends('frontend.layouts.master')

@section('title', 'Refund & Service Policy | SOURCE 365')
@section('meta_description', 'Refund and Service Policy of SOURCE 365. Learn about our service delivery, payment guidelines, and refund procedures.')

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
        font-size: 1.4rem;
        color: var(--ink);
        margin-top: 40px;
        margin-bottom: 16px;
        border-bottom: 1px solid var(--line);
        padding-bottom: 10px;
    }

    .legal-doc h2:first-child {
        margin-top: 0;
    }

    .legal-doc h3 {
        font-family: 'Manrope', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--ink);
        margin-top: 24px;
        margin-bottom: 12px;
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
        <h1 class="font-heading font-extrabold text-4xl md:text-5xl mb-4">Refund & Service Policy</h1>
        <p class="text-gray-400 text-sm tracking-wider uppercase font-bold">Last Updated: October 9, 2026</p>
    </div>
</section>

{{-- Refund Policy Content --}}
<section class="section-paper pb-24">
    <div class="container max-w-4xl mx-auto">
        <div class="legal-content-wrap legal-doc">

            <h2>1. Purpose</h2>
            <p>This policy outlines the rules regarding the procurement of services, payments, cancellations, and refunds at <strong>SOURCE 365</strong>. The specific conditions applicable to each service will be detailed in the respective Agreement or approved Proposal.</p>

            <h2>2. Process for Business Scale Up Service</h2>

            <h3>Step 1: Business Review & Planning</h3>
            <p>Initially, we will discuss the client's business, goals, current status, and requirements. Following this, the potential scope of work, strategy, timeline, and service fee will be determined.</p>

            <h3>Step 2: Agreement & Payment</h3>
            <p>Before initiating any work, a formal Agreement must be finalized between both parties. This Agreement will outline the scope of services, fees, payment terms, the seven-day observation period, and refund conditions. SOURCE 365 will commence work only after the designated payment is completed.</p>

            <h3>Step 3: Seven-Day Observation Period</h3>
            <p>A seven-day observation period begins from the time the payment is completed. During this period, the client can evaluate the quality of work, communication, methodology, and initial progress according to the Agreement. This observation period does not guarantee specific sales, revenue, or business outcomes. It provides the client with an opportunity to assess the initial execution of the agreed services.</p>

            <h3>Step 4: Continuing Service or Requesting a Refund</h3>
            <p>If the client is satisfied with the work, the service will continue as per the Agreement. If the client is unsatisfied, they may submit a written Refund request to <a href="mailto:contact@source365.org" class="text-brand-red hover:underline">contact@source365.org</a> within the seven-day observation period. The request must include the client's name, project details, and proof of payment.</p>

            <h2>3. Scope of Refund for Business Scale Up</h2>
            <p>For the Business Scale Up Service, the scope of the refund is strictly limited to SOURCE 365's service fee.</p>
            <p>Advertising budgets, third-party services, software, hosting, or any other external expenses that are listed separately from the service fee are not part of the service fee. Whether a refund is applicable for these expenses will be determined by the respective Agreement, the rules of the relevant third-party service provider, and applicable laws.</p>
            <p>The distinction between the service fee and other expenses will be clearly communicated to the client prior to payment.</p>

            <h2>4. Verification & Processing of Refund Requests</h2>
            <p>Upon receiving a refund request, SOURCE 365 will verify the relevant Agreement, payment details, and the timeframe of the request.</p>
            <p>If the refund is approved, the client will be notified of the refundable service fee amount, the method of reimbursement, and the estimated timeframe. The timeframe for processing refunds will be specified in the respective Agreement.</p>
            <p>If any condition of this refund policy is not enforceable under applicable law, the legal rights under that law will not be voided by this policy.</p>

            <h2>5. Refund Policy for Other Services</h2>
            <p>Refund conditions for Digital Marketing, SEO, Graphics Design, UI/UX Design, Website Development, App Development, Email Marketing, and other services will be determined in the Agreement for each specific project.</p>
            <p>Where applicable, the Agreement will clearly state the following:</p>
            <ul>
                <li>Total service cost and payment terms.</li>
                <li>Timeline for project commencement and delivery.</li>
                <li>Procedure for project cancellation.</li>
                <li>The amount refundable at various stages of the project.</li>
                <li>Rules regarding advertising budgets and third-party expenses.</li>
                <li>Timeframe and procedure for submitting a refund request.</li>
            </ul>
            <p>Applicable refund conditions will be communicated to the client prior to payment.</p>

            <h2>6. Service Cancellation</h2>
            <p>If a client wishes to cancel a service, they must notify us in writing as per the procedure outlined in the respective Agreement. Upon cancellation, the assessment of completed work, outstanding payments, and refundable amounts will be determined in accordance with the respective Agreement, this policy, and applicable laws.</p>

            <h2>7. Advertising & Third-Party Expenses</h2>
            <p>If a project involves advertising expenditures on platforms like Meta Ads, Google Ads, or others alongside SOURCE 365's service fee, those expenses will be stated separately. Funds paid directly to third parties are distinct from the service fee paid to SOURCE 365. Whether any funds are refundable must be clarified in the contract prior to payment.</p>

            <h2>8. Contact Us</h2>
            <p>For any questions regarding refunds or our services, please contact us:</p>

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