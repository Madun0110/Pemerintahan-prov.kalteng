<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM berita WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header('Location: berita.php');
} else {
    echo 'Gagal menghapus data: ' . mysqli_error($conn);
}
?>
