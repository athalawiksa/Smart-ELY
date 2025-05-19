<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Ely</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            margin-top: 100px;
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
        .content {
            position: relative;
            z-index: 1; 
            color: white;
            padding: 50px;
            font-size: 24px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    @include('navbar')
    <video class="background-video" autoplay loop muted>
        <source src="{{ asset('asset/yyy.mp4') }}" type="video/mp4">
        <source src="video.ogv" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%278%27%3E%3Cpath d=%27M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z%27 fill=%27%236c757d%27/%3E%3C/svg%3E');" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <!-- Menambahkan efek hover langsung di dalam elemen style -->
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}#home" style="color: rgb(255, 255, 255); text-decoration: none;"
                       onmouseover="this.style.color='darkblue';" 
                       onmouseout="this.style.color='white';">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" class="bi bi-house-door-fill me-1" 
                            viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('products') }}" style="color: rgb(255, 255, 255); text-decoration: none;"
                       onmouseover="this.style.color='darkblue';" 
                       onmouseout="this.style.color='white';">
                        Products
                    </a>
                </li>
                
                <!-- Item breadcrumb lainnya -->
                <li class="breadcrumb-item active" aria-current="page">Purchase</li>
            </ol>
        </nav>
    </div>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
          <h2 class="card-title text-center mb-4">Purchase</h2>
          <p class="text-center mb-4">Fill out the form below to make a purchase.</p>
    
          <form id="purchaseForm" onsubmit="submitForm(event)">
            <div class="mb-3">
              <label for="name" class="form-label">Id</label>
              <input type="number" class="form-control" id="name" placeholder="" min="0" step="1" required>
            </div>
    
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="name" class="form-control" id="username" placeholder="" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" required>
              </div>
    
            <label for="subject" class="form-label">Product</label>
            <select class="form-control" id="subject">
                <option value="Ely Watch 1">Ely Watch 1</option>
                <option value="(Not Available)">Ely Watch 2 (Coming Soon)</option>
                <option value="(Not Available)">Ely Watch 3 (Coming Soon)</option>
                <option value="(Not available)">Ely Watch 4 (Coming Soon)</option>
            </select>

            <div style="margin-top: 15px;" class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" placeholder="*Optional" rows="4"></textarea>
            </div>
    
            <button type="submit" class="btn btn-success w-100">Order</button>
          </form>
        </div>
      </div>
      @include('footer')
      <script>
        function submitForm(event) {
          event.preventDefault();
      
          var id = document.getElementById('name').value;
          var username = document.getElementById('username').value;
          var email = document.getElementById('email').value;
          var product = document.getElementById('subject').value;
          var message = document.getElementById('message').value;
      
          var formattedMessage = `Hi SmartEly, I want to order:\nId: ${id}\nUsername: ${username}\nEmail: ${email}\nProduct: ${product}\nMessage: ${message}`;
      
          var whatsappLink = `https://wa.me/6281228551482?text=${encodeURIComponent(formattedMessage)}`;
      
          window.open(whatsappLink, '_blank');
        }
      </script>
</body>
</html>