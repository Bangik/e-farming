@extends('layouts.app')

@section('title', 'Edit Alat Bahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Bahan Alat</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('alatb.index')}}">Kelola Alat Bahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Bahan Alat</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Bahan Alat Baru</h6>
          </div>

          <div class="card-body">
            <form action="{{url('obath2/update')}}/{{$id}}"  method="POST">
              @csrf
              {{-- @method('PUT') --}}
              <div class="form-group">
                <label for="nama_obat">nama Obat</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat" name="nama_obat" value="{{$namao}}">
                @error('nama_obat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="jenis">Jenis Obat</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{$jenis}}">
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="tgl">Tanggal</label> <span class="text-danger">*</span>
                <input type="date" class="form-control @error('tgl') is-invalid @enderror" id="tgl" name="tgl" value="{{$tgl}}">
                @error('tgl')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="waktu">Waktu</label> <span class="text-danger">*</span>
                <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{$waktu}}">
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