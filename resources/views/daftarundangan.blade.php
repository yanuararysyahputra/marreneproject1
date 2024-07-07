<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('baackend/dist/img/AdminLTELogoSide.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Daftar Undangan</title>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('baackend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/summernote/summernote-bs4.min.css')}}">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('baackend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="250" width="350">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
      <img src="{{ asset('baackend/dist/img/Marrene.png')}}" alt="AdminLTE Logo" height="80" width="220">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
    <div class="content-header">
        <section class="content">
          <div class="container-fluid">
            <div class="row pt-5">
              <div class="col-md-5 mx-auto">
                <h1 class="mb-3 text-center">Daftar Undangan</h1>
              </div>
            </div>
          </div>
          <div class="container-fluid mx-auto" style="width: 1000px">
          <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modaltamu">Undang Tamu <i class="mx-1 fas fa-user-plus"></i></a>
                    <!--Modal Data Pengantin-->
                    <div class="modal fade" id="modaltamu">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Data Tamu Undangan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_dtamu') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 justify-content-center">
                                    <div class="col-5 pt-2">
                                        <label >Nama Tamu</label>
                                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu">
                                    </div>
                                    <div class="col-5 pt-2">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" id="alamat_tamu" name="alamat_tamu" placeholder="Alamat Tamu">
                                    </div>
                                    <div class="col-5 pt-2">
                                      <label>Kategori Tamu</label>
                                    <select type="text" class="form-control" id="type_tamu" name="type_tamu">
                                      <option>KATEGORI TAMU</option>
                                      <option>TAMU ORANG TUA PRIA</option>
                                      <option>TAMU ORANG TUA WANITA</option>
                                      <option>TAMU MEMPELAI PRIA</option>
                                      <option>TAMU MEMPELAI WANITA</option>
                                      <option>TAMU VIP</option>
                                    </select>
                                    </div>
                                    <div class="col-5 pt-2">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" id="jab_tamu" name="jab_tamu" placeholder="Tulis Jabatan Jika Ada">
                                    </div>
                                    <div class="col-5 pt-2">
                                        <label>No Telp</label>
                                        <input type="text" class="form-control" id="notelp_tamu" name="notelp_tamu" value="62">
                                    </div>
                                </div>
                                <br>
                                <p>Note :
                                  <br>1. No Telp Wajib Diawali 62. Contoh-> (6289589897845).
                                  <br>2. Isi Jabatan Jika Tamu VIP Memiliki Jabatan.
                                  </p>    
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>          
                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Bagikan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($dtamu as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama_tamu']}}</td>
                        <td>{{$item['alamat_tamu']}}</td>
                        <td>{{$item['type_tamu']}}</td>
                        <td>{{$item['notelp_tamu']}}</td>
                        <td><a href="https://wa.me/{{$item->notelp_tamu}}?text=*Yth. Bapak/Ibu {{$item->nama_tamu}}*%0aTanpa mengurangi rasa hormat,%0aperkenankan kami mengundang%0aBapak/Ibu/Saudara/i,%0ateman sekaligus sahabat, untuk%0amenghadiri acara pernikahan kami%3a%0a{{$pengantin->nama_pria}} dan {{$pengantin->nama_wanita}}%0a%0aTanggal dan Tempat %3a%0aAkad%20%3a {{$pengantin->akad}}%0aResepsi %3a {{$pengantin->akad}} %0aTempat %3a {{$pengantin->tempat}}%0a%0aBerikut adalah Link Buku Tamu%0aDigital Kami, silahkan Klik%0aLink dibawah ini%3a%0a{{url('/undanganku')}}/{{$pengantin->slug}}/{{$item->nama_tamu}}%0a%0aJangan lupa ya.. untuk menunjukkan%0a*QR-Code* yang terlihat setelah%0amengklik link diatas sebagai%0apendataan daftar hadir undangan%0a{{$pengantin->nama_pria}} dan {{$pengantin->nama_wanita}}%0aSilahkan tunjukkan *QR-Code* kepada%0a*WO Marrene Official* yang sedang%0abertugas.%0a%0aTerukir kesan yang dalam dihati%0akami apabila Bapak/Ibu/Saudara/i%0aberkenan hadir untuk mengiringi, dan%0amemberikan doa restu kepada kami.%0aAtas perhatiannya kami ucapkan Terima Kasih
" class="btn btn-success">Bagikan <i class="mx-1 fab fa-whatsapp"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
        </section>
    </div>        
  </div>        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>  
<!-- ./wrapper -->
</body>
          <!-- INI JQUERY TEMA ADMIN LTE -->
    <script src="{{ asset('baackend/plugins/jquery/jquery.min.js')}}"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="{{ asset('baackend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge('uibutton', $.ui.button)
          </script>
          <!-- Bootstrap 4 -->
          <script src="{{ asset('baackend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <!-- ChartJS -->
          <script src="{{ asset('baackend/plugins/chart.js/Chart.min.js')}}"></script>
          <!-- Sparkline -->
          <script src="{{ asset('baackend/plugins/sparklines/sparkline.js')}}"></script>
          <!-- JQVMap -->
          <script src="{{ asset('baackend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
          <script src="{{ asset('baackend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
          <!-- jQuery Knob Chart -->
          <script src="{{ asset('baackend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
          <!-- daterangepicker -->
          <script src="{{ asset('baackend/plugins/moment/moment.min.js')}}"></script>
          <script src="{{ asset('baackend/plugins/daterangepicker/daterangepicker.js')}}"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
          <!-- Summernote -->
          <script src="{{ asset('baackend/plugins/summernote/summernote-bs4.min.js')}}"></script>
          <!-- overlayScrollbars -->
          <script src="{{ asset('baackend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
          <!-- AdminLTE App -->
          <script src="{{ asset('baackend/dist/js/adminlte.js')}}"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="{{ asset('baackend/dist/js/demo.js')}}"></script>
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="{{ asset('baackend/dist/js/pages/dashboard.js')}}"></script>
</html>