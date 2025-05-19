<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Smart Ely</title>
    <link rel="icon" href="{{ asset('asset/hero.png') }}" type="image/png">
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
            background-color: #f5f5f7;
            padding-top: 100px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            height: 100%;
            margin: 10px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .card .price {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }
        .card ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        .card ul li {
            margin: 10px 0;
        }
        ul li svg {
            margin-right: 8px; 
        }
        .card button {
            background-color: black;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #333;
        }
        .row {
            justify-content: center;
            margin-bottom: 50px;
        }
        .background-video {
            margin-top: 80px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .plan-button {
            height: 50px; 
            width: 100%; 
            font-size: 16px;
            text-align: center;
            border: none;
            cursor: pointer;
        }
        @media only screen and (max-width: 768px) {
            .row {
                gap: 11px;
            }
        }
    </style>
</head>
<body>
    @include('navbar')
    <video class="background-video" autoplay loop muted>
        <source src="{{ asset('asset/hhh.mp4') }}" type="video/mp4">
        <source src="video.ogv" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%278%27%3E%3Cpath d=%27M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z%27 fill=%27%236c757d%27/%3E%3C/svg%3E');" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}#home" style="color: rgb(230, 225, 225); text-decoration: none;"
                       onmouseover="this.style.color='blue';" 
                       onmouseout="this.style.color='white';">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" class="bi bi-house-door-fill me-1" 
                            viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                        Home
                    </a>
                </li>
                
                <li class="breadcrumb-item active" aria-current="page">Bundling</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Free Plan -->
            <div class="col-md-4">
                <div class="card">
                    <h2 style="font-weight: bolder;">BASIC</h2>
                    <p style="color: gray" class="price">$1.24 / month</p>
                    <p style="color: gray">Get real-time alerts to stay safe and informed during emergencies</p>
                    <a href="">
                        <button class="plan-button">Get Basic</button>
                    </a>                    
                    <ul style="color: gray">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Basic Emergency Notification</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Access for 2 Caregivers</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Basic Monthly Report</li>
                    </ul>
                </div>
            </div>

            <!-- Plus Plan -->
            <div class="col-md-4">
                <div class="card">
                    <h2 style="font-weight: bolder;">PREMIUM</h2>
                    <p style="color: gray" class="price">$3.1 / month</p>
                    <p style="color: gray">Expand your care network with access to five trusted caregivers for 24/7 support</p>
                    <a href="">
                        <button class="plan-button">Get Premium</button>
                    </a>
                    <ul style="color: gray">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Online doctor consultation 2x/month</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Access for 5 caregivers</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Weekly analysis report</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Priority tech support notification</li>
                    </ul>
                </div>
            </div>

            <!-- Pro Plan -->
            <div class="col-md-4">
                <div class="card">
                    <h2 style="font-weight: bolder;">ULTIMATE</h2>
                    <p style="color: gray" class="price">$6.2 / month</p>
                    <p style="color: gray">Get the best insights with a daily in-depth health analysis report</p>
                    <a href="">
                        <button class="plan-button">Get Ultimate</button>
                    </a>
                    <ul style="color: gray">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Unlimited online doctor consultation</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Unlimited access to caregivers</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>24/7 ambulance service</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Daily in-depth health analysis report</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                          </svg>Priority emergency response</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>