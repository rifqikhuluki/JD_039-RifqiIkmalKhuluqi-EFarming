@extends('layouts.app')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Riwayat Timbang Domba</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route('detailDomba', $domba->rfid_tag) }}">Detail Domba</a>
                        </li>
                        <li class="breadcrumb-item active">Riwayat Timbang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <!-- Identitas Domba -->
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-upc-scan me-2"></i> Identitas Domba</h5>
                </div>
                <div class="card-body">
                    <p><b>RFID Tag:</b> {{ $domba->rfid_tag }}</p>
                    <p><b>Nama:</b> {{ $domba->nama_domba }}</p>
                    <p><b>Jenis Kelamin:</b> {{ $domba->jenis_kelamin }}</p>
                    <p><b>Status:</b> {{ $domba->status }}</p>
                </div>
            </div>

            <!-- Tabel Riwayat Timbang -->
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i> Riwayat Timbang</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Tanggal Timbang</th>
                                <th>Berat (kg)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($riwayat as $index => $timbang)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $timbang->tanggal_timbang }}</td>
                                    <td>{{ $timbang->berat_domba }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">Belum ada riwayat timbang</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection
