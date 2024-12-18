<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/product/style.css') }}>
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
</head>

<body>
    <nav id="navbar">
        <a href="#"><img src="{{ asset('img/kings-logo.svg') }}" alt="logo"></a>
        <div class="nav-links">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#" class="active">Product</a></li>
            </ul>
        </div>
    </nav>

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
