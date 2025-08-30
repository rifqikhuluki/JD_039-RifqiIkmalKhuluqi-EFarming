<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dombas;

class updateStatusDomba extends Controller
{
    // Menampilkan halaman scan rfid
    public function index()
    {
        return view('updateStatus');
    }

    // Mencari domba berdasarkan RFID tag dan menampilkan halaman untuk update status
    public function scan(Request $request)
    {
        $domba = null;

        if ($request->has('rfid_tag')) {
            $domba = dombas::where('rfid_tag', $request->rfid_tag)->first();
        }

        return view('formUpdateStatus', compact('domba'));
    }

    // Menangani proses update status domba
    public function update(Request $request)
    {
        $dataUpdate = $request->validate([
            'rfid_tag' => 'required|string|exists:dombas,rfid_tag',
            'status' => 'required|string',
        ]);

        $domba = dombas::where('rfid_tag', $dataUpdate['rfid_tag'])->first();

        if ($domba) {
            $domba->status = $dataUpdate['status'];
            $domba->save();

            return redirect()->route('detailDomba', ['rfid_tag' => $domba->rfid_tag]);
        }
    }
}
