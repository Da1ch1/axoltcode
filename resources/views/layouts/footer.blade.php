<footer style="background: rgb(28 36 50); border-radius:10px; background-image: url({{asset('img/pieweb.webp')}}); background-size: contain; background-repeat: no-repeat; background-position: left center; background-blend-mode: overlay;" class="text-center text-gray-600">    <!-- Redes sociales -->
    <div class=" p-3 flex flex-col lg:flex-row items-center justify-between" style="background: rgb(28 36 50); border-radius: 10px">
        <div class="hidden lg:block">
            <span class="text-gray-300 hover:text-white">Redes Sociales:</span>
        </div>
        <div class="flex justify-center space-x-4 sm:mr-6">
            <a href="#" class="text-gray-600 hover:text-gray-800 text-xl">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/axoltcode/" class="text-gray-600 hover:text-gray-800 text-xl">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800 text-xl">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800 text-xl">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>

    <!-- Contenido del footer -->
    <div class="container mx-auto mt-9 p-6 px-6  text-center md:text-left" >
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Columna 1 -->
            <div>
                <h6 class="uppercase font-bold  flex items-center justify-center md:justify-start">
                  <a href="{{route('inicio')}}">  <img class="logo-pie" src="{{ asset('img/logo.webp') }}" alt=""></a>
                </h6>
                <p class="text-gray-300 hover:text-white">
                    Nueve de cada diez médicos recomiendan nuestros servicios sobre marcas competidoras. Entra, compruébalo por ti mismo y aumenta enormemente tus clientes.
                </p>
            </div>

            <!-- Columna 2 -->
            <div>
                <h6 class="uppercase font-bold mb-4">Servicios</h6>
                <ul>
                    <li><a href="#" class="text-gray-300 hover:text-white">Sitios web</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Consultoria técnica</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Apps móviles</a></li>
                </ul>
            </div>

            <!-- Columna 3 -->
            <div>
                <h6 class="uppercase font-bold mb-4">Developers</h6>
                <ul>
                    <li><a href="#" class="text-gray-300  hover:text-white">Cesar</a></li>
                    <li><a href="#" class="text-gray-300  hover:text-white">Lalo</a></li>
                    <li><a href="#" class="text-gray-300  hover:text-white">Geovani</a></li>
                </ul>
            </div>

            <!-- Columna 4 -->
            <div>
                <h6 class="uppercase font-bold mb-4">Contacto</h6>
                <p class="text-gray-300 hover:text-white"><i class="fas fa-home text-gray-500 mr-2"></i>Guadalajara, #, México</p>
                <p class="text-gray-300 hover:text-white"><i class="fas fa-envelope text-gray-500 mr-2"></i> info@example.com</p>
                <p class="text-gray-300 hover:text-white"><i class="fas fa-phone text-gray-500 mr-2"></i> + 01 234 567 88</p>
                <p class="text-gray-300 hover:text-white"><i class="fas fa-print text-gray-500 mr-2"></i> + 01 234 567 89</p>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div style="background: rgba(28, 36, 50, 0.8); border-radius:10px" class="text-center p-4">
        © 2024 Copyright:
        <a class="font-bold text-gray-300 hover:text-white" >Axoltcode.com</a>
    </div>
</footer>
