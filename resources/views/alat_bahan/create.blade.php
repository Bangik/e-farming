@extends('layouts.app')

@section('title', 'Tambah Alat, Bahan, atau Obat')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Alat, Bahan, atau Obat</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('alatb.index')}}">Kelola Alat atau Bahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Alat, Bahan, atau Obat</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Alat, Bahan, atau Obat</h6>
          </div>

          <div class="card-body">
            
            <form action="{{ route('alatb.store') }}" method="POST">
              @csrf
              
              <div class="form-group">
                  <label for="kategori">Kategori</label> <span class="text-danger">*</span>
                  <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                      
                      <option value="Alat"> Alat </option>
                      <option value="Bahan"> Bahan </option>
                      <option value="Obat"> Obat </option>
                  
                  </select>
                  @error('kategori')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="jenis">Jenis</label> <span class="text-danger">*</span>     
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ old('jenis') }}">
                
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                  <label for="nama">Nama Bahan / Alat</label> <span class="text-danger">*</span>     
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                  
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              
              <div class="form-group">
                <label for="stok">Stok</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}">
                
                @error('stok')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="satuan">Satuan</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" value="{{ old('satuan') }}">
                
                @error('satuan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="harga">Harga</label> <span class="text-danger">*</span>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                
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