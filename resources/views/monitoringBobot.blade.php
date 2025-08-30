@extends('layouts.app')

@section('content')
<main class="app-main">
    <!-- Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Catat Bobot</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboardMonitoringBobot') }}">Monitoring Bobot</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="content">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-md-11">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-success text-white text-center">
                        <h4 class="mb-0">
                            <i class="bi bi-upc-scan me-2"></i> Masukkan RFID Tag
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <p class="mb-4 text-muted">Tempelkan kartu RFID ke reader atau ketik manual RFID Tag untuk mencari data domba.</p>

                        <form action="{{ route('scanBobot') }}" method="GET">
                            <div class="input-group input-group-lg">
                                <input type="search" 
                                       name="rfid_tag" 
                                       class="form-control rounded-start-pill" 
                                       placeholder="Masukkan RFID Tag di sini..."
                                       autofocus>
                                <button type="submit" class="btn btn-primary rounded-end-pill px-4">
                                    <i class="bi bi-search"></i> Cari
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted">
                        <small>Pastikan RFID Tag sudah terdaftar di database</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
