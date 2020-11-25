<?php

namespace App\Http\Controllers;

use App\Http\Requests\CCCDRequest;
use App\Models\CCCD;
use Illuminate\Http\Request;

class CCCDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CCCDRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CCCDRequest $request)
    {
        CCCD::create($request->all());

        return redirect()->back()->with('success', 'Thêm mới CCCD thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param CCCD $cccd
     * @return void
     */
    public function show(CCCD $cccd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CCCD $cccd
     * @return void
     */
    public function edit(CCCD $cccd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CCCDRequest $request
     * @param CCCD $cccd
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CCCDRequest $request, CCCD $cccd)
    {
        $cccd->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật CCCD thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CCCD $cccd
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CCCD $cccd)
    {
        $cccd->delete();

        return redirect()->back()->with('success', 'Đã xóa cccd!');
    }
}
