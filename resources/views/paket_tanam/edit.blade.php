@extends('layouts.app')

@section('title', 'Edit Paket Tanam')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Tanam</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('paket-tanam.index')}}">Kelola Paket Tanam</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Paket Tanam</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Paket Tanam Baru</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('paket-tanam.update', ['paket_tanam' => $paket_tanam->id]) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="alat_bahan">Alat dan Bahan</label> <span class="text-danger">*bisa pilih lebih dari satu </span>
                <select class="form-control @error('alat_bahan') is-invalid @enderror" id="alat_bahan" name="alat_bahan[]" multiple>
                  @foreach ($alat_bahans as $alat_bahan)
                    <option value="{{ $alat_bahan->id }}" {{ in_array($alat_bahan->id, $paket_tanam->alat_bahan->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $alat_bahan->nama }}</option>
                  @endforeach
                </select>
                @error('alat_bahan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama_paket">Nama Paket Tanam</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket" value="{{ $paket_tanam->nama_paket }}">
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