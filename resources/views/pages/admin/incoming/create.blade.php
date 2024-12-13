@extends('layouts.admin.app')

@section('title', 'Barang Masuk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Masukan Data Barang Masuk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('incoming.index') }}">Barang Masuk</a></div>
                    <div class="breadcrumb-item">Tambah Barang Masuk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Barang Masuk</h2>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('incoming.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4>Masukan Data Barang Masuk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="barcode" class="mr-3">Produk</label>
                                        <input type="text" id="barcode" name="barcode" class="form-control mr-2"
                                            placeholder="Scan barcode produk..." required>
                                        <input type="hidden" id="product_id" name="product_id">
                                        <button type="button" id="toggle-readonly" class="btn btn-danger">Scan</button>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" id="product_name" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Produk</label>
                                        <input type="text" id="category_name" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nota Faktur/Kwitansi</label>
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Masuknya Barang</label>
                                        <input type="text"
                                            class="form-control datepicker @error('incoming_date')
                                        is-invalid
                                    @enderror"
                                            name="incoming_date">
                                        @error('incoming_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Barang Masuk</label>
                                        <input type="text"
                                            class="form-control @error('quantity')
                                        is-invalid
                                    @enderror"
                                            name="quantity">
                                        @error('quantity')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Satuan</label>
                                        <input type="text"
                                            class="form-control @error('price')
                                        is-invalid
                                    @enderror"
                                            name="price">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Kondisi</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="condition" value="bagus"
                                                    class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Bagus</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="condition" value="sebagian bagus"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Sebagian Bagus</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="condition" value="rusak"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Rusak</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barcodeInput = document.getElementById('barcode');
            const toggleReadonlyButton = document.getElementById('toggle-readonly');
            toggleReadonlyButton.addEventListener('click', function() {
                if (barcodeInput.hasAttribute('readonly')) {
                    barcodeInput.removeAttribute('readonly');
                    barcodeInput.focus();
                    this.textContent = 'Selesai';
                    this.classList.replace('btn-danger', 'btn-primary');
                } else {
                    barcodeInput.setAttribute('readonly', true);
                    this.textContent = 'Scan';
                    this.classList.replace('btn-primary', 'btn-danger');
                }
            });
            barcodeInput.addEventListener('focus', function() {
                console.log('Ready to scan or input barcode...');
            });
            barcodeInput.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                if (!barcodeInput.value.trim()) {
                    Swal.fire({
                        title: 'Peringatan!',
                        text: 'Tolong lakukan input atau scan barcode terlebih dahulu!',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                    event.preventDefault();
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barcodeInput = document.getElementById('barcode');
            const productIdInput = document.getElementById('product_id');
            const productNameInput = document.getElementById('product_name');
            const categoryNameInput = document.getElementById('category_name');

            barcodeInput.addEventListener('change', async function() {
                const barcode = barcodeInput.value;

                if (barcode.trim() !== '') {
                    try {
                        const response = await fetch(`/api/products/${barcode}`);
                        if (response.ok) {
                            const product = await response.json();

                            productIdInput.value = product.id;
                            productNameInput.value = product.name;
                            categoryNameInput.value = product.category_name;

                            Swal.fire({
                                title: 'Produk Ditemukan!',
                                text: `Nama Produk: ${product.name}\nKategori: ${product.category_name}`,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            throw new Error('Produk tidak ditemukan!');
                        }
                    } catch (error) {
                        Swal.fire({
                            title: 'Error!',
                            text: error.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        productIdInput.value = '';
                        productNameInput.value = '';
                        categoryNameInput.value = '';
                    }
                }
            });
        });
    </script>
    <script>
        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
        @if (session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
        @if ($errors->any())
            Swal.fire({
                title: 'Error!',
                html: '{!! implode('<br>', $errors->all()) !!}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endpush
