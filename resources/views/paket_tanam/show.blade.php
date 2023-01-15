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
            @admin
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('paket-tanam.edit', ['paket_tanam' => $paket_tanams['id']]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
            @endadmin
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                @foreach ($paket_tanams as $key => $value)
                  @if($key == 'updated_at' || $key == 'created_at')
                    @break
                  @endif
                  <tr>
                    <th>{{ ucwords(str_replace('_', ' ', $key)) }}</th>
                    <td>: {{ $value }}</td>
                  </tr>
                @endforeach
                <tr>
                  <th>Alat dan Bahan yang Digunakan</th>
                  <td> :
                    <ul>
                      @foreach ($alat_bahans as $alat_bahan)
                        <li>{{ $alat_bahan->nama }}</li>
                      @endforeach
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection