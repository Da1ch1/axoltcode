<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Kanit:wght@400;700&display=swap" rel="stylesheet">

<div class=" px-4  min-w-full">
    <div class="mx-auto  py-4 sm:px-6 sm:py-9 lg:px-8 relative w-full max-w-2xl lg:max-w-7xl" >
      <div style="background: rgb(5, 5, 5); border-radius: 25px" class="  rounded-lg ring-1  transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:ring-zinc-800 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] relative isolate overflow-hidden px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
      <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
        <circle cx="512" cy="512" r="912" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
        <defs>
          <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
            <stop stop-color="#3b82f6" />
            <stop offset="1" stop-color="#E9" />
          </radialGradient>
        </defs>
      </svg>
      <div class="absolute left-0 top-0 z-20 flex gap-x-2 p-7" style="column-gap: .75rem;">
        <!-- Botón rojo con la "X" que aparece solo al hacer hover -->
        <button class="flex-center h-3 w-3 cursor-pointer rounded-full bg-red-500 text-xl font-bold  relative group transition-colors duration-300 hover:bg-red-600 hover:text-black">
          <!-- "X" dentro del botón rojo, ajustada al tamaño del botón -->
          <span class="absolute inset-0 flex justify-center items-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">✕</span>
        </button>
      
        <!-- Botones grises -->
        <div class="h-3 w-3 rounded-full bg-gray-500/10"></div>
        <div class="h-3 w-3 rounded-full bg-gray-500/10"></div>
      </div>
      
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
            <h2 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Kanit', 'Inter', 'Saint Self'; font-size: 50px;">
                Impulsa tu negocio con soluciones digitales a medida.<br>
                <span class="inline-block bg-gradient-to-r from-white via-blue-500 via-70% to-blue-700 bg-clip-text text-transparent">
                  Sitios web, apps móviles, APIs y más.
                </span>
              </h2>
          <p class="mt-6 text-pretty text-lg/8 text-gray-300">¡Innovamos para hacer crecer tu negocio!</p>
              <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
    <!-- Enlace para abrir el modal -->
    <a href="#" id="open-modal" class="text-sm/6 font-semibold text-red-600 hover:text-red-800">Leer más <span aria-hidden="true">→</span></a>

<!-- Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <!-- Fondo desenfocado -->
  <div class="absolute inset-0 bg-gray-800 bg-opacity-50 backdrop-blur-sm"></div>

  <!-- Contenido del Modal -->
  <div class="rounded-lg w-full max-w-md mx-4 p-6 relative" id="modal-content" style="background: rgb(28, 36, 50)">
    <!-- Modal Header -->
    <div class="flex justify-between items-center">
      <h3 class="text-xl font-semibold text-white">Transforma tu Negocio</h3>
      <button id="close-modal" class="text-gray-500 hover:text-gray-700 font-semibold text-lg">✕</button>
    </div>
    <!-- Modal Content -->
    <div class="mt-4 text-gray-700">
      <p>La innovación tecnológica no es solo una ventaja, es una necesidad. Adaptarse al futuro digital asegura que tu negocio no solo sobreviva, sino que se destaque en un mercado cada vez más competitivo. ¡Es momento de dar el siguiente paso!</p>
    </div>
  </div>
