<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoHoKhauRequest;
use App\Http\Requests\TachHoRequest;
use App\Models\NhanKhau;
use App\Models\SoHoKhau;
use Illuminate\Http\Request;

class SoHoKhauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $soHoKhaus = SoHoKhau::with('chuHo')->get();

        return view('sohokhau.index', compact('soHoKhaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('sohokhau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SoHoKhauRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SoHoKhauRequest $request)
    {
        $soHoKhau = SoHoKhau::create($request->all());

        return redirect()->route('sohokhau.show', $soHoKhau);
    }

    /**
     * Display the specified resource.
     *
     * @param SoHoKhau $sohokhau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function show(SoHoKhau $sohokhau)
    {
        $sohokhau->load('nhanKhaus');

        return view('sohokhau.detail', compact('sohokhau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SoHoKhau $sohokhau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit(SoHoKhau $sohokhau)
    {
        return view('sohokhau.edit', compact('sohokhau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SoHoKhauRequest $request
     * @param SoHoKhau $sohokhau
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SoHoKhauRequest $request, SoHoKhau $sohokhau)
    {
        $sohokhau->update($request->all());

        return redirect()->route('sohokhau.show', $sohokhau)->with('success', 'Đã cập nhật thông tin sổ hộ khẩu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SoHoKhau $sohokhau
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(SoHoKhau $sohokhau)
    {
        $sohokhau->delete();

        return redirect()->route('sohokhau.index');
    }

    public function tachHo(TachHoRequest $request)
    {
        $soHoKhau = SoHoKhau::create($request->all());

        foreach ($request->get('nhan_khaus') as $id) {
            NhanKhau::find($id)->update(['sohokhau_id' => $soHoKhau->id]);
        }

        return redirect()->route('sohokhau.show', $soHoKhau)->with('success', 'Tách hộ thành công!');
    }

    public function dochuho(Request $request, SoHoKhau $sohokhau)
    {
        $sohokhau->update(['chu_ho_id' => $request->get('chu_ho_id')]);

        return redirect()->back()->with('success', 'Đổi chủ hộ thành công!');
    }
}
