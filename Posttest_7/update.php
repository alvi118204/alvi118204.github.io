<?php
require 'koneksi.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM datas WHERE id_pengguna = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $layanan = $_POST['layanan'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $jenkel = $_POST['jenkel'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $updateQuery = "UPDATE datas SET 
        layanan='$layanan', 
        nama='$nama', 
        no_hp='$no_hp', 
        tgl_periksa='$tgl_periksa', 
        jenkel='$jenkel', 
        tgl_lhr='$tgl_lhr', 
        alamat='$alamat', 
        pekerjaan='$pekerjaan' 
        WHERE id_pengguna='$id'";

    if (mysqli_query($conn, $updateQuery)) {
        header("Location: lihat.php"); 
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data - Siloam Hospitals</title>
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
            <li class="navbar-item">
                <a href="lihat.php"><p>Data</p></a>
            </li>
        </menu>
    </nav>

    <table class="table-header" align="center">
        <tr>
            <td>
                <h2>Update Data Pengguna</h2>
                <p>Silakan lengkapi dokumen dan isi form ini dengan benar.</p>
            </td>
        </tr>
    </table>

    <form method="post" action="">
        <table align="center">
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $data['id_pengguna']; ?>"></td>
            </tr>
            <tr>
                <td><label for="layanan">Layanan:</label></td>
                <td><input type="text" id="layanan" name="layanan" value="<?php echo htmlspecialchars($data['layanan']); ?>" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required></td>
            </tr>
            <tr>
                <td><label for="no_hp">No HP:</label></td>
                <td><input type="text" id="no_hp" name="no_hp" value="<?php echo htmlspecialchars($data['no_hp']); ?>" required></td>
            </tr>
            <tr>
                <td><label for="tgl_periksa">Tanggal Pemeriksaan:</label></td>
                <td><input type="date" id="tgl_periksa" name="tgl_periksa" value="<?php echo htmlspecialchars($data['tgl_periksa']); ?>" required></td>
            </tr>
            <tr>
                <td><label for="jenkel">Gender:</label></td>
                <td>
                    <select id="jenkel" name="jenkel" required>
                        <option value="Laki-laki" <?php echo ($data['jenkel'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo ($data['jenkel'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tgl_lhr">Tanggal Lahir:</label></td>
                <td><input type="date" id="tgl_lhr" name="tgl_lhr" value="<?php echo htmlspecialchars($data['tgl_lhr']); ?>" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea id="alamat" name="alamat" required><?php echo htmlspecialchars($data['alamat']); ?></textarea></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan:</label></td>
                <td><input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo htmlspecialchars($data['pekerjaan']); ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="button-group">
                        <input type="submit" value="Update Data">
                    </div>
                </td>
            </tr>
        </table>
    </form>

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
