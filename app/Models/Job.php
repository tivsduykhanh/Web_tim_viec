<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_nhatuyendung',
        'id_nganh',
        'id_tinhthanh',
        'tencongviec',
        'hannophoso',
        'mucluong',
        'soluongtuyen',
        'capbac',
        'kinhnghiem',
        'diadiem',
        'mota',
        'yeucau',
        'quyenloi',
    ];

    public function nganh()
    {
        return $this->hasOne(LoaiNganh::class, 'id', 'id_nganh');
    }

    //create relationship with table TinhThanh
    public function tinhthanh()
    {
        return $this->hasOne(TinhThanh::class, 'id', 'id_tinhthanh');
    }

    //create relationship with table NhaTuyenDung
    public function nhatuyendung()
    {
        return $this->hasOne(NhaTuyenDung::class, 'id', 'id_nhatuyendung');
    }
}
