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
            
            <form action="{{ route('alatb.store') }}" method="POST">
              @csrf
              
                <div class="form-group">
                    <label for="nama">Kategori</label> <span class="text-danger">*</span>
                    <select class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                        
                        <option value="Alat"> Alat </option>
                        <option value="Bahan"> Bahan </option>
                    
                    </select>
                    @error('kategori')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bahan_alat">Nama Bahan / Alat</label> <span class="text-danger">*</span>     
                    <input type="text" class="form-control @error('bahan_alat') is-invalid @enderror" id="bahan_alat" name="bahan_alat" value="{{ old('bahan_alat') }}">
                    
                    @error('bahan_alat')
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

              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

          </div>
        </div>

      </div>
    </div>
    <!--Row-->
@endsection