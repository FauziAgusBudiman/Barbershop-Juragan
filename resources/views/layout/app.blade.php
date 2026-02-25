<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber Juragan | Grooming Profesional Cianjur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-red: #ff1e1e;
            --dark-bg: #0a0a0a;
            --card-bg: #141414;
            --text-gray: #a0a0a0;
            --transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        body {
            background: var(--dark-bg);
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, .navbar-brand {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* --- Scrollbar --- */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #000; }
        ::-webkit-scrollbar-thumb { background: var(--primary-red); }

        /* --- Navbar --- */
        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 12px 0;
        }

        .nav-link {
            font-size: 0.85rem;
            letter-spacing: 1px;
            position: relative;
            font-weight: 600;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0; height: 2px;
            bottom: 0; left: 50%;
            background: var(--primary-red);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover::after { width: 80%; }

        /* --- Hero Section --- */
        .section-padding { padding: 120px 0; }
        
        .hero-glow {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(255, 30, 30, 0.15) 0%, transparent 70%);
            z-index: -1;
        }

        .img-hero-wrapper {
            position: relative;
            padding: 15px;
        }

        .img-hero-wrapper::before {
            content: '';
            position: absolute;
            inset: 0;
            border: 2px solid var(--primary-red);
            border-radius: 30px;
            transform: rotate(-3deg);
            z-index: -1;
            opacity: 0.3;
        }

        .img-hero {
            border-radius: 20px;
            filter: grayscale(20%);
            transition: var(--transition);
        }

        .img-hero:hover { filter: grayscale(0%); }

        /* --- Service Cards --- */
        .card-dark {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            transition: var(--transition);
        }

        .service-card:hover {
            background: #1c1c1c;
            border-color: rgba(255, 30, 30, 0.4);
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.6);
        }

        .price-tag {
            background: rgba(255, 30, 30, 0.1);
            color: var(--primary-red);
            padding: 5px 15px;
            border-radius: 50px;
            display: inline-block;
        }

        /* --- MASTER BARBER & GALLERY ANIMATION --- */
        .barber-card, .gallery-card {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            background: #111;
            cursor: pointer;
        }

        .barber-img, .gallery-img {
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1), filter 0.5s ease;
            transform: scale(1);
        }

        .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(255, 30, 30, 0.2) 100%);
            opacity: 0;
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: all 0.5s ease;
            transform: translateY(15px);
            z-index: 2;
        }

        /* Hover State */
        .barber-card:hover .barber-img, 
        .gallery-card:hover .gallery-img {
            transform: scale(1.15);
            filter: brightness(60%) contrast(1.1);
        }

        .barber-card:hover .overlay, 
        .gallery-card:hover .overlay {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- WA Button --- */
        .btn-wa {
            position: fixed;
            bottom: 30px; right: 30px;
            background: #25d366;
            color: white;
            width: 60px; height: 60px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 30px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            z-index: 9999;
            transition: var(--transition);
        }
        .btn-wa:hover { transform: scale(1.1) rotate(10deg); color: white; }

        .btn-red {
            background: var(--primary-red);
            color: white;
            border-radius: 50px;
            padding: 14px 35px;
            font-weight: 700;
            text-transform: uppercase;
            border: none;
            transition: var(--transition);
        }
        .btn-red:hover { background: #fff; color: #000; transform: scale(1.05); }

        .map-container iframe {
            filter: invert(90%) hue-rotate(180deg) grayscale(30%);
        }
    </style>
</head>
<body>

<a href="https://wa.me/6282229989429" class="btn-wa" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/LogoJuragan.png') }}" alt="Logo" style="height:55px;">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#barbers">Barbers</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="about" class="section-padding position-relative">
    <div class="hero-glow"></div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h6 class="text-danger fw-bold text-uppercase mb-3" style="letter-spacing: 3px;">Since 2026</h6>
                <h1 class="display-3 fw-bold mb-4">Barber <span class="text-danger">Juragan</span></h1>
                <p class="lead text-secondary mb-5">
                    {{ $about->content ?? 'Kenyamanan dan gaya adalah prioritas kami. Kami hadir untuk memberikan pengalaman cukur premium bagi pria sejati di Cianjur.' }}
                </p>
                <div class="row g-4 mb-5">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-certificate text-danger fs-3 me-3"></i>
                            <h6 class="fw-bold mb-0">Barbers<br>Sertifikasi</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chair text-danger fs-3 me-3"></i>
                            <h6 class="fw-bold mb-0">Alat<br>Modern</h6>
                        </div>
                    </div>
                </div>
                <a href="#services" class="btn btn-red">Lihat Layanan</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="img-hero-wrapper">
                    <img src="{{ asset('images/Logo.jpeg') }}" class="img-fluid img-hero shadow-lg w-100" alt="Barbershop">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="section-padding" style="background: #000;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">Layanan <span class="text-danger">Premium</span></h2>
            <div class="mx-auto" style="width: 80px; height: 3px; background: var(--primary-red);"></div>
        </div>

        <div class="row g-4">
            @forelse($services as $service)
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="card card-dark h-100 p-4 service-card text-center text-white">
                        <div class="mb-4">
                            <img src="{{ asset('images/Icon.png') }}" class="service-icon" alt="icon" style="width: 60px;">
                        </div>
                        <h5 class="fw-bold mb-3 text-uppercase small">{{ $service->name }}</h5>
                        <p class="small text-secondary mb-4">{{ $service->description }}</p>
                        <div class="mt-auto">
                            <span class="price-tag fw-bold">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-secondary w-100">Layanan sedang diperbarui...</p>
            @endforelse
        </div>
    </div>
</section>

<section id="barbers" class="section-padding bg-dark">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Master <span class="text-danger">Barbers</span></h2>
            <p class="text-secondary">Tangan dingin di balik penampilan rapi Anda.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($barbers as $barber)
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in">
                    <div class="barber-card shadow-lg">
                        <img src="{{ asset('images/'.$barber->photo) }}" 
                             class="w-100 barber-img" 
                             style="height: 350px; object-fit: cover;" 
                             alt="{{ $barber->name }}" 
                             onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($barber->name) }}&background=111&color=fff&bold=true'">
                        
                        <div class="overlay">
                            <h5 class="fw-bold mb-1 text-white">{{ $barber->name }}</h5>
                            <span class="badge bg-danger px-3">{{ $barber->spesialis }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-secondary w-100">Tim kami sedang bersiap.</p>
            @endforelse
        </div>
    </div>
</section>

<section id="gallery" class="section-padding bg-black">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-5" data-aos="fade-up">Gallery <span class="text-danger">Style</span></h2>
        <div class="row g-3">
            @forelse($galleries as $gallery)
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">
                    <div class="gallery-card shadow-sm" style="aspect-ratio: 1/1;">
                        <img src="{{ asset('images/'.$gallery->image) }}" class="w-100 h-100 object-fit-cover gallery-img" alt="style">
                        <div class="overlay">
                            <i class="fas fa-eye text-white mb-2 fs-4"></i>
                            <span class="fw-bold text-uppercase small text-white px-2">{{ $gallery->title }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-secondary w-100">Galeri masih kosong.</p>
            @endforelse
        </div>
    </div>
</section>

<section id="contact" class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="display-6 fw-bold mb-5">Hubungi <span class="text-danger">Kami</span></h2>
                
                <div class="d-flex mb-4">
                    <div class="bg-dark p-3 rounded-circle me-3"><i class="fas fa-map-marker-alt text-danger"></i></div>
                    <div>
                        <h6 class="fw-bold mb-0 text-white">Lokasi</h6>
                        <p class="text-secondary small mb-0">Jln. Adi Sucipta, Cianjur (Depan Polsek Cianjur Kota)</p>
                    </div>
                </div>

                <div class="d-flex mb-5">
                    <div class="bg-dark p-3 rounded-circle me-3"><i class="fab fa-whatsapp text-danger"></i></div>
                    <div>
                        <h6 class="fw-bold mb-0 text-white">WhatsApp</h6>
                        <p class="text-secondary small mb-0">0822-2998-9429</p>
                    </div>
                </div>

                <h6 class="text-white fw-bold mb-3 small" style="letter-spacing: 2px;">IKUTI SOSIAL MEDIA KAMI</h6>
                <div class="d-flex gap-3">
                    <a href="https://instagram.com/juragan.cukur" target="_blank" class="btn btn-outline-light rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="https://tiktok.com/@juragan_barbershop" target="_blank" class="btn btn-outline-light rounded-circle"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="map-container shadow-lg" style="height: 400px; border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5815615745486!2d107.139!3d-6.817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDknMDEuMiJTIDEwN8KwMDgnMjAuNCJF!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-5 bg-black border-top border-dark">
    <div class="container text-center">
        <img src="{{ asset('images/LogoJuragan.png') }}" alt="Logo" class="mb-4" style="height: 80px;">
        <h4 class="text-white fw-bold italic mb-3">"TAMPIL ITU PILIHAN BRO!"</h4>
        <p class="small text-secondary mb-0">© 2026 Barber Juragan. Pengalaman Grooming Profesional.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

</body>
</html>