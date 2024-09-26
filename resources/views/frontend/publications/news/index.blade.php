@extends('frontend.layouts.main')

@section('title', 'Division Policies')

@section('content')
    <x-frontend.hero :title="__('news.hero.title')" :slogan="__('news.hero.slogan')" imageUrl="/frontend/images/heroes/hero1.jpg"/>
    <section class="pt-0 ps-10 pe-10 xl-ps-2 xl-pe-2 sm-mx-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="blog-date blog-wrapper grid grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large" style="position: relative; height: 1140.47px;">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 0%; top: 0px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">28</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Andy glamer</a></div>
                                    <a href="{{ route('frontend.publications.news.show', ['id' => 1]) }}" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Leopard is an animal my designs come from nature.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 33.3299%; top: 0px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">26</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Walton smith</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Good work for good people good design is a language.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 66.6597%; top: 0px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">24</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Bill gardner</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Everything is designed things are good designed.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 0%; top: 380.156px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">22</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Vico magistre</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Reason and judgment are the qualities of a leader.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 33.3299%; top: 380.156px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">20</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Coco chanel</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Design is not just what it looks like and feels like.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 66.6597%; top: 380.156px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">18</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Mark lamb</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Mobile is the enabling centerpiece of digital.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 33.3299%; top: 732.312px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">16</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Lindsey bucki</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Good design is obvious. Great design is transparent.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 0%; top: 760.312px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">14</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Maya angelou</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">The alternative to good design is always bad design.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item" style="position: absolute; left: 66.6597%; top: 760.312px;">
                            <div class="feature-box border-radius-10px feature-box-left-icon bg-white box-shadow-extra-large box-shadow-extra-large-hover p-11 last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <time class="text-center post-date border-radius-3px bg-dark-gray text-white text-uppercase fw-500 d-inline-block">
                                        <span class="date d-block fs-30 lh-28">12</span>
                                        <span class="month d-block lh-24">Jun</span>
                                    </time>
                                </div>
                                <div class="feature-box-content">
                                    <div class="alt-font fs-13 lh-24 text-uppercase mb-5px d-inline-block text-gradient-sky-blue-pink fw-700">By <a href="blog-masonry.html">Jeremy dupont</a></div>
                                    <a href="demo-web-agency-blog-single-creative.html" class="card-title text-dark-gray text-dark-gray-hover mb-10px fs-18 lh-28 fw-600 d-block">Design thinkers look past a project to the next project.</a>
                                    <p>Lorem ipsum been the industry way standard dummy text...</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
