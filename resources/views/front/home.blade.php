@extends('layouts.app')

@section('content')
<style>
    .neo-hero{
        position: relative;
        padding: 88px 0 54px;
        overflow: clip;
    }

    .neo-hero::before,
    .neo-hero::after{
        content: "";
        position: absolute;
        width: 42vw;
        height: 42vw;
        border-radius: 50%;
        filter: blur(34px);
        z-index: 0;
        opacity: .45;
        pointer-events: none;
    }

    .neo-hero::before{
        background: radial-gradient(circle, rgba(122,229,239,.42), transparent 62%);
        top: -18vw;
        inset-inline-end: -12vw;
        animation: orbFloat 12s ease-in-out infinite;
    }

    .neo-hero::after{
        background: radial-gradient(circle, rgba(94,120,255,.35), transparent 64%);
        bottom: -18vw;
        inset-inline-start: -12vw;
        animation: orbFloat 14s ease-in-out infinite reverse;
    }

    .neo-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:24px;position:relative;z-index:1}

    .neo-intro{padding:42px;border-radius:34px;position:relative;overflow:hidden}

    .neo-intro::after{
        content:"";
        position:absolute;
        inset:0;
        background:
            linear-gradient(115deg, rgba(255,255,255,.08), transparent 30%),
            radial-gradient(circle at 75% 32%, rgba(122,229,239,.18), transparent 45%);
        pointer-events:none;
    }

    .neo-title{font-size:clamp(38px,5vw,72px);line-height:1.02;font-weight:900;letter-spacing:-1.4px;margin-bottom:14px}
    .neo-title span{
        display:block;
        background:linear-gradient(90deg,#ffffff 0%, #7ae5ef 45%, #9aa9ff 100%);
        -webkit-background-clip:text;
        -webkit-text-fill-color:transparent;
        background-clip:text;
    }

    .neo-sub{font-size:18px;line-height:1.95;color:var(--muted);max-width:760px;margin-bottom:24px}

    .creative-badges{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:24px}
    .creative-badge{
        min-height:40px;padding:0 14px;border-radius:999px;font-size:12px;font-weight:900;
        display:inline-flex;align-items:center;background:rgba(122,229,239,.1);border:1px solid var(--line);
    }

    .scene-card{padding:24px;border-radius:34px;position:relative;overflow:hidden;min-height:460px}
    .scene-canvas{position:absolute;inset:0;display:grid;place-items:center}

    .ring{position:absolute;border-radius:50%;border:1px solid rgba(122,229,239,.22);animation:ringPulse 5s linear infinite}
    .ring.r1{width:190px;height:190px}
    .ring.r2{width:280px;height:280px;animation-delay:1s}
    .ring.r3{width:370px;height:370px;animation-delay:2s}

    .ad-cube{
        width:min(310px,84%);aspect-ratio:1/1;position:relative;transform-style:preserve-3d;
        animation:cubeSpin 14s linear infinite;
    }

    .face{
        position:absolute;inset:0;border-radius:24px;padding:22px;
        background:linear-gradient(145deg, rgba(14,36,50,.95), rgba(7,18,26,.9));
        border:1px solid rgba(122,229,239,.25);
        box-shadow:0 25px 55px rgba(0,0,0,.28);
        display:flex;flex-direction:column;justify-content:space-between;
    }

    .face h4{font-size:22px;font-weight:900}
    .face p{font-size:14px;line-height:1.8;color:var(--muted)}
    .face .tag{font-size:12px;color:var(--primary);font-weight:800}

    .face.one{transform:translateZ(120px)}
    .face.two{transform:rotateY(90deg) translateZ(120px)}
    .face.three{transform:rotateY(180deg) translateZ(120px)}
    .face.four{transform:rotateY(-90deg) translateZ(120px)}

    .xp-section{padding-top:26px}
    .xp-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}

    .xp-item{padding:24px;border-radius:24px;position:relative;overflow:hidden}
    .xp-item::before{content:"";position:absolute;inset-inline-start:-36%;top:-40%;width:70%;height:180%;background:linear-gradient(120deg,transparent,rgba(255,255,255,.2),transparent);transform:rotate(20deg);animation:sweep 5.5s linear infinite}
    .xp-item h3{font-size:22px;margin-bottom:9px}
    .xp-item p{color:var(--muted);line-height:1.9;font-size:15px}

    .process-track{margin-top:18px;display:grid;gap:14px}
    .process-step{padding:18px 20px;border-radius:20px;background:rgba(255,255,255,.03);border:1px solid var(--line);display:flex;align-items:center;gap:14px}
    .step-no{width:40px;height:40px;border-radius:14px;display:grid;place-items:center;background:linear-gradient(135deg,var(--primary),#8db9ff);color:#071018;font-weight:900;flex-shrink:0}

    .portfolio-single{margin-top:16px;position:relative;overflow:hidden;border-radius:28px;border:1px solid var(--line);box-shadow:var(--shadow)}
    .portfolio-single img{width:100%;height:420px;object-fit:cover;transform:scale(1.03);transition:transform .6s ease}
    .portfolio-single:hover img{transform:scale(1.08)}

    @keyframes cubeSpin{from{transform:rotateX(-12deg) rotateY(0deg)}to{transform:rotateX(-12deg) rotateY(360deg)}}
    @keyframes ringPulse{0%{opacity:.35;transform:scale(.94)}50%{opacity:.7;transform:scale(1.02)}100%{opacity:.35;transform:scale(.94)}}
    @keyframes orbFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-40px)}}
    @keyframes sweep{0%{transform:translateX(-210%) rotate(20deg)}100%{transform:translateX(310%) rotate(20deg)}}

    @media (max-width: 992px){
        .neo-grid,.xp-grid{grid-template-columns:1fr}
        .scene-card{min-height:390px}
        .portfolio-single img{height:300px}
    }
