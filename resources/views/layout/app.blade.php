<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber Juragan | Professional Grooming Cianjur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Oswald:wght@500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #e10600;
            --dark-bg: #0f0f0f;
            --card-bg: #1a1a1a;
            --text-gray: #bbb;
            --transition: all 0.3s ease-in-out;
        }

        body {
            background: var(--dark-bg);
            color: #f5f5f5;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, .navbar-brand {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- Custom Scrollbar --- */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: var(--primary-red); border-radius: 10px; }

        /* --- Navbar --- */
        .navbar {
            background: rgba(17, 17, 17, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #222;
            padding: 15px 0;
        }

        .nav-link {
            color: #ddd !important;
            font-weight: 500;
            transition: var(--transition);
            margin: 0 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-red) !important;
        }

        /* --- Hero / About Section --- */
        .section-padding { padding: 100px 0; }
        
        .img-hero {
            border-radius: 20px;
            border: 2px solid #222;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }

        /* --- Cards & Services --- */
        .card-dark {
            background: var(--card-bg);
            border: 1px solid #282828;
            border-radius: 15px;
            transition: var(--transition);
        }

        .service-card:hover {
            border-color: var(--primary-red);
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(225, 6, 0, 0.2);
        }

        .btn-red {
            background: var(--primary-red);
            color: white;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 5px;
            transition: var(--transition);
        }

        .btn-red:hover {
            background: #b80000;
            transform: translateY(-2px);
            color: white;
        }

        /* --- Gallery --- */
        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            aspect-ratio: 1/1;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-card:hover .gallery-img {
            transform: scale(1.15);
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.9));
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 20px;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-card:hover .overlay { opacity: 1; }

        /* --- Footer & Socials --- */
        footer { background: #050505; border-top: 1px solid #1a1a1a; }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: #1a1a1a;
            color: white;
            border-radius: 50%;
            margin-right: 12px;
            transition: var(--transition);
            text-decoration: none;
        }

        .social-icon:hover {
            background: var(--primary-red);
            transform: translateY(-5px);
            color: white;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            height: 350px;
            border: 1px solid #222;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .section-padding { padding: 60px 0; }
            .navbar-brand img { height: 50px !important; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/LogoJuragan.png" alt="Logo" style="height:60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#barbers">Barbers</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h6 class="text-danger fw-bold text-uppercase mb-2">Since 2024</h6>
                <h1 class="display-4 fw-bold mb-4">Barber <span class="text-danger">Juragan</span></h1>
                <p class="lead text-secondary mb-4">
                    Lebih dari sekadar potong rambut. Kami membangun kepercayaan diri dengan teknik presisi dan pelayanan kelas dunia di pusat kota Cianjur.
                </p>
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h5 class="fw-bold"><i class="fas fa-check-circle text-danger me-2"></i> Profesional</h5>
                        <p class="small text-secondary">Barber berpengalaman dengan lisensi dan keahlian gaya modern.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="fw-bold"><i class="fas fa-star text-danger me-2"></i> Kualitas</h5>
                        <p class="small text-secondary">Hanya menggunakan produk grooming premium untuk rambut Anda.</p>
                    </div>
                </div>
                <a href="#services" class="btn btn-red px-5 py-3">Lihat Layanan</a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="images/Logo.jpeg" class="img-fluid img-hero" alt="Barbershop Interior">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="section-padding bg-black">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Layanan <span class="text-danger">Terbaik</span></h2>
            <p class="text-secondary">Pilih paket grooming yang sesuai dengan karakter Anda.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-dark h-100 p-4 service-card text-center">
                    <i class="fas fa-cut text-danger fa-3x mb-3"></i>
                    <h5 class="fw-bold">Classic Cut</h5>
                    <p class="small text-secondary mb-4">Potongan rambut presisi + styling pomade.</p>
                    <h4 class="text-danger fw-bold mt-auto">Rp 45.000</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-dark h-100 p-4 service-card text-center">
                    <i class="fas fa-magic text-danger fa-3x mb-3"></i>
                    <h5 class="fw-bold">Hair Wash</h5>
                    <p class="small text-secondary mb-4">Cuci rambut bersih + tonic + pijat ringan.</p>
                    <h4 class="text-danger fw-bold mt-auto">Rp 60.000</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-dark h-100 p-4 service-card text-center">
                    <i class="fas fa-user-ninja text-danger fa-3x mb-3"></i>
                    <h5 class="fw-bold">Beard Trim</h5>
                    <p class="small text-secondary mb-4">Cukur jenggot & kumis dengan hot towel.</p>
                    <h4 class="text-danger fw-bold mt-auto">Rp 75.000</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-dark h-100 p-4 service-card text-center text-white" style="border: 1px solid var(--primary-red);">
                    <i class="fas fa-crown text-danger fa-3x mb-3"></i>
                    <h5 class="fw-bold">Full Juragan</h5>
                    <p class="small text-secondary mb-4">Layanan komplit dari kepala hingga wajah.</p>
                    <h4 class="text-danger fw-bold mt-auto">Rp 120.000</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="barbers" class="section-padding">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-5">Master <span class="text-danger">Barbers</span></h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-dark overflow-hidden">
                    <img src="images/barber1.jpg" class="card-img-top" alt="Barber">
                    <div class="card-body">
                        <h5 class="fw-bold mb-0">Rizky Pratama</h5>
                        <p class="text-danger small mb-0">Fade Specialist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark overflow-hidden">
                    <img src="images/barber2.jpg" class="card-img-top" alt="Barber">
                    <div class="card-body">
                        <h5 class="fw-bold mb-0">Andi Saputra</h5>
                        <p class="text-danger small mb-0">Beard Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark overflow-hidden">
                    <img src="images/barber3.jpg" class="card-img-top" alt="Barber">
                    <div class="card-body">
                        <h5 class="fw-bold mb-0">Fajar Nugraha</h5>
                        <p class="text-danger small mb-0">Classic Master</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="section-padding bg-black text-center">
    <div class="container">
        <h2 class="display-5 fw-bold mb-5">Portofolio <span class="text-danger">Gaya</span></h2>
        <div class="row g-3">
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style1.jpg" class="gallery-img"><div class="overlay"><span>Low Fade</span></div></div></div>
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style2.jpg" class="gallery-img"><div class="overlay"><span>Pompadour</span></div></div></div>
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style3.jpg" class="gallery-img"><div class="overlay"><span>Gentleman</span></div></div></div>
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style4.jpg" class="gallery-img"><div class="overlay"><span>Modern Undercut</span></div></div></div>
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style5.jpg" class="gallery-img"><div class="overlay"><span>Textured Crop</span></div></div></div>
            <div class="col-6 col-md-4"><div class="gallery-card"><img src="images/style6.jpg" class="gallery-img"><div class="overlay"><span>Beard Style</span></div></div></div>
        </div>
    </div>
</section>

<section id="contact" class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <h2 class="display-6 fw-bold mb-4">Hubungi <span class="text-danger">Kami</span></h2>
                <div class="mb-4 d-flex align-items-start">
                    <i class="fas fa-map-marker-alt text-danger me-3 fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Lokasi</h6>
                        <p class="text-secondary">Jln. Adi Sucipta, Cianjur (Depan Polsek Cianjur Kota)</p>
                    </div>
                </div>
                <div class="mb-4 d-flex align-items-start">
                    <i class="fab fa-whatsapp text-danger me-3 fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-1">WhatsApp</h6>
                        <p class="text-secondary">0822-2998-9429</p>
                    </div>
                </div>
                <div class="mb-4 d-flex align-items-start">
                    <i class="fas fa-envelope text-danger me-3 fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Email</h6>
                        <p class="text-secondary">juragan.cukur@gmail.com</p>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="https://instagram.com/juragan.cukur" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://tiktok.com/@juragan_barbershop" target="_blank" class="social-icon"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.435774880528!2d107.136!3d-6.817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDknMDEuMiJTIDEwN8KwMDgnMDkuNiJF!5e0!3m2!1sid!2sid!4v1620000000000" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-5">
    <div class="container text-center">
        <h2 class="text-danger fw-bold mb-3">BARBER JURAGAN</h2>
        <p class="text-secondary mb-4">"Tampil Itu Pilihan Bro!"</p>
        <hr class="border-secondary opacity-25 mb-4">
        <p class="small text-secondary mb-0">&copy; 2026 Barber Juragan. Dibuat dengan dedikasi untuk pria Cianjur.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>