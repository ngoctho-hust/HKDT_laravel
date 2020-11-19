@extends('layouts.app')

@section('title', 'Thêm mới sổ hộ khẩu')

@push('head')
@endpush

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"><strong>{{ trans('pages.shk_info') }}</strong></div>
                    <div class="card-body card-block">
                        <form class="form-group" action="{{ route('sohokhau.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="ngay_cap" class=" form-control-label">{{ trans('pages.ngay_cap') }}</label>
                                <input type="date" id="ngay_cap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="so_nha" class=" form-control-label">{{ trans('pages.so_nha') }}</label>
                                <input type="text" id="so_nha" placeholder="{{ trans('pages.nhap_so_nha') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pho_ap" class=" form-control-label">{{ trans('pages.pho_ap') }}</label>
                                <input type="text" id="pho_ap" placeholder="{{ trans('pages.nhap_pho_ap') }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phuong_xa" class=" form-control-label">{{ trans('pages.phuong_xa') }}</label>
                                <input type="text" id="phuong_xa" placeholder="{{ trans('pages.nhap_phuong_xa') }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="quan_huyen" class=" form-control-label">{{ trans('pages.quan_huyen') }}</label>
                                <input type="text" id="quan_huyen" placeholder="{{ trans('pages.nhap_quan_huyen') }}" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">{{ trans('pages.save') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('foot')
    <script src="{{ asset('vendor/bower-hkdt/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script
        src="{{ asset('vendor/bower-hkdt/vendors/jquery-validation-unobtrusive/src/jquery.validate.unobtrusive.js') }}"></script>
@endpush
