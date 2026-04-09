@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'خدماتنا' : 'Our Services' }}</div>
            <h1 class="section-title">{{ __('site.our_services') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'باقة خدمات مصممة للشركات والمتاجر ورواد الأعمال الباحثين عن حضور بصري قوي.'
                    : 'A complete service lineup for brands, stores, and entrepreneurs seeking a stronger visual presence.' }}
            </p>
        </div>

        <div class="grid-3">
            @foreach($services as $service)
                <article class="card service-card">
                    <div class="service-icon">{{ $service['icon'] }}</div>
                    <h3>{{ app()->getLocale() === 'ar' ? $service['title_ar'] : $service['title_en'] }}</h3>
                    <p>{{ app()->getLocale() === 'ar' ? $service['desc_ar'] : $service['desc_en'] }}</p>
                    <div style="margin-top:16px;">
                        <a href="{{ route('contact') }}" class="btn btn-outline" style="min-height:42px;padding:0 16px;font-size:13px;">{{ app()->getLocale() === 'ar' ? 'اطلب الخدمة' : 'Request This Service' }}</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
