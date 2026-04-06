@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">PORTFOLIO</div>
            <h1 class="section-title large">{{ __('site.our_works') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'مجموعة من الأعمال التي توضح مستوى الإخراج النهائي والتناسق البصري وجودة التنفيذ.'
                    : 'A curated selection of projects highlighting clean execution, strong visual balance, and premium final output.' }}
            </p>
        </div>

        <div class="grid-2">
            @foreach($works as $work)
                <div class="card work-card">
                    <img src="{{ $work['image'] }}" alt="portfolio work">
                    <div class="work-caption">
                        <strong>{{ app()->getLocale() === 'ar' ? $work['title_ar'] : $work['title_en'] }}</strong>
                        <span>
                            {{ app()->getLocale() === 'ar'
                                ? 'عناية بالتفاصيل وشكل نهائي يلفت الانتباه.'
                                : 'Attention to detail with a polished final presentation.' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection