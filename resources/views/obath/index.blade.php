@extends('layouts.app')

@section('title', 'Kelola Alat dan Bahan')
@section('content')

  <!-- Sub Header START -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Obat Hama</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kelola Obat Hama</li>
    </ol>
  </div>
  <!-- Sub Header END -->

  <!-- Daftar Alat START -->
  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Obat Hama</h6>
          <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('obath.create') }}">Tambah Obat Hama <i class="fas fa-plus"></i>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="datatableid">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nama Obat</th>
                  <th>Jenis Obat</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($konten as $isi)
                <tr>
                  <td>{{$isi->id}}</td>
                  <td>{{$isi->nama_obat}}</td>
                  <td>{{$isi->jenis_obat}}</td>
                  <td>{{$isi->tanggal}}</td>
                  <td>{{$isi->waktu}}</td>
                  <td>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="{{route('obath.show', ['obath' => $isi->id])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                      </div>
                      
                      <div class="col-sm-6">
                        <form action="{{route('obath.destroy', ['obath' => $isi->id]) }}" method="POST">
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
  <!-- Daftar Alat END -->


@endsection