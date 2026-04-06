@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="glass page-box">
            <div class="section-kicker">ABOUT</div>
            <h1 class="section-title large">{{ __('site.about_title') }}</h1>
            <p class="section-text">{{ __('site.about_text') }}</p>

            <div class="features">
                <div class="feature">{{ __('site.why_1') }}</div>
                <div class="feature">{{ __('site.why_2') }}</div>
                <div class="feature">{{ __('site.why_3') }}</div>
                <div class="feature">{{ __('site.why_4') }}</div>
            </div>
        </div>
    </div>
</section>
@endsection