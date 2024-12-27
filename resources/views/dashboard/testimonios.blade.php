<style>
  .text-card-500 {
    --tw-text-opacity: 1;
    color: rgb(41 51 74 / var(--tw-text-opacity));
}
.font-bold {
    font-weight: 950;
}
.font-kanit {
    font-family: Kanit, Inter, sans-serif;
}
@media (min-width: 768px) {
    .md\:block {
        display: block;
    }
}
@media (min-width: 768px) {
    .md\:text-6xl {
        font-size: 4.63rem;
    }
}
.translate-y-4 {
    --tw-translate-y: -3.7rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
@media (max-width: 640px) {
  .md\:text-6xl {
        font-size: 2.23rem;
    }
  .mobile-translate-y {
    --tw-translate-y: -1.9rem; /* Ajusta este valor para el móvil */
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }
}
.mt-13{
  margin-top: 70px
}
</style>
<div class="relative mt-13  lg:mb-10  md:mb-10" >
  <div>
    <div class="flex h-8  overflow-hidden">
      <div class="flex  h-[2px]  -scale-x-100" style="width: 93%">
        <div class="w-full  [background-image:linear-gradient(98deg,rgba(56,189,248,0.1)_12%,#0EA5E9_32.29%,rgba(56,189,248,0.1)_67.19%,rgba(236,72,153,0)_88%)] blur-xs">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mx-auto max-w-7xl  px-6 lg:px-8">
  <div class="observed mx-auto  px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <p class="mt-2 text-lg/8 text-gray-600"></p>
      <h2 class="inherits-color right-9 absolute translate-y-4 mobile-translate-y sm:translate-y-8 xl:translate-y-2 font-kanit text-4xl sm:text-5xl md:text-6xl lg:text-[75px] xl:text-[100px] font-bold uppercase text-card-500">Comentarios</h2>
    </div>
  </div>



    <div class="observed hide-scrollbar   flex items-start gap-4 overflow-y-hidden overflow-x-scroll px-[30px]" style="scrollbar-width: none;">
      @foreach ($testimonials->chunk(2) as $chunk)
      <div class="space-y-4">
        @foreach ($chunk as $testimonial)
          <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
            <p class="clamp text-sm !font-medium xl:text-base" title="{{ $testimonial->testimonial }}" style="-webkit-line-clamp: 12; word-wrap: break-word; overflow-wrap: break-word;">
              {{ $testimonial->testimonial }}
            </p>
            <div class="flex items-end justify-between">
              <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">
                {{ $testimonial->user->name }}
              </cite>

              {{-- Verifica si el usuario tiene un avatar y si no tiene, usa la imagen predeterminada --}}
              <img loading="lazy" class="w-8 h-8 rounded-full object-cover"
                  src="{{ $testimonial->user->avatar ? $testimonial->user->avatar : asset('img/ajolote.webp') }}"
                  alt="Avatar">
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
      <div class="space-y-4">
        <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
          <p class="clamp text-sm !font-medium xl:text-base" title="Jeffrey has been teaching and inspiring me for at least 7 years now. He is one of the main reasons I chose Laravel and Vue. He has an incredibly effective method of teaching and explains complex concepts in a concise and easily accessible way. It's not an exaggeration to say I wouldn't be where I am without him. " style="-webkit-line-clamp: 8;">Jeffrey has been teaching and inspiring me for at least 7 years now. He is one of the main reasons I chose Laravel and Vue. He has an incredibly effective method of teaching and explains complex concepts in a concise and easily accessible way. It's not an exaggeration to say I wouldn't be where I am without him. </p>
          <div class="flex items-end justify-between">
            <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Jess Archer</cite>
            <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/jess-archer.jpg" alt="Jess Archer" width="25" height="25">
          </div>
        </div>
        <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
            <p class="clamp text-sm !font-medium xl:text-base" title="You get a window into a seasoned developer's mind and workflow for the price of an Uber. I can't overstate the value of a Laracasts subscription." style="-webkit-line-clamp: 8;">You get a window into a seasoned developer's mind and workflow for the price of an Uber. I can't overstate the value of a Laracasts subscription.</p>
            <div class="flex items-end justify-between">
              <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Caleb Porzio</cite>
              <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/caleb-porzio.jpg" alt="Caleb Porzio" width="25" height="25">
            </div>
          </div>
        </div>
      <div class="space-y-4">
          <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
            <p class="clamp text-sm !font-medium xl:text-base" title="Laracasts is, without a doubt, the single greatest resource for PHP developers. I have, and will continue to recommend Laracasts to anyone who even mutters the letters PHP." style="-webkit-line-clamp: 8;">Laracasts is, without a doubt, the single greatest resource for PHP developers. I have, and will continue to recommend Laracasts to anyone who even mutters the letters PHP.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Chris Gooding</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/chris-gooding.jpg" alt="Chris Gooding" width="25" height="25">
              </div>
          </div>
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="Laracasts taught me more in a month than I've learnt at university in two years. Absolutely indispensable." style="-webkit-line-clamp: 8;">Laracasts taught me more in a month than I've learnt at university in two years. Absolutely indispensable.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Robb Lewis</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/robb-lewis.jpg" alt="Robb Lewis" width="25" height="25">
              </div>
            </div>
      </div>
          <div class="space-y-4">
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="Not only will you become better at developing with this amazing framework, Jeffrey will teach you to become a better developer all round. He is, in my opinion, one of the best and most encouraging teachers out there." style="-webkit-line-clamp: 8;">Not only will you become better at developing with this amazing framework, Jeffrey will teach you to become a better developer all round. He is, in my opinion, one of the best and most encouraging teachers out there.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Michael Watts</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/michael-watts.jpg" alt="Michael Watts" width="25" height="25">
              </div>
            </div>
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="I've been a Laracasts member for a while. Jeffrey showed me that it's okay to not understand everything at once. Programming can be hard but with enough patience and determination you can become a good programmer. He's a great teacher and human being. I love Laracast's Snippet podcast." style="-webkit-line-clamp: 8;">I've been a Laracasts member for a while. Jeffrey showed me that it's okay to not understand everything at once. Programming can be hard but with enough patience and determination you can become a good programmer. He's a great teacher and human being. I love Laracast's Snippet podcast.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Selene Arzola</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/selene-arzola.jpg" alt="Selene Arzola" width="25" height="25">
              </div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="Laracasts puts a real-time perspective on building Laravel applications and offers a chance to pair-program with a real expert." style="-webkit-line-clamp: 8;">Laracasts puts a real-time perspective on building Laravel applications and offers a chance to pair-program with a real expert.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Toby Steward</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/toby-steward.jpg" alt="Toby Steward" width="25" height="25">
              </div>
            </div>
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="I'm learning something new at Laracasts every day! It's a phenomenal way to incrementally grow your development strategy!" style="-webkit-line-clamp: 8;">I'm learning something new at Laracasts every day! It's a phenomenal way to incrementally grow your development strategy!</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Adam Engebretson</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/adam-engebretson.jpg" alt="Adam Engebretson" width="25" height="25">
              </div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="Laracasts puts a real-time perspective on building Laravel applications and offers a chance to pair-program with a real expert." style="-webkit-line-clamp: 8;">Laracasts puts a real-time perspective on building Laravel applications and offers a chance to pair-program with a real expert.</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Toby Steward</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/toby-steward.jpg" alt="Toby Steward" width="25" height="25">
              </div>
            </div>
            <div class="panel relative transition-colors duration-300 py-4 rounded-xl flex-shrink-0 px-4" style="width: 240px;">
              <p class="clamp text-sm !font-medium xl:text-base" title="I'm learning something new at Laracasts every day! It's a phenomenal way to incrementally grow your development strategy!" style="-webkit-line-clamp: 8;">I'm learning something new at Laracasts every day! It's a phenomenal way to incrementally grow your development strategy!</p>
              <div class="flex items-end justify-between">
                <cite class="mt-8 block text-sm font-semibold uppercase not-italic text-grey-600/70">Adam Engebretson</cite>
                <img loading="lazy" class="rounded-full border-solid hover:border-blue" src="https://ik.imagekit.io/laracasts/reviews/adam-engebretson.jpg" alt="Adam Engebretson" width="25" height="25">
              </div>
            </div>
          </div>
    </div>
</div>
<div class="px-4 mt-10 mb-5 min-w-full">
  @if (Auth::check() && !$userTestimonial)
    <form action="{{ route('testimonials.store') }}" method="POST" class="flex items-center space-x-2" id="testimonialForm">
        @csrf
        <textarea name="testimonial" placeholder="Deja tu comentario acerca de nosotros..." class="w-2/6 clamp text-sm !font-medium xl:text-base p-1 border rounded-lg bg-gray-400 text-gray-700" required></textarea>
        <button type="button" class="p-2 bg-blue-900 text-white rounded" id="submitButton">Enviar</button>
    </form>
  @elseif (!Auth::check())
    <p class=" text-gray-500 text-center"></p>
  @else
    <p class="mt-4 text-gray-500 text-center">Ya has dejado un Comentario.</p>
  @endif
</div>

<!-- Modal de Confirmación -->
<div id="confirmModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden backdrop-blur-sm z-50">
  <div class="panel p-6 rounded-lg shadow-lg w-96 bg-white">
    <h3 class="text-lg font-semibold text-center mb-4 not-italic text-grey-600/70">¿Estás seguro de enviar el comentario?</h3>
    <div class="flex justify-between">
      <button id="cancelButton" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</button>
      <button id="confirmButton" class="px-4 py-2 bg-blue-600 text-white rounded">Confirmar</button>
    </div>
  </div>
</div>