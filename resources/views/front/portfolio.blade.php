@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">PORTFOLIO</div>
            <h1 class="section-title large">{{ __('site.our_works') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'تم تحديث البورتفليو بصورة العمل الحالية كما طلبت.'
                    : 'Portfolio updated with the currently requested featured work.' }}
            </p>
        </div>

        <div class="card work-card" style="padding:0; overflow:hidden;">
            <img src="https://imgg.io/images/2026/04/06/ebe97d2784bb673a12ca5430b1b354d6.jpg" alt="portfolio work">
            <div class="work-caption" style="padding:22px 24px;">
                <strong>{{ app()->getLocale() === 'ar' ? 'العمل المميز' : 'Featured Work' }}</strong>
                <span>
                    {{ app()->getLocale() === 'ar'
                        ? 'تنفيذ بصري مخصص لشركة طباعة وإعلانات.'
                        : 'Custom visual execution for a printing & advertising company.' }}
                </span>
            </div>
        </div>
    </div>
</section>
@endsection
