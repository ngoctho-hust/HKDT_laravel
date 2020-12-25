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
                            <button class="btn btn-sm btn-info" id="edit_nhankhau" data-href="{{ route('nhankhau.edit', $nhankhau->id) }}"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12 ">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">{{ trans('pages.cccd') }}</strong>
                </div>
                <div class="card-body">
                    @if ($nhankhau->CCCD)
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">{{ trans('pages.so') }}:</th>
                                <td>{{ $nhankhau->CCCD->so_cccd }}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{ trans('pages.ngay_cap') }}:</th>
                                <td>{{ $nhankhau->CCCD->ngay_cap }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.noi_cap') }}:</th>
                                <td>{{ $nhankhau->CCCD->noi_cap }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end">
                                <a href="#editCCCD" class="btn btn-sm btn-info" data-toggle="modal"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-sm btn-danger" href="#deleteCCCDModal" data-toggle="modal"><i class="fa fa-trash"> {{ trans('pages.delete') }}</i></a>
                            </div>
                        </div>
                    @else
                        <a>{{ trans('pages.no_cccd') }}</a>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="#createCCCD" class="btn btn-sm btn-info" data-toggle="modal"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_create') }}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12 ">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">{{ trans('pages.giay_khai_sinh') }}</strong>
                </div>
                <div class="card-body">
                    @if ($nhankhau->giayKhaiSinh)
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">{{ trans('pages.ten_me') }}:</th>
                                <td>{{ $nhankhau->giayKhaiSinh->ten_me }}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{ trans('pages.ten_cha') }}:</th>
                                <td>{{ $nhankhau->giayKhaiSinh->ten_cha }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.noi_dang_ky') }}:</th>
                                <td>{{ $nhankhau->giayKhaiSinh->noi_dang_ky }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.ngay_dang_ky') }}:</th>
                                <td>{{ $nhankhau->giayKhaiSinh->ngay_dang_ky }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end">
                                <a href="#editGKS" class="btn btn-sm btn-info" data-toggle="modal"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-sm btn-danger" href="#deleteGKSModal" data-toggle="modal"><i class="fa fa-trash"> {{ trans('pages.delete') }}</i></a>
                            </div>
                        </div>
                    @else
                        <a>{{ trans('pages.no_gks') }}</a>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="#createGKS" class="btn btn-sm btn-info" data-toggle="modal"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_create') }}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
@if ($nhankhau->CCCD)
    <!-- Edit CCCD HTML -->
    <div id="editCCCD" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-group" action="{{ route('cccd.update', $nhankhau->CCCD) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ trans('pages.cccd') }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="so_cccd" class=" form-control-label">{{ trans('pages.so') }} <span class="required">*</span></label>
                            <input type="text" id="so_cccd" name="so_cccd" value="{{ $nhankhau->CCCD->so_cccd }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ngay_cap" class=" form-control-label">{{ trans('pages.ngay_cap') }} <span class="required">*</span></label>
                            <input type="date" id="ngay_cap" name="ngay_cap" value="{{ $nhankhau->CCCD->ngay_cap }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="noi_cap" class=" form-control-label">{{ trans('pages.noi_cap') }} <span class="required">*</span></label>
                            <input type="text" id="noi_cap" name="noi_cap" value="{{ $nhankhau->CCCD->noi_cap }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete CCCD Modal HTML -->
    <div id="deleteCCCDModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('cccd.destroy', $nhankhau->CCCD) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h4 class="modal-title">{{ trans('pages.cccd_delete') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>{{ trans('pages.cccd_delete_confirm') }}</p>
                        <p class="text-warning"><small>{{ trans('pages.not_undo') }}</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="{{ trans('pages.cancel') }}">
                        <input type="submit" class="btn btn-danger" value="{{ trans('pages.delete') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if ($nhankhau->giayKhaiSinh)
    <!-- Edit GKS HTML -->
    <div id="editGKS" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-group" action="{{ route('giaykhaisinh.update', $nhankhau->giayKhaiSinh) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ trans('pages.giay_khai_sinh') }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ten_me" class=" form-control-label">{{ trans('pages.ten_me') }} <span class="required">*</span></label>
                            <input type="text" id="ten_me" name="ten_me" value="{{ $nhankhau->giayKhaiSinh->ten_me }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ten_cha" class=" form-control-label">{{ trans('pages.ten_cha') }} <span class="required">*</span></label>
                            <input type="text" id="ten_cha" name="ten_cha" value="{{ $nhankhau->giayKhaiSinh->ten_cha }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="noi_dang_ky" class=" form-control-label">{{ trans('pages.noi_dang_ky') }} <span class="required">*</span></label>
                            <input type="text" id="noi_dang_ky" name="noi_dang_ky" value="{{ $nhankhau->giayKhaiSinh->noi_dang_ky }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ngay_dang_ky" class=" form-control-label">{{ trans('pages.ngay_dang_ky') }} <span class="required">*</span></label>
                            <input type="date" id="ngay_dang_ky" name="ngay_dang_ky" value="{{ $nhankhau->giayKhaiSinh->ngay_dang_ky }}" class="form-control" required>
                        </div>
                        <input type="hidden" name="nhankhau_id" value="{{ $nhankhau->id }}">
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete GKS Modal HTML -->
    <div id="deleteGKSModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('giaykhaisinh.destroy', $nhankhau->giayKhaiSinh) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h4 class="modal-title">{{ trans('pages.gks_delete') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>{{ trans('pages.gks_delete_confirm') }}</p>
                        <p class="text-warning"><small>{{ trans('pages.not_undo') }}</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="{{ trans('pages.cancel') }}">
                        <input type="submit" class="btn btn-danger" value="{{ trans('pages.delete') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
<!-- Create CCCD HTML -->
<div id="createCCCD" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-group" action="{{ route('cccd.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title"><strong>{{ trans('pages.cccd') }}</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="so_cccd" class=" form-control-label">{{ trans('pages.so') }} <span class="required">*</span></label>
                        <input type="text" id="so_cccd" name="so_cccd" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ngay_cap" class=" form-control-label">{{ trans('pages.ngay_cap') }} <span class="required">*</span></label>
                        <input type="date" id="ngay_cap" name="ngay_cap" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="noi_cap" class=" form-control-label">{{ trans('pages.noi_cap') }} <span class="required">*</span></label>
                        <input type="text" id="noi_cap" name="noi_cap" class="form-control" required>
                    </div>
                    <input type="hidden" name="nhankhau_id" value="{{ $nhankhau->id }}">
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create CCCD HTML -->
<div id="createGKS" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-group" action="{{ route('giaykhaisinh.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title"><strong>{{ trans('pages.giay_khai_sinh') }}</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ten_me" class=" form-control-label">{{ trans('pages.ten_me') }} <span class="required">*</span></label>
                        <input type="text" id="ten_me" name="ten_me" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ten_cha" class=" form-control-label">{{ trans('pages.ten_cha') }} <span class="required">*</span></label>
                        <input type="text" id="ten_cha" name="ten_cha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="noi_dang_ky" class=" form-control-label">{{ trans('pages.noi_dang_ky') }} <span class="required">*</span></label>
                        <input type="text" id="noi_dang_ky" name="noi_dang_ky" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ngay_dang_ky" class=" form-control-label">{{ trans('pages.ngay_dang_ky') }} <span class="required">*</span></label>
                        <input type="date" id="ngay_dang_ky" name="ngay_dang_ky" class="form-control" required>
                    </div>
                    <input type="hidden" name="nhankhau_id" value="{{ $nhankhau->id }}">
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i> {{ trans('pages.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
