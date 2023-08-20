<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', \App\Livewire\Web\Home::class)->name('home');

Route::get('/professeur', \App\Livewire\Web\ProfesseurList::class);

Route::get('/professeur/{id}', \App\Livewire\Web\ProfesseurOne::class)->name('professeurOne');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    Route::get('/admin', \App\Livewire\Admin\DashboardAdmin::class)->name('adminDashboard');
    Route::get('/admin/professeur', \App\Livewire\Admin\ProfesseurAdmin::class)->name('adminProfesseur');
    Route::get('/admin/cours', \App\Livewire\Admin\CoursAdmin::class)->name('adminCours');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
