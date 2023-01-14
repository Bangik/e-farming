@extends('layouts.app')

@section('title', 'Data Detail Lahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail Lahan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('lahan.index')}}">Kelola Lahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail Lahan</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail Lahan</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('lahan.edit', ['lahan' => $lahan['id']]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                @foreach ($lahan as $key => $value)
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