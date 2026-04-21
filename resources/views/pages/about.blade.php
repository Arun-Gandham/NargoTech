@extends('layouts.site')

@section('title', 'Nargo Technologies | About')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3 fade-in">About us</div>
                <h1 class="page-hero-title fw-bold mb-4 fade-up delay-1">
                    We build <span class="text-brand">software, AI systems, and digital growth engines</span> for modern businesses.
                </h1>
                <p class="section-copy fs-5 mb-0 mx-auto fade-up delay-2" style="max-width: 44rem;">
                    Nargo Technologies combines software development, product execution, AI automation, chatbot systems,
                    and digital marketing into one connected service model designed for business growth.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100 fade-up">
                        <div class="section-label mb-2">Who we are</div>
                        <h2 class="section-title h1 fw-bold mb-3">A technology partner focused on useful execution.</h2>
                        <p class="section-copy mb-3">
                            Nargo Technologies is built for businesses that need more than a simple website vendor. We work
                            across planning, design, development, AI integration, automation, and digital growth so the final
                            system actually supports business operations and scale.
                        </p>
                        <p class="section-copy mb-3">
                            Our work covers custom software services, product build, AI agents, AI-driven chatbots, digital
                            marketing support, and system integration. Instead of treating each service as a separate project,
                            we connect them into one practical delivery model.
                        </p>
                        <p class="section-copy mb-0">
                            That means cleaner execution, fewer handoff problems, and a stronger foundation for businesses
                            that want modern systems with long-term value.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100 fade-up delay-1">
                        <div class="section-label mb-2">At a glance</div>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="bg-brand-soft border border-soft rounded-4 p-4 h-100">
                                    <div class="fs-2 fw-bold">120+</div>
                                    <div class="section-copy small mb-0">Clients supported</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-brand-soft border border-soft rounded-4 p-4 h-100">
                                    <div class="fs-2 fw-bold">180+</div>
                                    <div class="section-copy small mb-0">Projects delivered</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-brand-soft border border-soft rounded-4 p-4 h-100">
                                    <div class="fs-2 fw-bold">24/7</div>
                                    <div class="section-copy small mb-0">Automation-ready support</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-brand-soft border border-soft rounded-4 p-4 h-100">
                                    <div class="fs-2 fw-bold">15+</div>
                                    <div class="section-copy small mb-0">Industries served</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <img
                                src="{{ asset('assets/brand/logo-full.png') }}"
                                alt="Nargo Technologies logo"
                                class="img-fluid"
                                style="max-width: 240px;"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-brand-soft">
        <div class="container py-lg-4">
            <div class="section-head fade-up">
                <div class="section-label mb-2">What we do</div>
                <h2 class="section-title display-6 fw-bold">Core capabilities that support your full digital journey.</h2>
                <p class="section-copy mb-0">
                    Our service model is built to support both early-stage ideas and established businesses looking to modernize.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-1">
                        <div class="service-icon mb-4">01</div>
                        <h3 class="h5 fw-bold">Software Development</h3>
                        <p class="section-copy mb-0">
                            Websites, admin panels, dashboards, internal tools, portals, and custom business systems built for real workflows.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-2">
                        <div class="service-icon mb-4">02</div>
                        <h3 class="h5 fw-bold">Product Build</h3>
                        <p class="section-copy mb-0">
                            From MVP planning to launch-ready builds, we help shape digital products with clean structure and clear scope.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-3">
                        <div class="service-icon mb-4">03</div>
                        <h3 class="h5 fw-bold">AI Agents & Automation</h3>
                        <p class="section-copy mb-0">
                            AI-powered systems that automate repetitive tasks, assist teams, and improve operational speed.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-1">
                        <div class="service-icon mb-4">04</div>
                        <h3 class="h5 fw-bold">Chatbot Solutions</h3>
                        <p class="section-copy mb-0">
                            Smart chatbot experiences for customer support, lead capture, conversation workflows, and engagement.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-2">
                        <div class="service-icon mb-4">05</div>
                        <h3 class="h5 fw-bold">Digital Marketing</h3>
                        <p class="section-copy mb-0">
                            Campaign support, landing pages, SEO structure, and conversion-focused digital improvements.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card rounded-4 p-4 h-100 bg-white fade-up delay-3">
                        <div class="service-icon mb-4">06</div>
                        <h3 class="h5 fw-bold">System Integration</h3>
                        <p class="section-copy mb-0">
                            Connecting platforms, automations, tools, and business workflows into one reliable ecosystem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-4">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100 fade-up">
                        <div class="section-label mb-2">How we work</div>
                        <h2 class="section-title h1 fw-bold mb-3">Clear process. Practical delivery. Better outcomes.</h2>
                        <p class="section-copy mb-4">
                            We keep projects structured so clients always know what is being built, why it matters, and how it connects to business goals.
                        </p>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                            <div class="process-step flex-shrink-0">01</div>
                            <div>
                                <div class="fw-bold mb-1">Discover</div>
                                <div class="section-copy mb-0">Understand the business, goals, users, and real operational requirements.</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                            <div class="process-step flex-shrink-0">02</div>
                            <div>
                                <div class="fw-bold mb-1">Design</div>
                                <div class="section-copy mb-0">Shape the structure, interfaces, user flow, and technical direction.</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft mb-3">
                            <div class="process-step flex-shrink-0">03</div>
                            <div>
                                <div class="fw-bold mb-1">Build</div>
                                <div class="section-copy mb-0">Develop software, automations, chatbot flows, and integrated systems.</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 rounded-4 p-3 p-lg-4 bg-brand-soft border border-soft">
                            <div class="process-step flex-shrink-0">04</div>
                            <div>
                                <div class="fw-bold mb-1">Scale</div>
                                <div class="section-copy mb-0">Improve, optimize, and extend the system as business needs grow.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100 fade-up delay-1">
                        <div class="section-label mb-2">Why clients choose us</div>
                        <h2 class="section-title h1 fw-bold mb-3">One team across product, AI, and growth.</h2>
                        <p class="section-copy mb-4">
                            Businesses often struggle when development, automation, and marketing are handled in isolated tracks.
                            Nargo Technologies reduces that gap by bringing those capabilities into one connected delivery approach.
                        </p>

                        <ul class="section-copy ps-3 mb-0">
                            <li class="mb-3">We build systems with business outcomes in mind, not just technical delivery.</li>
                            <li class="mb-3">We combine software execution with AI-driven capabilities where they add real value.</li>
                            <li class="mb-3">We create cleaner handoffs between product build, automation, and digital growth.</li>
                            <li class="mb-3">We structure the public website and future admin direction in a maintainable way.</li>
                            <li>We focus on practical, scalable solutions instead of overcomplicated delivery.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="cta-card rounded-4 p-4 p-lg-5 fade-up">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <div class="section-label mb-2">Work with us</div>
                        <h2 class="section-title display-6 fw-bold mb-3">Need a partner for software, AI, or digital growth?</h2>
                        <p class="section-copy mb-0">
                            If you want a team that can handle websites, products, AI systems, chatbot flows, and growth support in one structure, we can help.
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
