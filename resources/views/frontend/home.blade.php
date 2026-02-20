@extends('layout.app')

@section('content')

<!-- Hero Section -->
<section class="text-center text-white mb-5" style="padding: 120px 0;">
    <h1 class="display-4 fw-bold">
        Tampil Percaya Diri Dimulai Dari <span style="color:#e10600;">Potongan Rambut Terbaik</span>
    </h1>
    <!-- <p class="lead text-secondary">
        Barber Juragan menghadirkan layanan haircut & grooming profesional 
        dengan sentuhan modern dan harga terjangkau.
    </p> -->
    <a href="/services" class="btn btn-red px-4 py-2 mt-3">
        Lihat Layanan
    </a>
</section>

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
<section class="mb-5">
    <div class="p-5 bg-dark rounded">
        <h2 class="fw-bold text-white mb-3">Barbershop Profesional di Cianjur</h2>
        <p class="text-secondary">
            Barber Juragan adalah barbershop modern yang berlokasi di Cianjur. 
            Kami berkomitmen memberikan pelayanan terbaik dengan barber berpengalaman, 
            suasana nyaman, dan hasil potongan yang presisi sesuai gaya Anda.
        </p>
    </div>
</section>

<!-- Location -->
<section class="mb-5">
    <h2 class="fw-bold text-white mb-3">Lokasi Kami</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-dark p-4 text-white">
                <h5 class="fw-bold">Barber Juragan – Cianjur</h5>
                <p class="text-secondary mb-2">
                    📍 Jln. Adi Sucipta, Cianjur  
                    <br>(Depan Polsek Cianjur Kota)
                </p>
                <p class="text-secondary mb-2">
                    🕒 Buka Setiap Hari  
                    10.00 – 22.00 WIB
                </p>
                <p class="text-secondary">
                    📞 08XX-XXXX-XXXX
                </p>
                <a href="/contact" class="btn btn-red mt-2">
                    Hubungi Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Reservation -->
<!-- <section class="text-center mb-5">
    <p class="lead text-secondary">
        Siap tampil lebih percaya diri?
    </p>
    <a href="/contact" class="btn btn-red btn-lg">
        Reservasi Sekarang
    </a>
</section> -->

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