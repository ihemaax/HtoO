@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="glass page-shell">
            <div class="section-head">
                <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'من نحن' : 'About Our Studio' }}</div>
                <h1 class="section-title">{{ __('site.about_title') }}</h1>
                <p class="section-text">{{ __('site.about_text') }}</p>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3 style="font-size:24px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'رؤيتنا' : 'Our Vision' }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'نخلي أي مشروع يظهر بصورة احترافية قوية في السوق من خلال تنفيذ بصري متكامل يجمع بين التصميم والطباعة والإعلان.'
                            : 'To make every business appear stronger in the market through cohesive design, print, and advertising execution.' }}
                    </p>
                </div>
                <div class="card">
                    <h3 style="font-size:24px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'منهج العمل' : 'How We Work' }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'بنبدأ بفهم الهدف والجمهور، ثم نبني اتجاه بصري مناسب، وبعدها تنفيذ دقيق بخامات تليق بالبراند.'
                            : 'We start by understanding goals and audience, then build the right art direction and execute with premium materials.' }}
                    </p>
                </div>
            </div>

            <div class="grid-2" style="margin-top:20px;">
                <div class="trust-item">{{ __('site.why_1') }}</div>
                <div class="trust-item">{{ __('site.why_2') }}</div>
                <div class="trust-item">{{ __('site.why_3') }}</div>
                <div class="trust-item">{{ __('site.why_4') }}</div>
            </div>
        </div>
    </div>
</section>
@endsection
