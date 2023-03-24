@extends('layouts.app')

@section('title', 'Data Detail Penanaman dan Pasca Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Penanaman dan Pasca Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('jadwal-pupuk.index')}}">Kelola Penanaman dan Pasca Panen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Penanaman dan Pasca Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Penanaman dan Pasca Panen</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('penanaman-pasca-panen.edit', $penanaman_pasca_panen->id) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <tr>
                  <th>ID Penanaman dan Pasca Panen</th>
                  <td>: {{ $penanaman_pasca_panen->id }}</td>
                </tr>
                <tr>
                  <th>Nama Lahan</th>
                  <td>: {{ $penanaman_pasca_panen->lahan->nama }}</td>
                </tr>
                <tr>
                  <th>Tanggal Tanam</th>
                  <td>: {{ date('d M Y', strtotime($penanaman_pasca_panen->tanggal_tanam)) }}</td>
                </tr>
                <tr>
                  <th>Tanggal Panen</th>
                  <td>: {{ date('d M Y', strtotime($penanaman_pasca_panen->tanggal_panen)) }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection