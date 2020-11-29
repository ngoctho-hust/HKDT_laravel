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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('nhankhau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NhanKhauRequest $request
     * @return \Illuminate\Http\RedirectResponse
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

            return redirect()->back()->with('success', 'Khai sinh thành công!');
        }

        return redirect()->route('nhankhau.show', $nhanKhau);
    }

    /**
     * Display the specified resource.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function show(NhanKhau $nhankhau)
    {
        return view('nhankhau.detail', compact('nhankhau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit(NhanKhau $nhankhau)
    {
        return view('nhankhau.edit', compact('nhankhau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NhanKhauRequest $request
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(NhanKhauRequest $request, NhanKhau $nhankhau)
    {
        $nhankhau->update($request->all());

        return redirect()->route('nhankhau.show', $nhankhau)->with('success', 'Cập nhật nhân khẩu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param NhanKhau $nhankhau
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(NhanKhau $nhankhau)
    {
        $nhankhau->delete();

        return redirect()->route('nhankhau.index');
    }
}
