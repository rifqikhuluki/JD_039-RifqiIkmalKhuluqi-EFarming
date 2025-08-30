<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\loginCheck;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
    //menangani proses logout
    function process()
    {
        Session::flush();
        return redirect()->route('login');
    }

}