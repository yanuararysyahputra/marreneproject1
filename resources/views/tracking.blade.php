<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('baackend/dist/img/AdminLTELogoSide.png') }}" type="image/gif" />
  <meta http-equiv="refresh" content="0" > 
  <title>Tracking Tamu</title>
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
    <body>
    <img src="{{ asset('baackend/dist/img/Marrene.png') }}" alt="AdminLTE Logo"
                height="175" width="320">
        <style type="text/css">
          body{
            margin: 0;
            padding: 0;
            background-color: #3498d8;
            text-align: center;
          }
            .container{
              position: relative;
              top:80px;
              height:130px;
            }
            h1 { 
              font-family: sans;
              font-weight: bold;
              color: #2c3e50;
            }
            h2{
              position: relative;
              color: #2c3e50;
              font-weight: bold;
              top:200px;
            }
            h4{
              color: #34495e;
              
            }
        </style>
          <div class="container">
            <div class="wrapper">
            <h4>Selamat Datang, Bpk/Ibu</h4>
            <h1>{{$data->nama}}</h1>
            <h4>{{$data->jabatan}}</h4>
            </div>
          </div>
      
            <h2>{{$data->type}}</h2>
      
    </body>
</html>