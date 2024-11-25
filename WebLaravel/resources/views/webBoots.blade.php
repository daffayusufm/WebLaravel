<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyoza Surabaya</title>
    <link fw-bold href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link fw-bold rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>
<body>
  <!---NAVBAR START-->
<div style="background-color: #6F381B;">
  <nav class="navbar navbar-expand-lg bg-light custom-navbar">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img class="rounded-circle img-fluid" src={{ Vite::asset('resources/images/Logo.png') }} alt="logo" style="width: 50px">
      </a>

      <!-- Navbar Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" id="offcanvasNavbar">

      <!-- Offcanvas Header -->
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Gyoza Surabaya</h5>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <!-- Offcanvas Body -->
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#" class="nav-link fw-bold">Home</a></li>
          <li class="nav-item"><a href="#About" class="nav-link fw-bold">About</a></li>
          <li class="nav-item"><a href="#Pricing" class="nav-link fw-bold">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link fw-bold">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>
 <!---NAVBAR END-->

<!-- Main -->
<div class="bg py-5" id="main">
  <div class="mb container py-3 px-4">
      <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-7 text-center text-md-start mt">
              <h1 class="display-6 fw-bold mx-md-5">Kelezatan Gyoza, Sempurna di Setiap Gigitan</h1>
              <p class="fs-5 mt-4 mb-5 mx-md-5">Gyoza yang dibuat dengan senyum dan cinta sempurna untuk Anda. Rasa dan kelezatan dalam setiap gigitan</p>
              <div class="row">
                  <div class="d-flex justify-content-center justify-content-md-start gap-2">
                      <button type="button" href="#" class="btn btn-outline-light fw-medium btn-lg mb-3 px-4 py-3 mx-md-5 primary">Pesan Sekarang!</button>
                      <button type="button" href="#" class="btn btn-outline-light fw-medium btn-lg mb-3 px-4 ">Pricing</button>
                  </div>
              </div>
          </div>
          <div class="col-md-5">
              <img class="img-fluid" src={{ Vite::asset('resources/images/Gyoza1.png') }} alt="main logo">
          </div>
      </div>
  </div>
</div>


