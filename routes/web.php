<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Reference;

Route::get('/', function () {
    $references = Reference::latest()->get();
    return view('home', compact('references'));
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
