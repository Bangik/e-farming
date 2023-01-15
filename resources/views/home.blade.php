@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>

    <div class="row mb-3">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Petani</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$petani}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Panen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">123</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-chart-line fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Alat Bahan</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$bahanalat}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-tractor fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Obat Hama</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$obathama}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-prescription-bottle-alt fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Panen</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Stok</h6>
          </div>
          <div class="card-body">
            @foreach ($stoks as $stok)
            <div class="mb-3">
              <div class="small text-gray-500">{{$stok->nama}}
                <div class="small float-right"><b>{{$stok->stok}} of 100 {{$stok->satuan}}</b></div>
              </div>
              @if ($stok->stok < 3)
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: {{$stok->stok}}%" aria-valuenow="{{$stok->stok}}"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              @elseif ($stok->stok <= 5)
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: {{$stok->stok}}%" aria-valuenow="{{$stok->stok}}"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              @else
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: {{$stok->stok}}%" aria-valuenow="{{$stok->stok}}"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Invoice Example -->
      <div class="col-xl-8 col-lg-7 mb-4">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Lahan</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="{{route('lahan.index')}}">Selengkapnya <i
                class="fas fa-chevron-right"></i></a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nama Lahan</th>
                  <th>Pemilik</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lahans as $lahan)
                <tr>
                  <td>{{$lahan->id}}</td>
                  <td>{{$lahan->nama}}</td>
                  <td>{{$lahan->user->nama}}</td>
                  <td>{{$lahan->status}}</td>
                  <td><a href="{{route('lahan.show', ['lahan' => $lahan])}}" class="btn btn-sm btn-primary" title="Detail"><i class="fas fa-eye"></i</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
      <!-- Message From Customer-->
      <div class="col-xl-4 col-lg-5 ">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Paket Tanam</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="{{route('paket-tanam.index')}}">Selengkapnya <i
                class="fas fa-chevron-right"></i></a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($paket_tanams as $paket_tanam)
                <tr>
                  <td>{{$paket_tanam->id}}</td>
                  <td>{{$paket_tanam->nama_paket}}</td>
                  <td><a href="{{route('paket-tanam.show', ['paket_tanam' => $paket_tanam])}}" class="btn btn-sm btn-primary" title="Detail"><i class="fas fa-eye"></i></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha512-mf78KukU/a8rjr7aBRvCa2Vwg/q0tUjJhLtcK53PHEbFwCEqQ5durlzvVTgQgKpv+fyNMT6ZQT1Aq6tpNqf1mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/chart-area-demo.js') }}"></script>
@endsection