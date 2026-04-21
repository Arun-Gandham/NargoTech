<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nargo Technologies | AI-Driven Software Solutions</title>
        <meta
            name="description"
            content="Nargo Technologies builds software products, AI agents, chatbots, automation systems, and digital growth platforms for modern businesses."
        >
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

            .text-brand {
                color: var(--brand);
            }

            .bg-brand-soft {
                background: var(--brand-soft);
            }

            .border-soft {
                border-color: var(--line) !important;
            }

            .shadow-soft {
                box-shadow: var(--shadow);
            }

            .navbar {
                min-height: 84px;
                background: rgba(255, 255, 255, 0.96);
                backdrop-filter: blur(16px);
                box-shadow: 0 10px 30px rgba(15, 26, 8, 0.04);
            }

            .navbar-brand img {
                width: 164px;
                height: auto;
            }

            .nav-link {
                color: var(--muted);
                font-weight: 600;
            }

            .nav-link:hover,
            .nav-link:focus {
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

            .hero-section {
                position: relative;
                padding: 2.75rem 0 5rem;
            }

            .hero-section::before {
                content: "";
                position: absolute;
                inset: 0 0 3rem;
                background:
                    radial-gradient(circle at left top, rgba(120, 193, 67, 0.16), transparent 28%),
                    radial-gradient(circle at right 20%, rgba(120, 193, 67, 0.1), transparent 22%),
                    linear-gradient(180deg, #fcfef9 0%, #ffffff 56%, #f7fbf3 100%);
                pointer-events: none;
            }

            .hero-content {
                position: relative;
                z-index: 1;
                justify-content: center;
            }

            .hero-copy {
                max-width: 52rem;
                margin: 0 auto;
                text-align: center;
            }

            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 0.65rem;
                padding: 0.7rem 1rem;
                border: 1px solid rgba(120, 193, 67, 0.2);
                border-radius: 999px;
                background: var(--brand-soft);
                color: var(--brand-dark);
                font-size: 0.9rem;
                font-weight: 700;
            }

            .hero-badge::before {
                content: "";
                width: 0.55rem;
                height: 0.55rem;
                border-radius: 50%;
                background: var(--brand);
                box-shadow: 0 0 0 0.35rem rgba(120, 193, 67, 0.12);
            }

            .hero-title {
                font-size: clamp(2.8rem, 5vw, 5.1rem);
                line-height: 0.95;
                letter-spacing: -0.04em;
                margin-left: auto;
                margin-right: auto;
            }

            .hero-text {
                color: var(--muted);
                font-size: 1.03rem;
                line-height: 1.85;
                max-width: 38rem;
                margin-left: auto;
                margin-right: auto;
            }

            .metric-card,
            .service-card,
            .info-card,
            .process-card,
            .logo-card,
            .cta-card {
                border: 1px solid var(--line);
                box-shadow: var(--shadow);
                transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            }

            .metric-card {
                background: #ffffff;
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

            .hero-actions {
                justify-content: center;
            }

            .logo-card {
                background:
                    radial-gradient(circle at top right, rgba(120, 193, 67, 0.12), transparent 26%),
                    #ffffff;
            }

            .logo-card img {
                max-width: 100%;
                width: 420px;
            }

            .cta-card {
                background:
                    radial-gradient(circle at right top, rgba(120, 193, 67, 0.10), transparent 24%),
                    #ffffff;
            }

            .navbar .btn,
            .hero-actions .btn,
            .cta-card .btn {
                transition: all 0.25s ease;
            }

            .footer-copy {
                color: var(--muted);
                border-top: 1px solid var(--line);
            }

            .footer-main {
                background:
                    radial-gradient(circle at top right, rgba(120, 193, 67, 0.08), transparent 24%),
                    #ffffff;
                border: 1px solid var(--line);
                box-shadow: var(--shadow);
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

            .footer-link:hover {
                color: var(--brand-dark);
            }

            @media (max-width: 767.98px) {
                .navbar-brand img {
                    width: 148px;
                }

                .hero-section {
                    padding-top: 1.25rem;
                }

                .hero-actions {
                    justify-content: center;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top border-bottom border-soft">
            <div class="container">
                <a class="navbar-brand me-4" href="#top" aria-label="Nargo Technologies home">
                    <img src="{{ asset('assets/brand/logo-full.png') }}" alt="Nargo Technologies logo">
                </a>

                <button
                    class="navbar-toggler border-soft shadow-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-controls="mainNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-auto mb-3 mb-lg-0 gap-lg-3">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#results">Results</a></li>
                        <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>

                    <a href="#contact" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Book a strategy call</a>
                </div>
            </div>
        </nav>

        <main id="top">
            <section class="hero-section">
                <div class="container">
                    <div class="row hero-content">
                        <div class="col-xl-8 col-lg-9">
                            <div class="hero-copy">
                            <h1 class="hero-title fw-bold mt-4 mb-4">
                                Build <span class="text-brand">smarter digital systems</span> that actually scale.
                            </h1>
                            <p class="hero-text mb-4">
                                Nargo Technologies delivers software services, product development, AI agents, AI-driven
                                chatbots, automation workflows, and digital marketing systems in one clean execution model.
                            </p>

                            <div class="hero-actions d-flex flex-column flex-sm-row gap-3 mb-4 mb-xl-5">
                                <a href="#services" class="btn btn-brand rounded-pill px-4 py-3 fw-semibold">Explore services</a>
                                <a href="#results" class="btn btn-outline-brand rounded-pill px-4 py-3 fw-semibold">See company impact</a>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4 col-sm-6">
                                    <div class="metric-card rounded-4 p-3 h-100">
                                        <div class="fs-2 fw-bold">120+</div>
                                        <div class="small text-muted-custom">Clients supported across software and growth projects</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="metric-card rounded-4 p-3 h-100">
                                        <div class="fs-2 fw-bold">180+</div>
                                        <div class="small text-muted-custom">Satisfied projects delivered with focused execution</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="metric-card rounded-4 p-3 h-100">
                                        <div class="fs-2 fw-bold">24/7</div>
                                        <div class="small text-muted-custom">Automation-ready systems built for speed and support</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5" id="services">
                <div class="container py-lg-4">
                    <div class="section-head">
                        <div class="section-label mb-2">Core services</div>
                        <h2 class="section-title display-6 fw-bold">Clean structure. Clear outcomes. Modern execution.</h2>
                        <p class="section-copy mb-0">
                            Built for companies that need software delivery, AI capability, and growth systems without disconnected vendors.
                        </p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">01</div>
                                <h3 class="h5 fw-bold">Software services</h3>
                                <p class="section-copy mb-0">Web platforms, dashboards, business systems, portals, and custom applications designed for real operational use.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">02</div>
                                <h3 class="h5 fw-bold">Product build</h3>
                                <p class="section-copy mb-0">MVP planning, architecture, UI implementation, and release-ready products built with speed and long-term clarity.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">03</div>
                                <h3 class="h5 fw-bold">AI agents</h3>
                                <p class="section-copy mb-0">Task automation, internal assistants, workflow orchestration, and AI systems that remove repetitive manual work.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">04</div>
                                <h3 class="h5 fw-bold">AI-driven chatbots</h3>
                                <p class="section-copy mb-0">Lead capture, support automation, customer response systems, and chatbot experiences connected to business goals.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">05</div>
                                <h3 class="h5 fw-bold">Digital marketing</h3>
                                <p class="section-copy mb-0">Landing pages, campaign assets, SEO support, conversion funnels, and analytics-led growth improvements.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="service-card rounded-4 p-4 h-100 bg-white">
                                <div class="service-icon mb-4">06</div>
                                <h3 class="h5 fw-bold">System integration</h3>
                                <p class="section-copy mb-0">Connect apps, automate handoffs, and align your software, CRM, chatbot, and marketing stack into one flow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5" id="process">
                <div class="container py-lg-4">
                    <div class="section-head">
                        <div class="section-label mb-2">How we work</div>
                        <h2 class="section-title display-6 fw-bold">A simpler process for software and AI delivery.</h2>
                        <p class="section-copy mb-0">
                            This version relies on Bootstrap grid, spacing, cards, and utilities instead of a large fully custom layout system.
                        </p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card rounded-4 p-4 h-100 bg-white">
                                <div class="process-step mb-4">01</div>
                                <h3 class="h5 fw-bold">Discover</h3>
                                <p class="section-copy mb-0">We define business goals, user flows, technical scope, and the role AI should actually play.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card rounded-4 p-4 h-100 bg-white">
                                <div class="process-step mb-4">02</div>
                                <h3 class="h5 fw-bold">Design</h3>
                                <p class="section-copy mb-0">We create clean interfaces, conversion-focused structure, and system architecture that is easy to extend.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card rounded-4 p-4 h-100 bg-white">
                                <div class="process-step mb-4">03</div>
                                <h3 class="h5 fw-bold">Build</h3>
                                <p class="section-copy mb-0">We develop products, automations, integrations, and chatbot workflows with production-ready implementation.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card rounded-4 p-4 h-100 bg-white">
                                <div class="process-step mb-4">04</div>
                                <h3 class="h5 fw-bold">Scale</h3>
                                <p class="section-copy mb-0">We refine performance, campaigns, analytics, and AI workflows so systems keep improving after launch.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="py-5 bg-brand-soft" id="results">
                <div class="container py-lg-4">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100">
                                <div class="section-label mb-2">Company impact</div>
                                <h2 class="section-title display-6 fw-bold mb-3">Reliable delivery for clients that need momentum.</h2>
                                <p class="section-copy mb-4">
                                    The homepage now keeps the message simple: strong service coverage, visible proof, and a cleaner Bootstrap-based structure.
                                </p>

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="rounded-4 p-4 bg-brand-soft border border-soft h-100">
                                            <div class="fs-2 fw-bold">120+</div>
                                            <div class="section-copy">Clients engaged across software, AI, and growth initiatives.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="rounded-4 p-4 bg-brand-soft border border-soft h-100">
                                            <div class="fs-2 fw-bold">180+</div>
                                            <div class="section-copy">Projects delivered with clear scope and measurable outcomes.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="rounded-4 p-4 bg-brand-soft border border-soft h-100">
                                            <div class="fs-2 fw-bold">92%</div>
                                            <div class="section-copy">Repeat engagement rate from businesses expanding with us.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="rounded-4 p-4 bg-brand-soft border border-soft h-100">
                                            <div class="fs-2 fw-bold">15+</div>
                                            <div class="section-copy">Industries supported through custom technology solutions.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100">
                                <div class="section-label mb-2">What clients need</div>
                                <h3 class="h3 fw-bold mb-4">Execution across product, AI, and marketing.</h3>

                                <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                                    <div class="process-step flex-shrink-0">✓</div>
                                    <div>
                                        <div class="fw-bold mb-1">One partner model</div>
                                        <div class="section-copy mb-0">Reduce delays between design, development, automation, and launch support.</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                                    <div class="process-step flex-shrink-0">✓</div>
                                    <div>
                                        <div class="fw-bold mb-1">AI-first delivery</div>
                                        <div class="section-copy mb-0">Use automation and intelligence where it improves speed, service quality, and scale.</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft">
                                    <div class="process-step flex-shrink-0">✓</div>
                                    <div>
                                        <div class="fw-bold mb-1">Business-focused builds</div>
                                        <div class="section-copy mb-0">Every system is designed to support revenue, operations, or customer experience.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="py-5" id="contact">
                <div class="container py-lg-4">
                    <div class="cta-card rounded-4 p-4 p-lg-5">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="section-label mb-2">Start now</div>
                                <h2 class="section-title display-6 fw-bold mb-3">Need a modern site or AI-ready product system?</h2>
                                <p class="section-copy mb-0">
                                    This page is now Bootstrap-first. The next logical step is wiring in your real contact details, portfolio items, and service pages.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-grid gap-3">
                                    <a href="mailto:support@nargotech.com" class="btn btn-brand rounded-pill py-3 fw-semibold">support@nargotech.com</a>
                                    <a href="#top" class="btn btn-outline-brand rounded-pill py-3 fw-semibold">Back to top</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
                <div class="footer-main rounded-4 p-4 p-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/brand/logo-full.png') }}" alt="Nargo Technologies logo" style="width: 180px;" class="mb-3">
                            <p class="section-copy mb-3">
                                Nargo Technologies helps businesses build software products, AI agents, chatbots, and digital growth systems with a clean modern approach.
                            </p>
                            <a href="mailto:support@nargotech.com" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">support@nargotech.com</a>
                        </div>

                        <div class="col-sm-6 col-lg-2">
                            <div class="footer-title mb-3">Company</div>
                            <div class="d-flex flex-column gap-2">
                                <a class="footer-link" href="#top">Home</a>
                                <a class="footer-link" href="#about">About</a>
                                <a class="footer-link" href="#process">Process</a>
                                <a class="footer-link" href="#contact">Contact</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-title mb-3">Services</div>
                            <div class="d-flex flex-column gap-2">
                                <a class="footer-link" href="#services">Software Services</a>
                                <a class="footer-link" href="#services">Product Build</a>
                                <a class="footer-link" href="#services">AI Agents</a>
                                <a class="footer-link" href="#services">Digital Marketing</a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="footer-title mb-3">Contact</div>
                            <div class="d-flex flex-column gap-2 section-copy">
                                <span>Email: support@nargotech.com</span>
                                <span>Available for software and AI projects</span>
                                <span>Modern websites, systems, and automation</span>
                            </div>
                        </div>
                    </div>

                    <div class="footer-copy pt-4 mt-4 d-flex flex-column flex-lg-row justify-content-between gap-2 small">
                        <span>&copy; {{ date('Y') }} Nargo Technologies. All rights reserved.</span>
                        <span>Software services, AI agents, chatbots, product build, and digital marketing.</span>
                    </div>
                </div>
        </footer>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
