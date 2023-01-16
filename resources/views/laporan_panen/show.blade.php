@extends('layouts.app')

@section('title', 'Data Detail Laporan Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Laporan Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('laporan.index')}}">Kelola Laporan Panen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Laporan Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Laporan Panen</h6>
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('laporan.edit', ['laporan' => $laporan->id]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
            @endadmin
          </div>
          <div class="card-body">
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                <tr>
                  <th>ID Laporan</th>
                  <td>: {{ $laporan->id }}</td>
                </tr>
                <tr>
                  <th>Nama Lahan</th>
                  <td>: {{ $laporan->lahan->nama }}</td>
                </tr>
                <tr>
                  <th>Nama Barang Panen</th>
                  <td>: {{ $laporan->nama }}</td>
                </tr>
                <tr>
                  <th>Jumlah Panen</th>
                  <td>: {{ $laporan->jumlah }}</td>
                </tr>
                <tr>
                  <th>Satuan</th>
                  <td>: {{ $laporan->satuan }}</td>
                </tr>
                <tr>
                  <th>Harga Panen</th>
                  <td>: {{ $laporan->harga }} </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection