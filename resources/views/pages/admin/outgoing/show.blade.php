@extends('layouts.admin.app')

@section('title', 'Barang Keluar')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail {{ $outgoing->product->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('outgoing.index') }}">Barang Keluar</a></div>
                    <div class="breadcrumb-item active">Detail Barang Keluar</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail Barang Keluar</h2>
                <p class="section-lead">
                    Informasi tentang barang keluar atas produk Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal Barang Keluar</label>
                                    <p>{{ $outgoing->outgoing_date }}</p>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Produk</label>
                                        <p>{{ $outgoing->product->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kategori Produk</label>
                                        <p>{{ $outgoing->product->category->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Kuantitas</label>
                                        <p>{{ $outgoing->quantity }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Harga Satuan</label>
                                        <p>{{ $outgoing->price }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Total Harga</label>
                                        <p>{{ $outgoing->total }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alasan</label>
                                        <p>{{ $outgoing->reason }}</p>
                                    </div>
                                </div>
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
