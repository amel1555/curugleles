<?php
include 'databases/connection.php';

// Query untuk mengambil data pemesanan dari database
$query = "SELECT id_pemesanan, nama_pemesanan, hp_pemesan, paket_wisata, total_tagihan FROM pemesanan";
$result = $db->query($query);

$dataPemesanan = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataPemesanan[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Data Pemesanan</title>
</head>
<body>
    <!-- Navbar -->
    <header class="bg-dark text-white p-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Nyurug Kuy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#services">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="listPesanan.php">Daftar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-shrink-0">
        <!-- Daftar Pesanan -->
        <div class="container mt-3" id="form-pemesanan">
            <div class="card mt-2">
                <div class="card-header bg-dark text-white">
                    Daftar Pemesanan
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($dataPemesanan)): ?>
                                <?php foreach ($dataPemesanan as $index => $pemesanan): ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= htmlspecialchars($pemesanan['nama_pemesanan']); ?></td>
                                        <td><?= htmlspecialchars($pemesanan['hp_pemesan']); ?></td>
                                        <td>Rp. <?= number_format($pemesanan['total_tagihan'], 0, ',', '.'); ?></td>
                                        <td>
                                            <a href="controllers/detail.php?id_pemesanan=<?= $pemesanan['id_pemesanan']; ?>" 
                                               class="btn btn-primary btn-sm">Detail</a>
                                            <a href="controllers/delete.php?id_pemesanan=<?= $pemesanan['id_pemesanan']; ?>" 
                                               class="btn btn-danger btn-sm" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">Data pemesanan tidak tersedia</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
