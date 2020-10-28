<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoHoKhau extends Model
{
    use HasFactory;
    protected $table = 'sohokhaus';
    protected $fillable = [
        'chu_ho_id',
        'ngay_cap',
        'so_nha',
        'pho_ap',
        'phuong_xa',
        'quan_huyen',
    ];

    public function NhanKhau()
    {
        return $this->hasMany(NhanKhau::class, 'sohokhau_id');
    }

    public function TamTru()
    {
        return $this->hasMany(TamTru::class, 'sohokhau_id');
    }
}
