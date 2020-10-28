<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanKhau extends Model
{
    use HasFactory;
    protected $table = 'nhankhaus';
    protected $fillable = [
        'ho_ten',
        'bi_danh',
        'gioi_tinh',
        'ngay_sinh',
        'noi_sinh',
        'nguyen_quan',
        'dan_toc',
        'nghe_nghiep',
        'noi_lam_viec',
        'quan_he_voi_chu_ho',
        'thuong_tru_truoc',
        'sohokhau_id',
    ];

    public function SoHoKhau()
    {
        return $this->belongsTo(SoHoKhau::class, 'sohokhau_id');
    }

    public function TamTru()
    {
        return $this->hasMany(TamTru::class, 'nhankhau_id');
    }

    public function CCCD()
    {
        return $this->hasOne(CCCD::class, 'nhankhau_id');
    }

    public function GiayKhaiSinh()
    {
        return $this->hasOne(GiayKhaiSinh::class, 'nhankhau_id');
    }

    public function KhauTu()
    {
        return $this->hasOne(KhaiTu::class, 'nhankhau_id');
    }

    public function TamVang()
    {
        return $this->hasMany(TamVang::class, 'nhankhau_id');
    }
}
