@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">PORTFOLIO</div>
            <h1 class="section-title large">{{ __('site.our_works') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'ده آخر شغل متضاف عندنا. لو عايز نفس الفكرة باسمك أو لوجو شركتك ابعتلنا.'
                    : 'This is our latest featured work. Contact us to apply your own name or logo.' }}
            </p>
        </div>

        <div class="card work-card" style="padding:0; overflow:hidden;">
            <img src="https://imgg.io/images/2026/04/06/ebe97d2784bb673a12ca5430b1b354d6.jpg" alt="portfolio work">
            <div class="work-caption" style="padding:22px 24px;">
                <strong>{{ app()->getLocale() === 'ar' ? 'نموذج شغل' : 'Featured Work' }}</strong>
                <span>
                    {{ app()->getLocale() === 'ar'
                        ? 'مناسب لشغل الطباعة والإعلانات للشركات والمحلات.'
                        : 'A sample suited for printing and advertising businesses.' }}
                </span>
            </div>
        </div>
    </div>
</section>
@endsection
