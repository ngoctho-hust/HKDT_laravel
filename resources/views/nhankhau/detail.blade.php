@extends('layouts.app')

@section('title', $nhankhau->ho_ten)

@section('quan_ly_nhan_khau', 'active')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">{{ trans('pages.nk_info1') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.ho_ten') }}:</strong> {{ $nhankhau->ho_ten }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.bi_danh') }}:</strong> {{ $nhankhau->bi_danh ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.gioi_tinh') }}:</strong> {{ $nhankhau->gioi_tinh }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.ngay_sinh') }}:</strong> {{ $nhankhau->ngay_sinh }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.noi_sinh') }}:</strong> {{ $nhankhau->noi_sinh }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.nguyen_quan') }}:</strong> {{ $nhankhau->nguyen_quan ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.dan_toc') }}:</strong> {{ $nhankhau->dan_toc }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.nghe_nghiep') }}:</strong> {{ $nhankhau->nghe_nghiep ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.noi_lam_viec') }}:</strong> {{ $nhankhau->noi_lam_viec ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.quan_he_voi_chu_ho') }}:</strong> {{ $nhankhau->quan_he_voi_chu_ho ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.thuong_tru_truoc') }}:</strong> {{ $nhankhau->thuong_tru_truoc ?? null }}</label>
                            </div>
                            <div class="col-md-6">
                                <label scope="row"><strong>{{ trans('pages.sohokhau_id') }}:</strong> {{ $nhankhau->sohokhau_id ?? null }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-sm btn-info" href="{{ route('nhankhau.edit', $nhankhau->id) }}"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
@endsection
