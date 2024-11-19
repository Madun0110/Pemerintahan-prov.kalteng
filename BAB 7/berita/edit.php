<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM berita WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE berita SET judul = '$judul', konten = '$konten', tanggal = '$tanggal' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header('Location: berita.php');
    } else {
        echo 'Gagal memperbarui data: ' . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
</head>
<body>
    <h1>Edit Berita</h1>
    <form action="" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= $data['judul']; ?>" required><br>
        <label>Konten:</label><br>
        <textarea name="konten" required><?= $data['konten']; ?></textarea><br>
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
