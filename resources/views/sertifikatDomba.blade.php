<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sertifikat Domba</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; text-align:center; }
        .certificate { border: 5px solid #000; padding: 30px; }
        h1 { font-size: 28px; margin-bottom: 10px; }
        h2 { font-size: 22px; margin-bottom: 20px; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        td, th { padding: 8px; border: 1px solid #000; text-align:left; }
    </style>
</head>
<body>
    <div class="certificate">
        <h1>SERTIFIKAT DOMBA</h1>
        <h2>Identitas & Riwayat Domba</h2>

        <table>
            <tr><th>ID Domba</th><td>{{ $domba->id_domba }}</td></tr>
            <tr><th>RFID Tag</th><td>{{ $domba->rfid_tag }}</td></tr>
            <tr><th>Nama</th><td>{{ $domba->nama_domba }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>{{ $domba->jenis_kelamin }}</td></tr>
            <tr><th>Ras</th><td>{{ $domba->ras }}</td></tr>
            <tr><th>Tanggal Lahir</th><td>{{ $domba->tanggal_lahir }}</td></tr>
            <tr><th>Status</th><td>{{ $domba->status }}</td></tr>
            <tr><th>Berat Terakhir</th><td>
                @if($beratTerakhir)
                    {{ $beratTerakhir->berat_domba }} kg ({{ $beratTerakhir->tanggal_timbang }})
                @else
                    Belum ada data
                @endif
            </td></tr>
        </table>
        <p style="margin-top:40px;">Dicetak pada {{ now()->format('d-m-Y') }}</p>
    </div>
</body>
</html>
