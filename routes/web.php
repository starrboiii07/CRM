<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Redirect root to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});


// Handle lead form submission
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

