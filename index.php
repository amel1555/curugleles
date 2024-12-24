<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nyurug Kuy - Buper Curug Leles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=pool" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=check_box_outline_blank" />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header class="hero">
      <nav class="navbar">
        <div class="logo">Nyurug Kuy</div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="index.html#services">About Us</a></li>
          <li><a href="#destinasi">Packages</a></li>
          <li><a href="pemesanan.php">Pemesanan</a></li>
          <li><a href="listPesanan.php">Daftar</a></li>
        </ul>
        <div class="nav-icons">
          <span class="star">⭐</span>
          <span >👤</span>
        </div>
      </nav>
      <div class="hero-content">
        <h1>Welcome to<br />Bumi Perkemahan Curug Leles</h1>
        <p>
          Rasakan kesegaran air terjun dan kolam alami yang ramah untuk semua usia di Buper Curug Leles. Tempat ini menawarkan kombinasi sempurna antara relaksasi dan petualangan, serta fasilitas berkemah yang nyaman di tengah keindahan
          alam yang memukau.
        </p>
        <button class="btn">Temukan</button>
      </div>
    </header>

    <!--Our Service-->
    <section id="services" class="services">
      <h2>Service Kami</h2>
      <div class="service-container">
        <div class="service-box">
          <div class="icon">🎟</div>
          <h3>Tiket</h3>
          <p>Kamu dapat memesan tiket di sini</p>
        </div>
        <div class="service-box">
          <div class="icon">🏕</div>
          <h3>Camping</h3>
          <p>Kamu dapat memesan perlengkapan berkemah di sini</p>
        </div>
        <div class="service-box">
          <div class="icon">✈</div>
          <h3>Tour Plan</h3>
          <p>Kami menyediakan perjalanan tour ke curug</p>
        </div>
      </div>
    </section>

    <!-- Destinasi Populer -->
    <section class="section" id="destinasi">
      <h2>Destinasi Populer</h2>
      <div class="popular-destinations container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.035307020964!2d106.8417520742502!3d-6.25907966127779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTUnMzIuNyJTIDEwNsKwNTAnMzkuNiJF!5e0!3m2!1sid!2sid!4v1733404246135!5m2!1sid!2sid"
          width="600"
          height="500"
          style="border: 0; border-radius: 15px"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <div class="destinations">
          <div class="destination-card">
            <img src="assets/images/image1.jpeg" alt="Kolam Pemandian" />
            <div>
              <h3>Curug Leles</h3>
              <p class="text-wrap">Rasakan keindahan eksotis Curug setinggi 7 meter, dengan air terjun segar dan pemandangan alam hijau nan asri. Cocok untuk melepas penat dan menyatu dengan alam. Kunjungi dan temukan pesonanya!</p>
            </div>
          </div>
          <div class="destination-card">
            <img src="assets/images/destinasi 2.jpg" alt="Kolam Pemandian" />
            <div>
              <h3>Bumi Perkemahan</h3>
              <p class="text-wrap">Nikmati pengalaman camping seru di bumi perkemahan luas, dikelilingi hutan pinus yang menyejukkan. Cocok untuk petualangan dan bersantai di tengah alam.</p>
            </div>
          </div>
          <div class="destination-card">
            <img src="assets/images/destinasi 3.jpg" alt="Kolam Pemandian" />
            <div>
              <h3>Kolam Pemandian</h3>
              <p class="text-wrap">Tepat di bawah air terjun, terdapat kolam alami yang menyegarkan dan aman untuk semua usia. Sempurna untuk relaksasi keluarga sambil menikmati keindahan alam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Gallery Pengunjung-->
    <section class="gallery-section">
      <h2>Galeri Pengunjung</h2>
      <div class="gallery">
        <img src="assets/images/galeri pengunjung 1.jpg" alt="Foto Pengunjung 1" />
        <img src="assets/images/galeri pengunjung 2.jpg" alt="Foto Pengunjung 2" />
        <img src="assets/images/galeri pengunjung 3.jpg" alt="Foto Pengunjung 3" />
        <img src="assets/images/galeri pengunjung 4.jpg" alt="Foto Pengunjung 4" />
        <img src="assets/images/galeri pengunjung 5.jpg" alt="Foto Pengunjung 5" />
        <img src="assets/images/galeri pengunjung 5.jpg" alt="Foto Pengunjung 6" />
      </div>

      <button class="btn mt-5">Lainnya</button>
    </section>

    <!-- Pesan Mudah -->
    <section class="section" id="destinasi">
  <h1>Pesan Liburanmu Selanjutnya dalam 3 Langkah</h1>
  <h2>Mudah dan Cepat</h2>
  <div class="popular-destinations container">
    <div class="steps">
      <!-- Langkah 1: Pilih Destinasi -->
      <div class="step">
        <img src="assets/icons/destination-icon.png" alt="Ikon Pilih Destinasi" />
        <h4>Pilih Destinasi</h4>

      <!-- Langkah 2: Lakukan Pembayaran -->
      <div class="step">
        <h4>Lakukan Pembayaran</h4>
        <p>Bayar reservasi melalui metode yang tersedia seperti QRIS.</p>
      </div>

      <!-- Langkah 3: Siapkan Perlengkapan -->
      <div class="step">
        <h4>Siapkan Perlengkapan</h4>
        <p>Bawa semua perlengkapan camping yang diperlukan sebelum berangkat.</p>
      </div>
    </div>

    <!-- Kartu Perjalanan -->
    <div class="destinations">
      <div class="curug">
        <h3>Perjalanan ke Curug</h3>
        <p>14-16 Okt | by Amelia Nurul</p>
        <p class="info">24 orang pergi</p>
      </div>
    </div>
  </div>
</section>


    <!--Ulasan Memukau-->

    <div class="review-section">
      <div class="review-box">
        <div class="profile-ulasan"></div>
        <h3 class="review-name">Amelia Nurul Islamiyah</h3>
        <p class="review-text">
          "Pengalaman yang luar biasa! Tempat ini menawarkan suasana alam yang menenangkan serta kolam alami yang aman untuk semua usia. Cocok untuk relaksasi keluarga atau sekadar menikmati keindahan alam. Sangat direkomendasikan!"
        </p>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="footer-container">
        <div class="footer-section logo-section">
          <h2>Nyurug Kuy</h2>
          <p>Temukan Keindahan Alam di Curug Leles</p>
        </div>
        <div class="footer-section">
          <h3>Contact</h3>
          <a href="#">Help/FAQ</a>
        </div>
        <div class="footer-section">
          <h3>More</h3>
          <a href="#">About</a>
        </div>
        <div class="footer-section app-section">
          <h3>Discover our app</h3>
          <div class="app-links">
            <a href="#"><img src="assets/images/playstore.webp" alt="Get it on Google Play" /></a>
            <a href="#"><img src="assets/images/appstore.webp" alt="Available on the App Store" /></a>
          </div>
        </div>
        <div class="social-icons">
          <a href="#"><img src="assets/images/logo-fb.webp" alt="Facebook" /></a>
          <a href="#"><img src="assets/images/logo-ig.webp" alt="Instagram" /></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>All rights reserved © Nyurug.Kuy</p>
      </div>
    </footer>

    <!-- End Footer -->

    <script>
      function showDiscover() {
        document.querySelector(".hero").style.display = "none";
        document.querySelector(".container").style.display = "flex";
      }
      function showHome() {
        document.querySelector(".hero").style.display = "flex";
        document.querySelector(".container").style.display = "none";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
