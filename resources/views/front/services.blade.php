@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'حلول تشغيل' : 'Execution solutions' }}</div>
            <h1 class="section-title">{{ __('site.our_services') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'الخدمات دي متصممة عشان تساعدك تكبر حضورك التجاري بشكل ذكي: تصميم مضبوط، خامة مناسبة، وتنفيذ ينفع ينزل السوق فورًا.'
                    : 'These services are crafted to grow your market presence with smart design, suitable materials, and ready-to-launch execution.' }}
            </p>
        </div>

        <div class="grid-3">
            @foreach($services as $service)
                <article class="card service-card">
                    <div class="service-icon">{{ $service['icon'] }}</div>
                    <h3>{{ app()->getLocale() === 'ar' ? $service['title_ar'] : $service['title_en'] }}</h3>
                    <p>{{ app()->getLocale() === 'ar' ? $service['desc_ar'] : $service['desc_en'] }}</p>
                    <div style="margin-top:16px;">
                        <a href="{{ route('contact') }}" class="btn btn-outline" style="min-height:42px;padding:0 16px;font-size:13px;">{{ app()->getLocale() === 'ar' ? 'ابدأ الخدمة دي' : 'Start This Service' }}</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
