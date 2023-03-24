@extends('layouts.app')

@section('title', 'Edit Penanaman dan Pasca Panen')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Penanaman dan Pasca Panen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('penanaman-pasca-panen.index')}}">Kelola Penanaman dan Pasca Panen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Penanaman dan Pasca Panen</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Penanaman dan Pasca Panen</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('penanaman-pasca-panen.update', $penanaman_pasca_panen->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="lahan_id">Nama Lahan</label> <span class="text-danger">*</span>
                <select class="form-control @error('lahan_id') is-invalid @enderror" id="lahan_id" name="lahan_id">
                  <option value="">Pilih Lahan</option>
                  @foreach ($lahans as $lahan)
                  <option value="{{ $lahan->id }}" {{ $penanaman_pasca_panen->lahan_id == $lahan->id ? 'selected' : '' }}>{{ $lahan->nama }}</option>
                  @endforeach
                </select>
                @error('lahan_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal_tanam">Tanggal Tanam</label> <span class="text-danger">*</span>
                <input type="date" class="form-control @error('tanggal_tanam') is-invalid @enderror" id="tanggal_tanam" name="tanggal_tanam" value="{{ $penanaman_pasca_panen->tanggal_tanam }}">
                @error('tanggal_tanam')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal_panen">Tanggal Panen</label> <span class="text-danger">*</span>
                <input type="date" class="form-control @error('tanggal_panen') is-invalid @enderror" id="tanggal_panen" name="tanggal_panen" value="{{ $penanaman_pasca_panen->tanggal_panen }}">
                @error('tanggal_panen')
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