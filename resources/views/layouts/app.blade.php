<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ config('app.name', 'Dashboard') }} - @yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar START -->
    @include('layouts.part.side_nav')
    <!-- Sidebar END -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.part.nav')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          
          @yield('content')

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
          aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Keluar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah anda yakin untuk keluar ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Keluar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer START -->
      @include('layouts.part.footer')
      <!-- Footer END -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('#datatableid').DataTable({
        order: [[0, 'desc']],
      });
  });
  </script>
</body>

</html>