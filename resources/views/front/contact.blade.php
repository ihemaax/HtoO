@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="glass contact-box">
            <div class="section-kicker">CONTACT</div>
            <h1 class="section-title large">{{ __('site.contact_us') }}</h1>
            <p class="section-text">{{ __('site.contact_text') }}</p>
            <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" class="btn btn-primary">
                {{ __('site.whatsapp_now') }}
            </a>
        </div>
    </div>
</section>
@endsection