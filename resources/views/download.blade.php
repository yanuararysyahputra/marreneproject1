<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <style>
          #data {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }

          #data td, #data th {
            border: 1px solid #ddd;
            padding: 8px;
          }

          #data tr:nth-child(even){background-color: #f2f2f2;}

          #data tr:hover {background-color: #ddd;}

          #data th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FFD700;
            color: black;
}
</style>
</head>
<body>
    <h1 class="text-center">DAFTAR TAMU HADIR</h1><br><br>

                <table id="data" class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">No Telpon</th>
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
                        <td>{{$item['notelp']}}</td>
                        <td>{{$item->created_at->format('d-M-Y')}}</td>
                        <td>{{$item->created_at->format('h:i A')}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
</body>
</html>