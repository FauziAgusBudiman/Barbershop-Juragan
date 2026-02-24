@extends('layout.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center">

    <div class="container">
        <h1 class="display-4 fw-bold">
            Tampil Percaya Diri Dimulai Dari 
            <span style="color:#e10600;">Potongan Rambut Terbaik</span>
        </h1>

        <a href="#services" class="btn btn-red px-4 py-2 mt-3">
            Lihat Layanan
        </a>
    </div>

</section>>

<!-- Featured Services -->
<section class="mb-5">
    <h2 class="fw-bold text-white mb-3">Layanan Unggulan</h2>
    <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
            <div class="card card-dark p-4 text-white service-card">
                <h5 class="fw-bold">Classic Haircut</h5>
                <p class="text-secondary">
                    Potongan rambut klasik dengan teknik profesional dan finishing styling premium.
                </p>
                <strong style="color:#e10600;">Rp 45.000</strong>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card card-dark p-4 text-white service-card">
                <h5 class="fw-bold">Haircut + Beard Trim</h5>
                <p class="text-secondary">
                    Paket potong rambut lengkap dengan perapihan jenggot dan kumis.
                </p>
                <strong style="color:#e10600;">Rp 75.000</strong>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card card-dark p-4 text-white service-card">
                <h5 class="fw-bold">Full Grooming Package</h5>
                <p class="text-secondary">
                    Haircut, hair wash, beard grooming, dan hot towel treatment untuk pengalaman maksimal.
                </p>
                <strong style="color:#e10600;">Rp 120.000</strong>
            </div>
        </div>
    </div>
</section>

<!-- About / Intro -->
<!-- <section class="mb-5">
    <div class="p-5 bg-dark rounded">
        <h2 class="fw-bold text-white mb-3">Barbershop Profesional di Cianjur</h2>
        <p class="text-secondary">
            Barber Juragan adalah barbershop modern yang berlokasi di Cianjur. 
            Kami berkomitmen memberikan pelayanan terbaik dengan barber berpengalaman, 
            suasana nyaman, dan hasil potongan yang presisi sesuai gaya Anda.
        </p>
    </div>
</section>  -->


<style>
.service-card {
    border-radius: 15px;
    transition: 0.3s ease;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(225, 6, 0, 0.3);
}
</style>

@endsection