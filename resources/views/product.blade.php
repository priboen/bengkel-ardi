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

    @stack('style')

    <link rel="stylesheet" href={{ asset('css/product/style.css') }}>
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <nav id="navbar">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo"></a>
        <div class="nav-links">
            <ul>
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('produk') }}" class="active">Product</a></li>
            </ul>
        </div>
    </nav>
    <section id="hero">
        <div class="banner">
            <div class="contain">
                <div class="text text-white">
                    <h1 class="font-weight-bold">Produk</h1>
                    <p>Dapatkan informasi dan pesan produk dari King's Motor.</p>
                </div>
            </div>
        </div>
    <section id="promo">
    <div class="contain promo-box d-flex">
        <div class="sidebar contain">
            <h1 class="font-weight-bold">Category</h1>
            <ul>
                <li><input type="checkbox" id="ban"><label for="ban">Ban</label></li>
                <li><input type="checkbox" id="oli"><label for="oli">Oli</label></li>
                <li><input type="checkbox" id="servis"><label for="servis">Servis</label></li>
                <li><input type="checkbox" id="aki"><label for="aki">Aki</label></li>
                <li><input type="checkbox" id="5w30"><label for="5w30">5W-30</label></li>
                <li><input type="checkbox" id="5w40"><label for="5w40">5W-40</label></li>
            </ul>
            <button type="submit" class="container-btn btn btn-lg btn-primary">Search</button>
        </div>
        <header>
        <div class="promo-header contain">
            <div class="promo-info">
                <h1 class="font-weight-bold">Promo Bulan Ini</h1>
                <p>Beberapa promo dari kami untuk pelanggan tercinta</p>
                <div class="promo-banner">
                    <img src="{{ asset('/img/hero1.png') }}" alt="Promo Bengkel" width="950">
                </div>
            </div>
        </div>
        </header>
    </div>
    <section id="products">
            <main class="product-section contain">
                <h1 class="font-weight-bold">Ban</h1>
                <div class="product-grid contain">
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="Ventus Prime 3">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="ban">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="ban">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="ban">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="ban">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/ban.png') }}" alt="ban">
                    <h3>Ventus Prime 3</h3>
                    <p>Rp15.190.000</p>
                    </div>
                </div>
            </main>
            <main class="product-section contain">
                <h1 class="font-weight-bold">Oli</h1>
                <div class="product-grid contain">
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/oli.png') }}" alt="Ventus Prime 3">
                    <h3>Paket Oli 5W-30</h3>
                    <p>Rp1.200.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/oli.png') }}" alt="ban">
                    <h3>Paket Oli 5W-30</h3>
                    <p>Rp1.200.000</p>
            </main>
            <main class="product-section contain">
                <h1 class="font-weight-bold">Servis</h1>
                <div class="product-grid contain">
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/servis.png') }}" alt="Ventus Prime 3">
                    <h3>Power Tune Uo</h3>
                    <p>Rp6.200.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/servis.png') }}" alt="ban">
                    <h3>FreshCool</h3>
                    <p>Rp1.300.000</p>
            </main>
            <main class="product-section contain">
                <h1 class="font-weight-bold">Aki/ACCU</h1>
                <div class="product-grid contain">
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/aki.png') }}" alt="Ventus Prime 3">
                    <h3>Aki Solite</h3>
                    <p>Rp1.400.000</p>
                    </div>
                    <div class="product-card">
                    <img src="{{ asset('/img/bengkel-product/aki.png') }}" alt="ban">
                    <h3>Aki Solite</h3>
                    <p>Rp1.400.000</p>
            </main>
        </section>
    <footer id="footer" class="bg-primary">
        <div class="contain d-flex justify-content-between align-items-center">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo" width="150" height="100"></a>
        <div class="">
            <h5 class="copyright text-white font-weight-bold">Copyright © 2024 King's Motorcycle</h5>
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
