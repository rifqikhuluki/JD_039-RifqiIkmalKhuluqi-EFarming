@extends('layouts.app')

@section('content')
<main class="app-main">
<!--begin::App Content Header-->
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!-- Cards -->
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-success rounded-4 h-100 hover-scale">
                <div class="card-body d-flex align-items-center">
                    <div class="card-body d-flex align-items-center">
                        <h3 class="card-title">Catat Bobot Domba</h3>
                    </div>
                </div>
                <div class="card-footer bg-white text-primary fw-bold rounded-bottom-4">
                    <a href="{{ route('catatBobot') }}" class="text-decoration-none">
                        Lihat <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card text-white bg-success rounded-4 h-100 hover-scale">
                <div class="card-body d-flex align-items-center">
                    <div class="card-body d-flex align-items-center">
                        <h3 class="card-title ">Riwayat Timbang</h3>
                    </div>
                </div>
                <div class="card-footer bg-white text-success fw-bold rounded-bottom-4">
                    <a href="{{ route('riwayatTimbang') }}" class="text-decoration-none">
                        Lihat <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::App Content-->

<style>
.hover-scale {
    transition: transform 0.3s;
}
.hover-scale:hover {
    transform: translateY(-5px);
}
</style>
</main>
@endsection
