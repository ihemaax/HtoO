@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="glass hero-card" data-parallax="0.03">
            <div class="eyebrow">
                {{ app()->getLocale() === 'ar' ? 'هوية بصرية · طباعة · دعاية' : 'Branding · Printing · Advertising' }}
            </div>

            <h1 class="hero-title">
                @if(app()->getLocale() === 'ar')
                    نصنع حضورًا بصريًا
                    <span class="accent">يليق بقيمة علامتك</span>
                @else
                    We craft a visual identity
                    <span class="accent">worthy of your brand</span>
                @endif
            </h1>

            <p class="hero-text">
                {{ app()->getLocale() === 'ar'
                    ? 'نقدّم حلولًا احترافية في الطباعة والدعاية والتصميم، بأسلوب راقٍ يركّز على جودة الإخراج، قوة الانطباع، وتقديم أعمال تساعد نشاطك على الظهور بشكل أكثر ثقة وجاذبية.'
                    : 'We provide refined printing, branding, and design solutions focused on premium execution, stronger first impressions, and a polished business presence.' }}
            </p>

            <div class="hero-actions">
                <a href="{{ route('services') }}" class="btn btn-primary">
                    {{ app()->getLocale() === 'ar' ? 'استعرض خدماتنا' : 'Explore Our Services' }}
                </a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">
                    {{ app()->getLocale() === 'ar' ? 'شاهد نماذج الأعمال' : 'View Portfolio' }}
                </a>
            </div>
        </div>

        <div class="glass hero-visual" data-parallax="0.015">
            <div class="hero-stack">
                <div class="hero-logo-box">
                    <img src="{{ $logoUrl }}" alt="H to O">
                </div>

                <div class="printer-card">
                    <div class="printer-topline">
                        <span>{{ app()->getLocale() === 'ar' ? 'إخراج بصري راقٍ' : 'Refined Visual Output' }}</span>
                        <span>{{ app()->getLocale() === 'ar' ? 'تنفيذ احترافي' : 'Professional Execution' }}</span>
                    </div>

                    <div class="printer-stage">
                        <div class="printer">
                            <div class="printer-head"></div>
                            <div class="paper"></div>
                            <div class="paper-mark"></div>
                            <div class="printer-body">
                                <div class="printer-slot"></div>
                            </div>
                            <div class="printer-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="creative-lab">
            <div class="creative-panel">
                <div class="section-kicker">CREATIVE MOCKUP LAB</div>
                <h2 class="section-title large">
                    {{ app()->getLocale() === 'ar' ? 'حوّل الاسم إلى معاينة أقرب للواقع' : 'Turn any name into a more realistic mockup' }}
                </h2>
                <p class="section-text">
                    {{ app()->getLocale() === 'ar'
                        ? 'اكتب الاسم أو الكلمة، اختر المنتج المناسب، ثم حدّد اللون المفضل. عند الضغط على زر الطباعة ستظهر معاينة أجمل وأكثر واقعية على التيشيرت أو المج أو الكارت أو الماوس باد.'
                        : 'Type a name or phrase, choose the product, then select a color. Press print to preview a cleaner and more realistic mockup on a T-shirt, mug, card, or mouse pad.' }}
                </p>

                <div class="mockup-tabs">
                    <button class="mockup-tab active" type="button" data-mockup="tshirt">
                        {{ app()->getLocale() === 'ar' ? 'تيشيرت' : 'T-shirt' }}
                    </button>
                    <button class="mockup-tab" type="button" data-mockup="mug">
                        {{ app()->getLocale() === 'ar' ? 'مج' : 'Mug' }}
                    </button>
                    <button class="mockup-tab" type="button" data-mockup="card">
                        {{ app()->getLocale() === 'ar' ? 'كارت' : 'Card' }}
                    </button>
                    <button class="mockup-tab" type="button" data-mockup="pad">
                        {{ app()->getLocale() === 'ar' ? 'ماوس باد' : 'Mouse Pad' }}
                    </button>
                </div>

                <div class="creative-form">
                    <input
                        id="mockupNameInput"
                        class="creative-input"
                        type="text"
                        maxlength="22"
                        placeholder="{{ app()->getLocale() === 'ar' ? 'اكتب الاسم أو الكلمة هنا' : 'Type a name or word here' }}"
                    >

                    <div class="color-picker">
                        <button type="button" class="color-chip active" data-color="#d6f1fb" data-color2="#ffffff" style="background:linear-gradient(135deg,#ffffff,#d6f1fb)"></button>
                        <button type="button" class="color-chip" data-color="#1a1d24" data-color2="#414752" style="background:linear-gradient(135deg,#0f1014,#474d58)"></button>
                        <button type="button" class="color-chip" data-color="#12375c" data-color2="#3f7cb3" style="background:linear-gradient(135deg,#12375c,#3f7cb3)"></button>
                        <button type="button" class="color-chip" data-color="#6e1730" data-color2="#c53a63" style="background:linear-gradient(135deg,#6e1730,#c53a63)"></button>
                        <button type="button" class="color-chip" data-color="#15543f" data-color2="#33a57a" style="background:linear-gradient(135deg,#15543f,#33a57a)"></button>
                    </div>

                    <button id="printMockupBtn" class="btn btn-primary" type="button">
                        {{ app()->getLocale() === 'ar' ? 'اطبع المعاينة الآن' : 'Print the preview now' }}
                    </button>
                </div>
            </div>

            <div class="creative-panel mockup-stage">
                <div class="mockup-printer-wrap">
                    <div class="mockup-printer">
                        <div class="mockup-printer-head"></div>
                        <div class="mockup-printer-body">
                            <div class="mockup-printer-slot"></div>
                        </div>
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
                            <rect x="96" y="106" width="148" height="78" rx="18" fill="transparent" stroke="rgba(255,255,255,.08)"/>
                            <text id="tshirtDesignText" x="170" y="151" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                            <ellipse cx="170" cy="286" rx="78" ry="12" fill="rgba(0,0,0,.18)"/>
                        </svg>
                        <div class="mockup-caption">
                            {{ app()->getLocale() === 'ar' ? 'معاينة تيشيرت بطابع أنظف وأكثر واقعية' : 'Cleaner, more realistic T-shirt preview' }}
                        </div>
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

                            <ellipse cx="155" cy="210" rx="88" ry="16" fill="rgba(0,0,0,.16)"/>
                            <rect x="70" y="58" width="150" height="120" rx="20" fill="url(#mugGrad)" stroke="rgba(255,255,255,.48)" stroke-width="2" data-mockup-color-target />
                            <path d="M220 88 Q258 90 258 118 Q258 146 220 148" fill="none" stroke="url(#mugGrad)" stroke-width="18" stroke-linecap="round"/>
                            <rect x="90" y="80" width="108" height="74" rx="16" fill="url(#mugPrintGrad)"/>
                            <text id="mugDesignText" x="144" y="118" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="22" fill="#ffffff">H TO O</text>
                            <path d="M88 84 h12" stroke="rgba(255,255,255,.18)" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        <div class="mockup-caption">
                            {{ app()->getLocale() === 'ar' ? 'معاينة مج أنيقة بطباعة مخصصة' : 'Elegant custom mug preview' }}
                        </div>
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

                            <ellipse cx="170" cy="212" rx="88" ry="14" fill="rgba(0,0,0,.16)"/>
                            <rect x="52" y="46" width="236" height="146" rx="24" fill="url(#cardBg)" stroke="rgba(122,229,239,.18)" stroke-width="2"/>
                            <circle cx="256" cy="78" r="26" fill="url(#cardAccent)" opacity=".18"/>
                            <rect x="72" y="74" width="126" height="46" rx="16" fill="url(#cardAccent)" opacity=".22"/>
                            <text id="cardDesignText" x="82" y="102" class="svg-design-text" font-size="26" fill="#ffffff">H TO O</text>
                            <text x="82" y="148" font-size="12" fill="rgba(255,255,255,.68)" font-family="Outfit, Alexandria, sans-serif">PREMIUM BUSINESS CARD</text>
                            <rect x="212" y="130" width="48" height="10" rx="5" fill="url(#cardAccent)" opacity=".65"/>
                        </svg>
                        <div class="mockup-caption">
                            {{ app()->getLocale() === 'ar' ? 'معاينة كارت بإخراج بصري فاخر' : 'Premium business card preview' }}
                        </div>
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

                            <ellipse cx="182" cy="194" rx="110" ry="20" fill="rgba(0,0,0,.16)"/>
                            <g transform="translate(42,30) skewX(-18)">
                                <rect x="40" y="56" width="220" height="116" rx="26" fill="url(#padBg)" stroke="rgba(122,229,239,.14)" stroke-width="2"/>
                                <rect x="58" y="74" width="184" height="80" rx="20" fill="url(#padAccent)" opacity=".22"/>
                                <rect x="64" y="80" width="172" height="68" rx="18" fill="rgba(7,16,24,.72)"/>
                                <text id="padDesignText" x="150" y="121" text-anchor="middle" dominant-baseline="middle" class="svg-design-text" font-size="24" fill="#ffffff">H TO O</text>
                            </g>
                        </svg>
                        <div class="mockup-caption">
                            {{ app()->getLocale() === 'ar' ? 'معاينة ماوس باد بشكل حديث وأكثر إقناعًا' : 'Modern and more convincing mouse pad preview' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">OUR SERVICES</div>
            <h2 class="section-title large">
                {{ app()->getLocale() === 'ar' ? 'خدمات متكاملة ترفع قيمة ظهورك' : 'Integrated services that elevate your presence' }}
            </h2>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'نوفر باقة متكاملة من خدمات الطباعة والتصميم والدعاية، بما يساعدك على تقديم نشاطك بصورة أنيقة وواضحة ومقنعة أمام جمهورك.'
                    : 'We offer a complete range of printing, design, and branding services that help your business appear more polished, clear, and compelling.' }}
            </p>
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

