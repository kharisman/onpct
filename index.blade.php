<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MySkill Clone Bootstrap</title>
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- SwiperJS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    body {
      background-color: #ddf5fc;
      font-family: 'Poppins', sans-serif;
    }
    .btn-daftar {
      background-color: #007c8c;
      color: white;
      font-weight: bold;
    }
    .btn-daftar:hover {
      background-color: #005f6a;
    }
    .rounded-custom {
      border-radius: 70px;
    }
    .fs-p {
      font-size: 0.790rem;
        font-weight: bold;
    }
    .btn1 {
      border: 1px solid #007c8c;
      color: #007c8c;
      height: 40px;
      width: 100px;
    }
    .myskill{
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        color: #007c8c;
        padding-left: 3%;
    }
    .p-myskill{
        padding-left: 2%;
    }

    .navbar-nav{
        padding-right: 2%;
    }
    .home{
        color: #007c8c;
    }
    .btn-masuk {
    color: #06989A;
    border: 1px solid #06989A;
    font-weight: bold;
    border-radius: 10px;
    background-color: transparent;
    transition: 0.3s;
    width: 70px;
    /* box-shadow: 0 2px 4px rgba(0,0,0,0.1); */
  }

  .btn-masuk:hover {
    background-color: #e6fafa;
  }

  .btn-daftar {
    background-color: #06989A;
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
  section.custom-carousel {
      background-color: #DDF5FC;
      border-radius: 70px;
      padding-top: 100px;
      padding-bottom: 80px;
    }

    .swiper-slide .card {
      width: 950px;
      max-width: 100%;
      margin: auto;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .swiper-pagination {
      position: static !important;
      margin-top: 20px;
      text-align: center;
    }

    .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      border-radius: 9999px;
      background-color: #cbd5e1;
      margin: 0 4px;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .swiper-pagination-bullet-active {
      width: 28px;
      background-color: #6b7280;
    }
  </style>
</head>
<body p-3>

  {{-- Menu atas --}}

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-2">
    <div class="container p-myskill">
      <a class="navbar-brand fw-bold fs-5 myskill p-3" href="#">MySkill</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item mx-2 fs-p"><a class="nav-link home" href="#">Home</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">E-learning</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">Bootcamp & Program</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">Review CV</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">Corporate Service</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">Info Loker</a></li>
          <li class="nav-item mx-2 fs-p"><a class="nav-link" href="#">Blog</a></li>
        </ul>
            <a class="btn btn-sm btn-masuk me-2" href="#">Masuk</a>
            <a class="btn btn-sm btn-daftar" href="#">Daftar</a>
      </div>
    </div>
  </nav>

  {{-- Menu atas end --}}

  {{-- slider start --}}

  <section class="custom-carousel">
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Loop gambar -->
        @php
          $slides = [
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
            'https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=3840&q=75',
          ];
        @endphp

        @foreach ($slides as $slide)
        <div class="swiper-slide">
          <div class="card">
            <img src="{{ asset($slide) }}" class="img-fluid" alt="slide">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Custom pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

  {{-- slider end --}}


  <!-- WhatsApp Button -->
  <a href="#" class="btn btn-success position-fixed bottom-0 end-0 m-4 rounded-pill shadow d-flex align-items-center">
    <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="me-2" />
    WhatsApp
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
