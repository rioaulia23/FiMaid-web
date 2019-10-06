<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class AuthController extends Controller
{
    public function index(){
        if(!Session::get('userid')){
            // dd(Session::get('userid'));
        return view('login');
        }else{
        return Redirect('home');
        }
    }

    public function loginPost(Request $request)
    {
        $userid = $request->userid;
        $nama = $request->nama;
        $foto = $request->foto;
        $email = $request->email;
        $role = $request->role;
            if($userid){
                Session::put('userid',$userid);
                Session::put('nama',$nama);
                Session::put('foto',$foto);
                Session::put('email',$email);
                Session::put('role',$role);
                echo 1;
         }
    }
    public function logout(){
        Session::flush();
        Redirect::back();
        echo 1;
    }
}
