@extends('layouts.admin.app')

@section('title', 'Barang Masuk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Barang Masuk</h1>
                <div class="section-header-button">
                    <a href="{{ route('incoming.create') }}" class="btn btn-primary">Tambah</a>
                    <a href="{{ route('export.incoming-items') }}" class="btn btn-success">Export Excel</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active">Barang Masuk</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Barang Masuk</h2>
                <p class="section-lead">
                    Kamu dapat mengatur seluruh Barang Masuk, seperti mengedit, menghapus dan lainnya.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Barang Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Cari Tanggal Barang Masuk atau Produk" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Kuantitas</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($incoming as $ic)
                                            <tr>
                                                <td>{{ $ic->product->name }}</td>
                                                <td>{{ $ic->product->category->name }}</td>
                                                <td>{{ $ic->incoming_date }}</td>
                                                <td>{{ $ic->quantity }}</td>
                                                <td>{{ $ic->total }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a href='{{ route('incoming.show', $ic->id) }}'
                                                            class="btn btn-sm btn-info btn-icon ml-2">
                                                            <i class="fas fa-info ml-2"></i>
                                                            Detail
                                                        </a>
                                                        <form action="{{ route('incoming.destroy', $ic->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $incoming->withQueryString()->links() }}
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
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
