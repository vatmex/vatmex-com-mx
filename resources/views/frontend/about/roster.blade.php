@extends('frontend.layouts.main')

@section('title', 'Staff')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
@endsection

@section('content')
    <x-frontend.hero :title="__('roster.hero.title')" :slogan="__('roster.hero.slogan')" imageUrl="/frontend/images/heroes/hero1.jpg"/>
    <!-- end page title -->
    <section class="bg-white position-relative">
        <div class="container">
            <div class="row mb-3 justify-content-center appear">
                <table id="localRoster" class="table table-roster table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('roster.roster.name') }}</th>
                            <th>{{ __('roster.roster.cid') }}</th>
                            <th>{{ __('roster.roster.rating') }}</th>
                            <th>{{ __('roster.roster.tower') }}</th>
                            <th>{{ __('roster.roster.terminal') }}</th>
                            <th>{{ __('roster.roster.enroute') }}</th>
                            <th>{{ __('roster.roster.pms') }}</th>
                            <th>{{ __('roster.roster.supercenter') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Web One</td>
                            <td>1000001</td>
                            <td>C1</td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                        </tr>
                        <tr>
                            <td>Web Two</td>
                            <td>1000002</td>
                            <td>C1</td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <section class="bg-very-light-gray position-relative">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-500 text-dark-gray ls-minus-1px shadow-none shadow-in" data-shadow-animation="true" data-animation-delay="700" style="">{{__('roster.visiting.title')}}</h3>
                </div>
            </div>
            <div class="row mb-3 justify-content-center appear">
                <table id="visitingRoster" class="table table-roster table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('roster.roster.name') }}</th>
                            <th>{{ __('roster.roster.cid') }}</th>
                            <th>{{ __('roster.roster.rating') }}</th>
                            <th>{{ __('roster.roster.home') }}</th>
                            <th>{{ __('roster.roster.tower') }}</th>
                            <th>{{ __('roster.roster.terminal') }}</th>
                            <th>{{ __('roster.roster.enroute') }}</th>
                            <th>{{ __('roster.roster.pms') }}</th>
                            <th>{{ __('roster.roster.supercenter') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Web One</td>
                            <td>1000001</td>
                            <td>C1</td>
                            <td>Canada</td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                        </tr>
                        <tr>
                            <td>Web Two</td>
                            <td>1000002</td>
                            <td>C1</td>
                            <td>Europe</td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-success">Certified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                            <td><span class="badge rounded-pill bg-danger">Uncertified</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#localRoster').DataTable();
            $('#visitingRoster').DataTable();
        } );
    </script>
@endsection
