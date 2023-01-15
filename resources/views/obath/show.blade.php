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
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('obath.edit', ['obath' => $obathama->id]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                
                  <tr>
                    <td>ID</td>
                    <td>: {{$obathama->id}}</td>
                  </tr>
                  
                  <tr>
                    <td>Nama Obat</td>
                    <td>: {{$obathama->alatbahan->nama}}</td>
                  </tr>

                  <tr>
                    <td>Jenis Obat</td>
                    <td>: {{$obathama->jenis_obat}}</td>
                  </tr>

                  <tr>
                    <td>Tanggal</td>
                    <td>: {{date('d M Y', strtotime($obathama->tanggal))}}</td> 
                  </tr>

                  <tr>
                    <td>Waktu</td>
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