<style>
    /* Estado inicial para los elementos */
  .observed {
  opacity: 0;
  transform: translateX(-60px); /* Desplaza el elemento hacia la izquierda inicialmente */
  transition: opacity 0.9s ease, transform 0.9s ease; /* Transición suave para las propiedades */
  }

  /* Animación para aparecer (fade hacia la derecha) */
  .animate-slide-in {
  opacity: 1;
  transform: translateX(0); /* Regresa a su posición original */
  }

  /* Animación para desaparecer */
  .animate-slide-out {
  opacity: 0;
  transform: translateX(20px); /* Desplaza el elemento hacia la derecha al desaparecer */
} 
</style>
<div class="">
    <img src="https://laracasts.com/images/home/teacher-grid-bg.svg" alt="" loading="lazy" class="absolute fondo mix-blend-luminosity xl:inline-block inset-0 -z-10 size-full object-cover object-right md:object-center">

    <div class=" mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <div class="flex flex-col lg:flex-row items-center gap-10 mx-auto max-w-6xl">
              <div class="max-w-2xl">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Nuestros servicios</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">
                  Soluciones web a medida, optimizadas con las últimas tecnologías. Desarrollamos sitios web, un sitio web bien diseñado no solo capta la atención de tus clientes potenciales, sino que también los guía directamente hacia la acción que deseas: comprar, registrarse o contactarte.
                </p>
              </div>
            </div>
            
            <div class="relative z-10 overflow-hidden rounded-sm ring-1 shadow-xl ring-slate-900/5">
              <img class="w-full max-w-[650px] h-auto md:h-[450px] object-cover" src="{{ asset('img/Landing-Pages-pc.png') }}">
            </div>


            <div class="observed relative z-10  lg:block">
              <div class="mt-1 flex">
                <div class="relative shrink-0 p-4 hidden lg:block">
                  
                  <div class="z-0">
                    <div class="absolute top-0 -right-12 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -top-8 bottom-0 left-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -right-12 bottom-14 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -top-2 right-0 -bottom-8 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute right-10 bottom-full -mb-px flex h-8 items-end overflow-hidden">
                      <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                        <div class="w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(56,189,248,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-xs">
                          </div>
                          <div class="-ml-[100%] w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(56,189,248,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-[1px]">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <!-- <div class="relative z-10 overflow-hidden rounded-sm ring-1 shadow-xl ring-slate-900/5">
                        <img class="h-[400px] w-[466px]" src="{{ asset('img/Landing-Pages-movil.png') }}">
                      </div> -->
                      
                      <div>
                        <div class="absolute top-0 -right-8 -left-4 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute -top-20 right-0 -bottom-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute -right-8 bottom-0 -left-4 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute top-[calc(100%-1px)] right-10 -mb-px flex h-8 items-start overflow-hidden">
                          <div class="flex -mt-px h-[2px] w-80 -scale-x-100">
                            <div class="w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(56,189,248,0.3)_67.19%,rgba(56,189,248,0)_100%)] blur-xs">
                              </div>
                              <div class="-ml-[100%] w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(56,189,248,0.4)_67.19%,rgba(236,72,153,0)_100%)] blur-[1px]">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
        
          <dl class="grid max-w-xl  gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-4 lg:gap-y-16">
            <div class="observed relative pl-16 rounded-lg ring-1 ring-white/[0.03] transition duration-300 dark:hover:ring-zinc-700">
              <!-- <a href="{{route ('movil')}}"> -->
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    <path d="M31.25 12.75h-8.5a2 2 0 00-2 2v16.5a2 2 0 002 2h8.5a2 2 0 002-2v-16.5a2 2 0 00-2-2z" class="fill-white stroke-sky-500"></path>
                    <path d="M26.75 30.25h.5" class="stroke-sky-500"></path>
                  </svg>
                </div>
                Desarrollo Móvil
              </dt>
              <dd class="mt-2 text-sm p-2 text-gray-600 sm:text-base">
                PROXIMAMENTE....
              </dd>
              <!-- El SVG ahora está en la parte inferior derecha -->
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg> -->
              <!-- </a> -->
            </div>
            <div class="observed relative pl-16  rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700  ">
              <a href="{{route ('dweb')}}">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    <path d="M10 14h20a1.5 1.5 0 011.5 1.5v10a1.5 1.5 0 01-1.5 1.5H10a1.5 1.5 0 01-1.5-1.5v-10A1.5 1.5 0 0110 14z" class="fill-white stroke-sky-500"></path>
                    <path d="M8 26h24a1 1 0 011 1v1a1 1 0 01-1 1H8a1 1 0 01-1-1v-1a1 1 0 011-1z" class="fill-gray-200 stroke-sky-500"></path>
                  </svg>
                </div>
                Desarrollo Web
              </dt>
              <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">Transformamos ideas en experiencias digitales impactantes. Construimos sitios web funcionales, modernos y adaptados a las necesidades de tu negocio, con un enfoque en rendimiento y diseño eficiente.</dd>
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg> 
            </a>  
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
              <!-- <a href="" disabled> -->
                <dt class="text-base/7 font-semibold text-white mt-3">
                  <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                    <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                      
                      <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                      <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    
                      
                      <g transform="translate(9, 3)">
                      <path d="M20 13a4 4 0 110 8 4 4 0 010-8z" class="fill-white stroke-sky-500"></path>
                      <path d="M20 9v2m0 10v2m-6-6H12m14 0h-2M16.6 16.6l-1.4 1.4M24.8 16.6l1.4 1.4M16.6 23.4l-1.4-1.4M24.8 23.4l1.4-1.4" class="stroke-sky-500"></path>
                    
                      
                      <path d="M10 28h10a2 2 0 002-2v-4a2 2 0 00-2-2H10a2 2 0 00-2 2v4a2 2 0 002 2z" class="fill-white stroke-sky-500"></path>
                      <path d="M12 26h6" class="stroke-sky-500"></path>
                      </g>
                    </svg>
                  </div>
                  Consultoria técnica
                </dt>
                <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">PROXIMAMENTE....</dd>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                </svg>   -->
              <!-- </a>  -->
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
             <a href="{{ route('cibersecurity') }}">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    
                    <!-- Candado en la misma posición que el móvil, sin deformarse -->
                    <g transform="translate(16, 21)">
                      <path d="M4 0v-3a4 4 0 018 0v3h-3v-3a1 1 0 00-2 0v3h-3z" class="fill-white stroke-sky-500"></path>
                      <path d="M1 0h14a1 1 0 011 1v7a1 1 0 01-1 1H1a1 1 0 01-1-1v-7A1 1 0 011 0z" class="fill-white stroke-sky-500"></path>
                      <path d="M-1 7h18a1 1 0 011 1v1a1 1 0 01-1 1H-1a1 1 0 01-1-1v-1a1 1 0 011-1z" class="fill-gray-200 stroke-sky-500"></path>
                    </g>
                  </svg>
                </div>
                Ciberseguridad
              </dt>
              <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">¿Quieres saber que tan seguro es tu sitio web? Nosotros te ofrecemos un servicio de pruebas de penetración para tu empresa, evita la fuga de información y mantente tranquil@ y segur@.</dd>
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg>   
            </a>
            </div>
          </dl>
        
      </div>
    </div>
  </div>

  <div class="relative    py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
        <div class="max-w-xl lg:max-w-lg">
          <x-part-cod />
        </div>
        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
          <div class="flex flex-col items-start">
            <div class="observed rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
              </svg>
            </div>
            <dt class="mt-4 text-base font-semibold text-white">Estamos siempre para ti</dt>
            <dd class="mt-2 text-base/7 text-gray-400">Puedes contactarnos en cualquier momento, estaremos para ayudarte y resolver tus dudas.</dd>
          </div>
          <div class="flex flex-col items-start">
            <div class="observed rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
              </svg>
            </div>
            <dt class="mt-4 text-base font-semibold text-white">Privacidad y seguridad</dt>
            <dd class="mt-2 text-base/7 text-gray-400">No usaremos tu datos, ni tu información y ni la de tus clientes, todo es confidencial.</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
      <div class="aspect-[1155/678] w-[95vw] sm:w-[52.1875rem] max-w-full bg-gradient-to-tr from-[#3b82f6] to-[#3b82f6] opacity-30" 
           style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
    
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const element = entry.target;

        if (entry.isIntersecting && element.dataset.visible !== "true") {
          // Elemento entra a la vista
          element.classList.add("animate-slide-in");
          element.classList.remove("animate-slide-out");
          element.dataset.visible = "true"; // Marca como visible
        } else if (!entry.isIntersecting && element.dataset.visible !== "false") {
          // Elemento sale de la vista
          element.classList.add("animate-slide-out");
          element.classList.remove("animate-slide-in");
          element.dataset.visible = "false"; // Marca como no visible
        }
      });
    },
    { threshold: 0.1 } // Sensibilidad del observador
  );

  // Inicializar elementos observados
  const observedElements = document.querySelectorAll(".observed");
  observedElements.forEach((el) => {
    el.dataset.visible = "false"; // Inicializa como no visible
    observer.observe(el);
  });
});

  </script>
