<?php
include '../databases/connection.php';

// Amankan parameter id_pemesanan
if (!isset($_GET['id_pemesanan']) || empty($_GET['id_pemesanan'])) {
    die("Parameter id_pemesanan tidak ada atau kosong.");
}
$id_pemesanan = htmlentities($_GET['id_pemesanan'], ENT_QUOTES, 'UTF-8');

// Query untuk mengambil data dari tabel pemesanan
$sql = $db->prepare("SELECT * FROM pemesanan WHERE id_pemesanan = ?");
$sql->bind_param('s', $id_pemesanan);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows == 0) {
    die("Data dengan ID Pemesanan $id_pemesanan tidak ditemukan di database.");
}

// Ambil data
$detail = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pemesanan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Nyurug Kuy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php#services">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#form-pemesanan">Pemesanan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listPesanan.php">Daftar</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>

    <main class="flex-shrink-0">
        <div class="container mt-3" id="form-pemesanan">
            <div class="card mt-2">
                <div class="card-header bg-dark text-white">
                    Detail Pemesanan Paket Wisata #<?= htmlspecialchars($detail['id_pemesanan']) ?>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <p><?= htmlspecialchars($detail['nama_pemesanan']) ?></p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nomor Handphone</label>
                            <p><?= htmlspecialchars($detail['hp_pemesan']) ?></p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Waktu Berangkat</label>
                            <p><?= htmlspecialchars($detail['waktu_wisata']) ?></p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estimasi (Hari)</label>
                            <p><?= htmlspecialchars($detail['hari_wisata']) ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label">Paket yang Dipilih</label>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket_inap" <?= (isset($detail['paket_inap']) && $detail['paket_inap'] == 1) ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="paket_inap">Penginapan (Rp. 1.000.000)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket_transport" <?= (isset($detail['paket_transport']) && $detail['paket_transport'] == 1) ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="paket_transport">Transportasi (Rp. 1.200.000)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket_makan" <?= (isset($detail['paket_makan']) && $detail['paket_makan'] == 1) ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="paket_makan">Service/Makan (Rp. 500.000)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Peserta</label>
                            <p><?= htmlspecialchars($detail['jumlah_peserta']) ?></p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label">Harga Paket per Orang</label>
                        <p>Rp. <?= number_format($detail['paket_inap'] * 1000000 + $detail['paket_transport'] * 1200000 + $detail['paket_makan'] * 500000, 0, ',', '.') ?></p>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label">Total Harga</label>
                        <p>Rp. <?= number_format($detail['total_tagihan'], 0, ',', '.') ?></p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 