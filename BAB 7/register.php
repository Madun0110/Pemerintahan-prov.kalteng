<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user_registration';

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Validasi email unik
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email sudah digunakan. Gunakan email lain.";
    } else {
        // Simpan ke database
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registrasi berhasil!";
        } else {
            echo "Gagal melakukan registrasi. Coba lagi.";
        }
    }
    $stmt->close();
}

$conn->close();
?>
