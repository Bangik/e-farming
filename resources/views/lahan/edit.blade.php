@extends('layouts.app')

@section('title', 'Edit Lahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Lahan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('lahan.index')}}">Kelola Lahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Lahan</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Lahan Baru</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('lahan.update', ['lahan' => $lahan->id]) }}" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="nama">Nama Lahan</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $lahan->nama }}">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="user_id">Nama Pemilik</label> <span class="text-danger">*</span>
                <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                  <option value="">Pilih Nama Pemilik</option>
                  @foreach ($users as $user)
                  <option value="{{ $user->id }}" {{ $lahan->user_id == $user->id ? 'selected' : '' }}>{{ $user->nama }}</option>
                  @endforeach
                </select>
                @error('user_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="paket_tanam_id">Pilih Paket Tanam</label> <span class="text-danger">*</span>
                <select class="form-control @error('paket_tanam_id') is-invalid @enderror" id="paket_tanam_id" name="paket_tanam_id">
                  <option value="">Pilih Paket Tanam untuk Lahan</option>
                  @foreach ($paket_tanams as $paket_tanam)
                  <option value="{{ $paket_tanam->id }}" {{ $lahan->paket_tanam_id == $paket_tanam->id ? 'selected' : '' }}>{{ $paket_tanam->nama_paket }}</option>
                  @endforeach
                </select>
                @error('paket_tanam_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="jumlah_bibit">Jumlah Bibit</label> <span class="text-danger">*</span>
                <input type="number" class="form-control @error('jumlah_bibit') is-invalid @enderror" id="jumlah_bibit" name="jumlah_bibit" value="{{ $lahan->jumlah_bibit }}">
                @error('jumlah_bibit')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="luas">Luas (m<sup>2</sup>)</label> <span class="text-danger">*</span>
                <input type="number" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" value="{{ $lahan->luas }}">
                @error('luas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="daerah">Daerah</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('daerah') is-invalid @enderror" id="daerah" name="daerah" value="{{ $lahan->daerah }}">
                @error('daerah')
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