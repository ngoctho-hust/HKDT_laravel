@extends('layouts.app')

@section('title', Lang::get('pages.shk_so', ['so' => $sohokhau->id]))

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
                                <a class="btn btn-sm btn-success" href="{{ route('sohokhau.create') }}"><i class="fa fa-plus"></i>&nbsp; {{ trans('pages.shk_create') }}</a>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
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
