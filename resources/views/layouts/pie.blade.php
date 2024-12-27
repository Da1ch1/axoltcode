<footer style=" border-radius:10px; background-image: url({{asset('img/pieweb.webp')}}); background-size: contain; background-repeat: no-repeat; background-position: left center; background-blend-mode: overlay;" class="text-white py-8 rounded-lg">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sección de Soluciones -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Servicios</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Sitios Web</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Consultoria Técnica</a></li>
                    <li><a href="{{route('movil')}}" class="text-gray-400 hover:text-white">Apps Móviles</a></li>
                </ul>
            </div>
            <!-- Sección de Soporte -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Developers</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Angianovic</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Lalo</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Geovani</a></li>
                </ul>
            </div>
            <!-- Sección Legal -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Terms of service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Privacy policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">License</a></li>
                </ul>
            </div>
            <!-- Bloque con logo y descripción -->
            <div class="block lg:hidden">
                <h6 class="uppercase font-bold flex items-center justify-center md:justify-start">
                    <a href="{{route('inicio')}}">  
                        <img class="logo-pie" src="{{ asset('img/logo.webp') }}" alt="">
                    </a>
                </h6>
                <p class="text-gray-300 hover:text-white mt-4">
                    Nueve de cada diez médicos recomiendan nuestros servicios sobre marcas competidoras. Entra, compruébalo por ti mismo y aumenta enormemente tus clientes.
                </p>
            </div>
        </div>
        <!-- Sección de suscripción -->
        <div class="flex flex-col md:flex-row justify-between items-start mt-8">
            <!-- Sección de suscripción -->
            <div class="md:w-3/5 text-start">
                <h3 class="text-xl font-semibold mb-4 clamp text-sm !font-medium xl:text-base text-grey-600/70">¡Cotiza tu proyecto!</h3>
                <p class="text-grey-600/70 mb-4">The latest news, articles, and resources, sent to your inbox weekly.</p>
                <form id="subscribe-form" class="flex flex-col justify-left gap-2">
                    <!-- Textarea -->
                    <textarea id="about" name="about" rows="2" 
                        class="p-2 rounded-lg border-2 bg-gray-400 border-blue-900  clamp text-sm !font-medium xl:text-base w-full sm:w-3/4 md:w-1/1" style="color: rgb(87 101 116);" 
                        placeholder="Write your message" required>
                    </textarea>
                    <!-- Contenedor flex para el input y el botón -->
                    <div class="flex flex-col sm:flex-row w-full sm:w-3/4 md:w-1/2 gap-3">
                        <!-- Input -->
                        <input type="email" id="email-address" 
                            class="p-2 clamp text-sm !font-medium xl:text-base rounded-lg border-2 border-blue-900 bg-gray-400 text-gray-800 w-full" style="color: rgb(87 101 116);" 
                            placeholder="Enter your email" required>
                        <!-- Botón -->
                        <button type="submit" 
                            class="p-2 rounded-lg bg-blue-900 text-grey-600/70 hover:bg-blue-800 w-full sm:w-auto">
                            Enviar
                        </button>
                    </div>
                </form>
                <!-- Alerta personalizada -->
                <div id="alert" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 backdrop-blur-sm z-50 hidden">
                    <div class="bg-gray-600 p-3 rounded-md shadow-lg w-80 sm:w-1 md:w-1 lg:w-1/2 text-center">
                        <p id="alert-message" class="text-xl text-gray-300"></p>
                    </div>
                </div>
            </div>
            <!-- Bloque con logo y descripción -->
            <div class="hidden md:flex md:w-2/5 flex-col items-center md:items-start mt-8 md:mt-0">
                <h6 class="uppercase font-bold flex items-center justify-center md:justify-start">
                    <a href="{{route('inicio')}}">  
                        <img class="logo-pie" src="{{ asset('img/logo.webp') }}" alt="">
                    </a>
                </h6>
                <p class="text-gray-300 hover:text-white mt-4 text-sm md:text-base leading-relaxed max-w-xs">
                    Nueve de cada diez médicos recomiendan nuestros servicios sobre marcas competidoras. Entra, compruébalo por ti mismo y aumenta enormemente tus clientes.
                </p>
            </div>
        </div>
        <!-- Línea divisoria -->
        <div class="my-8 border-t border-gray-600 mx-8"></div>
        <!-- Sección de derechos de autor y redes sociales -->
        <div class="flex flex-col sm:flex-row items-center justify-between">
            <!-- Iconos de redes sociales -->
            <div class="flex sm:flex-row justify-center items-center space-x-4 ml-2 sm:ml-0 sm:justify-end">
                <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Facebook</span>
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/axoltcode/" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Instagram</span>
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                </a>                
                <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">GitHub</span>
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>                              
                <!-- Icono de Twitter -->
                <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Twitter</span>
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6">
                        <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"></path>
                    </svg>
                </a>
            </div>
            <!-- Copyright -->
            <p class="text-gray-400 text-sm sm:order-last sm:text-left mt-4 sm:mt-0">
                © 2024 Copyright: <a class="font-bold text-gray-300 hover:text-white" >Axoltcode.com</a>
            </p>
        </div>
    </div>
</footer>
<script>
        // Limpiar el textarea al cargar la página
        window.addEventListener('load', function () {
            const aboutField = document.getElementById('about');
            aboutField.value = '';  // Limpiar el contenido del textarea
        });

        // Lógica de validación y envío del formulario
        document.getElementById('subscribe-form').addEventListener('submit', function (event) {
            event.preventDefault();

            const aboutField = document.getElementById('about');
            const emailField = document.getElementById('email-address');

            // Obtener el valor del área de texto
            const aboutValue = aboutField.value.trim();

            // Validación de campos
            if (aboutValue.length < 10) {
                showAlert('Por favor completa el área con al menos 10 caracteres.');
                return;
            }

            if (!emailField.value.trim()) {
                showAlert('Por favor ingresa un email.');
                return;
            }

            // Si los campos están completos
            showAlert('Mensaje enviado!');
            aboutField.value = '';  // Limpiar campo "About"
            emailField.value = '';  // Limpiar campo "Email"
        });

        // Mostrar alerta
        function showAlert(message) {
            const alertDiv = document.getElementById('alert');
            const alertMessage = document.getElementById('alert-message');

            alertMessage.textContent = message;
            alertDiv.classList.remove('hidden');

            // Cerrar la alerta después de 3 segundos
            setTimeout(() => {
                alertDiv.classList.add('hidden');
            }, 3000);
        }

        // Detectar cuando el usuario deja de escribir en el textarea o input y restablecer el zoom
        document.getElementById('about').addEventListener('blur', resetZoom);
        document.getElementById('email-address').addEventListener('blur', resetZoom);

        function resetZoom() {
            // Restablecer el zoom para dispositivos móviles
            if (window.innerWidth <= 768) {
                document.querySelector('meta[name="viewport"]').setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
            }
        }
</script>
