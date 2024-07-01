<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Paket | Politeknik Caltex Riau</title>
  <link rel="icon" type="image/png" href="<?php echo baseURL(); ?>assets/images/envelope icon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&family=Baloo+Thambi+2&family=Barlow+Semi+Condensed:ital,wght@1,100&family=Montserrat:wght@200;300;500;700&family=Poppins:wght@100;200;300;500;700&family=Roboto:wght@300&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo baseURL(); ?>assets/css/home.css">
  <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <a href="#"><img src="<?php echo baseURL(); ?>assets/images/logo-web.png" class="logo"></a>
    <div class="navbar-nav">
      <a href="#home">Beranda</a>
      <a href="#tentang">Tentang</a>
      <a href="#kontak">Kontak</a>
    </div>
    <div class="navbar-login">
      <a href="">Login <i class="fa-solid fa-right-to-bracket"></i></a>
    </div>
    <a href="#menu" id="hamburger-menu"><button class="menu"
        onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
        aria-label="Main Menu">
        <svg width="100" height="100" viewBox="0 0 100 100">
          <path class="line line1"
            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3"
            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button></a>
  </nav>
  <main>
    <section class="hero" id="home">
      <div class="content flex">
        <div class="content-judul">
          <h1>Surat Paket</h1>
          <h2>Politeknik Caltex Riau</h2>
          <a href="#ambil" class="cta"><i class="bi bi-search"></i> Cari Barang</a>
        </div>
        <div class="image-hero">
          <img src="<?php echo baseURL(); ?>assets/images/logistics.svg">
        </div>
      </div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
      </svg>
    </section>
    <section id="tentang" class="tentang">
      <h1>Tentang</h1>
    </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php echo baseURL(); ?>assets/js/main.js"></script>
    <?php
    // views/footer.php
    ?>
  </main>
  <footer>
    <p>&copy; 2024 My Website</p>
  </footer>
</body>

</html>