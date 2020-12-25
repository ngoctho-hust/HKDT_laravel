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
                            <button class="btn btn-sm btn-success create" data-href="{{ route('nhankhau.create') }}" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp; {{ trans('pages.shk_create') }}</button>
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
                            <tbody id="table_body">
                            @foreach($nhanKhaus as $nhanKhau)
                                @include('nhankhau.row', $nhanKhau)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->

    <div id="showModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong id="show_title"></strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" id="show_body">

                </div>
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

    <script src="{{ asset('vendor/bower-hkdt/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script
        src="{{ asset('vendor/bower-hkdt/vendors/jquery-validation-unobtrusive/src/jquery.validate.unobtrusive.js') }}"></script>

    <script src="{{ asset('js/nhankhau.js') }}"></script>
@endpush
