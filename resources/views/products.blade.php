<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Smart Ely</title>
    <link rel="icon" href="{{ asset('asset/hero.png') }}" type="image/png">
    <style>
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
            padding-top: 100px;
            /* background-color: #f5f5f7; */
        }
        .kontener {
            padding-top: 20px;
            padding-bottom: 100px;
        }

        /* Styling untuk card */
        .custom-card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            width: 24rem;
            padding: 1.5rem;
            border-radius: 10px;
            flex: 0 0 auto;
            background: #fff;
            transition: transform 0.3s ease-in-out;
            position: relative; /* Untuk memastikan hover tidak terhalang */
        }

        .custom-card:hover {
            transform: scale(1.03);
            z-index: 10; /* Memberikan prioritas saat hover */
        }

        .custom-card .card-title {
            font-weight: 700;
            text-align: left;
            margin-bottom: 10px;
        }

        .custom-card .card-body {
            padding: 1rem;
        }

        .custom-card .card-text {
            margin: 0;
        }

        /* Styling untuk container card */
        .container-card {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 1rem;
        }

        .swiper-container {
            overflow: hidden; /* Memungkinkan elemen yang di-hover tampil penuh */
            padding: 0px 10px; /* Tambahkan padding kiri dan kanan agar tidak terlalu mepet */
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
        }

        .swiper-wrapper {
            padding-top: 20px;
            padding-bottom: 20px; /* Menambahkan padding bawah pada wrapper */
        }

        .card {
            width: 100%;
        }
        .row p{
            margin: 0;
        }
        .fitur {
            margin-bottom: 40px;
        }
        
        @media (max-width: 768px) {
            .custom-card {
                width: 100%; /* Sesuaikan lebar card dengan layar kecil */
                margin: 0 auto; /* Tengah pada layar kecil */
            }

            .swiper-container {
                padding: 0 15px; /* Kurangi padding untuk layar kecil */
                overflow: hidden;
            }

            .kontener {
                padding: 10px 0; /* Sesuaikan padding vertikal untuk layar kecil */
            }

            .swiper-slide {
                display: block; 
                
            }
            .swiper-button-prev{
                display: none;
            }
            .swiper-button-next {
                display: none;
            }
        }
    </style>
