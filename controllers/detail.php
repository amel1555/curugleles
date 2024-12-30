<?php
// Include file koneksi ke database
include '../databases/connection.php';

// Cek apakah parameter id_pemesanan ada dan tidak kosong
if (!isset($_GET['id_pemesanan']) || empty($_GET['id_pemesanan'])) {
    die("Parameter id_pemesanan tidak ada atau kosong.");
}

// Amankan parameter id_pemesanan
$id_pemesanan = mysqli_real_escape_string($db, $_GET['id_pemesanan']);

// Query untuk mengambil data dari tabel pemesanan
$sql = "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";
$query = mysqli_query($db, $sql);

// Periksa apakah query berhasil
if (!$query || mysqli_num_rows($query) == 0) {
    die("Data dengan ID Pemesanan $id_pemesanan tidak ditemukan di database.");
}

// Ambil data
$detail = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3" id="form-pemesanan">
        <form method="post" action="controllers/tambah_pesanan.php">
            <div class="card mt-2">
                <div class="card-header bg-dark text-white">
                    Form Pemesanan Paket Wisata
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_pemesanan" class="form-control" value="<?= $detail['nama_pemesanan']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nomor Handphone</label>
                            <input type="text" name="hp_pemesan" class="form-control" value="<?= $detail['hp_pemesan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Waktu Berangkat</label>
                            <input type="date" name="waktu_wisata" class="form-control" value="<?= $detail['waktu_wisata']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estimasi (Hari)</label>
                            <input type="number" name="hari_wisata" class="form-control" value="<?= $detail['hari_wisata']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label">Paket</label>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_inap" name="paket_inap" 
                                    <?= $detail['paket_inap'] == 1 ? 'checked' : ''; ?> 
                                    disabled>
                                <label class="form-check-label" for="paket_inap">Penginapan (Rp. 1.000.000)</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_transport" name="paket_transport" 
                                    <?= $detail['paket_transport'] == 1 ? 'checked' : ''; ?> 
                                    disabled>
                                <label class="form-check-label" for="paket_transport">Transportasi (Rp. 1.200.000)</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_makan" name="paket_makan" 
                                    <?= $detail['paket_makan'] == 1 ? 'checked' : ''; ?> 
                                    disabled>
                                <label class="form-check-label" for="paket_makan">Service/Makan (Rp. 500.000)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Peserta</label>
                            <input type="number" name="jumlah_peserta" class="form-control" value="<?= $detail['jumlah_peserta']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label">Total Harga</label>
                        <p>Rp. <?= number_format($detail['total_tagihan'], 0, ',', '.'); ?></p>
                    </div>
                </div>
                <div class="card-footer">
				<div class="card-footer d-print-none">
						<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  					</div>
				</div>


    <!-- Menambahkan pustaka jsPDF -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>