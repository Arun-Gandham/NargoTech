@extends('layouts.site')

@section('title', 'Nargo Technologies | Contact')
@section('meta_description', 'Contact Nargo Technologies for software services, AI agents, chatbot solutions, product build, automation, and digital marketing support.')
@section('meta_keywords', 'contact Nargo Technologies, software project inquiry, AI project contact, chatbot development contact, digital marketing inquiry')
@section('canonical_url', route('site.contact'))
@section('og_type', 'website')
@section('schema_type', 'ContactPage')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3 fade-in">Contact</div>
                <h1 class="page-hero-title fw-bold mb-4 fade-up delay-1">
                    Let’s discuss your <span class="text-brand">software or AI project</span>.
                </h1>
                <p class="section-copy fs-5 mb-0 mx-auto fade-up delay-2" style="max-width: 42rem;">
                    Reach out to Nargo Technologies for software services, product build, AI automation, chatbot systems, and digital growth support.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="cta-card rounded-4 p-4 p-lg-5 h-100 fade-up">
                        <div class="section-label mb-2">Send inquiry</div>
                        <h2 class="section-title h1 fw-bold mb-3">Start with a direct conversation.</h2>
                        <p class="section-copy mb-4">
                            Submit your basic project details and we will review your inquiry and contact you.
                        </p>

                        @if (session('success'))
                            <div class="alert alert-success rounded-4 border-0 shadow-sm mb-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger rounded-4 border-0 shadow-sm mb-4" role="alert">
                                Please fix the highlighted fields and submit the form again.
                            </div>
                        @endif

                        <form action="{{ route('site.contact.submit') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold">Full name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control form-control-lg rounded-4 @error('name') is-invalid @enderror"
                                    placeholder="Your full name"
                                >
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email address</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control form-control-lg rounded-4 @error('email') is-invalid @enderror"
                                    placeholder="Optional email address"
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-semibold">Phone number</label>
                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    class="form-control form-control-lg rounded-4 @error('phone') is-invalid @enderror"
                                    placeholder="+91 or +1 ..."
                                >
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label fw-semibold">Details</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    class="form-control rounded-4 @error('message') is-invalid @enderror"
                                    placeholder="Tell us about your project or requirement"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 d-grid d-sm-flex gap-3 pt-2">
                                <button type="submit" class="btn btn-brand rounded-pill px-4 py-3 fw-semibold">
                                    Submit inquiry
                                </button>
                                <a href="{{ route('site.services') }}" class="btn btn-outline-brand rounded-pill px-4 py-3 fw-semibold">
                                    View services
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white h-100 fade-up delay-1">
                        <div class="section-label mb-2">Contact details</div>
                        <h2 class="section-title h2 fw-bold mb-3">Speak with the Nargo Technologies team.</h2>
                        <p class="section-copy mb-4">
                            We support software, AI, product, and digital growth projects. Use the form or contact us directly.
                        </p>

                        <div class="bg-brand-soft border border-soft rounded-4 p-4 mb-3">
                            <div class="fw-bold mb-1">Email</div>
                            <div class="section-copy mb-0">support@nargotech.com</div>
                        </div>

                        <div class="bg-brand-soft border border-soft rounded-4 p-4 mb-3">
                            <div class="fw-bold mb-1">Phone or email</div>
                            <div class="section-copy mb-0">You can submit either phone with details, or phone plus email if you want us to reply by email.</div>
                        </div>

                        <div class="bg-brand-soft border border-soft rounded-4 p-4">
                            <div class="fw-bold mb-1">Future-ready structure</div>
                            <div class="section-copy mb-0">This contact module now saves inquiries in the database and can later be connected to an admin panel.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
