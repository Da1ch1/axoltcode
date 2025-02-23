@extends('layouts.app')
<style>
  /* Estilos del loader */
  .loader-container {
      position: fixed;
      inset: 0;
      background: black;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 50;
      opacity: 1;
      visibility: visible;
      transition: opacity 0.8s ease-out, visibility 0.8s ease-out;
  }

  .reverse-spinner {
      position: relative;
      height: 100px;
      width: 100px;
      border: 4px solid transparent;
      border-top-color: #1976d2;
      border-left-color: #1976d2;
      border-radius: 50%;
      animation: spin 1.5s linear infinite;
  }

  .reverse-spinner::before {
      position: absolute;
      top: 15px;
      left: 15px;
      right: 15px;
      bottom: 15px;
      content: "";
      border: 4px solid transparent;
      border-top-color: #03a9f4;
      border-left-color: #03a9f4;
      border-radius: 50%;
      animation: spinBack 1s linear infinite;
  }

  @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
  }

  @keyframes spinBack {
      from { transform: rotate(0deg); }
      to { transform: rotate(-360deg); }
  }

  /* Ocultar contenido inicial hasta que el loader desaparezca */
  .hidden-content {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.7s ease-in, visibility 0.7s ease-in;
  }
</style>
@section('content')
    <!-- Loader -->
    <div id="loader" class="loader-container">
      <div class="reverse-spinner"></div>
  </div>
    @include('dashboard.initial')

      @include('dashboard.technologies')
      <img loading="lazy" class="absolute fondo mix-blend-luminosity xl:inline-block" src="https://laracasts.com/images/home/teacher-grid-bg.svg">

    @include('dashboard.section')

    @include('dashboard.grid')
    @include('dashboard.testimonios')
@endsection
<script>
  document.addEventListener("DOMContentLoaded", function () {
      setTimeout(() => {
          document.getElementById("loader").style.opacity = "0";
          document.getElementById("loader").style.visibility = "hidden";
          document.getElementById("content").style.opacity = "1";
          document.getElementById("content").style.visibility = "visible";
      }, 500); // Se oculta después de 0.5 segundos
  });
</script>