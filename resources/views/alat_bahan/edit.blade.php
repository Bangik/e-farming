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
            <form action="{{url('alatb2/update')}}/{{$id}}"  method="POST">
              @csrf
              {{-- @method('PUT') --}}
              <div class="form-group">
                <label for="nama">Nama Bahan Alat</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$ba}}">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="Kategori">Kategori</label> <span class="text-danger">*</span>
                    <select class="form-control @error('Kategori') is-invalid @enderror" id="Kategori" name="kategori">
                        <option value="bahan" {{ $kategori == "bahan" ? 'selected' : '' }}>Bahan</option>
                        <option value="alat" {{ $kategori == "alat" ? 'selected' : '' }}>Alat</option>       
                    </select>
                @error('Kategori')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="Satuan">Satuan</label> <span class="text-danger">*</span>
                <input type="text" class="form-control @error('Satuan') is-invalid @enderror" id="Satuan" name="satuan" value="{{$satuan}}">
                @error('Satuan')
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