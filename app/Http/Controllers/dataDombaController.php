<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dombas;

class dataDombaController extends Controller
{
    public function index(){

        $dataDomba = dombas::get();
        
        $domba = [
            'dataDomba' => $dataDomba
        ];

        return view('dataDomba', $domba);
    }
}
