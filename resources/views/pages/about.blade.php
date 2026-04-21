@extends('layouts.site')

@section('title', 'Nargo Technologies | About')

@section('content')
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-label mb-3">About us</div>
                <h1 class="page-hero-title fw-bold mb-4">A public website foundation built for <span class="text-brand">long-term growth</span>.</h1>
                <p class="section-copy fs-5 mb-0 mx-auto" style="max-width: 42rem;">
                    Nargo Technologies combines software delivery, product thinking, AI systems, and digital growth services under one execution model.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="info-card rounded-4 p-4 p-lg-5 bg-white">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="section-label mb-2">Who we are</div>
                                <h2 class="section-title h1 fw-bold mb-3">Modern technology execution with a clean structure.</h2>
                                <p class="section-copy mb-0">
                                    We help businesses plan, design, and deliver digital systems that are practical, scalable, and aligned to business outcomes.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-label mb-2">Why this structure</div>
                                <p class="section-copy mb-3">
                                    Your website is now divided into reusable layout files, shared partials, page views, and a controller layer so it can grow cleanly.
                                </p>
                                <p class="section-copy mb-0">
                                    That separation makes it easier to add future public pages and introduce an admin module without mixing responsibilities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
