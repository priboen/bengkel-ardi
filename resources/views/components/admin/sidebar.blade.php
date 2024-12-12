<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Kings Motor</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KM</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-tags"></i>
                    <span>Produk</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">Data Produk</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('categories.index') }}">Kategori Produk</a>
                    </li>
                    <li>
                        <a class="nav-link" href="">Barang Masuk</a>
                    </li>
                    <li>
                        <a class="nav-link" href="">Barang Keluar</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Beranda</li>
            <li>
                <a class="nav-link" href="{{ url('blank-page') }}"><i class="far fa-percent"></i> <span>Promo</span></a>
            </li>
            <li>
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Konten Beranda</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="">Video Beranda</a>
                    </li>
                    <li>
                        <a class="nav-link" href="">Profil Perusahaan</a>
                    </li>
                </ul>
            </li>
            <div class="hide-sidebar-mini mt-4 mb-4 p-3">
                <a href="https://getstisla.com/docs" class="btn btn-danger btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Keluar
                </a>
            </div>
    </aside>
</div>
