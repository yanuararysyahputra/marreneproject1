<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('baackend/dist/img/AdminLTELogoSide.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <title>Scan Qr </title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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

        <!-- Scanner Frame -->
        <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">                        
                    @include('sweetalert::alert')
                        <div class="row pt-2">
                        <div class="col-md-5 mx-auto">
                            <h5 class=" text-center">Scan QR Disini</h5>
                            <div id="reader" width="400px"></div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <div id="result"></div>
                            <a href="" id="input" class="btn btn-outline-success">Submit</a>
                            {{-- <form action="{{ url('add-tamu') }}" method="post">
                                <input type="hidden" id="input">
                                <button type="submit" class="btn btn-outline-success" >Submit</button>
                            </form> --}}
                        </div>
                            <!-- ./col -->
                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                            <!-- /.control-sidebar -->
                        </div>
                        <!-- ./wrapper -->

                        <table style="width:75%;" class="table table-striped border mt-4 display" align=center>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Kehadiran</th>
                        <th scope="col">Jam</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['alamat']}}</td>
                        <td>{{$item['type']}}</td>
                        <td>{{$item->created_at->format('d-M-Y')}}</td>
                        <td>{{$item->created_at->format('h:i A')}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="justify-content-center" align=center>
                {{$data->links()}}
                </div>
</body>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

        <script>
            function onScanSuccess(decodedText, decodedResult) {
                // handle the scanned code as you like, for example:
                console.log(`Code matched = ${decodedText}`, decodedResult);
                document.getElementById('result').innerText = decodedText;
                document.getElementById('input').href = decodedText;
            }

            function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader", {
                    fps: 10,
                    qrbox: {
                        width: 250,
                        height: 250
                    }
                },
                /* verbose= */
                false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        </script>

        {{-- <script>
            function onScanSuccess(decodedText, decodedResult) {
                // handle the scanned code as you like, for example:
                console.log(`Code matched = ${decodedText}`, decodedResult);
            }

            function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                //console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader", {
                    fps: 10,
                    qrbox: {
                        width: 250,
                        height: 250
                    }
                },
                /* verbose= */
                false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        </script> --}}

<!-- jQuery -->
<script src="{{ asset('baackend/plugins/jquery/jquery.min.js') }}"></script>
                        <!-- jQuery UI 1.11.4 -->
                        <script src="{{ asset('baackend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
                        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                        <script>
                            $.widget.bridge('uibutton', $.ui.button)
                        </script>
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
</html>