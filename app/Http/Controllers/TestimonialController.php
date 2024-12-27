<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\User;

class TestimonialController extends Controller
{
    public function index()
    {
        // Obtener los testimonios más recientes, incluyendo la relación con el usuario
        $testimonials = Testimonial::with('user')->latest()->get();
        
        // Verificar si el usuario ha dejado un testimonio
        $userTestimonial = Testimonial::where('user_id', auth()->id())->first();
        
        // Pasar estas variables a la vista
        return view('testimonials.index', compact('testimonials', 'userTestimonial'));
    }

    public function store(Request $request)
    {
        // Validar el testimonio
        $request->validate([
            'testimonial' => 'required|max:500',
        ]);
    
        // Crear el testimonio asociado al usuario autenticado
        Testimonial::create([
            'user_id' => auth()->id(),
            'testimonial' => $request->testimonial,
        ]);
    
        return redirect()->back()->with('success', 'Testimonio enviado correctamente.');
    }

    public function show()
{
    // Obtener todos los testimonios
    $testimonials = Testimonial::with('user')->latest()->get();
    
    // Verificar si el usuario ha dejado un testimonio
    $userTestimonial = Testimonial::where('user_id', auth()->id())->first();
    
    // Pasar las variables a la vista
    return view('dashboard.testimonios', compact('testimonials', 'userTestimonial'));
}

}

