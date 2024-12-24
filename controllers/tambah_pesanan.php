<?php
include '../databases/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pemesanan = $_POST['nama_pemesanan'] ?? '';
    $hp_pemesan = $_POST['hp_pemesan'] ?? '';
    $waktu_wisata = $_POST['waktu_wisata'] ?? '';
    $hari_wisata = $_POST['hari_wisata'] ?? '';
    $jumlah_peserta = $_POST['jumlah_peserta'] ?? 0;
    $total_tagihan = $_POST['total_tagihan'] ?? 0;

    //proses buat masukin data nya ke database yaitu pake query insert, valuesnya itu di ambil dari variabel di atas, yang dimana berasal dari yang di input di inputan/form
    $query = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, jumlah_peserta, total_tagihan) VALUES ('$nama_pemesanan', '$hp_pemesan', '$waktu_wisata', '$hari_wisata', $jumlah_peserta, $total_tagihan)";
    // kalo query nya berhasil masuk ke database, akan dimunculin pesen ini
    if (mysqli_query($db, $query)) {
        echo "<script>alert('Pesanan Anda Berhasil Di Simpan') 
         window.location.href = '../listPesanan.php';
        </script>"; //pakai script nya dari js buat si alert nya dan redirect ke halaman list pesanannya
    } else {
        echo "Error: " . mysqli_error($db); //kalau gagal akan amengembalikan nilai error
    }
}
?>