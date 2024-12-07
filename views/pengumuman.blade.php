<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Pengumuman</title>
    <link rel="stylesheet" href="{{asset('/pengumuman.css')}}">
</head>
<body>
    <h1>Pengumuman</h1>
    <!-- Form Tambah -->
<div id="formTambah">
    <h3>Tambah Data</h3>
    <form action="/store" method="POST">
        @csrf
        <label for="judulTambah">Judul:</label>
        <input type="text" id="judulTambah" name="judul"><br>
        <label for="isiTambah">Isi:</label>
        <textarea id="isiTambah" name="isi"></textarea><br>
        <label for="tanggalTambah">Tanggal:</label>
        <input type="date" id="tanggalTambah" name="tanggal"><br>
        <button type="submit">Tambah</button>
    </form>
</div>
    <h2>Daftar Pengumuman</h2>
    <table border="1">
    <button >
        <a href="/cetak">Cetak</a>
    </button>

    <tbody>
        @foreach($pengumuman as $pg)
        <tr>
            <td>{{ $pg->judul }}</td>
            <td>{{ $pg->isi }}</td>
            <td>{{ $pg->tanggal }}</td>
            <td>
                <button>
                <a href="/edit/{{$pg->id}}">Edit</a>
                </button>
                <a href="/delete/{{$pg->id}}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
