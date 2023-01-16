@extends('layouts.app')

@section('title', 'Edit Laporan Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Laporan Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('laporan.index')}}">Kelola Laporan Panen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Laporan Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Laporan Panen</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('laporan.update', ['laporan' => $laporan->id]) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="lahan_id">Lahan</label> <span class="text-danger">*</span>
                <select class="form-control @error('lahan_id') is-invalid @enderror" id="lahan_id" name="lahan_id">
                  <option value="">Pilih Lahan</option>
                  @foreach ($lahans as $lahan)
                  <option value="{{ $lahan->id }}" {{ $laporan->lahan_id == $lahan->id ? 'selected' : '' }}>{{ $lahan->nama }}</option>
                  @endforeach
                </select>
                @error('lahan_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama">Nama Barang Panen</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $laporan->nama }}">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah Panen</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ $laporan->jumlah }}">
                @error('jumlah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="satuan">Satuan Panen</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" value="{{ $laporan->satuan }}">
                @error('satuan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="harga">Harga Panen</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $laporan->harga }}">
                @error('harga')
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