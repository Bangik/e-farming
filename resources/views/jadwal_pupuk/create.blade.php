@extends('layouts.app')

@section('title', 'Tambah Jadwal Pupuk')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal Pupuk</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('jadwal-pupuk.index')}}">Kelola Jadwal Pupuk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Jadwal Pupuk</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal Pupuk Baru</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('jadwal-pupuk.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="alat_bahan_id">Nama Tanaman</label> <span class="text-danger">*</span>
                <select class="form-control @error('alat_bahan_id') is-invalid @enderror" id="alat_bahan_id" name="alat_bahan_id">
                  <option value="">Pilih Tanaman</option>
                  @foreach ($alat_bahans as $alat_bahan)
                  <option value="{{ $alat_bahan->id }}" {{ old('alat_bahan_id') == $alat_bahan->id ? 'selected' : '' }}>{{ $alat_bahan->nama }}</option>
                  @endforeach
                </select>
                @error('alat_bahan_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal Tanam</label> <span class="text-danger">*</span>
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