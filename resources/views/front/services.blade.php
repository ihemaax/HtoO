@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">SERVICES</div>
            <h1 class="section-title large">{{ __('site.our_services') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'خدمات احترافية في الطباعة والتصميم والدعاية، مصممة لتناسب الشركات والأفراد الباحثين عن شكل قوي وتنفيذ نظيف.'
                    : 'Professional printing, branding, and design services tailored for businesses and individuals seeking strong aesthetics and premium execution.' }}
            </p>
        </div>

        <div class="grid-3">
            @foreach($services as $service)
                <div class="card">
                    <div class="service-icon">{{ $service['icon'] }}</div>
                    <h3>{{ app()->getLocale() === 'ar' ? $service['title_ar'] : $service['title_en'] }}</h3>
                    <p>{{ app()->getLocale() === 'ar' ? $service['desc_ar'] : $service['desc_en'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection