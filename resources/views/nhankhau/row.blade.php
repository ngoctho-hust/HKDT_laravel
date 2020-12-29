<tr>
    <td>{{ $nhanKhau->quan_he_voi_chu_ho }}</td>
    <td>{{ $nhanKhau->ho_ten }}</td>
    <td>{{ $nhanKhau->bi_danh }}</td>
    <td>{{ $nhanKhau->gioi_tinh }}</td>
    <td>{{ $nhanKhau->ngay_sinh }}</td>
    <td>{{ $nhanKhau->dan_toc }}</td>
    <td>
        <button class="btn btn-sm btn-outline-info show" data-id="{{ $nhanKhau->id }}" data-href="{{ route('nhankhau.show', $nhanKhau) }}" title="{{ trans('pages.read') }}"><i class="fa fa-eye"></i></button>
        <button class="btn btn-sm btn-outline-warning edit" id="btn_edit_{{ $nhanKhau->id }}" data-href="{{ route('nhankhau.edit', $nhanKhau) }}" title="{{ trans('pages.edit') }}"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-outline-danger delete" data-href="{{ route('nhankhau.destroy', $nhanKhau) }}" title="{{ trans('pages.delete') }}"><i class="fa fa-trash"></i></button>
    </td>
</tr>
