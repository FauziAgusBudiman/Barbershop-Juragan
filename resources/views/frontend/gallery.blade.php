@extends('layout.app')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold">
        Our <span style="color:#e10600;">Gallery</span>
    </h1>
    <p class="text-secondary">
        Hasil potongan terbaik dari barber profesional kami.
    </p>
</div>

<div class="row">

    <!-- Style 1 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style1.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Low Fade Cut</span>
            </div>
        </div>
    </div>

    <!-- Style 2 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style2.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Pompadour Style</span>
            </div>
        </div>
    </div>

    <!-- Style 3 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style3.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Classic Gentleman Cut</span>
            </div>
        </div>
    </div>

    <!-- Style 4 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style4.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Undercut Modern</span>
            </div>
        </div>
    </div>

    <!-- Style 5 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style5.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Textured Crop</span>
            </div>
        </div>
    </div>

    <!-- Style 6 -->
    <div class="col-md-4 mb-4">
        <div class="gallery-card">
            <img src="{{ asset('images/style6.jpg') }}" class="img-fluid gallery-img">
            <div class="overlay">
                <span>Beard Grooming Style</span>
            </div>
        </div>
    </div>

</div>

<style>
.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    border: 2px solid #1f1f1f;
    transition: 0.3s ease;
}

.gallery-card:hover {
    box-shadow: 0 15px 30px rgba(225, 6, 0, 0.3);
}

.gallery-img {
    height: 260px;
    width: 100%;
    object-fit: cover;
    transition: 0.4s ease;
}

.gallery-card:hover .gallery-img {
    transform: scale(1.1);
}

.overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0,0,0,0.6);
    text-align: center;
    padding: 10px;
    color: #e10600;
    font-weight: bold;
    letter-spacing: 1px;
    opacity: 0;
    transition: 0.3s ease;
}

.gallery-card:hover .overlay {
    opacity: 1;
}
</style>

@endsection