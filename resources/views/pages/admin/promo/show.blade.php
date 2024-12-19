@extends('layouts.admin.app')

@section('title', 'Promo')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail {{ $promo->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}">Promo</a></div>
                    <div class="breadcrumb-item active">Detail Promo</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Detail Promo</h2>
                <p class="section-lead">
                    Informasi tentang promo Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <img alt="image" src="{{ asset('storage/product_images/' . $product->image) }}"
                                    class="img-thumbnail mb-3" style="max-width: 200px;">
                                <div class="form-group">
                                    <label>Nama Promo</label>
                                    <p>{{ $product->name }}</p>
                                </div>
                                <form action="{{ route('promos.destroy', $pd->id) }}" method="POST" class="ml-2">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                        <i class="fas fa-times"></i> Delete
                                    </button>
                                </form>
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
