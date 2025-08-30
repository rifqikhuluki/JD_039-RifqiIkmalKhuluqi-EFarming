<?php

namespace App\Http\Controllers;

use App\Models\dombas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class tambahDombaController extends Controller
{
    // Menampilkan halaman scan rfid domba mengarah ke form tambah domba
    public function index()
    {

        return view('tambahDomba');
    }

    //menangani proses insert
    public function insert(Request $request)
    {

        $dataInsert = $request->validate([
            'rfid_tag' => 'required|string',
            'nama_domba' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'ras' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'status' => 'required|string'
        ]);

        dombas::create($dataInsert);
        
        return redirect()->route('detailDomba', ['rfid_tag' => $dataInsert['rfid_tag']]);
    }
}
