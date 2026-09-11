<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Hero;
use App\Models\Reference;

Route::get('/', function () {
	$hero = Hero::first();
	$references = Reference::latest()->get();
	return view('home', compact('references', 'hero'));
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
