<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\loginCheck;


class loginController extends Controller
{
    //menampilkan halam login
    function login()
    {
        return view('login');
    }
    
    //menanggani proses login
    function process(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => ['required', new loginCheck($request)]
        ]);

        return redirect()->route('home');
    }

}