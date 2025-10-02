<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil(){
        $data = [

            'nama' => 'Arsya',
            'kelas' => '11 PPLG 2',
            'absen' => '9'
        ];

        return view('profile', $data, ['title' => "profile"]);
    }
}
