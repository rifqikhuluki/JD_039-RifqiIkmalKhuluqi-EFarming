<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dombas;

class dataDombaController extends Controller
{
    //menampilkan list data domba
    public function index()
    {

        $dataDomba = dombas::get();
        
        $domba = [
            'dataDomba' => $dataDomba
        ];

        return view('dataDomba', $domba);
    }
}
