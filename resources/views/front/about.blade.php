@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="glass page-shell">
            <div class="section-head">
                <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'قصة المكان' : 'Who we are' }}</div>
                <h1 class="section-title">{{ __('site.about_title') }}</h1>
                <p class="section-text">{{ __('site.about_text') }}</p>
            </div>

            <div class="grid-2">
                <div class="card">
                    <h3 style="font-size:24px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'رؤيتنا' : 'Our Vision' }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'نبقى الذراع التنفيذي لأي براند عايز يبان بشكل أقوى في السوق المصري، من غير مبالغة ولا وعود فارغة.'
                            : 'To be the execution arm for ambitious brands that want stronger market presence with practical, high-quality production.' }}
                    </p>
                </div>
                <div class="card">
                    <h3 style="font-size:24px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'أسلوب شغلنا' : 'How we work' }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'بنسمع هدفك الأول، بعد كده نطلع اقتراحات تصميم وتنفيذ مناسبة، ثم نبدأ إنتاج وتسليم بجودة ثابتة ومتابعة يوم بيوم.'
                            : 'We start with your goals, propose the right creative and production direction, then execute and deliver with close follow-up.' }}
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
