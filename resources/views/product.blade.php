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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        #promo {
            padding-bottom: 50px;
        }

        #products {
            padding-top: 100px;
        }
    </style>

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
        <div class="float-right">
            <form method="GET" action="{{ route('produk') }}">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari nama Produk" name="search"
                        value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
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
                        @foreach ($categories as $category)
                            <li>
                                <input type="checkbox" id="category-{{ $category->id }}">
                                <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <header>
                    <div class="promo-header contain">
                        <div class="promo-info">
                            <h1 class="font-weight-bold">Promo Bulan Ini</h1>
                            <p>Beberapa promo dari kami untuk pelanggan tercinta</p>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($promos as $index => $promo)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/' . $promo->image_path) }}"
                                                class="d-block w-100 carousel-image" alt="{{ $promo->name }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            {{-- <section id="products-grid contain">
                @foreach ($categories as $category)
                    <main class="product-section contain">
                        <h1 class="font-weight-bold">{{ $category->name }}</h1>
                        <div class="product-grid contain">
                            @foreach ($category->products as $product)
                                <div class="product-card" data-id="{{ $product->id }}">
                                    <img src="{{ asset('storage/product_images/' . $product->image) }}"
                                        alt="{{ $product->name }}">
                                    <h3>{{ $product->name }}</h3>
                                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                            @endforeach
                        </div>
                    </main>
                @endforeach
            </section> --}}
            <section id="products-grid contain">
                @if ($search)
                    <h3 class=" mt-3 font-weight-bold">Hasil Pencarian untuk "{{ $search }}"</h3>
                    @if ($filteredProducts->isEmpty())
                        <p>Tidak ada produk ditemukan.</p>
                    @else
                        <div class=" product-grid contain">
                            @foreach ($filteredProducts as $product)
                                <div class="product-card" data-id="{{ $product->id }}">
                                    <img src="{{ asset('storage/product_images/' . $product->image) }}"
                                        alt="{{ $product->name }}">
                                    <h3>{{ $product->name }}</h3>
                                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @else
                    @foreach ($categories as $category)
                        <main class="product-section contain">
                            <h1 class="font-weight-bold">{{ $category->name }}</h1>
                            <div class="product-grid contain">
                                @foreach ($category->products as $product)
                                    <div class="product-card" data-id="{{ $product->id }}">
                                        <img src="{{ asset('storage/product_images/' . $product->image) }}"
                                            alt="{{ $product->name }}">
                                        <h3>{{ $product->name }}</h3>
                                        <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </main>
                    @endforeach
                @endif
            </section>

        </section>
    </section>
    <footer id="footer" class="bg-primary">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const productCards = document.querySelectorAll('.product-card');

            productCards.forEach(card => {
                card.addEventListener('click', function() {

                    const productId = this.getAttribute('data-id');


                    window.location.href = `/produk/${productId}`;
                });
            });
        });
    </script>
</body>

</html>
