<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>King's Motor Products</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </script>

    @stack('style')

    <link rel="stylesheet" href={{ asset('css/product/style.css') }}>
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <nav id="navbar">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="nav-links">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('produk') }}">Product</a>
                    </li>
                </ul>
            </div>
            <div class="float-right">
                <form method="GET" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari nama Produk" name="name">
                        <div class ="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div class="contain">
            <div class="text text-white">
                <h1 class="font-weight-bold">From Breakdown to Back <br>on the Road.</br></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</br>
                    ad minim veniam, quis nostrud exercitation.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Produk</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/product_images/' . $product->image) }}" alt="{{ $product->name }}"
                            class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2>{{ $product->name }}</h2>
                        <p class="text-muted">Harga: <strong>Rp
                                {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                        <p>Stok Tersedia: <strong>{{ $product->stock }}</strong></p>
                        <a href="{{ route('produk') }}" class="btn btn-primary mt-3">Kembali ke Produk</a>
                        <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo, saya tertarik untuk membeli produk ' . $product->name . ' dengan harga Rp ' . number_format($product->price, 0, ',', '.') . '. Apakah masih tersedia?') }}"
                            target="_blank" class="btn btn-success mt-3">
                            <i class="fab fa-whatsapp"></i> Pesan Sekarang!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="bg-primary mt-8">
        <div class="contain d-flex justify-content-between align-items-center">
            <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo" width="150"
                    height="100"></a>
            <div class="">
                <h5 class="copyright text-white">Copyright © 2024 King's Motorcycle</h5>
            </div>
            <a href="#" class="footer-link text-white">Kebijakan & Privasi</a>
    </footer>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
