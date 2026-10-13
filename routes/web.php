<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Frontend Pages
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/business-scale-up', [FrontendController::class, 'businessScaleUp'])->name('business-scale-up');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/services/facebook-boosting', [FrontendController::class, 'facebookBoosting'])->name('service.facebook-boosting');
Route::get('/services/meta-ads-management', [FrontendController::class, 'metaAds'])->name('service.meta-ads');
Route::get('/services/google-tiktok-ads', [FrontendController::class, 'googleTiktokAds'])->name('service.google-tiktok-ads');

Route::get('/services/seo-packages', [FrontendController::class, 'seoPackages'])->name('service.seo-packages');
Route::get('/services/server-side-tracking', [FrontendController::class, 'serverSideTracking'])->name('service.server-side-tracking');
Route::get('/services/ga4-gtm-setup', [FrontendController::class, 'ga4GtmSetup'])->name('service.ga4-gtm-setup');
Route::get('/services/conversion-tracking', [FrontendController::class, 'conversionTracking'])->name('service.conversion-tracking');

Route::get('/services/graphics-design', [FrontendController::class, 'graphicsDesign'])->name('service.graphics-design');
Route::get('/services/ui-ux-design', [FrontendController::class, 'uiUxDesign'])->name('service.ui-ux-design');
Route::get('/services/branding-identity', [FrontendController::class, 'brandingIdentity'])->name('service.branding-identity');

Route::get('/services/website-development', [FrontendController::class, 'websiteDevelopment'])->name('service.website-development');
Route::get('/services/app-development', [FrontendController::class, 'appDevelopment'])->name('service.app-development');
Route::get('/services/landing-pages', [FrontendController::class, 'landingPages'])->name('service.landing-pages');
Route::get('/services/website-maintenance', [FrontendController::class, 'websiteMaintenance'])->name('service.website-maintenance');

Route::get('/services/email-campaigns', [FrontendController::class, 'emailCampaigns'])->name('service.email-campaigns');
Route::get('/services/email-automation', [FrontendController::class, 'emailAutomation'])->name('service.email-automation');
Route::get('/services/customer-retention', [FrontendController::class, 'customerRetention'])->name('service.customer-retention');

Route::get('/services/it-skill-courses', [FrontendController::class, 'itSkillCourses'])->name('service.it-skill-courses');
Route::get('/services/dollar-buy-sell', [FrontendController::class, 'dollarBuySell'])->name('service.dollar-buy-sell');
Route::get('/services/payment-support', [FrontendController::class, 'paymentSupport'])->name('service.payment-support');

// Contact Form Submission
Route::post('/contact/submit', [FrontendController::class, 'submitContact'])->name('contact.submit');

Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [FrontendController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/refund-service-policy', [FrontendController::class, 'refundPolicy'])->name('refund-policy');