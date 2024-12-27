@extends('layouts.app')

@section('content')
    @include('dashboard.initial')

      @include('dashboard.technologies')
      <img loading="lazy" class="absolute fondo mix-blend-luminosity xl:inline-block" src="https://laracasts.com/images/home/teacher-grid-bg.svg">

    @include('dashboard.section')

    @include('dashboard.grid')
    @include('dashboard.testimonios')
@endsection
