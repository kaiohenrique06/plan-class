<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Adicionar rota para o dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LivroController::class, 'index'])->name('dashboard');
    Route::resource('livros', LivroController::class);

    // Adicionar rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';