@extends('frontend.layouts.main')

@section('title', 'Staff')

@section('content')
    <x-frontend.hero :title="__('staff.hero.title')" :slogan="__('staff.hero.slogan')" imageUrl="/frontend/images/heroes/hero1.jpg"/>
    <!-- end page title -->
    <section class="bg-white position-relative pt-2"">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-500 text-dark-gray ls-minus-1px shadow-none shadow-in" data-shadow-animation="true" data-animation-delay="700" style="">{{__('staff.staff.title')}} </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;perspective&quot;: [900, 1200], &quot;scaleY&quot;: [1.1, 1], &quot;rotateY&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Evan thomson</a>
                        <p class="w-90 mx-auto lh-28">I'm Evan, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">sales</span>  executive.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.8</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Bryan jonhson</a>
                        <p class="w-90 mx-auto lh-28">I'm Bryan, Expert in <span class="text-dark-gray text-decoration-line-bottom fw-500">property </span>broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jemmy watson</a>
                        <p class="w-90 mx-auto lh-28">I'm Jemmy, Expert in <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  lawyer.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06" style="">
                    <div class="d-flex flex-column p-40px pb-25px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.6</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jeremy dupont</a>
                        <p class="w-90 mx-auto lh-28">I'm Jeremy, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06" style="">
                    <div class="d-flex flex-column p-40px pb-25px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.6</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jeremy dupont</a>
                        <p class="w-90 mx-auto lh-28">I'm Jeremy, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06" style="">
                    <div class="d-flex flex-column p-40px pb-25px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.6</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jeremy dupont</a>
                        <p class="w-90 mx-auto lh-28">I'm Jeremy, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06" style="">
                    <div class="d-flex flex-column p-40px pb-25px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.6</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jeremy dupont</a>
                        <p class="w-90 mx-auto lh-28">I'm Jeremy, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
            </div>
        </div>
    </section>
    <!-- end page title -->
    <section class="bg-very-light-gray position-relative">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-500 text-dark-gray ls-minus-1px shadow-none shadow-in" data-shadow-animation="true" data-animation-delay="700" style="">{{__('staff.instructors.title')}}</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;perspective&quot;: [900, 1200], &quot;scaleY&quot;: [1.1, 1], &quot;rotateY&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Evan thomson</a>
                        <p class="w-90 mx-auto lh-28">I'm Evan, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">sales</span>  executive.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.8</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Bryan jonhson</a>
                        <p class="w-90 mx-auto lh-28">I'm Bryan, Expert in <span class="text-dark-gray text-decoration-line-bottom fw-500">property </span>broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 mb-30px" style="">
                    <div class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jemmy watson</a>
                        <p class="w-90 mx-auto lh-28">I'm Jemmy, Expert in <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  lawyer.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06" style="">
                    <div class="d-flex flex-column p-40px pb-25px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img class="rounded-circle w-150px h-150px mb-20px" src="https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?s=200" alt="" data-no-retina="">
                                <span class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i class="fa-solid fa-star"></i> 4.6</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-600 mb-5px">Jeremy dupont</a>
                        <p class="w-90 mx-auto lh-28">I'm Jeremy, Expert in  <span class="text-dark-gray text-decoration-line-bottom fw-500">property</span>  broker.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end team member item -->
            </div>
        </div>
    </section>
@endsection
