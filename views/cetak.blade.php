<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Pengumuman</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Pengumuman</h3>
  <table class="table-data">
    <thead>
      <tr>
        
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>tanggal</th>   
      </tr>
    </thead>
    @foreach($pengumuman as $k)
                <tbody>
               <td>{{$k->judul}}</td>
               <td>{{$k->isi}}</td>
               <td>{{$k->tanggal}}</td>
                </tbody>
               @endforeach
</body>

</html>
