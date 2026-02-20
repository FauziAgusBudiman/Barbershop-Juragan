@extends('layout.app')

@section('content')

<!-- Heading -->
<div class="text-center mb-5">
    <h1 class="fw-bold">
        About <span style="color:#e10600;">Barber Juragan</span>
    </h1>
    <p class="text-secondary">
        Lebih dari sekadar potong rambut. Kami membangun kepercayaan diri.
    </p>
</div>

<!-- About Content -->
<div class="row align-items-center mb-5">

    <!-- Image -->
    <div class="col-md-6 mb-4">
        <img src="{{ asset('images/Logo.jpeg') }}" 
             class="img-fluid rounded shadow"
             style="border-radius:15px;">
    </div>

    <!-- Text -->
    <div class="col-md-6">
        <h3 class="fw-bold mb-3">Barbershop Profesional di Cianjur</h3>
        <p class="text-secondary">
            Barber Juragan hadir untuk memberikan layanan haircut dan grooming 
            terbaik bagi pria modern. Dengan barber berpengalaman dan teknik 
            terkini, kami memastikan setiap pelanggan mendapatkan hasil potongan 
            yang presisi dan sesuai karakter.
        </p>

        <p class="text-secondary">
            Berlokasi di Jln. Adi Sucipta, Cianjur (Depan Polsek Cianjur Kota), 
            kami menyediakan suasana nyaman, pelayanan ramah, dan standar kebersihan 
            yang tinggi untuk pengalaman terbaik Anda.
        </p>

        <a href="/services" class="btn btn-red mt-3">
            Lihat Layanan Kami
        </a>
    </div>

</div>

<!-- Vision Mission -->
<div class="row text-center mb-5">

    <div class="col-md-6 mb-4">
        <div class="card card-dark p-4 text-white h-100">
            <h4 class="fw-bold mb-3" style="color:#e10600;">Our Vision</h4>
            <p class="text-secondary">
                Menjadi barbershop terpercaya di Cianjur dengan kualitas layanan 
                terbaik dan standar profesional.
            </p>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card card-dark p-4 text-white h-100">
            <h4 class="fw-bold mb-3" style="color:#e10600;">Our Mission</h4>
            <p class="text-secondary">
                Memberikan pelayanan terbaik, meningkatkan keterampilan barber 
                secara berkelanjutan, dan menciptakan pengalaman grooming yang 
                nyaman serta memuaskan.
            </p>
        </div>
    </div>

</div>

@endsection