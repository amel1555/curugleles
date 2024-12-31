<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan</title>
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
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#services">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#form-pemesanan">Pemesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="listPesanan.php">Daftar</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </header>

    <main class="flex-shrink-0">
        <div class="container mt-3" id="form-pemesanan">
        <form method="post" action="controllers/tambah_pesanan.php">
            <div class="card mt-2">
            <div class="card-header bg-dark text-white">Form Pemesanan Paket Wisata</div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_pemesanan" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nomor Handphone</label>
                        <input type="text" name="hp_pemesan" class="form-control" placeholder="Nomor Handphone" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label class="form-label">Waktu Berangkat</label>
                        <input type="date" name="waktu_wisata" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Estimasi (Hari)</label>
                        <input type="number" name="hari_wisata" class="form-control" placeholder="Estimasi Hari" required>
                    </div>
                </div>
                <div class="row">
                    <label class="form-label">Paket</label>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_inap" name="paket_inap" value="1000000" onchange="calculateTotal();">
                                <label class="form-check-label" for="paket_inap">Penginapan (Rp. 1.000.000)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_transport" name="paket_transport" value="1200000" onchange="calculateTotal();">
                                <label class="form-check-label" for="paket_transport">Transportasi (Rp. 1.200.000)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="paket_makan" name="paket_makan" value="500000" onchange="calculateTotal();">
                                <label class="form-check-label" for="paket_makan">Service/Makan (Rp. 500.000)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Peserta</label>
                        <input type="number" id="jumlah_peserta" name="jumlah_peserta" class="form-control" placeholder="Jumlah Peserta" required onchange="calculateTotal();">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="form-label">Harga Paket per Orang</label>
                    <p id="harga_paket">Rp. 0</p>
                </div>
                <div class="row mb-2">
                    <label class="form-label">Total Harga</label>
                    <p id="total_tagihan_display">Rp. 0</p>
                    <input type="hidden" name="total_tagihan" id="total_tagihan">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
            </div>
        </form>
        </div>
    </main>

    <script>
        function calculateTotal() {
            const paketInap = document.getElementById('paket_inap').checked ? parseInt(document.getElementById('paket_inap').value) : 0;
            const paketTransport = document.getElementById('paket_transport').checked ? parseInt(document.getElementById('paket_transport').value) : 0;
            const paketMakan = document.getElementById('paket_makan').checked ? parseInt(document.getElementById('paket_makan').value) : 0;

            const hargaPaket = paketInap + paketTransport + paketMakan;
            const jumlahPeserta = parseInt(document.getElementById('jumlah_peserta').value) || 0;
            const totalTagihan = hargaPaket * jumlahPeserta;

            document.getElementById('harga_paket').innerText = `Rp. ${hargaPaket.toLocaleString('id-ID')}`;
            document.getElementById('total_tagihan_display').innerText = `Rp. ${totalTagihan.toLocaleString('id-ID')}`;
            document.getElementById('total_tagihan').value = totalTagihan;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