</div> 
            </div>
        </div>
        <div class="observed relative mt-16 w-full h-auto h-full lg:mt-8 flex items-end justify-end">
         <!-- -->
 
         <div class="code-menu hide-scrollbar relative z-10 h-auto w-full sm:w-[90%] md:w-[80%] lg:w-[317px] flex-shrink-0 overflow-x-auto rounded-xl border border-card-900 mb-7 mt-2 sm:mt-20 bg-[#020407] px-4 py-4 sm:px-6 sm:py-6 font-bold text-white">
          <div class="languages mb-6">
            <span class="language-selector" data-lang="py">Python</span>
            <span class="language-selector" data-lang="js">JavaScript</span>
            <span class="language-selector" data-lang="php">PHP</span>
            <span class="language-selector" data-lang="kotlin">Kotlin</span>
          </div>
          
          <!-- Lenguaje Python -->
          <div class="code-content" data-lang='py'>
            <div class="font-bold">
              <div class="font-bold text-[#ec454f]">'py'</div>
              <span>[</span>
              <div class="typewriter">
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <div class="text-xs font-medium text-grey-600 group-hover:text-white">// deep dives</div>
                  <span class="font-bold text-white" data-text="def code ( ):"> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text='&nbsp;&nbsp;&nbsp;&nbsp;print(" | AxoltCode ")'> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text="code()"> </span>
                </a>
              </div>
              <span class="font-bold xl:inline">]</span>
            </div>
          </div>
        
          <!-- Lenguaje JavaScript -->
          <div class="code-content hidden" data-lang="js">
            <div class="font-bold">
              <div class="font-bold text-[#ec454f]">'js'</div>
              <span>[</span>
              <div class="typewriter">
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <div class="text-xs font-medium text-grey-600 group-hover:text-white">// deep dives</div>
                  <span class="font-bold text-white" data-text="function code() {"> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text='  console.log(" | AxoltCode ");'> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text="} code();"> </span>
                </a>
              </div>
              <span class="font-bold xl:inline">]</span>
            </div>
          </div>
        
          <!-- Lenguaje PHP -->
          <div class="code-content hidden" data-lang="php">
            <div class="font-bold">
              <div class="font-bold text-[#ec454f]">'php'</div>
              <span>[</span>
              <div class="typewriter">
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <div class="text-xs font-medium text-grey-600 group-hover:text-white">// deep dives</div>
                  <span class="font-bold text-white" data-text="<?php"> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text='  echo " | AxoltCode ";'> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text="?>"> </span>
                </a>
              </div>
              <span class="font-bold xl:inline">]</span>
            </div>
          </div>

          <!-- Lenguaje Kotlin -->
          <div class="code-content hidden" data-lang="kotlin">
            <div class="font-bold">
              <div class="font-bold text-[#ec454f]">'kotlin'</div>
              <span>[</span>
              <div class="typewriter">
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <div class="text-xs font-medium text-grey-600 group-hover:text-white">// deep dives</div>
                  <span class="font-bold text-white" data-text="fun code() {"> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text='  println(" | AxoltCode ")'> </span>
                </a>
                <a class="code-link group relative my-4 block rounded border-none pl-4 text-left text-blue-400 hover:bg-blue-400 hover:text-white"  style="margin-left: 10px; width: calc(100% - 10px); font-size: 17px;">
                  <span class="font-bold text-white" data-text="}"> </span>
                </a>
              </div>
              <span class="font-bold xl:inline">]</span>
            </div>
          </div>


        </div>
        
      </div>
      
      </div>
    </div>
  </div>
  <script>
// Obtener los elementos
const openModalBtn = document.getElementById('open-modal');
const modal = document.getElementById('myModal');
const modalContent = document.getElementById('modal-content');
const closeModalBtns = document.querySelectorAll('#close-modal, #close-modal-footer');

// Función para abrir el modal
openModalBtn.addEventListener('click', (e) => {
  e.preventDefault(); // Prevenir la acción predeterminada del enlace
  modal.classList.remove('hidden'); // Mostrar el modal
  document.body.style.overflow = 'hidden'; // Deshabilitar el scroll en el fondo
});

// Función para cerrar el modal desde los botones
closeModalBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    modal.classList.add('hidden'); // Ocultar el modal
    document.body.style.overflow = ''; // Restaurar el scroll
  });
});

// Función para cerrar el modal al hacer clic fuera del contenido
modal.addEventListener('click', (e) => {
  if (!modalContent.contains(e.target)) {
    modal.classList.add('hidden'); // Ocultar el modal si se hace clic fuera de él
    document.body.style.overflow = ''; // Restaurar el scroll
  }
});

  </script>