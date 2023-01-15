@extends('layouts.app')

@section('title', 'Kelola Alat dan Bahan')
@section('content')

  <!-- Sub Header START -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Alat dan Bahan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kelola Alat dan Bahan</li>
    </ol>
  </div>
  <!-- Sub Header END -->

  <!-- Daftar Alat START -->
  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Alat dan Bahan</h6>
          <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('alatb.create') }}">Tambah Alat dan Bahan <i class="fas fa-plus"></i>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="datatableid">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Kategori</th>
                  <th>Nama Bahan / Alat</th>
                  <th>Stok</th>
                  <th>Satuan</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($konten as $isi)
                <tr>
                  <td>{{$isi->id}}</td>
                  <td>{{$isi->kategori}}</td>
                  <td>{{$isi->nama}}</td>
                  <td>{{$isi->stok}}</td>
                  <td>{{$isi->satuan}}</td>
                  <td>{{$isi->harga}}</td>
                  <td>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="{{route('alatb.show', ['alatb' => $isi->id])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                      </div>
                      
                      <div class="col-sm-6">
                        <form action="{{route('alatb.destroy', ['alatb' => $isi->id]) }}" method="POST">
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