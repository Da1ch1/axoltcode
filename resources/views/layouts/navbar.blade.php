<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">

<nav id="navbar" class="bg-[#0d1117] shadow-md fixed top-0 w-full z-50 transition-all duration-300">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Botón de menú responsive -->
      <div class="flex items-center sm:hidden">
        <button 
          type="button" 
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none" 
          aria-controls="mobile-menu" 
          aria-expanded="false" 
          onclick="toggleMenu()">
          <span class="sr-only">Open main menu</span>
          <div class="flex flex-col gap-1">
            <span class="block w-6 h-0.5 bg-blue-300"></span>
            <span class="block w-4 h-0.5 bg-blue-300"></span>
            <span class="block w-3 h-0.5 bg-blue-300"></span>
          </div>
        </button>
      </div>

      <!-- Menú principal a la izquierda -->
<div class="hidden sm:flex space-x-6 text-sm font-medium text-slate-300">
  <a href="{{ route('inicial') }}" class="relative group hover:text-white transition">
    Servicios
    <span class="absolute -bottom-3 left-1/2 -translate-x-1/2 flex opacity-0 group-hover:opacity-100 transition duration-300">
      <span class="w-[6px] h-1.5 bg-red-300"></span>
      <span class="w-[6px] h-1.5 bg-red-400"></span>
      <span class="w-[6px] h-1.5 bg-red-500"></span>
      <span class="w-[6px] h-1.5 bg-red-600"></span>
      <span class="w-[6px] h-1.5 bg-red-700"></span>
      <span class="w-[6px] h-1.5 bg-red-800"></span>
      <span class="w-[6px] h-1.5 bg-black"></span>
    </span>
  </a>

  <a href="{{ route('projects') }}" class="relative group hover:text-white transition">
    Proyectos
    <span class="absolute -bottom-3 left-1/2 -translate-x-1/2 flex opacity-0 group-hover:opacity-100 transition duration-300">
      <span class="w-[6px] h-1.5 bg-red-300"></span>
      <span class="w-[6px] h-1.5 bg-red-400"></span>
      <span class="w-[6px] h-1.5 bg-red-500"></span>
      <span class="w-[6px] h-1.5 bg-red-600"></span>
      <span class="w-[6px] h-1.5 bg-red-700"></span>
      <span class="w-[6px] h-1.5 bg-red-800"></span>
      <span class="w-[6px] h-1.5 bg-black"></span>
    </span>
  </a>

  <a href="{{ route('us') }}" class="relative group hover:text-white transition">
    Nosotros
    <span class="absolute -bottom-3 left-1/2 -translate-x-1/2 flex opacity-0 group-hover:opacity-100 transition duration-300">
      <span class="w-[6px] h-1.5 bg-red-300"></span>
      <span class="w-[6px] h-1.5 bg-red-400"></span>
      <span class="w-[6px] h-1.5 bg-red-500"></span>
      <span class="w-[6px] h-1.5 bg-red-600"></span>
      <span class="w-[6px] h-1.5 bg-red-700"></span>
      <span class="w-[6px] h-1.5 bg-red-800"></span>
      <span class="w-[6px] h-1.5 bg-black"></span>
    </span>
  </a>
</div>

      <!-- Logo al centro -->
<div class="flex-shrink-0 absolute left-1/2 transform -translate-x-1/2">
  <a href="{{ route('inicio') }}">
    <!-- Logo para pantallas pequeñas -->
    <img src="{{ asset('img/logoaxolote.png') }}" class="sm:hidden h-16" alt="AxoltCode">

    <!-- Logo para pantallas medianas y grandes -->
    <img src="{{ asset('img/logoaxolcode.png') }}" class="hidden sm:block h-56" alt="AxoltCode">
  </a>
</div>


      <!-- Perfil a la derecha -->
      <div class="flex items-center">
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
                <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                    Log in
                </a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- Menú móvil -->
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

<!-- Línea divisoria -->
<div class="border-b border-white/5 mt-16"></div>

<script>
  function toggleperfil() {
    const menu = document.getElementById('user-menu');
    menu.classList.toggle('hidden');
  }

  function toggleMenu() {
    const mobile = document.getElementById('mobile-menu');
    mobile.classList.toggle('-translate-x-full');
  }

  window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
      navbar.classList.add('backdrop-blur', 'bg-[#0d1117]/60');
    } else {
      navbar.classList.remove('backdrop-blur', 'bg-[#0d1117]/60');
    }
  });
</script>