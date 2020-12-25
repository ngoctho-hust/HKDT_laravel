<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhanKhauRequest;
use App\Models\GiayKhaiSinh;
use App\Models\NhanKhau;

class NhanKhauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $nhanKhaus = NhanKhau::all();

        return view('nhankhau.index', compact('nhanKhaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        return response()->json([
            'view' => view('nhankhau.create')->render(),
            'title' => 'Thêm mới nhân khẩu',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NhanKhauRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NhanKhauRequest $request)
    {
        $nhanKhau = NhanKhau::create($request->all());

        if ($request->has('ten_me')) {
            GiayKhaiSinh::create([
                'ten_me' => $request->get('ten_me'),
                'ten_cha' => $request->get('ten_cha'),
                'noi_dang_ky' => $request->get('noi_dang_ky'),
                'ngay_dang_ky' => $request->get('ngay_dang_ky'),
                'nhankhau_id' => $nhanKhau->id,
            ]);
        }

        return response()->json([
            'view' => view('nhankhau.row', compact('nhanKhau'))->render(),
            'message' => view('common.message', ['message' => 'Tạo nhân khẩu thành công'])->render(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(NhanKhau $nhankhau)
    {
        return response()->json([
            'view' => view('nhankhau.detail', compact('nhankhau'))->render(),
            'nhankhau' => $nhankhau,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(NhanKhau $nhankhau)
    {
        return response()->json([
            'view' => view('nhankhau.edit', compact('nhankhau'))->render(),
            'nhankhau' => $nhankhau,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NhanKhauRequest $request
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NhanKhauRequest $request, NhanKhau $nhankhau)
    {
        $nhankhau->update($request->all());

        return response()->json([
            'view' => view('nhankhau.row', ['nhanKhau' => $nhankhau])->render(),
            'message' => view('common.message', ['message' => 'Cập nhật nhân khẩu thành công'])->render(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(NhanKhau $nhankhau)
    {
        $nhankhau->delete();

        return response()->json(['success' => 'Đã xóa nhân khẩu']);
    }
}
