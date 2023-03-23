@extends('layouts.app')

@section('title', 'Kelola Jadwal Pupuk')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Jadwal Pupuk</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Jadwal Pupuk</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal Pupuk</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('jadwal-pupuk.create') }}">Tambah Jadwal Pupuk <i
                class="fas fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Tanaman</th>
                    <th>Total Penanaman</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jadwal_pupuks as $jadwal_pupuk)
                  <tr>
                    <td>{{$jadwal_pupuk->id}}</td>
                    <td>{{$jadwal_pupuk->alat_bahan->nama}}</td>
                    <td>{{$jadwal_pupuk->total}}</td>
                    <td>{{date('d M Y', strtotime($jadwal_pupuk->tanggal))}}</td>
                    <td>{{$jadwal_pupuk->status}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('jadwal-pupuk.show', ['jadwal_pupuk' => $jadwal_pupuk->id])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        <div class="col-sm-6">
                          <form action="{{route('jadwal-pupuk.destroy', ['jadwal_pupuk' => $jadwal_pupuk->id])}}" method="POST">
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