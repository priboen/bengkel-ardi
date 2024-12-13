@extends('layouts.admin.app')

@section('title', 'Produk')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail {{ $product->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}">Produk</a></div>
                    <div class="breadcrumb-item active">Detail Produk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail Produk</h2>
                <p class="section-lead">
                    Informasi tentang produk Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-widget-header">
                                    <img alt="image" src="{{ asset('storage/product_images/' . $product->image) }}"
                                        class="rounded-circle profile-widget-picture">
                                    <div class="profile-widget-items">
                                        <div class="profile-widget-item">
                                            <div class="profile-widget-item-label">Email</div>
                                            <div class="profile-widget-item-value">{{ auth()->user()->email }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Produk</label>
                                        <p>{{ $product->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kategori Produk</label>
                                        <p>{{ $product->category->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Harga Produk</label>
                                        <p>{{ $product->price }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Ditambahkan pada</label>
                                        <p>{{ $product->created_at }} KM</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Deskripsi Produk</label>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Barcode</label>
                                        <p>{{ $product->barcode }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
