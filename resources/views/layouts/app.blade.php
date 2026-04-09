<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteName ?? __('site.site_name') }}</title>
    <meta name="description" content="H to O Advertising & Design">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg:#070315;
            --bg-2:#140a2f;
            --bg-3:#1f0d46;
            --panel:rgba(20, 12, 45, .78);
            --panel-2:rgba(12, 8, 30, .92);
            --line:rgba(255, 255, 255, .12);
            --line-strong:rgba(255, 255, 255, .28);
            --primary:#c5a9ff;
            --primary-2:#7be8ff;
            --text:#f6f2ff;
            --muted:#b9acd9;
            --muted-2:#8f84ad;
            --dark:#10071f;
            --success:#25D366;
            --shadow:0 28px 70px rgba(3,2,10,.42);
            --glow:0 0 55px rgba(197,169,255,.2);
            --radius-xl:36px;
            --radius-lg:26px;
            --radius-md:18px;
            --container:min(1240px, 92%);
            --mockup-main:#efe7ff;
            --mockup-alt:#f8feff;
            --mockup-dark:#26163f;
        }

        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}

        body{
            min-height:100vh;
            overflow-x:hidden;
            color:var(--text);
            background:
                radial-gradient(circle at 14% 18%, rgba(123,232,255,.18), transparent 0 28%),
                radial-gradient(circle at 82% 9%, rgba(197,169,255,.20), transparent 0 26%),
                radial-gradient(circle at 50% 88%, rgba(154,113,255,.16), transparent 0 25%),
                linear-gradient(140deg, #05020f 0%, #100527 44%, #09041a 100%);
            font-family:{{ app()->getLocale() === 'ar' ? "'Alexandria', sans-serif" : "'Outfit', 'Alexandria', sans-serif" }};
            position:relative;
        }

        body::before{
            content:"";
            position:fixed;
            inset:0;
            pointer-events:none;
            background-image:
                linear-gradient(rgba(255,255,255,.018) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.018) 1px, transparent 1px);
            background-size:56px 56px;
            mask-image:linear-gradient(to bottom, rgba(255,255,255,.16), transparent 72%);
        }

        body.loaded #siteLoader{
            opacity:0;
            visibility:hidden;
            pointer-events:none;
        }

        body.loaded #siteLoader .loader-card{
            transform:scale(.96);
        }

        a{text-decoration:none;color:inherit}
        img{max-width:100%;display:block}
        .container{width:var(--container);margin:auto}

        #siteLoader{
            position:fixed;
            inset:0;
            z-index:5000;
            background:
                radial-gradient(circle at 50% 28%, rgba(197,169,255,.26), transparent 0 24%),
                linear-gradient(145deg, #120724 0%, #0b0518 55%, #090414 100%);
            display:flex;
            align-items:center;
            justify-content:center;
            transition:opacity .6s ease, visibility .6s ease;
        }

        .loader-card{
            width:min(460px, 90vw);
            padding:34px 28px;
            border-radius:30px;
            border:1px solid var(--line-strong);
            background:rgba(17, 10, 36, .9);
            box-shadow:var(--shadow), var(--glow);
            text-align:center;
            transition:transform .6s ease;
        }

        .loader-ring{
            width:92px;
            height:92px;
            margin:0 auto 18px;
            border-radius:50%;
            position:relative;
            background:conic-gradient(from 0deg, var(--primary), transparent 40%, var(--primary-2), transparent 75%, var(--primary));
            animation:spin 1.8s linear infinite;
            padding:6px;
        }

        .loader-ring::before{
            content:"";
            display:block;
            width:100%;
            height:100%;
            border-radius:50%;
            background:#0c0620;
        }

        .loader-title{font-size:26px;font-weight:900;margin-bottom:10px}
        .loader-text{color:var(--muted);line-height:1.9;font-size:14px}

        .navbar{
            position:sticky;
            top:0;
            z-index:1000;
            backdrop-filter:blur(16px);
            background:rgba(11,7,25,.72);
            border-bottom:1px solid var(--line);
        }

        .nav-inner{
            min-height:84px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:18px;
        }

        .brand{
            display:flex;
            align-items:center;
            gap:14px;
            min-width:0;
        }

        .brand-logo{
            width:60px;
            height:60px;
            border-radius:18px;
            overflow:hidden;
            border:1px solid var(--line);
            background:#160c31;
            box-shadow:0 15px 30px rgba(123,232,255,.24), 0 8px 24px rgba(197,169,255,.26);
            flex-shrink:0;
        }

        .brand-logo img{width:100%;height:100%;object-fit:cover}
        .brand-text{min-width:0}
        .brand-text strong{display:block;font-size:21px;font-weight:900;letter-spacing:.2px;white-space:nowrap}
        .brand-text span{display:block;margin-top:4px;color:var(--muted);font-size:12px;font-weight:600;white-space:nowrap}

        .nav-links{
            display:flex;
            align-items:center;
            gap:24px;
            flex-wrap:wrap;
        }

        .nav-links a{
            color:var(--muted);
            font-size:15px;
            font-weight:800;
            position:relative;
            transition:.25s ease;
        }

        .nav-links a::after{
            content:"";
            position:absolute;
            left:0;
            bottom:-8px;
            width:0;
            height:2px;
            border-radius:999px;
            background:linear-gradient(90deg, var(--primary), var(--primary-2));
            transition:.25s ease;
        }

        .nav-links a:hover,.nav-links a.active{color:var(--text)}
        .nav-links a:hover::after,.nav-links a.active::after{width:100%}

        .nav-actions{
            display:flex;
            align-items:center;
            gap:10px;
            flex-shrink:0;
        }

        .lang-btn{
            min-width:56px;
            height:42px;
            border-radius:999px;
            border:1px solid var(--line);
            background:rgba(255,255,255,.03);
            color:var(--text);
            display:inline-flex;
            align-items:center;
            justify-content:center;
            font-size:13px;
            font-weight:900;
            transition:.25s ease;
            padding:0 16px;
        }

        .lang-btn:hover{transform:translateY(-2px);box-shadow:var(--glow)}
        .lang-btn.active{
            background:linear-gradient(135deg, #c5a9ff, #7be8ff 65%, #fef8ff);
            color:var(--dark);
            border-color:transparent;
        }

        .menu-toggle{
            width:48px;
            height:48px;
            border:none;
            outline:none;
            cursor:pointer;
            border-radius:16px;
            background:rgba(255,255,255,.03);
            border:1px solid var(--line);
            display:none;
            align-items:center;
            justify-content:center;
            position:relative;
            transition:.25s ease;
        }

        .menu-toggle:hover{box-shadow:var(--glow)}
        .menu-toggle span{
            position:absolute;
            width:22px;
            height:2px;
            background:var(--text);
            border-radius:999px;
            transition:.25s ease;
        }

        .menu-toggle span:nth-child(1){ transform:translateY(-7px); }
        .menu-toggle span:nth-child(2){ transform:translateY(0); }
        .menu-toggle span:nth-child(3){ transform:translateY(7px); }

        .menu-toggle.active span:nth-child(1){ transform:translateY(0) rotate(45deg); }
        .menu-toggle.active span:nth-child(2){ opacity:0; }
        .menu-toggle.active span:nth-child(3){ transform:translateY(0) rotate(-45deg); }

        .mobile-menu{
            position:fixed;
            top:86px;
            left:16px;
            right:16px;
            z-index:1002;
            background:rgba(14, 8, 31, .96);
            border:1px solid var(--line-strong);
            border-radius:28px;
            box-shadow:var(--shadow);
            backdrop-filter:blur(18px);
            padding:18px;
            opacity:0;
            visibility:hidden;
            transform:translateY(-16px) scale(.98);
            transition:.28s ease;
        }

        .mobile-menu.show{
            opacity:1;
            visibility:visible;
            transform:translateY(0) scale(1);
        }

        .mobile-links{display:flex;flex-direction:column;gap:10px}
        .mobile-links a{
            min-height:54px;
            display:flex;
            align-items:center;
            padding:0 16px;
            border-radius:18px;
            color:var(--text);
            font-size:15px;
            font-weight:800;
            background:rgba(255,255,255,.025);
            border:1px solid transparent;
            transition:.25s ease;
        }

        .mobile-links a:hover,.mobile-links a.active{
            border-color:var(--line);
            background:rgba(122,229,239,.06);
        }

        .mobile-menu-footer{
            display:flex;
            align-items:center;
            gap:10px;
            margin-top:14px;
            padding-top:14px;
            border-top:1px solid rgba(255,255,255,.14);
        }

        .mobile-overlay{
            position:fixed;
            inset:0;
            background:rgba(3,2,10,.54);
            backdrop-filter:blur(3px);
            z-index:1001;
            opacity:0;
            visibility:hidden;
            transition:.25s ease;
        }

        .mobile-overlay.show{
            opacity:1;
            visibility:visible;
        }

        .hero{
            position:relative;
            padding:90px 0 65px;
        }

        .hero-grid{
            display:grid;
            grid-template-columns:1.08fr .92fr;
            gap:28px;
            align-items:center;
        }

        .glass{
            background:var(--panel);
            border:1px solid var(--line);
            box-shadow:var(--shadow);
            backdrop-filter:blur(16px);
        }

        .hero-card{
            position:relative;
            overflow:hidden;
            padding:48px;
            border-radius:var(--radius-xl);
        }

        .hero-card::before{
            content:"";
            position:absolute;
            width:260px;
            height:260px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(122,229,239,.18), transparent 72%);
            top:-120px;
            right:-100px;
            pointer-events:none;
        }

        .eyebrow{
            display:inline-flex;
            align-items:center;
            gap:10px;
            min-height:42px;
            padding:0 16px;
            border-radius:999px;
            border:1px solid var(--line);
            background:rgba(255,255,255,.035);
            color:var(--primary);
            font-size:13px;
            font-weight:900;
            letter-spacing:.3px;
            margin-bottom:18px;
        }

        .hero-title{
            font-size:clamp(38px, 5vw, 68px);
            line-height:1.05;
            font-weight:900;
            margin-bottom:16px;
            letter-spacing:-1.2px;
        }

        .hero-title .accent{
            display:block;
            background:linear-gradient(135deg, var(--primary), #dfffff 45%, var(--primary-2));
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            background-clip:text;
        }

        .hero-text{
            max-width:680px;
            color:var(--muted);
            font-size:18px;
            line-height:1.95;
        }

        .hero-actions{
            display:flex;
            align-items:center;
            gap:14px;
            flex-wrap:wrap;
            margin-top:30px;
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            min-height:54px;
            padding:0 24px;
            border-radius:18px;
            font-size:15px;
            font-weight:900;
            border:1px solid transparent;
            transition:.25s ease;
            cursor:pointer;
            font-family:inherit;
        }

        .btn:hover{transform:translateY(-3px)}

        .btn-primary{
            background:linear-gradient(135deg, #c5a9ff, #7be8ff 65%, #fef8ff);
            color:var(--dark);
            box-shadow:0 15px 30px rgba(123,232,255,.24), 0 8px 24px rgba(197,169,255,.26);
        }

        .btn-outline{
            border-color:var(--line);
            background:rgba(255,255,255,.03);
            color:var(--text);
        }

        .hero-visual{
            min-height:560px;
            border-radius:var(--radius-xl);
            padding:26px;
            position:relative;
            overflow:hidden;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .hero-visual::before{
            content:"";
            position:absolute;
            width:230px;
            height:230px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(122,229,239,.14), transparent 72%);
            top:-40px;
            left:-40px;
        }

        .hero-visual::after{
            content:"";
            position:absolute;
            width:190px;
            height:190px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(69,185,215,.14), transparent 72%);
            bottom:-30px;
            right:-20px;
        }

        .hero-stack{
            width:100%;
            max-width:460px;
            position:relative;
            z-index:2;
        }

        .hero-logo-box{
            width:290px;
            height:290px;
            margin:0 auto 22px;
            border-radius:34px;
            overflow:hidden;
            border:1px solid var(--line);
            box-shadow:0 28px 55px rgba(0,0,0,.34);
            animation:softFloat 5s ease-in-out infinite;
            background:#0b1720;
        }

        .hero-logo-box img{width:100%;height:100%;object-fit:cover}

        .printer-card{
            width:100%;
            background:rgba(255,255,255,.03);
            border:1px solid var(--line);
            border-radius:28px;
            padding:26px 22px 22px;
            box-shadow:var(--shadow);
        }

        .printer-topline{
            display:flex;
            align-items:center;
            justify-content:space-between;
            margin-bottom:16px;
            color:var(--muted);
            font-size:13px;
            font-weight:800;
            gap:12px;
        }

        .printer-stage{
            position:relative;
            width:100%;
            height:240px;
            display:flex;
            align-items:flex-start;
            justify-content:center;
        }

        .printer{position:relative;width:270px;height:210px}
        .printer-head{
            position:absolute;
            top:0;
            left:40px;
            width:190px;
            height:78px;
            border-radius:24px 24px 16px 16px;
            background:linear-gradient(180deg, #1a394e, #102533);
            border:1px solid var(--line);
            box-shadow:inset 0 1px 0 rgba(255,255,255,.06), var(--shadow);
            z-index:4;
            animation:printerShake 3.8s ease-in-out infinite;
        }

        .printer-head::before{
            content:"";
            position:absolute;
            top:14px;
            left:18px;
            width:76px;
            height:10px;
            border-radius:999px;
            background:rgba(255,255,255,.08);
        }

        .printer-head::after{
            content:"";
            position:absolute;
            top:16px;
            right:18px;
            width:14px;
            height:14px;
            border-radius:50%;
            background:var(--primary);
            box-shadow:0 0 18px rgba(122,229,239,.55);
        }

        .printer-body{
            position:absolute;
            top:54px;
            left:12px;
            width:246px;
            height:118px;
            border-radius:26px;
            background:linear-gradient(180deg, #132a3a, #0a1b27);
            border:1px solid var(--line-strong);
            z-index:3;
            overflow:hidden;
        }

        .printer-body::before{
            content:"";
            position:absolute;
            inset:16px 24px auto 24px;
            height:18px;
            border-radius:999px;
            background:rgba(255,255,255,.06);
        }

        .printer-slot{
            position:absolute;
            left:46px;
            bottom:24px;
            width:154px;
            height:18px;
            border-radius:999px;
            background:#06111a;
            box-shadow:inset 0 2px 6px rgba(0,0,0,.65);
            z-index:5;
        }

        .paper{
            position:absolute;
            left:60px;
            top:66px;
            width:150px;
            height:126px;
            border-radius:12px;
            background:linear-gradient(180deg, #f9ffff, #daf7ff);
            z-index:2;
            overflow:hidden;
            transform-origin:top center;
            animation:paperMove 3.8s ease-in-out infinite;
            box-shadow:0 12px 24px rgba(0,0,0,.15);
        }

        .paper::before{
            content:"";
            position:absolute;
            inset:16px 16px auto 16px;
            height:22px;
            border-radius:10px;
            background:linear-gradient(90deg, var(--primary), var(--primary-2));
            opacity:.9;
        }

        .paper::after{
            content:"";
            position:absolute;
            left:16px;
            right:16px;
            top:50px;
            height:52px;
            border-radius:10px;
            background:
                linear-gradient(180deg, rgba(69,185,215,.22), rgba(69,185,215,.08)),
                repeating-linear-gradient(to bottom, rgba(8,19,29,.16) 0 4px, transparent 4px 12px);
        }

        .paper-mark{
            position:absolute;
            left:92px;
            top:118px;
            width:86px;
            height:26px;
            border-radius:999px;
            background:linear-gradient(135deg, rgba(7,16,24,.9), rgba(69,185,215,.55));
            z-index:3;
            animation:paperMove 3.8s ease-in-out infinite;
            opacity:.92;
        }

        .printer-shadow{
            position:absolute;
            bottom:0;
            left:50%;
            transform:translateX(-50%);
            width:190px;
            height:22px;
            border-radius:50%;
            background:rgba(0,0,0,.34);
            filter:blur(12px);
            animation:shadowPulse 3.8s ease-in-out infinite;
        }

        .section{padding:84px 0}
        .section-head{margin-bottom:28px}
        .section-kicker{
            color:var(--primary);
            font-size:13px;
            font-weight:900;
            letter-spacing:.35px;
            margin-bottom:10px;
            text-transform:uppercase;
        }

        .section-title{
            font-size:clamp(30px, 4vw, 44px);
            line-height:1.12;
            font-weight:900;
            margin-bottom:12px;
            letter-spacing:-.6px;
        }

        .section-title.large{font-size:clamp(34px, 4.8vw, 52px)}

        .section-text{
            max-width:760px;
            color:var(--muted);
            font-size:17px;
            line-height:1.95;
        }

        .grid-3{display:grid;grid-template-columns:repeat(3, 1fr);gap:20px}
        .grid-2{display:grid;grid-template-columns:repeat(2, 1fr);gap:20px}

        .card{
            position:relative;
            overflow:hidden;
            border-radius:28px;
            padding:28px;
            background:linear-gradient(170deg, rgba(25,16,51,.92), rgba(12,8,29,.94));
            border:1px solid var(--line);
            box-shadow:var(--shadow);
            transition:.28s ease;
        }

        .card:hover{
            transform:translateY(-8px);
            border-color:var(--line-strong);
            box-shadow:0 32px 75px rgba(0,0,0,.4), var(--glow);
        }

        .card::before{
            content:"";
            position:absolute;
            width:150px;
            height:150px;
            right:-60px;
            bottom:-70px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(122,229,239,.12), transparent 72%);
        }

        .service-icon{
            width:68px;
            height:68px;
            border-radius:22px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:30px;
            background:linear-gradient(135deg, rgba(197,169,255,.28), rgba(123,232,255,.14));
            border:1px solid var(--line);
            box-shadow:0 15px 30px rgba(123,232,255,.24), 0 8px 24px rgba(197,169,255,.26);
            margin-bottom:18px;
        }

        .card h3{
            font-size:23px;
            line-height:1.25;
            margin-bottom:10px;
            font-weight:900;
        }

        .card p{
            color:var(--muted);
            line-height:1.92;
            font-size:15.7px;
        }

        .about-wrap{
            padding:36px;
            border-radius:30px;
        }

        .features{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:14px;
            margin-top:24px;
        }

        .feature{
            min-height:68px;
            display:flex;
            align-items:center;
            padding:16px 18px;
            border-radius:18px;
            border:1px solid var(--line);
            background:rgba(255,255,255,.03);
            color:var(--text);
            font-size:15px;
            font-weight:800;
            transition:.25s ease;
        }

        .feature:hover{
            transform:translateY(-3px);
            border-color:var(--line-strong);
        }

        .creative-lab{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:22px;
            align-items:stretch;
        }

        .creative-panel{
            border-radius:30px;
            padding:30px;
            background:linear-gradient(170deg, rgba(25,16,51,.92), rgba(12,8,29,.94));
            border:1px solid var(--line);
            box-shadow:var(--shadow);
            position:relative;
            overflow:hidden;
        }

        .creative-panel::before{
            content:"";
            position:absolute;
            width:180px;
            height:180px;
            border-radius:50%;
            right:-70px;
            top:-70px;
            background:radial-gradient(circle, rgba(197,169,255,.12), transparent 72%);
        }

        .creative-form{
            display:flex;
            flex-direction:column;
            gap:16px;
            margin-top:24px;
            position:relative;
            z-index:2;
        }

        .creative-input{
            width:100%;
            min-height:58px;
            border-radius:18px;
            border:1px solid var(--line);
            background:rgba(255,255,255,.03);
            color:var(--text);
            padding:0 18px;
            outline:none;
            font-family:inherit;
            font-size:15px;
            font-weight:700;
        }

        .creative-input::placeholder{color:var(--muted-2)}
        .creative-input:focus{
            border-color:var(--line-strong);
            box-shadow:0 15px 30px rgba(123,232,255,.24), 0 8px 24px rgba(197,169,255,.26);
        }

        .color-picker{
            display:flex;
            align-items:center;
            gap:10px;
            flex-wrap:wrap;
        }

        .color-chip{
            width:38px;
            height:38px;
            border-radius:50%;
            border:2px solid transparent;
            cursor:pointer;
            transition:.2s ease;
            box-shadow:0 8px 16px rgba(0,0,0,.18);
        }

        .color-chip.active{
            border-color:#fff;
            transform:scale(1.08);
        }

        .mockup-stage{
            min-height:620px;
            display:flex;
            align-items:center;
            justify-content:center;
            position:relative;
            overflow:hidden;
        }

        .mockup-stage::before{
            content:"";
            position:absolute;
            width:260px;
            height:260px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(122,229,239,.12), transparent 72%);
            top:-60px;
            left:-60px;
        }

        .mockup-printer-wrap{
            position:relative;
            width:100%;
            max-width:500px;
            height:560px;
        }

        .mockup-printer{
            position:absolute;
            top:0;
            left:50%;
            transform:translateX(-50%);
            width:310px;
            height:180px;
            z-index:4;
        }

        .mockup-printer-head{
            position:absolute;
            top:0;
            left:44px;
            width:222px;
            height:80px;
            border-radius:24px 24px 18px 18px;
            background:linear-gradient(180deg, #1a394e, #102533);
            border:1px solid var(--line);
            box-shadow:var(--shadow);
        }

        .mockup-printer-body{
            position:absolute;
            top:48px;
            left:12px;
            width:286px;
            height:118px;
            border-radius:26px;
            background:linear-gradient(180deg, #132a3a, #0a1b27);
            border:1px solid var(--line-strong);
        }

        .mockup-printer-slot{
            position:absolute;
            left:66px;
            bottom:22px;
            width:162px;
            height:18px;
            border-radius:999px;
            background:#06111a;
            box-shadow:inset 0 2px 7px rgba(0,0,0,.65);
        }

        .print-sheet{
            position:absolute;
            top:110px;
            left:50%;
            transform:translateX(-50%);
            width:214px;
            height:132px;
            border-radius:20px;
            background:linear-gradient(180deg, #fbffff, #dbf6ff);
            box-shadow:0 15px 28px rgba(0,0,0,.16);
            border:1px solid rgba(0,0,0,.03);
            z-index:2;
            transition:transform .9s ease, opacity .6s ease;
        }

        .print-sheet.animate{
            animation:sheetPrint 2.1s ease forwards;
        }

        .mockup-tabs{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
            margin-top:18px;
        }

        .mockup-tab{
            min-height:44px;
            padding:0 16px;
            border-radius:999px;
            border:1px solid var(--line);
            background:rgba(255,255,255,.03);
            color:var(--text);
            font-family:inherit;
            font-size:13px;
            font-weight:900;
            cursor:pointer;
            transition:.25s ease;
        }

        .mockup-tab.active{
            background:linear-gradient(135deg, #c5a9ff, #7be8ff 65%, #fef8ff);
            color:var(--dark);
            border-color:transparent;
        }

        .mockup-view{
            position:absolute;
            bottom:10px;
            left:50%;
            transform:translateX(-50%) translateY(20px) scale(.94);
            opacity:0;
            transition:all .7s ease;
            z-index:3;
            pointer-events:none;
        }

        .mockup-view.show{
            opacity:1;
            transform:translateX(-50%) translateY(0) scale(1);
        }

        .design-glow{
            position:absolute;
            inset:-8px;
            border-radius:inherit;
            background:linear-gradient(135deg, rgba(255,255,255,0), rgba(255,255,255,.32), rgba(255,255,255,0));
            filter:blur(10px);
            animation:glowSweep 2.8s linear infinite;
            pointer-events:none;
        }

        .tshirt-preview{width:320px;height:300px}
        .svg-mockup{
            width:100%;
            height:auto;
            display:block;
            filter:drop-shadow(0 24px 35px rgba(0,0,0,.28));
        }

        .svg-design-text{
            font-family:{{ app()->getLocale() === 'ar' ? "'Alexandria', sans-serif" : "'Outfit', 'Alexandria', sans-serif" }};
            font-weight:900;
            letter-spacing:.6px;
            text-transform:uppercase;
        }

        .mockup-caption{
            margin-top:14px;
            text-align:center;
            color:var(--muted);
            font-size:14px;
            font-weight:700;
        }

        .testimonial-grid{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:20px;
        }

        .testimonial-card{
            border-radius:28px;
            padding:28px;
            background:linear-gradient(170deg, rgba(25,16,51,.92), rgba(12,8,29,.94));
            border:1px solid var(--line);
            box-shadow:var(--shadow);
            position:relative;
            overflow:hidden;
        }

        .testimonial-card::before{
            content:"“";
            position:absolute;
            top:14px;
            right:18px;
            font-size:78px;
            line-height:1;
            color:rgba(122,229,239,.12);
            font-weight:900;
        }

        .testimonial-stars{
            color:#ffd56b;
            letter-spacing:2px;
            font-size:14px;
            margin-bottom:14px;
        }

        .testimonial-text{
            color:var(--text);
            line-height:2;
            font-size:15px;
            margin-bottom:18px;
            position:relative;
            z-index:2;
        }

        .testimonial-user{
            display:flex;
            align-items:center;
            gap:12px;
        }

        .testimonial-avatar{
            width:48px;
            height:48px;
            border-radius:50%;
            background:linear-gradient(135deg, #c5a9ff, #7be8ff 65%, #fef8ff);
            color:var(--dark);
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:900;
            font-size:16px;
            flex-shrink:0;
        }

        .testimonial-meta strong{
            display:block;
            font-size:15px;
            font-weight:900;
        }

        .testimonial-meta span{
            color:var(--muted);
            font-size:13px;
            font-weight:700;
        }

        .contact-box{
            text-align:center;
            padding:42px;
            border-radius:32px;
        }

        .contact-box .section-text{
            margin:0 auto 26px;
        }

        .page-hero{padding:72px 0 22px}
        .page-box{padding:36px;border-radius:30px}

        .footer{
            text-align:center;
            padding:28px 0 120px;
            border-top:1px solid rgba(255,255,255,.14);
            color:var(--muted);
            font-size:14px;
            font-weight:700;
        }

        .sticky-cta{
            position:fixed;
            left:50%;
            bottom:16px;
            transform:translateX(-50%);
            width:min(980px, calc(100% - 24px));
            z-index:1500;
            background:rgba(14, 8, 31, .94);
            border:1px solid var(--line-strong);
            box-shadow:0 20px 50px rgba(0,0,0,.35), var(--glow);
            border-radius:26px;
            backdrop-filter:blur(18px);
            padding:14px 16px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:16px;
        }

        .sticky-cta-copy{
            min-width:0;
        }

        .sticky-cta-copy strong{
            display:block;
            font-size:16px;
            font-weight:900;
            margin-bottom:4px;
        }

        .sticky-cta-copy span{
            display:block;
            color:var(--muted);
            font-size:13px;
            line-height:1.7;
        }

        .sticky-cta-actions{
            display:flex;
            align-items:center;
            gap:10px;
            flex-shrink:0;
        }

        .sticky-cta .btn{
            min-height:48px;
            padding:0 20px;
        }

        [data-parallax]{
            will-change:transform;
            transition:transform .12s linear;
        }

        @keyframes spin{to{transform:rotate(360deg)}}
        @keyframes softFloat{0%,100%{transform:translateY(0px)}50%{transform:translateY(-10px)}}
        @keyframes paperMove{
            0%{ transform:translateY(-28px); opacity:.92; }
            12%{ transform:translateY(-12px); }
            28%{ transform:translateY(8px); }
            48%{ transform:translateY(34px); }
            68%{ transform:translateY(62px); }
            100%{ transform:translateY(-28px); opacity:.92; }
        }

        @keyframes shadowPulse{
            0%,100%{transform:translateX(-50%) scale(.92);opacity:.36}
            50%{transform:translateX(-50%) scale(1);opacity:.52}
        }

        @keyframes printerShake{
            0%,100%{ transform:translateX(0); }
            20%{ transform:translateX(1px); }
            40%{ transform:translateX(-1px); }
            60%{ transform:translateX(1px); }
            80%{ transform:translateX(0); }
        }

        @keyframes sheetPrint{
            0%{transform:translateX(-50%) translateY(0);opacity:1}
            45%{transform:translateX(-50%) translateY(95px);opacity:1}
            100%{transform:translateX(-50%) translateY(138px);opacity:0}
        }

        @keyframes glowSweep{
            0%{ transform:translateX(-120%); opacity:0; }
            20%{ opacity:.4; }
            50%{ opacity:.85; }
            100%{ transform:translateX(120%); opacity:0; }
        }

        @media (max-width: 1100px){
            .nav-links{gap:18px}
        }

        @media (max-width: 992px){
            .hero-grid,
            .grid-3,
            .grid-2,
            .features,
            .creative-lab,
            .testimonial-grid{
                grid-template-columns:1fr;
            }

            .nav-links,
            .nav-actions .lang-btn{
                display:none;
            }

            .menu-toggle{display:inline-flex}

            .nav-inner{min-height:76px}
            .brand-logo{width:52px;height:52px}
            .brand-text strong{font-size:18px}
            .brand-text span{font-size:11px}

            .hero{padding-top:54px}

            .hero-card,
            .hero-visual,
            .about-wrap,
            .contact-box,
            .page-box,
            .creative-panel{
                padding:24px;
            }

            .hero-visual{min-height:auto}
            .hero-logo-box{width:240px;height:240px}
            .work-card img{height:280px}
            .printer-topline{font-size:12px}
            .mockup-stage{min-height:560px}

            .sticky-cta{
                flex-direction:column;
                align-items:stretch;
                gap:12px;
            }

            .sticky-cta-actions{
                width:100%;
                justify-content:stretch;
            }

            .sticky-cta-actions .btn{
                flex:1;
            }
        }

        @media (max-width: 576px){
            .container{width:min(100% - 24px, 100%)}
            .hero-title{font-size:32px;line-height:1.12}
            .hero-text,.section-text{font-size:15px;line-height:1.9}
            .section{padding:64px 0}
            .section-title,.section-title.large{font-size:28px}
            .card,.creative-panel,.testimonial-card{padding:22px}
            .hero-actions{flex-direction:column;align-items:stretch}
            .btn{width:100%}
            .mockup-printer-wrap{transform:scale(.88)}
            .creative-form .btn{width:100%}
            .loader-card{padding:28px 22px}
            .sticky-cta{
                width:calc(100% - 16px);
                bottom:8px;
                padding:12px;
                border-radius:20px;
            }

            .sticky-cta-copy strong{font-size:15px}
            .sticky-cta-copy span{font-size:12px}
        }
    </style>
</head>
<body>

<div id="siteLoader">
    <div class="loader-card">
        <div class="loader-ring"></div>
        <div class="loader-title">
            {{ app()->getLocale() === 'ar' ? 'ثواني ونفتح الموقع' : 'Opening the website...' }}
        </div>
        <div class="loader-text">
            {{ app()->getLocale() === 'ar'
                ? 'بنجهز الصفحة دلوقتي، استنى ثواني بسيطة.'
                : 'Just a moment while the interface loads with its full visual identity and interactive details.' }}
        </div>
    </div>
</div>

<nav class="navbar">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="brand">
            <div class="brand-logo">
                <img src="{{ $logoUrl }}" alt="H to O Logo">
            </div>
            <div class="brand-text">
                <strong>H to O</strong>
                <span>Advertising & Design</span>
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
            <a href="{{ route('lang.switch', 'ar') }}" class="lang-btn {{ app()->getLocale() === 'ar' ? 'active' : '' }}">AR</a>
            <a href="{{ route('lang.switch', 'en') }}" class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>

            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open Menu">
                <span></span>
                <span></span>
                <span></span>
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
        <a href="{{ route('lang.switch', 'ar') }}" class="lang-btn {{ app()->getLocale() === 'ar' ? 'active' : '' }}">AR</a>
        <a href="{{ route('lang.switch', 'en') }}" class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
    </div>
</div>

@yield('content')

<footer class="footer">
    <div class="container">
        © {{ date('Y') }} {{ __('site.footer_text') }} - H to O
    </div>
</footer>

<div class="sticky-cta">
    <div class="sticky-cta-copy">
        <strong>{{ app()->getLocale() === 'ar' ? 'عندك فكرة وعايز تنفذها؟' : 'Have an idea and want to execute it?' }}</strong>
        <span>{{ app()->getLocale() === 'ar' ? 'كلمنا على واتساب أو شوف شغلنا الحالي الأول.' : 'Chat on WhatsApp or check our current work first.' }}</span>
    </div>

    <div class="sticky-cta-actions">
        <a href="{{ route('portfolio') }}" class="btn btn-outline">
            {{ app()->getLocale() === 'ar' ? 'شاهد الأعمال' : 'View Portfolio' }}
        </a>
        <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" class="btn btn-primary">
            {{ app()->getLocale() === 'ar' ? 'راسلنا واتساب' : 'Chat on WhatsApp' }}
        </a>
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        setTimeout(() => {
            document.body.classList.add('loaded');
        }, 850);
    });

    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileLinks = document.querySelectorAll('.mobile-links a');

    function openMenu() {
        mobileMenu.classList.add('show');
        mobileOverlay.classList.add('show');
        menuToggle.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        mobileMenu.classList.remove('show');
        mobileOverlay.classList.remove('show');
        menuToggle.classList.remove('active');
        document.body.style.overflow = '';
    }

    menuToggle?.addEventListener('click', function () {
        if (mobileMenu.classList.contains('show')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    mobileOverlay?.addEventListener('click', closeMenu);

    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 992) {
            closeMenu();
        }
    });

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

    const colorTargets = document.querySelectorAll('[data-mockup-color-target]');
    let activeMockup = 'tshirt';

    function setActivePreview(type) {
        Object.values(previews).forEach(el => el?.classList.remove('show'));
        previews[type]?.classList.add('show');
    }

    function updateDesignText(value) {
        const finalText = value && value.trim() !== '' ? value.trim() : 'H TO O';
        Object.values(designTargets).forEach(el => {
            if (el) el.textContent = finalText;
        });
    }

    function applyMockupColors(main, alt) {
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

            setTimeout(() => {
                setActivePreview(activeMockup);
            }, 900);
        });
    }

    const parallaxEls = document.querySelectorAll('[data-parallax]');
    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        parallaxEls.forEach(el => {
            const speed = parseFloat(el.dataset.parallax || '0.08');
            el.style.transform = `translateY(${y * speed}px)`;
        });
    }, { passive: true });
</script>

</body>
</html>