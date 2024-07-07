<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data->nama_pria}} & {{ $data->nama_wanita}} </title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('asetundangan/css/style.css')}}">

    </head>
  <body>
    <style type="text/css">
    .hero::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('storage/' . $data->image) }}');
        background-size: cover;
        background-position: center;
        z-index: -1;
    }

    .ver{
        width:1px;
        height:30px;
        background-color:white;
    }

    </style>

    <!-- Halaman Awal -->
    <section id="hero" class="hero w-100 h-100 p-2 mx-auto text-center d-flex justify-content-center align-items-center text-white">  
                <main>
                    <h4>To Mr/Mrs, {{$nama}} At {{$alamat}}</h4>
                    <!--INI QR CODE -->
                    <div class="card mx-auto mb-3" >
                        <div class="card-body ">
                        <img src="{{ asset('baackend/dist/img/Marrene.png') }}" height="80" width="250" alt="Marrene Logo">
                        {{ $qrcode}}
                        </div>
                    </div>
                    <h5>The Wedding Of</h5>
                    <h1>{{ $data->nama_pria}}<br>&<br>{{ $data->nama_wanita}}</h1>
                    <h5>Save The Date</h5>
                    <div class="glass">
                    <table style="margin-left:auto;margin-right:auto" width="350px">
                        <tr>
                            <th width="200px"><h5>Akad Nikah</h5></th>
                            <th><div class="ver"></div></th>
                            <th width="200px"><h5>Resepsi</h5></th>
                        </tr>
                        <tr>
                            <td><i class="nav-icon fas fa-calendar"></i>  {{$data->akad}}</td>
                            <td><div class="ver"></div></td>
                            <td>&nbsp;&nbsp;<i class="nav-icon fas fa-calendar"></i>  {{$data->resepsi}}</td>
                        </tr>
                        <tr>
                            <td><i class="nav-icon fas fa-clock"></i>  {{$data->waktu}}</td>
                            <td><div class="ver"></div></td>
                            <td>&nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-clock"></i>  {{$data->wresepsi}}</td>
                        </tr>
                    </table>
                    <h5 class="mt-2"><i class="fas fa-map-marker-alt"></i>  Place : {{$data->tempat}}</h5>
                    </div>
                </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

</body>
</html>
