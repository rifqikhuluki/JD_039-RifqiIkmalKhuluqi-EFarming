<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardMonitoringDombaController extends Controller
{
    //menampilkan halaman dashboard monitoring bobot
    public function index()
    {
        return view('dashboardMonitoringBobot');
    }
}
