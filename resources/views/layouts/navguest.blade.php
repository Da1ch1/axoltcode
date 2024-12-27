<!-- Incluir Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
<nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between" style="background-image: repeating-linear-gradient(-45deg, rgba(255, 255, 255, .1), rgba(255, 255, 255, .1) 2px, transparent 2px, transparent 9px); position: relative; height: 14px;">
        
        <!-- Contenedor principal (logo y menú) -->
        <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-between">
          <!-- Logo -->
          <div class="flex-shrink-0 items-center mx-auto">
           <a href="{{ route ('inicio')}}"> <img class="logo-color" src="{{ asset('img/logo.webp') }}" alt="AxolCode"></a>
          </div>
        </div>
        
    
        <!-- Perfil -->
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <div class="relative ml-3">
            <div class="flex justify-center items-center">
              <button 
                type="button" 
                class="relative flex items-center justify-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" 
                id="user-menu-button" 
                aria-expanded="false" 
                aria-haspopup="true" 
                onclick="toggleperfil()"
              >
                <span class="absolute -inset-1.5"></span>
                <img 
                  class="w-8 h-8 rounded-full object-cover" 
                  src="{{ asset('img/ajolote.webp') }}" 
                  alt="Imagen de perfil"
                >
              </button>
            </div>
            
                        <!-- Dropdown -->
            <div id="user-menu" style="background: rgb(28 36 50 )" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md py-1 shadow-lg ring-1 ring-black/5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              @auth
                  <!-- Opciones para usuarios autenticados -->
                  <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">
                      Tu perfil
                  </a>
                  <a href="#" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                      Ajustes
                  </a>
                  <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">
                      @csrf
                      <button type="submit" class="w-full text-left">
                          Salir
                      </button>
                  </form>
              @else
                  <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                      Log in
                  </a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">
                          Registro
                      </a>
                  @endif
              @endauth
            </div>
          </div>
        </div>
      </div>
    </div>

  </nav>
  
  <div class="border-b border-white/3 mt-7" style="border-color: #ffffff08; border-bottom-width: 1px;"></div>