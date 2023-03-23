@extends('layouts.app')

@section('title', 'Data Detail Jadwal Pupuk')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Jadwal Pupuk</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('jadwal-pupuk.index')}}">Kelola Jadwal Pupuk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Jadwal Pupuk</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Jadwal Pupuk</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('jadwal-pupuk.edit', ['jadwal_pupuk' => $jadwal_pupuk->id]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <tr>
                  <th>ID Jadwal Pupuk</th>
                  <td>: {{ $jadwal_pupuk->id }}</td>
                </tr>
                <tr>
                  <th>Nama Tanaman</th>
                  <td>: {{ $jadwal_pupuk->alat_bahan->nama }}</td>
                </tr>
                <tr>
                  <th>Total Penanaman</th>
                  <td>: {{ $jadwal_pupuk->total }}</td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <td>: {{ date('d M Y', strtotime($jadwal_pupuk->tanggal)) }}</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>: {{ $jadwal_pupuk->status }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection