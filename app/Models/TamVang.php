<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamVang extends Model
{
    use HasFactory;
    protected $table = 'tamvangs';
    protected $fillable = [
        'nhankhau_id',
        'tu_ngay',
        'den_ngay',
        'ly_do',
    ];

    public function nhanKhau()
    {
        return $this->belongsTo(NhanKhau::class, 'nhankhau_id');
    }
}
