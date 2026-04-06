@extends('layouts.app')

@section('content')
<style>
    .home-simple-hero{padding:84px 0 48px}
    .home-simple-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:22px;align-items:stretch}
    .home-simple-card{padding:38px;border-radius:32px}
    .home-simple-title{font-size:clamp(34px,4.8vw,60px);line-height:1.08;margin-bottom:14px;letter-spacing:-1px}
    .home-simple-title span{display:block;color:var(--primary)}
    .home-simple-text{color:var(--muted);font-size:17px;line-height:1.95;max-width:720px}

    .quick-points{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-top:22px}
    .quick-point{padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:rgba(255,255,255,.03);font-size:14px;font-weight:700}

    .widget-title{margin-bottom:10px}
    .widget-note{color:var(--muted);font-size:14px;line-height:1.9;margin-bottom:14px}

    @media (max-width: 992px){
        .home-simple-grid,.quick-points{grid-template-columns:1fr}
        .home-simple-card{padding:24px}
    }
</style>

<section class="home-simple-hero">
    <div class="container home-simple-grid">
        <div class="glass home-simple-card">
            <div class="eyebrow">{{ app()->getLocale() === 'ar' ? 'شركة طباعة وإعلانات' : 'Printing & Advertising Company' }}</div>
            <h1 class="home-simple-title">
                @if(app()->getLocale() === 'ar')
                    بنقدّم طباعة وتصميم
                    <span>بشكل واضح ومنظم</span>
                @else
                    We provide printing and design
                    <span>with clear and organized execution</span>
                @endif
            </h1>

            <p class="home-simple-text">
                {{ app()->getLocale() === 'ar'
                    ? 'لو محتاج كروت، مجات، بادة ماوس، تيشيرتات، أو مطبوعات للدعاية، احنا بنساعدك من أول الفكرة لحد التسليم. الشغل بيكون واضح، المواعيد محددة، والتواصل مباشر.'
                    : 'If you need cards, mugs, mouse pads, T-shirts, or promo prints, we handle it from idea to delivery with clear communication and fixed timelines.' }}
            </p>

            <div class="hero-actions" style="margin-top:20px;">
                <a href="{{ route('contact') }}" class="btn btn-primary">{{ app()->getLocale() === 'ar' ? 'اطلب شغلك دلوقتي' : 'Start Your Order' }}</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'شوف آخر شغل' : 'See Latest Work' }}</a>
            </div>
        </div>

        <div class="glass home-simple-card">
            <h2 class="section-title" style="font-size:30px;">{{ app()->getLocale() === 'ar' ? 'ليه ناس كتير بتتعامل معانا؟' : 'Why clients work with us' }}</h2>
            <p class="home-simple-text" style="font-size:15px;">
                {{ app()->getLocale() === 'ar'
                    ? 'عشان بنشتغل بخطة بسيطة: نفهم المطلوب، نعرض شكل مناسب، وننفذ بخامة كويسة. من غير لف ودوران.'
                    : 'Our flow is simple: understand the requirement, present the right design, and produce with quality materials.' }}
            </p>

            <div class="quick-points">
                <div class="quick-point">{{ app()->getLocale() === 'ar' ? 'معاينة قبل التنفيذ' : 'Preview before production' }}</div>
                <div class="quick-point">{{ app()->getLocale() === 'ar' ? 'تعديل حسب الملاحظات' : 'Adjustments based on feedback' }}</div>
                <div class="quick-point">{{ app()->getLocale() === 'ar' ? 'خامات مناسبة للسوق المصري' : 'Materials that fit local market needs' }}</div>
                <div class="quick-point">{{ app()->getLocale() === 'ar' ? 'تسليم في الوقت المتفق عليه' : 'On-time delivery' }}</div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="printerWidgetSection">
    <div class="container">
        <div class="creative-lab">
            <div class="creative-panel">
                <div class="section-kicker">LIVE PREVIEW WIDGET</div>
                <h2 class="section-title widget-title">
                    {{ app()->getLocale() === 'ar' ? 'اكتب الاسم وشوف شكله على المنتج قبل ما تطلب' : 'Type a name and preview it on products' }}
                </h2>
                <p class="widget-note">
                    {{ app()->getLocale() === 'ar'
                        ? 'اختار المنتج، اكتب الاسم، واضغط طباعة. هتشوف المعاينة على تيشيرت أو كوب أو كارت أو بادة ماوس. ده بيساعدك تختار الشكل المناسب بسرعة.'
                        : 'Choose a product, type a name, and press print. You will preview it on a T-shirt, mug, card, or mouse pad.' }}
                </p>

                <div class="mockup-tabs">
                    <button class="mockup-tab active" type="button" data-mockup="tshirt">{{ app()->getLocale() === 'ar' ? 'تيشيرت' : 'T-shirt' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="mug">{{ app()->getLocale() === 'ar' ? 'كوب' : 'Mug' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="card">{{ app()->getLocale() === 'ar' ? 'كارت شخصي' : 'Business Card' }}</button>
                    <button class="mockup-tab" type="button" data-mockup="pad">{{ app()->getLocale() === 'ar' ? 'بادة ماوس' : 'Mouse Pad' }}</button>
                </div>

                <div class="creative-form">
                    <input id="mockupNameInput" class="creative-input" type="text" maxlength="22"
                           placeholder="{{ app()->getLocale() === 'ar' ? 'اكتب اسمك هنا' : 'Type your name here' }}">

                    <div class="color-picker">
                        <button type="button" class="color-chip active" data-color="#d6f1fb" data-color2="#ffffff" style="background:linear-gradient(135deg,#ffffff,#d6f1fb)"></button>
                        <button type="button" class="color-chip" data-color="#1a1d24" data-color2="#414752" style="background:linear-gradient(135deg,#0f1014,#474d58)"></button>
                        <button type="button" class="color-chip" data-color="#12375c" data-color2="#3f7cb3" style="background:linear-gradient(135deg,#12375c,#3f7cb3)"></button>
                        <button type="button" class="color-chip" data-color="#6e1730" data-color2="#c53a63" style="background:linear-gradient(135deg,#6e1730,#c53a63)"></button>
                    </div>

                    <button id="printMockupBtn" class="btn btn-primary" type="button">
                        {{ app()->getLocale() === 'ar' ? 'طباعة المعاينة' : 'Print Preview' }}
                    </button>
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
                                    <stop offset="0%" stop-color="var(--mockup-alt)"/>
                                    <stop offset="100%" stop-color="var(--mockup-main)"/>
                                </linearGradient>
                                <linearGradient id="printGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#0a1722"/>
                                    <stop offset="100%" stop-color="#2e8db0"/>
                                </linearGradient>
                            </defs>
                            <path d="M95 40 L130 40 L145 62 L195 62 L210 40 L245 40 L290 88 L258 112 L242 88 L242 254 L98 254 L98 88 L82 112 L50 88 Z"
                                  fill="url(#shirtGrad)" stroke="rgba(255,255,255,.45)" stroke-width="2" data-mockup-color-target />
                            <path d="M142 40 Q170 74 198 40" fill="none" stroke="#c6dce5" stroke-width="12" stroke-linecap="round"/>
                            <rect x="92" y="102" width="156" height="86" rx="22" fill="url(#printGrad)"/>
                            <text id="tshirtDesignText" x="170" y="151" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                        </svg>
                        <div class="mockup-caption">{{ app()->getLocale() === 'ar' ? 'معاينة تيشيرت بالاسم' : 'T-shirt preview' }}</div>
                    </div>

                    <div class="mockup-view mug-preview" id="mugPreview">
                        <svg class="svg-mockup" viewBox="0 0 320 260" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="mugGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--mockup-alt)"/>
                                    <stop offset="100%" stop-color="var(--mockup-main)"/>
                                </linearGradient>
                                <linearGradient id="mugPrintGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#0a1722"/>
                                    <stop offset="100%" stop-color="#2e8db0"/>
                                </linearGradient>
                            </defs>
                            <rect x="70" y="58" width="150" height="120" rx="20" fill="url(#mugGrad)" stroke="rgba(255,255,255,.48)" stroke-width="2" data-mockup-color-target />
                            <path d="M220 88 Q258 90 258 118 Q258 146 220 148" fill="none" stroke="url(#mugGrad)" stroke-width="18" stroke-linecap="round"/>
                            <rect x="90" y="80" width="108" height="74" rx="16" fill="url(#mugPrintGrad)"/>
                            <text id="mugDesignText" x="144" y="118" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="22" fill="#ffffff">H TO O</text>
                        </svg>
                        <div class="mockup-caption">{{ app()->getLocale() === 'ar' ? 'معاينة كوب بالاسم' : 'Mug preview' }}</div>
                    </div>

                    <div class="mockup-view card-preview" id="businessCardPreview">
                        <svg class="svg-mockup" viewBox="0 0 340 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="cardBg" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#102130"/>
                                    <stop offset="58%" stop-color="var(--mockup-dark)"/>
                                    <stop offset="100%" stop-color="#295f7c"/>
                                </linearGradient>
                                <linearGradient id="cardAccent" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--mockup-alt)"/>
                                    <stop offset="100%" stop-color="var(--mockup-main)"/>
                                </linearGradient>
                            </defs>
                            <rect x="52" y="46" width="236" height="146" rx="24" fill="url(#cardBg)" stroke="rgba(122,229,239,.18)" stroke-width="2"/>
                            <rect x="72" y="74" width="126" height="46" rx="16" fill="url(#cardAccent)" opacity=".22"/>
                            <text id="cardDesignText" x="82" y="102" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                            <text x="82" y="148" font-size="12" fill="rgba(255,255,255,.68)" font-family="Outfit, Alexandria, sans-serif">BUSINESS CARD</text>
                        </svg>
                        <div class="mockup-caption">{{ app()->getLocale() === 'ar' ? 'معاينة كارت شخصي بالاسم' : 'Card preview' }}</div>
                    </div>

                    <div class="mockup-view pad-preview" id="mousePadPreview">
                        <svg class="svg-mockup" viewBox="0 0 360 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="padBg" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#0a161f"/>
                                    <stop offset="100%" stop-color="#17384b"/>
                                </linearGradient>
                                <linearGradient id="padAccent" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--mockup-alt)"/>
                                    <stop offset="100%" stop-color="var(--mockup-main)"/>
                                </linearGradient>
                            </defs>
                            <g transform="translate(42,30) skewX(-18)">
                                <rect x="40" y="56" width="220" height="116" rx="26" fill="url(#padBg)" stroke="rgba(122,229,239,.14)" stroke-width="2"/>
                                <rect x="58" y="74" width="184" height="80" rx="20" fill="url(#padAccent)" opacity=".22"/>
                                <rect x="64" y="80" width="172" height="68" rx="18" fill="rgba(7,16,24,.72)"/>
                                <text id="padDesignText" x="150" y="121" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="24" fill="#ffffff">H TO O</text>
                            </g>
                        </svg>
                        <div class="mockup-caption">{{ app()->getLocale() === 'ar' ? 'معاينة بادة ماوس بالاسم' : 'Mouse pad preview' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section xp-section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">SERVICES</div>
            <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'الخدمات اللي بنقدمها' : 'Our Services' }}</h2>
            <p class="section-text">{{ app()->getLocale() === 'ar' ? 'خدمات مناسبة للشركات والمحلات والمشاريع الجديدة.' : 'Services for businesses, stores, and startups.' }}</p>
        </div>
        <div class="grid-3">
            @foreach(array_slice($services, 0, 6) as $service)
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
