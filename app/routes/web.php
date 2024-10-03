<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\BootstrapController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { return Inertia::render('Dashboard'); })->name('dashboard');
    
    Route::get('/bootstrap',          function () { return Inertia::render('Bootstrap/Home'); })->name('bootstrap_home');
    Route::get('/bootstrap/example',  function () { return Inertia::render('Bootstrap/Example'); })->name('bootstrap_example');
    Route::get('/bootstrap/examples', function () { return Inertia::render('Bootstrap/Examples/index'); })->name('bootstrap_examples');
    Route::get('/bootstrap/examples/{name}', [BootstrapController::class, 'view'])->name('view');

    Route::get('/layouts/blog',     function () { return Inertia::render('Bootstrap/DemoBlogLayout'); })->name('layout_blog');
    Route::get('/layouts/base',     function () { return Inertia::render('Bootstrap/DemoBaseLayout'); })->name('layout_base');
    
});
