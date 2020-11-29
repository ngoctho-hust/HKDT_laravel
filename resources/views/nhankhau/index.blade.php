@extends('layouts.app')

@section('title', 'Quản lý nhân khẩu')

@section('quan_ly_nhan_khau', 'active')

@push('head')
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">{{ trans('pages.ds_nk') }}</strong>
                        <div>
                            <a class="btn btn-sm btn-success" href="{{ route('nhankhau.create') }}"><i class="fa fa-plus"></i>&nbsp; {{ trans('pages.shk_create') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>{{ trans('pages.ho_ten') }}</th>
                                <th>{{ trans('pages.bi_danh') }}</th>
                                <th>{{ trans('pages.gioi_tinh') }}</th>
                                <th>{{ trans('pages.ngay_sinh') }}</th>
                                <th>{{ trans('pages.dan_toc') }}</th>
                                <th>{{ trans('pages.option') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($nhanKhaus as $nhanKhau)
                                <tr>
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
