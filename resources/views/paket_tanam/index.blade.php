@extends('layouts.app')

@section('title', 'Kelola Paket Tanam')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Paket Tanam</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Paket Tanam</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Paket Tanam</h6>
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('paket-tanam.create') }}">Tambah Paket Tanam <i
                class="fas fa-plus"></i></a>
            @endadmin
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Paket Tanam</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($paket_tanams as $paket_tanam)
                  <tr>
                    <td>{{$paket_tanam->id}}</td>
                    <td>{{$paket_tanam->nama_paket}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('paket-tanam.show', ['paket_tanam' => $paket_tanam])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        @admin
                        <div class="col-sm-6">
                          <form action="{{route('paket-tanam.destroy', ['paket_tanam' => $paket_tanam])}}" method="POST">
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