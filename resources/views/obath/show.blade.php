@extends('layouts.app')

@section('title', 'Data Detail Jadwal Obat')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Jadwal Obat</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('obath.index')}}">Kelola Jadwal Obat</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Jadwal Obat</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Jadwal Obat</h6>
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('obath.edit', ['obath' => $obathama->id]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
            @endadmin
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                
                  <tr>
                    <th>ID</th>
                    <td>: {{$obathama->id}}</td>
                  </tr>
                  
                  <tr>
                    <th>Nama Obat</th>
                    <td>: {{$obathama->alatbahan->nama}}</td>
                  </tr>

                  <tr>
                    <th>Jenis Obat</th>
                    <td>: {{$obathama->jenis_obat}}</td>
                  </tr>

                  <tr>
                    <th>Tanggal</th>
                    <td>: {{date('d M Y', strtotime($obathama->tanggal))}}</td> 
                  </tr>

                  <tr>
                    <th>Waktu</th>
                    <td>: {{$obathama->waktu}}</td> 
                  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection