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

  {{-- cdn ajax Jquery --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>

    /* Menu Atas start */
    
    body {
      background-color: #fdfeff;
      font-family: 'Public Sans', 'Montserrat', sans-serif;
    }

    .navbar {
      background-color: #d6dadf;
      white-space: nowrap;
      width: auto;
    }

    .navbar-container {
    display: flex;
    align-items: center;
    /* justify-content: space-between;
    width: auto; */
}
.navbar-brand {
    padding: 0;
    margin: 0;
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
      /* box-shadow: 0 2px 6px rgba(0,0,0,0.1); */
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

    .navbar-nav {
      padding-left: 10%;
    }
    .navbar-nav a {
      /* padding-top: 0.5rem; */
      font-size: 0.90rem;
      font-weight: bold;
      /* margin-top: 5px */
      /* margin-right: 20px; */
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
      margin-left: 4%;
      /* gap: 2px; */
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

    /* .container-cta2{
      padding-right: 30px;
    } */

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
    transform: translateX(-50%); /* Ubah ke -50% karena kita menggandakan item */
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
    transform: translateX(-50%); /* Ubah ke -50% karena kita menggandakan item */
  }
}

    /* Responsif ukuran 770 */

    @media (max-width: 770px) {
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
    }

    /* Responsif untuk ukuran hp kecil */

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
  .navbar-nav {
    padding-left: 5%;
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
  <div class="container sm:px-1 px-2 justify-content-between">

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
      <a class="btn btn-sm btn-masuk me-2" href="#">Masuk</a>
      <a class="btn btn-sm btn-daftar" href="#">Daftar</a>
    </div>
  
    <!-- Collapsible Navbar -->
    <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2"><a class="nav-link home" href="#">Home</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="/e-learning">E-learning</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Bootcamp & Program</a></li>
        {{-- <li class="nav-item mx-2"><a class="nav-link" href="#">Review CV</a></li> --}}
        <li class="nav-item mx-2"><a class="nav-link" href="#">Corporate Service</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Info Loker</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="#">Blog</a></li>
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
      </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Section CTA 1-->

    <div class="container text-center">
      <h1 class="fw-bold mb-4" style="font-size:24px; color:#212b36;">Rintis Karir Bersama Palcomtech</h1>
    </div>

    <!-- Loop Card -->
    @php
      $card = [
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/icon-1.png', 'title' => '100% PRAKTEK 100% INTERNET', 'description' => 'Belajar Belajar Full Praktek Gak Banyak Teori'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/icon-2.png', 'title' => 'GARANSI LANGSUNG BISA', 'description' => 'kita Jamin Lulusan Palcomtech Langsung Bisa'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/icon-4.png', 'title' => 'PERINGKAT 1 TERBAIK NASIONAL', 'description' => 'Telah Terpercaya Dan Telah Diakui Tingkat Nasional'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/icon-3.png', 'title' => 'MENDAPATKAN SERTIFIKAT RESMI', 'description' => 'Setiap Lulusan Mendapat Sertifikat Resmi TIngkat Nasional'],
      ];
    @endphp

    <div class="container px-0">
  <div class="cards-wrapper d-flex justify-content-center">
    <div class="cards-scroller d-flex flex-row flex-nowrap overflow-x-auto py-3" style="gap: 1rem; -webkit-overflow-scrolling: touch; max-width: 100%; scrollbar-color:transparent transparent;">
      @foreach ($card as $cta1)
        <div class="card shadow-sm flex-shrink-0 mx-1" style="width: 13rem; min-width: 10rem;">
          <img src="{{ asset($cta1['img']) }}" class="mx-auto d-block mt-3 img-fluid" style="height: 80px; object-fit: contain;" alt="{{ $cta1['title'] }}">
          <div class="card-body text-center px-2 py-2">
            <h6 class="card-title mb-1" style="font-size: 0.9rem; white-space: normal;">
              {{ $cta1['title'] }}
            </h6>
            <p class="card-text small text-muted mb-0" style="font-size: 0.75rem; white-space: normal;">
              {{ $cta1['description'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
    <!-- Section cTA 2-->
    <div class="container text-center">
      <h1 class="mb-4 mt-3 pt-4" style="font-size:24px; font-weight:bold; font-height:36px;">Terbukti Berdampak dan Membuka Batasan</h2>
    </div>

    @php
      $card = [
        ['img' => 'https://kursus.palcomtech.ac.id/wp-content/uploads/2024/07/testimonial-siswa-4.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 1.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 2.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 3.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 4.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 5.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/testimoni 6.png'],
      ];
    @endphp

    <div class="container container-cta2">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-auto pb-3" style="scrollbar-color:transparent transparent;">
    @foreach ($card as $cta1)
    <div class="card d-flex flex-column align-items-center" style="min-width: 12rem; flex: 0 0 auto; border:none">
      <div class="p-3 w-100 d-flex justify-content-center">
        <img src="{{ url($cta1['img']) }}" class="img-fluid" style="max-height: 300px; object-fit: contain;">
      </div>
    </div>
    @endforeach
  </div>
</div>

        <!-- Program E-learning start -->

     <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Berikut Program Palcomtech</h3>
    </div>

<?php
// $programs = [
//     [
//         'title' => "AI BASIC",
//         'image' => "https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/ai basic.jpg",
//         'alt' => "E-Learning Palcomtech",
//         'features' => [
//             "Belajar fleksibel via Video Materi, Bahan Bacaan, Project dan Studi Kasus",
//             "Praktikal & Actionable. Bertahap dari level Dasar hingga Lanjut",
//             "Grup Komunitas Diskusi Lifetime. Kelas Gratis Tiap Bulannya"
//         ],
//         'buttonText' => "Lihat Ratusan Materi",
//         'buttonLink' => "#"
//     ],
//     [
//         'title' => "SMART TEKNOLOGI IOT + AI",
//         'image' => "https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/iot + ai.jpg",
//         'alt' => "Data Science Program",
//         'features' => [
//             "Belajar Machine Learning dan AI dari dasar",
//             "Proyek nyata dengan dataset dunia nyata",
//             "Dukungan mentor berpengalaman"
//         ],
//         'buttonText' => "Lihat Kurikulum",
//         'buttonLink' => "#data-science"
//     ],
//     [
//         'title' => "CODING FOR KIDS",
//         'image' => "https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/coding for kids.png",
//         'alt' => "Web Development Program",
//         'features' => [
//             "Full-stack development dengan teknologi terbaru",
//             "Pembuatan portfolio proyek selama belajar",
//             "Persiapan karir di industri tech"
//         ],
//         'buttonText' => "Mulai Belajar Sekarang",
//         'buttonLink' => "#web-dev"
//     ]
// ];
?>



<div class="container py-2">
  <div id="programContainer"></div>
</div>


    <!-- Program E-learning end -->


    <!-- CTA Bawah Start-->

    <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Rasanya Bergabung Di Palcomtech</h3>
    </div>

    @php
      $card2 = [
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/berita1.png','description' => 'Launching Industrial Lab Smart Campus Palcomtech'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/berita2.png','description' => 'ITB PalComTech Melakukan MoU dengan Dinas Koperasi dan UKM'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/berita3.png','description' => 'Workshop PalComTech Game Development Palembang 2023'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/berita4.jpg','description' => 'PalComTech Berjaya! Tim Jubecycle Raih Juara II di LABIRIN SRIWIJAYA BOOTCAMP 2025!'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/berita5.jpg','description' => 'PalComTech Sabet  3 kategori Juara Sekaligus Pada Event Apresiasi Kinerja LLDIKTI Wilayah II']
      ];
    @endphp

    <div class="container">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-x-auto pb-3 align-items-stretch px-3" style="scrollbar-color:transparent transparent;">
    @foreach ($card2 as $cta2)
    <div class="card shadow-sm p-0 pt-4" style="width: 17rem; flex: 0 0 auto; height: 100%;">
      <div class="p-2 text-center d-flex flex-column" style="height: 100%;">
        <!-- Bagian Gambar -->
        <div class="flex-grow-0" style="height: 120px; display: flex; align-items: center; justify-content: center;">
          <img src="{{ asset($cta2['img']) }}" class="img-fluid mx-auto" 
               style="max-width: 100%; max-height: 100%; border-radius:10px; object-fit: contain;">
        </div>
        
        <!-- Bagian Teks -->
        <div class="flex-grow-1 d-flex align-items-center justify-content-center" 
             style="min-height: 80px; padding: 0 8px;">
          <p class="card-text small fw-bold mb-0 w-100" 
             style="font-size:13px; line-height: 1.4;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    margin: 0;">
            {{ $cta2['description'] }}
          </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

    <!-- CTA Bawah End-->

    <!-- Instruktur Start-->

    <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Belajar Bareng Instruktur Yang berpengalaman</h3>
    </div>

    @php
      $CardInstruktur = [
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 23.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 24.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 26.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 25.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 27.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 28.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 29.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 11.png'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/instruk 12.png']
      ];
    @endphp

   <div class="container">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-x-auto pb-3 px-3" style="scrollbar-color:transparent transparent;">
    @foreach ($CardInstruktur as $instruktur)
    <div class="card border-0" style="width: 200px; flex: 0 0 auto;"> <!-- Fixed width -->
      <div class="card-body p-3 d-flex flex-column" style="height: 100%;">
        <!-- Gambar -->
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
          <img src="{{ asset($instruktur['img']) }}" 
               class="w-100 h-100 object-fit-cover" style="max-width: 100%; max-height: auto; border-radius:10px; object-fit: contain;">
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

    <!-- Instruktur End -->

    {{-- Prestasi --}}

    <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Prestasi Palcomtech</h3>
    </div>

     @php
      $CardInstruktur = [
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 1.jpg'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 2.jpg'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 3.jpg'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 4.jpg'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 5.jpg'],
        ['img' => 'https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/prestasi 6.jpg'],
      ];
    @endphp

   <div class="container">
  <div class="d-flex flex-row flex-nowrap gap-3 overflow-x-auto pb-3 px-3" style="scrollbar-color:transparent transparent;">
    @foreach ($CardInstruktur as $instruktur)
    <div class="card border-0" style="width: 200px; flex: 0 0 auto;"> <!-- Fixed width -->
      <div class="card-body p-3 d-flex flex-column" style="height: 100%;">
        <!-- Gambar -->
        <div class="mb-3" style="height: 200px; overflow: hidden; border-radius: 15px;">
          <img src="{{ asset($instruktur['img']) }}" 
               class="w-100 h-100 object-fit-cover" style="max-width: 100%; max-height: auto; border-radius:10px; object-fit: contain;">
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

{{-- sponsor --}}

    <div class="container text-center">
      <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Sponsor</h3>
    </div>

  <div style="display: flex; justify-content: center; width: 100%; padding: 2rem 0;">
  <div class="logo-container" style="overflow: hidden; max-width: 1200px; width: 100%; margin: 0 auto; position: relative;">
    <div class="logo-track" style="display: flex;">
      <div class="logo-group">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor1.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor2.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor3.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor4.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor5.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor6.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor7.png" alt="" style="height: 5rem; object-fit: contain;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/sponsor8.png" alt="" style="height: 5rem; object-fit: contain;">
      </div>
    </div>
  </div>
</div>


{{-- partner --}}

  <div class="container text-center">
  <h3 class="fw-bold mb-4 mt-3 pt-5" style="font-size:24px;">Partner</h3>
</div>

<div style="display: flex; justify-content: center; width: 100%; padding: 2rem 0; border-radius: 15px;">
  <div class="partner-container" style="overflow: hidden; max-width: 1200px; width: 100%; margin: 0 auto; position: relative;">
    <div class="partner-track" style="display: flex; width: max-content;">
      <div class="partner-group" style="display: flex; gap: 4rem; padding: 2rem;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner1.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner2.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner3.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner4.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner5.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner6.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner7.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
        <img src="https://online.palcomtech.ac.id/public/uploads/main/files/17-07-2025/partner8.png" alt="" style="height: 5rem; object-fit: contain; transition: transform 0.3s ease;">
      </div>
    </div>
  </div>
</div>

    {{-- FAQ Start --}}

     <div class="container my-5">
  <h3 class="fw-bold mt-3 pt-5 text-center" style="font-size:24px;">Yang Sering Ditanyakan</h3>

  <div class="accordion ms-4" id="faqAccordion">
    <?php
    // Array FAQ
    $faqs = [
      [
        "question" => "apa itu online kursus di palcomtech ?",
        "answer" => "Online Kursus di PalComTech adalah program pembelajaran berbasis digital yang disediakan oleh PalComTech, sebuah lembaga pendidikan komputer dan teknologi yang cukup dikenal di Indonesia, khususnya di wilayah Sumatera Selatan. Program ini memungkinkan siswa belajar dari mana saja menggunakan perangkat seperti laptop, tablet, atau smartphone, tanpa harus datang ke kampus secara langsung."
      ],
      [
        "question" => "apa saja fasilitas yg didapat?",
        "answer" => "Akses ke Materi Pembelajaran Digital, .Kelas Virtual (Live Zoom / Google Meet, Komunitas Belajar, Sertifikat Setelah Lulus."
      ],
      [
        "question" => "kemana saya bisa mendapatkan solusi dari kendala saat saya belajar?",
        "answer" => "Sertifikat Setelah Lulus, Customer Service PalComTec, FAQs / Pusat Bantuan di Platform Online."
      ],
    ];

    // Loop FAQ
    foreach ($faqs as $index => $faq):
      $headingId = "heading$index";
      $collapseId = "collapse$index";
    ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="<?= $headingId ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#<?= $collapseId ?>" aria-expanded="false" aria-controls="<?= $collapseId ?>">
            <?= $faq['question'] ?>
          </button>
        </h2>
        <div id="<?= $collapseId ?>" class="accordion-collapse collapse" aria-labelledby="<?= $headingId ?>"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <?= $faq['answer'] ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
    
    {{-- FAQ End --}}

    <div class="footerLine" style="height: 1px; background:#ccc; width:100%; margin:100px 0;"></div>


<!-- Footer -->
<footer class=" py-4" style="font-size: 0.85rem; inline">
  <div class="container">
    <div class="row ms-lg-3 ms-md-2">
      
      <div class="col-md-4 mb-4 ps-lg-4">
        <!-- MySkill Info -->
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

{{-- script untuk sponsor --}}
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
  $.getJSON("https://online.palcomtech.ac.id/api/custom/slider", function(response) {
    if (response.data && response.data.length > 0) {
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

      // Inisialisasi Swiper setelah data dimuat
      new Swiper(".mySwiper", {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
      });
    }
  });
});
</script>

{{-- script untuk api program --}}
<script>
$(document).ready(function () {
  $.getJSON("https://online.palcomtech.ac.id/api/custom/course", function (response) {
    if (response.data && response.data.length > 0) {
      response.data.forEach(function (item, index) {
        const isEven = index % 2 === 0;

        // Tangani jika 'features' adalah string dipisahkan koma
        let feature = [];
        if (Array.isArray(item.feature)) {
          feature = item.feature;
        } else if (typeof item.feature === "string") {
          feature = item.feature.split(',').map(f => f.trim());
        }

        const featuresHTML = feature.map(feature => `
          <div class="d-flex align-items-start mb-2 fitur">
            <span class="me-2">✅</span>
            <p class="mb-0" style="font-size: clamp(0.9rem, 1.5vw, 1rem);">${feature}</p>
          </div>
        `).join('');

        const programHTML = `
          <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-10">
              <div class="card border-0">
                <div class="row g-0">

                  <!-- Mobile Image -->
                  <div class="col-12 d-md-none">
                    <img src="${item.image}" class="img-fluid w-100" alt="${item.alt || ''}" style="max-height: 200px; object-fit: contain;">
                  </div>

                  <!-- Desktop Image -->
                  <div class="col-md-5 ${isEven ? '' : 'order-md-2'} d-none d-md-flex align-items-center">
                    <img src="${item.image}" class="img-fluid w-100" alt="${item.alt || ''}" style="max-height: 300px; object-fit: contain;">
                  </div>

                  <!-- Content -->
                  <div class="col-md-7 ${isEven ? '' : 'order-md-1'}">
                    <div class="card-body p-3 p-md-4">
                      <h3 class="card-title fw-bold mb-3" style="font-size: clamp(1.2rem, 2vw, 1.5rem);">${item.title}</h3>
                      <div class="mb-3">
                        ${featuresHTML}
                      </div>
                      <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-daftar btn-program" href="${item.url}" style="min-width: 180px; font-size:13px">
                          ${item.buttonText}
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        `;

        $('#programContainer').append(programHTML);
      });
    }
  });
});
</script>


</body>
</html>
