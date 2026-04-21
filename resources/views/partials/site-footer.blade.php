<footer class="">
    <div class="footer-main rounded-4 p-4 p-lg-5">
            <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/brand/logo-full.png') }}" alt="Nargo Technologies logo" style="width: 180px;" class="mb-3">
                    <p class="section-copy mb-3">
                        Nargo Technologies helps businesses build software products, AI agents, chatbots, and digital growth systems with a clean modern approach.
                    </p>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="footer-title mb-3">Company</div>
                    <div class="d-flex flex-column gap-2">
                        <a class="footer-link" href="{{ route('site.home') }}">Home</a>
                        <a class="footer-link" href="{{ route('site.about') }}">About</a>
                        <a class="footer-link" href="{{ route('site.services') }}">Services</a>
                        <a class="footer-link" href="{{ route('site.contact') }}">Contact</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="footer-title mb-3">Services</div>
                    <div class="d-flex flex-column gap-2">
                        <a class="footer-link" href="{{ route('site.services') }}#software-services">Software Services</a>
                        <a class="footer-link" href="{{ route('site.services') }}#product-build">Product Build</a>
                        <a class="footer-link" href="{{ route('site.services') }}#ai-agents">AI Agents</a>
                        <a class="footer-link" href="{{ route('site.services') }}#digital-marketing">Digital Marketing</a>
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
    </div>
</footer>
