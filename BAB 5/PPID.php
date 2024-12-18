<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/PPID.css">
</head>
<body>
<div class="navbar">
  <a href="Dasboard.php">Home</a>
  <div class="subnav">
    <button class="subnavbtn">PPID <i class="fas fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Informasi Publik</a>
      <a href="#LaporanPPID">Laporan Layanan PPID</a>
      <a href="#Anggaran">Transparasi Anggaran Daerah</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Standar Layanan <i class="fas fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#SOP">Standar Oprasional Prosedur</a>
      <a href="#MP">Maklumat PPID</a>
      <a href="#JL">Jadwal Layanan</a>
      <a href="#SBPI">Standar Biaya Perolehan Informasi</a>
    </div>
  </div>
  <a href="index.html">Logout</a>
</div>
<div class="content-container">
  <h1>Pejabat Pengelola Informasi dan Dokumentasi (PPID)</h1>
  <p>PPID bertugas untuk mengelola dan menyampaikan dokumen yang dimiliki oleh badan publik. PPID memiliki beberapa tugas dan fungsi penting yang berkaitan dengan pengelolaan informasi publik, di antaranya adalah sebagai berikut:</p>
  <ul>
    <li>
      <strong>Mengumpulkan, menyimpan, dan mendokumentasikan informasi:</strong> 
      PPID bertanggung jawab untuk mengelola seluruh informasi yang dimiliki oleh badan publik.
      <span class="learn-more" onclick="handleLearnMore('Pengumpulan Informasi')">Pelajari lebih lanjut</span>
    </li>
    <li>
      <strong>Menyediakan dan memberikan pelayanan informasi:</strong> 
      PPID memberikan akses dan layanan informasi kepada masyarakat sesuai dengan aturan yang berlaku.
      <span class="learn-more" onclick="handleLearnMore('Pelayanan Informasi')">Pelajari lebih lanjut</span>
    </li>
    <li>
      <strong>Mengklasifikasikan informasi:</strong> 
      Informasi dikategorikan berdasarkan sifatnya apakah terbuka atau dikecualikan dari akses publik.
      <span class="learn-more" onclick="handleLearnMore('Klasifikasi Informasi')">Pelajari lebih lanjut</span>
    </li>
    <li>
      <strong>Menyusun dan melaksanakan kebijakan layanan informasi publik:</strong> 
      PPID merancang kebijakan terkait pengelolaan informasi untuk memastikan informasi publik dapat diakses dengan mudah.
      <span class="learn-more" onclick="handleLearnMore('Kebijakan Layanan')">Pelajari lebih lanjut</span>
    </li>
    <li>
      <strong>Melakukan verifikasi dokumen informasi publik:</strong> 
      Sebelum dipublikasikan, informasi diverifikasi untuk memastikan keakuratannya.
      <span class="learn-more" onclick="handleLearnMore('Verifikasi Dokumen')">Pelajari lebih lanjut</span>
    </li>
    <li>
      <strong>Menetapkan apakah informasi publik dapat diakses publik atau tidak:</strong> 
      PPID menentukan apakah informasi yang diminta oleh masyarakat termasuk kategori yang dapat diakses atau perlu dikecualikan.
      <span class="learn-more" onclick="handleLearnMore('Akses Informasi')">Pelajari lebih lanjut</span>
    </li>
  </ul>
</div>

<script>
  async function handleLearnMore(topic) {
    const data = await fetchData(topic);
    alert(`Informasi lebih lanjut tentang: ${topic}\n\n${data}`);
    saveToLocalStorage(topic);
  }
  function fetchData(topic) {
    return new Promise((resolve) => {
      setTimeout(() => {
        const info = {
          'Pengumpulan Informasi': 'Pengumpulan informasi melibatkan pengumpulan data dari berbagai sumber.',
          'Pelayanan Informasi': 'Pelayanan informasi mencakup penyediaan akses kepada publik untuk informasi yang dibutuhkan.',
          'Klasifikasi Informasi': 'Klasifikasi informasi penting untuk memastikan privasi dan keamanan data.',
          'Kebijakan Layanan': 'Kebijakan layanan harus jelas dan mudah dipahami oleh publik.',
          'Verifikasi Dokumen': 'Verifikasi dokumen dilakukan untuk memastikan keakuratan dan keaslian informasi.',
          'Akses Informasi': 'Akses informasi publik harus dijamin oleh badan publik sesuai dengan peraturan yang berlaku.',
        };
        resolve(info[topic] || 'Data tidak ditemukan.');
      }, 500);
    });
  }
  function saveToLocalStorage(topic) {
    const learnedTopics = JSON.parse(localStorage.getItem('learnedTopics')) || [];
    if (!learnedTopics.includes(topic)) {
      learnedTopics.push(topic);
      localStorage.setItem('learnedTopics', JSON.stringify(learnedTopics));
      console.log(`Topik "${topic}" telah disimpan ke local storage.`);
    }
  }
</script>
</body>
</html>
