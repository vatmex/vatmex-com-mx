<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Inicio | VATMEX</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="VATSIM México">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="VATMEX es la división mexicana de VATSIM. Nuestro propósito es brindar servicio de control de tránsito aéreo en México, al igual que proveer constante entrenamiento y recursos a controladores y pilotos virtuales que deseen participar en la división.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="/frontend/css/vendors.min.css"/>
        <link rel="stylesheet" href="/frontend/css/icon.min.css"/>
        <link rel="stylesheet" href="/frontend/css/style.css"/>
        <link rel="stylesheet" href="/frontend/css/responsive.css"/>
        <link rel="stylesheet" href="/frontend/css/vatmex.css" />
    </head>
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        <!-- start header -->
        <header class="header-with-topbar">
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="demo-hosting.html">
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
                                <li class="nav-item"><a href="demo-hosting.html" class="nav-link">{{ __('navbar.home') }}</a></li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-it-business-services.html" class="nav-link">{{ __('navbar.about') }}</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-people-roof"></i>{{ __('navbar.staff') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-table-list"></i>{{ __('navbar.roster') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-earth-americas"></i>{{ __('navbar.airspace') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-hand-holding-hand"></i>{{ __('navbar.donate') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-it-business-services.html" class="nav-link">{{ __('navbar.publications') }}</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-scale-balanced"></i>{{ __('navbar.policies') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-newspaper"></i>{{ __('navbar.news') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-rss"></i>{{ __('navbar.notams') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="demo-hosting-domain.html" class="nav-link">{{ __('navbar.events') }}</a></li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-it-business-services.html" class="nav-link">{{ __('navbar.controllers') }}</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-chalkboard-teacher"></i>{{ __('navbar.training_portal') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-book"></i>{{ __('navbar.sops') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-regular fa-handshake"></i>{{ __('navbar.loas') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-download"></i>{{ __('navbar.vatsys_download') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-it-business-services.html" class="nav-link">{{ __('navbar.contact') }}</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-calendar-check"></i>{{ __('navbar.request_atc') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-regular fa-comments"></i>{{ __('navbar.controller_feedback') }}</a></li>
                                        <li><a href="demo-it-business-services-details.html"><i class="fa-solid fa-person-circle-question"></i>{{ __('navbar.ask_the_staff') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="demo-hosting-contact.html" class="nav-link">{{ __('navbar.join') }}</a></li>
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
                                <a href="#" class="btn btn-white btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                                    <span>
                                        <span class="btn-double-text" data-text="Login with VATSIM">Login with VATSIM</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start banner -->
        <section class="cover-background full-screen bg-dark-gray ipad-top-space-margin position-relative section-dark md-h-auto" style="background-image: url('/frontend/images/demo-hosting-home-bg.jpg')">
            <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#ed00a8", "#ed00a8", "#ed00a8", "#ed00a8"]},"shape": {"type": "edge","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.8,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 5,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-xl-7 col-lg-8 col-md-10 text-white position-relative text-center text-lg-start">
                        <div class="fs-90 sm-fs-80 xs-fs-70 fw-600 mb-20px ls-minus-4px overflow-hidden">
                            <div class="d-inline-block" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900 }'>
                                Power up web with
                                <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="1500">
                                    hosting<span><img src="/frontend/images/highlight-separator.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="fs-19 fw-300 mb-30px w-80 sm-w-100 opacity-6 d-block mx-auto mx-lg-0 overflow-hidden">
                            <span class="d-inline-block lh-32" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 300 }'>VATMEX es la división mexicana de VATSIM. Nuestro propósito es brindar servicio de control de tránsito aéreo en México, al igual que proveer constante entrenamiento y recursos a controladores y pilotos virtuales que deseen participar en la división.</span>
                        </div>
                        <div class="overflow-hidden pt-5px">
                            <a href="demo-hosting-hosting.html" class="btn btn-extra-large btn-yellow btn-rounded btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                <span>
                                    <span class="btn-double-text" data-text="Request training">{{ __('home.hero.request_training') }}</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="outside-box-right-7 position-relative" data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 1200, "delay": 200 }'>
                            <img class="w-100" src="https://via.placeholder.com/724x792" alt="">
                            <img class="w-100 position-absolute left-minus-2px top-minus-5px animation-float" src="https://via.placeholder.com/724x792" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->
        <!-- start section -->
        <section class="bg-very-light-gray pt-20px pb-20px sm-pt-40px" data-anime='{ "opacity": [0, 1], "translateY": [0, 0], "easing": "easeOutQuad", "duration": 1000,"staggervalue": 300, "delay": 600 }'>
            <div class="container overlap-section">
                <div class="row justify-content-center overlap-section border-radius-6px overflow-hidden g-0 box-shadow-extra-large">
                    <div class="col-lg-9 text-center fw-600 fs-24 lg-fs-22 ls-minus-05px text-dark-gray bg-white p-30px md-p-20px">Are you planning a group flight with your virtual airline or pilot group?</div>
                    <div class="col-lg-3 text-center bg-yellow pt-30px pb-30px md-p-20px"><a href="demo-hosting-pricing.html" class="fw-700 text-dark-gray text-dark-gray-hover fs-24 lg-fs-20 ls-minus-05px">Request ATC<i class="feather icon-feather-arrow-right ms-5px"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-very-light-gray pt-20px pb-20px sm-pt-40px">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-12 col-md-5 text-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                        <span class="ls-2px text-uppercase text-dark-gray fw-500 lh-22 mb-10px d-block">Browse the <span class="d-inline-block border-2 border-bottom border-color-transparent-base-color fw-800">latest</span></span>
                        <h3 class="fw-600 text-dark-gray alt-font ls-minus-1px w-90 mx-auto sm-w-100 sm-mb-20px">Latest News</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="position: relative; height: 1060.28px;">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item" style="position: absolute; left: 0%; top: 0px; transition: none;">
                                <div class="card border-radius-6px border-0 box-shadow-medium-bottom box-shadow-medium-bottom-hover">
                                    <div class="blog-image">
                                        <a href="demo-blogger-blog-single-classic.html" class="d-block"><img src="https://placehold.co/290x207" alt="" data-no-retina=""></a>
                                        <div class="blog-categories">
                                            <a href="#" class="categories-btn bg-dark-gray-transparent text-white text-uppercase fw-600">Fashion</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-11">
                                        <a href="demo-blogger-blog-single-classic.html" class="card-title mb-15px fw-600 fs-18 lh-26 text-dark-gray d-inline-block">In difficult times, fashion is always outrageous.</a>
                                        <p>Lorem ipsum dolor consectetur adipiscing elit finibus purus..</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-15 text-uppercase">
                                            <div class="me-auto">
                                                <span class="text-dark-gray blog-date d-inline-block fw-600 text-transform-none">30 December 2023</span>
                                                <div class="text-dark-gray d-inline-block author-name text-transform-none">By <a href="#" class="text-dark-gray text-decoration-line-bottom fw-600">Andy glamer</a></div>
                                            </div>
                                            <div class="like-count fs-14">
                                                <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-700">45</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item" style="position: absolute; left: 25%; top: 0px; transition: none;">
                                <div class="card border-radius-6px border-0 box-shadow-medium-bottom box-shadow-medium-bottom-hover">
                                    <div class="blog-image">
                                        <a href="demo-blogger-blog-single-classic.html" class="d-block"><img src="https://placehold.co/290x207" alt="" data-no-retina=""></a>
                                        <div class="blog-categories">
                                            <a href="#" class="categories-btn bg-dark-gray-transparent text-white text-uppercase fw-600">Lifestyle</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-11">
                                        <a href="demo-blogger-blog-single-classic.html" class="card-title mb-15px fw-600 fs-18 lh-26 text-dark-gray d-inline-block">We must never confuse elegance with snobbery.</a>
                                        <p>Lorem ipsum dolor consectetur adipiscing elit finibus purus..</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-15 text-uppercase">
                                            <div class="me-auto">
                                                <span class="text-dark-gray blog-date d-inline-block fw-600 text-transform-none">30 December 2023</span>
                                                <div class="text-dark-gray d-inline-block author-name text-transform-none">By <a href="#" class="text-dark-gray text-decoration-line-bottom fw-600">Den viliamson</a></div>
                                            </div>
                                            <div class="like-count fs-14">
                                                <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-700">45</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item" style="position: absolute; left: 50%; top: 0px; transition: none;">
                                <div class="card border-radius-6px border-0 box-shadow-medium-bottom box-shadow-medium-bottom-hover">
                                    <div class="blog-image">
                                        <a href="demo-blogger-blog-single-classic.html" class="d-block"><img src="https://placehold.co/290x207" alt="" data-no-retina=""></a>
                                        <div class="blog-categories">
                                            <a href="#" class="categories-btn bg-dark-gray-transparent text-white text-uppercase fw-600">Style</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-11">
                                        <a href="demo-blogger-blog-single-classic.html" class="card-title mb-15px fw-600 fs-18 lh-26 text-dark-gray d-inline-block">Elegance is not standing out, but being remembered.</a>
                                        <p>Lorem ipsum dolor consectetur adipiscing elit finibus purus..</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-15 text-uppercase">
                                            <div class="me-auto">
                                                <span class="text-dark-gray blog-date d-inline-block fw-600 text-transform-none">28 December 2023</span>
                                                <div class="text-dark-gray d-inline-block author-name text-transform-none">By <a href="#" class="text-dark-gray text-decoration-line-bottom fw-600">Jones robbert</a></div>
                                            </div>
                                            <div class="like-count fs-14">
                                                <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-700">45</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item" style="position: absolute; left: 75%; top: 0px; transition: none;">
                                <div class="card border-radius-6px border-0 box-shadow-medium-bottom box-shadow-medium-bottom-hover">
                                    <div class="blog-image">
                                        <a href="demo-blogger-blog-single-classic.html" class="d-block"><img src="https://placehold.co/290x207" alt="" data-no-retina=""></a>
                                        <div class="blog-categories">
                                            <a href="#" class="categories-btn bg-dark-gray-transparent text-white text-uppercase fw-600">Lookbook</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-11">
                                        <a href="demo-blogger-blog-single-classic.html" class="card-title mb-15px fw-600 fs-18 lh-26 text-dark-gray d-inline-block">One should always dress like a marble column.</a>
                                        <p>Lorem ipsum dolor consectetur adipiscing elit finibus purus..</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-15 text-uppercase">
                                            <div class="me-auto">
                                                <span class="text-dark-gray blog-date d-inline-block fw-600 text-transform-none">26 December 2023</span>
                                                <div class="text-dark-gray d-inline-block author-name text-transform-none">By <a href="#" class="text-dark-gray text-decoration-line-bottom fw-600">Rosald smith</a></div>
                                            </div>
                                            <div class="like-count fs-14">
                                                <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-700">45</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <section id="events" class="position-relative pb-30px pt-50px">
            <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0 d-none d-md-block" style="background-image: url('/frontend/images/demo-music-onepage-vertical-line-bg.svg')"></div>
            <div class="container position-relative">
                <div class="row justify-content-center mb-1">
                    <div class="col-12 col-md-5 text-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                        <span class="ls-2px text-uppercase text-dark-gray fw-500 lh-22 mb-10px d-block">Be ready for your next <span class="d-inline-block border-2 border-bottom border-color-transparent-base-color fw-800">adventure</span></span>
                        <h3 class="fw-600 text-dark-gray alt-font ls-minus-1px w-90 mx-auto sm-w-100 sm-mb-20px">Upcoming Events</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 pt-25px pb-30px border-bottom border-color-transparent-dark-light tracklist-style transition">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <span class="fw-600 text-uppercase text-black">22 Jul</span>
                            </div>
                            <div class="col-md-5 col-xl-6 text-center text-md-start sm-mb-15px">
                                <a href="#" class="text-black">Videotron center</a>
                                <span class="fs-16 d-block lh-15 mt-5px">Manhadtan, NY, United States</span>
                            </div>
                            <div class="col-md-2 text-center sm-mb-10px">
                                <span class="pt-5px pb-5px ps-15px pe-15px border-radius-100px text-uppercase bg-black-russian-gray fs-12 fw-700">Sold out</span>
                            </div>
                            <div class="col-md-3 col-xl-2 text-center">
                                <a href="#" class="btn btn-link btn-hover-animation-switch btn-large text-base-color primary-font fw-700">
                                    <span>
                                        <span class="btn-text">Join Event</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 pt-25px pb-30px border-bottom border-color-transparent-dark-light tracklist-style transition">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <span class="fw-600 text-uppercase text-black">08 Aug</span>
                            </div>
                            <div class="col-md-5 col-xl-6 text-center text-md-start sm-mb-15px">
                                <a href="#" class="text-black">Spotify on stage</a>
                                <span class="fs-16 d-block lh-15 mt-5px">Suncorp stadium, Brisbane, Australia</span>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3 col-xl-2 text-center">
                                <a href="#" class="btn btn-link btn-hover-animation-switch btn-large text-base-color primary-font fw-700">
                                    <span>
                                        <span class="btn-text">Join Event</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 pt-25px pb-30px border-bottom border-color-transparent-dark-light tracklist-style transition">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <span class="fw-600 text-uppercase text-black">28 Aug</span>
                            </div>
                            <div class="col-md-5 col-xl-6 text-center text-md-start sm-mb-15px">
                                <a href="#" class="text-black">Halloween bitchy land</a>
                                <span class="fs-16 d-block lh-15 mt-5px">Mediolanum forum, Milan, Italy</span>
                            </div>
                            <div class="col-md-2 text-center sm-mb-10px">
                                <span class="pt-5px pb-5px ps-15px pe-15px border-radius-100px text-uppercase bg-black-russian-gray fs-12 fw-700">Sold out</span>
                            </div>
                            <div class="col-md-3 col-xl-2 text-center">
                                <a href="#" class="btn btn-link btn-hover-animation-switch btn-large text-base-color primary-font fw-700">
                                    <span>
                                        <span class="btn-text">Join Event</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 pt-25px pb-30px border-bottom border-color-transparent-dark-light tracklist-style transition">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <span class="fw-600 text-uppercase text-black">28 Aug</span>
                            </div>
                            <div class="col-md-5 col-xl-6 text-center text-md-start sm-mb-15px">
                                <a href="#" class="text-black">Halloween bitchy land</a>
                                <span class="fs-16 d-block lh-15 mt-5px">Mediolanum forum, Milan, Italy</span>
                            </div>
                            <div class="col-md-2 text-center sm-mb-10px">
                                <span class="pt-5px pb-5px ps-15px pe-15px border-radius-100px text-uppercase bg-black-russian-gray fs-12 fw-700">Sold out</span>
                            </div>
                            <div class="col-md-3 col-xl-2 text-center">
                                <a href="#" class="btn btn-link btn-hover-animation-switch btn-large text-base-color primary-font fw-700">
                                    <span>
                                        <span class="btn-text">Join Event</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark-gray section-dark">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-lg-7 col-md-8 sm-mb-15px appear anime-complete" data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                        <h2 class="text-white fw-700 ls-minus-1px mb-0">Have a question?</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 text-start text-md-end appear anime-complete" data-anime="{ &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                        <span class="text-white fs-30 align-middle fancy-text-style-4 ls-minus-1px">👋 Say <span class="fw-600 appear" data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;hello!&quot;, &quot;hallå!&quot;, &quot;salve!&quot;] }"><span class="anime-text words chars splitting" data-splitting="true" style="--word-total: 1; --char-total: 6;"><span class="word" data-word="salve!" style="--word-index: 0;"><span class="char" data-char="s" style="--char-index: 0; opacity: 0; transform: rotateX(70deg);">s</span><span class="char" data-char="a" style="--char-index: 1; opacity: 0.222; transform: rotateX(54.46deg);">a</span><span class="char" data-char="l" style="--char-index: 2; opacity: 0.555333; transform: rotateX(31.1267deg);">l</span><span class="char" data-char="v" style="--char-index: 3; opacity: 0.888667; transform: rotateX(7.79333deg);">v</span><span class="char" data-char="e" style="--char-index: 4; opacity: 1; transform: rotateX(0deg);">e</span><span class="char" data-char="!" style="--char-index: 5; opacity: 1; transform: rotateX(0deg);">!</span></span></span></span></span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion accordion-style-02 appear anime-child anime-complete" id="accordion-style-02" data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <!-- start accordion item -->
                            <div class="accordion-item" style="">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="false" data-bs-parent="#accordion-style-02" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-white pe-30px">
                                            <i class="feather icon-extra-medium icon-feather-chevron-down"></i><span class="fw-600 fs-18">How long is the wait time for training once I sent my training request?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02" style="">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item" style="">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-white pe-30px">
                                            <i class="feather icon-extra-medium icon-feather-chevron-down"></i><span class="fw-600 fs-18">I'm a pilot/controller in real life, can I skip training?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02" style="">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item" style="">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-white pe-30px">
                                            <i class="feather icon-extra-medium icon-feather-chevron-down"></i><span class="fw-600 fs-18">How can i migrate to another site?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02" style="">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion" style="">
                                <div class="accordion-header border-bottom border-color-transparent">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04" aria-expanded="true" data-bs-parent="#accordion-style-02" class="">
                                        <div class="accordion-title mb-0 position-relative text-white pe-30px">
                                            <i class="feather icon-extra-medium icon-feather-chevron-up"></i><span class="fw-600 fs-18">Can I use VRC, Euroscope or other software instead of Vatsys?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-04" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02" style="">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start section -->
        <section>
            <div class="container">
                <div class="row position-relative clients-style-08" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-vatsim.png" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-paypal.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-walmart.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-vatsim.png" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-paypal.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="/frontend/images/logo-walmart.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top" style="background-image: url('/frontend/images/demo-hosting-footer-bg.jpg')">
            <div class="container">
                <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
                    <!-- start footer column -->
                    <div class="col-6 col-lg-3 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                        <a href="demo-hosting.html" class="footer-logo mb-15px d-inline-block"><img src="/frontend/images/logo-white.png" data-at2x="/frontend/images/logo-white.png" alt=""></a>
                        <p class="w-90 lg-w-100">Lorem ipsum amet adipiscing elit to eiusmod ad tempor incididunt enim.</p>
                        <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                            <ul class="small-icon light">
                                <li class="my-0"><a class="discord" href="https://community.vatsim.net/" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
                                <li class="my-0"><a class="kofi" href="https://ko-fi.com/vatmex" target="_blank"><i class="fa-solid fa-mug-hot"></i></a></li>
                                <li class="my-0"><a class="twitter" href="https://x.com/VATMEX_com_mx" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="my-0"><a class="instagram" href="https://www.instagram.com/vatmex.com.mx" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Company</span>
                        <ul>
                            <li><a href="demo-hosting-about.html">About</a></li>
                            <li><a href="demo-hosting-hosting.html">Hosting</a></li>
                            <li><a href="demo-hosting-domain.html">Domain</a></li>
                            <li><a href="demo-hosting-pricing.html">Pricing</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Customer</span>
                        <ul>
                            <li><a href="demo-hosting-support.html">Client support</a></li>
                            <li><a href="demo-hosting-support.html">Help center</a></li>
                            <li><a href="demo-hosting-about.html">System status</a></li>
                            <li><a href="demo-hosting-contact.html">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Say hello</span>
                        <span class="d-inline-flex w-100">Need the staff?</span>
                        <a href="mailto:hello@vatmex.com.mx" class="text-white lh-22 text-decoration-line-bottom d-inline-block mb-20px">hello@vatmex.com.mx</a>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-sm-6 ps-30px sm-ps-15px md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Subscribe our newsletter</span>
                        <p class="mb-20px">Subscribe our newsletter to get the latest news and updates!</p>
                        <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="input-small bg-transparent-white-light border-color-transparent w-100 form-control pe-50px ps-20px lg-ps-15px required" type="email" name="email" placeholder="Enter your email" />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn pe-20px submit" aria-label="submit"><i class="icon bi bi-envelope icon-small text-white"></i></button>
                                <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                        <div class="footer-card">
                            <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                            <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                            <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                            <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div>
                <div class="border-top border-color-transparent-white-light pt-35px pb-35px text-center">
                    <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22">The contents of this website are intended to be used within the <a href="https://vatsim.net/" target="_blank" class="text-white text-decoration-line-bottom">VATSIM network</a> and must not be used for real world aviation. VATMEX is a division of VATSIM and is governed by their <a href="https://vatsim.net/docs/policy/air-traffic-control-frequency-and-information-management-policy" target="_blank" class="text-white text-decoration-line-bottom">policies and regulations</a>.</span>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start sticky elements -->
        <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
            <div class="elements-social social-icon-style-10">
                <ul class="fs-14">
                    <li class="me-30px"><a class="facebook" href="https://community.vatsim.net/" target="_blank">
                            <i class="fa-brands fa-discord me-10px"></i>
                            <span class="alt-font">Discord</span>
                        </a>
                    </li>
                    <li class="me-30px">
                        <a class="dribbble" href="https://ko-fi.com/vatmex" target="_blank">
                            <i class="fa-solid fa-mug-hot me-10px"></i>
                            <span class="alt-font">Ko-fi</span>
                        </a>
                    </li>
                    <li class="me-30px">
                        <a class="twitter" href="https://x.com/VATMEX_com_mx" target="_blank">
                            <i class="fa-brands fa-twitter me-10px"></i>
                            <span class="alt-font">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a class="instagram" href="https://www.instagram.com/vatmex.com.mx" target="_blank">
                            <i class="fa-brands fa-instagram me-10px"></i>
                            <span class="alt-font">Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end sticky elements -->
         <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
          <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
          </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="/frontend/js/jquery.js"></script>
        <script type="text/javascript" src="/frontend/js/vendors.min.js"></script>
        <script type="text/javascript" src="/frontend/js/main.js"></script>
    </body>
</html>
