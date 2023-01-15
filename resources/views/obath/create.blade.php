@extends('layouts.app')

@section('title', 'Tambah Jadwal Obat')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal Obat</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('obath.index')}}">Kelola Jadwal Obat</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Jadwal Obat</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal Obat</h6>
          </div>

          <div class="card-body">
            
            <form action="{{ route('obath.store') }}" method="POST">
              @csrf
              
                <div class="form-group">
                  <label for="alat_bahan_id">Nama Obat</label> <span class="text-danger">* </span>
                  <select class="form-control @error('alat_bahan_id') is-invalid @enderror" id="alat_bahan_id" name="alat_bahan_id">
                    @foreach ($obats as $obat)
                      <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
                    @endforeach
                  </select>
                  @error('alat_bahan_id')
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