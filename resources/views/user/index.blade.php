@extends('layouts.app')

@section('title', 'Kelola Petani')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Petani</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Petani</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Petani</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('user.create') }}">Tambah Petani <i
                class="fas fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->telepon}}</td>
                    <td>{{$user->alamat}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('user.show', ['user' => $user])}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        <div class="col-sm-6">
                          <form action="{{route('user.destroy', ['user' => $user])}}" method="POST">
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