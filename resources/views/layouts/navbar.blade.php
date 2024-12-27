<!-- Incluir Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
<nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between" style="background-image: repeating-linear-gradient(-45deg, rgba(255, 255, 255, .1), rgba(255, 255, 255, .1) 2px, transparent 2px, transparent 9px); position: relative; height: 14px;">
        
<!-- Menú de móvil -->
<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
  <button 
    type="button" 
    class="relative inline-flex items-center justify-center rounded-md p-2  " 
    aria-controls="mobile-menu" 
    aria-expanded="false" 
    onclick="toggleMenu()">
    <!-- Icono de sándwich escalonado -->
    <span class="hamburger-nav flex h-[40px] w-10 flex-col justify-center gap-1 rounded-lg bg-[rgb(28,36,50)] hover:bg-gray-700 px-2">
      <span class="block w-full h-0.5 bg-[rgba(186,217,252,1)]"></span> <!-- Línea superior (completa) -->
      <span class="block w-3/4 h-0.5 bg-[rgba(186,217,252,1)]"></span> <!-- Línea intermedia (75%) -->
      <span class="block w-1/2 h-0.5 bg-[rgba(186,217,252,1)]"></span> <!-- Línea inferior (50%) -->
    </span>
  </button>
</div>

        <!-- Contenedor principal (logo y menú) -->
        <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-between">
          <!-- Logo -->
          <div class="flex-shrink-0 items-center mx-auto">
           <a href="{{ route ('inicio')}}"> <img class="logo-color" src="{{ asset('img/logo.webp') }}" alt="AxolCode"></a>
          </div>
        
          <!-- Menú central -->
          <div class="hidden sm:flex flex-1 justify-center space-x-4 mt-4 sm:mt-0">
            <a href="{{ route('inicial') }}" class="menu-link">Servicios</a>
            <a href="{{ route('projects')}}" class="menu-link">Proyectos</a>
            <a href="{{ route('us')}}" class="menu-link">Nosotros</a>
          </div>
        </div>
        
    
        <!-- Perfil -->
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <div class="relative ml-3">
            <div class="flex justify-center items-center">
              <button type="button" class="relative flex items-center justify-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleperfil()">
                  <span class="absolute -inset-1.5"></span>
                  <img class="w-8 h-8 rounded-full object-cover" 
                  src="{{ Auth::user() && Auth::user()->avatar ? Auth::user()->avatar : asset('img/ajolote.webp') }}" 
                  alt="Imagen de perfil">
              </button>
          </div>
            
                        <!-- Dropdown -->
            <div id="user-menu" style="background: rgb(28 36 50 )" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md py-1 shadow-lg ring-1 ring-black/5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              @auth
                  <!-- Opciones para usuarios autenticados -->
                  <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">
                      Tu perfil
                  </a>
                  <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">
                      @csrf
                      <button type="submit" class="w-full text-left">
                          Salir
                      </button>
                  </form>
              @else
                  <!-- Opciones para usuarios no autenticados -->
                  <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                      Log in
                  </a>
                  @if (Route::has('register'))
                  @endif
              @endauth
            </div>
          </div>
        </div>
      </div>
    </div>
  
<!-- Mobile menu -->
<div id="mobile-menu" class="sm:hidden fixed inset-0 bg-gray-800 bg-opacity-75 z-20 transform -translate-x-full transition-transform duration-300">
  <div class="relative h-full flex justify-center items-center" style="background: rgb(5, 5, 5)">
<!-- Botón de cierre -->
    <button class="btn btn-base btn-secondary absolute right-4 top-4 z-10 flex w-10 h-10 items-center justify-center px-0" onclick="toggleMenu()" style="background-color: rgb(41, 50, 74); border-radius: 14px; letter-spacing: 0.2px;">
      <span class="flex items-center justify-center w-full h-full">
        <svg width="14" viewBox="0 0 25 25" fill="rgb(186, 217, 252)" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z" />
        </svg>
      </span>
    </button>
<!-- Menú -->
    <ul class="my-auto flex flex-col justify-around gap-y-5 overflow-auto text-center" style="font-family: 'Hanken Grotesk', sans-serif;">
      <li>
        <a class="font-medium text-3xl active:text-blue-400 text-white" href="{{route('inicio')}}">
          Inicio
          <span class="-mt-1 block text-xs italic text-gray-400">// just start?</span>
        </a>
      </li>
      <li>
        <a class="font-medium text-3xl active:text-blue-400 text-white" href="{{route('inicial')}}">
          Servicios
          <span class="-mt-1 block text-xs italic text-gray-400">// just services?</span>
        </a>
      </li>
      <li>
        <a class="font-medium text-3xl active:text-blue-400 text-white" href="{{route('projects')}}">
          Proyectos
          <span class="-mt-1 block text-xs italic text-gray-400">// it's what you're here for</span>
        </a>
      </li>

      <li>
        <a class="font-medium text-3xl active:text-blue-400 text-white" href="{{route('us')}}">
          Nosotros
          <span class="-mt-1 block text-xs italic text-gray-400">// got five minutes?</span>
        </a>
      </li>
    </ul>
  </div>
</div>

  </nav>
  
  <div class="border-b border-white/3 mt-7" style="border-color: #ffffff08; border-bottom-width: 1px;"></div>