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
    <!--begin::Container-->
    <div class="container-fluid">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">ID</th>
                          <th>RFID TAG</th>
                          <th>NAMA DOMBA</th>
                          <th>JENIS KELAMIN</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dataDomba as $domba)
                        <tr>
                          <td>{{ $domba->id_domba }}</td>
                          <td>{{ $domba->rfid_tag  }}</td>
                          <td>{{ $domba->nama_domba  }}</td>
                          <td>{{ $domba->jenis_kelamin  }}</td>
                          <td>{{ $domba->status  }}</td>
                        </tr>                 
                        @endforeach
                    </table>
                </div>
                <!-- /.card -->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
@endsection