<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => 'Trang chủ người tìm việc'
        ]);
    }
}