</style>

<section class="neo-hero">
    <div class="container neo-grid">
        <div class="glass neo-intro">
            <div class="eyebrow">{{ app()->getLocale() === 'ar' ? 'هوية بصرية خارقة · طباعة · إعلانات' : 'Immersive Branding · Printing · Advertising' }}</div>

            <h1 class="neo-title">
                @if(app()->getLocale() === 'ar')
                    نعيد تعريف شكل
                    <span>مواقع الطباعة والإعلان</span>
                @else
                    We redefine how
                    <span>printing & advertising websites feel</span>
                @endif
            </h1>

            <p class="neo-sub">
                {{ app()->getLocale() === 'ar'
                    ? 'تجربة بصرية جريئة، حركة ديناميكية، وهوية تصميمية تبهر العميل من أول ثانية. بنبني حضور رقمي يجعل علامتك تبدو أقوى، أكثر فخامة، وأكثر إقناعًا.'
                    : 'A bold visual experience with kinetic motion and a premium design language that impresses from the first second and elevates your brand perception.' }}
            </p>

            <div class="creative-badges">
                <span class="creative-badge">{{ app()->getLocale() === 'ar' ? '3D Motion UI' : '3D Motion UI' }}</span>
                <span class="creative-badge">{{ app()->getLocale() === 'ar' ? 'تفاعل حي' : 'Live Interaction' }}</span>
                <span class="creative-badge">{{ app()->getLocale() === 'ar' ? 'تأثيرات إبهار' : 'Wow Effects' }}</span>
            </div>

            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">{{ app()->getLocale() === 'ar' ? 'ابدأ مشروعك الآن' : 'Start Your Project' }}</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'شاهد البورتفليو' : 'View Portfolio' }}</a>
            </div>
        </div>

        <div class="glass scene-card">
            <div class="scene-canvas">
                <div class="ring r1"></div>
                <div class="ring r2"></div>
                <div class="ring r3"></div>

                <div class="ad-cube" aria-hidden="true">
                    <div class="face one">
                        <span class="tag">PRINT IMPACT</span>
                        <h4>{{ app()->getLocale() === 'ar' ? 'حملات مطبوعة' : 'Print Campaigns' }}</h4>
                        <p>{{ app()->getLocale() === 'ar' ? 'تصميم وتنفيذ بخامة تعكس قيمة البراند.' : 'Design + production with premium finishing.' }}</p>
                    </div>
                    <div class="face two">
                        <span class="tag">VISUAL IDENTITY</span>
                        <h4>{{ app()->getLocale() === 'ar' ? 'هوية متكاملة' : 'Full Branding' }}</h4>
                        <p>{{ app()->getLocale() === 'ar' ? 'لغة بصرية مميزة لا تُنسى.' : 'A memorable, signature visual language.' }}</p>
                    </div>
                    <div class="face three">
                        <span class="tag">STORE PRESENCE</span>
                        <h4>{{ app()->getLocale() === 'ar' ? 'لافتات وإعلانات' : 'Signage & Ads' }}</h4>
                        <p>{{ app()->getLocale() === 'ar' ? 'حلول تشد العين وتدفع العميل للشراء.' : 'Eye-catching executions that drive conversion.' }}</p>
                    </div>
                    <div class="face four">
                        <span class="tag">WOW EXPERIENCE</span>
                        <h4>{{ app()->getLocale() === 'ar' ? 'تجربة تبهر' : 'Stunning Experience' }}</h4>
                        <p>{{ app()->getLocale() === 'ar' ? 'ديزاين مختلف يفضل في ذاكرة كل زائر.' : 'A unique design that stays in memory.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section xp-section">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">NEXT LEVEL EXPERIENCE</div>
            <h2 class="section-title large">
                {{ app()->getLocale() === 'ar' ? 'حاجات كريتيف تلفت العين وتشد العملاء' : 'Creative experiences that capture attention and convert' }}
            </h2>
        </div>

        <div class="xp-grid">
            <article class="glass xp-item">
                <h3>{{ app()->getLocale() === 'ar' ? 'أنيميشن سينمائي' : 'Cinematic Motion' }}</h3>
                <p>{{ app()->getLocale() === 'ar' ? 'حركة سلسة بتدي عمق للمحتوى وتخلي التفاعل ممتع ومبهر.' : 'Smooth motion adds depth and premium interaction.' }}</p>
            </article>
            <article class="glass xp-item">
                <h3>{{ app()->getLocale() === 'ar' ? 'هوية متطورة' : 'Advanced Identity' }}</h3>
                <p>{{ app()->getLocale() === 'ar' ? 'ألوان، إضاءة، وخطوط تعبر عن شخصية قوية لشركة طباعة وإعلانات.' : 'Color, glow, and typography tuned for a printing/advertising brand.' }}</p>
            </article>
            <article class="glass xp-item">
                <h3>{{ app()->getLocale() === 'ar' ? 'تصميم يبيع' : 'Design That Sells' }}</h3>
                <p>{{ app()->getLocale() === 'ar' ? 'كل بلوك مصمم عشان يزود الثقة ويقرب العميل من خطوة التواصل.' : 'Every block is crafted to build trust and trigger action.' }}</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="creative-lab">
            <div class="glass creative-panel">
                <div class="section-kicker">WORKFLOW</div>
                <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'رحلة تنفيذ سريعة واحترافية' : 'A fast, premium delivery workflow' }}</h2>

                <div class="process-track">
                    <div class="process-step"><div class="step-no">1</div><p>{{ app()->getLocale() === 'ar' ? 'استلام الفكرة وتحويلها كونسبت بصري.' : 'Brief intake and concept translation.' }}</p></div>
                    <div class="process-step"><div class="step-no">2</div><p>{{ app()->getLocale() === 'ar' ? 'تصميمات إبداعية متعددة لاختيار الأفضل.' : 'Multiple creative directions to pick from.' }}</p></div>
                    <div class="process-step"><div class="step-no">3</div><p>{{ app()->getLocale() === 'ar' ? 'تنفيذ وطباعة نهائية بأعلى جودة.' : 'High-end production and print execution.' }}</p></div>
                </div>
            </div>

            <div class="glass creative-panel">
                <div class="section-kicker">FEATURED PORTFOLIO</div>
                <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'العمل المميز الحالي' : 'Current Featured Work' }}</h2>
                <div class="portfolio-single">
                    <img src="https://imgg.io/images/2026/04/06/ebe97d2784bb673a12ca5430b1b354d6.jpg" alt="featured portfolio work">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
