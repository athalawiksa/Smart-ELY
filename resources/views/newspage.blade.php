<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Ely</title>
    <link rel="icon" href="{{ asset('asset/hero.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 1.0);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999999999;
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

        /* Mengatur ukuran scrollbar */
        ::-webkit-scrollbar {
            width: 12px; /* Lebar scrollbar vertikal */
            height: 12px; /* Tinggi scrollbar horizontal */
        }

        /* Mengatur gaya track (area di belakang scrollbar) */
        ::-webkit-scrollbar-track {
            background-color: #ffffff; /* Warna track */
            border-radius: 10px; /* Sudut melengkung pada track */
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

        body {
            padding-top: 100px; /* Sesuaikan dengan tinggi navbar */
            background-color: #f5f5f7;
        }
        .breadcrumb-item a {
            color: blue;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .breadcrumb-item a:hover {
            color: darkblue; /* Warna saat hover */
        }
        .kard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px; /* Jarak antar card */
            justify-content: center;
        }
        .date {
            justify-content: flex-start;
        }
        .square {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .square a {
            text-decoration: none;
            color: black;
            
        }
        .square:hover .card-title {
            color: rgb(0, 180, 0); 
            text-decoration: none; 
            transition: color 0.5s ease-out;
        }
        @media only screen and (max-width: 768px) {
            #loader {
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .spinner {
                width: 50px;
                height: 50px;
                border-width: 3px;
            }

            .kard {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media screen and (max-width: 1024px) and (min-width: 600px) {
            #loader {
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .spinner {
                width: 70px;
                height: 70px;
                border-width: 4px;
            } 
        }
    </style>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <div id="content" style="display: none;">

    @include('navbar')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%278%27%3E%3Cpath d=%27M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z%27 fill=%27%236c757d%27/%3E%3C/svg%3E');" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <!-- Menambahkan efek hover langsung di dalam elemen style -->
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}#home" style="color: blue; text-decoration: none;"
                       onmouseover="this.style.color='darkblue';" 
                       onmouseout="this.style.color='blue';">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" class="bi bi-house-door-fill me-1" 
                            viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                        Home
                    </a>
                </li>
                
                <!-- Item breadcrumb lainnya -->
                <li class="breadcrumb-item active" aria-current="page">News</li>
            </ol>
        </nav>
        <div class="kard">
            <div class="col mb-4">
              <div class="square">
                <a href="{{ route('newsdetail1') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/sma1.2.png') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="{{ route('newsdetail1') }}"><h2 class="card-title" style="margin-top: 20px;">SmartELY Socialization Held at SMAN 1 Surakarta, Raising Awareness on Elderly Health Monitoring</h2></a>
                    <div class="date" style="margin-top: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                        </svg>
                        <span style="color: green;">2025-1-24</span>
                    </div>
                  <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - Today, SMAN 1 Surakarta hosted a socialization event for SmartELY, a smartwatch equipped with health monitoring features and local wisdom-based health recommendations for the elderly. The socialization event took place at 09:40 WIB and was attended by Mr. Anung, Vice Principal of Student Affairs at SMAN 1 Surakarta.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail2') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/drendang.2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail2') }}"><h2 class="card-title" style="margin-top: 20px;">SmartEly Audiensi at Dr. Endang Manahan, Enhancing Elderly Health</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - SmartEly, a technology company focused on health innovation, today held an audiensi at Dr. Endang Manahan to introduce the SmartEly SmartWatch. The event was attended by Dr. Endang Manahan and several representatives from the hospital.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail3') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/klinikwk2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail3') }}"><h2 class="card-title" style="margin-top: 20px;">SmartELY Socialization Held at Klinik Wijaya Kusuma, Focusing on Elderly Health Care</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - Today, Klinik Wijaya Kusuma hosted a socialization event for SmartELY, a smartwatch equipped with health monitoring features and local wisdom-based health recommendations for the elderly. The socialization event took place at 11:10 WIB and was attended by Dr. Rulita Ririn Prabawati.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail4') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/sma2.2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail4') }}"><h2 class="card-title" style="margin-top: 20px;">SmartELY Socialization at SMAN 2 Surakarta: Raising Awareness on Elderly Health Monitoring</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - SMAN 2 Surakarta hosted a socialization event for SmartELY, a smartwatch designed to improve the quality of life for the elderly through advanced health monitoring and local wisdom-based health recommendations. The socialization event, which took place at 10:20 WIB, was attended by Mr. Catur and Mrs. Nanik, teachers at SMAN 2 Surakarta.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail5') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/sma4.2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail5') }}"><h2 class="card-title" style="margin-top: 20px;">SmartEly SmartWatch Holds Audiens at SMA Negeri 4 Surakarta, Enhancing Elderly Health Awareness</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - SmartEly, a technology company focused on health and safety, today introduced the SmartEly SmartWatch at SMA Negeri 4 Surakarta. The event was attended by Mrs. Ike and several representatives from the school.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail6') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/sma5.2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail6') }}"><h2 class="card-title" style="margin-top: 20px;">SmartELY Socialization at SMAN 5 Surakarta: Raising Awareness on Elderly Health Monitoring</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">SMAN 5 Surakarta hosted a socialization event for SmartELY, a smartwatch designed to improve the quality of life for the elderly through advanced health monitoring and local wisdom-based health recommendations.</p>
                  </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="square">
                    <a href="{{ route('newsdetail7') }}"><img style="border-radius: 10px;" src="{{ asset('asset/news/smk5.2.png') }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <a href="{{ route('newsdetail7') }}"><h2 class="card-title" style="margin-top: 20px;">SmartEly Audiensi at SMK 5 Surakarta, Enhancing Elderly Health</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Surakarta, January 24, 2025 - SmartEly, a technology company focused on health innovation, today introduced the SmartEly SmartWatch at SMK 5 Surakarta. The event was attended by Mrs. Bernadetha and several representatives from the school.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @extends('footer')
    </div>
    <script>
        window.onload = function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
        };
    </script>
</body>
</html>