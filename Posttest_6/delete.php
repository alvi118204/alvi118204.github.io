<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM datas WHERE id_pengguna = '$id'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Data berhasil dihapus.";
        header("Location: lihat.php"); 
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak valid.";
    exit;
}
?>
