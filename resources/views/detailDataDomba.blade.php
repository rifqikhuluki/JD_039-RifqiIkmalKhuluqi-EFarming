@extends('layouts.app')

@section('content')
<div class="container py-4">
       <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Detail Domba</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboardDataDomba') }}">Data Domba</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if($domba)
        <!-- Data Domba -->
        <div class="card shadow-sm mb-4 rounded-4">
            <div class="card-header bg-success text-white rounded-top-4">
                <i class="fas fa-info-circle"></i> Informasi Domba
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-hashtag text-secondary me-2"></i><b>ID Domba:</b> {{ $domba->id_domba }}</li>
                    <li class="list-group-item"><i class="fas fa-microchip text-secondary me-2"></i><b>RFID Tag:</b> {{ $domba->rfid_tag }}</li>
                    <li class="list-group-item"><i class="fas fa-venus-mars text-secondary me-2"></i><b>Jenis Kelamin:</b> {{ $domba->jenis_kelamin }}</li>
                    <li class="list-group-item"><i class="fas fa-birthday-cake text-secondary me-2"></i><b>Ras :</b> {{ $domba->ras }}</li>
                    <li class="list-group-item"><i class="fas fa-birthday-cake text-secondary me-2"></i><b>Tanggal Lahir:</b> {{ $domba->tanggal_lahir }}</li>
                    <li class="list-group-item"><i class="fas fa-check-circle text-secondary me-2"></i><b>Status:</b> {{ $domba->status }}</li>
                </ul>
            </div>
        </div>

        <!-- Berat Terakhir -->
        <div class="card shadow-sm mb-4 rounded-4">
            <div class="card-header bg-success text-white rounded-top-4">
                <i class="fas fa-weight-scale"></i> Berat Terakhir
            </div>
            <div class="card-body">
                @if($domba->berat->last())
                    <p class="fs-5">
                        <b>{{ $domba->berat->last()->berat_domba }} kg</b> 
                        <span class="text-muted">({{ $domba->berat->last()->tanggal_timbang }})</span>
                    </p>
                @else
                    <p class="text-muted">Belum ada data berat</p>
                @endif
            </div>
        </div>

        <!-- Tombol Sertifikat -->
        <div class="text-end">
            <a href="{{ route('downloadSertifikat', $domba->id_domba) }}" class="btn btn-success btn-lg shadow-sm">
                <i class="fas fa-download"></i> Unduh Sertifikat
            </a>
        </div>

    @else
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i> Data domba tidak ditemukan
        </div>
    @endif
</div>
@endsection
