<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\OeuvreController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'accueil/index')->name('home');

Route::view('/explorez', 'accueil/explorez')->name('explorez');

Route::view('/apropos', 'accueil/apropos')->name('apropos');

Route::view('/blog', 'accueil/blog')->name('blog');

Route::view('/contact', 'accueil/contact')->name('contacts');

//---------------------MEMBRE-------------------------------------------------------------------------------------
Route::view('dashboardMembre', 'membre/dashboard')
    ->middleware(['auth', 'verified', 'membre'])
    ->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'membre'])
    ->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'membre'])
    ->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'membre'])
    ->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'membre'])
    ->name('dashboard');

    //---------------------ADMIN-------------------------------------------------------------------------------------
   // Route pour la page de connexion admin
Route::get('admin', function () {
    return view('authentification.loginAdmin'); 
})->middleware(['guest'])->name('admin.login');

// Route pour gérer la soumission du formulaire de connexion admin
Route::post('admin', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Tableau de bord admin
Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');

//---------------------ARTISAN-------------------------------------------------------------------------------------
    

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('artisan/dashboard', 'artisan/dashboard')
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('artisan.dashboard');

Route::get('artisan/explorez', [OeuvreController::class, 'explore'])
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('artisan.explorez');

Route::view('artisan/contact', 'artisan/contact')
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('artisan.contact');  

Route::view('artisan/blog', 'artisan/blog')
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('artisan.blog');

Route::view('artisan/apropos', 'artisan/apropos')
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('artisan.apropos');

Route::get('/artisan/create-oeuvre', [OeuvreController::class, 'create'])
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('oeuvre.create');

Route::post('/artisan/store-oeuvre', [OeuvreController::class, 'store'])
    ->middleware(['auth', 'verified', 'artisan'])
    ->name('oeuvre.store');
    

//admin
Route::get('/admin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:admin');

//---------------------INSCRIPTION-------------------------------------------------------------------------------------
// Route pour afficher le formulaire d'inscription
Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('inscription');
// Route pour traiter les données du formulaire d'inscription
Route::post('/register', [AuthController::class, 'register'])->name('inscription.post');

//-----------------------CONNEXION---------------------------------
// Route pour afficher le formulaire de connexion
Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('connexion');
// Route pour traiter les données du formulaire de connexion
Route::post('/connexion', [AuthController::class, 'login'])->name('connexion.post');

//-----------------------DECONNEXION---------------------------------
Route::post('/deconnexion', function () {
    Auth::logout();
    return redirect('/');
})->name('deconnexion');


// Route pour le tableau de bord des artisans
//Route::get('/artisan/dashboard', [ArtisanController::class, 'dashboard'])->name('artisan.dashboard');

// Route pour le tableau de bord des membres
//Route::get('/membre/dashboard', [MembreController::class, 'dashboard'])->name('membre.dashboard');





require __DIR__.'/auth.php';
