<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MySkill Clone Bootstrap</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- SwiperJS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">

  <style>

    
    body {
      background-color: #fdfeff;
      font-family: 'Public Sans', 'Montserrat', sans-serif;
    }

    .navbar {
      background-color: #d6dadf;
      padding-right: 30px;
    }

    /* Awal: warna solid */
.navbar-solid {
  background-color: #d6dadf !important;
  transition: background-color 0.4s ease, box-shadow 0.4s ease;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Setelah scroll: transparan dan blur */
.navbar-transparent {
  background-color: rgba(255, 255, 255, 0.1) !important;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: background-color 0.4s ease, box-shadow 0.4s ease;
  box-shadow: none;
}


    .btn-daftar {
      background-color: #34699A;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      border: none;
      transition: 0.3s;
      width: 70px;
      box-shadow: 0 3px 4px rgba(0,0,0,0.1);
    }

    .btn-daftar:hover {
      background-color: #057c7e;
    }

    .btn-masuk {
      color: #34699A;
      border: 1px solid #06989A;
      font-weight: bold;
      border-radius: 10px;
      background-color: transparent;
      transition: 0.3s;
      width: 70px;
    }

    .btn-masuk:hover {
      background-color: #e6fafa;
    }

    .fs-p {
      font-weight: bold;
    }

    /* .myskill {
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      color: #456882;
      padding-left: 3%;
      padding-right: 5%;
    } */

    .myskill{
      padding: 10px;
      padding-top: 20px;
      font-size: 1.5rem;
    }

    .navbar-nav {
      padding-right: 3%;
    }

    .navbar-nav a{
      margin-top: 5px
    }

    .p-myskill {
      padding-left: 2px;
    }

    .home {
      color: #34699A;
    }

    .section-slider {
      background-color: #d6dadf;
      border-bottom-left-radius: 75px;
      border-bottom-right-radius: 75px;
      padding: 50px;
      padding-top: 25px;
      height: 549px;
    }

    .swiper-slide {
      width: auto;
      flex-shrink: 0;
      width: 1000px;
    }

    .foto-swiper {
      width: 1000px;
      max-width: 100%;
      border-radius: 20px;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      background-color: #d6dadf;
      margin-top: 6%;
    }

    .swiper-pagination {
      position: static !important;
      margin-top: 20px;
      text-align: center;
      padding-left: 80%;
    }

    .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      border-radius: 9999px;
      background-color: #34699A;
      margin: 0 4px;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      width: 28px;
      background-color: #6b7280;
    }

    .navbar-nav a {
      padding-top: 0.5rem;
      font-size: 0.800rem;
      font-weight: bold;
    }

    ul.navbar-nav {
      padding-left: 8%;
    }

    .card-title {
      font-weight: bold;
      font-size: 13px;
      color: black;
    }

    .card-text {
      font-size: 12px;
      color: #456882;
    }

    .card {
      border-radius: 20px;
    }

    /* ini media untuk ukuran 770 */

    @media (max-width: 770px) {
      .swiper-slide {
        width: 100%;
      }
      .foto-swiper {
        width: 100%;
      }
      .btn-daftar, .btn-masuk {
        width: 100%;
        margin-bottom: 10px;
      }
      .swiper-pagination-bullet{
        justify-content: center;
        align-items: center;
      }

      .swiper-wrapper {
        overflow-x: hidden;
      }

      .swiper-pagination{
        padding-left: 0;
        padding-bottom: 20px;
      }

      .container {
    padding-left: 0.5rem !important;
    padding-right: 0.5rem !important;
  }

  .section-slider {
    padding-left: 0.5rem !important;
    padding-right: 0.5rem !important;
  }

  .d-flex.flex-row.flex-nowrap.gap-3.overflow-auto.pb-3 {
    margin-left: -4px;
    margin-right: -4px;
  }

  .card.shadow-sm {
    margin-right: 8px;
  }

  .swiper-slide{
      padding-top: 10%;
    }
  }

  /* ini media untuk hp kecil */

  @media (max-width: 576px) 
  {
    .swiper-slide {
      padding-top: 12%;
    }
    .section-slider {
      height: 420px;
    }
    .swiper-slide{
      padding-top: 13%;
    }
  }

    /* ini media untuk ukuran hp besar */


    @media (min-width: 577px) and (max-width: 768px) {
      .navbar-nav {
        padding-right: 0;
      }
      .myskill {
        padding-left: 0;
      }
      .btn-daftar, .btn-masuk {
        width: 100%;
      }
      
      .navbar-nav a{
        padding-top: 0.5rem;
        font-size: 850rem;
        font-weight: bold;
      }
      
      .container {
    padding-left: 0.5rem !important;
    padding-right: 0.5rem !important;
  }

  .section-slider {
    padding-left: 0.5rem !important;
    padding-right: 0.5rem !important;
  }

  .d-flex.flex-row.flex-nowrap.gap-3.overflow-auto.pb-3 {
    margin-left: -4px;
    margin-right: -4px;
  }

  .card.shadow-sm {
    margin-right: 8px;
  }
  .swiper-slide{
    padding-top: 10%;
  }
    }

    /* untuk iPad landscape, laptop 13 inch */
    @media (min-width: 769px) and (max-width: 992px) 
    {

    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-solid" id="mainNavbar">
  <div class="container sm:px-1 px-2 justify-content-between">
    <!-- Hamburger Toggle Button -->
    <button class="navbar-toggler order-lg-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <p class="navbar-brand fw-italic myskill">MySkill</p>
  <!-- Tombol Masuk & Daftar di Sebelah Hamburger -->
  <div class="d-flex align-items-left order-lg-2 ms-auto me-2">
    <a class="btn btn-sm btn-masuk me-2" href="#">Masuk</a>
    <a class="btn btn-sm btn-daftar" href="#">Daftar</a>
  </div>
  
    <!-- Collapsible Navbar -->
    <div class="collapse navbar-collapse justify-content-center order-lg-1" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2"><a class="nav-link home" href="#">Home</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="/e-learning">E-learning</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Bootcamp & Program</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Review CV</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Corporate Service</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Info Loker</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Carousel -->

  <section class="section-slider">
    <div class="container carousel px-2">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="/slide1">
              <img src="{{ asset('foto/banner1.jpeg') }}" class="foto-swiper" alt="slide 1">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/slide2">
              <img src="{{ asset('foto/banner2.jpeg') }}" class="foto-swiper" alt="slide 2">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/slide3">
              <img src="{{ asset('foto/banner3.jpeg') }}" class="foto-swiper" alt="slide 3">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/slide4">
              <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fbootcamp.80c09686.png&w=3840&q=75" class="foto-swiper" alt="slide 4">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/slide5">
              <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Freview-cv.58ab08f8.png&w=1920&q=75" class="foto-swiper" alt="slide 5">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/slide6">
              <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcorporate-training.808fda14.png&w=1920&q=75" class="foto-swiper" alt="slide 6">
            </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Judul Section -->

    <div class="container text-center">
      <h4 class="fw-bold mb-4">Rintis Karir Bersama Palcomtech</h4>
    </div>

    <!-- Loop Card -->
    @php
      $card = [
        ['img' => 'foto/cta1.webp', 'title' => 'E-Learning', 'description' => 'Belajar Online'],
        ['img' => 'foto/cta1.webp', 'title' => 'Bootcamp', 'description' => 'Program Intensif'],
        ['img' => 'foto/cta1.webp', 'title' => 'Review CV', 'description' => 'Perbaiki CV Anda'],
        ['img' => 'foto/cta1.webp', 'title' => 'Corporate Service', 'description' => 'Pelatihan Perusahaan'],
        ['img' => 'foto/cta1.webp', 'title' => 'Info Loker', 'description' => 'Cari Lowongan Kerja']
      ];
    @endphp

    <div class="container">
      <div class="d-flex flex-row flex-nowrap gap-3 overflow-auto pb-3">
        @foreach ($card as $cta1)
          <div class="card shadow-sm" style="min-width: 13rem; flex: 0 0 auto;">
            <img src="{{ asset($cta1['img']) }}" class="img-fluid mx-auto d-block mt-3" style="width: 80px;" alt="{{ $cta1['title'] }}">
            <div class="card-body text-center">
              <h6 class="card-title">{{ $cta1['title'] }}</h6>
              <p class="card-text">{{ $cta1['description'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Judul Section -->
    <div class="container text-center">
      <h4 class="fw-bold mb-4 mt-3">Terbukti Berdampak dan Membuka Batasan</h4>
    </div>

    @php
      $card = [
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
        ['img' => 'foto/cta2.webp'],
      ];
    @endphp

    <div class="container">
      <div class="d-flex flex-row flex-nowrap gap-3 overflow-auto pb-3">
        @foreach ($card as $cta1)
          <div class="card shadow-sm" style="min-width: 12rem; flex: 0 0 auto; width: 100px;">
  <img src="{{ asset($cta1['img']) }}" class="card-img-top">
  <div class="card-body text-center">
    <a class="btn btn-sm btn-daftar w-100" href="#">Daftar</a>
  </div>
</div>



        @endforeach
      </div>
    </div>
  </section>

  

  <!-- WhatsApp Floating Button -->
  <a href="#" class="btn btn-success position-fixed bottom-0 end-0 m-4 rounded-pill shadow d-flex align-items-center">
    <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="me-2" />
    WhatsApp
  </a>

  <!-- Scripts swiper.js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 10,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });
  </script>

  {{-- script untuk transparant navbar --}}
  <script>
  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");

    if (window.scrollY > 50) {
      navbar.classList.remove("navbar-solid");
      navbar.classList.add("navbar-transparent");
    } else {
      navbar.classList.remove("navbar-transparent");
      navbar.classList.add("navbar-solid");
    }
  });
</script>



</body>
</html>
