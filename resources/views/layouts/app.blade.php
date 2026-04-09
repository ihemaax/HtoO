<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteName ?? __('site.site_name') }}</title>
    <meta name="description" content="H to O Advertising, Printing & Branding Studio">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;500;600;700;800;900&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-1:#070810;
            --bg-2:#11172a;
            --surface:#121b31;
            --surface-soft:#16203a;
            --card:#10192d;
            --line:rgba(255,255,255,.12);
            --line-strong:rgba(255,255,255,.22);
            --text:#f6f8ff;
            --muted:#aebad1;
            --primary:#7d9bff;
            --primary-2:#4de0ff;
            --accent:#8ff5be;
            --dark:#0a1120;
            --shadow:0 24px 55px rgba(0,0,0,.36);
            --radius-xl:34px;
            --radius-lg:24px;
            --radius-md:16px;
            --container:min(1240px, 92%);
            --mockup-main:#dae9ff;
            --mockup-alt:#f9fdff;
            --mockup-dark:#10213d;
        }

        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{
            min-height:100vh;
            overflow-x:hidden;
            color:var(--text);
            font-family:{{ app()->getLocale() === 'ar' ? "'Alexandria', sans-serif" : "'Manrope', 'Alexandria', sans-serif" }};
            background:
                radial-gradient(circle at 10% 10%, rgba(77,224,255,.16), transparent 28%),
                radial-gradient(circle at 84% 0%, rgba(125,155,255,.2), transparent 26%),
                linear-gradient(145deg, #05070f 0%, #0d1526 42%, #0a1020 100%);
            position:relative;
        }

        body::before{
            content:"";
            position:fixed;
            inset:0;
            pointer-events:none;
            background-image:
                linear-gradient(rgba(255,255,255,.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.02) 1px, transparent 1px);
            background-size:58px 58px;
            mask-image:linear-gradient(to bottom, rgba(255,255,255,.16), transparent 75%);
        }

        a{text-decoration:none;color:inherit}
        img{display:block;max-width:100%}
        .container{width:var(--container);margin-inline:auto}

        .section{padding:88px 0}
        .section-head{margin-bottom:30px}
        .section-kicker{
            display:inline-flex;
            align-items:center;
            gap:8px;
            min-height:34px;
            padding:0 14px;
            margin-bottom:12px;
            border:1px solid var(--line);
            border-radius:999px;
            background:rgba(255,255,255,.03);
            color:var(--primary-2);
            font-size:12px;
            font-weight:800;
            letter-spacing:.4px;
        }
        .section-title{font-size:clamp(30px,4.1vw,50px);line-height:1.1;font-weight:900;letter-spacing:-.8px;margin-bottom:12px}
        .section-text{max-width:760px;color:var(--muted);font-size:17px;line-height:1.85}

        .glass{
            background:linear-gradient(165deg, rgba(22,32,58,.84), rgba(12,20,37,.86));
            border:1px solid var(--line);
            box-shadow:var(--shadow);
            backdrop-filter:blur(14px);
        }

        .btn{
            min-height:52px;
            padding:0 24px;
            border-radius:16px;
            border:1px solid transparent;
            font-weight:800;
            font-size:15px;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            transition:.25s ease;
            cursor:pointer;
            font-family:inherit;
        }
        .btn:hover{transform:translateY(-2px)}
        .btn-primary{
            color:var(--dark);
            background:linear-gradient(120deg, #9fb2ff, #76f0ff 60%, #ecfffe);
            box-shadow:0 14px 28px rgba(77,224,255,.2);
        }
        .btn-outline{
            border-color:var(--line-strong);
            background:rgba(255,255,255,.03);
            color:var(--text);
        }
        .btn-whatsapp{background:linear-gradient(120deg, #4edc84, #34c56c);color:#082115}

        .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
        .grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}

        .card{
            background:linear-gradient(165deg, rgba(19,30,55,.9), rgba(12,19,35,.94));
            border:1px solid var(--line);
            border-radius:22px;
            padding:24px;
            box-shadow:var(--shadow);
            transition:.25s ease;
            position:relative;
            overflow:hidden;
        }
        .card:hover{transform:translateY(-6px);border-color:var(--line-strong)}
        .card::before{
            content:"";
            position:absolute;
            width:120px;
            height:120px;
            right:-40px;
            top:-40px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(77,224,255,.2), transparent 70%);
            pointer-events:none;
        }

        .navbar{position:sticky;top:0;z-index:1500;background:rgba(7,12,24,.78);backdrop-filter:blur(14px);border-bottom:1px solid var(--line)}
        .nav-inner{min-height:86px;display:flex;align-items:center;justify-content:space-between;gap:18px}
        .brand{display:flex;align-items:center;gap:12px;min-width:0}
        .brand-logo{width:58px;height:58px;border-radius:16px;overflow:hidden;border:1px solid var(--line);box-shadow:var(--shadow)}
        .brand-text strong{display:block;font-size:20px;font-weight:900}
        .brand-text span{display:block;color:var(--muted);font-size:12px;margin-top:3px}
        .nav-links{display:flex;align-items:center;gap:24px}
        .nav-links a{font-size:14px;font-weight:800;color:var(--muted);position:relative;transition:.2s ease}
        .nav-links a::after{content:"";position:absolute;left:0;bottom:-7px;width:0;height:2px;border-radius:999px;background:linear-gradient(90deg,var(--primary),var(--primary-2));transition:.2s ease}
        .nav-links a.active,.nav-links a:hover{color:var(--text)}
        .nav-links a.active::after,.nav-links a:hover::after{width:100%}

        .nav-actions{display:flex;align-items:center;gap:12px}
        .lang-switch{display:flex;align-items:center;padding:4px;border-radius:999px;border:1px solid var(--line);background:rgba(255,255,255,.04);box-shadow:inset 0 0 0 1px rgba(255,255,255,.02)}
        .lang-btn{min-width:68px;height:36px;padding:0 14px;border-radius:999px;border:1px solid transparent;font-size:12px;font-weight:800;letter-spacing:.4px;color:var(--muted);transition:.2s ease}
        .lang-btn.active{background:linear-gradient(120deg, #9fb2ff, #76f0ff);color:var(--dark);box-shadow:0 8px 18px rgba(77,224,255,.22)}
        .lang-btn:not(.active):hover{color:var(--text)}

        .menu-toggle{display:none;width:46px;height:46px;border-radius:14px;border:1px solid var(--line);background:rgba(255,255,255,.03);position:relative}
        .menu-toggle span{position:absolute;width:20px;height:2px;border-radius:99px;background:var(--text);transition:.25s ease}
        .menu-toggle span:nth-child(1){transform:translateY(-6px)}
        .menu-toggle span:nth-child(3){transform:translateY(6px)}
        .menu-toggle.active span:nth-child(1){transform:rotate(45deg)}
        .menu-toggle.active span:nth-child(2){opacity:0}
        .menu-toggle.active span:nth-child(3){transform:rotate(-45deg)}

        .mobile-overlay{position:fixed;inset:0;background:rgba(0,0,0,.48);z-index:1400;opacity:0;visibility:hidden;transition:.22s}
        .mobile-overlay.show{opacity:1;visibility:visible}
        .mobile-menu{position:fixed;top:88px;left:12px;right:12px;z-index:1450;padding:16px;background:rgba(13,20,37,.96);border:1px solid var(--line-strong);border-radius:22px;opacity:0;visibility:hidden;transform:translateY(-14px);transition:.25s}
        .mobile-menu.show{opacity:1;visibility:visible;transform:translateY(0)}
        .mobile-links{display:flex;flex-direction:column;gap:8px}
        .mobile-links a{min-height:48px;border-radius:14px;padding:0 14px;display:flex;align-items:center;background:rgba(255,255,255,.03);font-weight:700}
        .mobile-menu-footer{display:flex;gap:8px;border-top:1px solid var(--line);padding-top:12px;margin-top:12px}

        .footer{padding:70px 0 130px;border-top:1px solid var(--line);background:linear-gradient(180deg,rgba(8,13,24,.58),rgba(6,10,19,.92));color:var(--muted)}
        .footer-grid{display:grid;grid-template-columns:1.3fr .9fr;gap:22px}
        .footer-card{padding:26px;border-radius:20px;border:1px solid var(--line);background:linear-gradient(165deg, rgba(19,30,55,.72), rgba(12,19,35,.88))}
        .footer h4{font-size:18px;color:var(--text);margin-bottom:12px}
        .footer p,.footer a{font-size:14px;line-height:2;color:var(--muted)}
        .footer-links{display:grid;gap:6px}
        .footer-links a:hover{color:var(--primary-2)}
        .footer-credit{margin-top:18px;padding-top:14px;border-top:1px solid var(--line);display:flex;flex-wrap:wrap;gap:8px;align-items:center;justify-content:space-between}
        .footer-credit a{color:var(--primary-2);font-weight:700}

        .sticky-cta{position:fixed;left:50%;transform:translateX(-50%);bottom:14px;z-index:1500;width:min(980px, calc(100% - 20px));display:flex;justify-content:space-between;align-items:center;gap:12px;padding:12px 14px;border-radius:20px;background:rgba(11,17,31,.92);border:1px solid var(--line-strong);backdrop-filter:blur(16px);box-shadow:var(--shadow)}
        .sticky-cta-copy strong{display:block;font-size:15px;margin-bottom:3px}
        .sticky-cta-copy span{font-size:13px;color:var(--muted)}
        .sticky-cta-actions{display:flex;gap:8px;flex-shrink:0}
        .sticky-cta .btn{min-height:44px;padding:0 18px}

        /* Homepage + internal page shared */
        .hero-premium{padding:84px 0 38px}
        .hero-layout{display:grid;grid-template-columns:1.1fr .9fr;gap:22px;align-items:stretch}
        .hero-main,.hero-side{border-radius:var(--radius-xl);padding:40px}
        .hero-main-title{font-size:clamp(34px,5.4vw,68px);line-height:1.05;letter-spacing:-1.2px;margin-bottom:16px}
        .hero-main-title span{display:block;background:linear-gradient(120deg,var(--primary-2),#fff,var(--primary));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
        .hero-main-text{font-size:17px;line-height:1.85;color:var(--muted);max-width:710px}
        .hero-actions{display:flex;gap:12px;margin-top:26px;flex-wrap:wrap}

        .trust-list{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:20px}
        .trust-item{min-height:52px;border-radius:14px;padding:0 14px;display:flex;align-items:center;border:1px solid var(--line);background:rgba(255,255,255,.02);font-size:14px;font-weight:700}

        .stat-row{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:22px}
        .stat-box{border:1px solid var(--line);background:rgba(255,255,255,.03);border-radius:14px;padding:14px}
        .stat-box strong{display:block;font-size:24px;margin-bottom:6px}
        .stat-box span{font-size:13px;color:var(--muted)}

        .page-hero{padding:80px 0 30px}
        .page-shell{padding:34px;border-radius:30px}

        .service-icon{width:58px;height:58px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:27px;background:linear-gradient(140deg, rgba(125,155,255,.24), rgba(77,224,255,.25));border:1px solid var(--line);margin-bottom:14px}
        .service-card h3{font-size:21px;margin-bottom:8px}
        .service-card p{line-height:1.9;color:var(--muted)}

        .portfolio-grid{display:grid;grid-template-columns:1.08fr .92fr;gap:22px}
        .portfolio-main img{height:420px;width:100%;object-fit:cover}
        .portfolio-info{display:grid;gap:14px}
        .mini-work{display:grid;grid-template-columns:84px 1fr;gap:12px;align-items:center}
        .mini-work img{width:84px;height:84px;border-radius:12px;object-fit:cover}

        .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:22px}
        .contact-card{padding:30px;border-radius:24px}
        .contact-list{display:grid;gap:10px;margin:20px 0}
        .contact-item{padding:14px;border-radius:12px;border:1px solid var(--line);background:rgba(255,255,255,.03);font-size:14px}


        /* Mockup widget */
        .creative-lab{display:grid;grid-template-columns:1fr 1fr;gap:22px}
        .creative-panel{padding:28px;border-radius:26px;background:linear-gradient(165deg, rgba(19,30,55,.9), rgba(12,19,35,.94));border:1px solid var(--line);box-shadow:var(--shadow)}
        .widget-note{color:var(--muted);line-height:1.8;font-size:14px}
        .mockup-tabs{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
        .mockup-tab{min-height:42px;padding:0 14px;border-radius:999px;border:1px solid var(--line);background:rgba(255,255,255,.03);color:var(--text);font:800 12px/1 inherit;cursor:pointer}
        .mockup-tab.active{background:linear-gradient(120deg, #9fb2ff, #76f0ff);color:var(--dark);border-color:transparent}
        .creative-form{display:grid;gap:14px;margin-top:18px}
        .creative-input{min-height:52px;border-radius:14px;border:1px solid var(--line);background:rgba(255,255,255,.03);color:var(--text);padding:0 15px;font-size:14px;outline:none}
        .creative-input:focus{border-color:var(--line-strong)}
        .color-picker{display:flex;gap:9px;flex-wrap:wrap}
        .color-chip{width:34px;height:34px;border-radius:50%;border:2px solid transparent;cursor:pointer}
        .color-chip.active{border-color:#fff;transform:scale(1.06)}
        .mockup-stage{position:relative;min-height:590px;overflow:hidden;display:flex;align-items:center;justify-content:center}
        .mockup-printer-wrap{position:relative;width:100%;max-width:500px;height:550px}
        .mockup-printer{position:absolute;top:0;left:50%;transform:translateX(-50%);width:310px;height:180px;z-index:3}
        .mockup-printer-head{position:absolute;top:0;left:44px;width:222px;height:80px;border-radius:24px 24px 18px 18px;background:linear-gradient(180deg, #1a3950, #11253a);border:1px solid var(--line)}
        .mockup-printer-body{position:absolute;top:48px;left:12px;width:286px;height:118px;border-radius:24px;background:linear-gradient(180deg,#13283d,#0c192b);border:1px solid var(--line-strong)}
        .mockup-printer-slot{position:absolute;left:66px;bottom:22px;width:162px;height:18px;border-radius:999px;background:#050d16}
        .print-sheet{position:absolute;top:110px;left:50%;transform:translateX(-50%);width:214px;height:132px;border-radius:20px;background:linear-gradient(180deg, #fbffff, #dbf6ff);box-shadow:0 15px 28px rgba(0,0,0,.16);z-index:2}
        .print-sheet.animate{animation:sheetPrint 2s ease forwards}
        .mockup-view{position:absolute;left:50%;bottom:8px;transform:translateX(-50%) translateY(20px) scale(.94);opacity:0;transition:.55s;z-index:4;pointer-events:none}
        .mockup-view.show{transform:translateX(-50%) translateY(0) scale(1);opacity:1}
        .tshirt-preview{width:320px;height:300px}
        .svg-mockup{width:100%;display:block;filter:drop-shadow(0 20px 26px rgba(0,0,0,.32))}
        .svg-design-text{font-family:{{ app()->getLocale() === 'ar' ? "'Alexandria', sans-serif" : "'Manrope', 'Alexandria', sans-serif" }};font-weight:900;letter-spacing:.5px;text-transform:uppercase}

        @keyframes sheetPrint{0%{transform:translateX(-50%) translateY(0);opacity:1}45%{transform:translateX(-50%) translateY(95px);opacity:1}100%{transform:translateX(-50%) translateY(130px);opacity:0}}

        @media (max-width: 992px){
            .hero-layout,.grid-3,.grid-2,.portfolio-grid,.creative-lab,.contact-grid,.footer-grid{grid-template-columns:1fr}
            .nav-links,.nav-actions .lang-switch{display:none}
            .menu-toggle{display:inline-flex;align-items:center;justify-content:center}
            .hero-main,.hero-side,.page-shell,.contact-card{padding:24px}
            .sticky-cta{flex-direction:column;align-items:stretch}
            .sticky-cta-actions{width:100%}
            .sticky-cta .btn{flex:1}
            .portfolio-main img{height:300px}
        }

        @media (max-width: 640px){
            .container{width:min(100% - 22px, 100%)}
            .section{padding:68px 0}
            .hero-main-title{font-size:34px}
            .section-title{font-size:30px}
            .section-text,.hero-main-text{font-size:15px}
            .btn{width:100%}
            .hero-actions{flex-direction:column;align-items:stretch}
            .trust-list,.stat-row{grid-template-columns:1fr}
            .mockup-printer-wrap{transform:scale(.88)}
            .sticky-cta{bottom:8px}
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="brand">
            <div class="brand-logo"><img src="{{ $logoUrl }}" alt="H to O Logo"></div>
            <div class="brand-text">
                <strong>H to O</strong>
                <span>{{ app()->getLocale() === 'ar' ? 'حلول طباعة وهوية بصرية للشركات' : 'Printing & branding solutions for businesses' }}</span>
            </div>
        </a>

        <div class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">{{ __('site.home') }}</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">{{ __('site.about') }}</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">{{ __('site.services') }}</a>
            <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">{{ __('site.portfolio') }}</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('site.contact') }}</a>
        </div>

        <div class="nav-actions">
            <div class="lang-switch" aria-label="{{ __('site.language') }}">
                <a href="{{ route('lang.switch', 'ar') }}" class="lang-btn {{ app()->getLocale() === 'ar' ? 'active' : '' }}">العربية</a>
                <a href="{{ route('lang.switch', 'en') }}" class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
            </div>
            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

<div class="mobile-overlay" id="mobileOverlay"></div>
<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-links">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">{{ __('site.home') }}</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">{{ __('site.about') }}</a>
        <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">{{ __('site.services') }}</a>
        <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">{{ __('site.portfolio') }}</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('site.contact') }}</a>
    </div>
    <div class="mobile-menu-footer">
        <a href="{{ route('lang.switch', 'ar') }}" class="lang-btn {{ app()->getLocale() === 'ar' ? 'active' : '' }}">العربية</a>
        <a href="{{ route('lang.switch', 'en') }}" class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
    </div>
</div>

@yield('content')

<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-card">
            <h4>{{ app()->getLocale() === 'ar' ? 'H to O | وكالة طباعة ودعاية' : 'H to O | Print & Advertising Agency' }}</h4>
            <p>{{ app()->getLocale() === 'ar' ? 'شريكك في تصميم وتنفيذ كل تفاصيل البراند: مطبوعات، هدايا دعائية، وتطبيقات هوية بصرية تسيب انطباع قوي من أول نظرة.' : 'Your partner for complete brand execution: print materials, promotional gifts, and visual identity applications built to leave a strong first impression.' }}</p>
            <div class="footer-credit">
                <p>© {{ date('Y') }} {{ __('site.footer_text') }} - H to O</p>
                <p>{{ app()->getLocale() === 'ar' ? 'تم إنشاء الموقع بواسطة' : 'Website created by' }} <a href="https://www.facebook.com/ibrahim.mahmoud.908164/" target="_blank" rel="noopener">ihemax</a></p>
            </div>
        </div>
        <div class="footer-card">
            <h4>{{ app()->getLocale() === 'ar' ? 'روابط سريعة' : 'Quick Links' }}</h4>
            <div class="footer-links">
                <p><a href="{{ route('home') }}">{{ __('site.home') }}</a></p>
                <p><a href="{{ route('about') }}">{{ __('site.about') }}</a></p>
                <p><a href="{{ route('services') }}">{{ __('site.services') }}</a></p>
                <p><a href="{{ route('portfolio') }}">{{ __('site.portfolio') }}</a></p>
                <p><a href="{{ route('contact') }}">{{ __('site.contact') }}</a></p>
                <p><a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noopener">WhatsApp</a></p>
            </div>
        </div>
    </div>
</footer>

<div class="sticky-cta">
    <div class="sticky-cta-copy">
        <strong>{{ app()->getLocale() === 'ar' ? 'عايز براندك يبان أقوى في السوق؟' : 'Want your brand to stand out stronger?' }}</strong>
        <span>{{ app()->getLocale() === 'ar' ? 'ابعتلنا الآن وخد خطة تنفيذ واضحة تناسب ميزانيتك.' : 'Message us now and get a clear execution plan tailored to your budget.' }}</span>
    </div>
    <div class="sticky-cta-actions">
        <a href="{{ route('portfolio') }}" class="btn btn-outline">{{ app()->getLocale() === 'ar' ? 'شوف شغلنا' : 'See Our Work' }}</a>
        <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noopener" class="btn btn-whatsapp">{{ __('site.whatsapp_now') }}</a>
    </div>
</div>

<script>
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileOverlay');
const mobileLinks = document.querySelectorAll('.mobile-links a');

function openMenu(){
    mobileMenu?.classList.add('show');
    mobileOverlay?.classList.add('show');
    menuToggle?.classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeMenu(){
    mobileMenu?.classList.remove('show');
    mobileOverlay?.classList.remove('show');
    menuToggle?.classList.remove('active');
    document.body.style.overflow = '';
}

menuToggle?.addEventListener('click', () => mobileMenu?.classList.contains('show') ? closeMenu() : openMenu());
mobileOverlay?.addEventListener('click', closeMenu);
mobileLinks.forEach(link => link.addEventListener('click', closeMenu));
window.addEventListener('resize', () => { if (window.innerWidth > 992) closeMenu(); });


const mockupInput = document.getElementById('mockupNameInput');
const printBtn = document.getElementById('printMockupBtn');
const printSheet = document.getElementById('printSheet');
const mockupTabs = document.querySelectorAll('.mockup-tab');
const colorChips = document.querySelectorAll('.color-chip');

const previews = {
    tshirt: document.getElementById('tshirtPreview'),
    mug: document.getElementById('mugPreview'),
    card: document.getElementById('businessCardPreview'),
    pad: document.getElementById('mousePadPreview'),
};
const designTargets = {
    tshirt: document.getElementById('tshirtDesignText'),
    mug: document.getElementById('mugDesignText'),
    card: document.getElementById('cardDesignText'),
    pad: document.getElementById('padDesignText'),
};

let activeMockup = 'tshirt';
function setActivePreview(type){
    Object.values(previews).forEach(el => el?.classList.remove('show'));
    previews[type]?.classList.add('show');
}
function updateDesignText(value){
    const finalText = value && value.trim() !== '' ? value.trim() : 'H TO O';
    Object.values(designTargets).forEach(el => { if (el) el.textContent = finalText; });
}
function applyMockupColors(main, alt){
    document.documentElement.style.setProperty('--mockup-main', main);
    document.documentElement.style.setProperty('--mockup-alt', alt);
}

mockupTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        mockupTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        activeMockup = tab.dataset.mockup;
        setActivePreview(activeMockup);
    });
});

colorChips.forEach(chip => {
    chip.addEventListener('click', () => {
        colorChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        applyMockupColors(chip.dataset.color, chip.dataset.color2 || chip.dataset.color);
    });
});

if (printBtn && mockupInput && printSheet) {
    printBtn.addEventListener('click', () => {
        updateDesignText(mockupInput.value);
        Object.values(previews).forEach(el => el?.classList.remove('show'));
        printSheet.classList.remove('animate');
        void printSheet.offsetWidth;
        printSheet.classList.add('animate');
        setTimeout(() => setActivePreview(activeMockup), 900);
    });
}

</script>

</body>
</html>
