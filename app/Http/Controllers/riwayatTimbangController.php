<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dombas;
use App\Models\Berat;

class RiwayatTimbangController extends Controller
{
    // Menampilkan halaman scan rfid domba
    public function index()
    {
        return view('riwayatTimbang');
    }

    // Mencari domba berdasarkan RFID tag dan menampilkan halaman list riwayat timbang
    public function scan(Request $request)
    {
        $domba = null;
        $riwayat = collect();

        if ($request->filled('rfid_tag')) {
            $domba = Dombas::where('rfid_tag', $request->rfid_tag)->first();

            if ($domba) {
                $riwayat = Berat::where('rfid_tag', $request->rfid_tag)
                                ->orderBy('tanggal_timbang', 'desc')
                                ->get();
            }
        }

        return view('dataRiwayatTimbang', compact('domba', 'riwayat'));
    }

    // Menangani proses select domba
    public function show($rfid_tag)
    {
        $domba = Dombas::where('rfid_tag', $rfid_tag)->firstOrFail();

        $riwayat = Berat::where('rfid_tag', $rfid_tag)
                        ->orderBy('tanggal_timbang', 'desc')
                        ->get();

        return view('dataRiwayatTimbang', compact('domba', 'riwayat'));
    }
}
