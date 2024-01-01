<?php

use App\Livewire\ShowNotes;
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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

Route::middleware(
    ['auth:sanctum', config('jetstream.auth_session'), 'verified']
)->group(
    function () {
        Route::get(
            '/dashboard', function () {
                return view('dashboard');
            }
        )->name('dashboard');
    }
)
->name('notes.')->prefix('notes')->group(
    function () {
         Route::get('/all', ShowNotes::class)->name('all');
//         Route::get('/note/{id}', ShowNote::class)->name('details');
        // Route::get('/create', CreateNoteController::class)->name('create');
        // Route::get('/edit/{note}', EditNoteController::class)->name('edit');
        // Route::post('/store/{note?}', StoreNoteController::class)->name('store');
        // Route::post('/delete/{note}', DeleteNoteController::class)->name('delete');
    }
);
