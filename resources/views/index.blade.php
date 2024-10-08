<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Le easy - Manajemen Retail</title>
    <meta name="description"
        content="Le Easy merupakan produk sistem manajemen retail dari perusahaan konsultan IT NawaTara Tech" />
    <meta name="keywords" content="Retail Management System" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    @include('sweetalert::alert')

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="" />
                <h1 class="sitename"><img src="assets/img/Logo_Le.png" alt="Le"></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#features">Fitur</a></li>
                    <li><a href="#gallery">Antarmuka</a></li>
                    <!-- <li><a href="#testimonials">Testimoni</a></li>
                        <li><a href="#pricing">Paket</a></li> -->
                    <li><a href="#contact">Kontak</a></li>
                    <li>
                        <a href="https://nawatara.com/about/" target="_blank">Tentang Kami</a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg" />

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""
                            style="border-radius: 50%" />
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Kelola Bisnis Anti Ribet dengan <span>Le Easy</span></h1>
                        <p>
                            Dari manajemen stok hingga penjualan, Le Easy membantu Anda
                            dalam mengelola bisnis retail Anda dengan mudah, hemat, dan
                            cerdas.
                        </p>
                        <div class="d-flex">
                            <a href="#contact" class="btn-get-started">Hubungi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-2 mt-4 text-black" id="myModalLabel">Informasi Soft Launching !</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/Logo_dark.png') }}" alt="" class="img-thumbnail rounded mx-auto d-block"/>
                            <p class="text-center mt-4 text-black">
                                Ikuti event terdekat kami pada 2 Oktober 2024 dalam Mini Expo Golf Bareng di  Rancamaya
                                Golf
                                & Course Bogor
                            </p>
                            {{-- tombol lihat lokasinya --}}
                            <div class="text-center mt-4">
                                <a href="https://maps.app.goo.gl/pK727UZuQLkmnWsF8" target="_blank" class="cta2-btn">Lihat
                                    Lokasi</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="cta-btn" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>
        </section>
        <!-- /Hero Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <h2 class="text-center mb-4 title-countdown">Hitung Mundur Grand Launching</h2>
            <div id="countdown-container">
                <span id="days">00</span> hari <span id="hours">00</span> jam
                <span id="minutes">00</span> menit
                <span id="seconds">00</span> detik
            </div>
            <br />
            <div class="text-center mt-4">
                <a href="#" class="cta2-btn">Waiting List : {{ $countAntrian }} Perusahaan</a>
            </div>
            <div class="text-center mt-4">
                <a href="#queue" class="cta-btn">Beri tahu saat Launching</a>
            </div>
            <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="bi bi-emoji-smile"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Happy Clients</p>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="bi bi-journal-richtext"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Projects</p>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="bi bi-headset"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1463"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hours Of Support</p>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="bi bi-people"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="15"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>
        </div> -->
        </section>
        <!-- /Stats Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="col-xl-5 content">
                        <h3>Fitur Unggulan</h3>
                        <h2>Le easy, untuk bisnis retail Anda!</h2>
                        <p>
                            Memudahkan Anda dalam mengelola bisnis retail Anda, Le Easy
                            hadir dengan berbagai fitur unggulan yang akan membantu Anda
                            dalam mengelola bisnis retail Anda dalam satu website saja.
                        </p>
                        <a href="#features" class="read-more"><span>Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-cart-check"></i>
                                    <h3>Business Monitoring</h3>
                                    <p>
                                        Melakukan monitoring bisnis Anda dengan mudah dan cepat
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-list-check"></i>
                                    <h3>Quality Control</h3>
                                    <p>
                                        Melakukan kontrol kualitas produk Anda dengan baik dan mendetail
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-cash-coin"></i>
                                    <h3>Sales</h3>
                                    <p>
                                        Melakukan penjualan produk Anda dengan cepat dan terdata dengan baik
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-people"></i>
                                    <h3>CRM</h3>
                                    <p>
                                        Melakukan manajemen pelanggan Anda dengan baik dan terstruktur
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Features 2 Section -->
        <section id="features 2" class="features 2 section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <i class="bi bi-cart-check" style="color: #ffbb2c"></i>
                            <h3><a href="" class="stretched-link">Purchasing</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-card-list" style="color: #5578ff"></i>
                            <h3><a href="" class="stretched-link">Inventory</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-list-check" style="color: #e80368"></i>
                            <h3><a href="" class="stretched-link">Quality Control</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <i class="bi bi-cash-coin" style="color: #e361ff"></i>
                            <h3><a href="" class="stretched-link">Sales</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-gear" style="color: #47aeff"></i>
                            <h3><a href="" class="stretched-link">Services</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <i class="bi bi-shield-plus" style="color: #ffa76e"></i>
                            <h3><a href="" class="stretched-link">Warranty</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="features-item">
                            <i class="bi bi-people" style="color: #11dbcf"></i>
                            <h3><a href="" class="stretched-link">CRM</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <i class="bi bi-bar-chart-line" style="color: #4233ff"></i>
                            <h3><a href="" class="stretched-link">Dashboard</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="features-item">
                            <i class="bi bi-journal-text" style="color: #b2904f"></i>
                            <h3><a href="" class="stretched-link">Report</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="features-item">
                            <i class="bi bi-person-gear" style="color: #ff5828"></i>
                            <h3><a href="" class="stretched-link">User Management</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="features-item">
                            <i class="bi bi-person-workspace" style="color: #29cc61"></i>
                            <h3><a href="" class="stretched-link">Branch Management</a></h3>
                        </div>
                    </div>
                    <!-- End Feature Item -->
                </div>
            </div>
        </section>
        <!-- /Features Section -->

        <!-- Queue Section -->
        <section id="queue" class="queue section mb-4">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Daftar Tunggu</h2>
                <div>
                    <span>Daftar dan tunggu</span>
                    <span class="description-title">Informasi menariknya!</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">
                <div class="row gy-4">
                    <form action="{{ route('antrian.store') }}" method="POST">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                    placeholder="Masukkan Nama Anda" required />
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Masukkan Email Anda" required />
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_whatsapp" id="no_whatsapp"
                                    placeholder="Masukkan Nomor Telepon Anda" required />
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_perusahaan"
                                    id="nama_perusahaan" placeholder="Masukkan Nama Perusahaan Anda" required />
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori_bisnis"
                                    id="kategori_bisnis" placeholder="Masukkan Kategori Bisnis Anda" required />
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="submit" class="cta-btn">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /Queue Section -->

        <!-- Details Section -->
        <!-- <section id="details" class="details section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Details</h2>
          <div>
            <span>Check Our</span>
            <span class="description-title">Details</span>
          </div>
        </div>

        <div class="container">
          <div class="row gy-4 align-items-center features-item">
            <div
              class="col-md-5 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="100"
            >
              <img src="assets/img/details-1.png" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
              <h3>
                Voluptatem dignissimos provident quasi corporis voluptates sit
                assumenda.
              </h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check"></i
                  ><span>
                    Ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  <span
                    >Duis aute irure dolor in reprehenderit in voluptate
                    velit.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  <span>Ullam est qui quos consequatur eos accusamus.</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="row gy-4 align-items-center features-item">
            <div
              class="col-md-5 order-1 order-md-2 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <img src="assets/img/details-2.png" class="img-fluid" alt="" />
            </div>
            <div
              class="col-md-7 order-2 order-md-1"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <h3>Corporis temporibus maiores provident</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p>
            </div>
          </div>

          <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
              <img src="assets/img/details-3.png" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7" data-aos="fade-up">
              <h3>
                Sunt consequatur ad ut est nulla consectetur reiciendis animi
                voluptas
              </h3>
              <p>
                Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus
                quia minima quod. Sunt saepe odit aut quia voluptatem hic
                voluptas dolor doloremque.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check"></i>
                  <span
                    >Ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check"></i
                  ><span>
                    Duis aute irure dolor in reprehenderit in voluptate
                    velit.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  <span
                    >Facilis ut et voluptatem aperiam. Autem soluta ad
                    fugiat</span
                  >.
                </li>
              </ul>
            </div>
          </div>

          <div class="row gy-4 align-items-center features-item">
            <div
              class="col-md-5 order-1 order-md-2 d-flex align-items-center"
              data-aos="zoom-out"
            >
              <img src="assets/img/details-4.png" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
              <h3>
                Quas et necessitatibus eaque impedit ipsum animi consequatur
                incidunt in
              </h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>
      </section> -->
        <!-- /Details Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Antarmuka</h2>
                <div>
                    <span>Lihat</span>
                    <span class="description-title">Tampilan Antarmuka</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-1.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-2.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-3.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-4.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-5.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-6.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-7.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.png" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-8.png" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <!-- End Gallery Item -->
                </div>
            </div>
        </section>
        <!-- /Gallery Section -->

        <!-- Testimonials Section -->
        <!-- <section id="testimonials" class="testimonials section dark-background">
        <img
          src="assets/img/testimonials-bg.jpeg"
          class="testimonials-bg"
          alt=""
        />

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="assets/img/testimonials/testimonials-1.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Proin iaculis purus consequat sem cure digni ssim donec
                      porttitora entum suscipit rhoncus. Accusantium quam,
                      ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                      risus at semper.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="assets/img/testimonials/testimonials-2.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Export tempor illum tamen malis malis eram quae irure
                      esse labore quem cillum quid cillum eram malis quorum
                      velit fore eram velit sunt aliqua noster fugiat irure amet
                      legam anim culpa.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="assets/img/testimonials/testimonials-3.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Enim nisi quem export duis labore cillum quae magna enim
                      sint quorum nulla quem veniam duis minim tempor labore
                      quem eram duis noster aute amet eram fore quis sint
                      minim.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="assets/img/testimonials/testimonials-4.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Fugiat enim eram quae cillum dolore dolor amet nulla
                      culpa multos export minim fugiat minim velit minim dolor
                      enim duis veniam ipsum anim magna sunt elit fore quem
                      dolore labore illum veniam.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="assets/img/testimonials/testimonials-5.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Quis quorum aliqua sint quem legam fore sunt eram irure
                      aliqua veniam tempor noster veniam enim culpa labore duis
                      sunt culpa nulla illum cillum fugiat legam esse veniam
                      culpa fore nisi cillum quid.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section> -->
        <!-- /Testimonials Section -->

        <!-- Pricing Section -->
        <!-- <section id="pricing" class="pricing section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Paket</h2>
          <div>
            <span>Cek</span>
            <span class="description-title">Harga Paket</span>
          </div>
        </div>

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Free Plan</h3>
                <p class="description">
                  Ullam mollitia quasi nobis soluta in voluptatum et sint palora
                  dex strater
                </p>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <a href="#" class="cta-btn">Start a free trial</a>
                <p class="text-center small">No credit card required</p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Quam adipiscing vitae proin</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nec feugiat nisl pretium</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nulla at volutpat diam uteera</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i>
                    <span>Pharetra massa massa ultricies</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i>
                    <span>Massa ultricies mi quis hendrerit</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i>
                    <span>Voluptate id voluptas qui sed aperiam rerum</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i>
                    <span>Iure nihil dolores recusandae odit voluptatibus</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item featured">
                <p class="popular">Popular</p>
                <h3>Business Plan</h3>
                <p class="description">
                  Ullam mollitia quasi nobis soluta in voluptatum et sint palora
                  dex strater
                </p>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <a href="#" class="cta-btn">Start a free trial</a>
                <p class="text-center small">No credit card required</p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Quam adipiscing vitae proin</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nec feugiat nisl pretium</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nulla at volutpat diam uteera</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Pharetra massa massa ultricies</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Massa ultricies mi quis hendrerit</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Voluptate id voluptas qui sed aperiam rerum</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i>
                    <span>Iure nihil dolores recusandae odit voluptatibus</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Developer Plan</h3>
                <p class="description">
                  Ullam mollitia quasi nobis soluta in voluptatum et sint palora
                  dex strater
                </p>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <a href="#" class="cta-btn">Start a free trial</a>
                <p class="text-center small">No credit card required</p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Quam adipiscing vitae proin</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nec feugiat nisl pretium</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Nulla at volutpat diam uteera</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Pharetra massa massa ultricies</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Massa ultricies mi quis hendrerit</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Voluptate id voluptas qui sed aperiam rerum</span>
                  </li>
                  <li>
                    <i class="bi bi-check"></i>
                    <span>Iure nihil dolores recusandae odit voluptatibus</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section> -->
        <!-- /Pricing Section -->

        <!-- Faq Section -->
        <!-- <section id="faq" class="faq section light-background">
        <div class="container-fluid">
          <div class="row gy-4">
            <div
              class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1"
            >
              <div
                class="content px-xl-5"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <h3>
                  <span>Frequently Asked </span><strong>Questions</strong>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Duis aute irure dolor in reprehenderit
                </p>
              </div>

              <div
                class="faq-container px-xl-5"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <div class="faq-item faq-active">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
                      id volutpat lacus laoreet non curabitur gravida. Venenatis
                      lectus magna fringilla urna porttitor rhoncus dolor purus
                      non.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>
                    Feugiat scelerisque varius morbi enim nunc faucibus a
                    pellentesque?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi. Id interdum velit laoreet id donec
                      ultrices. Fringilla phasellus faucibus scelerisque
                      eleifend donec pretium. Est pellentesque elit ullamcorper
                      dignissim. Mauris ultrices eros in cursus turpis massa
                      tincidunt dui.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>
                    Dolor sit amet consectetur adipiscing elit pellentesque?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                      sagittis orci. Faucibus pulvinar elementum integer enim.
                      Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                      tellus pellentesque eu tincidunt. Lectus urna duis
                      convallis convallis tellus. Urna molestie at elementum eu
                      facilisis sed odio morbi quis
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2">
              <img
                src="assets/img/faq.jpg"
                class="img-fluid"
                alt=""
                data-aos="zoom-in"
                data-aos-delay="100"
              />
            </div>
          </div>
        </div>
      </section> -->
        <!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <div>
                    <span>Hubungi</span>
                    <span class="description-title">Kami</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="https://maps.app.goo.gl/6r5AHu7FqLMSiHxJA" target="_blank"><i
                                    class="bi bi-geo-alt flex-shrink-0"></i></a>
                            <div>
                                <h3>Alamat</h3>
                                <p>
                                    Ruko Pasar Modern Grand Wisata Blok PR 1 No 3, Lambangsari,
                                    Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 17510
                                </p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <a href="tel:02127882100" target="_blank">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                            </a>
                            <div>
                                <h3>Telepon</h3>
                                <p>(021) 27882100</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <a href="mailto:info@nawatara.com" target="_blank">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                            </a>
                            <div>
                                <h3>Email</h3>
                                <p>info@nawatara.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('contact.send') }}" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukkan Nama Anda" required="" />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Masukkan Email Anda" required="" />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="Masukkan Subjek" required="" />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Masukkan Pesan Anda" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Pesan Email Anda Telah Terkirim. Terima Kasih!
                                    </div>

                                    <button type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="assets/img/logo.png" alt="" />
                        <h1 class="sitename">Le easy</h1>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>
                            Semua kekayaan intelektual di situs web ini, termasuk nama perusahaan, merek dagang, logo,
                            dan konten lainnya, adalah milik dari pemiliknya masing-masing. Penggunaan tanpa izin
                            dilarang keras dan dapat mengakibatkan tindakan hukum.
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.instagram.com/le_easy.id?igsh=MWdoNzh5bDY0M3Q1dg==" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/company/nawatara-tech/" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#features">Fitur</a></li>
                        <li><a href="#gallery">Tampilan Antarmuka</a></li>
                        <li><a href="#testimonials">Testimoni</a></li>
                        <li><a href="#pricing">Paket</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Fitur Unggulan</h4>
                    <ul>
                        <li><a href="#">Business Monitoring</a></li>
                        <li><a href="#">Quality Control</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">CRM</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Channel NawaTara Tech</h4>
                    <p>Berlangganan untuk mendapatkan informasi terbaru dari kami!</p>
                    <div>
                        <a href="https://whatsapp.com/channel/0029VakhKB06BIEhjbHGTt2C" target="_blank"
                            class="cta-btn">Langganan</a>
                    </div>
                    <br>
                    <p class="mb-4"><strong>Alamat:</strong> <span>Ruko Pasar Modern Grand Wisata Blok PR 1 No 3,
                            Lambangsari, Kec. Tambun Sel.,
                            Kabupaten Bekasi,
                            Jawa Barat
                            17510</span>
                    </p>
                    <p class="mt-3">
                        <strong>Telepon:</strong> <span>(021) 27882100</span>
                    </p>
                    <p><strong>Email:</strong> <span>info@nawatara.com</span></p>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">NawaTara Tech</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        // Select countdown elements
        const daysElement = document.getElementById("days");
        const hoursElement = document.getElementById("hours");
        const minutesElement = document.getElementById("minutes");
        const secondsElement = document.getElementById("seconds");

        // Set the target date for the countdown (replace with your desired target date)
        const targetDate = new Date("2025-02-01");

        function calculateTimeRemaining() {
            const currentDate = new Date();
            const timeRemaining = targetDate - currentDate;

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
                (timeRemaining % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            // Return an object with the calculated values
            return {
                days,
                hours,
                minutes,
                seconds,
            };
        }

        function updateTimerDisplay() {
            const {
                days,
                hours,
                minutes,
                seconds
            } = calculateTimeRemaining();

            // Update the countdown elements with the calculated values
            daysElement.textContent = formatTimeValue(days);
            hoursElement.textContent = formatTimeValue(hours);
            minutesElement.textContent = formatTimeValue(minutes);
            secondsElement.textContent = formatTimeValue(seconds);
        }

        function formatTimeValue(value) {
            return String(value).padStart(2, "0");
        }

        function handleTimerExpiration() {
            // Custom logic when the timer expires
            // For example, display a message or perform an action
            console.log("Countdown timer has expired!");
        }

        // Start the countdown timer
        function startCountdown() {
            updateTimerDisplay(); // Update display immediately

            // Update the timer display every second
            setInterval(() => {
                updateTimerDisplay();

                if (
                    calculateTimeRemaining().days <= 0 &&
                    calculateTimeRemaining().hours <= 0 &&
                    calculateTimeRemaining().minutes <= 0 &&
                    calculateTimeRemaining().seconds <= 0
                ) {
                    // Timer has expired
                    handleTimerExpiration();
                    clearInterval(timerInterval);
                }
            }, 1000);
        }

        // Call the startCountdown function to begin the countdown
        startCountdown();
    </script>
    <script>
        // JavaScript to open modal 5 seconds after page load
        window.onload = function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
            }, 5000); // 5000 milliseconds = 5 seconds
        };
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                allowOutsideClick: false,
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                allowOutsideClick: false,
            });
        </script>
    @endif
</body>

</html>
