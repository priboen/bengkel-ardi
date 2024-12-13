@extends('layouts.admin.app')

@section('title', 'Barang Keluar')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Barang Keluar</h1>
                <div class="section-header-button">
                    <a href="{{ route('outgoing.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active">Barang Keluar</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Barang Keluar</h2>
                <p class="section-lead">
                    Kamu dapat mengatur seluruh Barang Keluar, seperti mengedit, menghapus dan lainnya.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Barang Keluar</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Cari Tanggal Barang Keluar atau Produk" name="name">
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
                                            <th>Tanggal Keluar</th>
                                            <th>Kuantitas</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($outgoing as $og)
                                            <tr>
                                                <td>{{ $og->product->name }}</td>
                                                <td>{{ $og->product->category->name }}</td>
                                                <td>{{ $og->outgoing_date }}</td>
                                                <td>{{ $og->quantity }}</td>
                                                <td>{{ $og->total }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a href='{{ route('outgoing.show', $og->id) }}'
                                                            class="btn btn-sm btn-info btn-icon ml-2">
                                                            <i class="fas fa-info ml-2"></i>
                                                            Detail
                                                        </a>
                                                        <form action="{{ route('outgoing.destroy', $og->id) }}"
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
                                    {{ $outgoing->withQueryString()->links() }}
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
