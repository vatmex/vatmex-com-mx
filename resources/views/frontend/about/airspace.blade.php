@extends('frontend.layouts.main')

@section('title', 'Airspace')

@section('css')
<link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet">
@endsection

@section('content')
    <x-frontend.hero :title="__('airspace.hero.title')" :slogan="__('airspace.hero.slogan')" imageUrl="/frontend/images/heroes/hero1.jpg" fillColor="#f0f4fd"/>
    <section class="bg-solitude-blue pt-2">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-12 col-lg-12 text-center">
                    <h2 class="text-dark-gray fw-600 ls-minus-2px">{{ __('airspace.counters.title') }}</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 counter-style-05">
                <!-- start counter item -->
                <div class="col transition-inner-all md-mb-30px">
                    <div class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
                        <div class="feature-box-content">
                            <h2 class="fw-700 text-dark-gray ls-minus-1px mb-0 counter appear" data-speed="1000" data-to="{{ __('airspace.counters.firs.count') }}">{{ __('airspace.counters.firs.count') }}</h2>
                            <span class="d-block text-dark-gray text-light-opacity fw-600 text-uppercase fs-13 ls-1px">{{ __('airspace.counters.firs.name') }}</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-vatmex-light"></div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col transition-inner-all md-mb-30px">
                    <div class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
                        <div class="feature-box-content">
                            <h2 class="alt-font fw-700 text-dark-gray ls-minus-1px mb-0 counter appear" data-speed="1000" data-to="{{ __('airspace.counters.accs.count') }}">{{ __('airspace.counters.accs.count') }}</h2>
                            <span class="d-block text-dark-gray text-light-opacity fw-600 text-uppercase fs-13 ls-1px">{{ __('airspace.counters.accs.name') }}</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-vatmex-light"></div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col transition-inner-all xs-mb-30px">
                    <div class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
                        <div class="feature-box-content">
                            <h2 class="fw-700 text-dark-gray ls-minus-1px mb-0 counter appear" data-speed="1000" data-to="{{ __('airspace.counters.sectors.count') }}">{{ __('airspace.counters.sectors.count') }}</h2>
                            <span class="d-block text-dark-gray text-light-opacity fw-600 text-uppercase fs-13 ls-1px">{{ __('airspace.counters.sectors.name') }}</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-vatmex-light"></div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col transition-inner-all">
                    <div class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
                        <div class="feature-box-content">
                            <h2 class="fw-700 text-dark-gray ls-minus-1px mb-0 counter appear" data-speed="1000" data-to="{{ __('airspace.counters.tmas.count') }}">{{ __('airspace.counters.tmas.count') }}</h2>
                            <span class="d-block text-dark-gray text-light-opacity fw-600 text-uppercase fs-13 ls-1px">{{ __('airspace.counters.tmas.name') }}</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-vatmex-light"></div>
                    </div>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <section class="pb-0 pt-0">
        <div class="container" style="margin: 0px; max-width: 100%; padding: 0px">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>
    <script src="/frontend/js/airspace.js"></script>
@endsection
