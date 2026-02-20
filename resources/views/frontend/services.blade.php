@extends('layout.app')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold">
        Our <span style="color:#e10600;">Services</span>
    </h1>
    <p class="text-secondary">
        Professional grooming services with premium experience.
    </p>
</div>

<div class="row">

    <!-- Classic Haircut -->
    <div class="col-md-4">
        <div class="card card-dark mb-4 p-4 text-white service-card">
            <h5 class="fw-bold mb-2">Classic Haircut</h5>
            <p class="text-secondary mb-3">
                Potongan rambut klasik dengan teknik profesional dan styling sesuai bentuk wajah.
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold" style="color:#e10600; font-size:18px;">
                    Rp 45.000
                </span>
                <a href="/contact" class="btn btn-red btn-sm">
                    Book Now
                </a>
            </div>
        </div>
    </div>

    <!-- Haircut + Wash -->
    <div class="col-md-4">
        <div class="card card-dark mb-4 p-4 text-white service-card">
            <h5 class="fw-bold mb-2">Haircut + Hair Wash</h5>
            <p class="text-secondary mb-3">
                Paket potong rambut lengkap dengan pencucian rambut dan styling menggunakan produk premium.
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold" style="color:#e10600; font-size:18px;">
                    Rp 60.000
                </span>
                <a href="/contact" class="btn btn-red btn-sm">
                    Book Now
                </a>
            </div>
        </div>
    </div>

    <!-- Haircut + Beard Grooming -->
    <div class="col-md-4">
        <div class="card card-dark mb-4 p-4 text-white service-card">
            <h5 class="fw-bold mb-2">Haircut + Beard Grooming</h5>
            <p class="text-secondary mb-3">
                Potong rambut sekaligus perapihan jenggot dan kumis agar tampil lebih rapi dan maskulin.
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold" style="color:#e10600; font-size:18px;">
                    Rp 75.000
                </span>
                <a href="/contact" class="btn btn-red btn-sm">
                    Book Now
                </a>
            </div>
        </div>
    </div>

    <!-- Full Grooming -->
    <div class="col-md-4">
        <div class="card card-dark mb-4 p-4 text-white service-card">
            <h5 class="fw-bold mb-2">Full Grooming Package</h5>
            <p class="text-secondary mb-3">
                Haircut, hair wash, beard trim, hot towel treatment, dan styling premium untuk pengalaman maksimal.
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold" style="color:#e10600; font-size:18px;">
                    Rp 120.000
                </span>
                <a href="/contact" class="btn btn-red btn-sm">
                    Book Now
                </a>
            </div>
        </div>
    </div>

</div>

<style>
.service-card {
    transition: 0.3s ease;
    border-radius: 15px;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(225, 6, 0, 0.3);
}
</style>

@endsection