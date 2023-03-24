@extends('layouts.app')

@section('title', 'Kelola Penanaman dan Pasca Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Penanaman dan Pasca Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Penanaman dan Pasca Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Penanaman dan Pasca Panen</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('penanaman-pasca-panen.create') }}">Tambah Penanaman dan Pasca Panen <i
                class="fas fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatableid">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Lahan</th>
                    <th>Tanggal Tanam</th>
                    <th>Tanggal Panen</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penanaman_pasca_panens as $penanaman_pasca_panen)
                  <tr>
                    <td>{{$penanaman_pasca_panen->id}}</td>
                    <td>{{$penanaman_pasca_panen->lahan->nama}}</td>
                    <td>{{date('d M Y', strtotime($penanaman_pasca_panen->tanggal_tanam))}}</td>
                    <td>{{date('d M Y', strtotime($penanaman_pasca_panen->tanggal_panen))}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-6">
                          <a href="{{route('penanaman-pasca-panen.show', $penanaman_pasca_panen->id)}}" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                        </div>
                        <div class="col-sm-6">
                          <form action="{{route('penanaman-pasca-panen.destroy', $penanaman_pasca_panen->id)}}" method="POST">
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