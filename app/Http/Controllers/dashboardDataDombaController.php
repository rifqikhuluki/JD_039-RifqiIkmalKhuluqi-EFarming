<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardDataDombaController extends Controller
{
    //menampilkan dashboard data domba
    public function index()
    {

        return view('dashboardDataDomba');
    }
}
