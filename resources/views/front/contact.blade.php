@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container contact-grid">
        <div class="glass contact-card">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'ابدأ في دقايق' : 'Start in minutes' }}</div>
            <h1 class="section-title">{{ __('site.contact_us') }}</h1>
            <p class="section-text">{{ __('site.contact_text') }}</p>

            <div class="contact-list">
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'رد سريع من فريق متخصص' : 'Fast response from a specialized team' }}</div>
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'ترشيح أفضل خامة حسب الاستخدام' : 'Material recommendation by use case' }}</div>
                <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'خطة تنفيذ وسعر وموعد تسليم واضح' : 'Clear plan, pricing, and delivery timeline' }}</div>
            </div>

            <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noopener" class="btn btn-whatsapp">{{ __('site.whatsapp_now') }}</a>
        </div>

        <div class="card contact-card">
            <h3 style="font-size:26px;margin-bottom:12px;">{{ app()->getLocale() === 'ar' ? 'هنبدأ إزاي؟' : 'How we start' }}</h3>
            <div class="contact-list" style="margin-top:0;">
                <div class="contact-item">1) {{ app()->getLocale() === 'ar' ? 'ابعت نوع المنتج، الكمية، وموعدك المتوقع' : 'Share product type, quantity, and preferred timeline' }}</div>
                <div class="contact-item">2) {{ app()->getLocale() === 'ar' ? 'نحدد أنسب مقاس وخامة لشغلك' : 'We define the best size and material for your case' }}</div>
                <div class="contact-item">3) {{ app()->getLocale() === 'ar' ? 'نثبت السعر والتوقيت قبل التنفيذ' : 'We confirm pricing and timeline before production' }}</div>
                <div class="contact-item">4) {{ app()->getLocale() === 'ar' ? 'تنفيذ وتسليم بجودة ثابتة' : 'Execution and delivery with consistent quality' }}</div>
            </div>
            <a href="{{ route('services') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'راجع الخدمات الأول' : 'Review services first' }}</a>
        </div>
    </div>
</section>
@endsection
