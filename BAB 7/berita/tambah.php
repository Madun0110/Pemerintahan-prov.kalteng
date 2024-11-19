<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO berita (judul, konten, tanggal) VALUES ('$judul', '$konten', '$tanggal')";
    if (mysqli_query($conn, $query)) {
        header('Location: berita.php');
    } else {
        echo 'Gagal menambahkan data: ' . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
</head>
<body>
    <h1>Tambah Berita</h1>
    <form action="" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br>
        <label>Konten:</label><br>
        <textarea name="konten" required></textarea><br>
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
