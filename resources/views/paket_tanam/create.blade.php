@extends('layouts.app')

@section('title', 'Tambah Paket Tanam')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Paket Tanam</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('paket-tanam.index')}}">Kelola Paket Tanam</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Paket Tanam</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Paket Tanam Baru</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('paket-tanam.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="nama_paket">Nama Paket Tanam</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket" value="{{ old('nama_paket') }}">
                @error('nama_paket')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection