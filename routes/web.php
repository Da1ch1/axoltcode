<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;

// Ruta principal
Route::get('/', [PageController::class, 'index'])->name('inicio');
Route::get('/Services', [PageController::class, 'servicios'])->name('inicial');
Route::get('/Services/movil', [PageController::class, 'movil'])->name('movil');
Route::get('/Services/web', [PageController::class, 'dweb'])->name('dweb');
Route::get('/Projects', [PageController::class, 'proyectos'])->name('projects');
Route::get('/Us', [PageController::class, 'nosotros'])->name('us');

// Ruta para la redirección con Google
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

// Ruta de callback después de la autenticación con Google
Route::get('/google-auth/callback', function () {
    // Obtiene el usuario desde Google
    $user = Socialite::driver('google')->stateless()->user();

    // Busca o crea un usuario en la base de datos con la información de Google
    $user = User::updateOrCreate([
        'google_id' => $user->id,
    ], [
        'name' => $user->name,
        'email' => $user->email,
        'avatar' => $user->avatar, // Almacena la imagen de perfil
    ]);

    // Inicia sesión al usuario
    Auth::login($user);

    // Redirige a la página principal
    return redirect('/');
});

Route::get('/dashboard', function () {
    // Redirige al usuario a la raíz o a cualquier otra página
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para la gestión del perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/testimonios', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::post('/testimonios', [TestimonialController::class, 'store'])->name('testimonials.store');
});



require __DIR__.'/auth.php';
