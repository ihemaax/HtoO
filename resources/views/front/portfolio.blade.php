@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'سابقة أعمال' : 'Portfolio Showcase' }}</div>
            <h1 class="section-title">{{ __('site.our_works') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'نماذج من أسلوبنا في التنفيذ الإعلاني والطباعة عالية الجودة للأنشطة المختلفة.'
                    : 'A look at our creative execution quality for advertising and print campaigns.' }}
            </p>
        </div>

        <div class="portfolio-grid">
            <article class="card portfolio-main" style="padding:0;overflow:hidden;">
                <img src="{{ $works[0]['image'] }}" alt="Portfolio Work">
                <div style="padding:22px;">
                    <h3 style="font-size:24px;margin-bottom:8px;">{{ app()->getLocale() === 'ar' ? $works[0]['title_ar'] : $works[0]['title_en'] }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'تطبيق لهوية بصرية متكاملة من حيث الألوان، التكوين، والطباعة النهائية.'
                            : 'A complete visual identity execution with balanced composition, color harmony, and premium finishing.' }}
                    </p>
                </div>
            </article>

            <aside class="portfolio-info">
                <div class="card">
                    <h3 style="font-size:22px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'ما الذي يميز أعمالنا؟' : 'What makes our work stand out?' }}</h3>
                    <div class="contact-list" style="margin:0;">
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'تناسق بصري يعكس شخصية البراند' : 'Visual consistency aligned with brand personality' }}</div>
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'تنفيذ نهائي مناسب للاستخدام التجاري' : 'Production-ready execution for real business use' }}</div>
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'مرونة في التعديلات حسب احتياج العميل' : 'Flexible revision flow based on feedback' }}</div>
                    </div>
                </div>

                <div class="card">
                    <div class="mini-work">
                        <img src="{{ $works[0]['image'] }}" alt="Work thumb">
                        <div>
                            <strong style="display:block;margin-bottom:4px;">{{ app()->getLocale() === 'ar' ? 'مشروع دعائي متكامل' : 'Integrated campaign sample' }}</strong>
                            <span style="font-size:13px;color:var(--muted);">{{ app()->getLocale() === 'ar' ? 'تصميم + طباعة + إخراج نهائي' : 'Design + print + final delivery' }}</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:14px;">{{ app()->getLocale() === 'ar' ? 'اطلب عرض مشابه' : 'Request a Similar Project' }}</a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
