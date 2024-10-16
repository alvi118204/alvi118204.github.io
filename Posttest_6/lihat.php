<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - Siloam Hospitals</title>
    <link rel="icon" type="image/x-icon" href="logo1.png">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMYj0t2Q9A4kzMSuE5qA2N6BSR11w5jl7/v6M2" crossorigin="anonymous">
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

    <?php
        require 'koneksi.php'; 

        $query = "SELECT * FROM datas";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "
            <table cellpadding='10' cellspacing='30' width='100%'>
                <tr>
                    <th>ID</th>
                    <th>Layanan</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            ";

            // Loop untuk menampilkan setiap baris data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>" . $row['id_pengguna'] . "</td>
                    <td>" . htmlspecialchars($row['layanan']) . "</td>
                    <td>" . htmlspecialchars($row['nama']) . "</td>
                    <td>" . htmlspecialchars($row['no_hp']) . "</td>
                    <td>" . htmlspecialchars($row['tgl_periksa']) . "</td>
                    <td>" . htmlspecialchars($row['jenkel']) . "</td>
                    <td>" . htmlspecialchars($row['tgl_lhr']) . "</td>
                    <td>" . htmlspecialchars($row['alamat']) . "</td>
                    <td>" . htmlspecialchars($row['pekerjaan']) . "</td>
                    <td>" . htmlspecialchars($row['foto']) . "</td>
                    <td>
                        <a href='update.php?id=" . $row['id_pengguna'] . "' title='Update Data'>
                            <img class='action-icon' src='pencil-square.svg' alt='Update Icon'/>
                        </a>
                        <a href='delete.php?id=" . $row['id_pengguna'] . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\" title='Delete Data'>
                            <img class='action-icon' src='trash.svg' alt='Delete Icon'/>
                        </a>
                    </td>
                </tr>
                ";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data ditemukan.";
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
