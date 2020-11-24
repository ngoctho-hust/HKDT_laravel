@extends('layouts.app')

@section('title', $nhankhau->ho_ten)

@section('quan_ly_nhan_khau', 'active')

@push('head')
@endpush

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"><strong>{{ trans('pages.nk_info1') }}</strong></div>
                    <div class="card-body card-block">
                        <form class="form-group" action="{{ route('nhankhau.update', $nhankhau) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group col-md-6">
                                <label for="ho_ten" class=" form-control-label">{{ trans('pages.ho_ten') }} <span class="required">*</span></label>
                                <input type="text" id="ho_ten" name="ho_ten" value="{{ $nhankhau->ho_ten }}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bi_danh" class=" form-control-label">{{ trans('pages.bi_danh') }}</label>
                                <input type="text" id="bi_danh" name="bi_danh" value="{{ $nhankhau->bi_danh ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gioi_tinh" class=" form-control-label">{{ trans('pages.gioi_tinh') }} <span class="required">*</span></label>
                                <input type="text" id="gioi_tinh" name="gioi_tinh" value="{{ $nhankhau->gioi_tinh }}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ngay_sinh" class=" form-control-label">{{ trans('pages.ngay_sinh') }} <span class="required">*</span></label>
                                <input type="date" id="ngay_sinh" name="ngay_sinh" value="{{ $nhankhau->ngay_sinh }}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="noi_sinh" class=" form-control-label">{{ trans('pages.noi_sinh') }} <span class="required">*</span></label>
                                <input type="text" id="noi_sinh" name="noi_sinh" value="{{ $nhankhau->noi_sinh }}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nguyen_quan" class=" form-control-label">{{ trans('pages.nguyen_quan') }}</label>
                                <input type="text" id="nguyen_quan" name="nguyen_quan" value="{{ $nhankhau->nguyen_quan ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dan_toc" class=" form-control-label">{{ trans('pages.dan_toc') }} <span class="required">*</span></label>
                                <input type="text" id="dan_toc" name="dan_toc" value="{{ $nhankhau->dan_toc }}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nghe_nghiep" class=" form-control-label">{{ trans('pages.nghe_nghiep') }}</label>
                                <input type="text" id="nghe_nghiep" name="nghe_nghiep" value="{{ $nhankhau->nghe_nghiep ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="noi_lam_viec" class=" form-control-label">{{ trans('pages.noi_lam_viec') }}</label>
                                <input type="text" id="noi_lam_viec" name="noi_lam_viec" value="{{ $nhankhau->noi_lam_viec ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="quan_he_voi_chu_ho" class=" form-control-label">{{ trans('pages.quan_he_voi_chu_ho') }}</label>
                                <input type="text" id="quan_he_voi_chu_ho" name="quan_he_voi_chu_ho" value="{{ $nhankhau->quan_he_voi_chu_ho ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="thuong_tru_truoc" class=" form-control-label">{{ trans('pages.thuong_tru_truoc') }}</label>
                                <input type="text" id="thuong_tru_truoc" name="thuong_tru_truoc" value="{{ $nhankhau->thuong_tru_truoc ?? null }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sohokhau_id" class=" form-control-label">{{ trans('pages.sohokhau_id') }}</label>
                                <input type="text" id="sohokhau_id" name="sohokhau_id" value="{{ $nhankhau->sohokhau_id ?? null }}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-lg btn-info btn-block"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
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
