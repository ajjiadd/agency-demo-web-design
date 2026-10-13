@extends('frontend.layouts.master')

@section('title', 'Terms & Conditions | SOURCE 365')
@section('meta_description', 'Terms and Conditions of SOURCE 365. Read our guidelines, service agreements, payment terms, and client responsibilities.')

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
        <h1 class="font-heading font-extrabold text-4xl md:text-5xl mb-4">Terms & Conditions</h1>
        <p class="text-gray-400 text-sm tracking-wider uppercase font-bold">Last Updated: October 9, 2026</p>
    </div>
</section>

{{-- Terms & Conditions Content --}}
<section class="section-paper pb-24">
    <div class="container max-w-4xl mx-auto">
        <div class="legal-content-wrap legal-doc">

            <h2>1. General Terms</h2>
            <p>These Terms & Conditions apply to the use of the <strong>SOURCE 365</strong> website and the procurement of our digital services. If there is a separate Agreement, Proposal, Invoice, or Scope of Work for a specific project, the conditions specified in those documents will also apply.</p>

            <h2>2. Our Services</h2>
            <p>Services provided by SOURCE 365 may include, but are not limited to:</p>
            <ul>
                <li>Digital Marketing & Social Media Marketing.</li>
                <li>SEO & Tracking Setup.</li>
                <li>Graphics Design & UI/UX Design.</li>
                <li>Website & App Development.</li>
                <li>Email Marketing.</li>
                <li>Business Scale Up & Customized Digital Growth Support.</li>
                <li>Training, Courses, and other authorized digital services.</li>
            </ul>
            <p>The scope of work, pricing, timeline, and delivery for each service will be clearly defined in the respective Agreement.</p>

            <h2>3. Agreements & Commencing Work</h2>
            <p>For the <strong>Business Scale Up Service</strong>, a formal Agreement must be finalized between the client and SOURCE 365 before any work begins. Work will commence only after the designated payment is completed.</p>
            <p>For all other services, the scope of work, pricing, payment terms, delivery schedules, and Refund conditions will also be confirmed in writing as required.</p>

            <h2>4. Payment Terms</h2>
            <p>Clients are required to make payments according to the rules specified in the approved Agreement, Proposal, or Invoice. Payment amounts, installments, or advance payment terms will be determined on a per-project basis.</p>
            <p>Service fees, advertising budgets, third-party charges, and other applicable expenses will be outlined separately where relevant.</p>

            <h2>5. 7-Day Observation Period (Business Scale Up)</h2>
            <p>A seven-day observation period will commence from the time payment is completed for the <strong>Business Scale Up Service</strong>. During this period, the client can evaluate the agreed scope of work, quality, communication, and initial progress.</p>
            <p>If the client is unsatisfied during this observation period, they may follow the designated procedure in this policy to request a Refund. The scope of the refund will cover SOURCE 365's service fee, which will be explicitly stated in the Agreement.</p>
            <p>Whether separate advertising expenditures or third-party charges are refundable must be explicitly clarified in the Agreement prior to payment.</p>

            <h2>6. Client Responsibilities</h2>
            <p>To ensure a smooth project workflow, the client must:</p>
            <ul>
                <li>Provide accurate and necessary information regarding their business.</li>
                <li>Provide authorized access and content required for the execution of the work.</li>
                <li>Provide necessary decisions, approvals, and feedback in a timely manner.</li>
                <li>Ensure they have the legal right to use any content and materials provided to us.</li>
                <li>Complete payments as outlined in the Agreement.</li>
            </ul>
            <p>Please note that delays in receiving information or approvals from the client may alter the project timeline.</p>

            <h2>7. Scope of Work & Modifications</h2>
            <p>If new tasks, additional features, or significant modifications outside the agreed scope are required, additional costs and timelines may be determined based on mutual consent between both parties.</p>

            <h2>8. Expectations of Results</h2>
            <p>SOURCE 365 will strive to complete the agreed work professionally and to the best of our abilities. However, unless explicitly guaranteed in a written Agreement, specific volumes of sales, advertising results, web traffic, search engine rankings, or business growth are not guaranteed. These outcomes depend on various internal and external market factors.</p>

            <h2>9. Third-Party Platforms</h2>
            <p>Platforms such as Facebook, Google, hosting providers, payment gateways, and other third parties operate under their own independent rules. If their policies or technical changes impact a project, the course of action will be determined by the respective Agreement and applicable laws.</p>

            <h2>10. Intellectual Property & Ownership</h2>
            <p>Ownership of materials provided by the client will remain entirely with the client. SOURCE 365 retains rights to its pre-existing tools, templates, methodologies, and proprietary materials used during the project. Ownership and usage rights of the final deliverables and source files created during the project will be defined in the respective Agreement.</p>

            <h2>11. Service Cancellation</h2>
            <p>Any request for service cancellation must be submitted in writing. In the event of a cancellation, completed work, outstanding payments, applicable costs, and refund eligibility will be evaluated according to the respective Agreement, our Refund & Service Policy, and applicable laws.</p>

            <h2>12. Changes to Terms</h2>
            <p>These Terms & Conditions may be updated from time to time. The impact of any changes on already executed Agreements will be determined in accordance with the stipulations of the Agreement itself and applicable laws.</p>

            <h2>13. Contact Us</h2>
            <p>If you have any questions or require further clarification regarding these Terms & Conditions, please contact us:</p>

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