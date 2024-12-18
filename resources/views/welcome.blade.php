<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>King's Motor Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <nav id="navbar">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo"></a>
        <div class="nav-links">
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="{{ route('produk') }}">Product</a></li>
            </ul>
        </div>
    </nav>
    <div class="banner">
        <div class="contain">
            <div class="text text-white">
                <h1 class="font-weight-bold">From Breakdown to Back <br>on the Road.</br></h1>
                <p ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</br>
                    ad minim veniam, quis nostrud exercitation.</p>
            </div>
        </div>
    </div>
    <section class="info-card container-card contain">
        <!-- Card 1 -->
        <div class="full-info-card d-flex">
            <div class="banner-info-card">
                <div class="contain">
                    <img src="{{ asset('/img/landing/info-store.svg') }}" alt="product" class="icon1">
                    <div class="text">
                        <h3 class="contain text-secondary">
                            30+ Cabang Jabodetabek
                        </h3>
                        <p class="contain text-white">
                            Bengkel BOS memiliki 30 cabang yang tersebar di area JABODETABEK. BOS hadir untuk
                            melayani
                            perawatan
                            kendaraan anda dari Ban, Oli, dan Servis.
                        </p>
                    </div>

                </div>
            </div>
            <!-- Card 2 -->
            <div class="box-card-secondary bg-white3">
                <div class="card-icon-secondary">
                    <img src="{{ asset('/img/landing/icon-product.svg') }}" alt="icon2" class="icon2">
                </div>
                <h6 class="card-head-secondary text-dark">50+ Produk tersedia</h6>
                <p class="card-desc-secondary">
                    Kami menyediakan lebih dari 50 produk yang tersedia di semua cabang kami.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="box-card-secondary bg-white2">
                <div class="card-icon-secondary">
                    <img src="{{ asset('/img/landing/icon-cs.svg') }}" alt="icon3" class="icon3">
                </div>
                <h6 class="card-head-secondary text-dark">Customer Service</h6>
                <p class="card-desc-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="box-card-secondary bg-white1">
                <div class="card-icon-secondary">
                    <img src="{{ asset('/img/landing/icon-wrench.svg') }}" alt="icon4" class="icon4">
                </div>
                <h6 class="card-head-secondary text-dark">Mekanik Berkualitas</h6>
                <p class="card-desc-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                </p>
            </div>
        </div>
    </section>
    <section class="slidesicon">
        <div class="logos">
            <div class="logo-slides">
                <img src="{{ asset('/img/landing/iconslides1.svg') }}" alt="logo1">
                <img src="{{ asset('/img/landing/iconslides2.svg') }}" alt="logo2" width="250">
                <img src="{{ asset('/img/landing/iconslides3.svg') }}" alt="logo3" width="250">
                <img src="{{ asset('/img/landing/iconslides4.svg') }}" alt="logo4">
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
                <img src="{{ asset('/img/landing/iconslides4.svg') }}" alt="logo4">
                <img src="{{ asset('/img/landing/iconslides5.svg') }}" alt="logo5" width="250">
                <img src="{{ asset('/img/landing/iconslides6.svg') }}" alt="logo6" width="250">
                <img src="{{ asset('/img/landing/iconslides7.svg') }}" alt="logo7" width="250">
                <img src="{{ asset('/img/landing/iconslides8.svg') }}" alt="logo8" width="250">
                <img src="{{ asset('/img/landing/iconslides9.svg') }}" alt="logo9" width="250">
                <img src="{{ asset('/img/landing/iconslides10.svg') }}" alt="logo10" width="250">
            </div>
        </div>
    </section>
    <section class="bg-primary location">
        <div class="contain">
            <div class="container-location justify-content-between d-flex">
                <div class="location-title text">
                <h1 class="location-name"> Lokasi </h1>
                </div>
                <div class="location-body text">
                <h1 class="location-head">Kings Motorcycle</h1>
                <p class="location-desc d-flex">
                    Bali United Office / Wisma Achilles Jl. Panjang No.29, RT.8/RW.1,
                    Kedoya Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus
                    Jakarta 11510
                </p> <label class="text"> (021) 56949669 </label>
                <p>
                    boscare@bengkelbos.co.id
                </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div id="app">
            <div class="contain container-contact">
                <div class="row">
                    <div class="contact-box col-12 col-md-12 col-lg-10 p-0 d-flex flex-row-reverse gap-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.316774763866!2d112.60862778600742!3d-7.966178158906411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788286b690daf5%3A0xd4c41035e86e672e!2sNasi%20Cumi%20Hitam%20Madura%20Pak%20Kris!5e0!3m2!1sid!2sid!4v1734185133265!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="card-body">
                            <div class="text-primary text-center">
                                <h1>Kontak Kami</h1>
                            </div>
                            <form method="POST">
                                <div class="form-group floating-addon">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <input id="name"
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            autofocus
                                            placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group floating-addon">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input id="email"
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" placeholder="Masukkan pesan anda" data-height="150"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit"
                                        class="container-btn btn btn-lg btn-primary">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7 p-0">
                        <div id="map"
                            class=""></div>
                    </div>
                </div>
            </div>
    </section>
    <footer id="footer" class="bg-primary">
        <div class="contain d-flex justify-content-between align-items-center">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo" width="150" height="100"></a>
        <div class="">
            <h5 class="copyright text-white">Copyright © 2024 King's Motorcycle</h5>
        </div>
        <a href="#" class="footer-link text-white">Kebijakan & Privasi</a>
    </footer>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) { // Jika pengguna menggulir lebih dari 50px
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
