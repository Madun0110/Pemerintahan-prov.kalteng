<?php
include 'koneksi.php';

$query = "SELECT * FROM berita";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/berita.css">
</head>
<body>
    <h1>Daftar Berita</h1>
    <a href="tambah.php">Tambah Berita</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
