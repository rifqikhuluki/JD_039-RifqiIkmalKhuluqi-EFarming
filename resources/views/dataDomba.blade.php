@extends('layouts.app')

@section('content')
<main class="app-main">
    <!-- Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Domba</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Domba</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Search RFID -->
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <form action="{{ route('scanDombaDetail') }}" method="GET" class="d-flex">
                        <input type="text" name="rfid_tag" class="form-control me-2" placeholder="Cari RFID Tag..." required>
                        <button class="btn btn-success"><i class="bi bi-search"></i> Cari</button>
                    </form>
                </div>
            </div>

            <!-- Tabel Data Domba -->
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i> Daftar Domba</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>RFID Tag</th>
                                <th>Nama Domba</th>
                                <th>Jenis Kelamin</th>
                                <th>Ras</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 120px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataDomba as $domba)
                            <tr>
                                <td>{{ $domba->id_domba }}</td>
                                <td>{{ $domba->rfid_tag }}</td>
                                <td>{{ $domba->nama_domba }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $domba->jenis_kelamin }}</span>
                                </td>
                                <td>{{ $domba->ras }}</td>
                                <td>
                                    @if($domba->status == 'HIDUP')
                                        <span class="badge bg-success">Hidup</span>
                                    @elseif($domba->status == 'MATI')
                                        <span class="badge bg-danger">Mati</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Terjual</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('detailDomba', $domba->rfid_tag) }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    <small>Total Domba: {{ count($dataDomba) }}</small>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
