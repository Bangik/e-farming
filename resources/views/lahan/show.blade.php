@extends('layouts.app')

@section('title', 'Data Detail Lahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Lahan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('lahan.index')}}">Kelola Lahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Lahan</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Lahan</h6>
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('lahan.edit', ['lahan' => $lahan['id']]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
            @endadmin
          </div>
          <div class="card-body">
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                <tr>
                  <th>ID Lahan</th>
                  <td>: {{ $lahan->id }}</td>
                </tr>
                <tr>
                  <th>Nama Lahan</th>
                  <td>: {{ $lahan->nama }}</td>
                </tr>
                <tr>
                  <th>Paket Tanam</th>
                  <td>: {{ $lahan->paket_tanam->nama_paket }}</td>
                </tr>
                <tr>
                  <th>Pemilik</th>
                  <td>: {{ $lahan->user->nama }}</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>: {{ $lahan->status }}</td>
                </tr>
                <tr>
                  <th>Luas Lahan</th>
                  <td>: {{ $lahan->luas }} </td>
                </tr>
                <tr>
                  <th>Daerah</th>
                  <td>: {{ $lahan->daerah }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection