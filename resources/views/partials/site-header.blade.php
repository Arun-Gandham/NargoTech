<nav class="navbar navbar-expand-lg sticky-top border-bottom border-soft">
    <div class="container">
        <a class="navbar-brand me-4" href="{{ route('site.home') }}" aria-label="Nargo Technologies home">
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
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.home') ? 'active' : '' }}" href="{{ route('site.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.services') ? 'active' : '' }}" href="{{ route('site.services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.about') ? 'active' : '' }}" href="{{ route('site.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.contact') ? 'active' : '' }}" href="{{ route('site.contact') }}">Contact</a>
                </li>
            </ul>

            <a href="{{ route('site.contact') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Book a strategy call</a>
        </div>
    </div>
</nav>
