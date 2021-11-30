<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index()
    {
        return view('business.home', [
            'title' => 'Trang chủ người đăng tin'
        ]);
    }
}
