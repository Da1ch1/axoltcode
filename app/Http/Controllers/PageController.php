<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;

class PageController extends Controller
{
    /**
     * Mostrar la página de inicio.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtiene el usuario autenticado
        $user = Auth::user(); 

        // Obtener todos los testimonios
        $testimonials = Testimonial::with('user')->latest()->get();

        // Verificar si el usuario ha dejado un testimonio
        $userTestimonial = Testimonial::where('user_id', auth()->id())->first();

        // Devolver la vista dashboard.combined con los testimonios y el estado del testimonio
        return view('dashboard.combined', compact('user', 'testimonials', 'userTestimonial'));
    }
    public function servicios()
    {
        // Obtiene el usuario autenticado
        $user = Auth::user(); 

        // Devuelve la vista servicios.inicial con los datos del usuario
        return view('servicios.inicial', compact('user'));
    }

    public function proyectos()
    {
        // Obtiene el usuario autenticado
        $user = Auth::user(); 

        // Devuelve la vista proyectos.index con los datos del usuario
        return view('proyectos.index', compact('user'));
    }

    public function nosotros()
    {
        // Obtiene el usuario autenticado
        $user = Auth::user(); 

        // Devuelve la vista nosotros.index con los datos del usuario
        return view('nosotros.index', compact('user'));
    }

    public function movil()
    {
        $user = Auth::user();
        return view('servicios.movil.includ', compact('user'));
    }
}
