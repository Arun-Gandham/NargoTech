@extends('layouts.site')

@section('title', 'Nargo Technologies | Home')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3">AI-driven software partner for modern business</div>
                <h1 class="page-hero-title fw-bold mb-4">
                    Build <span class="text-brand">smarter digital systems</span> that actually scale.
                </h1>
                <p class="section-copy fs-5 mb-4 mx-auto" style="max-width: 42rem;">
                    Nargo Technologies delivers software services, product development, AI agents, AI-driven chatbots,
                    automation workflows, and digital marketing systems in one clean execution model.
                </p>

                <div class="hero-actions d-flex flex-column flex-sm-row justify-content-center gap-3 mb-5">
                    <a href="{{ route('site.services') }}" class="btn btn-brand rounded-pill px-4 py-3 fw-semibold">Explore services</a>
                    <a href="{{ route('site.contact') }}" class="btn btn-outline-brand rounded-pill px-4 py-3 fw-semibold">Start a project</a>
                </div>

                <div class="row g-3 justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="metric-card rounded-4 p-3 h-100 bg-white">
                            <div class="fs-2 fw-bold">120+</div>
                            <div class="small text-muted-custom">Clients supported across software and growth projects</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="metric-card rounded-4 p-3 h-100 bg-white">
                            <div class="fs-2 fw-bold">180+</div>
                            <div class="small text-muted-custom">Satisfied projects delivered with focused execution</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="metric-card rounded-4 p-3 h-100 bg-white">
                            <div class="fs-2 fw-bold">24/7</div>
                            <div class="small text-muted-custom">Automation-ready systems built for speed and support</div>
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

    <section class="py-5 bg-brand-soft">
        <div class="container py-lg-4">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100">
                        <div class="section-label mb-2">Company impact</div>
                        <h2 class="section-title display-6 fw-bold mb-3">Reliable delivery for clients that need momentum.</h2>
                        <p class="section-copy mb-4">
                            The public site is now structured to grow into multiple pages and support a future admin module without mixing everything into one file.
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
                            <div class="process-step flex-shrink-0">&#10003;</div>
                            <div>
                                <div class="fw-bold mb-1">One partner model</div>
                                <div class="section-copy mb-0">Reduce delays between design, development, automation, and launch support.</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                            <div class="process-step flex-shrink-0">&#10003;</div>
                            <div>
                                <div class="fw-bold mb-1">AI-first delivery</div>
                                <div class="section-copy mb-0">Use automation and intelligence where it improves speed, service quality, and scale.</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft">
                            <div class="process-step flex-shrink-0">&#10003;</div>
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

    <section class="py-5" id="process">
        <div class="container py-lg-4">
            <div class="section-head">
                <div class="section-label mb-2">How we work</div>
                <h2 class="section-title display-6 fw-bold">A simpler process for software and AI delivery.</h2>
                <p class="section-copy mb-0">
                    This website layer is now separated into layout, partials, controllers, and pages so future features stay maintainable.
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

    <section class="py-5" id="contact">
        <div class="container py-lg-4">
            <div class="cta-card rounded-4 p-4 p-lg-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <div class="section-label mb-2">Start now</div>
                        <h2 class="section-title display-6 fw-bold mb-3">Need a modern site or AI-ready product system?</h2>
                        <p class="section-copy mb-0">
                            This public site is now ready for more pages and ready to sit beside a future admin module without mixing public and internal features.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-grid gap-3">
                            <a href="{{ route('site.contact') }}" class="btn btn-brand rounded-pill py-3 fw-semibold">Contact us</a>
                            <a href="{{ route('site.services') }}" class="btn btn-outline-brand rounded-pill py-3 fw-semibold">View services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
