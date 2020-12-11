<?php

namespace App\Http\Controllers;

use App\Models\NhanKhau;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $numOfMale = NhanKhau::doesntHave('khaiTu')
            ->where('gioi_tinh', 'nam')
            ->count();
        $numOfFemale = NhanKhau::doesntHave('khaiTu')
            ->where('gioi_tinh', 'nữ')
            ->count();
        $numOfOther = NhanKhau::doesntHave('khaiTu')
            ->where('gioi_tinh', 'not like' ,'nam')
            ->where('gioi_tinh', 'not like', 'nữ')
            ->count();

        $statistByAge = [
            NhanKhau::doesntHave('khaiTu')->whereDate('ngay_sinh', '>=', Carbon::today()->subYears(3))->count(),
            NhanKhau::doesntHave('khaiTu')->whereBetween('ngay_sinh', [Carbon::today()->subYears(6), Carbon::today()->subYears(3)->endOfDay()])->count(),
            NhanKhau::doesntHave('khaiTu')->whereBetween('ngay_sinh', [Carbon::today()->subYears(11), Carbon::today()->subYears(6)->endOfDay()])->count(),
            NhanKhau::doesntHave('khaiTu')->whereBetween('ngay_sinh', [Carbon::today()->subYears(15), Carbon::today()->subYears(11)->endOfDay()])->count(),
            NhanKhau::doesntHave('khaiTu')->whereBetween('ngay_sinh', [Carbon::today()->subYears(18), Carbon::today()->subYears(15)->endOfDay()])->count(),
            NhanKhau::doesntHave('khaiTu')->whereBetween('ngay_sinh', [Carbon::today()->subYears(60), Carbon::today()->subYears(18)->endOfDay()])->count(),
            NhanKhau::doesntHave('khaiTu')->whereDate('ngay_sinh', '<=', Carbon::today()->subYears(60))->count(),
        ];

        $statistByTime = [];
        $years = [];

        for ($i = 10; $i >= 0; $i--) {
            $time = Carbon::today()->subYears($i);
            $numOfNhanKhaus = NhanKhau::where('ngay_sinh', '<', $time)
                ->where(function ($q) use ($time) {
                    $q->doesntHave('khaiTu')
                        ->orWhereHas('khaiTu', function ($q1) use ($time) {
                            $q1->where('chet_luc', '>', $time);
                        });
                })->count();

            array_push($statistByTime, $numOfNhanKhaus);
            array_push($years, (int) $time->format('Y'));
        }

        return view('statistic', compact(
            'numOfMale',
            'numOfFemale',
            'numOfOther',
            'statistByAge',
            'statistByTime',
            'years',
        ));
    }
}
