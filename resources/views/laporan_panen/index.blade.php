@extends('layouts.app')

@section('title', 'Kelola Laporan Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Laporan Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Laporan Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Laporan Panen</h6>
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('laporan.create') }}">Tambah Laporan Panen <i
                class="fas fa-plus"></i></a>
            @endadmin
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Lahan</th>
                    <th>Nama Barang Panen</th>
                    <th>Jumlah Panen</th>
                    <th>Satuan Panen</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($laporan_panens as $laporan_panen)
                  <tr>
                    <td>{{$laporan_panen->id}}</td>
                    <td>{{$laporan_panen->lahan->nama}}</td>
                    <td>{{$laporan_panen->nama}}</td>
                    <td>{{$laporan_panen->jumlah}}</td>
                    <td>{{$laporan_panen->satuan}}</td>
                    <td>{{$laporan_panen->harga}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('laporan.show', ['laporan' => $laporan_panen->id])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        @admin
                        <div class="col-sm-6">
                          <form action="{{route('laporan.destroy', ['laporan' => $laporan_panen->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                          </form>
                        </div>
                        @endadmin
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