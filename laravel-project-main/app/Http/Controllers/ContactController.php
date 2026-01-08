<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $email = [
            'email' => 'afaisyar@gmail.com'
        ];
        return view('kontak', $email, ['title' => "kontak"]);
    }
}
