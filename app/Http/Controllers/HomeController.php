<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('main', [
<<<<<<< HEAD
            'title' => 'JangHou Career'
=======
            'title' => 'JangHou career'
>>>>>>> d92abc8fc58a6847ee0bc9fbabe9fc3d056866b4
        ]);
    }
}
