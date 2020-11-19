@extends('layouts.app')

@section('title', 'Quản lý sổ hộ khẩu')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>{{ trans('pages.chu_ho') }}</th>
                                <th>{{ trans('pages.ngay_cap') }}</th>
                                <th>{{ trans('pages.so_nha') }}</th>
                                <th>{{ trans('pages.pho_ap') }}</th>
                                <th>{{ trans('pages.phuong_xa') }}</th>
                                <th>{{ trans('pages.quan_huyen') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($soHoKhaus as $soHoKhau)
                                <tr>
                                    <td>{{ $soHoKhau->chuHo->name ?? trans('pages.chu_ho_default') }}</td>
                                    <td>{{ $soHoKhau->ngay_cap }}</td>
                                    <td>{{ $soHoKhau->so_nha }}</td>
                                    <td>{{ $soHoKhau->pho_ap }}</td>
                                    <td>{{ $soHoKhau->phuong_xa }}</td>
                                    <td>{{ $soHoKhau->quan_huyen }}</td>
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
