<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Hai Nguyen, Full-stack Developer chuyên Laravel, Vue.js, LINE API, AI/LLM, AWS EC2 và tự động hóa nghiệp vụ." />
    <title>Hai Nguyen | Laravel, Vue.js, LINE API, AWS & AI Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --bg: #080907;
            --bg-2: #10120d;
            --surface: #151811;
            --surface-2: #1d2118;
            --text: #f4f7ef;
            --muted: #a9b2a2;
            --soft: #d9e6d1;
            --border: #303828;
            --line: #06c755;
            --laravel: #ff2d20;
            --vue: #42b883;
            --ai: #2fd8c8;
            --gold: #f2c14e;
            --aws: #ff9900;
            --shadow: 0 24px 70px rgba(0, 0, 0, .36);
            --radius: 8px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background:
                radial-gradient(circle at 18% 8%, rgba(6, 199, 85, .18), transparent 28rem),
                radial-gradient(circle at 84% 18%, rgba(255, 45, 32, .14), transparent 26rem),
                linear-gradient(180deg, #080907 0%, #0e100c 52%, #080907 100%);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: -1;
            background-image:
                linear-gradient(rgba(244, 247, 239, .04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(244, 247, 239, .04) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: linear-gradient(180deg, #000 0%, transparent 72%);
        }

        .brand,
        .mono {
            font-family: 'JetBrains Mono', ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrap {
            width: 100%;
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 24px;
        }

        section {
            padding: 88px 0;
            position: relative;
        }

        .site-nav {
            position: sticky;
            top: 0;
            z-index: 30;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
            background: rgba(8, 9, 7, .78);
            backdrop-filter: blur(18px);
        }

        .site-nav .wrap {
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            font-weight: 800;
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            border-radius: var(--radius);
            display: grid;
            place-items: center;
            background: var(--line);
            color: #071007;
            box-shadow: 0 0 0 6px rgba(6, 199, 85, .12);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            color: var(--muted);
            font-size: .92rem;
            font-weight: 600;
        }

        .nav-links a {
            transition: color .2s ease;
        }

        .nav-links a:hover {
            color: var(--text);
        }

        .nav-cta,
        .btn {
            border-radius: var(--radius);
            font-weight: 800;
            transition: transform .2s ease, border-color .2s ease, background .2s ease, box-shadow .2s ease;
        }

        .nav-cta {
            padding: 10px 16px;
            background: var(--line);
            color: #061006;
            font-size: .9rem;
        }

        .nav-cta:hover,
        .btn:hover {
            transform: translateY(-2px);
        }

        .hero {
            min-height: calc(100vh - 72px);
            display: grid;
            align-items: center;
            padding: 84px 0 72px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.08fr) minmax(320px, .92fr);
            gap: 48px;
            align-items: center;
        }

        .hero-copy,
        .hero-panel {
            min-width: 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            border: 1px solid var(--border);
            border-radius: 999px;
            background: rgba(21, 24, 17, .8);
            color: var(--soft);
            font-size: .88rem;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .live-dot {
            width: 9px;
            height: 9px;
            border-radius: 999px;
            background: var(--line);
            box-shadow: 0 0 18px rgba(6, 199, 85, .8);
        }

        .hero h1 {
            max-width: 760px;
            color: var(--text);
            font-size: 4.15rem;
            line-height: 1.04;
            font-weight: 800;
            overflow-wrap: anywhere;
            text-wrap: balance;
        }

        .hero h1 span {
            color: var(--line);
            display: block;
        }

        .lead {
            max-width: 690px;
            margin-top: 24px;
            color: var(--muted);
            font-size: 1.18rem;
            overflow-wrap: anywhere;
        }

        .lead strong {
            color: var(--text);
            font-weight: 800;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 34px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 20px;
            border: 1px solid var(--border);
            cursor: pointer;
        }

        .btn-primary {
            background: var(--line);
            border-color: var(--line);
            color: #061006;
            box-shadow: 0 16px 36px rgba(6, 199, 85, .16);
        }

        .btn-secondary {
            background: rgba(21, 24, 17, .8);
            color: var(--text);
        }

        .btn-secondary:hover {
            border-color: var(--line);
        }

        .quick-facts {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 42px;
        }

        .fact {
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: rgba(21, 24, 17, .7);
        }

        .fact strong {
            display: block;
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: 1.35rem;
            color: var(--text);
        }

        .fact span {
            display: block;
            margin-top: 4px;
            color: var(--muted);
            font-size: .88rem;
        }

        .hero-panel {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: linear-gradient(180deg, rgba(29, 33, 24, .96), rgba(14, 16, 12, .96));
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .panel-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--muted);
            font-size: .82rem;
        }

        .panel-top .mono {
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .window-dots {
            display: flex;
            gap: 7px;
        }

        .window-dots span {
            width: 9px;
            height: 9px;
            border-radius: 999px;
            background: var(--border);
        }

        .window-dots span:nth-child(1) {
            background: var(--laravel);
        }

        .window-dots span:nth-child(2) {
            background: var(--gold);
        }

        .window-dots span:nth-child(3) {
            background: var(--line);
        }

        .panel-body {
            padding: 22px;
        }

        .profile-line {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            padding: 16px 0;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .profile-line:last-child {
            border-bottom: 0;
        }

        .profile-line span {
            color: var(--muted);
            font-size: .88rem;
        }

        .profile-line strong {
            max-width: 260px;
            text-align: right;
            font-weight: 800;
        }

        .section-head {
            display: grid;
            grid-template-columns: minmax(0, .82fr) minmax(280px, .42fr);
            gap: 34px;
            align-items: end;
            margin-bottom: 34px;
        }

        .kicker {
            display: inline-block;
            margin-bottom: 10px;
            color: var(--line);
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: .82rem;
            font-weight: 800;
        }

        .section-head h2 {
            font-size: 2.7rem;
            line-height: 1.12;
            font-weight: 800;
            overflow-wrap: anywhere;
            text-wrap: balance;
        }

        .section-head p {
            color: var(--muted);
        }

        .strength-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .strength-card,
        .project-card,
        .tech-card {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: rgba(21, 24, 17, .78);
            transition: transform .22s ease, border-color .22s ease, background .22s ease;
        }

        .strength-card:hover,
        .project-card:hover,
        .tech-card:hover {
            transform: translateY(-4px);
            border-color: rgba(6, 199, 85, .7);
            background: rgba(29, 33, 24, .92);
        }

        .strength-card {
            padding: 24px;
            min-height: 260px;
            display: flex;
            flex-direction: column;
        }

        .card-code {
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            border-radius: var(--radius);
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-weight: 800;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, .06);
        }

        .strength-card h3,
        .project-card h3,
        .tech-card h3 {
            font-size: 1.12rem;
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .strength-card p,
        .project-card p,
        .tech-card p {
            color: var(--muted);
            font-size: .95rem;
        }

        .strength-card ul {
            margin-top: auto;
            padding-top: 18px;
            list-style: none;
            color: var(--soft);
            font-size: .9rem;
        }

        .strength-card li+li {
            margin-top: 8px;
        }

        .strength-card li::before {
            content: "/";
            color: var(--line);
            font-weight: 800;
            margin-right: 8px;
        }

        .about-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(320px, .72fr);
            gap: 28px;
            align-items: start;
        }

        .about-copy {
            color: var(--muted);
            font-size: 1.03rem;
        }

        .about-copy p+p {
            margin-top: 18px;
        }

        .about-copy strong {
            color: var(--text);
            font-weight: 800;
        }

        .info-list {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: rgba(21, 24, 17, .78);
            overflow: hidden;
        }

        .info-row {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 16px;
            padding: 16px 18px;
            border-bottom: 1px solid var(--border);
        }

        .info-row:last-child {
            border-bottom: 0;
        }

        .info-row span {
            color: var(--muted);
            font-size: .9rem;
        }

        .info-row strong {
            text-align: right;
            font-size: .94rem;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .tech-card {
            padding: 20px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 16px;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            min-height: 30px;
            padding: 0 10px;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 999px;
            background: rgba(255, 255, 255, .04);
            color: var(--soft);
            font-size: .8rem;
            font-weight: 700;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .project-card {
            overflow: hidden;
        }

        .project-top {
            min-height: 136px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background:
                linear-gradient(135deg, rgba(6, 199, 85, .28), rgba(47, 216, 200, .08)),
                rgba(255, 255, 255, .03);
        }

        .project-top.laravel {
            background:
                linear-gradient(135deg, rgba(255, 45, 32, .28), rgba(242, 193, 78, .08)),
                rgba(255, 255, 255, .03);
        }

        .project-top.ai {
            background:
                linear-gradient(135deg, rgba(47, 216, 200, .28), rgba(6, 199, 85, .07)),
                rgba(255, 255, 255, .03);
        }

        .project-top.vue {
            background:
                linear-gradient(135deg, rgba(66, 184, 131, .28), rgba(6, 199, 85, .08)),
                rgba(255, 255, 255, .03);
        }

        .project-top.devops {
            background:
                linear-gradient(135deg, rgba(255, 153, 0, .3), rgba(255, 45, 32, .08)),
                rgba(255, 255, 255, .03);
        }

        .project-top.ops {
            background:
                linear-gradient(135deg, rgba(242, 193, 78, .26), rgba(6, 199, 85, .08)),
                rgba(255, 255, 255, .03);
        }

        .project-index {
            color: var(--muted);
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: .82rem;
            font-weight: 800;
        }

        .project-name {
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: 1.42rem;
            font-weight: 800;
        }

        .project-body {
            padding: 22px;
        }

        .process {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            background: rgba(21, 24, 17, .78);
        }

        .process-step {
            padding: 24px;
            border-right: 1px solid var(--border);
        }

        .process-step:last-child {
            border-right: 0;
        }

        .process-step span {
            color: var(--line);
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: .82rem;
            font-weight: 800;
        }

        .process-step h3 {
            margin-top: 12px;
            margin-bottom: 8px;
            font-size: 1.05rem;
        }

        .process-step p {
            color: var(--muted);
            font-size: .9rem;
        }

        .contact-band {
            padding: 70px 0;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            background:
                linear-gradient(90deg, rgba(6, 199, 85, .16), rgba(255, 45, 32, .1)),
                rgba(21, 24, 17, .8);
        }

        .contact-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 28px;
            align-items: center;
        }

        .contact-layout h2 {
            font-size: 2.6rem;
            line-height: 1.12;
            font-weight: 800;
        }

        .contact-layout p {
            max-width: 650px;
            margin-top: 12px;
            color: var(--soft);
        }

        .contact-actions {
            display: grid;
            gap: 10px;
            min-width: 220px;
        }

        footer {
            padding: 34px 0;
            color: var(--muted);
            font-size: .9rem;
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
        }

        .reveal {
            opacity: 1;
            transform: none;
            transition: opacity .65s ease, transform .65s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 980px) {

            .hero-grid,
            .section-head,
            .about-layout,
            .contact-layout {
                grid-template-columns: 1fr;
            }

            .strength-grid,
            .tech-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .process {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .process-step:nth-child(2) {
                border-right: 0;
            }

            .process-step:nth-child(1),
            .process-step:nth-child(2) {
                border-bottom: 1px solid var(--border);
            }

            .hero h1 {
                font-size: 3.2rem;
            }
        }

        @media (max-width: 760px) {
            .wrap {
                padding: 0 14px;
            }

            section {
                padding: 64px 0;
            }

            .nav-links {
                display: none;
            }

            .site-nav .wrap {
                height: 64px;
            }

            .nav-cta {
                padding: 9px 12px;
                font-size: .82rem;
            }

            .hero {
                min-height: auto;
                padding: 58px 0 54px;
            }

            .hero h1 {
                font-size: 2rem;
                line-height: 1.12;
                text-wrap: auto;
            }

            .lead {
                font-size: 1rem;
            }

            .quick-facts,
            .strength-grid,
            .projects-grid,
            .tech-grid,
            .process {
                grid-template-columns: 1fr;
            }

            .hero-panel {
                min-width: 0;
            }

            .profile-line,
            .info-row {
                grid-template-columns: 1fr;
                gap: 4px;
            }

            .profile-line {
                display: grid;
            }

            .profile-line strong,
            .info-row strong {
                text-align: left;
                max-width: none;
            }

            .section-head h2,
            .contact-layout h2 {
                font-size: 2.05rem;
            }

            .process-step,
            .process-step:nth-child(2) {
                border-right: 0;
                border-bottom: 1px solid var(--border);
            }

            .process-step:last-child {
                border-bottom: 0;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>
    <nav class="site-nav" aria-label="Điều hướng chính">
        <div class="wrap">
            <a class="brand" href="#top" aria-label="Hai Nguyen">
                <span class="brand-mark">HN</span>
                <span>Hai Nguyen</span>
            </a>
            <div class="nav-links">
                <a href="#strengths">Thế mạnh</a>
                <a href="#about">Thông tin</a>
                <a href="#skills">Công nghệ</a>
                <a href="#projects">Dự án</a>
            </div>
            <a class="nav-cta" href="#contact">Liên hệ</a>
        </div>
    </nav>

    <main id="top">
        <header class="hero">
            <div class="wrap hero-grid">
                <div class="hero-copy">
                    <div class="eyebrow reveal">
                        <span class="live-dot"></span>
                        Full-stack Developer, sẵn sàng nhận dự án mới
                    </div>
                    <h1 class="reveal">Tôi xây dựng web app <span>Laravel + Vue</span> có LINE API và AI.</h1>
                    <p class="lead reveal">
                        Tôi là <strong>Hai Nguyen</strong>, tập trung vào các sản phẩm thực dụng cho doanh nghiệp:
                        backend Laravel chắc chắn, frontend Vue.js mượt, tích hợp <strong>LINE Platform</strong> và
                        ứng dụng <strong>AI/LLM</strong>, deploy lên <strong>AWS EC2</strong> để tự động hóa quy trình.
                    </p>
                    <div class="hero-actions reveal">
                        <a class="btn btn-primary" href="#strengths">Xem thế mạnh</a>
                        <a class="btn btn-secondary" href="mailto:hainguyenhai0066@gmail.com">Gửi email</a>
                    </div>
                    <div class="quick-facts reveal" aria-label="Tổng quan năng lực">
                        <div class="fact">
                            <strong>5+</strong>
                            <span>Năm kinh nghiệm phát triển web</span>
                        </div>
                        <div class="fact">
                            <strong>30+</strong>
                            <span>Dự án, module và tích hợp đã hoàn thành</span>
                        </div>
                        <div class="fact">
                            <strong>LINE + AI + AWS</strong>
                            <span>Tích hợp, deploy và vận hành</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-panel reveal" aria-label="Hồ sơ chuyên môn của Hai Nguyen">
                    <div class="panel-top">
                        <div class="window-dots" aria-hidden="true"><span></span><span></span><span></span></div>
                        <span class="mono">profile.production.json</span>
                    </div>
                    <div class="panel-body">
                        <div class="profile-line">
                            <span>Vai trò</span>
                            <strong>Full-stack Developer</strong>
                        </div>
                        <div class="profile-line">
                            <span>Backend</span>
                            <strong>Laravel, API, Queue, Eloquent, Testing</strong>
                        </div>
                        <div class="profile-line">
                            <span>Frontend</span>
                            <strong>Vue 3, Composition API, Pinia, Vite</strong>
                        </div>
                        <div class="profile-line">
                            <span>Tích hợp</span>
                            <strong>LINE Messaging API, LIFF, LINE Login, Webhook</strong>
                        </div>
                        <div class="profile-line">
                            <span>AI</span>
                            <strong>LLM, RAG, Embeddings, Automation</strong>
                        </div>
                        <div class="profile-line">
                            <span>Deploy</span>
                            <strong>AWS EC2, Nginx, SSL, Docker, CI/CD</strong>
                        </div>

                    </div>
                </aside>
            </div>
        </header>

        <section id="strengths">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="kicker">Thế mạnh nổi bật</span>
                        <h2>Năng lực rõ ràng, gắn trực tiếp với bài toán doanh nghiệp.</h2>
                    </div>
                    <p>
                        Tôi không chỉ viết giao diện hay API riêng lẻ. Điểm mạnh của tôi là kết nối các phần đó thành
                        một hệ thống chạy được, dễ mở rộng và tạo ra hiệu quả thật.
                    </p>
                </div>

                <div class="strength-grid">
                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--laravel)">BE</div>
                        <h3>Backend Laravel chắc chắn</h3>
                        <p>Thiết kế API, xử lý dữ liệu, phân quyền, queue và service layer theo hướng dễ bảo trì.</p>
                        <ul>
                            <li>REST/GraphQL API rõ contract</li>
                            <li>Eloquent, migration, policy, job queue</li>
                            <li>Testing cho luồng quan trọng</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--vue)">FE</div>
                        <h3>Frontend Vue.js thực dụng</h3>
                        <p>Xây SPA, dashboard và mini-app có tốc độ tốt, state rõ ràng và trải nghiệm người dùng mạch
                            lạc.</p>
                        <ul>
                            <li>Vue 3, Composition API, Pinia</li>
                            <li>Form, bảng dữ liệu, realtime UI</li>
                            <li>Responsive cho desktop và mobile</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--line)">LN</div>
                        <h3>Tích hợp LINE Platform chuyên sâu</h3>
                        <p>Biến LINE thành kênh chăm sóc khách hàng, đặt lịch, tích điểm, thông báo và chatbot.</p>
                        <ul>
                            <li>Messaging API, Webhook, Flex Message</li>
                            <li>LINE Login, LIFF, Rich Menu</li>
                            <li>Đồng bộ CRM và phân luồng CSKH</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--ai)">AI</div>
                        <h3>Ứng dụng AI/LLM vào sản phẩm</h3>
                        <p>Tích hợp AI theo mục tiêu cụ thể: hỏi đáp tài liệu, trợ lý nội bộ, phân loại nội dung và tự
                            động hóa.</p>
                        <ul>
                            <li>Prompt workflow, RAG, embeddings</li>
                            <li>Trợ lý AI theo dữ liệu doanh nghiệp</li>
                            <li>Kết nối AI với Laravel service</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--gold)">OP</div>
                        <h3>Tự động hóa quy trình</h3>
                        <p>Giảm thao tác thủ công bằng webhook, lịch chạy, notification, import/export và dashboard vận
                            hành.</p>
                        <ul>
                            <li>Automation cho sale, CSKH, báo cáo</li>
                            <li>Redis, queue, scheduler</li>
                            <li>Luồng dữ liệu ít lỗi, dễ kiểm tra</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--aws)">AWS</div>
                        <h3>Deploy AWS EC2 & vận hành server</h3>
                        <p>Đưa ứng dụng Laravel/Vue lên production, cấu hình server và xử lý các bước deploy thực tế.</p>
                        <ul>
                            <li>AWS EC2, Ubuntu, Nginx, SSL</li>
                            <li>Deploy Laravel, queue, scheduler</li>
                            <li>Env, storage, permission, log</li>
                        </ul>
                    </article>

                    <article class="strength-card reveal">
                        <div class="card-code" style="color: var(--soft)">DX</div>
                        <h3>Tư duy sản phẩm và kỹ thuật</h3>
                        <p>Làm rõ yêu cầu, chia nhỏ phạm vi, ưu tiên tính năng tạo giá trị và giữ codebase dễ phát triển
                            tiếp.</p>
                        <ul>
                            <li>Phân tích yêu cầu và đề xuất giải pháp</li>
                            <li>Code sạch, đặt tên rõ, module hóa</li>
                            <li>Triển khai, bàn giao, tài liệu hóa</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="kicker">Thông tin của tôi</span>
                        <h2>Full-stack developer thiên về tích hợp và tự động hóa.</h2>
                    </div>
                    <p>
                        Tôi phù hợp với các dự án cần một người có thể hiểu nghiệp vụ, thiết kế kỹ thuật, xây dựng
                        backend/frontend và kết nối các nền tảng bên ngoài.
                    </p>
                </div>

                <div class="about-layout">
                    <div class="about-copy reveal">
                        <p>
                            Tôi là <strong>Hai Nguyen</strong>, có kinh nghiệm xây dựng sản phẩm web với
                            <strong>Laravel</strong> ở backend và <strong>Vue.js</strong> ở frontend. Tôi ưu tiên giải
                            pháp có cấu trúc rõ, dễ mở rộng và phục vụ đúng mục tiêu kinh doanh.
                        </p>
                        <p>
                            Thế mạnh nổi bật của tôi là <strong>tích hợp LINE API</strong>: chatbot, LIFF app, LINE
                            Login, Rich Menu, Flex Message và webhook. Tôi có thể biến LINE thành một phần của hệ thống
                            CRM, bán hàng, đặt lịch hoặc chăm sóc khách hàng.
                        </p>
                        <p>
                            Với mảng <strong>AI/LLM</strong>, tôi tập trung đưa AI vào sản phẩm theo hướng thực tế:
                            trợ lý nội bộ, tìm kiếm tri thức, RAG trên tài liệu doanh nghiệp và các workflow tự động
                            giúp đội ngũ tiết kiệm thời gian.
                        </p>
                        <p>
                            Tôi cũng có kinh nghiệm <strong>deploy và vận hành trên AWS EC2</strong>: cấu hình Nginx,
                            SSL, domain, biến môi trường, queue, scheduler, log và các bước đưa Laravel/Vue lên môi
                            trường production ổn định.
                        </p>
                    </div>

                    <div class="info-list reveal">
                        <div class="info-row">
                            <span>Họ tên</span>
                            <strong>Hai Nguyen</strong>
                        </div>
                        <div class="info-row">
                            <span>Vị trí</span>
                            <strong>Full-stack Developer</strong>
                        </div>
                        <div class="info-row">
                            <span>Trọng tâm</span>
                            <strong>Laravel, Vue.js, LINE API, AI, AWS EC2</strong>
                        </div>
                        <div class="info-row">
                            <span>Email</span>
                            <strong><a href="mailto:hainguyenhai0066@gmail.com">hainguyenhai0066@gmail.com</a></strong>
                        </div>
                        <div class="info-row">
                            <span>Nhận dự án</span>
                            <strong style="color: var(--line)">Có, trao đổi qua email</strong>
                        </div>
                        <div class="info-row">
                            <span>Phù hợp</span>
                            <strong>Web app, CRM, chatbot, AI assistant, automation, AWS deploy</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="kicker">Công nghệ</span>
                        <h2>Stack tôi dùng để đưa sản phẩm vào vận hành.</h2>
                    </div>
                    <p>
                        Các nhóm công nghệ được chọn theo tính ổn định, tốc độ phát triển và khả năng bảo trì lâu dài.
                    </p>
                </div>

                <div class="tech-grid">
                    <article class="tech-card reveal">
                        <h3 style="color: var(--laravel)">Laravel</h3>
                        <p>Backend, API, auth, queue, scheduler, service layer, testing.</p>
                        <div class="tags">
                            <span class="tag">PHP 8.3</span>
                            <span class="tag">Eloquent</span>
                            <span class="tag">Queue</span>
                            <span class="tag">Livewire</span>
                        </div>
                    </article>

                    <article class="tech-card reveal">
                        <h3 style="color: var(--vue)">Vue.js</h3>
                        <p>SPA, dashboard, component system, state management và Vite build.</p>
                        <div class="tags">
                            <span class="tag">Vue 3</span>
                            <span class="tag">Pinia</span>
                            <span class="tag">Vite</span>
                            <span class="tag">TypeScript</span>
                        </div>
                    </article>

                    <article class="tech-card reveal">
                        <h3 style="color: var(--line)">LINE API</h3>
                        <p>Kết nối LINE với hệ thống web, CRM và quy trình chăm sóc khách hàng.</p>
                        <div class="tags">
                            <span class="tag">Messaging API</span>
                            <span class="tag">LIFF</span>
                            <span class="tag">LINE Login</span>
                            <span class="tag">Webhook</span>
                        </div>
                    </article>

                    <article class="tech-card reveal">
                        <h3 style="color: var(--ai)">AI/LLM</h3>
                        <p>Tích hợp AI vào workflow sản phẩm, tìm kiếm tri thức và trợ lý nội bộ.</p>
                        <div class="tags">
                            <span class="tag">LLM</span>
                            <span class="tag">RAG</span>
                            <span class="tag">Embeddings</span>
                            <span class="tag">Automation</span>
                        </div>
                    </article>

                    <article class="tech-card reveal">
                        <h3 style="color: var(--aws)">AWS & Deploy</h3>
                        <p>Deploy ứng dụng lên EC2, cấu hình Nginx, SSL, queue, scheduler và production env.</p>
                        <div class="tags">
                            <span class="tag">AWS EC2</span>
                            <span class="tag">Ubuntu</span>
                            <span class="tag">Nginx</span>
                            <span class="tag">SSL</span>
                        </div>
                    </article>

                    <article class="tech-card reveal">
                        <h3 style="color: var(--gold)">DevOps</h3>
                        <p>Chuẩn hóa quy trình build/deploy, Docker hóa môi trường và theo dõi log khi vận hành.</p>
                        <div class="tags">
                            <span class="tag">Docker</span>
                            <span class="tag">CI/CD</span>
                            <span class="tag">Linux</span>
                            <span class="tag">Redis</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="kicker">Dự án tiêu biểu</span>
                        <h2>Những dạng sản phẩm tôi có thể xây dựng tốt.</h2>
                    </div>
                    <p>
                        Phần này trình bày theo nhóm năng lực để khách hàng nhìn nhanh được bạn mạnh ở đâu và có thể
                        giải quyết bài toán nào.
                    </p>
                </div>

                <div class="projects-grid">
                    <article class="project-card reveal">
                        <div class="project-top">
                            <span class="project-index">CASE 01</span>
                            <div class="project-name">LINE Bot CRM</div>
                        </div>
                        <div class="project-body">
                            <h3>Hệ thống chăm sóc khách hàng qua LINE</h3>
                            <p>
                                Chatbot tự động, phân luồng hội thoại, Rich Menu động, webhook và đồng bộ khách hàng
                                với CRM nội bộ.
                            </p>
                            <div class="tags">
                                <span class="tag">LINE Messaging</span>
                                <span class="tag">Laravel</span>
                                <span class="tag">Webhook</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <div class="project-top ai">
                            <span class="project-index">CASE 02</span>
                            <div class="project-name">AI Knowledge Assistant</div>
                        </div>
                        <div class="project-body">
                            <h3>Trợ lý AI hỏi đáp tài liệu nội bộ</h3>
                            <p>
                                Tạo luồng RAG để nhân viên tra cứu tài liệu, quy trình và dữ liệu nội bộ nhanh hơn,
                                có kiểm soát nguồn tham chiếu.
                            </p>
                            <div class="tags">
                                <span class="tag">LLM</span>
                                <span class="tag">RAG</span>
                                <span class="tag">Vue.js</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <div class="project-top laravel">
                            <span class="project-index">CASE 03</span>
                            <div class="project-name">SaaS Admin Platform</div>
                        </div>
                        <div class="project-body">
                            <h3>Nền tảng quản lý bằng Laravel + Vue</h3>
                            <p>
                                Dashboard quản trị, phân quyền, quản lý dữ liệu, báo cáo, notification và các job chạy
                                nền cho nghiệp vụ doanh nghiệp.
                            </p>
                            <div class="tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">Vue 3</span>
                                <span class="tag">Redis</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <div class="project-top vue">
                            <span class="project-index">CASE 04</span>
                            <div class="project-name">LIFF Mini App</div>
                        </div>
                        <div class="project-body">
                            <h3>Mini-app chạy trực tiếp trong LINE</h3>
                            <p>
                                Ứng dụng đặt lịch, tích điểm, khảo sát hoặc form đăng ký dùng LINE Login và trải nghiệm
                                tối ưu cho mobile.
                            </p>
                            <div class="tags">
                                <span class="tag">LIFF</span>
                                <span class="tag">LINE Login</span>
                                <span class="tag">Mobile UI</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <div class="project-top devops">
                            <span class="project-index">CASE 05</span>
                            <div class="project-name">AWS EC2 Production</div>
                        </div>
                        <div class="project-body">
                            <h3>Deploy Laravel/Vue lên AWS EC2</h3>
                            <p>
                                Cấu hình server Ubuntu, Nginx, SSL, domain, env production, queue worker và scheduler
                                để ứng dụng chạy ổn định sau khi bàn giao.
                            </p>
                            <div class="tags">
                                <span class="tag">AWS EC2</span>
                                <span class="tag">Nginx</span>
                                <span class="tag">SSL</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <div class="project-top ops">
                            <span class="project-index">CASE 06</span>
                            <div class="project-name">Automation Workflow</div>
                        </div>
                        <div class="project-body">
                            <h3>Hệ thống tự động hóa tác vụ nền</h3>
                            <p>
                                Xây queue, scheduler, notification, import/export và log để giảm thao tác thủ công cho
                                các quy trình sale, CSKH và báo cáo.
                            </p>
                            <div class="tags">
                                <span class="tag">Laravel Queue</span>
                                <span class="tag">Scheduler</span>
                                <span class="tag">Redis</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="process">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="kicker">Cách làm việc</span>
                        <h2>Từ yêu cầu đến sản phẩm chạy ổn định.</h2>
                    </div>
                    <p>
                        Quy trình làm việc được giữ gọn để dự án đi nhanh nhưng vẫn rõ phạm vi, rõ trách nhiệm và dễ
                        bàn giao.
                    </p>
                </div>

                <div class="process reveal">
                    <article class="process-step">
                        <span>01</span>
                        <h3>Làm rõ nghiệp vụ</h3>
                        <p>Xác định mục tiêu, người dùng, dữ liệu và các luồng quan trọng cần ưu tiên.</p>
                    </article>
                    <article class="process-step">
                        <span>02</span>
                        <h3>Thiết kế giải pháp</h3>
                        <p>Chọn kiến trúc Laravel/Vue, mô hình dữ liệu, API và các điểm tích hợp LINE hoặc AI.</p>
                    </article>
                    <article class="process-step">
                        <span>03</span>
                        <h3>Xây dựng và kiểm thử</h3>
                        <p>Phát triển theo module, kiểm tra luồng chính, tối ưu trải nghiệm và hiệu năng.</p>
                    </article>
                    <article class="process-step">
                        <span>04</span>
                        <h3>Triển khai và cải tiến</h3>
                        <p>Deploy, theo dõi lỗi, bàn giao tài liệu và tiếp tục tối ưu theo phản hồi thực tế.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-band">
            <div class="wrap contact-layout">
                <div class="reveal">
                    <span class="kicker">Liên hệ</span>
                    <h2>Cần xây web app, LINE bot hoặc tích hợp AI?</h2>
                    <p>
                        Gửi cho tôi bối cảnh dự án, mục tiêu cần đạt và hệ thống hiện tại nếu có. Tôi sẽ giúp bạn
                        phân tích hướng làm phù hợp bằng Laravel, Vue.js, LINE API, AI/LLM hoặc deploy AWS EC2.
                    </p>
                </div>
                <div class="contact-actions reveal">
                    <a class="btn btn-primary" href="mailto:hainguyenhai0066@gmail.com">hainguyenhai0066@gmail.com</a>
                    <a class="btn btn-secondary" href="https://github.com/" target="_blank"
                        rel="noopener">GitHub</a>
                    <a class="btn btn-secondary" href="https://www.linkedin.com/" target="_blank"
                        rel="noopener">LinkedIn</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="wrap">
            <span>© {{ date('Y') }} Hai Nguyen. Full-stack Developer.</span>
            <span>Laravel · Vue.js · LINE API · AI/LLM · AWS EC2 · Automation</span>
        </div>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        document.querySelectorAll('.reveal').forEach((element, index) => {
            element.style.transitionDelay = `${(index % 4) * 70}ms`;
            observer.observe(element);
        });
    </script>
</body>

</html>
