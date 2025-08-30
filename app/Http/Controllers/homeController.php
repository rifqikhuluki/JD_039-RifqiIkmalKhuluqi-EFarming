<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class homeController extends Controller
{
    //menampilkan halam home
    public function index()
    {

        return view('home');
        
    }
}
