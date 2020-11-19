<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhaiTu extends Model
{
    use HasFactory;
    protected $table = 'khaitus';
    protected $fillable = [
        'nhankhau_id',
        'chet_luc',
        'noi_chet',
        'nguyen_nhan',
    ];

    public function nhanKhau()
    {
        return $this->belongsTo(NhanKhau::class, 'nhankhau_id');
    }
}
