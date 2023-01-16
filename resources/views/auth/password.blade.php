@extends('layouts.app')

@section('title', 'Ganti Password')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ganti Password</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('ganti-password.update') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="old_password">Password Lama</label> <span class="text-danger">*</span>
                <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password" value="{{ old('old_password') }}">
                @error('old_password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password Baru</label> <span class="text-danger">*</span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password Baru</label> <span class="text-danger">*</span>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
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