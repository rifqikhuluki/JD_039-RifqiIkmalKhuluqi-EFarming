<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dombas;
use App\Models\Berat;
use Barryvdh\DomPDF\Facade\Pdf;

class detailDombaController extends Controller
{
    //menampilkan detail domba berdasrkan rfid
    public function show($rfid_tag)
    {
        $domba = Dombas::with('berat')
            ->where('rfid_tag', $rfid_tag)
            ->firstOrFail();

        return view('detailDataDomba', compact('domba'));
    }

    // Mencari domba berdasarkan RFID tag dan menampilkan halaman untuk catat bobot domba
    public function scan(Request $request)
    {
        $rfid_tag = $request->input('rfid_tag');

        $domba = Dombas::where('rfid_tag', $rfid_tag)->first();

        if (!$domba) {
            return redirect()->back()->with('error', 'RFID Tag tidak ditemukan.');
        }

        return redirect()->route('detailDomba', $domba->rfid_tag);
    }

    //menangani proses download sertifikat
    public function downloadSertifikat($id)
    {
        $domba = Dombas::with('berat')->findOrFail($id);

        $beratTerakhir = $domba->berat->last();

        $pdf = Pdf::loadView('sertifikatDomba', [
            'domba' => $domba,
            'beratTerakhir' => $beratTerakhir
        ]);

        return $pdf->download('sertifikat_domba_'.$domba->id_domba.'.pdf');
    }
}
