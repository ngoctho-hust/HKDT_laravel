@extends('layouts.app')

@section('title', trans('pages.statistic'))

@push('head')

@endpush

@section('thong_ke', 'active')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">{{ trans('pages.chart.time') }} </h4>
                                <canvas id="team-chart" data-num="@json($statistByTime)" data-years="@json($years)"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">{{ trans('pages.chart.age') }} </h4>
                                <canvas id="singelBarChart" data-statistic="@json($statistByAge)"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">{{ trans('pages.chart.gioi_tinh') }} </h4>
                        <canvas id="pieChart"
                                data-male="{{ $numOfMale }}"
                                data-other="{{ $numOfOther }}"
                                data-female="{{ $numOfFemale }}">
                        </canvas>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>

    </div><!-- .animated -->
@endsection

@push('foot')
    <script src="{{ asset('vendor/bower-hkdt/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/statistic.js') }}"></script>
@endpush
