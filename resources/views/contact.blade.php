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
            margin: 0; 
            padding: 0; 
            background-color: #f5f5f5; 
            padding-top: 100px; 
        }
        nav {
            margin-bottom: 10px; 
        }
        .contact-container { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: center; 
            align-items: center; 
            padding: 20px; 
            background-color: white; 
            margin: 0 auto; 
            max-width: 1000px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border-radius: 5px; 
            margin-bottom: 45px;
        }
    
        .contact-form, .map-container { 
            flex: 1; 
            margin: 10px; 
            min-width: 300px; 
        }
    
        .contact-form h2 { 
            margin: 0 0 10px; 
            font-size: 24px; 
            color: #333; 
        }
    
        .contact-form p { 
            margin: 0 0 20px; 
            color: #555; 
        }
    
        input, textarea { 
            padding: 10px; 
            margin-bottom: 15px; 
            border: 1px solid #ddd; 
            border-radius: 3px; 
            font-size: 14px; 
            width: 100%; 
            box-sizing: border-box; 
        }
    
        textarea { 
            height: 100px; 
            resize: none; 
        }
    
        button { 
            background-color: #28a745; 
            color: white; 
            padding: 10px 15px; 
            border: none; 
            border-radius: 3px; 
            cursor: pointer; 
            font-size: 14px; 
            font-weight: bold; 
        }
    
        button:hover { 
            background-color: #218838; 
        }
    
        .map-container iframe { 
            width: 100%; 
            height: 300px; 
            border: none; 
            border-radius: 3px; 
        }
    
        @media screen and (max-width: 1024px) and (min-width: 600px) {
            body {
                background-color: white;
            }
            .contact-container {
                box-shadow: none;
            }
        }
    
        @media only screen and (max-width: 768px) {
            body {
                background-color: white;
            }
            .contact-container {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
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
            
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    </div>
    <div class="contact-container">
        <div class="contact-form">
            <h2>GET IN TOUCH</h2>
            <p>Send us a message, we will call back later</p>
            <form onsubmit="sendToWhatsApp(event)">
                <div class="form-group">
                    <input id="name" type="text" placeholder="Your Name" required>
                    <input id="email" type="email" placeholder="Your Email" required>
                </div>
                <input id="subject" type="text" placeholder="Subject" required>
                <textarea id="message" placeholder="Message" required></textarea>
                <button type="submit">SEND MESSAGE</button>
            </form>
        </div>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3715239133894!2d110.77072059999999!3d-7.534396099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1476ffffffff%3A0x4fefce7d4aab5646!2sEnuma%20Technology!5e0!3m2!1sid!2sid!4v1737879456446!5m2!1sid!2sid" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <script>
        function sendToWhatsApp(event) {
            event.preventDefault(); 


            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;


            const whatsappMessage = 
`Hello Smart-Ely, 
I am ${name}
Email: ${email}
Subject: ${subject}

Message: ${message}`;

            const encodedMessage = encodeURIComponent(whatsappMessage);
            const phoneNumber = '6281228551482'; // Your number
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            window.open(whatsappURL, '_blank');
        }
</script>
@include('footer')
</body>
</html>