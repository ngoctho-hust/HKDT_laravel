<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiayKhaiSinhRequest;
use App\Models\GiayKhaiSinh;
use Illuminate\Http\Request;

class GiayKhaiSinhController extends Controller
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
     * @param GiayKhaiSinhRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(GiayKhaiSinhRequest $request)
    {
        GiayKhaiSinh::create($request->all());

        return response()->json([
            'success' => 'Tạo giấy khai sinh thành công!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param GiayKhaiSinh $giaykhaisinh
     * @return void
     */
    public function show(GiayKhaiSinh $giaykhaisinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param GiayKhaiSinh $giaykhaisinh
     * @return void
     */
    public function edit(GiayKhaiSinh $giaykhaisinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param GiayKhaiSinh $giaykhaisinh
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(GiayKhaiSinhRequest $request, GiayKhaiSinh $giaykhaisinh)
    {
        $giaykhaisinh->update($request->all());

        return response()->json([
            'success' => 'Đã cập nhật giấy khai sinh!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param GiayKhaiSinh $giaykhaisinh
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(GiayKhaiSinh $giaykhaisinh)
    {
        $giaykhaisinh->delete();

        return response()->json([
            'success' => 'Đã xóa giấy khai sinh!',
        ]);
    }
}
