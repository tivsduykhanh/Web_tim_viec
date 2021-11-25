<?php

namespace App\Http\Controllers\User;

use App\Models\Userlogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use iLLuminate\Support\Facades\Redirect;
session_start();

class AuthController extends Controller
{
    public function index()
    {
        return view('user.auth.login', [
            'title' => 'Đăng nhập'
        ]);
    }  
    

    // public function customLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->route('home');
    //     }

    //     return redirect()->route('userlogin')->withSuccess('Login details are not valid');
    // }

    // public function timviec(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email:filter',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt([
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password')
    //     ], $request->input('remember'))) {

    //         return redirect()->route('admin');
    //     }

    //     Session::flash('error', 'Email hoặc Pasword không đúng');
    //     return redirect()->back();
    // }

    // public function customLogin()
    // {
    //     if (Auth::attempt(request(['email', 'password'])) == false) {
    //         return back()->withErrors([
    //             'message' => 'The email or password is incorrect, please try again'
    //         ]);
    //     }
        
    //     return redirect()->to('/');
    // }

    // public function run()
	// {
		
	// 	$user_name=$_POST['email'];
	// 	$password=($_POST['password']);
		
	// 	$res= $this->db->select("SELECT * FROM `userlogins` WHERE username = '".$email."' AND password = '".$password."'");
	// 	$count = count($res);
		
	// 	if ($count > 0) {
			
	// 		Session::init();
	// 		Session::set('role', "user");
	// 		Session::set('loggedIn', true);
	// 		Session::set('user_name', $user_name);
	// 		Session::set('password', $res[0]['password']);
	// 		header('location: '.URL.'login/index');
	// 	} 
	// 	   else {
	// 		Session::set('loggedIn', false);
	// 		header('location: '.URL);
	// 	}
		
		
	// }

    public function customLogin(Request $request )
    {
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('userlogins')->where('email', $email)->where('password', $password)->first();
        if($result){
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return redirect()->route('home');
        }else {
            Session::put('message', 'Email hoặc mật khẩu không đúng');
            return redirect()->back();
        }
    }


    public function registration()
    {
        return view('user.auth.register', [
            'title' => 'Đăng ký'
        ]);
    }


    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->route('home');
    }


    public function create(array $data)
    {
      return Userlogin::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
      ]);
    }    
    

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return redirect()->route('home');
    //     }
  
    //     return redirect()->route('userlogin')->withSuccess('You are not allowed to access');
    // }
    

    public function signOut() {
        Auth::logout();
        Session::flush();
        return Redirect()->route('home');
    }
}

