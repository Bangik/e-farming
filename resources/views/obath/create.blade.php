@extends('layouts.app')

@section('title', 'Alat dan Bahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Alat dan Bahan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('lahan.index')}}">Kelola Alat dan Bahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Alat dan Bahan</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Alat dan Bahan</h6>
          </div>

          <div class="card-body">
            
            <form action="{{ route('obath.store') }}" method="POST">
              @csrf
              
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label> <span class="text-danger">*</span>
                    <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}">
                    
                    @error('nama_obat')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenis_obat">Jenis Obat</label> <span class="text-danger">*</span>     
                    <input type="text" class="form-control @error('jenis_obat') is-invalid @enderror" id="jenis_obat" name="jenis_obat" value="{{ old('jenis_obat') }}">
                    
                    @error('jenis_obat')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

              <div class="form-group">
                <label for="tanggal">Tanggal</label> <span class="text-danger">*</span>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                
                @error('tanggal')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="waktu">Waktu</label> <span class="text-danger">*</span>
                <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}">
                
                @error('waktu')
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