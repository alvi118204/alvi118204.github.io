<?php 
    require 'koneksi.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $layanan = htmlspecialchars($_POST['kegiatan']);
        $nama = htmlspecialchars($_POST['nama']);
        $no_hp = htmlspecialchars($_POST['nomor']);
        $email = htmlspecialchars($_POST['email']);
        $tanggal = htmlspecialchars($_POST['tanggal']);
        $nik = htmlspecialchars($_POST['nik']);
        $gender = htmlspecialchars($_POST['gender']);
        $agama = htmlspecialchars($_POST['agama']);
        $tempat = htmlspecialchars($_POST['tempat']);
        $tangla = htmlspecialchars($_POST['tangla']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $provinsi = htmlspecialchars($_POST['provinsi']);
        $kota = htmlspecialchars($_POST['kota']);
        $kecamatan = htmlspecialchars($_POST['kota']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);

        $query = "INSERT INTO datas VALUES('', '$layanan', '$nama', '$no_hp', '$email', '$tanggal', '$nik', '$gender', '$agama', '$tempat', '$tangla', '$alamat', '$provinsi', '$kota', '$kecamatan', '$pekerjaan')";
        $result = mysqli_query($conn, $query);

        if($result){
            echo "
                <script>
                    alert('Berhasil menambah data');
                    window.location.href = 'lihat.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal menambah data');
                </script>
            ";
        }
    }
?>