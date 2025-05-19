<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Smart Ely</title>
    <link rel="icon" href="{{ asset('asset/hero.png') }}" type="image/png">
    <style>
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        /* Animasi Loader */
        .spinner {
            width: 60px;
            height: 60px;
            border: 5px solid #ccc;
            border-top-color: #55db34;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        ::-webkit-scrollbar {
            width: 12px; /* Lebar scrollbar vertikal */
            height: 12px; /* Tinggi scrollbar horizontal */
        }

        /* Mengatur gaya track (area di belakang scrollbar) */
        ::-webkit-scrollbar-track {
            background-color: #ffffff; 
            border-radius: 10px;
        }

        /* Mengatur gaya thumb (pegangannya) */
        ::-webkit-scrollbar-thumb {
            background-color: #888; /* Warna thumb */
            border-radius: 10px; /* Sudut melengkung pada thumb */
            border: 3px solid #f1f1f1; /* Border di sekitar thumb */
        }

        /* Mengubah warna thumb saat hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #555; /* Warna thumb saat hover */
        }


         /* Ganti warna ikon previous dan next */
         .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #635f5f; 
            border-radius: 50%;
        }

        /* Ganti warna ikon saat hover */
        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: #b4b1a0;
        }

        /* Ubah warna indikator tidak aktif */
        .carousel-indicators button {
            background-color: #95a091; 
        }

        .carousel-indicators .active {
            background-color: #3c3c3f; /* Warna indikator aktif */
        }
        .scroll-container {
            display: flex; 
            overflow-x: auto; 
            width: 100%; 
            padding: 10px 0; 
            margin-bottom: 30px;
        }

        .scroll-container img {
            width: 100px; 
            height: auto; 
            margin-right: 50px; 
        }

        .card {
            width: 18rem;
            padding: 20px;
            box-sizing: border-box; 
            text-align: center;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%; 
        }
        .card-text {
            flex-grow: 1; 
        }

        .btn {
            margin-top: auto; 
        }

        #news {
            text-align: center;
            display: flex;
            gap: 20px; 
            justify-content: center;
        }
        .card-hover:hover {
            transform: translateY(-10px); 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }
        .visimisi {
            display: flex;
            justify-content: space-between;
            gap: 50px;
        }
        .vision, .mission {
            width: 50%;
            margin-top: 50px;
            padding-bottom: 20px;
        }
        .cr {
            background-color: rgb(255, 255, 255);
            background-image: 
                linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0) 30%),
                url('/asset/bg1.png'),  
                linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0) 100%);  
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            object-fit: cover;
        }
        #carouselExampleIndicators2 {
            position: relative;
        }
        .carousel-indicators {
            padding-top: 50px; 
        }
        .backg {
            padding-top: 5px;
            margin-top: 20px;
            background-color: rgba(242,244,245,255);
        }
        @media screen and (max-width: 1024px) and (min-width: 600px) {
            #loader {
                width: 100%;
                height: 80%;
            }
            .spinner {
                width: 70px;
                height: 70px;
                border-width: 4px;
            } 
            .card {
                width: 18rem;
            }
            .carousel-indicators {
                display: none;
            }

        }

        @media only screen and (max-width: 768px) {
            #loader {
                width: 100%;
                height: 70%;
            }
            .spinner {
                width: 50px;
                height: 50px;
                border-width: 3px;
            }

            body {
                padding-top: 90px; 
            }
            .card {
                flex: 1 1 calc(100% - 10px); 
            }
            #news {
                text-align: center;
                flex-wrap: wrap;
                display: flex;
                justify-content: center;
                padding: 0 10px; 
                margin: 0;
                margin-bottom: 20px;
            }
            .visimisi {
                flex-wrap: wrap;
                gap: 10px;
            }
            .vision, .mission {
                width: 100%;
                
            }
            .carousel-indicators {
                display: none;
            }
            .cr {
                background-image: none;
                height: auto;
            }
            .backg {
                margin-top: 20px;
            }
        }

        @media only screen and (max-width: 1280px) {
            .cr {
                background-image: none;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <div id="content" style="display: none;">
    <div id="home">
        @include('navbar') 
        <div data-aos="fade-up">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6" style="margin: auto;">
                        <h1>A Smartwatch with Smart Monitoring and Local Wisdom-Based Health Recommendations for Elderly</h1>
                    </div>
                    <!-- Carousel Section -->
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                                
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('asset/fotor-copy1.png') }}" class="d-block w-100" alt="Gambar 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('asset/fotor-copy2.png') }}" class="d-block w-100" alt="Gambar 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('asset/fotor-copy3.png') }}" class="d-block w-100" alt="Gambar 3">
                                </div>
                            </div>
    
                            <!-- Carousel Controls (hidden) -->
                            <button style="opacity: 0" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button style="opacity: 0" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cr">
        <div class="container">
            <h1 style="margin-bottom: 20px;">Apps Overview</h1>
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button style="background-color: rgb(163, 163, 163);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('asset/ct1.2.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('asset/ct2.2.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('asset/ct3.2.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('asset/ct4.2.png') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="backg">
        <div class="container">
            <h2 style="text-align: center; margin-top: 20px;">OUR BACKGROUND</h2>
            <br>
            <img style="width: 100%;" src="{{ asset('asset/dk.png') }}" alt="">
            <img style="width: 100%;" src="{{ asset('asset/dk2.png') }}" alt="">
            <br>
            <br>
            <h2 style="text-align: center;">VISION & MISSION</h2>
            <div class="visimisi">
                <div class="vision">
                    <h3>Our Vision</h3>
                    <p style="color: gray;">To become a pioneer in health monitoring technology to improve the quality of life for the elderly in Indonesia, Asia, and globally.</p>
                </div>
                <div class="mission">
                    <h3>Our Mission</h3>
                    <p>
                        <ul style="color: gray;">
                            <li>Develop innovative and user-friendly smartwatch technology for elderly health monitoring</li>
                            <li>Provide affordable and sustainable solutions for elderly health monitoring</li>
                            <li>Improve elderly quality of life through an integrated health monitoring system</li>
                      </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h4 style="margin-top: 50px; margin-bottom: 20px; text-align: center;">LATEST NEWS</h4>
    <div id="news">
        <div class="card card-hover">
            <img src="{{ asset('asset/news/sma1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SmartELY Socialization Held at SMAN 1 Surakarta, Raising Awareness on Elderly Health Monitoring</h5>
              <p class="card-text" style="color: gray;">Today, SMAN 1 Surakarta hosted a socialization event for SmartELY, a smartwatch equipped with health monitoring features and local wisdom-based health recommendations for the elderly</p>
              <p class="card-text"><small class="text-muted">January 24, 2025</small></p>
              <a href="{{ route('newsdetail1') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card card-hover">
            <img src="{{ asset('asset/news/drendang.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Successful Socialization of SMART ELY: An Innovative Solution for Elderly Health Monitoring at Dr. Endang Manahan's Clinic</h5>
              <p class="card-text" style="color: gray;">Today, at 07:20 WIB, we held a socialization event for our SMART ELY product, a smartwatch with smart monitoring for the elderly, at Dr. Endang Manahan's Clinic in Solo.</p>
              <p class="card-text"><small class="text-muted">January 24, 2025</small></p>
              <a href="{{ route('newsdetail2') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card card-hover">
            <img src="{{ asset('asset/news/klinikwk.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SmartELY Socialization Held at Klinik Wijaya Kusuma, Focusing on Elderly Health Care</h5>
              <p class="card-text" style="color: gray;">Surakarta, January 24, 2025 - Today, Klinik Wijaya Kusuma hosted a socialization event for SmartELY, a smartwatch equipped with health monitoring features and local wisdom-based health recommendations for the elderly.</p>
              <p class="card-text"><small class="text-muted">January 24, 2025</small></p>
              <a href="{{ route('newsdetail3') }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <br>
        <p>Developing Partner:</p>
        <div class="scroll-container">
            <img src="{{ asset('asset/1.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/2.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/3.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/4.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/5.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/8.1.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/9.1.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/10.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/11.png') }}" style="width: 100px;">
            <img src="{{ asset('asset/12.png') }}" style="width: 100px;">
        </div>
    </div>
    @include('footer')
    </div>
    <script>
        AOS.init();
        window.onload = function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
        };
    </script>
</body>
</html>