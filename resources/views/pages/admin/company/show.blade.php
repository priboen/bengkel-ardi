@extends('layouts.admin.app')

@section('title', 'Perusahaan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile Perusahaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile Perusahaan</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Profil Perusahaan</h2>
                <p class="section-lead">
                    Informasi tentang perusahaan Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Perusahaan</label>
                                        <p>{{ $company->name ?? 'Belum Diatur' }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat Perusahaan</label>
                                        <p>{{ $company->address ?? 'Belum Diatur' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email Perusahaan</label>
                                        <p>{{ $company->email ?? 'Belum Diatur' }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nomor Telepon/Fax</label>
                                        <p>{{ $company->phone ?? 'Belum Diatur' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit Profil
                                    Perusahaan</a>
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
