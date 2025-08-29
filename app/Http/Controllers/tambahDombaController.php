<?php

namespace App\Http\Controllers;

use App\Models\dombas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class tambahDombaController extends Controller
{
    public function index(){

        return view('tambahDomba');
    }

    public function insert(Request $request){

        $dataInsert = $request->validate([
            'rfid_tag' => 'required|string',
            'nama_domba' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'status' => 'required|string'
        ]);

        dombas::create($dataInsert);
        
        return redirect()->route('dataDomba');
    }
}
