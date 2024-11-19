<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Selamat Datang</title>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang di Kalteng</h1>
        <p>Provinsi Kalimantan Tengah: Media Terdepan dalam Publikasi dan Dokumentasi</p>
        <button class="enter-btn"  onclick="goToDasboard()">Masuk ke Situs</button>
        <br>
        <button class="register-btn" onclick="toggleRegisterForm()">Register</button>

        <div class="register-container" id="registerForm">
            <h2>Form Registrasi</h2>
            <form id="registration" action="register.php" method="POST">
                <input type="text" name="name" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Daftar">
            </form>
        </div>

        <div class="account-check">
            <p>Sudah memiliki akun? <a href="login.php">Login Akun</a></p> 
        </div>
    </div>

    <script>
        let isRegistered = false; 

        function toggleRegisterForm() {
            const registerForm = document.getElementById('registerForm');
            if (registerForm.style.display === 'none' || registerForm.style.display === '') {
                registerForm.style.display = 'block';
            } else {
                registerForm.style.display = 'none';
            }
        }

        function handleRegistration(event) {
            event.preventDefault(); 
            isRegistered = true; 
            alert("Registrasi Berhasil!"); 
            document.getElementById('registration').reset(); 
            document.getElementById('registerForm').style.display = 'none';
        }

        function goToDasboard() {
            // Arahkan pengguna langsung ke Dasboard.php
            window.location.href = "Dasboard.php";
        }
    </script>
</body>
</html>
