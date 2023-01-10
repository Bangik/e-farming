@extends('layouts.app')

@section('title', 'Data Detail Paket Tanam')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Paket Tanam</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('paket-tanam.index')}}">Kelola Paket Tanam</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Paket Tanam</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Paket Tanam</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('paket-tanam.edit', ['paket_tanam' => $paket_tanam['id']]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                @foreach ($paket_tanam as $key => $value)
                  <tr>
                    <td>{{ucfirst($key)}}</td>
                    <td>: {{ $key == 'created_at' || $key == 'updated_at' ? date('d-m-Y H:i:s', strtotime($value)) : $value }}</td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection