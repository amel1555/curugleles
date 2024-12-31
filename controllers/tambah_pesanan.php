<?php
include '../databases/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pemesanan = $_POST['nama_pemesanan'];
    $hp_pemesan = $_POST['hp_pemesan'];
    $waktu_wisata = $_POST['waktu_wisata'];
    $hari_wisata = $_POST['hari_wisata'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $paket_wisata = $_POST['paket_wisata'];
    $total_tagihan = $_POST['total_tagihan'];

    $query = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, jumlah_peserta, paket_wisata, total_tagihan) 
              VALUES ('$nama_pemesanan', '$hp_pemesan', '$waktu_wisata', '$hari_wisata', $jumlah_peserta, '$paket_wisata', $total_tagihan)";

    if (mysqli_query($db, $query)) {
        echo "<script>alert('Pesanan Anda Berhasil Disimpan.'); 
              window.location.href = '../listPesanan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
