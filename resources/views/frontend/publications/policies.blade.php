@extends('frontend.layouts.main')

@section('title', 'Division Policies')

@section('content')
    <x-frontend.hero :title="__('policies.hero.title')" :slogan="__('policies.hero.slogan')" imageUrl="/frontend/images/heroes/hero1.jpg"/>
    <section class="bg-white position-relative pt-2"">
        <div class="container">
            <div class="row mb-6 appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-xl-10" style="">
                    <h5 class="text-dark-gray mb-0 lh-44 ls-minus-1px">{{ __('policies.message') }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="row border-top border-color-dark-gray position-relative g-0 sm-border-top-0 sm-pb-30px" style="">
                        <div class="col-12 col-md-1 text-md-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">VMX-002</span>
                        </div>
                        <div class="col-lg-8 col-md-7 last-paragraph-no-margin ps-30px pe-30px pe-30px pt-25px pb-25px sm-pt-15px sm-pb-15px border-start border-color-dark-gray sm-border-start-0 sm-px-0">
                            <p class="sm-w-85"><span class="fw-600 text-dark-gray">National geographic</span> - Last Updated: May 24th, 2024<br></p>
                            <p class="sm-w-85">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur magna nec nulla efficitur hendrerit in vel turpis. Suspendisse molestie, mi ut convallis vestibulum, mi purus ullamcorper odio, id maximus orci purus efficitur mi. Morbi lorem diam, elementum eu lectus sit amet, bibendum tristique elit.</span></p>
                        </div>
                        <div class="col-lg-2 col-md-3 align-self-center text-md-end">
                            <span>{{ __('policies.policy.review') }}</span>
                        </div>
                        <div class="col-auto col-md-1 align-self-center text-end text-md-center sm-position-absolute right-5px">
                            <a href="#"><i class="bi bi-arrow-right-short text-dark-gray icon-medium"></i></a>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray position-relative g-0 sm-border-top-0 sm-pb-30px" style="">
                        <div class="col-12 col-md-1 text-md-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">VMX-002</span>
                        </div>
                        <div class="col-lg-8 col-md-7 last-paragraph-no-margin ps-30px pe-30px pe-30px pt-25px pb-25px sm-pt-15px sm-pb-15px border-start border-color-dark-gray sm-border-start-0 sm-px-0">
                            <p class="sm-w-85"><span class="fw-600 text-dark-gray">National geographic</span> - Last Updated: May 24th, 2024<br></p>
                            <p class="sm-w-85">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur magna nec nulla efficitur hendrerit in vel turpis. Suspendisse molestie, mi ut convallis vestibulum, mi purus ullamcorper odio, id maximus orci purus efficitur mi. Morbi lorem diam, elementum eu lectus sit amet, bibendum tristique elit.</span></p>
                        </div>
                        <div class="col-lg-2 col-md-3 align-self-center text-md-end">
                            <span>{{ __('policies.policy.review') }}</span>
                        </div>
                        <div class="col-auto col-md-1 align-self-center text-end text-md-center sm-position-absolute right-5px">
                            <a href="#"><i class="bi bi-arrow-right-short text-dark-gray icon-medium"></i></a>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray position-relative g-0 sm-border-top-0 sm-pb-30px" style="">
                        <div class="col-12 col-md-1 text-md-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">VMX-002</span>
                        </div>
                        <div class="col-lg-8 col-md-7 last-paragraph-no-margin ps-30px pe-30px pe-30px pt-25px pb-25px sm-pt-15px sm-pb-15px border-start border-color-dark-gray sm-border-start-0 sm-px-0">
                            <p class="sm-w-85"><span class="fw-600 text-dark-gray">National geographic</span> - Last Updated: May 24th, 2024<br></p>
                            <p class="sm-w-85">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur magna nec nulla efficitur hendrerit in vel turpis. Suspendisse molestie, mi ut convallis vestibulum, mi purus ullamcorper odio, id maximus orci purus efficitur mi. Morbi lorem diam, elementum eu lectus sit amet, bibendum tristique elit.</span></p>
                        </div>
                        <div class="col-lg-2 col-md-3 align-self-center text-md-end">
                            <span>{{ __('policies.policy.review') }}</span>
                        </div>
                        <div class="col-auto col-md-1 align-self-center text-end text-md-center sm-position-absolute right-5px">
                            <a href="#"><i class="bi bi-arrow-right-short text-dark-gray icon-medium"></i></a>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray position-relative g-0 sm-border-top-0 sm-pb-30px" style="">
                        <div class="col-12 col-md-1 text-md-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">VMX-002</span>
                        </div>
                        <div class="col-lg-8 col-md-7 last-paragraph-no-margin ps-30px pe-30px pe-30px pt-25px pb-25px sm-pt-15px sm-pb-15px border-start border-color-dark-gray sm-border-start-0 sm-px-0">
                            <p class="sm-w-85"><span class="fw-600 text-dark-gray">National geographic</span> - Last Updated: May 24th, 2024<br></p>
                            <p class="sm-w-85">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur magna nec nulla efficitur hendrerit in vel turpis. Suspendisse molestie, mi ut convallis vestibulum, mi purus ullamcorper odio, id maximus orci purus efficitur mi. Morbi lorem diam, elementum eu lectus sit amet, bibendum tristique elit.</span></p>
                        </div>
                        <div class="col-lg-2 col-md-3 align-self-center text-md-end">
                            <span>{{ __('policies.policy.review') }}</span>
                        </div>
                        <div class="col-auto col-md-1 align-self-center text-end text-md-center sm-position-absolute right-5px">
                            <a href="#"><i class="bi bi-arrow-right-short text-dark-gray icon-medium"></i></a>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray position-relative g-0 sm-border-top-0 sm-pb-30px" style="">
                        <div class="col-12 col-md-1 text-md-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">VMX-002</span>
                        </div>
                        <div class="col-lg-8 col-md-7 last-paragraph-no-margin ps-30px pe-30px pe-30px pt-25px pb-25px sm-pt-15px sm-pb-15px border-start border-color-dark-gray sm-border-start-0 sm-px-0">
                            <p class="sm-w-85"><span class="fw-600 text-dark-gray">National geographic</span> - Last Updated: May 24th, 2024<br></p>
                            <p class="sm-w-85">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur magna nec nulla efficitur hendrerit in vel turpis. Suspendisse molestie, mi ut convallis vestibulum, mi purus ullamcorper odio, id maximus orci purus efficitur mi. Morbi lorem diam, elementum eu lectus sit amet, bibendum tristique elit.</span></p>
                        </div>
                        <div class="col-lg-2 col-md-3 align-self-center text-md-end">
                            <span>{{ __('policies.policy.review') }}</span>
                        </div>
                        <div class="col-auto col-md-1 align-self-center text-end text-md-center sm-position-absolute right-5px">
                            <a href="#"><i class="bi bi-arrow-right-short text-dark-gray icon-medium"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
