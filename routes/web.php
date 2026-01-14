<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\StripePaymentController;


/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES (aucune connexion requise)
|--------------------------------------------------------------------------
*/

// Accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Liste publique des projets
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

// Pages statiques
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
|--------------------------------------------------------------------------
| AUTHENTIFICATION (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| UTILISATEUR CONNECTÉ
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN (auth + admin)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    // Liste admin des projets
    Route::get('/admin/projects', [ProjectController::class, 'adminIndex'])
        ->name('projects.admin');

    // Créer un projet
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])
        ->name('projects.create');

    Route::post('/admin/projects', [ProjectController::class, 'store'])
        ->name('projects.store');

    // Modifier un projet
    Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])
        ->name('projects.edit');

    Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])
        ->name('projects.update');

    // Supprimer un projet
    Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])
        ->name('projects.destroy');

});

Route::get('/admin/projects/{project}', [ProjectController::class, 'show'])
        ->name('projects.show');


Route::middleware('auth')->group(function () {
    Route::get('/projects/{project}/invest', [DonationController::class, 'create'])
        ->name('projects.invest');

    Route::post('/projects/{project}/invest', [DonationController::class, 'store'])
        ->name('projects.invest.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/projects/{project}/pay', [StripePaymentController::class, 'checkout'])
        ->name('stripe.checkout');

    Route::get('/projects/{project}/payment-success', [StripePaymentController::class, 'success'])
        ->name('stripe.success');

    Route::get('/projects/{project}/payment-cancel', [StripePaymentController::class, 'cancel'])
        ->name('stripe.cancel');
});

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handle']);



