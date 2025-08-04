<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Online Learning Palcomtech</title>
  <link rel="icon" href="{{url("https://online.palcomtech.ac.id/public/uploads/main/files/13-06-2025/images (1).jpg")}}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- SwiperJS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">

  {{-- cdn ajax Jquery --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>

    /* Menu Atas start */

    ::-webkit-scrollbar{
  display:none;
}
    /* style reload */

    .reload-wrapper {
    display: flex;
    flex-direction: column;
    height: 100vh;         
    cursor: pointer;
  }
    .reload-container {
    text-align: center;
    margin-top: 40px;
    margin-left:400px;
  }

  .reload-image {
    width: 80px;
    animation: spin 2s linear infinite;
  }

  .reload-text {
    margin-top: 10px;
    color: #333;
    font-weight: bold;
    cursor: pointer;
  }

  .reload-text span {
    color: #007bff;
    /* text-decoration: underline; */
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
    body {
      background-color: #fdfeff;
      font-family: 'Public Sans', 'Montserrat', sans-serif;
    }

    .active-tab {
    background-color: rgb(45, 67, 100);
    color: white;
  }
  
  .program-tab {
    transition: all 0.3s ease;
    color:white;
  }
  
  .program-tab:hover {
    background-color: #000000;
  }

    .navbar {
      background-color: #d6dadf;
      white-space: nowrap;
      width: auto;
    }

    .program-btn {
    background-color: #EEEFE0;
    border-radius: 100px;
    transition: all 0.2s ease-in-out;
  }

  .program-btn.active-program {
    background-color: rgb(45, 67, 100) !important;
  }

  .kategori-tabs{
    background-color:grey:
  }

  .program-btn.active-program .card-text {
    color: white;
  }

    .navbar-container {
    display: flex;
    align-items: center;
}
.navbar-brand {
    padding: 0;
    margin: 0;
}

.kategori-tab.active{
  background-color: #34699A;
   border-color: #34699A;
   color:white; 
}

.kategori-tab{
  /* background-color: rgb(207, 209, 209); */
  border: 1px solid #06989A;
  color:black;
  color: #34699A;
  border-radius: 10px;

}

.kategori-tab:hover{
  background-color: #34699A;
  color:#ffffff;

}

    .logo-img {
    height: 35px; /* Sesuaikan tinggi logo */
    width: auto;
    max-width: 90%;
    transition: all 0.3s ease;
}

    /* Awal: warna solid */
    .navbar-solid {
      background-color: #d6dadf !important;
      transition: background-color 0.4s ease, box-shadow 0.4s ease;
    }

    /* Setelah scroll: transparan dan blur */
    .navbar-transparent {
      background-color: rgb(255, 255, 255) !important;
      backdrop-filter: blur(20px);
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
      /* background-color: #057c7e; */
      background-color: #e6fafa;
      border: 1px solid #06989A;
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


    .myskill{
      padding-left: 20px;
      padding-top: 10px;
      font-size: 1.5rem;
    }
  .skeleton-card {
    min-width: 120px;
    background-color: #e0e0e0;
    border-radius: 8px;
    padding: 10px;
  }

  /* Skeleton background + animation */
  .skeleton-slide {
    width: 1000px;
    max-width: 100%;
    height: 300px;
    background: linear-gradient(90deg, #e0e0e0 25%, #f2f2f2 50%, #e0e0e0 75%);
    background-size: 200% 100%;
    animation: skeleton-loading 1.5s infinite;
    border-radius: 20px;
    margin-top: 6%;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
  }

  @keyframes skeleton-loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
  }

  .swiper-slide {
    width: auto;
    flex-shrink: 0;
    width: 1000px;
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

  .placeholder {
    background-color: #ddd;
    border-radius: 4px;
  }

  .placeholder-glow .placeholder {
    animation: glow 1.5s infinite ease-in-out;
  }

  @keyframes glow {
    0% { opacity: 0.4; }
    50% { opacity: 1; }
    100% { opacity: 0.4; }
  }

    .navbar-nav {
      margin-left: 11%;
    }
    .navbar-nav a {
      font-size: 0.90rem;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
  position: relative;
  padding-bottom: 5px;
  transition: color 0.3s;
}

.navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  background-color: #34699A;
  transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover::after {
  width: 100%;
}

    .navbar-collapse {
  margin-left: -5px;
}

    ul.navbar-nav {
      padding-left: 8%;
    }

    .p-myskill {
      padding-left: 2px;
    }

    .home {
      color: #34699A;
    }

    /* Menu Atas end */
    
    /* FAQ Style Start */

    .accordion-item {
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 10px;
      /* box-shadow: 0 2px 8px rgba(0,0,0,0.05); */
    }

    .accordion-button {
      border-radius: 10px 10px 0 0;
    }

    .accordion-body {
      background-color: #f9f9f9;
    }

    /* FAQ Style Start */


    /* Slider start */

    .skeleton-slider{
      background-color: #d6dadf;
      border-bottom-left-radius: 75px;
      border-bottom-right-radius: 75px;
      padding: 50px;
      padding-top: 25px;
      height: 600px;
    }

    .section-slider {
      background-color: #d6dadf;
      border-bottom-left-radius: 75px;
      border-bottom-right-radius: 75px;
      padding: 50px;
      padding-top: 25px;
      height: 600px;
    }

    .swiper-slide {
      width: auto;
      flex-shrink: 0;
      width: 1000px;
    }

    .container.carousel {
      padding-right: 30px; 
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

    /* Slider end */

    /* CTA Atas start */

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

    /* CTA Bawah start */
    .btn-program{
      width: 190px;
    }

    /* Footer Styles */
footer {
  color: #212529;
  font-size: 0.9rem;
}

footer h3, footer h5, footer h6 {
  color: #34699A;
}

footer a {
  transition: color 0.3s;
}

footer a:hover {
  color: #057c7e;
}

/* animasi sponsor */

.logo-track {
  animation: scroll 20s linear infinite;
  width: max-content;
}

.logo-group {
  display: flex;
  gap: 4rem;
  padding: 2rem;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%); 
  }
}

/* animasi partner */
.partner-track {
  animation: scroll 20s linear infinite;
  width: max-content;
}

.partner-group {
  display: flex;
  gap: 4rem;
  padding: 2rem;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

    /* Responsif ukuran 770 */

    @media (max-width: 770px) {
      .navbar-nav{
        margin-left:0;
      }
      .swiper-slide {
        width: 100%;
        margin: auto;
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
        height: 500px;

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

      .testimoni{
        max-width: 8rem;
      }

      .testimoni-gap {
        gap:0;
      }

      .cta1-container{
        max-width: 80%;
      }
       .cta1 {
        width: 32% !important;
        min-width: unset !important;
        }
        .cta1-img{
          width:70px;
          height:70px;
        }
  
        .cta-h6{
          font-size: 0.6rem !important;
          white-space: normal;  
        }
    }
    
    /* Responsif untuk ukuran hp sedang */

    @media (max-width: 576px) 
    {

      .container-footer{
        margin-top: -300px !important;  
        max-height: 100% !important;
      }

      .faq-container{
        position: relative;
        top:-270px;
      }

      .partner-group{
        position: relative;
        top:-50px;
      }
      .logo-group{
        position: relative;
        top:-30px;
      }

      .container-sp{
        position: relative;
        top:-100px;
      }

      .container-foto-partner {
        position: relative;
        top: -50px; 
        margin-bottom: -30px;
      }
      .container-partner{
        position: relative;
        top: -50px; 
      }
      .container-foto-prestasi{
        position: relative;
        top: -110px; 
        margin-bottom: -30px; 
      }
      img.prestasi img{
        max-width: 2rem;
      }
      .partner-group img{
        max-width: 6rem;
      }
      .logo-group img{
        max-width: 6rem;
      }
      .reload-container {
        text-align: center;
        margin-top: 60px;
        margin-left:20px; 
  }
      .instruktur-card {
        transform: scale(0.88);         
        transform-origin: top left;     
        margin-right: -6px !important;  
        margin-left: 0 !important;
        padding: 0 !important;
  }

  .img-instruktur {
    height: 160px !important;
    gap: 0 !important;       
  }
  
  #instruktur-container {
    gap: 0 !important;              
  }
  
  .card.border-0 {
    transform: scale(0.88);               
    width: 210px !important;              
    margin-right: 6px !important;         
    margin-left: 0 !important;
  }
  
  .card.border-0 .card-body {
    padding: 0.75rem !important;          
  }
  
  .card.border-0 img {
    height: 160px !important;             
  }
  .berita-cards {
    width: 13rem !important;      
    transform: scale(0.95);      
    margin-right: 0 !important;
    height:10rem;
    padding-top:0 !important;   
  }
  
  .berita-cards img {
    max-height: 90px !important;  
  }

  .berita-cards .card-text {
    font-size: 11px !important;   
    -webkit-line-clamp: 2;        
  }
  
  .berita-cards .card-body,
  .berita-cards .p-2 {
    padding: 0.5rem !important;
  }
  
  .program-card {
  min-width: 200px;
  max-width: 240px;
  flex: 0 0 auto;
}

  
  .program-gap {
    gap: 0 !important; 
    }

      .testimoni{
        max-width: 8rem;
      }

      .testimoni-gap {
        gap:0;
      }

      .cta1 {
      width: 31.7% !important;       
      min-width: 24% !important;
      transform: none !important;  
      margin: 0 2px !important;
    }
  
  .cta1-img {
    height: 55px !important;
  }
  
  .cta-h6 {
    font-size: 0.75rem !important;
  }
  
  .cta-font p {
    font-size: 0.65rem !important;
  }
  
  .navbar-nav{
    margin-left:0;
  }
  .swiper-slide {
    padding-top: 12%;
  }
  .section-slider {
    height: 420px;
  }
  .swiper-slide{
    padding-top: 13%;
  }
  
  .navbar-solid {
    transition: transform 0.3s ease-in-out;
  }
  
  .navbar-hide {
    transform: translateY(-100%);
  }
  
}

    /* Untuk tablet (768px - 1024px) */
@media (min-width: 768px) and (max-width: 1024px) {

  
  /* Navbar container */
  
  .navbar {
    padding: 0.5rem 1rem;
  }
  
  /* Logo */
  .myskill {
    font-size: 1.3rem;
    padding-left: 15px;
    padding-top: 8px;
  }
  
  /* Menu items */
  .navbar-nav{
        margin-left:0;
      }
  
  .navbar-nav a {
    font-size: 0.8rem;
    padding: 0.3rem 0.7rem;
  }
  
  /* Tombol */
  .btn-masuk, .btn-daftar {
    width: 60px;
    font-size: 0.75rem;
    padding: 0.25rem;
  }
  
  /* Penyesuaian layout */
  .navbar-collapse {
    margin-left: -10px;
  }
  
  /* Spasi antar item menu */
  .nav-item {
    margin: 0 0.3rem;
  }
}


  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-solid" id="mainNavbar">

  <div class="container sm:px-1 px-2 justify-content-between"  style="margin-top:10px;">

    <!-- Hamburger Toggle Button -->
      <button class="navbar-toggler me-lg-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="#">
            <img src="{{ url('https://online.palcomtech.ac.id/public/uploads/main/files/18-07-2025/logo_palcom-removebg-preview.png') }}" alt="Logo" class="logo-img">
        </a>

    <!-- Tombol Masuk & Daftar di Sebelah Hamburger -->
    <div class="d-flex align-items-left order-lg-2 ms-auto me-2">
      <a class="btn btn-sm btn-masuk me-2" href="https://online.palcomtech.ac.id/login">Masuk</a>
      <a class="btn btn-sm btn-daftar" href="https://online.palcomtech.ac.id/register">Daftar</a>
    </div>
  
    <!-- Collapsible Navbar -->
    <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
      <ul class="navbar-nav"style="" >
        <li class="nav-item mx-2"><a class="nav-link home" href="#">Home</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="https://online.palcomtech.ac.id/courses">Courses</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="https://online.palcomtech.ac.id/classes">Classes</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="https://online.palcomtech.ac.id/quizzes">Quiz</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="https://online.palcomtech.ac.id/instructors">Instructors</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="https://online.palcomtech.ac.id/contact-us">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Carousel ( Gambar dari API )-->
  <section class="section-slider">
    <div class="container carousel">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper" id="slider-container">
          <!-- Slider items will be injected here -->
          {{-- skelton --}}
            <div class="container skeleton">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper" id="slider-container">
                  <div class="swiper-slide">
                    <div class="img"></div>
                  </div>
                  <div class="swiper-pagination">
                </div>
              </div>
            </div>
          </div>
          {{-- skeleton end --}}
        </div>
        <div class="swiper-pagination">
      </div>
    </div>


    <!-- Section CTA 1-->

        <div class="container text-center">
          <h1 class="fw-bold mb-4" style="font-size:24px; color:#212b36;">Rintis Karir Bersama Palcomtech</h1>
        </div>

        <div class="container px-0">
          <div class="cards-wrapper d-flex justify-content-center">
            <div class="cards-scroller cta1-container d-flex flex-row flex-nowrap overflow-x-auto py-3" style="gap:3px; -webkit-overflow-scrolling: touch; max-width: 100%; scrollbar-color:transparent transparent;" id="cta-container">
              {{-- data cta dari API --}}
            </div>
          </div>
        </div>


        <!-- Section cTA 2 / testimoni-->
          <div class="container text-center">
            <h1 class="mb-4 mt-3 pt-4" style="font-size:24px; font-weight:bold; font-height:36px;">Terbukti Berdampak dan Membuka Batasan</h2>
          </div>

          <div class="container container-cta2">
            <div class="d-flex testimoni-gap flex-row flex-nowrap overflow-auto pb-3" style="scrollbar-color:transparent transparent;" id="testimoni-container">
              {{-- data dari API --}}
              <div class="container-skeleton" style="width:100px; background-color:#000000; display:flex; justify-content-center; align-items:center; ">
          </div>
            </div>
          </div>

              <!-- Program E-learning start -->
          <div class="container text-center">
              <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Berikut Program Palcomtech</h3>
          </div>

{{-- kategori--}}
<div class="container mb-3">

  <!-- Kategori Tabs Scrollable -->
<div id="kategori-tabs-wrapper" class="overflow-auto mb-4" style="white-space: nowrap; scrollbar-color: transparent transparent; background-color:">
  <div id="kategori-tabs" class="d-inline-flex flex-row gap-2 kategories">
    <!-- Button akan dimasukkan ke sini -->
  </div>
</div>


  <!-- Scrollable horizontal cards -->
<div id="program-content" 
     class="d-flex flex-row flex-nowrap overflow-auto gap-2 mb-3" 
     style="scrollbar-color: transparent transparent;">

  <!-- Skeleton loading -->
  <div id="loading-indicator"></div>

  <!-- Tempat kartu program -->
  <div id="program-cards" class="d-flex flex-row flex-nowrap overflow-auto" style="gap: 16px; padding: 16px;"></div>
</div>


              <!-- CTA Bawah Start-->

          <div class="container text-center">
            <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Berita kegiatan</h3>
          </div>

    {{-- berita --}}
    <div class="container" >
  <div class="d-flex flex-row flex-nowrap gap-2 overflow-x-auto pb-3 align-items-stretch px-3" style="scrollbar-color:transparent transparent;" id="container-berita">
    
  </div>
</div>

    <!-- tampilan Instruktur-->

    <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Belajar Bareng Instruktur Yang berpengalaman</h3>
    </div>

   <div class="container">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-x-auto pb-3 px-3" style="scrollbar-color:transparent transparent;" id="instruktur-container">
    <div class="container">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-x-auto pb-3 px-3" id="instruktur-container">
    <!-- Skeleton Loading -->
  </div>
</div>
    {{-- data instrutur dari API --}}
  </div>
</div>  

    {{-- Prestasi --}}

    {{-- <div class="container text-center prestasi-container">
    </div> --}}
    
    <div class="container container-foto-prestasi">
      <h3 class="fw-bold mt-3 pt-5 text-center" style="font-size:24px;">Prestasi Palcomtech</h3>
      <div class="d-flex flex-row flex-nowrap overflow-x-auto pb-3 px-3 " style="scrollbar-color:transparent transparent;" id="prestasi-container">
    {{-- data prestasi dari API --}}
  </div>
</div>

{{-- sponsor --}}
<div class="container-sp">

  <h3 class="fw-bold text-center mb-1 container-sponsor" style="font-size:22px; margin-top: 0; margin-bottom: 0.5rem;">Sponsor</h3>
  
  <div class="container-foto-sponsor" style="display: flex; justify-content: center; width: 100%; padding: 0.5rem 0 0 0;">
    <div class="logo-container" style="overflow: hidden; max-width: 1200px; width: 100%; margin: 0 auto; position: relative;">
      <div class="logo-track" style="display: flex;">
        <div class="logo-group" id="sponsor-container">
          {{-- data dari sponsor dari API --}}
        </div>
      </div>
    </div>
  </div>


{{-- partner --}}

  <h3 class="w-bold text-center mb-1 container-partner" style="font-size:22px; margin-top: 0; margin-bottom: 0.5rem;">Partner</h3>

<div class="container-foto-partner" style="display: flex; justify-content: center; width: 100%; padding: 2rem 0; border-radius: 15px;">
  <div class="partner-container" style="overflow: hidden; max-width: 1200px; width: 100%; margin: 0 auto; position: relative;">
    <div class="partner-track" style="display: flex; width: max-content;">
      <div class="partner-group" style="display: flex; gap: 3rem; padding: 2rem;" id="partner-container">
        {{-- data partner dari API --}}
      </div>
    </div>
  </div>
</div>

</div>
    {{-- FAQ Start --}}

     <div class="container my-5 faq-container">
  <h3 class="fw-bold mt-3 pt-5 text-center" style="font-size:24px;">Yang Sering Ditanyakan</h3>

  <div class="accordion ms-4" id="faqAccordion" style="border: none;">
    <div class="accordion-item" id="faq-container" style="border: none;">
        {{-- data FAQ dari API --}}
      </div>
  </div>
</div>

<div class="container-footer">

    <div class="footerLine" style="height: 1px; background:#ccc; width:100%; margin:100px 0;"></div>


<!-- Footer -->
<footer class=" py-4" style="font-size: 0.85rem; inline">
  <div class="container">
    <div class="row ms-lg-3 ms-md-2">
      
      <div class="col-md-4 mb-4 ps-lg-4" id="footer-info">
        <!-- Palcomtech Info -->
        <h5 class="fw-bold mb-2"><img src="{{ url('https://online.palcomtech.ac.id/public/uploads/main/files/18-07-2025/logo_palcom-removebg-preview.png') }}" alt="" srcset="" style="width:100px;"></h5>
        <p class="small">Rintis Karir Impian bersama Palcomtech</p>

        <!-- Company Info -->
        <div class="mt-4">
          <h6 class="fw-bold mb-2">Online Palcomtech</h6>
          <p class="mb-1 small">Jl. Jend. Sudirman No.3007</p>
          <p class="mb-1 small">Kel. 20 Ilir D. III, Kec. Ilir Tim. I,  Kota Palembang. Sumatera Selatan</p>
          <p class="mb-1 small">Prov. Sumatera Selatan, 30121</p>
          <p class="small">082177980624</p>
        </div>
      </div>

      <div class="col-md-8 ps-lg-3">
        <div class="row">
          
          <div class="col-4">
            <h6 class="fw-bold mb-2 small " style="padding-top:35%;">PRODUK</h6>
            <ul class="list-unstyled small">
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">E-learning</a></li>
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">Bootcamp & Program</a></li>
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">Corporate Service</a></li>
            </ul>
          </div>
          
          <div class="col-4">
            <h6 class="fw-bold mb-2 small" style="padding-top:35%;">LAINNYA</h6>
            <ul class="list-unstyled small">
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">FAQ</a></li>
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">Syarat dan Ketentuan</a></li>
              <li class="mb-1"><a href="#" class="text-decoration-none text-dark">Ketentuan Privasi</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
  <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 p-2 rounded">
    <img src="data:image/webp;base64,UklGRmwFAABXRUJQVlA4IGAFAADwIACdASqlALQAPp1Inkylo6KiJHOaULATiWVu3TZsIP+8bsgbmEBtivMV9s3vHejL0AP2S6wz0JfLd9lL9vf3A9pnVXvJvZb/jMfF2/ipnF7j6TZyizNvHX9S+jd1ov2j9in9oCTDJ3ExGPohAKYdxIXPdlCg6+9zxwsFd2/B98KZs5Ohhpjv79/WigtZL48/JGRqRGTmiC3TjqVqfr887ELqeVmEU7FZ3cbcgdZQ+Z1vkHrzeedlF4VnOwHrfl4xL/CmZgcnZyuDCBv3odvyVPUDRnpDXEX99eSdH81zlp6aP5u8v5MmwKUSth6XmxX0BzYlMqrEdTcUtfkwbKa0nE7yYZXhk7iYjH0QgFMLwAD++l4AAI2mWWTZT0xqQ/LeeQCRiKtcXIBR+oPwBqPejt/eDgspRI87E6OVvkZds/7KFrDsmS4IOTshgLipTNBtD/5I1I44ATGZnsRY/cxo0D14UyPcoknBSD5Te7TKPx56Zi/HA6/7eiq244bqFXmQpIGw9L/yz/6Cx1voU363hUZWsKx7QcySnth21jYgnhT+M25gHe/HHW6xmzv4dyVkbsA1rU/Vxf5nIdZxqV+Qr//diisCH8GyvwbFvKC9Y4v6BGsMNu4Xe9eyX3dCCjo7Hm2zUuTwka/t0/AF2Bq+nTvtJ7JeXx2Yl1pOHLQXohbYw/A2lXB9iKgud4nt0tP3tmJ6FHLcKx7PRT1kSa1j2R4sGKH3oAq7kw2s42jFJcYugb/buhlf/LrfUrInOJ2Y18CL+GRvTJ7WPV+dnuRy4kt88ccfEbv9UZzlUKjY3+Jur5blT3Jn8onzgsyoAaEK7QAfO1y1Nm1aJOYrSJ6rQAkt3UYZp7mou7fuYEd6P0SNYuGrJlRb81F4q1/zCaMP/DNvstJ3/dkJfYczYGFSEOO36GSt5tLCh9APS59d5qoqb0hHbldEvuBZ0oqfAgAsTRjuXF5p0p7LOVnUGi7qYhAbb0DJBiJ3QAlqgyIVbmfdvMAKWV8NET/PeQqeB7vqj+Q56bbhHulIpxay58xS8bC66TPbCB1WRVSdDhVQtvpEbJFlUy5iKB7X9Fii8Mfr1PZ3Lh/g+gb4AOKQ+Op1kQ+oLjH24qQx8nQfe0kHg0ZOLWTaaH8xCv8y0wx6RkELuSm4jjro2ziBHexaTJ8w5o0+lPu5tmo4yvlrW29Lz/R6ZRBCWbnksLE0m3n/0v9+5mcQe8X/UokvISiVc5fQycrK3EZNlnzRMWOJyRU0YZin7Wkyu4AocWPdOtujsHEM7KbvhLcbnZBTxsallESbSkfRsqcSI5kX/mjsgea27AUyDf0ZzRehd7PpSphQQj699faHWLF3QL01c3Sy542no7jzNgXrt1LhU0cYL7tIq/2b10agewgPR1zd56Js6AyXuz+c5xXMmUBjkKfrxV2NPfbph/GqDozvgBlEZHictt7kYcUWH40M+Z301pxUjztbvAD/tzi0BehR916l6UdjJlC7seJxrRqTL+PMknF3jlbwSfOsTgJSNz5dzngxfXQgXK+k+CdEN+de5eBv2swrRSwNBgD5cMYQiUVQDNj2GRHpEWZkEi60qbcC2nK+EyRV/q45Yt9WibU3jP4nOv/21zaPkPskLNK/VezS5z1nDoYT9/XH+6Wq5abfLUpTM039QJE5/Iwiz1ycPh5XRbjJfwGGakyXeMKniIhj4Iu1PUyzjXR3C71ITf7yYWTGHNSTwClDplfHGbAJGI3DgOlom24bw+ASdU9+9L2SL4uVuRD+myuSn3ReKrCmVfDkjRdBEWvchDX5tJ34akjoLOCo8leO7jOIqfNjwAAAAAAAAA==" alt="OVO" class="img-fluid" style="height: 40px;">
    <img src="data:image/webp;base64,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" alt="Gopay" class="img-fluid" style="height: 40px;">
    <img src="https://th.bing.com/th/id/OIP.ZweGejPwbT5wwshQ2-8qUQHaHa?w=187&h=187&c=7&r=0&o=7&pid=1.7&rm=3" alt="Gopay" class="img-fluid" style="height: 40px;">
    <img src="data:image/webp;base64,UklGRgQEAABXRUJQVlA4IPgDAABQHgCdASqzALQAPp1KoUylpCOiIzN5eLATiWNu4W5xA1a6vL2XlNuVfiPDqHX7NMY3qI/MfsAc4rzAecB6APOz6in0APLb9nrIV/MD6c9EapiZ35LXyH6k+wB+lYzBJaFsqstC2VWWhbKll6SgHkjBka+9X/vA+tsgPk/6xqFxQmdrObvpP14aLfBt5ZGtTzafg4qNAAPXt13tUDEEzlZ+N00KpBIchS4/ITE40YYdbs3iGjZ7GAqtzk1CaGhh3xKeLzzuqXpaQsj0iIWojAyONKMQibiYhSHg49T7DOtzV7F0xy7MvWjwsqstDCebCyqy0LZVZaFsqssgAAD+/lYQAB+y7SbO7rA/SuTphyhlyIpKNyCFAJk6qAQgkEiFTo8re/OEVcRJ5gtq9p4f+/FWdD4qNO8UoJxKPmRLFfkPZIK/vegqMmf5AMG3OQI3DRuCyBsrQbZNP8dHEjdvX9Soo+9G7O16JyhaK3WhN1oQAbkHqpkSyBfefawlPjxqEI6I4KwlhsZ7//HAEoehJy/Pfv6ypO6rx621T3nnnxFHurNnSqgpfC8ZjznVYSttvJjLUl8hKilKcIdFvvkp15KFneF3pdAs4kOpGsRY1XD/xOU5z/7qAg9Aywrnn6Xn9U3hlthN1+LH//BGDsMKsjAODvSA+LpQmGZDgtlPILRAaHoC4Etg3lfPqfHJkBAxk/QvWCzeXDfsp94YoGG7/8p7JmLqfn/4J9wfCKthJvL4UTNLX5kVEBxM15YJEHgZsxBqHl3aNB0HPTpSeHI47FlqXYuyuwNjX3m96iG84OIfwf4qYlddUnKm5WapffpmuhFunubkqZMSOqe1lpmMzfKyQEn54Cn43YzTl1MfcCzYbNZoihHy+rrO5vMyzBqqM3ao8lUewvqr17ql+PhqGpJ7tdzg5xi6xWO7MJtDEAgsIpWsIGUAW1DsHHl/1UKJqKf3QE4NbXDMR8rVej2QP4DC8K4IJlZu8NPksDgyyNph9T+ASTNoqr8nxF3qvLdWF672usnl0KnY7shSr1gdFJyOmkaJFV4a5GBVd8iPOBwHO9etgisULfc+nDHuQ6shNiJWa6hM6/+KKCInprPALsfw9I0Jr2wl8ipwN+yKHfNIpc/Q7ZVOKvkiK3xmBKg5+sX4zlL8cNHSEPVR8PT2bD/sCvmIvhVEe/lpoDYnZk9+UVaeOsK20I3D5noXY04Ew9SDl6kShHaK4DIHYCEpgjBaInEj7FXprCQsGLfVv18b/B33eIdT9r95SS/sUrFDSzWpxPHfU/QKs1kVZmyeE2wxrLTlbNKjKDriDOYZs8A+QGFmsBBNyGN40ll5+6YQb0WDnrwAAAAAAA==" alt="Gopay" class="img-fluid" style="height: 40px;">
    <!-- Tambahkan lagi sesuai kebutuhan -->
  </div>
</div>

    <div class="container my-4">
      <p class="fw-bold mb-3 ps-lg-3" style="font-size:13px; padding-left:4px;">
          Metode Pembayaran
      </p>
      <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 p-2 rounded">
      <img src="https://th.bing.com/th/id/OIP.hg6Vvx7_DxWXXuo5_k8i1AHaHZ?w=163&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="OVO" class="img-fluid" style="height: 40px;">
      <img src="https://th.bing.com/th/id/OIP.WQvSeetcSPWj-U4EqDmSBgHaEK?w=322&h=181&c=7&r=0&o=7&pid=1.7&rm=3" alt="Gopay" class="img-fluid" style="height: 40px;">
      <img src="data:image/webp;base64, UklGRmwFAABXRUJQVlA4IGAFAAAQJACdASoFAbQAPp1OoE0lpCMiJDWIOLATiWNu4XShGpH65/ifOkqr9W3fCePMI5K/ 339k6g/5d9gD9bukL5gPNQ/vn7Ve83+9ei9/les49CDpd/3FYb42mWzpgGjA6U/J+T8n5Pyfk/J+T8n5Pyfk/J+T8n5Pyfk/J  +T8n5PxMBAfflM55OgBGAOqoWBn5PyfA92fSovyf9qKHuYxShZ2P6hV69PeXJZaH8ydobt71Ba8sHYCH87veCZ1JhGHIv +6KauSlB5zj2a7to1aztTwOPiecTAbElLoJXBBWtOiiM2RswwcssvviJTRpGM2NjWi9e0kzlgKwEm3PeIVLfcMVgjyo0DYE8n  5QNhYdBPyfk/J+T8n5Pyfk/J+T8n5Pyfk/J+T8n5Pw4AA/v9noAAAFeTjZx32cdKssxguk/ pkuKMlABZgFXZmPJSFmPrIucBbqbQh30psmgzeIhB1AvsvnVBGo8y1vxO3UzvTpUKij1lPhFP4enDj2BmG5C3glBop4YjDiWa  v2s5z7tUELMAwuef/q8AK5WmhV7hFC3l9kBGYbsrt6VJ7xOsbvs/nTGX73zZso9dQJzUyvYgGFMPVIuwmT3kjDxdYXX6Q/  a4dZQCoejY4IjxXrEuiZ2qqXFGS/nvj/jkTtVoE1FA1Rzrf +2w56mAhOLrb8fViYydMKn6QAYPdKduaDIkFYZQelxslD8MmJ3iYOh8AuFTQjxap52LaWOnCurKWgloDygwQFkXX5D5SsbKxX  RUJ//pPxtCx78bfaEDkjeAmee4fFuMZxkkB4j21ooMxxDpehmTu+0ozuLLidC2hsmzMm74xp/TjNoaNVaDKB93EDATrF/ Zuk9vWFgNg8wPfpTcjdKEggw3O7V3NWtIKjOhPVSCE9yFpCAKYLIwpL7gWMmgnNva3I6UPpWjbc0GtQG+xuZ6lGbbj +Jh1E5s4900mNf9kF84MtTNvnY8MowHBFhz0FDJgS+aWEyp8lQ5046YuyHSIJ5WNRqjpfBpDqUOdfJ3Esvzodpeyw3Y+v6Sy +jaymGVZ9ULyzB8ZLWeL08iEkmmdRceVhrdA77PmazEShMfGFnz81HcDc8KCURR0TFLDp4QPASRvkWWYJ6vTYWR5WjbYPWMSr  JIfzTdSkkWuiskFAqFPyBCmdGvkOVfQTYV18VQU5jk4RvSDAmB9E5+75KvoxcpuNPTuhJIAOY4JP  +BMscqzZmQFB5RI4iunTjxcYtsTSiLSDP0tejqTwMaXpt4NcTLMnEm/ 49RD1UCYQYHc3apnv9EQ0pDz4VjCxya8df8bTWruQmCjjmiejiujDqGsshIMxSWT8  +yKoF8rxMvlTSuJkA9GFl4ttaAnYXrZxaQTfJ/OCeHYMIyBHXk9aOZkbhWnoBK9emt65Kirymn6L45TcTuahc/x1U0ZdVk/ TVefMDaR7T76hPXcJ+Nc5SzRF1CnV52BKeHLsAfiIq +IB4Iti56vnwd2CsvwAmx4jHGWLiySXJzUdcBGOQz1oI8ux5lRmF2cxWa1OmuxuL8JAFybb3mttoyZ6ep1l6/  O7xelhfrSyvu/r6+64BetSr+0SaXOrOO8tYAd5cm5gnY78R8nKS8FuDC4Xrpkh8OTZeeyItCaxobFJPlsZFm9v  +EvVwa5lbjfH8TlhNDkZk8Ob4FX2WEf4HZicuM3mfBvaWlL3cGT34Cx1DNucXxgEOwBXZoWHrrPkZcfsEWP4Kx0cQsF/  6KqUld3bvPX7FkP1njHpKg4Fw01ilQB4  +FkkdvZZdaLBetjgWgOJcUWC6z51oqGCHmHqo2xtxRSNdw5khMRWbkAMwl8BgAAAAAAAAAAAA==" alt="Dana"   class="img-fluid" style="height: 40px;">
      <img src="https://th.bing.com/th/id/OIP.z9vHG9zxjmluzpHAJ68U1gHaHa?w=175&h=180&c=7&r=0&o=7&pid=1. 7&rm=3" alt="ShopeePay" class="img-fluid" style="height: 40px;">
      <img src="data:image/webp;base64, UklGRvgHAABXRUJQVlA4IOwHAABwKQCdASqyALQAPp1OokylpCMiI9S4wLATiWNu4XKL6tiyq  ++d816wO4tzkRgOz3JL6gP0F7AHOO8wHnG/2b1L/2z0oOo59Brpcv7XgmH9d7aP9NytUs/uCv7/2nkj/  oPAH1AeTvdgQAfmfCLpRP2b/VewB+c/Pr/6/Kb+ef6H2Dv5n5zvsS/aH2Q/ 2ZV4xPGJ4xPGJ4xPGJ4xPGJ4xPGJ4xPGIk2pc60rfGSAH1MFylegsAEk7rQErrSQlxP0UH3v1  +XYpMKyn59seD6j1TJs4PQAC6lgyeuVQ1i0coKdxX5i5uJRHJY  +v6hlHesLw1hvbaiSY5roHtpfhHFYvypiULHnAdcTQGeii9xsVs0qEycKGUzHeqjBXsu1m4lz +INYrbSqRefZda55cZyAur4kMLaB+7TZnjBTah5TL+ZfzL+ZfzL+ZfzL+ZfzL+ZfzL+ZfwQAAP7/ ZNAAA4dy3YjWoHKBDtPDUh/Go0X0aaYwWTSUHp89wqxPU7TBhLIAMer28SdkNWyNbtyLliSVuXVJ7v6u+Hx5APwJd7klVRMp/  Ohxq7m+zLDOMr/qccwmOMSgcFEbV6f/cZQz4lWWiz +86RTQmSc7aVRrCZEZmZ33GdiFV0vtkesXkk39TWYZIDkZs8JFKkUfUoemSbdpeYmSNMpPGvDk5oFri1+u/  wuN4gWHk8TfzxrRo/f71bqT+/3pDaV0KKR/iueIR3DiHq6TB/PaNMvyM2ExQQXAelENNo9cWfU5Iihqlob0/  Hmb9RyfVexinYjZvcd4IgZrard0800stRBGwA9gPGXGQbQ52cGCe40u94iCM3J5CbzZPu/  mCxOzJO7MqUZlmS2OBz2tsldTYKM/vQZ0ckTDJDWlKeNG9wgLkHnrc+TzgWDWmhjR+wjXn/Rbd  +CcN5xeZDX2Rh1h0OgMxByduiX  +lQnFNmLX6R330uMebrJGDtQfNHjxovbOVPyOZ9WCzak5iueyFklXRkH69vB4ismmQ70AzJ55aGHCyWWvwrAvgHPWlPNQC09U JMj28Gl2EhJGsqp9KHV4JD7ED1mStaodixbYTHoof3QdUKeI3iBVmLuf+hqyj2vyhemdf6HJdxviPESf1Cq9QPDhr49xyr// IeAuQPgaJ//EzSFJeqYzuF4T+G4/C02yoUUKbWr3L6v/LLRcM75O6j775uzZ/7GJIL+lQDOxbQ+aDq1z+z/  LEq333ldLarD153F37X6M8474mCYnw9PMd0PFyphPjoU  +nORbZOnRyTSNS8S4XtuyDBgruXfPP5gKJIOzkiG3fQRxvYFVXVWK8zyU53NDEz5AMZiQ8iVZHW7SdyBNcEWoMqGWOeeeuPL2 WR7lHH+C8IDkLlvPe8bgXaFUjTnJA3vWNi4u/IdetMBC/wNA7vOrUMJG5NecrvTzFInT/  38qP2vPGS9gZNMURLFzZfeKHnnTBhElAZzIBiM/atluBl5F/8T8bicRsDGp6i7evGYEKHAFJ/rR7kZRAHG4ON/  rCRNMuV9AET/2PD7/t9Nbpi4m19TJbrk5eka1HBFNUJ02+l/1XOTD/  amBy5sAjukDugjkV6jWlK6DSyMXJUk3CJHZbXsIpxPS0JiF3cQ/ UUVdzOtBRnFz5mgHAzUgFGt098YJIoZ9d5GxUINC0K4xdoNz6MqeYyodfcRM7XgOAFl8JeyxR7g/ yKIgeSLzaK85h4H63weO4JwsPzvfykOPrScN +Hz7jIhNV5iPZ5tpYc13QgCGkp95E6Mf3itoqqFxx5u9teUw1gIv8zJn883mmZ4Sud0Vv13YH/+vA+qZcO0QLEv8Lrb  +n49XSbodbaEHlpaIqdcSAvhGEa0kbuIrDs/JrI5giczPZWcFzzKgX5XfhFi5NYYuOK +N5uUhrOwzsGAG2LKHUkKIO7qys8BCwlw/ MoZo217IM1Qc0rbyOT30Uty4VWFFSPkcuhyUwkzOh4FwuemH7fFFfZrf9ZYYgXXQmgYlOa3huWX/ BLqxtzXlnfz2XdPkHkPTE8t7wFw  +8uCqLIsntDr6ICqWPlRSiDwXuvkkVnFfS4N0FCUmceCfg6YJwRiXSt7EQkDXqydkmJhs19uctmAq1WcimPcUx2GC2Njrq6XW vlliu/+HZqDlMf7eR9P7m53SvY/Lyim8kpvF2R02YhVtWsJYCvHtwu43jFXQAHDTX2qb0A6+6HZdPhlz1WA2xFc+05K/ MzwfWE+muhXxNbuxypvmSqZmij8dPgevtoSlfCoMNOurKCa4hbujkBIGc/9sOjXQsuoJ66pDr7MPNFU2 +U6eILuLtiekCiGTW627dpRgLA5BIOrxKCWiY4QCemLFijL+yulwgfFwo84phYCYR60w +VnML7siYPNxI0GGpIC9T7a2D7FRCgHf4DhFsiC3yNUM1VIfXJ4tPkI3lVFIxzt24Xn+7/d6BGNEnIPP1Oz+K8XaT  +LWXHvUK1Gv21EWq+shyFQ9F08MDBSwUMserNpIpU4ZUW676Z7/kxUHaI8pM3TNnJywwmcoIBG6nU8e/7/  2dU4imwLykRzJ7TjGcntUaxjVehVkAyZ5mE4Amp5i435jLW5n+2KzwKnx7RME4WH0Wj7Ao8nyB/ gx20C0yRpTMgsUzbsebDzYnxINbfaH+EbUbuYEjX4H9ar9HLCSp1nttTMwdOCXoigP2f68aX0/FjAI/  pcItafr1lAAAFKfI4AAAAAAAAA=" alt="BCA" class="img-fluid" style="height: 40px;">
      <img src="data:image/webp;base64, UklGRqYDAABXRUJQVlA4IJoDAABQFgCdASqfALQAPp1Mo02lo6MiIbgIkLATiWdu4XPr5DkPar+zG5PUBtj/ MB0DvOA6jzeVvJGo9uPzWl6I3+AnIHkG+qPYK/VDrGBYA2HoKpdVPihZsPQVS6qfFCzYebOF +pEXNyGpb6vjlCqm8aGvZb874IV2AOwz/u5RkWAsGnML6yfcOU6XqlT9bcLwiFaxB3Zq30PhOcJxpF9c/tHdy  +GZTVT5IoVS6qfFCzYegql1U+KFmw9BVLeAAP7/MMAAAoA1Hba9lrjiXPDg7Kn7nV+uPxO/MS+PvbLCqaQmgY2ucBFxQZY0o9 +U8J/ziOyArjN/NyrTBgjGrZ47CG/hPuH4HbZAbWREdx7KFy9o8ZP4HlQcSJYbcv9MvnLn/  baCNrbuv2ciShnid794779jrH567jtpgt1ALO6oIQwweCHc6ae3NSnNddFHsX0DmGuHnQvJZpCxKdZj7Zsn +I3bz6jLer2wVzaExqcYdUNrZfuazT4TRa43FHhgvrn4uDHvf1LYxuHR5lX6uaDBWRnnX6wB/p4Jxv+nbPD/ ou5NZejF4W3KMNtG9BfRIicIEwev8se8t7d1o7Qnz/rS1+0rR35PkBHPZKQ50ek+hOuHl  +kHia0sks6CdjsEeXauyhKkUwBXqF871k1E3jA1UwBvGCtwdqyzY6zteISfPKPU5NSSc9D/PaM/ dsv1vXIhq9PvEAMumb92KA6Nugl2YN99fDHP4ZK9T735UHiVz0ONgUVABZLyPpkGP/Rc9qSOBLGuV7f+05PGyK9B/ITx/9H  +Cb/OfwFKwbZ/iFmfqu20GN0h1Q/WmJN5xP4FrW+cChl6BIr8QvtJAM2shXYbS93p3ez5QDJlVaf3YF8e5oAN90/  z8oMjRZVkL+PjWTGijr3v3ZR+LPhtNdmdRAUaE2R87FV/ltnoMasJKJ0O63yTmRg1FPwWcjOep6v8rwdmEuiLcZ+vMtC/ Er88fMjQAdg7siR3D96sgdT5n5zwnF7sVNbG4+mHujKAKuh+A6wDuikkJd/  f8iVbzR66RkO0wecjDcpXUADFLEpyDHgRgr1e3re++oQDSM6dImxHaRpInFiZ5DOL2HIhHHnd+1qMhhy5dGhIniw39Gsqx2// GdmOW60nNpCnPboEqeN2LucP8dSqpr5O6hROt6Wc9y/8iG16GOprgJ2b4QeO/  vy8bJaN6IT6cq9Ye9snlSgsxwdci7EOyhDM7AAAAAAA" alt="Mandiri" class="img-fluid" style="height: 40px; ">
  </div>
    </div>
  </div>
</footer>
</div>

    {{-- Footer ENd --}}

  </section>

  <!-- WhatsApp Floating Button -->
  <a href="" class="btn btn-success position-fixed bottom-0 end-0 m-4 rounded-pill shadow d-flex align-items-center">
    <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="me-2" />
    WhatsApp
  </a>

  <!-- Scripts swiper.js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  

  {{-- logika navbar hilang di mobile --}}

{{-- <script>
  let lastScroll = 0;
  const navbar = document.getElementById('mainNavbar');
  const mobileBreakpoint = 992; // Sesuaikan dengan breakpoint mobile Anda
  
  window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    const isMobile = window.innerWidth < mobileBreakpoint;
    
    if (isMobile) {
      if (currentScroll <= 0) {
        // Di bagian paling atas - tampilkan navbar
        navbar.classList.remove('navbar-hide');
        return;
      }
      
      if (currentScroll > lastScroll && !navbar.classList.contains('navbar-hide')) {
        // Scroll ke bawah - sembunyikan navbar
        navbar.classList.add('navbar-hide');
      } else if (currentScroll < lastScroll && navbar.classList.contains('navbar-hide')) {
        // Scroll ke atas - tampilkan navbar
        navbar.classList.remove('navbar-hide');
      }
    }
    
    lastScroll = currentScroll;
  });
</script> --}}

{{-- configurasi swiper js --}}
  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 10,
      freeMode: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: false,
        loop: true,
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

{{-- script untuk partner --}}

<script>
  document.addEventListener('DOMContentLoaded', function() {
  const partnerGroup = document.querySelector('.partner-group');
  const partnerTrack = document.querySelector('.partner-track');
  
  // Clone semua item logo untuk seamless looping
  const items = partnerGroup.innerHTML;
  partnerGroup.innerHTML += items;
  
  // Pause animation on hover
  partnerTrack.addEventListener('mouseenter', () => {
    partnerTrack.style.animationPlayState = 'paused';
  });
  
  partnerTrack.addEventListener('mouseleave', () => {
    partnerTrack.style.animationPlayState = 'running';
  });
});
</script>

{{-- scrip dom untuk sponsor --}}

<script>
  document.addEventListener('DOMContentLoaded', function() {
  const partnerGroup = document.querySelector('.logo-group');
  const partnerTrack = document.querySelector('.logo-track');
  
  // Clone semua item logo untuk seamless looping
  const items = partnerGroup.innerHTML;
  partnerGroup.innerHTML += items;
  
  // Pause animation on hover
  partnerTrack.addEventListener('mouseenter', () => {
    partnerTrack.style.animationPlayState = 'paused';
  });
  
  partnerTrack.addEventListener('mouseleave', () => {
    partnerTrack.style.animationPlayState = 'running';
  });
});
</script>


{{-- script untuk api slidder --}}

<script>
  $(document).ready(function() {
    const skeletonCarousel = `
      <div class="container carousel" style="right:100%;">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="slider-container" style="gap: 10px;">
            
            <!-- Skeleton Start -->
            <div class="swiper-slide">
              <div class="skeleton-slide"></div>
            </div>
            <div class="swiper-slide">
              <div class="skeleton-slide"></div>
            </div>
            <div class="swiper-slide">
              <div class="skeleton-slide"></div>
            </div>
            <!-- Skeleton End -->
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    `;
    
    $('#slider-container').append(skeletonCarousel); 
    
    $.ajax({
      url: 'https://online.palcomtech.ac.id/api/custom/slider',
      method: 'GET',
      success: function(response) {
        if (response.data && response.data.length > 0) {
          $('#slider-container').empty();

          response.data.forEach(function(item, index) {
            const slide = `
              <div class="swiper-slide">
                <a href="${item.url}">
                  <img src="${item.image}" class="foto-swiper" alt="slide ${index + 1}">
                </a>
              </div>
            `;
            $('#slider-container').append(slide);
          });
        } else {
          // Data kosong
          showReloadAnimation();
        }
      },
      error: function() {
        // Gagal ambil data
        showReloadAnimation();
      }
    });

    function showReloadAnimation() {
      $('#slider-container').html(`
        <div class="reload-container" onclick="location.reload()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21.5 2v6h-6"/>
  <path d="M21.34 15.57a10 10 0 1 1-.57-8.38"/>
  </svg>
          <p class="reload-text">
            Gagal memuat data. <span>Klik untuk coba lagi</span>
          </p>
        </div>
      `);
    }
  });
</script>

{{-- script untuk API CTA atas --}}

<script>
  $(document).ready(function() {
  const skeletonCTA =`<div class="card shadow-sm flex-shrink-0 mx-1 placeholder-glow" style="width: 13rem; min-width: 10rem;">

  <!-- Gambar Skeleton -->
  <div class="mx-auto d-block mt-3 placeholder" style="height: 80px; width: 80%; border-radius: 8px;"></div>

  <!-- Isi Card -->
  <div class="card-body text-center px-2 py-2">

    <!-- Judul Skeleton -->
    <div class="placeholder mx-auto mb-2" style="height: 16px; width: 60%;"></div>

    <!-- Deskripsi Skeleton -->
    <div class="placeholder mx-auto mb-1" style="height: 12px; width: 80%;"></div>
    <div class="placeholder mx-auto" style="height: 12px; width: 70%;"></div>

  </div>
  </div>`;
  $('#cta-container').html(skeletonCTA.repeat(4)); 
  $.getJSON("https://online.palcomtech.ac.id/api/custom/cta1", function(response) {
    // Mengosongkan kontainer CTA
    $('#cta-container').empty();
    if (response.data && response.data.length > 0) {
      response.data.forEach(function(item) {
        const cta = `
        <div class="card shadow-sm cta1 flex-shrink-0 mx-1" style="width: 13rem; min-width: 10rem;">
          <img src="${item.img}" class="mx-auto d-block cta1-img mt-3 img-fluid" style="height: 80px; object-fit: contain;">
          <div class="card-body text-center px-2 py-2 cta-font">
            <h6 class="card-title mb-1 cta-h6" style="font-size: 0.9rem; white-space: normal;">
              ${item.title}
            </h6>
          </div>
        </div>
        `;
        $('#cta-container').append(cta);
      });
    } 
  });
});
</script>

{{-- script API untuk berita --}}

{{-- <script>
  $(document).ready(function() {
  // Variabel kontrol
  let scrollInterval;
  const scrollSpeed = 2;
  const scrollDelay = 30;
  let isResetting = false;
  let lastScrollY = $(window).scrollTop();
  let scrollDirection = 'none'; // 'up' | 'down' | 'none'
  let lastContainerScrollLeft = 0; // Menyimpan posisi scroll terakhir
  
  // Skeleton loading
  $('#testimoni-container').html(
    `<div class="card placeholder-glow" style="min-width:12rem">
      <div class="placeholder" style="height:200px"></div>
    </div>`.repeat(6)
  );

  // Deteksi arah scroll
  $(window).scroll(function() {
    const currentScrollY = $(this).scrollTop();
    scrollDirection = currentScrollY > lastScrollY ? 'down' : 
                     currentScrollY < lastScrollY ? 'up' : 'none';
    lastScrollY = currentScrollY;
    
    handleAutoScroll();
  });

  function handleAutoScroll() {
    const container = $('#testimoni-container')[0];
    if (!container) return;
    
    // Hentikan scroll sebelumnya
    stopAutoScroll();
    
    // Mulai scroll sesuai arah
    if (scrollDirection === 'down') {
      startAutoScroll('left');
    } else if (scrollDirection === 'up') {
      startAutoScroll('right');
    }
  }

  function startAutoScroll(direction) {
    const container = $('#testimoni-container')[0];
    if (scrollInterval || !container) return;
    
    // Gunakan posisi scroll terakhir jika ada
    if (lastContainerScrollLeft > 0) {
      container.scrollLeft = lastContainerScrollLeft;
    } else {
      // Set posisi awal hanya jika belum pernah discroll
      if (direction === 'left') {
        container.scrollLeft = container.scrollWidth;
      } else {
        container.scrollLeft = 0;
      }
    }
    
    scrollInterval = setInterval(function() {
      if (isResetting) return;
      
      const atLeftEdge = container.scrollLeft <= 10;
      const atRightEdge = container.scrollLeft + container.clientWidth >= container.scrollWidth - 10;
      
      // Simpan posisi scroll terakhir
      lastContainerScrollLeft = container.scrollLeft;
      
      // Logika reset posisi
      if ((direction === 'left' && atLeftEdge) || 
          (direction === 'right' && atRightEdge)) {
        isResetting = true;
        
        const targetPos = direction === 'left' ? container.scrollWidth : 0;
        $(container).animate({ scrollLeft: targetPos }, 800, 'swing', function() {
          isResetting = false;
          lastContainerScrollLeft = container.scrollLeft;
        });
        
      } else {
        // Scroll sesuai arah
        container.scrollLeft += direction === 'left' ? -scrollSpeed : scrollSpeed;
        lastContainerScrollLeft = container.scrollLeft;
      }
    }, scrollDelay);
  }

  function stopAutoScroll() {
    if (scrollInterval) {
      clearInterval(scrollInterval);
      scrollInterval = null;
    }
  }

  // Load data testimoni
  $.getJSON("https://online.palcomtech.ac.id/api/custom/testimoni", function(response) {
    $('#testimoni-container').empty();
    
    response.data.forEach(item => {
      $('#testimoni-container').append(`
        <div class="card" style="min-width:12rem">
          <img src="${item.image}" style="height:200px; object-fit:cover">
        </div>
      `);
    });
  });
});
</script> --}}

{{-- script untuk API testimoni --}}

{{-- <script>
  $(document).ready(function() {
  // Variabel kontrol
  let scrollInterval;
  const scrollSpeed = 2;
  const scrollDelay = 30;
  let isResetting = false;
  let lastScrollY = $(window).scrollTop();
  let scrollDirection = 'none'; // 'up' | 'down' | 'none'
  
  // Skeleton loading
  $('#testimoni-container').html(`
    <div class="card placeholder-glow" style="min-width:12rem">
      <div class="placeholder" style="height:200px"></div>
    </div>`.repeat(6)
  );

  // Deteksi arah scroll
  $(window).scroll(function() {
    const currentScrollY = $(this).scrollTop();
    scrollDirection = currentScrollY > lastScrollY ? 'down' : 
                     currentScrollY < lastScrollY ? 'up' : 'none';
    lastScrollY = currentScrollY;
    
    handleAutoScroll();
  });

  function handleAutoScroll() {
    const container = $('#testimoni-container')[0];
    if (!container) return;
    
    // Hentikan scroll sebelumnya
    stopAutoScroll();
    
    // Mulai scroll sesuai arah
    if (scrollDirection === 'down') {
      startAutoScroll('left');
    } else if (scrollDirection === 'up') {
      startAutoScroll('right');
    }
  }

  function startAutoScroll(direction) {
    const container = $('#testimoni-container')[0];
    if (scrollInterval || !container) return;
    
    // Set posisi awal
    if (direction === 'left') {
      container.scrollLeft = container.scrollWidth;
    } else {
      container.scrollLeft = 0;
    }
    
    scrollInterval = setInterval(function() {
      if (isResetting) return;
      
      const atLeftEdge = container.scrollLeft <= 10;
      const atRightEdge = container.scrollLeft + container.clientWidth >= container.scrollWidth - 10;
      
      // Logika reset posisi
      if ((direction === 'left' && atLeftEdge) || 
          (direction === 'right' && atRightEdge)) {
        isResetting = true;
        
        const targetPos = direction === 'left' ? container.scrollWidth : 0;
        $(container).animate({ scrollLeft: targetPos }, 800, 'swing', function() {
          isResetting = false;
        });
        
      } else {
        // Scroll sesuai arah
        container.scrollLeft += direction === 'left' ? -scrollSpeed : scrollSpeed;
      }
    }, scrollDelay);
  }

  function stopAutoScroll() {
    if (scrollInterval) {
      clearInterval(scrollInterval);
      scrollInterval = null;
    }
  }

  // Load data testimoni
  $.getJSON("", function(response) {
    $('#testimoni-container').empty();
    
    response.data.forEach(item => {
      $('#testimoni-container').append(`
        <div class="card" style="min-width:12rem">
          <img src="${item.image}" style="height:200px; object-fit:cover">
        </div>
      `);
    });
  });
});
</script> --}}

{{-- script versi otomatis scroll --}}
<script>
  $(document).ready(function() {
    // variabel untuk scroll
    let scrollInterval;
    const scrollSpeed = 1; // variabel untuk atur kecepatan scroll
    const scrollDelay = 30; // variabel untuk delay ketika scroll/bergerak
    let isPaused = false; //variabel untuk fungsi pause
    let isUserScrolling = false;  //variabel untuk manual scroll
    let userScrollTimeout;
    let isResetting = false; //variabel untuk reset

  // Menampilkan skeleton loading
  const skeletonTestimoni = `<div class="card d-flex flex-column align-items-center placeholder-glow" style="min-width: 12rem; flex: 0 0 auto; border:none">
  <div class="p-3 w-100 d-flex justify-content-center">
    <div class="placeholder w-100" style="height: 200px; border-radius: 10px;"></div>
  </div>
  </div>`;
  $('#testimoni-container').html(skeletonTestimoni.repeat(6));

  function startAutoScroll() {
  const container = $('#testimoni-container')[0];
  
  if (scrollInterval) clearInterval(scrollInterval);
  
  // Set scroll ke posisi paling kanan terlebih dahulu
  container.scrollLeft = container.scrollWidth;
  
  scrollInterval = setInterval(() => {
    if (!isResetting && container.scrollWidth > container.clientWidth) {
      // Jika sudah mencapai ujung kiri
      if (container.scrollLeft <= 10) {
        isResetting = true; // Set flag sedang reset
        
        // reset ke posisi paling kanan
        $(container).animate({ scrollLeft: container.scrollWidth }, 1000, 'swing', function() {
          isResetting = false; // Reset flag setelah selesai
        });
      } else {
        // Lanjutkan scroll otomatis ke kiri
        container.scrollLeft -= scrollSpeed;
      }
      }
    }, scrollDelay);
  }
  

  // Mengambil data testimoni dari API
  $.getJSON("https://online.palcomtech.ac.id/api/custom/testimoni", function(response) {
    if (response.data && response.data.length > 0) {
      // Mengosongkan kontainer testimoni
      $('#testimoni-container').empty();
      response.data.forEach(function(item) {
        startAutoScroll();
        const testimoni = `
          <div class="card d-flex flex-column align-items-center testimoni" style="min-width: 12rem; flex: 0 0 auto; border:none">
      <div class="p-3 w-100 d-flex justify-content-center testimoni-img">
        <img src="${item.image}" class="img-fluid" style="max-height: 300px; object-fit: contain;">
      </div>
    </div>
        `;
        $('#testimoni-container').append(testimoni);
      });
    }
  });
});
</script>


{{-- script untuk API instruktur --}}

<script>
  $(document).ready(function () {
    // variabel untuk scroll
    let scrollInterval;
    const scrollSpeed = 1; // variabel untuk atur kecepatan scroll
    const scrollDelay = 30; // variabel untuk delay ketika scroll/bergerak
    let isPaused = false; //variabel untuk fungsi pause
    let isUserScrolling = false;  //variabel untuk manual scroll
    let userScrollTimeout;
    let isResetting = false; //variabel untuk reset

  // menampilkan skeleton
  const skeletonInstruktur = `
    <div class="skeleton-card placeholder-glow" style="margin:18px">
      <div class="placeholder col-12 mb-2" style="height: 100px; width: 100px; border-radius: 15px;">
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
        </div>
      </div>
    </div>
    
  `;
  $('#instruktur-container').html(skeletonInstruktur.repeat(9));
  
  function startAutoScroll() {
  const container = $('#instruktur-container')[0];
  
  if (scrollInterval) clearInterval(scrollInterval);
  
  // Set scroll ke posisi paling kanan terlebih dahulu
  container.scrollLeft = container.scrollWidth;
  
  scrollInterval = setInterval(() => {
    if (!isResetting && container.scrollWidth > container.clientWidth) {
      // Jika sudah mencapai ujung kiri
      if (container.scrollLeft <= 10) {
        isResetting = true; // Set flag sedang reset
        
        // reset ke posisi paling kanan
        $(container).animate({ scrollLeft: container.scrollWidth }, 1000, 'swing', function() {
          isResetting = false; // Reset flag setelah selesai
        });
      } else {
        // Lanjutkan scroll otomatis ke kiri
        container.scrollLeft -= scrollSpeed;
      }
      }
    }, scrollDelay);
  }

  // api untuk ambil data instruktur
  $.getJSON("https://online.palcomtech.ac.id/api/custom/instruktur", function (response) {
    if (response.data && response.data.length > 0) {
      // untuk Kosongkan skeleton
      $('#instruktur-container').empty();

      // menambahkan data instruktur ke html
      response.data.forEach(function (item) {
        startAutoScroll();
        const instruktur = `
          <div class="card border-0 instruktur-card" style="width: 200px; flex: 0 0 auto;">
  <div class="card-body p-3 d-flex flex-column" style="height: 100%;">
    <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
      <img src="${item.img}" 
        class="w-100 h-100 object-fit-cover img-instruktur" 
        style="border-radius:10px; object-fit: contain;">
    </div>
  </div>
  </div>
        `;
        $('#instruktur-container').append(instruktur);
      });
      } 
    });
  });
</script>

{{-- script untuk API prestasi --}}

<script>
  $(document).ready(function() {
    // variabel untuk scroll
    let scrollInterval;
    const scrollSpeed = 1; // variabel untuk atur kecepatan scroll
    const scrollDelay = 30; // variabel untuk delay ketika scroll/bergerak
    let isPaused = false; //variabel untuk fungsi pause
    let isUserScrolling = false;  //variabel untuk manual scroll
    let userScrollTimeout;
    let isResetting = false; //variabel untuk reset

  // Menampilkan skeleton loading
  const skeletonPrestasi = ` <div class="skeleton-card placeholder-glow" style="margin:18px">
      <div class="placeholder col-12 mb-2" style="height: 100px; width: 100px; border-radius: 15px;">
        <div class="mb-3" style="height: 100px; width: 100px;  overflow: hidden; border-radius: 15px;">
        </div>
      </div>
    </div>`;
  $('#prestasi-container').html(skeletonPrestasi.repeat(6)); // Tampilkan skeleton

  function startAutoScroll() {
  const container = $('#prestasi-container')[0];
  
  if (scrollInterval) clearInterval(scrollInterval);
  
  // Set scroll ke posisi paling kanan terlebih dahulu
  container.scrollLeft = container.scrollWidth;
  
  scrollInterval = setInterval(() => {
    if (!isResetting && container.scrollWidth > container.clientWidth) {
      // Jika sudah mencapai ujung kiri
      if (container.scrollLeft <= 10) {
        isResetting = true; // Set flag sedang reset
        
        // reset ke posisi paling kanan
        $(container).animate({ scrollLeft: container.scrollWidth }, 1000, 'swing', function() {
          isResetting = false; // Reset flag setelah selesai
        });
      } else {
        // Lanjutkan scroll otomatis ke kiri
        container.scrollLeft -= scrollSpeed;
      }
      }
    }, scrollDelay);
  }

  // Mengambil data prestasi dari API
  $.getJSON("https://online.palcomtech.ac.id/api/custom/prestasi ", function(response) {
    // Mengosongkan kontainer prestasi
    $('#prestasi-container').empty();
    if (response.data && response.data.length > 0) {
      response.data.forEach(function(item) {
        startAutoScroll();
        const prestasi = `
          <div class="card border-0" style="width: 250px; flex: 0 0 auto;">
      <div class="card-body p-3 d-flex flex-column" style="height: 100%;">
        <!-- Gambar -->
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px; img.prestasi">
          <img src="${item.img}" 
               class="w-100 h-100 object-fit-cover" style="max-width: 100%; max-height: auto; border-radius:10px; object-fit: contain;">
        </div>
      </div>
    </div>
        `;
        $('#prestasi-container').append(prestasi);
      });
    }
  });
});
</script>

{{-- script untuk API sponsor --}}

<script>
  $(document).ready(function() {

  // Menampilkan skeleton loading
  const skeletonSponsor =`<div class="skeleton-card placeholder-glow" style="margin:18px">
      <div class="placeholder col-12 mb-2" style="height: 100px; width: 100px; border-radius: 15px;">
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
        </div>
      </div>
    </div>`;
  $('#sponsor-container').html(skeletonSponsor.repeat(6)); // Tampilkan skeleton

  // mengambil data dari api
  $.getJSON("https://online.palcomtech.ac.id/api/custom/sponsor ", function(response) {
    if (response.data && response.data.length > 0) {

      // Mengosongkan kontainer sponsor
      $('#sponsor-container').empty();
      response.data.forEach(function(item) {
        const sponsor = `
          <img src="${item.img}" alt="" style="height: 5rem; object-fit: contain;">
        `;
        $('#sponsor-container').append(sponsor);
      });
    }
  });
});
</script>

{{-- script untuk API partner --}}

<script>
  $(document).ready(function() {
  // Menampilkan skeleton loading
  const skeletonPartner = `<div class="skeleton-card placeholder-glow" style="margin:18px">
      <div class="placeholder col-12 mb-2" style="height: 100px; width: 100px; border-radius: 15px;">
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
        </div>
      </div>
    </div>`;
  $('#partner-container').html(skeletonPartner.repeat(6)); // Tampilkan skeleton
  $.getJSON("https://online.palcomtech.ac.id/api/custom/partner ", function(response) {
    if (response.data && response.data.length > 0) {
      // Mengosongkan kontainer partner
      $('#partner-container').empty();
      response.data.forEach(function(item) {
        const partner = `
          <img src="${item.img}" alt="" style="height: 5rem; object-fit: contain;">
        `;
        $('#partner-container').append(partner);
      });
    }
  });
});
</script>

{{-- script untuk API FAQ --}}

<script>
  $(document).ready(function() {

  // Menampilkan skeleton loading
  const skeletonFAQ = `<div class="accordion-item">
  <h2 class="accordion-header">
    <div class="skeleton-text w-100" style="height: 20px;"></div>
  </h2>
  <div class="accordion-collapse collapse show">
    <div class="accordion-body">
      <div class="skeleton-text mb-2" style="width: 100%; height: 12px;"></div>
      <div class="skeleton-text mb-2" style="width: 95%; height: 12px;"></div>
      <div class="skeleton-text mb-2" style="width: 90%; height: 12px;"></div>
    </div>
  </div>
  </div>`;
  $('#faq-container').html(skeletonFAQ.repeat(1)); // Tampilkan skeleton

  // Mengambil data FAQ dari API
  $.getJSON("https://online.palcomtech.ac.id/api/custom/faq ", function(response) {
  // Mengosongkan kontainer FAQ
  $('#faq-container').empty();

    if (response.data && response.data.length > 0) {
  response.data.forEach(function(item, index) {
    const headingId = 'heading' + index;
    const collapseId = 'collapse' + index;
    const faq = `
      <div class="accordion-item" style="border: none; border-bottom: 0.3px solid black;">
  <h2 class="accordion-header" id="${headingId}">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#${collapseId}" aria-expanded="false" aria-controls="${collapseId}"
      style="border: none; box-shadow: none;">
      ${item.question}
    </button>
  </h2>
  <div id="${collapseId}" class="accordion-collapse collapse" aria-labelledby="${headingId}"
    data-bs-parent="#faqAccordion">
    <div class="accordion-body" style="border: none;">
      ${item.answer}
    </div>
  </div>
  </div>

    `;
    $('#faq-container').append(faq);
  });
}
  });
});
</script>


{{-- script untuk api program --}}

<script>
$(document).ready(function () {
  // variabel untuk scroll
  let scrollInterval;
  const scrollSpeed = 1; // variabel untuk atur kecepatan scroll
  const scrollDelay = 30; // variabel untuk delay ketika scroll/bergerak
  let isPaused = false; //variabel untuk fungsi pause
  let isUserScrolling = false;  //variabel untuk manual scroll
  let userScrollTimeout;
  let isResetting = false; //variabel untuk reset

  // Skeleton loading
  const skeletonCard = `
    <div class="card placeholder-glow" style="width: 280px; flex: 0 0 auto; margin-right: 15px;">
      <div class="placeholder col-12 mb-2" style="height: 160px; background-color: #e0e0e0; border-radius: 4px;"></div>
      <div class="card-body">
        <div class="placeholder col-10 mb-2" style="height: 20px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-7 mb-2" style="height: 16px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-6 mb-2" style="height: 16px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-5" style="height: 20px; background-color: #e0e0e0;"></div>
      </div>
    </div>
  `;

  // mulai auto-scrolling
  function startAutoScroll() {
    const container = $('#program-cards')[0];
    
    if (scrollInterval) clearInterval(scrollInterval);
    
    scrollInterval = setInterval(() => {
      if (!isResetting && container.scrollWidth > container.clientWidth) {
        // Jika sudah mencapai ujung kanan
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 10) {
          isResetting = true; // Set flag sedang reset
          
          // reset ke posisi awal
          $(container).animate({ scrollLeft: 0 }, 1000, 'swing', function() {
            isResetting = false; // Reset flag setelah selesai
          });
        } else {
          // Lanjutkan scroll otomatis
          container.scrollLeft += scrollSpeed;
        }
      }
    }, scrollDelay);
  }

  // fungsi untuk manual scroll
  $('#program-cards').on('scroll', function() {
    if (!isUserScrolling) {
      isPaused = true;
    }
    isUserScrolling = true;
    
    if (userScrollTimeout) clearTimeout(userScrollTimeout);
    
    userScrollTimeout = setTimeout(() => {
      isUserScrolling = false;
      isPaused = false;
    }, 3000);
  });

  // ambil data kategori
  function loadKategories() {
    showSkeleton();

    $.get('https://online.palcomtech.ac.id/api/custom/kategories', function (response) {
      if (response.success && response.data.length > 0) {
        renderKategoriTabs(response.data);
        loadPrograms(response.data[0].slug); 
      }
    }).fail(showError);
  }

  function renderKategoriTabs(kategories) {
    const tabsContainer = $('#kategori-tabs');
    tabsContainer.empty();

    kategories.forEach((kategori, index) => {
      const tab = $(`
        <a class="btn kategori-tab ${index === 0 ? 'active' : ''}" 
           data-kategori-slug="${kategori.slug}">
          ${kategori.name}
        </a>
      `);

      tab.click(function () {
        $('.kategori-tab').removeClass('active');
        $(this).addClass('active');
        loadPrograms(kategori.slug);
      });

      tabsContainer.append(tab);
    });
  }

  function loadPrograms(kategoriSlug) {
    showSkeleton();

    $.get(`https://online.palcomtech.ac.id/api/custom/programs/${kategoriSlug}`, function (response) {
      if (response.success) {
        renderProgramCards(response.data);
        // mulai auto scroll ketika data berhasil di load
        startAutoScroll();
      } else {
        showError(response.message || `<div class="reload-container" onclick="location.reload()">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21.5 2v6h-6"/>
  <path d="M21.34 15.57a10 10 0 1 1-.57-8.38"/>
  </svg>
  <p class="reload-text">
    Gagal memuat data. <span>Klik untuk coba lagi</span>
  </p>
  </div>`);
      }
    }).fail(showError);
  }

  function renderProgramCards(programs) {
    const container = $('#program-cards');
    container.empty();

    if (programs.length === 0) {
      container.html('<div class="col-12 text-center py-5">Tidak ada program tersedia</div>');
      return;
    }

    programs.forEach(program => {
      const card = $(`
      <a href="${program.url}">
  <div class="card program-card" style="width: 280px; flex: 0 0 auto; margin-right:15px;">
    <img class="card-img-top img-program" src="${program.image}" alt="Course Image" height="160" style="object-fit: cover;">
    <div class="card-body">
      <h6 class="card-title fw-bold mb-1">${program.title}</h6>
      <p class="card-text text-muted mb-1" style="font-size: 14px;">${program.instruktur}</p>
      <div class="d-flex align-items-center mb-1" style="font-size: 14px;">
        <span class="fw-bold me-1 text-warning">4.5</span>
        <span class="text-warning me-1">★ ★ ★ ★ ☆</span>
        <span class="text-muted" style="font-size: 13px;">(50,404)</span>
      </div>
      <div class="mb-2">
        <span class="fw-bold" style="font-size: 16px;">${program.hargaDiskon}</span>
        <span class="text-muted text-decoration-line-through ms-2">${program.hargaNormal}</span>
      </div>
      <span class="badge bg-success">Bestseller</span>
    </div>
  </div>
  </a>
      `);
      container.append(card);
    });
  }

  function showSkeleton() {
    const container = $('#program-cards');
    container.empty();
    container.append(skeletonCard.repeat(4)); 
  }

  function showError(message) {
    $('#program-cards').html(`
      <div class="reload-container" onclick="location.reload()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21.5 2v6h-6"/>
  <path d="M21.34 15.57a10 10 0 1 1-.57-8.38"/>
  </svg>
        <p class="reload-text">
          Gagal memuat data. <span>Klik untuk coba lagi</span>
  </p>
  </div>
    `);
  }

  loadKategories(); // Inisialisasi awal
});
</script>


{{-- <script>
  $(document).ready(function () {
  // Skeleton card HTML
  const skeletonCard = `
    <div class="card placeholder-glow" style="width: 280px; flex: 0 0 auto; margin-right: 15px;">
      <div class="placeholder col-12 mb-2" style="height: 160px; background-color: #e0e0e0; border-radius: 4px;"></div>
      <div class="card-body">
        <div class="placeholder col-10 mb-2" style="height: 20px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-7 mb-2" style="height: 16px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-6 mb-2" style="height: 16px; background-color: #e0e0e0;"></div>
        <div class="placeholder col-5" style="height: 20px; background-color: #e0e0e0;"></div>
      </div>
    </div>
  `;

  // Load Kategori dan default tab
  function loadKategories() {
    showSkeleton();

    $.get('https://online.palcomtech.ac.id/api/custom/kategories', function (response) {
      if (response.success && response.data.length > 0) {
        renderKategoriTabs(response.data);
        loadPrograms(response.data[0].slug); // Load default kategori
      }
    }).fail(showError);
  }

  function renderKategoriTabs(kategories) {
    const tabsContainer = $('#kategori-tabs');
    tabsContainer.empty();

    kategories.forEach((kategori, index) => {
      const tab = $(`
        <a class="btn kategori-tab ${index === 0 ? 'active' : ''}" 
           data-kategori-slug="${kategori.slug}">
          ${kategori.name}
        </a>
      `);

      tab.click(function () {
        $('.kategori-tab').removeClass('active');
        $(this).addClass('active');
        loadPrograms(kategori.slug);
      });

      tabsContainer.append(tab);
    });
  }

  function loadPrograms(kategoriSlug) {
    showSkeleton();

    $.get(`https://online.palcomtech.ac.id/api/custom/programs/${kategoriSlug}`, function (response) {
      if (response.success) {
        renderProgramCards(response.data);
      } else {
        showError(response.message || `<div class="reload-container" onclick="location.reload()">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21.5 2v6h-6"/>
  <path d="M21.34 15.57a10 10 0 1 1-.57-8.38"/>
  </svg>
  <p class="reload-text">
    Gagal memuat data. <span>Klik untuk coba lagi</span>
  </p>
  </div>`);
      }
    }).fail(showError);
  }

  function renderProgramCards(programs) {
    const container = $('#program-cards');
    container.empty();

    if (programs.length === 0) {
      container.html('<div class="col-12 text-center py-5">Tidak ada program tersedia</div>');
      return;
    }

    programs.forEach(program => {
      const card = $(`
      <a href="${program.url}">
  <div class="card program-card" style="width: 280px; flex: 0 0 auto; margin-right:15px;">
    <img class="card-img-top img-program" src="${program.image}" alt="Course Image" height="160" style="object-fit: cover;">
    <div class="card-body">
      <h6 class="card-title fw-bold mb-1">${program.title}</h6>
      <p class="card-text text-muted mb-1" style="font-size: 14px;">${program.instruktur}</p>
      <div class="d-flex align-items-center mb-1" style="font-size: 14px;">
        <span class="fw-bold me-1 text-warning">4.5</span>
        <span class="text-warning me-1">★ ★ ★ ★ ☆</span>
        <span class="text-muted" style="font-size: 13px;">(50,404)</span>
      </div>
      <div class="mb-2">
        <span class="fw-bold" style="font-size: 16px;">${program.hargaDiskon}</span>
        <span class="text-muted text-decoration-line-through ms-2">${program.hargaNormal}</span>
      </div>
      <span class="badge bg-success">Bestseller</span>
    </div>
  </div>
  </a>
      `);
      container.append(card);
    });
  }

  function showSkeleton() {
    const container = $('#program-cards');
    container.empty();
    container.append(skeletonCard.repeat(4)); 
  }

  function showError(message) {
    $('#program-cards').html(`
      <div class="reload-container" onclick="location.reload()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21.5 2v6h-6"/>
  <path d="M21.34 15.57a10 10 0 1 1-.57-8.38"/>
  </svg>
        <p class="reload-text">
          Gagal memuat data. <span>Klik untuk coba lagi</span>
  </p>
  </div>
    `);
  }

  loadKategories(); // Inisialisasi awal
});
</script> --}}

</body>
</html>
