<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Siloam Hospitals</title>
    <link rel="icon" type="image/x-icon" href="logo1.png">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar-section">
        <div class="nav-header">
            <a href="index.html">
                <img class="navbar-logo" src="Siloam_Hospitals.svg" alt="Logo RS" width="170" height="50"/>
            </a>
            <!-- Burger button -->
            <button id="btn-hamburger">
                <img id="hamburger-icon" src="hamburger.svg" alt="tombol hamburger" width="20" height="20"/>
                <img id="exit-icon" src="exit-icon.svg" alt="tombol tutup" width="20" height="20" style="display: none;"/>
            </button>
        </div>

        <menu class="navbar-list">
            <li class="navbar-item">
                <a href="index.html"><p>Beranda</p></a>
            </li>
            <li class="navbar-item">
                <a href="layanan.php"><p>Layanan</p></a>
            </li>
            <li class="navbar-item">
                <a href="tentang_saya.html"><p>Tentang Saya</p></a>
            </li>
        </menu>
    </nav>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $keterangan = isset($_POST['kegiatan']) ? htmlspecialchars($_POST['kegiatan']) : '';
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $nomor = isset($_POST['nomor']) ? htmlspecialchars($_POST['nomor']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $tanggal = isset($_POST['tanggal']) ? htmlspecialchars($_POST['tanggal']) : '';
    $nik = isset($_POST['nik']) ? htmlspecialchars($_POST['nik']) : '';
    $agama = isset($_POST['agama']) ? htmlspecialchars($_POST['agama']) : '';
    $tempat = isset($_POST['tempat']) ? htmlspecialchars($_POST['tempat']) : '';
    $tangla = isset($_POST['tangla']) ? htmlspecialchars($_POST['tangla']) : '';
    $alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '';
    $rt = isset($_POST['rt']) ? htmlspecialchars($_POST['rt']) : '';
    $rw = isset($_POST['rw']) ? htmlspecialchars($_POST['rw']) : '';
    $provinsi = isset($_POST['provinsi']) ? htmlspecialchars($_POST['provinsi']) : '';
    $kota = isset($_POST['kota']) ? htmlspecialchars($_POST['kota']) : '';
    $kecamatan = isset($_POST['kecamatan']) ? htmlspecialchars($_POST['kecamatan']) : '';
    $kelurahan = isset($_POST['kelurahan']) ? htmlspecialchars($_POST['kelurahan']) : '';
    $pekerjaan = isset($_POST['pekerjaan']) ? htmlspecialchars($_POST['pekerjaan']) : '';

    echo "<h2>Hasil Input Form</h2>";
    echo "<strong>Nama:</strong> $nama<br>";
    echo "<strong>Layanan:</strong> $keterangan<br>";
    echo "<strong>No. HP:</strong> $nomor<br>";
    echo "<strong>Email:</strong> $email<br>";
    echo "<strong>Tanggal Pemeriksaan:</strong> $tanggal<br>";
    echo "<strong>NIK:</strong> $nik<br>";
    echo "<strong>Agama:</strong> $agama<br>";
    echo "<strong>Tempat Lahir:</strong> $tempat<br>";
    echo "<strong>Tanggal Lahir:</strong> $tangla<br>";
    echo "<strong>Alamat:</strong> " . nl2br($alamat) . "<br>";
    echo "<strong>RT:</strong> $rt<br>";
    echo "<strong>RW:</strong> $rw<br>";
    echo "<strong>Provinsi:</strong> $provinsi<br>";
    echo "<strong>Kota:</strong> $kota<br>";
    echo "<strong>Kecamatan:</strong> $kecamatan<br>";
    echo "<strong>Kelurahan:</strong> $kelurahan<br>";
    echo "<strong>Pekerjaan:</strong> $pekerjaan<br>";
} else {
    echo "Tidak ada Data";
}
?>


    <footer class="footer-section">
        <div class="footer-container">
            <div class="footer-info">
                <h3>Kontak Kami</h3>
                <p><strong>Alamat:</strong> Jl. Raya No. 123, Balikpapan, Kalimantan</p>
                <p><strong>Telepon:</strong> (0542) 123456</p>
                <p><strong>Email:</strong> info@siloamhospitals.com</p>
                <p><strong>Jam Operasional:</strong> 24 Jam</p>
            </div>
            <div class="footer-links">
                <h3>Ikuti Kami</h3>
                <ul>
                    <li><a href="https://www.facebook.com/siloamhospitalsgroup" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/siloamhospitals/" target="_blank">Instagram</a></li>
                    <li><a href="https://www.youtube.com/channel/UCgKxmZNgM7fi-E6Yidr-Q6g" target="_blank">Youtube</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Siloam Hospitals. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>

