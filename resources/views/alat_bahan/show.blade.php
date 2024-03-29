@extends('layouts.app')

@section('title', 'Data Detail Lahan')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Detail, Bahan, atau Obat</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('alatb.index')}}">Kelola Alat Bahan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Detail, Bahan, atau Obat</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Detail, Bahan, atau Obat</h6>
            <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('alatb.edit', ['alatb' => $id]) }}">Edit Data <i
                class="fas fa-edit"></i></a>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                
                  <tr>
                    <th>ID</th>
                    <td>: {{$id}}</td>
                  </tr>
                  
                  <tr>
                    <th>Kategori</th>
                    <td>: {{$ba}}</td>
                  </tr>

                  <tr>
                    <th>Jenis</th>
                    <td>: {{$jenis}}</td>
                  </tr>

                  <tr>
                    <th>Bahan / Alat</th>
                    <td>: {{$kategori}}</td>
                  </tr>

                  <tr>
                    <th>Stok</th>
                    <td>: {{$stok}}</td>
                  </tr>

                  <tr>
                    <th>Satuan</td>
                    <td>: {{$satuan}}</td> 
                  </tr>

                  <tr>
                    <th>Harga</th>
                    <td>: @currency($harga)</td>
                  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection