<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/welcome', function () {
//    return view('welcome');
//});
Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::get('/about',[PagesController::class,'about'])->name('about');
//Route::get('/projects_details',[PagesController::class,'projects_details'])->name('projects_details');
Route::get('/blog',[PagesController::class,'blog'])->name('blog');


Route::get('/projects_details',[ProjectController::class, 'index'])->name('projects_details');
