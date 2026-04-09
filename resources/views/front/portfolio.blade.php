@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'نتيجة التنفيذ' : 'Execution results' }}</div>
            <h1 class="section-title">{{ __('site.our_works') }}</h1>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'دي أمثلة لشغل اتنفّذ فعليًا لبراندات مختلفة. هدفنا مش مجرد شكل حلو، هدفنا منتج نهائي يخدم البيع ويشرف اسم العميل.'
                    : 'These samples showcase real projects for different brands. We focus on final deliverables that support sales, not just attractive visuals.' }}
            </p>
        </div>

        <div class="portfolio-grid">
            <article class="card portfolio-main" style="padding:0;overflow:hidden;">
                <img src="{{ $works[0]['image'] }}" alt="Portfolio Work">
                <div style="padding:22px;">
                    <h3 style="font-size:24px;margin-bottom:8px;">{{ app()->getLocale() === 'ar' ? $works[0]['title_ar'] : $works[0]['title_en'] }}</h3>
                    <p class="section-text" style="font-size:15px;max-width:unset;">
                        {{ app()->getLocale() === 'ar'
                            ? 'تنفيذ متكامل لهوية البراند على خامات مختلفة، بنفس الروح البصرية وبأعلى مستوى تشطيب.'
                            : 'A cohesive identity rollout across multiple materials with consistent visuals and premium finishing.' }}
                    </p>
                </div>
            </article>

            <aside class="portfolio-info">
                <div class="card">
                    <h3 style="font-size:22px;margin-bottom:10px;">{{ app()->getLocale() === 'ar' ? 'إيه فرقنا؟' : 'What makes us different?' }}</h3>
                    <div class="contact-list" style="margin:0;">
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'نفس جودة التصميم في المنتج النهائي' : 'Design quality preserved in final production' }}</div>
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'تنفيذ عملي جاهز للاستخدام التجاري فورًا' : 'Commercial-ready output from day one' }}</div>
                        <div class="contact-item">{{ app()->getLocale() === 'ar' ? 'مرونة محترفة في التعديل قبل الاعتماد' : 'Professional revision flow before approval' }}</div>
                    </div>
                </div>

                <div class="card">
                    <div class="mini-work">
                        <img src="{{ $works[0]['image'] }}" alt="Work thumb">
                        <div>
                            <strong style="display:block;margin-bottom:4px;">{{ app()->getLocale() === 'ar' ? 'باكدج دعاية كامل' : 'Complete advertising package' }}</strong>
                            <span style="font-size:13px;color:var(--muted);">{{ app()->getLocale() === 'ar' ? 'تصميم + طباعة + توريد وتشطيب' : 'Design + print + supply and finishing' }}</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:14px;">{{ app()->getLocale() === 'ar' ? 'عايز نفس المستوى' : 'I want this level' }}</a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
