<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FrontController extends Controller
{
    public function index(){
        $userid = Session::get('userid');
        $nama = Session::get('nama');
        $foto = Session::get('foto');
        $email = Session::get('email');
        $role = Session::get('role');
        if(!Session::get('userid')){
            // dd(Session::get('userid'));
            return Redirect('/');
        }else{
            return view('master', ['role' => $role, 'userid' => $userid, 'nama' => $nama, 'foto' => $foto, 'email' => $email]);
        }
        
    }
}
