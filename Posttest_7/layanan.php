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
            <li class="navbar-item">
                <a href="lihat.php"><p>Data</p></a>
            </li>
        </menu>
    </nav>

    <table class="table-header">
        <tr>
            <td>
                <h2>Form Pendaftaran Layanan Kesehatan</h2><br>
                <p>Silakan lengkapi dokumen dan isi form ini dengan benar.</p><br>
            </td>
        </tr>
    </table>

    <form  id="form-daftar" action="tambah.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="kegiatan">Pilih Layanan *</label></td>
                <td><select id="kegiatan" name="kegiatan" required>
                    <option value="">Pilih Layanan</option>
                    <option value="donor rutin">Donor Darah</option>
                    <option value="Pembuatan Surat Sakit">Pembuatan Surat Sakit</option>
                    <option value="Pembuatan Surat Sehat">Pembuatan Surat Sehat</option>
                    <option value="Cek Kesehatan">Cek Kesehatan</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Lengkap *</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="nomor">Nomor HP *</label></td>
                <td><input type="number" id="nomor" name="nomor" required></td>
            </tr>
            <tr>
                <td><label for="email">Email *</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal Pemeriksaan *</label></td>
                <td><input type="date" id="tanggal" name="tanggal" required></td>
            </tr>
            <tr>
                <td><label for="nik">NIK *</label></td>
                <td><input type="number" id="nik" name="nik" required></td>
            </tr>
            <tr>
                <td><label for="gender">Jenis Kelamin *</label></td>
                <td>
                    <select name="gender" id="gender">
                    <option value="">Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="agama">Agama *</label></td>
                <td>
                    <select id="agama" name="agama" required>
                        <option value="">Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tempat">Tempat Lahir *</label></td>
                <td><input type="text" id="tempat" name="tempat" required></td>
            </tr>
            <tr>
                <td><label for="tangla">Tanggal Lahir *</label></td>
                <td><input type="date" id="tangla" name="tangla" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Sesuai KTP *</label></td>
                <td><textarea name="alamat" id="alamat" rows="4" cols="40" required></textarea></td>
            </tr>
            <tr>
                <td><label for="provinsi">Provinsi *</label></td>
                <td><input type="text" id="provinsi" name="provinsi" required></td>
            </tr>
            <tr>
                <td><label for="kota">Kabupaten/Kota *</label></td>
                <td><input type="text" id="kota" name="kota" required></td>
            </tr>
            <tr>
                <td><label for="kecamatan">Kecamatan *</label></td>
                <td><input type="text" id="kecamatan" name="kecamatan" required></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan *</label></td>
                <td><input type="text" id="pekerjaan" name="pekerjaan" required></td>
            </tr>
            <tr>
                <td><label for="foto">Foto *</label></td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
                <td><p  class="ket-wajib" style="font-size: 15px;"style="col">
                    * Wajib di isi</p></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="button-group">
                        <input type="submit" value="tambah" name="tambah">
                        <input type="reset" value="hapus" name="hapus">
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <footer class= "footer-section">
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
