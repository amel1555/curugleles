<?php
include '../databases/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pemesanan = mysqli_real_escape_string($db, $_POST['nama_pemesanan']);
    $hp_pemesan = mysqli_real_escape_string($db, $_POST['hp_pemesan']);
    $waktu_wisata = mysqli_real_escape_string($db, $_POST['waktu_wisata']);
    $hari_wisata = mysqli_real_escape_string($db, $_POST['hari_wisata']);
    $jumlah_peserta = mysqli_real_escape_string($db, $_POST['jumlah_peserta']);
    $paket_wisata = mysqli_real_escape_string($db, $_POST['paket_wisata']);
    $total_tagihan = mysqli_real_escape_string($db, $_POST['total_tagihan']);

    $paket_inap = isset($_POST['paket_inap']) ? 1 : 0;
    $paket_transport = isset($_POST['paket_transport']) ? 1 : 0;
    $paket_makan = isset($_POST['paket_makan']) ? 1 : 0;

    // Masukkan nilai checkbox ke dalam query
    $query = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, jumlah_peserta, paket_wisata, total_tagihan, paket_inap, paket_transport, paket_makan) 
              VALUES ('$nama_pemesanan', '$hp_pemesan', '$waktu_wisata', '$hari_wisata', $jumlah_peserta, '$paket_wisata', $total_tagihan, $paket_inap, $paket_transport, $paket_makan)";

    if (mysqli_query($db, $query)) {
        echo "<script>alert('Pesanan Anda Berhasil Disimpan.'); 
              window.location.href = '../listPesanan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>