<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function businessScaleUp()
    {
        return view('frontend.business-scale-up');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function facebookBoosting()
    {
        return view('frontend.services.facebook-boosting');
    }
    public function metaAds()
    {
        return view('frontend.services.meta-ads');
    }
    public function googleTiktokAds()
    {
        return view('frontend.services.google-tiktok-ads');
    }
    public function seoPackages()
    {
        return view('frontend.services.seo-packages');
    }
    public function serverSideTracking()
    {
        return view('frontend.services.server-side-tracking');
    }
    public function ga4GtmSetup()
    {
        return view('frontend.services.ga4-gtm-setup');
    }
    public function conversionTracking()
    {
        return view('frontend.services.conversion-tracking');
    }

    public function graphicsDesign()
    {
        return view('frontend.services.graphics-design');
    }
    public function uiUxDesign()
    {
        return view('frontend.services.ui-ux-design');
    }
    public function brandingIdentity()
    {
        return view('frontend.services.branding-identity');
    }

    public function websiteDevelopment()
    {
        return view('frontend.services.website-development');
    }
    public function appDevelopment()
    {
        return view('frontend.services.app-development');
    }
    public function landingPages()
    {
        return view('frontend.services.landing-pages');
    }
    public function websiteMaintenance()
    {
        return view('frontend.services.website-maintenance');
    }

    public function emailCampaigns()
    {
        return view('frontend.services.email-campaigns');
    }
    public function emailAutomation()
    {
        return view('frontend.services.email-automation');
    }
    public function customerRetention()
    {
        return view('frontend.services.customer-retention');
    }

    public function itSkillCourses()
    {
        return view('frontend.services.it-skill-courses');
    }
    public function dollarBuySell()
    {
        return view('frontend.services.dollar-buy-sell');
    }
    public function paymentSupport()
    {
        return view('frontend.services.payment-support');
    }


    public function submitContact(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
            'service' => 'required|string',
            'details' => 'required|string',
        ]);

        // Save to Database (e.g. Lead model)
        // Lead::create($request->all());

        // Return back with success message
        return back()->with('success', 'Thank you! Your inquiry has been successfully submitted. Our team will contact you shortly.');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('frontend.terms-and-conditions');
    }

    public function refundPolicy() {
        return view('frontend.refund-service-policy');
    }
}
