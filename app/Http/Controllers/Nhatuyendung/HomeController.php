<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        session_start();

        $getData = DB::table('nhatuyendungs')->select('id','name')->where('id',Session::get('id'))->get();
        
        return view('business.home', [
            'title' => 'Trang chủ người đăng tin'
        ])->with('nhatuyendung',$getData);
    }
}
