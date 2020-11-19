<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoHoKhauRequest;
use App\Models\SoHoKhau;

class SoHoKhauController extends Controller
{
    /**
     * SoHoKhauController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param SoHoKhau $soHoKhau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function show(SoHoKhau $soHoKhau)
    {
        $soHoKhau->load('nhanKhaus');

        return view('sohokhau.detail', compact('soHoKhau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SoHoKhau $soHoKhau
     * @return void
     */
    public function edit(SoHoKhau $soHoKhau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SoHoKhauRequest $request
     * @param SoHoKhau $soHoKhau
     * @return void
     */
    public function update(SoHoKhauRequest $request, SoHoKhau $soHoKhau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SoHoKhau $soHoKhau
     * @return void
     */
    public function destroy(SoHoKhau $soHoKhau)
    {
        //
    }
}
