<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaocvController extends Controller
{
    public function index() 
    {
        return view('taocv', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }
}
