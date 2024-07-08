<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('baackend/dist/img/AdminLTELogoSide.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <title>Data Pengantin</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
    <!--  picker -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('baackend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('baackend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="250" width="350">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Bagian Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fas fa-user"> {{auth()->user()->name}}</i>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset('baackend/dist/img/Marrene.png') }}" alt="AdminLTE Logo"
                height="80" width="220">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                    
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-header">MASTER</li>
               <li class="nav-item">
                            <a href="{{ route('home')}}" class="nav-link">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p>
                                Beranda
                                <span class="badge badge-info right"></span>
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('datapengantin') }}" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Input Data Pengantin
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftarundangan') }}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Daftar Undangan
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('scan') }}" class="nav-link">
                                <i class="nav-icon fas fa-qrcode"></i>
                                <p>
                                    Scan QR Code
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('scanmobile') }}" class="nav-link">
                                <i class="nav-icon fas fa-qrcode"></i>
                                <p>
                                    Scan Via Mobile
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftarhadir') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Daftar Hadir Tamu
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item" style="display: {{ Auth::user()->role == 'Admin'?'': 'none' }}">
                            <a href="{{ route('penyewa') }}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Penyewa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tracking')}}" class="nav-link">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>
                                Tracking Tamu
                                <span class="badge badge-info right"></span>
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.row -->
                    </div>
                    <h4>Data Pengantin</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalpengantin">Data Pengantin <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Pengantin-->
                    <div class="modal fade" id="modalpengantin">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">DATA PENGANTIN & ACARA</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 justify-content-center">
                                    <div class="col-4">
                                    <label>Pengantin Pria</label>
                                        <input type="text" class="form-control" id="nama_pria" name="nama_pria" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="col-4">
                                    <label>Pengantin Wanita</label>
                                        <input type="text" class="form-control" id="nama_wanita" name="nama_wanita" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <label>Akad</label>
                                        <div class="input-group date" id="akad" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#akad" id="akad" name="akad" placeholder="Akad">
                                            <div class="input-group-append" data-target="#akad" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col-4">
                                    <label>Resepsi</label>
                                        <div class="input-group date" id="resepsi" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#resepsi" id="resepsi" name="resepsi" placeholder="Resepsi">
                                            <div class="input-group-append" data-target="#resepsi" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <label>Waktu Akad</label>
                                        <input type="time" class="form-control" id="waktu" name="waktu">
                                    </div>
                                    <div class="col-4">
                                    <label>Waktu Resepsi</label>
                                        <input type="time" class="form-control" id="wresepsi" name="wresepsi">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                <div class="col-4">
                                    <label>Tempat</label>
                                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Lokasi Acara">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="image" name="image">
                                        <label for="image"></label>
                                    </div>
                                </div>
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Pengantin -->

                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pengantin Pria</th>
                        <th scope="col" width="150px">Pengantin Wanita</th>
                        <th scope="col">Akad</th>
                        <th scope="col">Resepsi</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama_pria']}}</td>
                        <td>{{$item['nama_wanita']}}</td>
                        <td>{{$item['akad']}}</td>
                        <td>{{$item['resepsi']}}</td>
                        <td>{{$item['waktu']}}</td>
                        <td>{{$item['tempat']}}</td>
                        <td>
                            <form action="/datapengantin/destroy/{{$item->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp; Hapus</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">Background</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <td><img src="{{ asset('storage/' . $item->image) }}" width="300px" height="200px" alt=""></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Story -->

                    </div>    
                <!-- /.container-fluid -->
                </div>
                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                          <!-- /.control-sidebar -->
                        </div>
                        
                        <!-- ./wrapper -->

                        <!-- jQuery -->
                        <script src="{{ asset('baackend/plugins/jquery/jquery.min.js') }}"></script>
                        <!-- jQuery UI 1.11.4 -->
                        <script src="{{ asset('baackend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
                        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                        <script>
                            $.widget.bridge('uibutton', $.ui.button)
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                        <!-- Bootstrap 4 -->
                        <script src="{{ asset('baackend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <!-- ChartJS -->
                        <script src="{{ asset('baackend/plugins/chart.js/Chart.min.js') }}"></script>
                        <!-- Sparkline -->
                        <script src="{{ asset('baackend/plugins/sparklines/sparkline.js') }}"></script>
                        <!-- JQVMap -->
                        <script src="{{ asset('baackend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
                        <script src="{{ asset('baackend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
                        <!-- jQuery Knob Chart -->
                        <script src="{{ asset('baackend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
                        <!-- daterangepicker -->
                        <script src="{{ asset('baackend/plugins/moment/moment.min.js') }}"></script>
                        <script src="{{ asset('baackend/plugins/daterangepicker/daterangepicker.js') }}"></script>
                        <!-- Tempusdominus Bootstrap 4 -->
                        <script src="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
                        <!-- Summernote -->
                        <script src="{{ asset('baackend/plugins/summernote/summernote-bs4.min.js') }}"></script>
                        <!-- overlayScrollbars -->
                        <script src="{{ asset('baackend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
                        <!-- AdminLTE App -->
                        <script src="{{ asset('baackend/dist/js/adminlte.js') }}"></script>
                        <!-- AdminLTE for demo purposes -->
                        <script src="{{ asset('baackend/dist/js/demo.js') }}"></script>
                        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                        <script src="{{ asset('baackend/dist/js/pages/dashboard.js') }}"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                        <script>
                            $(function(){
                                $('#akad').datetimepicker({
                                    format: 'DD/MM/YYYY'
                                });
                                $('#resepsi').datetimepicker({
                                    format: 'DD/MM/YYYY'
                                });
                            })
                        </script>
</body>

</html>
