<tr>
    <td>{{ $nhanKhau->ho_ten }}</td>
    <td>{{ $nhanKhau->bi_danh }}</td>
    <td>{{ $nhanKhau->gioi_tinh }}</td>
    <td>{{ $nhanKhau->ngay_sinh }}</td>
    <td>{{ $nhanKhau->dan_toc }}</td>
    <td>
        <button class="btn btn-sm btn-outline-info show" data-href="{{ route('nhankhau.show', $nhanKhau) }}" title="{{ trans('pages.read') }}"><i class="fa fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-warning edit" data-href="{{ route('nhankhau.edit', $nhanKhau) }}" title="{{ trans('pages.edit') }}"><i class="fa fa-pencil"></i></button>
        <a class="btn btn-sm btn-outline-danger" href="#" data-toggle="tooltip" title="{{ trans('pages.delete') }}"><i class="fa fa-trash"></i></a>
    </td>
</tr>
