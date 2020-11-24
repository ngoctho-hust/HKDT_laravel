@extends('layouts.app')

@section('title', Lang::get('pages.shk_so', ['so' => $sohokhau->id]))

@section('quan_ly_so_ho_khau', 'active')

@push('head')
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">{{ trans('pages.shk_info') }}</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">{{ trans('pages.so') }}:</th>
                                <td>{{ $sohokhau->id }}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{ trans('pages.ngay_cap') }}:</th>
                                <td>{{ $sohokhau->ngay_cap }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.chu_ho') }}:</th>
                                <td>{{ $sohokhau->chuHo->name ?? null }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.so_nha') }}:</th>
                                <td>{{ $sohokhau->so_nha }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.pho_ap') }}:</th>
                                <td>{{ $sohokhau->pho_ap }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.phuong_xa') }}:</th>
                                <td>{{ $sohokhau->phuong_xa }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ trans('pages.quan_huyen') }}:</th>
                                <td>{{ $sohokhau->quan_huyen }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-sm btn-info" href="{{ route('sohokhau.edit', $sohokhau->id) }}"><i class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                <strong class="card-title">{{ trans('pages.nhan_khau_trong_ho') }}</strong>
                            </div>
                            <div class="col-8 d-flex justify-content-end">
                                <a href="#addEmployeeModal" class="btn btn-sm btn-success" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp; {{ trans('pages.shk_create') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>{{ trans('pages.quan_he_voi_chu_ho') }}</th>
                                <th>{{ trans('pages.ho_ten') }}</th>
                                <th>{{ trans('pages.bi_danh') }}</th>
                                <th>{{ trans('pages.gioi_tinh') }}</th>
                                <th>{{ trans('pages.ngay_sinh') }}</th>
                                <th>{{ trans('pages.dan_toc') }}</th>
                                <th>{{ trans('pages.option') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sohokhau->nhanKhaus as $nhanKhau)
                                <tr>
                                    <td>{{ $nhanKhau->quan_he_voi_chu_ho }}</td>
                                    <td>{{ $nhanKhau->ho_ten }}</td>
                                    <td>{{ $nhanKhau->bi_danh }}</td>
                                    <td>{{ $nhanKhau->gioi_tinh }}</td>
                                    <td>{{ $nhanKhau->ngay_sinh }}</td>
                                    <td>{{ $nhanKhau->dan_toc }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info" href="{{ route('nhankhau.show', $nhanKhau) }}" data-toggle="tooltip" title="{{ trans('pages.read') }}"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-outline-warning" href="{{ route('nhankhau.edit', $nhanKhau) }}" data-toggle="tooltip" title="{{ trans('pages.edit') }}"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-sm btn-outline-danger" href="#" data-toggle="tooltip" title="{{ trans('pages.delete') }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-group" action="{{ route('nhankhau.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ trans('pages.nk_info') }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
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
                            <input type="text" id="sohokhau_id" name="sohokhau_id" value="{{ $sohokhau->id }}" class="form-control">
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
@endsection

@push('foot')
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endpush
