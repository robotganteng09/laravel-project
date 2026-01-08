<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
      return view('beranda');
    }
    public function profile(){
        $data = [
            
            'nama' => 'Arsya',
            'kelas' => '11 PPLG 2',
            'absen' => '9'
        ];

        return view('profile', $data,['title' => "profile"]);
    }

    public function kontak(){
        $email = [
            'email' => 'afaisyar@gmail.com'
        ];
        return view('kontak',$email,['title' => "kontak"]);
    }
    public function student(){
      
        return view('student',['title' => "student"]);
    }

    public function home(){
        return view('home',['title' => "home"]);
    }
}
