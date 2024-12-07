<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/pengumuman.css')}}">
     
</head>
<body>
<form action="/update/{{$pengumuman->id}}" method="POST">
        @csrf
        <label for="judulTambah">Judul:</label>
        <input type="text" id="judulTambah" value="{{$pengumuman->judul}}" name="judul"><br>
        <label for="isiTambah">Isi:</label>
        <textarea id="isiTambah" name="isi">{{$pengumuman->isi}}</textarea><br>
        <label for="tanggalTambah">Tanggal:</label>
        <input type="date" id="tanggalTambah" value="{{$pengumuman->tanggal}}" name="tanggal"><br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>