</head>
<body>
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
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
</div>
    <div class="kontener">
        <div class="container my-4">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Carousel Item 1 -->
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h2 class="card-title">Ely Watch 1</h2>
                            </div>
                            <img src="{{ asset('asset/apl.png') }}" class="card-img-top" alt="">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <p class="card-text">From $399 or $33.25/mo</p>
                                <a href="{{ route('purchase') }}" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
        
                    <!-- Carousel Item 2 -->
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h2 class="card-title">Ely Watch 2</h2>
                            </div>
                            <img src="{{ asset('asset/apl2.png') }}" class="card-img-top" alt="">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <p class="card-text">From $0 or $0/mo</p>
                                <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                    <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                                  </svg></a>
                            </div>
                        </div>
                    </div>
        
                    <!-- Carousel Item 3 -->
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h2 class="card-title">Ely Watch 3</h2>
                            </div>
                            <img src="{{ asset('asset/apl3.png') }}" class="card-img-top" alt="">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <p class="card-text">From $0 or $0/mo</p>
                                <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                    <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                                  </svg></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h2 class="card-title">Ely Watch 4</h2>
                            </div>
                            <img src="{{ asset('asset/apl4.png') }}" class="card-img-top" alt="">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <p class="card-text">From $0 or $0/mo</p>
                                <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                    <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                                  </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Navigation (optional) -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="fitur">
    <div class="container mt-5">
        <div class="row text-center">
            <!-- First Column -->
            <div class="col-6 col-md-4 mb-4">
                <svg aria-hidden="true" height="41px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 129 142" version="1.1">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Artboard" transform="translate(-241.000000, -138.000000)">
                        <g id="SVG-Layer" transform="translate(241.790000, 138.445000)">
                          <rect id="Rectangle" fill-rule="nonzero" x="2" y="2" width="118.85" height="137" rx="29.87"></rect>
                          <path d="M90.98,4 C106.365322,4.01653448 118.833466,16.484678 118.85,31.87 L118.85,109.11 C118.833466,124.495322 106.365322,136.963466 90.98,136.98 L31.87,136.98 C16.484678,136.963466 4.01653448,124.495322 4,109.11 L4,31.87 C4.01653448,16.484678 16.484678,4.01653448 31.87,4 L90.98,4 M90.98,0 L31.87,0 C23.4175505,0 15.3112913,3.3577225 9.33450688,9.33450688 C3.3577225,15.3112913 0,23.4175505 0,31.87 L0,109.11 C0,117.56245 3.3577225,125.668709 9.33450688,131.645493 C15.3112913,137.622277 23.4175505,140.98 31.87,140.98 L90.98,140.98 C99.4324495,140.98 107.538709,137.622277 113.515493,131.645493 C119.492277,125.668709 122.85,117.56245 122.85,109.11 L122.85,31.87 C122.85,14.268685 108.581315,0 90.98,0 L90.98,0 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                          <path d="M91.21,17.96 C98.733074,17.9710148 104.828985,24.066926 104.84,31.59 L104.84,109.85 C104.828973,117.37145 98.7314561,123.464494 91.21,123.47 L31.97,123.47 C24.4524489,123.458985 18.3610147,117.367551 18.35,109.85 L18.35,31.59 C18.3555062,24.0685439 24.44855,17.9710265 31.97,17.96 L91.21,17.96 M91.21,13.96 L31.97,13.96 C22.2371253,13.9655206 14.35,21.8571238 14.35,31.59 L14.35,109.85 C14.35,119.581257 22.2387427,127.470003 31.97,127.470003 L91.21,127.470003 C95.8848469,127.472653 100.369132,125.617437 103.675686,122.312758 C106.982241,119.00808 108.84,114.524848 108.84,109.85 L108.84,31.59 C108.84,26.9142333 106.982559,22.4299738 103.676293,19.1237074 C100.370026,15.8174411 95.8857667,13.96 91.21,13.96 L91.21,13.96 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                          <path d="M122.76,55.86022 L124.67,55.86022 C125.96,55.86022 127.42,55 127.67,52.59 C127.92,50.18 127.98,43.45 127.98,43.38 C127.98,43.31 127.93,36.52 127.67,34.19 C127.41,31.86 125.94,30.9099514 124.67,30.9099514 L122.76,30.9099514 C122.255731,30.9068104 121.76296,31.0605829 121.35,31.35 C120.949863,31.6250019 120.648443,32.0210544 120.49,32.48 C120.243382,33.1652989 120.059297,33.8715132 119.94,34.59 C119.512297,37.5034578 119.308367,40.445395 119.33,43.39 C119.308721,46.3312735 119.51265,49.26986 119.94,52.18 C120.059403,52.901727 120.243478,53.6112521 120.49,54.3 C120.649069,54.7586104 120.950353,55.1544842 121.35,55.43 C121.763847,55.7164758 122.256719,55.8667846 122.76,55.86022 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
                          <line x1="61.68" y1="117.38" x2="61.68" y2="72.59" id="Path" stroke="#000000" stroke-width="2" fill="#FFFFFF" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></line>
                          <polyline id="Path" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="56.24 67.19 61.68 70.83 66.48 67.72"></polyline>
                          <line x1="56.24" y1="67.19" x2="42.36" y2="57.96" id="Path" stroke="#000000" stroke-width="4" fill="#FFFFFF" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></line>
                          <line x1="95.38" y1="49.09" x2="67.49" y2="67.19" id="Path" stroke="#000000" stroke-width="4" fill="#FFFFFF" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></line>
                          <ellipse id="Oval" stroke="#000000" stroke-width="2" fill="#FFFFFF" fill-rule="nonzero" cx="61.61" cy="70.71" rx="1.89" ry="1.87"></ellipse>
                        </g>
                      </g>
                    </g>
                  </svg>
                <p style="margin-top: 15px;">LTPO OLED Retina display</p>
                <p style="color: gray;">Up to 1000 nits</p>
            </div>

            <!-- Second Column -->
            <div class="col-6 col-md-4 mb-4">
                <svg class="dd-glyph-svg dd-glyph-elevated" aria-hidden="true" width="56" height="56" viewBox="0 0 56 56"><g id="bed.double_elevated_sp"><rect id="box_" width="56" height="56" fill="none"></rect><path id="art_" d="M14,24H10V19a5,5,0,0,1,5-5H41a5,5,0,0,1,5,5v5H42V21a3,3,0,0,0-3-3H33a3,3,0,0,0-3,3v3H26V21a3,3,0,0,0-3-3H17a3,3,0,0,0-3,3Zm37,7.0778v11.2a1.5,1.5,0,0,1-1.5,1.5h-1a1.5,1.5,0,0,1-1.5-1.5V40H9v2.2777a1.5,1.5,0,0,1-1.5,1.5h-1a1.5,1.5,0,0,1-1.5-1.5v-11.2a5,5,0,0,1,5-5H46A5,5,0,0,1,51,31.0778ZM49,38V31a3.0033,3.0033,0,0,0-3-3H10a3.0033,3.0033,0,0,0-3,3v7Z"></path></g></svg>
                <p>Sleep Tracking</p>
            </div>

            <!-- Third Column -->
            <div class="col-6 col-md-4 mb-4">
                <svg height="56" viewBox="0 0 40 56" width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="a" fill="#fff">
                      <path d="m19.1701126 34.0194597c-.899845-.0027545-1.7843747-.2330632-2.5713-.6695-6.1988-3.4243-16.59720001-10.7407-16.59720001-21.2659-.05449392-3.34339544 1.2742027-6.5608684 3.6719-8.89160005 2.21358409-2.1458985 5.2066106-3.2961819 8.28760001-3.1851 2.5738475.14916062 5.0640097.96847074 7.2236 2.3767 2.1597296-1.40791005 4.6498225-2.22712843 7.2236-2.3765 3.0802768-.10625851 6.07154 1.04352769 8.2876 3.1856 2.3975186 2.33056398 3.7261999 5.54774648 3.6719 8.89090005-.0011633 1.2189737-.1412337 2.4338446-.4175 3.6211-.1334566.5742687-.5631442 1.0337166-1.1272038 1.2052742s-1.176797.0291611-1.6074-.37355-.6136528-1.0045555-.4801962-1.5788242c.2199257-.9422107.3314824-1.9064634.3325-2.874.0698209-2.44416899-.8919882-4.80492033-2.65-6.50440005-1.5685834-1.51145721-3.6774012-2.33135693-5.855-2.2764-2.0804531.13248016-4.0871615.82119508-5.8105 1.9942-.9561101.60930915-2.17869.60930915-3.1348 0-1.7235361-1.17278883-3.7303855-1.86122841-5.8109-1.9934-2.17688652-.05088696-4.28419263.76842502-5.85500001 2.2764-1.75801179 1.69947972-2.71982088 4.06023106-2.65 6.50440005 0 8.831 9.33110001 15.3042 14.89310001 18.3769.6180725.3326989 1.3619275.3326989 1.98 0 4.2310916-2.2123845 8.0046783-5.2064226 11.1211-8.8237.5722498-.7093269 1.6111731-.8204498 2.3204999-.2482.7093269.5722498.8204499 1.611173.2482001 2.3205-3.3846091 3.9500064-7.4885852 7.2212966-12.0938 9.64-.7978058.4358344-1.6917154.6658078-2.6008.6691z" fill="#fff" fill-rule="evenodd"></path>
                    </mask>
                    <g fill="none" fill-rule="evenodd">
                      <path d="m0 0h40v56h-40z"></path>
                      <image height="56" mask="url(#a)" transform="translate(.815287 11.96594)" width="56" x="-8.815287" xlink:href="data:image/png;base64,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" y="-11.96594"></image>
                    </g>
                </svg>
                <p>High and low heart rate notifications</p>
            </div>

            <div class="col-6 col-md-4 mb-4">
                <svg height="56" viewBox="0 0 56 56" width="56" class="dd-glyph-svg dd-glyph-elevated" aria-hidden="true"><path d="m0 0h56v56h-56z" fill="none"></path><path d="m27.998 11.9091c1.9811 0 3.5928 1.6118 3.5928 3.5928 0 1.979-1.6118 3.5891-3.5928 3.5891-1.9789 0-3.5889-1.6101-3.5889-3.5891 0-1.981 1.61-3.5928 3.5889-3.5928m0-3.5c-3.9128 0-7.0889 3.1675-7.0889 7.0928 0 3.9216 3.1761 7.0891 7.0889 7.0891 3.9255 0 7.0928-3.1675 7.0928-7.0891 0-3.9253-3.1674-7.0928-7.0928-7.0928zm-12.5 16.0001c1.9811 0 3.5928 1.6118 3.5928 3.5928 0 1.979-1.6118 3.5889-3.5928 3.5889-1.979 0-3.589-1.6099-3.589-3.5889 0-1.981 1.61-3.5928 3.589-3.5928m0-3.5c-3.9215 0-7.089 3.176-7.089 7.0928 0 3.9216 3.1675 7.0889 7.089 7.0889 3.9255 0 7.0928-3.1672 7.0928-7.0889 0-3.9167-3.1674-7.0928-7.0928-7.0928zm12.5 15.9999c1.9811 0 3.5928 1.6118 3.5928 3.5928 0 1.979-1.6118 3.5891-3.5928 3.5891-1.9789 0-3.5889-1.6101-3.5889-3.5891 0-1.981 1.61-3.5928 3.5889-3.5928m0-3.5c-3.9216 0-7.0889 3.1672-7.0889 7.0928 0 3.9128 3.1674 7.0891 7.0889 7.0891 3.9255 0 7.0928-3.1763 7.0928-7.0891 0-3.9255-3.1674-7.0928-7.0928-7.0928zm12.5-9c1.9811 0 3.5929 1.6118 3.5929 3.593 0 1.979-1.6118 3.5889-3.5929 3.5889-1.9789 0-3.5889-1.6099-3.5889-3.5889 0-1.9812 1.61-3.593 3.5889-3.593m0-3.5c-3.9215 0-7.0889 3.1675-7.0889 7.093 0 3.9128 3.1674 7.0889 7.0889 7.0889 3.9168 0 7.0929-3.176 7.0929-7.0889 0-3.9255-3.1761-7.093-7.0929-7.093z"></path></svg>
                <p>Vitals app featuring heart rate, <br> respiratory rate, and sleep duration</p>
            </div>

            <div class="col-6 col-md-4 mb-4">
                <svg height="56" viewBox="0 0 56 56" width="56" xmlns="http://www.w3.org/2000/svg">
                    <path d="m0 0h56v56h-56z" fill="none"></path>
                    <path d="m28 10.7a17.3 17.3 0 1 1 -17.3 17.3 17.32 17.32 0 0 1 17.3-17.3m0-2.2a19.5 19.5 0 1 0 19.5 19.5 19.5 19.5 0 0 0 -19.5-19.5zm-10.3242 24.7751a2.828 2.828 0 0 1 -1.2178-1.144 3.7507 3.7507 0 0 1 -.457-1.7637v-.2729h1.9531l.01.2519a1.8473 1.8473 0 0 0 .4414 1.2544 1.5705 1.5705 0 0 0 1.1865.4253 1.6093 1.6093 0 0 0 .7666-.1733 1.2113 1.2113 0 0 0 .498-.4776 1.4 1.4 0 0 0 .1739-.7036v-.0205a1.445 1.445 0 0 0 -.336-.9712 2.9405 2.9405 0 0 0 -1.1445-.7192l-.9141-.3467a4.9129 4.9129 0 0 1 -1.38-.7978 3.0648 3.0648 0 0 1 -.8135-1.0547 3.1322 3.1322 0 0 1 -.2735-1.3282v-.0209a2.969 2.969 0 0 1 .4415-1.6011 3.0115 3.0115 0 0 1 1.207-1.1021 3.8275 3.8275 0 0 1 1.7744-.394 3.6658 3.6658 0 0 1 1.7529.3887 2.7235 2.7235 0 0 1 1.1231 1.1181 3.54 3.54 0 0 1 .41 1.6846v.3779h-1.8905l-.01-.3042a1.8027 1.8027 0 0 0 -.3773-1.1914 1.2619 1.2619 0 0 0 -1.0078-.4253 1.4954 1.4954 0 0 0 -.74.168 1.2336 1.2336 0 0 0 -.4727.4673 1.3914 1.3914 0 0 0 -.1728.7085v.021a1.5107 1.5107 0 0 0 .1464.6821 1.5712 1.5712 0 0 0 .462.5356 3.2787 3.2787 0 0 0 .8505.441l.9239.3569a5.638 5.638 0 0 1 1.4277.7978 2.8009 2.8009 0 0 1 .8086 1.0132 3.159 3.159 0 0 1 .2617 1.3282v.01a3.12 3.12 0 0 1 -.44 1.6641 3.0019 3.0019 0 0 1 -1.2227 1.1176 4.0039 4.0039 0 0 1 -1.8427.3995 4.1923 4.1923 0 0 1 -1.9063-.3993zm8.1543-.2358a3.9 3.9 0 0 1 -1.3233-1.9106 9.5263 9.5263 0 0 1 -.4463-3.1338v-.021a9.1778 9.1778 0 0 1 .4571-3.1074 3.9618 3.9618 0 0 1 1.333-1.9053 3.8211 3.8211 0 0 1 4.2519 0 3.9552 3.9552 0 0 1 1.333 1.9053 9.1778 9.1778 0 0 1 .4571 3.1074v.021a9.4117 9.4117 0 0 1 -.4512 3.1338 3.9449 3.9449 0 0 1 -1.3232 1.9106 3.8835 3.8835 0 0 1 -4.2881 0zm3.1758-1.5644a2.7583 2.7583 0 0 0 .624-1.3018 9.61 9.61 0 0 0 .2051-2.1675v-.0215a9.413 9.413 0 0 0 -.21-2.1674 2.8243 2.8243 0 0 0 -.625-1.3018 1.3683 1.3683 0 0 0 -1.0332-.436 1.3458 1.3458 0 0 0 -1.0137.436 2.8668 2.8668 0 0 0 -.63 1.3018 9.1729 9.1729 0 0 0 -.2148 2.1674v.0215a8.991 8.991 0 0 0 .22 2.1675 2.9347 2.9347 0 0 0 .6309 1.3018 1.3271 1.3271 0 0 0 1.0078.436 1.3872 1.3872 0 0 0 1.0389-.436zm5.582 1.8a2.828 2.828 0 0 1 -1.2178-1.144 3.7507 3.7507 0 0 1 -.457-1.7637v-.2729h1.9531l.01.2519a1.8473 1.8473 0 0 0 .4414 1.2544 1.5707 1.5707 0 0 0 1.1865.4253 1.6091 1.6091 0 0 0 .7666-.1733 1.2122 1.2122 0 0 0 .4981-.4776 1.4014 1.4014 0 0 0 .1738-.7036v-.0205a1.445 1.445 0 0 0 -.336-.9712 2.9405 2.9405 0 0 0 -1.1445-.7192l-.914-.3467a4.9121 4.9121 0 0 1 -1.38-.7978 3.0648 3.0648 0 0 1 -.8135-1.0547 3.1321 3.1321 0 0 1 -.2734-1.3282v-.0209a2.9689 2.9689 0 0 1 .4414-1.6011 3.0121 3.0121 0 0 1 1.207-1.1021 3.8275 3.8275 0 0 1 1.7744-.394 3.6656 3.6656 0 0 1 1.7529.3887 2.7223 2.7223 0 0 1 1.1231 1.1183 3.54 3.54 0 0 1 .41 1.6846v.3779h-1.8906l-.01-.3042a1.8027 1.8027 0 0 0 -.3779-1.1914 1.2619 1.2619 0 0 0 -1.0078-.4253 1.4954 1.4954 0 0 0 -.74.168 1.2342 1.2342 0 0 0 -.4727.4673 1.3914 1.3914 0 0 0 -.1728.7085v.021a1.5107 1.5107 0 0 0 .1464.6821 1.5712 1.5712 0 0 0 .462.5356 3.2787 3.2787 0 0 0 .8505.441l.9239.3569a5.6362 5.6362 0 0 1 1.4277.7978 2.8009 2.8009 0 0 1 .8086 1.0132 3.159 3.159 0 0 1 .2617 1.3282v.01a3.12 3.12 0 0 1 -.44 1.6641 3.0019 3.0019 0 0 1 -1.2227 1.1176 4.0037 4.0037 0 0 1 -1.8427.3995 4.1923 4.1923 0 0 1 -1.9057-.3993z"></path>
                </svg>
                <p>Emergency SOS</p>
                <p style="color: gray;">Fall Detection <br></p>
            </div>

            <div class="col-6 col-md-4 mb-4">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-compare-depth-50m-202309?wid=128&amp;hei=124&amp;fmt=jpeg&amp;qlt=90&amp;.v=1692836709878" alt="50 meters" width="56" height="56" class="dd-icon dd-icon-chip ir">
                <p>Water resistant</p>
                <p style="color: gray;">Swimproof</p>
            </div>

            <div class="col-6 col-md-4 mb-4">
                <svg height="56" enable-background="new 0 0 40 56" viewBox="0 0 40 56" xmlns="http://www.w3.org/2000/svg">
                    <path d="m0 0h40v56h-40z" fill="none"></path>
                    <path d="m22.75 23.4877c0 1.1611-.7219 2.1491-1.7394 2.5524v18.9599c0 .5522-.4473 1-1 1s-1-.4478-1-1v-18.9532c-1.0284-.398-1.7606-1.3901-1.7606-2.559 0-1.5188 1.2312-2.75 2.75-2.75s2.75 1.2311 2.75 2.7499zm4.2928-8.1122c-.4307.4277-.4336 1.1245-.0049 1.5557 1.7432 1.7544 2.7031 4.083 2.7031 6.5566 0 2.5063-.9824 4.8574-2.7666 6.6201-.4316.4268-.4355 1.1235-.0088 1.5557.2148.2173.499.3267.7822.3267.2793 0 .5586-.106.7734-.3179 2.2051-2.1792 3.4189-5.0859 3.4189-8.1846 0-3.0581-1.1865-5.9375-3.3418-8.1074-.4275-.4302-1.1238-.4341-1.5555-.0049zm7.25-5.1358c-.418-.439-1.1152-.4546-1.5547-.0347s-.4551 1.1162-.0352 1.5552c3.0332 3.1724 4.7041 7.3369 4.7041 11.7275 0 4.415-1.6875 8.5967-4.75 11.7749-.4219.4375-.4092 1.1338.0283 1.5552.2139.2056.4893.3081.7637.3081.2881 0 .5762-.1128.792-.3369 3.46-3.5898 5.3652-8.314 5.3652-13.3013.0001-4.9594-1.8866-9.6645-5.3134-13.248zm-24.0332 13.2481c0-2.4736.96-4.8022 2.7031-6.5566.4287-.4312.4258-1.1279-.0049-1.5557-.4316-.4292-1.1279-.4253-1.5557.0049-2.1553 2.1699-3.3418 5.0493-3.3418 8.1074 0 3.1001 1.2139 6.0068 3.4189 8.1851.2148.2114.4941.3174.7734.3174.2842 0 .5674-.1094.7822-.3271.4277-.4321.4229-1.1284-.0088-1.5557-1.7839-1.7618-2.7664-4.1124-2.7664-6.6197zm-7.6669 0c0-4.3906 1.6709-8.5552 4.7041-11.7275.4199-.439.4043-1.1353-.0352-1.5552-.4395-.4204-1.1348-.4043-1.5547.0347-3.4268 3.5835-5.3135 8.2886-5.3135 13.248 0 4.9873 1.9053 9.7114 5.3652 13.3013.2158.2241.5039.3369.792.3369.2744 0 .5498-.1025.7637-.3081.4375-.4214.4502-1.1177.0283-1.5552-3.0624-3.1782-4.7499-7.3599-4.7499-11.7749z"></path>
                  </svg>
                <p>GPS</p>
                <p>Available cellular connectivity</p>
            </div>

            <div class="col-6 col-md-4 mb-4">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-compare-battery-202309?wid=92&amp;hei=48&amp;fmt=jpeg&amp;qlt=90&amp;.v=1692836708042" alt="" width="46" height="24" class="dd-icon dd-icon-battery ir">
                <p style="margin-top: 30px;">Up to 18 hours normal use</p>
            </div>
        </div>
    </div>
    </div>
    @include('footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,       
            spaceBetween: 10,       
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,  
                },
                1024: {
                    slidesPerView: 3,  
                }
            }
        });
    </script>
</body>
</html>