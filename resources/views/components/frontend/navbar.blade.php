<header class="header-with-topbar">
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/frontend/images/logo-white.png" data-at2x="/frontend/images/logo-white.png" alt="" class="default-logo">
                    <img src="/frontend/images/logo-black.png" data-at2x="/frontend/images/logo-black.png" alt="" class="alt-logo">
                    <img src="/frontend/images/logo-black.png" data-at2x="/frontend/images/logo-black.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto col-lg-6 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">{{ __('navbar.home') }}</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">{{ __('navbar.about') }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="{{ url('/about/staff') }}"><i class="fa-solid fa-people-roof"></i>{{ __('navbar.staff') }}</a></li>
                                <li><a href="{{ url('/about/roster') }}"><i class="fa-solid fa-table-list"></i>{{ __('navbar.roster') }}</a></li>
                                <li><a href="{{ url('/about/airspace')}}"><i class="fa-solid fa-earth-americas"></i>{{ __('navbar.airspace') }}</a></li>
                                <li><a href="https://ko-fi.com/vatmex" target="_blank"><i class="fa-solid fa-hand-holding-hand"></i>{{ __('navbar.donate') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">{{ __('navbar.publications') }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="{{ url('/publications/policies') }}"><i class="fa-solid fa-scale-balanced"></i>{{ __('navbar.policies') }}</a></li>
                                <li><a href="{{ url('/publications/news') }}"><i class="fa-solid fa-newspaper"></i>{{ __('navbar.news') }}</a></li>
                                <li><a href="{{ url('/publications/notams') }}"><i class="fa-solid fa-rss"></i>{{ __('navbar.notams') }}</a></li>
                                <li><a href="{{ url('/publications/loas') }}"><i class="fa-regular fa-handshake"></i>{{ __('navbar.loas') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ url('/events') }}" class="nav-link">{{ __('navbar.events') }}</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">{{ __('navbar.controllers') }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="https://training.vatmex.com.mx/" target="_blank"><i class="fa-solid fa-chalkboard-teacher"></i>{{ __('navbar.training_portal') }}</a></li>
                                <li><a href="https://sop.vatmex.com.mx/" target="_blank"><i class="fa-solid fa-book"></i>{{ __('navbar.sops') }}</a></li>
                                <li><a href="https://virtualairtrafficsystem.com/" target="_blank"><i class="fa-solid fa-download"></i>{{ __('navbar.vatsys_download') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="#" class="nav-link">{{ __('navbar.contact') }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="{{ url('/contact/request') }}"><i class="fa-solid fa-calendar-check"></i>{{ __('navbar.request_atc') }}</a></li>
                                <li><a href="{{ url('/contact/feedback') }}"><i class="fa-regular fa-comments"></i>{{ __('navbar.controller_feedback') }}</a></li>
                                <li><a href="{{ url('/contact/ask') }}"><i class="fa-solid fa-person-circle-question"></i>{{ __('navbar.ask_the_staff') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ url('/apply') }}" class="nav-link">{{ __('navbar.join') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-3 text-end lg-pe-5px">
                <div class="header-icon">
                    <div class="header-search-icon icon">
                        @if (App::getLocale() == 'en')
                            <a href="{{ route('locale', 'es') }}"><i class="fa-solid fa-language"></i> ESP</a>
                        @elseif (App::getLocale() == 'es')
                            <a href="{{ route('locale', 'en') }}"><i class="fa-solid fa-language"></i> ENG</a>
                        @endif
                    </div>
                    <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
                        <a href="{{ url('/auth/login') }}" class="btn btn-white btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                            <span>
                                <span class="btn-double-text" data-text="Login with VATSIM">Login with VATSIM</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
