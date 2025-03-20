<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pruebas de Seguridad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .floating-img {
            width: 500px;
            height: 350px;
            border: 1px solid rgb(19 23 28);
            border-radius: 50%;
            object-fit: cover;
            animation: float 3s ease-in-out infinite;
        }

        .content-primary{
            padding-top: 10%;
            padding-bottom: 20%;
        }

        .sticky-container {
            position: fixed;
            top: 0;
            left: 0;
            /* background: white; */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            margin: 5%;
            padding-top: 7%;
            /* transition: opacity 1s ease-in-out; */
            
        }

        /* Ocultar cuando se hace scroll */
        .hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Sección de contenido posterior */
        .content {
            margin-top: 8vh;
            padding: 5%;
        }

        .red-text {
            color: red;
            font-size: 50px;
            -webkit-text-stroke: 0.5px white;
        }

        /* Estilo para "sting" en negro con borde blanco */
        .black-text {
            color: black;
            font-size: 50px;
            -webkit-text-stroke: 0.5px white;
        }

        @media(max-width: 768px){
            .red-text {
                -webkit-text-stroke: 0.3px white;
            }

            /* Estilo para "sting" en negro con borde blanco */
            .black-text {
                -webkit-text-stroke: 0.3px white;
            }

            .text-start p, .text-start h1, .text-start h3{
                text-align: center
            }
        }


        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <!-- <div class="sticky-container" id="stickySection">
            
        </div> -->

        <div class="row align-items-center">
            <div class="col-lg-6 text-start" style="padding-bottom:5%">
                <h1 class="fw-bold text-primary" style="font-size: 50px"> 
                    <span class="red-text">Pruebas d</span><span class="black-text">e seguridad</span>
                </h1>
                <h1></h1>
                <h3 class="mt-3">¿Te preocupa la seguridad de tu empresa?</h3>
                <p class="lead mt-3">
                    Te ofrecemos un servicio integral de seguridad para evaluar y reforzar la protección de tu empresa ante amenazas reales.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/security-first.png') }}" 
                    alt="Ciberseguridad" >
            </div>
        </div>

        <div class="row text-center content">
            <div class="col-lg-4 cibersecurity-content">
                <img src="{{ asset('img/serveimg.png') }}" alt="Pentesting" class="floating-img mb-3">
                <div class="content-primary">
                    <h2 class="text-secondary">Pentesting</h2>
                    <p>Evaluamos la seguridad de tu empresa simulando ataques reales para identificar vulnerabilidades y fortalecer tu infraestructura.</p>
                </div>
            </div>
            <div class="col-lg-4 cibersecurity-content">
                <img src="{{ asset('img/osint.png') }}" alt="Ingeniería Social" class="floating-img mb-3">
                <div class="content-primary">
                    <h2 class="text-secondary">Ingeniería Social</h2>
                    <p>Probamos la resistencia de tu equipo ante ataques de manipulación, asegurando que tu empresa no sea víctima de engaños.</p>
                </div>
            </div>
            <div class="col-lg-4 cibersecurity-content">
                <img src="{{ asset('img/xploit.png') }}" alt="Explotación" class="floating-img mb-3">
                <div class="content-primary">
                    <h2 class="text-secondary">Explotación</h2>
                    <p>Utilizamos técnicas avanzadas para simular amenazas reales y demostrar cómo un atacante podría comprometer tus sistemas.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        // Detectar el scroll y aplicar la clase 'hidden' para desvanecer
        document.addEventListener("scroll", function() {
            const stickySection = document.getElementById("stickySection");
            if (window.scrollY > 100) {
                stickySection.classList.add("hidden");
            } else {
                stickySection.classList.remove("hidden");
            }
        });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>