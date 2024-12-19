<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Kings Motor</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">KM</a>
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
                        <a class="nav-link" href="{{ route('incoming.index') }}">Barang Masuk</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('outgoing.index') }}">Barang Keluar</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Beranda</li>
            <li>
                <a class="nav-link" href="{{ route('promos.index') }}"><i class="far fa-percent"></i>
                    <span>Promo</span></a>
            </li>
            <li>
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Konten Beranda</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="">Video Beranda</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('companies.show', 1) }}">Profil Perusahaan</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
