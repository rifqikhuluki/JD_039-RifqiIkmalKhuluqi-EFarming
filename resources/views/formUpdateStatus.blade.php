@extends('layouts.app')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Detail Domba</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Monitoring Bobot</a></li>
                        <li class="breadcrumb-item active">Detail Domba</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <!-- Card Data Domba -->
                    <div class="card shadow-lg border-0 mb-4 rounded-3">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0"><i class="bi bi-upc-scan me-2"></i> Identitas Domba</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p><b>RFID Tag:</b> {{ $domba->rfid_tag }}</p>
                                    <p><b>Nama Domba:</b> {{ $domba->nama_domba }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Jenis Kelamin:</b> {{ $domba->jenis_kelamin }}</p>
                                    <p><b>Status:</b> {{ $domba->status ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- Card Form Update Status -->
<div class="col-md-12 mx-auto"> {{-- Atur lebar card --}}
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="bi bi-scale me-2"></i> Update Status Domba</h5>
        </div>
        <form action="{{ route('updateStatusDomba') }}" method="POST">
            @csrf
            <input type="hidden" name="rfid_tag" value="{{ $domba->rfid_tag }}">

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-info-circle"></i></span>
                        <select name="status" class="form-select" required>
                            <option value="" disabled selected hidden>Pilih status domba</option>
                            <option value="HIDUP">Hidup</option>
                            <option value="MATI">Mati</option>
                            <option value="TERJUAL">Terjual</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success px-4">
                    <i class="bi bi-save me-1"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
