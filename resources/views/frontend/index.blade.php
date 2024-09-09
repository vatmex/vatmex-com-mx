@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')
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
                        <a href="{{ url('/apply') }}" class="btn btn-extra-large btn-yellow btn-rounded btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
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
                <div class="col-lg-3 text-center bg-yellow pt-30px pb-30px md-p-20px"><a href="{{ url('contact/request') }}" class="fw-700 text-dark-gray text-dark-gray-hover fs-24 lg-fs-20 ls-minus-05px">Request ATC<i class="feather icon-feather-arrow-right ms-5px"></i></a></div>
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
                                        <i class="feather icon-extra-medium icon-feather-chevron-down"></i><span class="fw-600 fs-18">How long is the wait time for training once I send my training request?</span>
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
@endsection
