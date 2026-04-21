@extends('layouts.site')

@section('title', 'Nargo Technologies | Services')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3 fade-in">Services</div>
                <h1 class="page-hero-title fw-bold mb-4 fade-up delay-1">Technology services built for <span class="text-brand">business growth</span>.</h1>
                <p class="section-copy fs-5 mb-0 mx-auto fade-up delay-2" style="max-width: 42rem;">
                    Explore the service areas Nargo Technologies delivers across software, product development, AI automation, and digital growth.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" id="software-services">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-1">
                        <div class="service-icon mb-4">01</div>
                        <h2 class="h3 fw-bold mb-3">Software Services</h2>
                        <p class="section-copy mb-4">Custom business systems, dashboards, portals, websites, and internal tools built for long-term use.</p>
                        <ul class="section-copy mb-0">
                            <li>Custom web applications</li>
                            <li>Admin dashboards and reporting tools</li>
                            <li>Business process systems</li>
                            <li>Website and portal development</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6" id="product-build">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-2">
                        <div class="service-icon mb-4">02</div>
                        <h2 class="h3 fw-bold mb-3">Product Build</h2>
                        <p class="section-copy mb-4">From concept to launch, we help shape MVPs and production-ready platforms with clean structure.</p>
                        <ul class="section-copy mb-0">
                            <li>MVP planning and scoping</li>
                            <li>UI implementation</li>
                            <li>Product architecture</li>
                            <li>Launch-ready delivery</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6" id="ai-agents">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-1">
                        <div class="service-icon mb-4">03</div>
                        <h2 class="h3 fw-bold mb-3">AI Agents</h2>
                        <p class="section-copy mb-4">Automate operations, support, and repetitive workflows with AI agents designed around actual business processes.</p>
                        <ul class="section-copy mb-0">
                            <li>Internal task automation</li>
                            <li>Operations assistants</li>
                            <li>Workflow orchestration</li>
                            <li>AI-enhanced productivity systems</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-2">
                        <div class="service-icon mb-4">04</div>
                        <h2 class="h3 fw-bold mb-3">AI-Driven Chatbots</h2>
                        <p class="section-copy mb-4">Conversational systems that support customer engagement, lead capture, support workflows, and smart response handling.</p>
                        <ul class="section-copy mb-0">
                            <li>Lead capture bots</li>
                            <li>Customer support bots</li>
                            <li>Website chatbot integration</li>
                            <li>Conversation design and workflows</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6" id="digital-marketing">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-1">
                        <div class="service-icon mb-4">05</div>
                        <h2 class="h3 fw-bold mb-3">Digital Marketing</h2>
                        <p class="section-copy mb-4">Growth-focused digital execution that supports your software or product rollout with measurable results.</p>
                        <ul class="section-copy mb-0">
                            <li>Landing pages and funnels</li>
                            <li>SEO support</li>
                            <li>Campaign content structure</li>
                            <li>Analytics-led optimization</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-card rounded-4 p-4 p-lg-5 h-100 bg-white fade-up delay-2">
                        <div class="service-icon mb-4">06</div>
                        <h2 class="h3 fw-bold mb-3">System Integration</h2>
                        <p class="section-copy mb-4">Connect your apps, tools, CRM, chatbot, and internal processes into one reliable delivery flow.</p>
                        <ul class="section-copy mb-0">
                            <li>Tool and platform integration</li>
                            <li>Automation handoffs</li>
                            <li>Data flow alignment</li>
                            <li>Unified business operations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
