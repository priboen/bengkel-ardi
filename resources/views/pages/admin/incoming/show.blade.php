@extends('layouts.admin.app')

@section('title', 'Barang Masuk')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail {{ $incoming->product->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}">Produk</a></div>
                    <div class="breadcrumb-item active">Detail Barang Masuk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail Barang Masuk</h2>
                <p class="section-lead">
                    Informasi tentang barang masuk atas produk Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <img alt="image" src="{{ asset('storage/incoming_images/' . $incoming->image) }}"
                                    class="img-thumbnail mb-3" style="max-width: 200px;">
                                <div class="form-group">
                                    <label>Tanggal Barang Masuk</label>
                                    <p>{{ $incoming->incoming_date }}</p>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Produk</label>
                                        <p>{{ $incoming->product->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kategori Produk</label>
                                        <p>{{ $incoming->product->category->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kuantitas</label>
                                        <p>{{ $incoming->quantity }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Harga Satuan</label>
                                        <p>{{ $incoming->price }} KM</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Total Harga</label>
                                        <p>{{ $incoming->total }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kondisi Barang</label>
                                        <p>{{ $incoming->condition }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('incoming.edit', $incoming->id) }}" class="btn btn-primary">Edit
                                    Produk</a>
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
