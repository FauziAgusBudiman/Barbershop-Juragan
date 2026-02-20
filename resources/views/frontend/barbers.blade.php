@extends('layout.app')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold">
        Meet Our <span style="color:#e10600;">Professional Barbers</span>
    </h1>
    <p class="text-secondary">
        Skilled. Experienced. Passionate about style.
    </p>
</div>

<div class="row">

    <!-- Barber 1 -->
    <div class="col-md-4 text-center">
        <div class="card card-dark text-white mb-4 service-card">
            <img src="{{ asset('images/barber1.jpg') }}"
                 style="height:300px; object-fit:cover; border-top-left-radius:15px; border-top-right-radius:15px;">

            <div class="card-body">
                <h5 class="fw-bold">Rizky Pratama</h5>
                <p class="text-secondary">Fade & Modern Style Specialist</p>
                <small style="color:#e10600;">5+ Years Experience</small>
            </div>
        </div>
    </div>

    <!-- Barber 2 -->
    <div class="col-md-4 text-center">
        <div class="card card-dark text-white mb-4 service-card">
            <img src="{{ asset('images/barber2.jpg') }}"
                 style="height:300px; object-fit:cover; border-top-left-radius:15px; border-top-right-radius:15px;">

            <div class="card-body">
                <h5 class="fw-bold">Andi Saputra</h5>
                <p class="text-secondary">Beard Grooming Expert</p>
                <small style="color:#e10600;">7+ Years Experience</small>
            </div>
        </div>
    </div>

    <!-- Barber 3 -->
    <div class="col-md-4 text-center">
        <div class="card card-dark text-white mb-4 service-card">
            <img src="{{ asset('images/barber3.jpg') }}"
                 style="height:300px; object-fit:cover; border-top-left-radius:15px; border-top-right-radius:15px;">

            <div class="card-body">
                <h5 class="fw-bold">Fajar Nugraha</h5>
                <p class="text-secondary">Classic & Executive Cut Specialist</p>
                <small style="color:#e10600;">6+ Years Experience</small>
            </div>
        </div>
    </div>

</div>

<style>
.service-card {
    border-radius: 15px;
    transition: 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(225, 6, 0, 0.3);
}
</style>

@endsection