<section class="section">
    <div class="container">
        <div class="glass about-wrap">
            <div class="section-head">
                <div class="section-kicker">WHY H TO O</div>
                <h2 class="section-title">
                    {{ app()->getLocale() === 'ar' ? 'نقدّم تجربة شكلها احترافي ونتيجتها مقنعة' : 'A professional look with convincing results' }}
                </h2>
                <p class="section-text">
                    {{ app()->getLocale() === 'ar'
                        ? 'لسنا فقط جهة تنفيذ، بل شريك يساعدك على إخراج فكرتك بصورة أقوى وأكثر أناقة. نهتم بالتفاصيل، بالتناسق البصري، وبأن تكون النتيجة النهائية جديرة بأن تمثل اسمك.'
                        : 'We are not only a production provider, but a creative partner focused on visual consistency, elegant details, and final outputs worthy of representing your brand.' }}
                </p>
            </div>

            <div class="features">
                <div class="feature">{{ app()->getLocale() === 'ar' ? 'هوية بصرية أكثر أناقة واتزانًا' : 'More elegant visual identity' }}</div>
                <div class="feature">{{ app()->getLocale() === 'ar' ? 'تشطيب نظيف وجودة واضحة' : 'Clean finishing and visible quality' }}</div>
                <div class="feature">{{ app()->getLocale() === 'ar' ? 'حلول مناسبة للأفراد والشركات' : 'Suitable for individuals and businesses' }}</div>
                <div class="feature">{{ app()->getLocale() === 'ar' ? 'أسلوب عرض يساعد على الإقناع' : 'Presentation that helps conversion' }}</div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">CLIENT VOICES</div>
            <h2 class="section-title large">
                {{ app()->getLocale() === 'ar' ? 'آراء عملاء بصياغة راقية' : 'Premium client testimonials' }}
            </h2>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'طريقة عرض أنيقة تمنح الزائر إحساسًا بالثقة، وتوضح أن الخدمة لا تعتمد فقط على الشكل، بل على الانطباع الجيد والنتيجة النهائية أيضًا.'
                    : 'A polished testimonial section that builds trust and shows that the experience is defined by both visual quality and final satisfaction.' }}
            </p>
        </div>

        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">
                    {{ app()->getLocale() === 'ar'
                        ? 'التعامل كان راقي جدًا، والنتيجة النهائية ظهرت بشكل أفضل مما كنت أتوقع. جودة الطباعة والتفاصيل فعلًا فرقت مع البراند.'
                        : 'The experience felt premium from start to finish, and the final print quality exceeded expectations. The visual finish really elevated the brand.' }}
                </div>
                <div class="testimonial-user">
                    <div class="testimonial-avatar">A</div>
                    <div class="testimonial-meta">
                        <strong>{{ app()->getLocale() === 'ar' ? 'أحمد سامي' : 'Ahmed Samy' }}</strong>
                        <span>{{ app()->getLocale() === 'ar' ? 'هوية تجارية' : 'Brand Identity Project' }}</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">
                    {{ app()->getLocale() === 'ar'
                        ? 'أكثر شيء أعجبني هو إحساس الاحتراف في طريقة العرض نفسها. قبل التنفيذ كنت شايف الفكرة، وبعد التنفيذ حسيت أنها أصبحت أقوى وأفخم.'
                        : 'What stood out most was the professionalism in presentation. Before production I liked the idea, after production it looked stronger and more premium.' }}
                </div>
                <div class="testimonial-user">
                    <div class="testimonial-avatar">M</div>
                    <div class="testimonial-meta">
                        <strong>{{ app()->getLocale() === 'ar' ? 'منة خالد' : 'Mena Khaled' }}</strong>
                        <span>{{ app()->getLocale() === 'ar' ? 'مطبوعات دعائية' : 'Promotional Printing' }}</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">
                    {{ app()->getLocale() === 'ar'
                        ? 'النتيجة النهائية كانت مرتبة جدًا، والخامات والتشطيب أوضحوا أن في اهتمام حقيقي بكل تفصيلة. أكيد سأكرر التجربة.'
                        : 'The final result was beautifully polished. The materials and finishing clearly showed real care in every detail. I would absolutely come back again.' }}
                </div>
                <div class="testimonial-user">
                    <div class="testimonial-avatar">S</div>
                    <div class="testimonial-meta">
                        <strong>{{ app()->getLocale() === 'ar' ? 'سارة مجدي' : 'Sara Magdy' }}</strong>
                        <span>{{ app()->getLocale() === 'ar' ? 'تصميم وطباعة' : 'Design & Print' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">PORTFOLIO</div>
            <h2 class="section-title">
                {{ app()->getLocale() === 'ar' ? 'نماذج أعمال تعكس مستوى التنفيذ' : 'Selected work that reflects execution quality' }}
            </h2>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'مجموعة من الأعمال المختارة لإظهار مستوى الإخراج النهائي، جودة الترتيب، والاهتمام الحقيقي بالتفاصيل البصرية.'
                    : 'A curated selection of projects that highlight finishing quality, thoughtful presentation, and real attention to visual detail.' }}
            </p>
        </div>

        <div class="grid-2">
            @foreach($works as $work)
                <div class="card work-card">
                    <img src="{{ $work['image'] }}" alt="work">
                    <div class="work-caption">
                        <strong>{{ app()->getLocale() === 'ar' ? $work['title_ar'] : $work['title_en'] }}</strong>
                        <span>
                            {{ app()->getLocale() === 'ar'
                                ? 'تنفيذ أنيق يركّز على الشكل النهائي والانطباع البصري القوي.'
                                : 'An elegant execution focused on premium final appearance and stronger visual impact.' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="glass contact-box">
            <div class="section-kicker">CONTACT</div>
            <h2 class="section-title">
                {{ app()->getLocale() === 'ar' ? 'ابدأ الآن ودعنا نحول فكرتك إلى شكل يستحق الانتباه' : 'Let us turn your idea into something worth noticing' }}
            </h2>
            <p class="section-text">
                {{ app()->getLocale() === 'ar'
                    ? 'تواصل معنا مباشرة عبر واتساب، وشاركنا فكرتك أو نوع الخدمة التي تحتاجها، وسنساعدك في الوصول إلى الشكل الأنسب لهوية نشاطك.'
                    : 'Contact us directly on WhatsApp and share your idea or project type. We will help you shape it into a polished visual result that suits your brand.' }}
            </p>

            <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" class="btn btn-primary">
                {{ app()->getLocale() === 'ar' ? 'ابدأ المحادثة الآن' : 'Start the conversation now' }}
            </a>
        </div>
    </div>
</section>
@endsection