@extends('layouts.app')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tambah Data Domba</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboardDataDomba') }}">Data Domba</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0"><i class="bi bi-plus-circle me-2"></i> Form Tambah Domba</h5>
                    </div>

                    <form action="{{ route('tambahDombaInsert') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <!-- RFID -->
                            <div class="mb-3">
                                <label class="form-label">RFID Tag</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-upc-scan"></i></span>
                                    <input type="text" name="rfid_tag" class="form-control" placeholder="Scan RFID atau masukkan manual" required>
                                </div>
                            </div>

                            <!-- Nama -->
                            <div class="mb-3">
                                <label class="form-label">Nama Domba</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                    <input type="text" name="nama_domba" class="form-control" placeholder="Masukkan nama domba" required>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option value="" disabled selected hidden>Pilih jenis kelamin</option>
                                        <option value="JANTAN">Jantan</option>
                                        <option value="BETINA">Betina</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Ras -->
                            <div class="mb-3">
                                <label class="form-label">Ras</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="text" name="ras" class="form-control" placeholder="Masukkan ras domba" required>
                                </div>
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" name="tanggal_lahir" class="form-control" required>
                                </div>
                            </div>

                            <!-- Status -->
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
    </section>
</main>
@endsection
