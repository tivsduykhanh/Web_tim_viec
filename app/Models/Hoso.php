<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoso extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'IDnguoitimviec', 'ImgHoso', 'Hoten', 'SDT', 'Ngaysinh', 'Diachi', 'TinhTP', 'Gioitinh', 'Tinhtranghonnhan', 'Vitrimongmuon', 'Capbachientai', 'Capbacmongmuon', 'Nganhnghe', 'Diadiemlamviec', 'Trinhdohocvan', 'Kinhnghiem', 'Hinhthuclamviec', 'Mucluongmongmuon', 'Muctieunghenghiep'];

    //create relationship with table Nguoitimviec
    public function nguoitimviec()
    {
        return $this->hasOne(nguoitimviec::class, 'Id', 'IDnguoitimviec');
    }

}
