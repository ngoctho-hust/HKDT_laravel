<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiayKhaiSinh extends Model
{
    use HasFactory;
    protected $table = 'giaykhaisinhs';
    protected $fillable = [
        'ten_cha',
        'ten_me',
        'noi_dang_ky',
        'ngay_dang_ky',
        'nhankhau_id',
    ];

    public function nhanKhau()
    {
        return $this->belongsTo(NhanKhau::class, 'nhankhau_id');
    }
}
