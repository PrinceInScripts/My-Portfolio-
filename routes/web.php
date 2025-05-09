<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class,'home'])->name('home');

Route::get('/about',[RouteController::class,'about'])->name('about');
Route::get('/contact',[RouteController::class,'contact'])->name('contact');
Route::get('/service',[RouteController::class,'services'])->name('service');
Route::get('/blog',[RouteController::class,'blog'])->name('blog');
Route::get('/blog/{id}',[RouteController::class,'blogDetails'])->name('blog.details');
Route::get('/project',[RouteController::class,'project'])->name('project');
Route::get('/project/{id}',[RouteController::class,'projectDetails'])->name('project.details');

