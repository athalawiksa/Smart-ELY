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
        }
    </style>
</head>
<body>
    @extends('navbar')
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
            <li class="breadcrumb-item">
                <a href="{{ route('news') }}" style="color: blue; text-decoration: none;"
                   onmouseover="this.style.color='darkblue';" 
                   onmouseout="this.style.color='blue';">
                    News
                </a>
            </li>
            
            <!-- Item breadcrumb lainnya -->
            <li class="breadcrumb-item active" aria-current="page">News Detail</li>
        </ol>
    </nav>
    </div>
    <div class="container" style="max-width: 510px;">
        <h3>SmartELY Socialization Held at Klinik Wijaya Kusuma, Focusing on Elderly Health Care</h3>
        <img src="{{ asset('asset/news/klinikwk.png') }}" alt="" style="width: 100%;">
        <p style="word-wrap: break-word; overflow-wrap: break-word; color: gray;">
            Surakarta, January 24, 2025 - Today, Klinik Wijaya Kusuma hosted a socialization event 
            for SmartELY, a smartwatch equipped with health monitoring features and local wisdom-based 
            health recommendations for the elderly. The socialization event took place at 11:10 WIB 
            and was attended by Dr. Rulita Ririn Prabawati.
            <br>
            <br>
            During the socialization event, the SmartELY team introduced the smartwatch's advanced 
            features, including heart rate, blood pressure, and physical activity monitoring. 
            Additionally, the team explained the local wisdom-based health recommendations that can 
            help the elderly understand the importance of health and how to maintain it.
            <br>
            <br>
            Dr. Rulita Ririn Prabawati stated in her speech that the SmartELY socialization is a 
            significant step forward in increasing public awareness about the importance of health 
            monitoring for the elderly. "We are delighted to be part of the SmartELY socialization. 
            We believe that this technology can help the elderly monitor their health and maintain a 
            good quality of life," said Dr. Rulita Ririn Prabawati.
            <br>
            <br>
            The SmartELY socialization aims to increase public awareness about the importance of 
            health monitoring for the elderly and promote technology that can improve the quality of 
            life for the elderly.
            <br>
            <br>
        </p>
    </div>
    @extends('footer')
</body>
</html>