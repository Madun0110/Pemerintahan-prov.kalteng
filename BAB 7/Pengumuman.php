<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/pengumuman.css">
</head>
<body>
<div class="navbar">
  <a href="Dasboard.html">Home</a>
  <div class="subnav">
    <button class="subnavbtn">Pengumuman <i class="fas fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Kab/Kota</a>
      <a href="#team">Wilayah</a>
      <a href="#careers">Pemerintahan</a>
    </div>
  </div>
  <a href="index.html">Logout</a>
</div>
<div class="container">
  <h1>Pengumuman Penting!</h1>
  <p>Rapat Koordinasi akan diadakan besok pukul 10:00 AM di Aula Provinsi Kalimantan Tengah. Harap seluruh instansi yang terkait untuk menghadiri acara ini.</p>
  <button class="btn" onclick="showAlert()">Tampilkan Pengumuman</button>
</div>

<div class="form-group">
  <label for="name">Masukkan Nama Anda:</label>
  <input type="text" id="name" class="form-control" placeholder="Nama Anda" onchange="handleInputChange()">
  <p id="output"></p>
</div>
<script>
  // Menambahkan Alert Box
  function showAlert() {
    alert("Pengumuman: Rapat Koordinasi akan diadakan besok pukul 10:00 AM.");
  }
  //Menambahkan Onchange Event
  function handleInputChange() {
    var input = document.getElementById("name").value;
    document.getElementById("output").innerHTML = "Selamat datang, " + input + "!";
  }
</script>
</body>
</html>
