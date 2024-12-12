<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bengkel Ardi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- General CSS Files -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/components.css') }}">
    

</head>
<body>
    <!-- Hero -->
    <section id="hero" class="bg-primary">
            <!-- Navbar -->
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" width="130" height="60" class="logo-hero">
                <!-- Navigation Links -->
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#Beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#Produk">Produk</a>
                        </li>
                        <button class="button-nav">
                            <a class= "nav-button text-white" href="#Login">Login</a>
                        </button>
                    </ul>
                </nav>
            </div>
            <!-- Hero -->
            <div class="hero-box container flex flex-start">
                <h1 class="hero-head text-white">From Breakdown to Back on the Road.</h1>
                <p class="hero-desc text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation.</p>
            </div>
    </section>
    <section class="info-card container-card container">
        <!-- Card 1 -->
        <div class="full-info-card d-flex ">
            <div class="box-card-primary bg-primary">
                <div class="card-icon-primary">
                  <img src="{{ asset('/img/landing/info-store.svg') }}" alt="iconstore" class="infostore">
                </div>
                <h3 class="card-head-primary text-secondary">30+ Cabang Jabodetabek</h3>
                <p class="card-desc-primary text-white">
                  Bengkel BOS memiliki 30 cabang yang tersebar di area JABODETABEK. BOS hadir untuk melayani perawatan kendaraan anda dari Ban, Oli, dan Servis.
                </p>
                <button class="button-info">
                    <a href="#" class="info-button text-white">Cek Lokasi</a>
                </button>
              </div>
              
              <!-- Card 2 -->
              <div class="box-card-secondary bg-white3">
                <div class="card-icon-secondary">
                  <img src="" alt="icon2">
                </div>
                <h5 class="card-head-secondary text-dark">50+ Produk tersedia</h5>
                <p class="card-desc-secondary">
                  Kami menyediakan lebih dari 50 produk yang tersedia di semua cabang kami.
                </p>
              </div>
            
              <!-- Card 3 -->
              <div class="box-card-secondary bg-white2">
                <div class="card-icon-secondary">
                  <img src="" alt="icon3">
                </div>
                <h5 class="card-head-secondary text-dark">Customer Service</h5>
                <p class="card-desc-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                </p>
              </div>
            
              <!-- Card 4 -->
              <div class="box-card-secondary bg-white1">
                <div class="card-icon-secondary">
                  <img src="" alt="icon4">
                </div>
                <h5 class="card-head-secondary text-dark">Mekanik Berkualitas</h5>
                <p class="card-desc-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                </p>
              </div>
        </div>
      </section>
      <section class="promotion">
        <div class="container-promotion d-flex">
          <h3 class="promotion-head text-dark">Bengkel Bos Genjas Genjos</h3>
          <p class="promotion-desc">Bersama Bengkel Bos mobil anda akan kami genjas genjos</p>
          <iframe width="860" height="415" src="https://www.youtube.com/embed/zebErOjkeEk?si=jrZsK1xg2FvYkOET&autoplay=1&mute=1"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin">
          </iframe>
        </div>
      </section>
      <section class="slidesicon">
        <div class="logos bg-logoslides">
          <div class="logo-slides">
            <img src="{{ asset('/img/landing/iconslides1.svg') }}" alt="logo1">
            <img src="{{ asset('/img/landing/iconslides2.svg') }}" alt="logo2" width="250">
            <img src="{{ asset('/img/landing/iconslides3.svg') }}" alt="logo3" width="250">
            <img src="{{ asset('/img/landing/iconslides4.svg') }}" alt="logo4" >
            <img src="{{ asset('/img/landing/iconslides5.svg') }}" alt="logo5" width="250">
            <img src="{{ asset('/img/landing/iconslides6.svg') }}" alt="logo6" width="250">
            <img src="{{ asset('/img/landing/iconslides7.svg') }}" alt="logo7" width="250">
            <img src="{{ asset('/img/landing/iconslides8.svg') }}" alt="logo8" width="250">
            <img src="{{ asset('/img/landing/iconslides9.svg') }}" alt="logo9" width="250">
            <img src="{{ asset('/img/landing/iconslides10.svg') }}" alt="logo10" width="250">
          </div>
          <div class="logo-slides">
            <img src="{{ asset('/img/landing/iconslides1.svg') }}" alt="logo1">
            <img src="{{ asset('/img/landing/iconslides2.svg') }}" alt="logo2" width="250">
            <img src="{{ asset('/img/landing/iconslides3.svg') }}" alt="logo3" width="250">
            <img src="{{ asset('/img/landing/iconslides4.svg') }}" alt="logo4" >
            <img src="{{ asset('/img/landing/iconslides5.svg') }}" alt="logo5" width="250">
            <img src="{{ asset('/img/landing/iconslides6.svg') }}" alt="logo6" width="250">
            <img src="{{ asset('/img/landing/iconslides7.svg') }}" alt="logo7" width="250">
            <img src="{{ asset('/img/landing/iconslides8.svg') }}" alt="logo8" width="250">
            <img src="{{ asset('/img/landing/iconslides9.svg') }}" alt="logo9" width="250">
            <img src="{{ asset('/img/landing/iconslides10.svg') }}" alt="logo10" width="250">
          </div>
        </div>
      </section>
</body>
</html>