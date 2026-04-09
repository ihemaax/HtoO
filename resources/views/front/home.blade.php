@extends('layouts.app')

@section('content')
<section class="hero-premium">
    <div class="container hero-layout">
        <div class="glass hero-main">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'وكالة دعاية وطباعة للشركات الجادة' : 'Serious print & branding partner' }}</div>
            <h1 class="hero-main-title">
                @if(app()->getLocale() === 'ar')
                    شغلك يستحق شكل
                    <span>محترف من أول نظرة</span>
                @else
                    Give your brand a
                    <span>premium first impression</span>
                @endif
            </h1>
            <p class="hero-main-text">
                {{ app()->getLocale() === 'ar'
                    ? 'إحنا مش بنبيع تصميم وخلاص.. إحنا بنطلع لك سيستم بصري كامل يخدم مبيعاتك: من الهوية لحد المطبوعات والهدايا الدعائية، بجودة ثابتة وتسليم منظم.'
                    : 'We do more than design. We build a complete visual system that supports your sales, from identity assets to print production and promotional items.' }}
            </p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">{{ app()->getLocale() === 'ar' ? 'احجز مكالمة سريعة' : 'Book a Quick Call' }}</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'شوف نماذج التنفيذ' : 'See Execution Samples' }}</a>
            </div>

            <div class="stat-row">
                <div class="stat-box">
                    <strong>48h</strong>
                    <span>{{ app()->getLocale() === 'ar' ? 'بداية التنفيذ بعد الاتفاق' : 'Execution kickoff after agreement' }}</span>
                </div>
                <div class="stat-box">
                    <strong>100%</strong>
                    <span>{{ app()->getLocale() === 'ar' ? 'تسعير واضح قبل الشغل' : 'Clear pricing before production' }}</span>
                </div>
                <div class="stat-box">
                    <strong>Pro</strong>
                    <span>{{ app()->getLocale() === 'ar' ? 'تشطيب وخامات تليق بالبراند' : 'Professional finishing & materials' }}</span>
                </div>
            </div>
        </div>

        <div class="glass hero-side">
            <h2 class="section-title" style="font-size:31px;">{{ app()->getLocale() === 'ar' ? 'ليه الشركات بتختار H to O؟' : 'Why teams choose H to O?' }}</h2>
            <p class="section-text" style="font-size:15px;">
                {{ app()->getLocale() === 'ar'
                    ? 'طريقة شغلنا مبنية على نتيجة حقيقية: فهم هدف الحملة، اختيار أنسب خامة، وتنفيذ يطلع البراند بصورة قوية قدام العميل.'
                    : 'Our process is built around outcomes: understand campaign goals, choose the right material, and deliver polished brand presence.' }}
            </p>

            <div class="trust-list">
                <div class="trust-item">{{ app()->getLocale() === 'ar' ? 'إدارة كاملة للمشروع من A لـ Z' : 'End-to-end project management' }}</div>
                <div class="trust-item">{{ app()->getLocale() === 'ar' ? 'تنسيق بصري ثابت على كل المنتجات' : 'Consistent visuals across all assets' }}</div>
                <div class="trust-item">{{ app()->getLocale() === 'ar' ? 'متابعة لحظية لحد التسليم' : 'Active follow-up until delivery' }}</div>
                <div class="trust-item">{{ app()->getLocale() === 'ar' ? 'حلول واقعية حسب المرحلة والميزانية' : 'Practical options by stage and budget' }}</div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'خدمات تنفيذ فعلية' : 'Execution-driven services' }}</div>
            <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'كل اللي محتاجه البراند في مكان واحد' : 'Everything your brand needs in one place' }}</h2>
            <p class="section-text">{{ app()->getLocale() === 'ar' ? 'سواء بتجهز افتتاح جديد أو بتطور شكل مشروعك الحالي، هنساعدك بخطة تنفيذ واضحة وشغل يليق بالسوق اللي بتنافس فيه.' : 'Whether you are launching a new branch or upgrading your brand presence, we deliver clear plans and market-ready production.' }}</p>
        </div>
        <div class="grid-3">
            @foreach(array_slice($services, 0, 6) as $service)
                <article class="card service-card">
                    <div class="service-icon">{{ $service['icon'] }}</div>
                    <h3>{{ app()->getLocale() === 'ar' ? $service['title_ar'] : $service['title_en'] }}</h3>
                    <p>{{ app()->getLocale() === 'ar' ? $service['desc_ar'] : $service['desc_en'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
