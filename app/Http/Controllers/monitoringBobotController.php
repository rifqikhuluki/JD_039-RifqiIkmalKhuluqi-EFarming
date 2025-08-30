<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berat;
use App\Models\dombas;

class monitoringBobotController extends Controller
{
    // Menampilkan halaman scan rfid domba
    public function index()
    {
        
        return view('monitoringBobot');
    }

    // Mencari domba berdasarkan RFID tag dan menampilkan halaman untuk catat bobot domba
    public function scan(Request $request){

        $domba = null;

        if($request->has('rfid_tag')){
            $domba = dombas::where('rfid_tag',$request->rfid_tag)->first();
        }

        return view('catatBobotDomba', compact('domba'));
    }

    // Menangani proses insert bobot domba
    public function catat(Request $request)
    {

        $dataBerat = $request->validate([
            'id_domba'=>'required|integer|exists:dombas,id_domba',
            'rfid_tag'=>'required|string|exists:dombas,rfid_tag',
            'tanggal_timbang'=>'required|string',
            'berat_domba'=>'required|string'
        ]);

        berat::create($dataBerat);

        return redirect()->route('riwayatTimbangList', ['rfid_tag' => $dataBerat['rfid_tag']]);
    }
}
