<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "Madunganteng";
    $valid_password = "Madunaja123";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        header("Location: Dasboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="container-2">
            <form class="box" action="login.php" method="post">
                <img class="img-in" src="img/20240919123101_Logo Pemprov Kalteng.jpg" alt="Logo Pemprov Kalteng">
                <h1>Login Disini</h1>
                <?php
                if (isset($error)) {
                    echo "<p style='color: red;'>$error</p>";
                }
                ?>
                <input type="text" name="username" placeholder="Username" required>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </span>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