<!--ULASAN-->
<div class="mt-5 bg-light" id="About" style="color: #6F381B">
  <div class="container py-5 px-4">
    <div class="row align-items-center">
        <div class="col-md-11 text-center text-md-start">
            <h1 class="display-6 fw-bold mx-md-5">Tentang Kami</h1>
            <p class="fs-5 mt-4 mb-1 mx-md-5" style="text-align: justify;">Kami hadir untuk menyajikan
              gyoza terbaik dengan cita rasa autentik yang menggugah selera. Dengan bahan-bahan pilihan
              dan proses yang penuh perhatian, setiap gyoza kami mencerminkan komitmen terhadap kualitas
              dan kelezatan. Kami percaya bahwa makanan adalah cara terbaik untuk menghadirkan kebahagiaan,
              dan itulah yang ingin kami bagikan kepada Anda.</p>
        </div>
    </div>
   </div>

   <!--ULASAN START-->
   <div id="riviewCarousel" class="container px-5 carousel slide mb" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide pertama -->
      <div class="carousel-item active mb-5">
        <div class="row gx-1">
          <!-- Ulasan pertama -->
          <div class="bd col-md-6 col-12 mx-3 rounded p-3 shadow d-flex m-2">
            <div class="review-content px-4">
              <img class="rounded-circle" style="width: 50px; height: 50px;" src={{ Vite::asset('resources/images/Asyifah.png') }}
              alt="Profile" class="review-img">
            </div>
            <div class="riview-content text-start">
              <div class="review-header fw-medium">Asyifah Safitri</div>
              <div class="review-body mt-2 mb-2">Gyozanya Enakk!! Juara dehh. Tekstur kulitnya krenyess
                tapi dalemnya empuk, selain itu rasa ayamnya juga kerasa banget!!</div>
              <div class="review-rating">★★★★★5/5</div>
            </div>
          </div>

          <!-- Ulasan kedua -->
          <div class="bd col-md-6 col-12 mx-3 rounded p-3 shadow d-flex m-2">
            <div class="review-content px-4">
              <img class="rounded-circle" style="width: 50px; height: 50px;" src={{ Vite::asset('resources/images/Rosyidah.png') }}
              alt="Profile" class="review-img">
            </div>
            <div class="riview-content text-start">
              <div class="review-header fw-medium">Rosyidah Aliyah</div>
              <div class="review-body mt-2 mb-2"> Gyoza ini memiliki kulit yang digoreng hingga renyah,
                memberikan tekstur luar yang garing dan rasa gurih.</div>
              <div class="review-rating">★★★★★5/5</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide kedua -->
      <div class="carousel-item mb-5">
        <div class="row gx-1">
          <!-- Ulasan pertama -->
          <div class=" bd col-md-6 col-12 mx-3 rounded p-3 shadow d-flex m-2">
            <div class="review-content px-4">
              <img class="rounded-circle" style="width: 50px; height: 50px;" src={{ Vite::asset('resources/images/Asyifah.png') }}
              alt="Profile" class="review-img">
            </div>
            <div class="riview-content text-start">
              <div class="review-header fw-medium">Nur Septi Praditpta</div>
              <div class="review-body mt-2 mb-2"> Gyoza pedas ini cocok bagi pecinta rasa pedas,
                dengan isian daging dan sayuran yang dibumbui dengan bumbu pedas khas.</div>
              <div class="review-rating">★★★★★5/5</div>
            </div>
          </div>

          <!-- Ulasan kedua -->
          <div class="bd col-md-6 col-12 mx-3 rounded p-3 shadow d-flex m-2">
            <div class="review-content px-4">
              <img class="rounded-circle" style="width: 50px; height: 50px;" src={{ Vite::asset('resources/images/Rosyidah.png') }}
              alt="Profile" class="review-img">
            </div>
            <div class="riview-content text-start">
              <div class="review-header fw-medium">Sofi Zahra Ornadita</div>
              <div class="review-body mt-2 mb-2">Gyoza kukus ini menggabungkan kelembutan kulit
                yang kenyal dengan isian sayuran segar dan daging cincang.</div>
              <div class="review-rating">★★★★★5/5</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="bg1 py-5" id="Pricing">
  <div class="container py-4 px-4">
      <div class="row d-flex justify-content-center">
        <div class="col-md-5 px-3 d-flex justify-content-center align-items-center">
          <img class="img-fluid mx-md-5" src={{ Vite::asset('resources/images/Gyoza2.png') }} alt="main logo">
      </div>
          <div class="col-md-7 text-center text-md-start mt">
              <h1 class="display-6 fw-bold mx-md-2">Pricing Menu</h1>
              <p class="fs-5 mt-4 mb-5 mx-md-2" style="text-align: justify;" >Nikmati berbagai varian
                gyoza dengan harga terjangkau tanpa mengorbankan kualitas. Pilih menu favorit Anda
                dan rasakan kelezatannya!</p>

              <div>
                <h3 class="display-7 fs-4 fw-medium mx-md-2">Top Recomendation Menu!</h3>

                <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
                  <div class="carousel-inner text-center" style="color: #6F381B;">
                    <!-- Slide Group 1 -->
                    <div class="carousel-item active">
                      <div class="d-flex justify-content-center">
                        <!-- Item 1 -->
                        <div class="p-3 bg-white rounded-4 fw-medium mx-2" style="width: 250px; min-height: 320px;">
                          <img class="img-fluid rounded-2 mb-3" style="width: 100%; height: 10em;" src={{ Vite::asset('resources/images/GyozaMentai.jpg') }} alt="Gyoza Saus Mentai">
                          <div>Gyoza Saus Mentai Special</div>
                          <div>$12</div>
                        </div>
                        <!-- Item 2 -->
                        <div class="p-3 bg-white rounded-4 fw-medium mx-2" style="width: 250px; min-height: 320px;">
                          <img class="img-fluid rounded-2 mb-3" style="width: 100%; height: 10em;" src={{ Vite::asset('resources/images/GyozaKering.jpg') }} alt="Gyoza Kering">
                          <div>Gyoza Kering Kriuk Abiezzz</div>
                          <div>$10</div>
                        </div>
                      </div>
                    </div>

                    <!-- Slide Group 2 -->
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <!-- Item 3 -->
                        <div class="p-3 bg-white rounded-4 fw-medium mx-2" style="width: 250px; min-height: 320px;">
                          <img class="img-fluid rounded-2 mb-3" style="width: 100%; height: 10em;" src={{ Vite::asset('resources/images/GyozaRebus.jpg') }} alt="Gyoza Rebus">
                          <div>Gyoza Rebus Empuk Bangetz!</div>
                          <div>$13</div>
                        </div>

                        <!-- Item 4 -->
                        <div class="p-3 bg-white rounded-4 fw-medium mx-2" style="width: 250px; min-height: 320px;">
                          <img class="img-fluid rounded-2 mb-3" style="width: 100%; height: 10em;" src={{ Vite::asset('resources/images/GyozaMentai.jpg') }} alt="Gyoza Saus Mentai 2">
                          <div>Gyoza Saus Mentai Extra Cheese</div>
                          <div>$10</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Navigation Buttons -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

              </div>
          </div>
      </div>
  </div>
</div>

<div class="mt-5 bg-light" id="About" style="color: #6F381B">
  <div class="container py-5 px-4">
    <div class="row align-items-center">
        <div class="col-md-11 text-center text-md-start">
            <h1 class="display-6 fw-bold mx-md-5">Kontak & Alamat</h1>
        </div>
    </div>

    <div class="row mx-md-3 px-4">
      <div class="col-lg-3 mb-3" id="instagram">
        <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
          <span class="ms-2 fw-medium">@GyozaSurabaya</span>
        </div>
      </div>

      <div class="col-6 col-lg-2 mb-3" id="telephone">
        <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg>
          <span class="mx-2 fw-medium">0895 7341 8712</span>
        </div>
      </div>

      <div class="mb-3" id="whatsap">
        <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
          </svg>
          <span class="mx-2 fw-medium">+62 9652 8245 223</span>
        </div>
      </div>

      <div class="mb-3" id="email">
        <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
          </svg>
          <span class="mx-2 fw-medium">Gyozaadminsby@gmail.com</span>
        </div>
      </div>


      <div class="mb-3" id="location">
        <div class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          </svg>
          <span class="mx-2 fw-medium">Jalan Puncak Permai Square III No.A-20</span>
        </div>
      </div>

      <iframe style="width: 40em; height: 20em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.67102713885!2d112.6184594486328!3d-7.278685599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc241df28e73%3A0x5c56bf7a7abdead6!2sResto%20Tong%20Tong%20Japan!5e0!3m2!1sen!2sid!4v1731996288550!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
   </div>




<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
