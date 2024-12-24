<?php
include 'lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan'";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'Pesanan Tidak Tersedia'; exit;
}else{
    $detail = mysqli_fetch_row($query);
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
        <a class="navbar-brand" href="#">Nyurug Kuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pemesanan.php">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main/daftar.php">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="flex-shrink-0">
    <!-- Form Pemesanan -->
    <div class="container mt-5" id="form-pemesanan">
      <form method="post" action="lib/proses.php">
        <div class="card mt-2">
          <div class="card-header bg-dark text-white">
            Detail Pemesanan Paket Wisata #<?=$detail[0]?>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
              <p><?=$detail[1]?></p>
            </div>
            <div class="mb-3">
              <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
              <p><?=$detail[2]?></p>
            </div>
            <div class="mb-3">
              <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
              <p><?=$detail[3]?></p>
            </div>
            <div class="mb-3">
              <label for="hari_wisata" class="form-label">Hari Wisata</label>
              <p><?=$detail[4]?></p>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input <?=($detail[5]==1)?'checked':''?> disabled type="checkbox" class="form-check-input" id="paket_inap" name="paket_inap" value="1">
                <label class="form-check-label" for="paket_inap">Penginapan (Rp. 1.000.000)</label>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input <?=($detail[6]==1)?'checked':''?> disabled type="checkbox" class="form-check-input" id="paket_transport" name="paket_transport" value="1">
                <label class="form-check-label" for="paket_transport">Transportasi (Rp. 1.200.000)</label>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input <?=($detail[7]==1)?'checked':''?> disabled type="checkbox" class="form-check-input" id="paket_makan" name="paket_makan" value="1">
                <label class="form-check-label" for="paket_makan">Service/Makan (Rp. 500.000)</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
              <p><?=$detail[8]?></p>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Total Tagihan</label>
              <p><?=$detail[9]?></p>
            </div>
            <div class="mb-3">
              <label for="total" class="form-label">Tanggal Pemesanan</label>
              <p><?=$detail[10]?></p>
            </div>
          </div>
          <div class="card-footer">
            <a href="pemesanan.php" class="btn btn-primary">Buat Pesanan Baru</a>
            <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
          </div>
        </div>
      </form>
    </div>
  </main>
  <?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
