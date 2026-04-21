<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Nargo Technologies | AI-Driven Software Solutions')</title>
        <meta
            name="description"
            content="@yield('meta_description', 'Nargo Technologies builds software products, AI agents, chatbots, automation systems, and digital growth platforms for modern businesses.')"
        >
        <link rel="icon" type="image/png" href="{{ asset('assets/brand/logo-icon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/brand/logo-icon.png') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        >

        <style>
            :root {
                --brand: #78c143;
                --brand-dark: #5f9a34;
                --brand-soft: #f7fbf3;
                --ink: #10130f;
                --muted: #5f6658;
                --line: rgba(16, 19, 15, 0.08);
                --shadow: 0 24px 60px rgba(15, 26, 8, 0.08);
                --shadow-lg: 0 30px 80px rgba(15, 26, 8, 0.10);
            }

            body {
                font-family: "Inter", sans-serif;
                color: var(--ink);
                background:
                    radial-gradient(circle at top left, rgba(120, 193, 67, 0.10), transparent 22%),
                    radial-gradient(circle at top right, rgba(120, 193, 67, 0.05), transparent 18%),
                    #ffffff;
            }

            .text-brand { color: var(--brand); }
            .bg-brand-soft { background: var(--brand-soft); }
            .border-soft { border-color: var(--line) !important; }
            .shadow-soft { box-shadow: var(--shadow); }

            .navbar {
                min-height: 84px;
                background: rgba(255, 255, 255, 0.96);
                backdrop-filter: blur(16px);
                box-shadow: 0 10px 30px rgba(15, 26, 8, 0.04);
            }

            .navbar-brand img { width: 164px; height: auto; }

            .nav-link {
                color: var(--muted);
                font-weight: 600;
            }

            .nav-link:hover,
            .nav-link:focus,
            .nav-link.active {
                color: var(--ink);
            }

            .btn-brand {
                background: var(--brand);
                border-color: var(--brand);
                color: #ffffff;
                box-shadow: 0 14px 32px rgba(120, 193, 67, 0.22);
            }

            .btn-brand:hover,
            .btn-brand:focus {
                background: var(--brand-dark);
                border-color: var(--brand-dark);
                color: #ffffff;
                transform: translateY(-1px);
            }

            .btn-outline-brand {
                border-color: rgba(120, 193, 67, 0.3);
                color: var(--brand-dark);
                background: rgba(255, 255, 255, 0.8);
            }

            .btn-outline-brand:hover,
            .btn-outline-brand:focus {
                background: var(--brand-soft);
                border-color: var(--brand);
                color: var(--brand-dark);
            }

            .section-copy,
            .text-muted-custom {
                color: var(--muted);
            }

            .section-label {
                color: var(--brand-dark);
                font-size: 0.82rem;
                font-weight: 800;
                letter-spacing: 0.16em;
                text-transform: uppercase;
            }

            .section-title {
                letter-spacing: -0.04em;
                line-height: 1.02;
            }

            .section-head {
                max-width: 52rem;
                margin: 0 auto 3rem;
                text-align: center;
            }

            .section-head .section-copy {
                max-width: 42rem;
                margin: 0.75rem auto 0;
            }

            .metric-card,
            .service-card,
            .info-card,
            .process-card,
            .footer-main,
            .cta-card {
                border: 1px solid var(--line);
                box-shadow: var(--shadow);
                transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            }

            .metric-card:hover,
            .service-card:hover,
            .process-card:hover {
                transform: translateY(-4px);
                box-shadow: var(--shadow-lg);
                border-color: rgba(120, 193, 67, 0.18);
            }

            .service-icon,
            .process-step {
                width: 3.25rem;
                height: 3.25rem;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 1rem;
                background: var(--brand-soft);
                color: var(--brand-dark);
                font-weight: 800;
            }

            .page-hero {
                position: relative;
                padding: 4rem 0 4.5rem;
            }

            .page-hero::before {
                content: "";
                position: absolute;
                inset: 0 0 2rem;
                background:
                    radial-gradient(circle at left top, rgba(120, 193, 67, 0.16), transparent 28%),
                    linear-gradient(180deg, #fcfef9 0%, #ffffff 65%);
                pointer-events: none;
            }

            .page-hero-content {
                position: relative;
                z-index: 1;
                max-width: 60rem;
                margin: 0 auto;
                text-align: center;
            }

            .page-hero-title {
                font-size: clamp(2.6rem, 5vw, 4.6rem);
                line-height: 0.96;
                letter-spacing: -0.04em;
            }

            .footer-main {
                background:
                    radial-gradient(circle at top right, rgba(120, 193, 67, 0.08), transparent 24%),
                    #ffffff;
            }

            .footer-title {
                font-size: 1rem;
                font-weight: 700;
                color: var(--ink);
            }

            .footer-link {
                color: var(--muted);
                text-decoration: none;
            }

            .footer-link:hover { color: var(--brand-dark); }

            .footer-copy {
                color: var(--muted);
                border-top: 1px solid var(--line);
            }

            .navbar .btn,
            .hero-actions .btn,
            .cta-card .btn {
                transition: all 0.25s ease;
            }

            .fade-in,
            .fade-up {
                opacity: 0;
                transition: opacity 0.7s ease, transform 0.7s ease;
                will-change: opacity, transform;
            }

            .fade-in {
                transform: translate3d(0, 0, 0);
            }

            .fade-up {
                transform: translate3d(0, 28px, 0);
            }

            .is-visible {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }

            .delay-1 { transition-delay: 0.1s; }
            .delay-2 { transition-delay: 0.2s; }
            .delay-3 { transition-delay: 0.3s; }
            .delay-4 { transition-delay: 0.4s; }

            @media (prefers-reduced-motion: reduce) {
                .fade-in,
                .fade-up {
                    opacity: 1;
                    transform: none;
                    transition: none;
                }
            }

            @media (max-width: 767.98px) {
                .navbar-brand img { width: 148px; }
                .page-hero { padding-top: 2rem; }
            }
        </style>

        @stack('styles')
    </head>
    <body>
        @include('partials.site-header')

        <main id="top">
            @yield('content')
        </main>

        @include('partials.site-footer')

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const animatedElements = document.querySelectorAll('.fade-in, .fade-up');

                if (!animatedElements.length) {
                    return;
                }

                const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                if (reduceMotion || !('IntersectionObserver' in window)) {
                    animatedElements.forEach((element) => element.classList.add('is-visible'));
                    return;
                }

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.15,
                    rootMargin: '0px 0px -40px 0px',
                });

                animatedElements.forEach((element) => observer.observe(element));
            });
        </script>
        @stack('scripts')
    </body>
</html>
