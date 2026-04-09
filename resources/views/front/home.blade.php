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


<section class="section" id="printerWidgetSection">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">{{ app()->getLocale() === 'ar' ? 'تجربة تفاعلية' : 'Interactive Demo' }}</div>
            <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'جرّب اسمك على المنتجات قبل الطلب' : 'Try your name on products before ordering' }}</h2>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'علشان التجربة تبقى ألطف، رجّعنا لك أنيميشن البرنتر. اكتب الاسم وجرّب شكله على أكتر من منتج.'
                    : 'We brought back the fun printer animation. Type your name and test it across multiple products.' }}
            </p>
        </div>

        <div class="creative-lab">
            <div class="creative-panel">
                <p class="widget-note">{{ app()->getLocale() === 'ar' ? 'اكتب الاسم، اختار اللون، واضغط طباعة.' : 'Type the name, choose a color, then hit print.' }}</p>
                <div class="mockup-tabs">
                    <button class="mockup-tab active" type="button" data-mockup="tshirt">{{ app()->getLocale() === 'ar' ? 'تيشيرت' : 'T-shirt' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="mug">{{ app()->getLocale() === 'ar' ? 'كوب' : 'Mug' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="card">{{ app()->getLocale() === 'ar' ? 'كارت' : 'Card' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="pad">{{ app()->getLocale() === 'ar' ? 'ماوس باد' : 'Mouse Pad' }}</button>
                </div>

                <div class="creative-form">
                    <input id="mockupNameInput" class="creative-input" type="text" maxlength="22" placeholder="{{ app()->getLocale() === 'ar' ? 'اكتب اسمك أو اسم البراند' : 'Type your name or brand' }}">
                    <div class="color-picker">
                        <button type="button" class="color-chip active" data-color="#dae9ff" data-color2="#ffffff" style="background:linear-gradient(135deg,#ffffff,#dae9ff)"></button>
                        <button type="button" class="color-chip" data-color="#1a2333" data-color2="#49566c" style="background:linear-gradient(135deg,#111824,#4a5871)"></button>
                        <button type="button" class="color-chip" data-color="#162f5c" data-color2="#57a0ff" style="background:linear-gradient(135deg,#162f5c,#57a0ff)"></button>
                        <button type="button" class="color-chip" data-color="#3f1638" data-color2="#ca4fae" style="background:linear-gradient(135deg,#3f1638,#ca4fae)"></button>
                    </div>
                    <button id="printMockupBtn" class="btn btn-primary" type="button">{{ app()->getLocale() === 'ar' ? 'اطبع الأنيميشن' : 'Run Print Animation' }}</button>
                </div>
            </div>

            <div class="creative-panel mockup-stage">
                <div class="mockup-printer-wrap">
                    <div class="mockup-printer">
                        <div class="mockup-printer-head"></div>
                        <div class="mockup-printer-body"><div class="mockup-printer-slot"></div></div>
                    </div>
                    <div class="print-sheet" id="printSheet"></div>

                    <div class="mockup-view tshirt-preview show" id="tshirtPreview">
                        <svg class="svg-mockup" viewBox="0 0 340 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="shirtGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--mockup-alt)"/><stop offset="100%" stop-color="var(--mockup-main)"/>
                                </linearGradient>
                                <linearGradient id="printGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#10213d"/><stop offset="100%" stop-color="#4a97d7"/>
                                </linearGradient>
                            </defs>
                            <path d="M95 40 L130 40 L145 62 L195 62 L210 40 L245 40 L290 88 L258 112 L242 88 L242 254 L98 254 L98 88 L82 112 L50 88 Z" fill="url(#shirtGrad)" stroke="rgba(255,255,255,.45)" stroke-width="2" />
                            <path d="M142 40 Q170 74 198 40" fill="none" stroke="#c6dce5" stroke-width="12" stroke-linecap="round"/>
                            <rect x="92" y="102" width="156" height="86" rx="22" fill="url(#printGrad)"/>
                            <text id="tshirtDesignText" x="170" y="151" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                        </svg>
                    </div>

                    <div class="mockup-view mug-preview" id="mugPreview">
                        <svg class="svg-mockup" viewBox="0 0 320 260" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="mugGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="var(--mockup-alt)"/><stop offset="100%" stop-color="var(--mockup-main)"/></linearGradient>
                                <linearGradient id="mugPrintGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#10213d"/><stop offset="100%" stop-color="#4a97d7"/></linearGradient>
                            </defs>
                            <rect x="70" y="58" width="150" height="120" rx="20" fill="url(#mugGrad)" stroke="rgba(255,255,255,.48)" stroke-width="2" />
                            <path d="M220 88 Q258 90 258 118 Q258 146 220 148" fill="none" stroke="url(#mugGrad)" stroke-width="18" stroke-linecap="round"/>
                            <rect x="90" y="80" width="108" height="74" rx="16" fill="url(#mugPrintGrad)"/>
                            <text id="mugDesignText" x="144" y="118" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="22" fill="#ffffff">H TO O</text>
                        </svg>
                    </div>

                    <div class="mockup-view card-preview" id="businessCardPreview">
                        <svg class="svg-mockup" viewBox="0 0 340 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="cardBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#102130"/><stop offset="58%" stop-color="var(--mockup-dark)"/><stop offset="100%" stop-color="#2f6c98"/></linearGradient>
                                <linearGradient id="cardAccent" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="var(--mockup-alt)"/><stop offset="100%" stop-color="var(--mockup-main)"/></linearGradient>
                            </defs>
                            <rect x="52" y="46" width="236" height="146" rx="24" fill="url(#cardBg)" stroke="rgba(122,229,239,.18)" stroke-width="2"/>
                            <rect x="72" y="74" width="126" height="46" rx="16" fill="url(#cardAccent)" opacity=".22"/>
                            <text id="cardDesignText" x="82" y="102" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                        </svg>
                    </div>

                    <div class="mockup-view pad-preview" id="mousePadPreview">
                        <svg class="svg-mockup" viewBox="0 0 360 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="padBg" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#0a161f"/><stop offset="100%" stop-color="#17384b"/></linearGradient>
                                <linearGradient id="padAccent" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="var(--mockup-alt)"/><stop offset="100%" stop-color="var(--mockup-main)"/></linearGradient>
                            </defs>
                            <g transform="translate(42,30) skewX(-18)">
                                <rect x="40" y="56" width="220" height="116" rx="26" fill="url(#padBg)" stroke="rgba(122,229,239,.14)" stroke-width="2"/>
                                <rect x="58" y="74" width="184" height="80" rx="20" fill="url(#padAccent)" opacity=".22"/>
                                <rect x="64" y="80" width="172" height="68" rx="18" fill="rgba(7,16,24,.72)"/>
                                <text id="padDesignText" x="150" y="121" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="24" fill="#ffffff">H TO O</text>
                            </g>
                        </svg>
                    </div>
                </div>
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
