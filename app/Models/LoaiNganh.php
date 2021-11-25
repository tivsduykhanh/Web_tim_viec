<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiNganh extends Model
{
    use HasFactory;
    protected $fillable = [
        'TenNganh'
    ];
}
