<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CCCD extends Model
{
    use HasFactory;
    protected $table = 'cccds';
    protected $fillable = [
        'so_cccd',
        'ngay_cap',
        'noi_cap',
        'nhankhau_id',
    ];

    public function nhanKhau()
    {
        return $this->belongsTo(NhanKhau::class, 'nhankhau_id');
    }
}
