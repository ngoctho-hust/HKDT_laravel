<form class="form-group" id="create_form" action="{{ route('nhankhau.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group col-md-6">
        <label for="ho_ten" class=" form-control-label">{{ trans('pages.ho_ten') }} <span class="required">*</span></label>
        <input type="text" id="ho_ten" name="ho_ten" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="bi_danh" class=" form-control-label">{{ trans('pages.bi_danh') }}</label>
        <input type="text" id="bi_danh" name="bi_danh" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="gioi_tinh" class=" form-control-label">{{ trans('pages.gioi_tinh') }} <span class="required">*</span></label>
        <input type="text" id="gioi_tinh" name="gioi_tinh" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="ngay_sinh" class=" form-control-label">{{ trans('pages.ngay_sinh') }} <span class="required">*</span></label>
        <input type="date" id="ngay_sinh" name="ngay_sinh" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="noi_sinh" class=" form-control-label">{{ trans('pages.noi_sinh') }} <span class="required">*</span></label>
        <input type="text" id="noi_sinh" name="noi_sinh" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="nguyen_quan" class=" form-control-label">{{ trans('pages.nguyen_quan') }}</label>
        <input type="text" id="nguyen_quan" name="nguyen_quan" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="dan_toc" class=" form-control-label">{{ trans('pages.dan_toc') }} <span class="required">*</span></label>
        <input type="text" id="dan_toc" name="dan_toc" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="nghe_nghiep" class=" form-control-label">{{ trans('pages.nghe_nghiep') }}</label>
        <input type="text" id="nghe_nghiep" name="nghe_nghiep" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="noi_lam_viec" class=" form-control-label">{{ trans('pages.noi_lam_viec') }}</label>
        <input type="text" id="noi_lam_viec" name="noi_lam_viec" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="quan_he_voi_chu_ho" class=" form-control-label">{{ trans('pages.quan_he_voi_chu_ho') }}</label>
        <input type="text" id="quan_he_voi_chu_ho" name="quan_he_voi_chu_ho" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="thuong_tru_truoc" class=" form-control-label">{{ trans('pages.thuong_tru_truoc') }}</label>
        <input type="text" id="thuong_tru_truoc" name="thuong_tru_truoc" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="sohokhau_id" class=" form-control-label">{{ trans('pages.sohokhau_id') }}</label>
        <input type="text" id="sohokhau_id" name="sohokhau_id" class="form-control">
    </div>
    <button type="submit" class="btn btn-lg btn-info btn-block"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
</form>
