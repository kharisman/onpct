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
      background-color:  #ddfce0;
      font-family: 'Public Sans', 'Montserrat', sans-serif;
    }

    .navbar{
      padding-right: 30px;
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

    .btn-masuk {
      color: #06989A;
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
      font-size: 0.820rem;
      font-weight: bold;
    }

    .myskill {
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      color: #007c8c;
      padding-left: 3%;
      padding-right: 5%;
    }

    .navbar-nav {
      padding-right: 3%;
      
    }

    .p-myskill{
      padding-left: 2px;
    }

    .home {
      color: #007c8c;
    }

    .section-slider {
      background-color: #DDF5FC;
      border-radius: 70px;
      padding: 50px;
      margin: 0 auto;
      padding-top: 25px;
    }

    .swiper-slide {
      width: auto;
      flex-shrink: 0;
      width: 1000PX;
    }

    .foto-swiper {
      width: 1000px;
      max-width: 1000px;
      border-radius: 20px;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      display: block;
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
      background-color: #bfc6cf;
      margin: 0 4px;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      width: 28px;
      background-color: #6b7280;
    }
    .navbar-nav a{
      padding-right: 3%;
      padding-top: 0.5rem;
      font-size: 0.900rem;
      font-weight: bold;
    }
    .navbar{
      margin: 5px 0;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-2">
    <div class="container p-myskill">
      <a class="navbar-brand fw-italic fs-5 myskill p-3" href="#">MySkill</a>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
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

  <!-- Carousel -->
  <section class="section-slider">
    <div class="container carousel px-2">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmain.3d8b87dd.png&w=1920&q=75" class="foto-swiper" alt="slide 1">
          </div>
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fexperience.d223655f.png&w=1920&q=75" class="foto-swiper" alt="slide 1">
          </div>
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Felearning.361e0ab6.png&w=3840&q=75" class="foto-swiper" alt="slide 2">
          </div>
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fbootcamp.80c09686.png&w=3840&q=75" class="foto-swiper" alt="slide 2">
          </div>
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Freview-cv.58ab08f8.png&w=1920&q=75" class="foto-swiper" alt="slide 2">
          </div>
          <div class="swiper-slide">
            <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcorporate-training.808fda14.png&w=1920&q=75" class="foto-swiper" alt="slide 2">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Floating Button -->
  <a href="#" class="btn btn-success position-fixed bottom-0 end-0 m-4 rounded-pill shadow d-flex align-items-center">
    <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="me-2" />
    WhatsApp
  </a>

  <!-- Scripts -->
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

</body>
</html>
