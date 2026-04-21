@extends('layouts.site')

@section('title', 'Nargo Technologies | Contact')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3">Contact</div>
                <h1 class="page-hero-title fw-bold mb-4">Let’s discuss your <span class="text-brand">software or AI project</span>.</h1>
                <p class="section-copy fs-5 mb-0 mx-auto" style="max-width: 42rem;">
                    Reach out to Nargo Technologies for software services, product build, AI automation, chatbot systems, and digital growth support.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cta-card rounded-4 p-4 p-lg-5 text-center">
                        <div class="section-label mb-2">Get in touch</div>
                        <h2 class="section-title h1 fw-bold mb-3">Start with a direct conversation.</h2>
                        <p class="section-copy mb-4">
                            This page is ready for a future contact form, CRM integration, or admin-managed inquiries module.
                        </p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="mailto:support@nargotech.com" class="btn btn-brand rounded-pill px-4 py-3 fw-semibold">support@nargotech.com</a>
                            <a href="{{ route('site.services') }}" class="btn btn-outline-brand rounded-pill px-4 py-3 fw-semibold">View services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
