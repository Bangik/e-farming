@extends('layouts.app')

@section('title', 'Kelola Lahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Lahan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Lahan</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Lahan</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('lahan.create') }}">Tambah Lahan <i
                class="fas fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Lahan</th>
                    <th>Nama Pemilik</th>
                    <th>Jumlah Bibit</th>
                    <th>Luas</th>
                    <th>Daerah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($lahans as $lahan)
                  <tr>
                    <td>{{$lahan->id}}</td>
                    <td>{{$lahan->nama}}</td>
                    <td>{{$lahan->user->nama}}</td>
                    <td>{{$lahan->jumlah_bibit}}</td>
                    <td>{{$lahan->luas}} m<sup>2</sup></td>
                    <td>{{$lahan->daerah}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('lahan.show', ['lahan' => $lahan])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        <div class="col-sm-6">
                          <form action="{{route('lahan.destroy', ['lahan' => $lahan])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection