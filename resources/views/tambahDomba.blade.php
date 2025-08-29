@extends('layouts.app');

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
<!--begin::Col-->
<div class="col-md-12">
<!--begin::Quick Example-->
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Quick Example</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form action="{{ route('tambahDomba.insert') }}" method="POST">
        {{ csrf_field() }}
    <!--begin::Body-->
    <div class="card-body">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">RFID TAG</label>
        <input
            type="text"
            name="rfid_tag"
            class="form-control"
            id="exampleInputEmail1"
            placeholder="Masukkan RFID Tag secara manual atau scan"
        />
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NAMA DOMBA</label>
        <input 
            type="text" name="nama_domba" 
            class="form-control" 
            id="exampleInputPassword1" 
            placeholder="Masukkan Nama Domba" 
        />
        </div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile02">JENIS KELAMIN</label>
        <select type="text" name="jenis_kelamin" required class="form-control" id="exampleInputPassword1">
        <option value="" disabled selected hidden>Masukkan Jenis Kelamin</option>
            <option value="JANTAN">JANTAN</option>
            <option value="BETINA">BETINA</option>
        </select>
        </div>
        
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">TANGGAL LAHIR</label>
        <input 
            type="date" name="tanggal_lahir" 
            class="form-control" 
            id="exampleInputPassword1" 
            placeholder="Masukkan Tanggal Lahir Domba" 
        />
        </div>

                <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile02">STATUS</label>
        <select type="text" name="status" required class="form-control" id="exampleInputPassword1">
        <option value="" disabled selected hidden>Masukkan Status</option>
            <option value="JANTAN">HIDUP</option>
            <option value="BETINA">MATI</option>
            <option value="BETINA">TERJUAL</option>
        </select>
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Footer-->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!--end::Footer-->
    </form>
    <!--end::Form-->
</div>
<!--end::Quick Example-->
</div>
<!--end::Col-->
<!--end::App Content-->
</main>
@endsection