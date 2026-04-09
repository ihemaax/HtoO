@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container contact-grid">
        <div class="glass contact-card">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'تواصل مع الفريق' : 'Talk to Our Team' }}</div>
            <h1 class="section-title">{{ __('site.contact_us') }}</h1>
            <p class="section-text">{{ __('site.contact_text') }}</p>

            <div class="contact-list">
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'استجابة سريعة على واتساب' : 'Fast response on WhatsApp' }}</div>
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'استشارة مبدئية مجانية' : 'Free initial consultation' }}</div>
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'تحديد واضح للتكلفة وموعد التسليم' : 'Clear quote and delivery timeline' }}</div>
            </div>

            <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noopener" class="btn btn-whatsapp">{{ __('site.whatsapp_now') }}</a>
        </div>

        <div class="card contact-card">
            <h3 style="font-size:26px;margin-bottom:12px;">{{ app()->getLocale() === 'ar' ? 'كيف نبدأ؟' : 'How do we start?' }}</h3>
            <div class="contact-list" style="margin-top:0;">
                <div class="contact-item">1) {{ app()->getLocale() === 'ar' ? 'ابعت نوع الخدمة والكمية المطلوبة' : 'Share your required service and quantity' }}</div>
                <div class="contact-item">2) {{ app()->getLocale() === 'ar' ? 'نرشح لك أفضل خامة واتجاه تصميم' : 'We recommend the best material and art direction' }}</div>
                <div class="contact-item">3) {{ app()->getLocale() === 'ar' ? 'استلم معاينة واعتماد نهائي قبل التنفيذ' : 'Receive a preview and confirm before production' }}</div>
                <div class="contact-item">4) {{ app()->getLocale() === 'ar' ? 'تنفيذ وتسليم باحتراف' : 'Professional production and delivery' }}</div>
            </div>
            <a href="{{ route('services') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'استعرض الخدمات أولاً' : 'View Services First' }}</a>
        </div>
    </div>
</section>
@endsection
