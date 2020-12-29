@extends('layouts.app')

@section('title', Lang::get('pages.shk_so', ['so' => $sohokhau->id]))

@section('quan_ly_so_ho_khau', 'active')

@push('head')
    <link rel="stylesheet"
          href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
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
                                <td>{{ $sohokhau->chuHo->ho_ten ?? null }}</td>
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
                                <a class="btn btn-sm btn-info" href="{{ route('sohokhau.edit', $sohokhau->id) }}"><i
                                        class="fa fa-pencil"></i>&nbsp; {{ trans('pages.shk_edit') }}</a>
                                &nbsp;
                                <a href="#doichuho" class="btn btn-sm btn-warning" data-toggle="modal"><i
                                        class="fa fa-refresh"></i>&nbsp; {{ trans('pages.doi_chu_ho') }}</a>
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
                                <button class="btn btn-sm btn-success create" data-href="{{ route('nhankhau.create') }}" data-id="{{ $sohokhau->id }}" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp; {{ trans('pages.shk_create') }}</button>
                                &nbsp;
                                <a href="#tachHo" class="btn btn-sm btn-info" data-toggle="modal"><i
                                        class="fa fa-share-square-o"></i>&nbsp; {{ trans('pages.tach_ho') }}</a>
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
                            <tbody id="table_body">
                            @foreach($sohokhau->nhanKhaus as $nhanKhau)
                                @include('nhankhau.row', $nhanKhau)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->

    {{--    tach ho modal--}}
    <div id="tachHo" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-group" action="{{ route('sohokhau.tachho') }}" enctype="multipart/form-data"
                      method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ trans('pages.tach_ho') }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ngay_cap" class=" form-control-label">{{ trans('pages.ngay_cap') }} <span
                                    class="required">*</span></label>
                            <input type="date" id="ngay_cap" name="ngay_cap" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="so_nha" class=" form-control-label">{{ trans('pages.so_nha') }}</label>
                            <input type="text" id="so_nha" name="so_nha" placeholder="{{ trans('pages.nhap_so_nha') }}"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pho_ap" class=" form-control-label">{{ trans('pages.pho_ap') }} <span
                                    class="required">*</span></label>
                            <input type="text" id="pho_ap" name="pho_ap" placeholder="{{ trans('pages.nhap_pho_ap') }}"
                                   class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phuong_xa" class=" form-control-label">{{ trans('pages.phuong_xa') }} <span
                                    class="required">*</span></label>
                            <input type="text" id="phuong_xa" name="phuong_xa"
                                   placeholder="{{ trans('pages.nhap_phuong_xa') }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="quan_huyen" class=" form-control-label">{{ trans('pages.quan_huyen') }} <span
                                    class="required">*</span></label>
                            <input type="text" id="quan_huyen" name="quan_huyen"
                                   placeholder="{{ trans('pages.nhap_quan_huyen') }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class=" form-control-label">{{ trans('pages.chon_nk') }} <span
                                    class="required">*</span></label>
                            @foreach($sohokhau->nhanKhaus as $nhanKhau)
                                <div class="checkbox">
                                    @if($nhanKhau == $sohokhau->chuHo)
                                        <label><input type="checkbox" name="nhan_khaus[]" value="{{ $nhanKhau->id }}" disabled> {{ $nhanKhau->ho_ten }} <span class="required">({{ trans('pages.chu_ho') }})</span> </label>
                                    @else
                                        <label><input type="checkbox" name="nhan_khaus[]" value="{{ $nhanKhau->id }}"> {{ $nhanKhau->ho_ten }}</label>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-sm btn-info"><i
                                class="fa fa-share-square-o"></i>&nbsp; {{ trans('pages.tach_ho') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- doichuho Modal HTML -->
    <div id="doichuho" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('sohokhau.doichuho', $sohokhau) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ trans('pages.doi_chu_ho') }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class=" form-control-label">{{ trans('pages.chon_nk') }} <span
                                    class="required">*</span></label>
                            @foreach($sohokhau->nhanKhaus as $nhanKhau)
                                <div class="form-check">
                                    @if($nhanKhau == $sohokhau->chuHo)
                                        <input class="form-check-input" type="radio" name="chu_ho_id" id="{{ $nhanKhau->id }}" value="{{ $nhanKhau->id }}" checked>
                                        <label class="form-check-label" for="{{ $nhanKhau->id }}">
                                            {{ $nhanKhau->ho_ten }} <span class="required">({{ trans('pages.chu_ho') }})</span>
                                        </label>
                                    @else
                                        <input class="form-check-input" type="radio" name="chu_ho_id" id="{{ $nhanKhau->id }}" value="{{ $nhanKhau->id }}">
                                        <label class="form-check-label" for="{{ $nhanKhau->id }}">
                                            {{ $nhanKhau->ho_ten }}
                                        </label>
                                    @endif
                                </div>
                                <div class="checkbox">

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-sm btn-info"><i
                                class="fa fa-refresh"></i>&nbsp; {{ trans('pages.thay_doi') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    // for nhan khau
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
    <script
        src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('vendor/bower-hkdt/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
    <script src="{{ asset('js/nhankhau.js') }}"></script>
@endpush
