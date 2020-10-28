<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamTru extends Model
{
    use HasFactory;
    protected $table = 'tamtrus';
    protected $fillable = [
        'sohokhau_id',
        'nhankhau_id',
        'tu_ngay',
        'den_ngay',
        'ly_do',
    ];

    public function SoHoKhau()
    {
        return $this->belongsTo(SoHoKhau::class, 'sohokhau_id');
    }

    public function NhanKhau()
    {
        return $this->belongsTo(NhanKhau::class, 'nhankhau_id');
    }
}
