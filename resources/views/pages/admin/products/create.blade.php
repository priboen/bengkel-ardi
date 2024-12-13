@extends('layouts.admin.app')

@section('title', 'Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Masukan Data Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}">Produk</a></div>
                    <div class="breadcrumb-item">Tambah Produk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Produk</h2>
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4>Masukan Data Produk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="barcode" class="mr-3">Barcode</label>
                                        <input type="text" id="barcode" name="barcode" class="form-control mr-2"
                                            readonly required>
                                        <button type="button" id="toggle-readonly" class="btn btn-danger">Scan</button>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar Product</label>
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text"
                                            class="form-control @error('name')
                                        is-invalid
                                    @enderror"
                                            name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Kategori Produk</label>
                                        <select name="category_id"
                                            class="form-control select2 @error('category_id') is-invalid @enderror">
                                            <option disabled selected>Ketuk untuk menambahkan data</option>
                                            @foreach ($category as $ctg)
                                                <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <input type="text-area"
                                            class="form-control @error('description')
                                        is-invalid
                                    @enderror"
                                            name="description">
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    Rp
                                                </div>
                                            </div>
                                            <input type="text"
                                                class="form-control currency @error('price')
                                                is-invalid
                                                @enderror"
                                                name="price">
                                            @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                    alert('Tolong lakukan input atau scan barcode terlebih dahulu!');
                    event.preventDefault();
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
@endpush
