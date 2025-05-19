<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Ely</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="{{ asset('asset/hero.png') }}" type="image/png">
    <style>
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
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

        ::-webkit-scrollbar { 
            width: 12px; 
            height: 12px;
        }
        ::-webkit-scrollbar-track { 
            background-color: #ffffff; 
            border-radius: 10px; 
        }
        ::-webkit-scrollbar-thumb { 
            background-color: #888; 
            border-radius: 10px; 
            border: 3px solid #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background-color: #555; 
        }

        body {
            padding-top: 100px;
            background-color: #f5f5f7;
        }
        .team-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 30px;
            border-radius: 20px;
        }
        .profile-card {
            height: 95%;
            background: #ffffff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            margin: 15px;
        }
        .profile-card:hover {
            transform: translateY(-10px); 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #f1f1f1;
            margin-bottom: 15px;
            
        }
        .profile-card h5 {
            margin: 10px 0 5px;
            font-size: 18px;
            font-weight: 600;
        }
        .profile-card p {
            font-size: 14px;
            color: #6c757d;
        }
        .profile-card .social-icons a {
            color: #6c757d;
            font-size: 16px;
            margin: 0 10px;
            text-decoration: none;
        }
        .social-icons a:hover {
            color: #007bff;
        }
        .profile-card {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center; 
        }
        .profile-card .social-icons {
            margin-top: auto;  
        }

        @media screen and (max-width: 768px) {
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
            .row {
                display: flex;
            }
            .col-md-3 {
                flex: 0 0 100%; 
                max-width: 100%;
            }
            .profile-card {
                margin: 10px 0; 
            }
            .profile-card br {
                display: none;
            }
        }

        @media screen and (max-width: 1024px) {
            .row {
                display: flex;
                flex-wrap: wrap;
            }
            .col-md-3 {
                width: 33.33%; 
            }

            .col-md-3:nth-child(n+4) {
                width: 33.33%;
            }

            .profile-card {
                margin: 10px auto; 
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
        <!-- Breadcrumb Navigation -->
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%278%27%3E%3Cpath d=%27M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z%27 fill=%27%236c757d%27/%3E%3C/svg%3E');" aria-label="breadcrumb">
            <ol class="breadcrumb">
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
                
                <li class="breadcrumb-item active" aria-current="page">About Team</li>
            </ol>
        </nav>
        <h1 style="text-align: center;">Meet Our Team</h1>
        <!-- Team Image -->
        <img src="{{ asset('asset/rr.png') }}" alt="Team" class="team-image">
        
        <div style="margin-bottom: 30px;" class="row">
            <!-- Profile Card 1 -->
            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/arya.png') }}" alt="Arya Pradana Putra">
                    <h5>Arya Pradana <br> Putra</h5>
                    <p>Chief Executive Officer</p>
                    {{-- <p>The top executive responsible for leading an organization, setting its strategy, and ensuring its overall success and performance.</p> --}}
                    <p>The top executive in charge of leading an organization, setting its goals, and ensuring its success.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a> --}}
                        <a href="https://www.threads.net/aaryaptraa" target="_blank"><i class="bi bi-threads"></i></a>
                        <a href="https://www.instagram.com/aaryaptraa" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Profile Card 2 -->
            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/thira.png') }}" alt="Athira Marwa Arrofifah">
                    <h5>Athira Marwa <br> Arrofifah</h5>
                    <p>Chief Operating Officer</p>
                    {{-- <p>The executive responsible for managing the day-to-day operations of an organization, ensuring efficiency and effective implementation of business strategies.</p> --}}
                    <p>The executive in charge of managing daily operations, ensuring efficiency, and implementing business strategies effectively.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a> --}}
                        <a href="https://www.instagram.com/thirr_aa" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Profile Card 3 -->
            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/elen.png') }}" alt="Selena Dahayu Larasati">
                    <h5>Selena Dahayu <br> Larasati</h5>
                    <p>Chief Product Officer</p>
                    {{-- <p>The executive responsible for overseeing the development and execution of product strategies, ensuring products meet customer needs and drive business growth.</p> --}}
                    <p>The executive in charge of developing and executing product strategies to meet customer needs and drive business growth.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a> --}}
                        <a href="https://www.threads.net/zselenaa_" target="_blank"><i class="bi bi-threads"></i></a>
                        <a href="https://www.instagram.com/zselenaa_" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Profile Card 4 -->
            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/athala.png') }}" alt="Athala Wiksa Pradipta">
                    <h5>Athala Wiksa <br> Pradipta</h5>
                    <p>Chief Technology Officer</p>
                    <p>The executive responsible for overseeing the technological direction of an organization, including its technical strategy, innovation, and development.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/1CrfGMLCfi/" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://x.com/Just_Ath69" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/athala_rocky.junior" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/sarah.png') }}" alt="Sarah Larasati">
                    <h5>Sarah <br> Larasati</h5>
                    <p>Chief Marketing Officer</p>
                    {{-- <p>The executive responsible for leading the marketing efforts of an organization, including strategy, branding, and customer engagement to drive growth and market presence.</p> --}}
                    <p>The executive in charge of leading marketing efforts, including strategy, branding, and customer engagement to drive growth and visibility.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a> --}}
                        <a href="https://www.instagram.com/saraaahlarasati" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/fira.png') }}" alt="Safira Putri Destinari">
                    <h5>Safira Putri <br> Destinari</h5>
                    <p>Chief Business Officer</p>
                    {{-- <p>The executive responsible for overseeing business development, partnerships, and strategic opportunities to drive the growth and expansion of an organization.</p> --}}
                    <p>The executive in charge of business development, partnerships, and strategic opportunities to drive growth and expansion.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a> --}}
                        <a href="https://www.instagram.com/piriilaa" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/risang.png') }}" alt="Risang Gading Bhamakerti">
                    <h5>Risang Gading Bhamakerti</h5>
                    <p>Chief Financial Officer</p>
                    {{-- <p>The executive responsible for managing an organization’s financial actions, including planning, risk management, financial reporting, and ensuring overall financial health.</p> --}}
                    <p>The executive in charge of managing financial planning, risk, reporting, and ensuring the organization’s financial health.</p>
                    <div class="social-icons">
                        {{-- <a href="#" target="_blank"><i class="bi bi-facebook"></i></a> --}}
                        <a href="https://www.threads.net/rssgbol" target="_blank"><i class="bi bi-threads"></i></a>
                        <a href="https://www.instagram.com/rssgbol" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="profile-card">
                    <img src="{{ asset('asset/team/andreas.png') }}" alt="Andreas Wegiq Adia Hendix">
                    <h5>Andreas Wegiq Adia Hendix</h5>
                    <p>Advisor</p>
                    {{-- <p>An advisor provides expert guidance and strategic advice to an organization or individual, helping to shape decisions and drive success in specific areas of expertise.</p> --}}
                    <p>An advisor offers expert guidance and advice to help shape decisions and drive success in specific areas.</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/andreas-hendix/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/mostoplesrinelan" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    </div>
    <script>
        window.onload = function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
        };
    </script>
</body>
</html>
