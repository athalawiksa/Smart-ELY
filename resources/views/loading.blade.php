<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dengan Loader</title>
    <style>
        /* Loader styling */
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        /* Animasi Loader */
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #ccc;
            border-top-color: #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @media (max-width: 480px) {
            .spinner {
                width: 30px;
                height: 30px;
                border-width: 3px;
            }
        }

        /* 🔹 Media Query untuk Tablet (481px - 768px) */
        @media (min-width: 481px) and (max-width: 768px) {
            .spinner {
                width: 40px;
                height: 40px;
                border-width: 4px;
            }
        }

        /* 🔹 Media Query untuk Layar Besar (Di atas 1200px) */
        @media (min-width: 1200px) {
            .spinner {
                width: 60px;
                height: 60px;
                border-width: 6px;
            }
        }
    </style>
</head>
<body>

    <!-- Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <!-- Konten halaman -->
    <div id="content" style="display: none;">
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
                    <a href="{{ route('newsdetail2') }}"><h2 class="card-title" style="margin-top: 20px;">Successful Socialization of SMART ELY: An Innovative Solution for Elderly Health Monitoring at Dr. Endang Manahan's Clinic</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Today, January 24, 2025, at 07:20 WIB, we held a socialization event for our SMART ELY product, a smartwatch with smart monitoring for the elderly, at Dr. Endang Manahan's Clinic in Solo.</p>
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
                    <a href="{{ route('newsdetail5') }}"><h2 class="card-title" style="margin-top: 20px;">Introducing Advanced Technology to Enhance Elderly Care</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Today, January 24, 2025, at 08.00 WIB, we held a socialization event for our SMART ELY product, a smartwatch with advanced health monitoring features for the elderly, at SMAN 4 Surakarta. The event was attended by teachers and school staff who were enthusiastic about learning more about our product.</p>
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
                    <a href="{{ route('newsdetail7') }}"><h2 class="card-title" style="margin-top: 20px;">Introduction to SMART ELY at SMKN 5 Surakarta: An Advanced Solution for Elderly Healthcare Maintenance</h2></a>
                      <div class="date" style="margin-top: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: green;">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                          <span style="color: green;">2025-1-24</span>
                      </div>
                    <p class="card-text" style="margin-top: 10px; text-align: justify;">Today, on January 24, 2025, at 09:00 AM WIB, we held a product socialization for SMART ELY, a smartwatch with smart monitoring for the elderly, at SMK 5 Surakarta. The event was attended by Mrs. Bernadetha, a teacher at SMK 5 Surakarta.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        // Sembunyikan loader setelah halaman selesai dimuat
        window.onload = function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
        };
    </script>

</body>
</html>