<style>
  
.-translate-x-1\/2 {
    --tw-translate-x: -50%
}

.-translate-x-1\/2,.-translate-x-1\/3 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.-translate-x-1\/3 {
    --tw-translate-x: -33.333333%
}

.-translate-x-6 {
    --tw-translate-x: -1.5rem
}

.-translate-x-6,.-translate-y-1\/2 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.-translate-y-1\/2 {
    --tw-translate-y: -50%
}

.translate-x-6 {
    --tw-translate-x: 1.5rem
}

.rotate-180,.translate-x-6 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.rotate-180 {
    --tw-rotate: 180deg
}

.transform {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@keyframes fade-in {
    0% {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

.animate-fade-in {
    animation: fade-in .5s linear forwards
}

@keyframes marquee {
    to {
        transform: translateY(-50%)
    }
}

.animate-marquee {
    animation: marquee var(--marquee-duration) linear infinite
}

@keyframes spin-reverse {
    to {
        transform: rotate(-1turn)
    }
}

.animate-spin-reverse-slower {
    animation: spin-reverse 6s linear infinite
}

.animate-spin-slow {
    animation: spin 4s linear infinite
}

@keyframes spin {
    to {
        transform: rotate(1turn)
    }
}

.animate-spin-slower {
    animation: spin 6s linear infinite
}

.inset-0 {
    inset: 0;
}

.-inset-x-1 {
    left: -.25rem;
    right: -.25rem
}

.-inset-x-1\.5 {
    left: -.375rem;
    right: -.375rem
}

.-inset-y-3 {
    top: -.75rem;
    bottom: -.75rem
}

.inset-x-0 {
    left: 0;
    right: 0
}

.inset-y-\[calc\(1\/729\*100\%\)\] {
    top: calc(1 / 729 * 100%);
    bottom: calc(1 / 729 * 100%)
}
</style>