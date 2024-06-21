<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/vision', [PagesController::class, 'vision'])->name('vision');
Route::get('/mission', [PagesController::class, 'mission'])->name('mission');
Route::get('/donate', [PagesController::class, 'donate'])->name('donate');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
// Route::get('/event', [PagesController::class, 'event'])->name('event');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/password', [ProfileController::class, 'changePassword'])->name('profile.password');
    Route::post('/profile/password/update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Other admin routes...

    // web.php
    // Assuming you have a ProfileController with methods like index, edit, update, etc.

 

    Route::get('/register-members', [MemberController::class, 'register'])->name('admin.registermembers');
    Route::post('/register-members', [MemberController::class, 'store'])->name('admin.storemembers');
    Route::get('/view-members', [MemberController::class, 'view'])->name('admin.viewmembers');
    Route::resource('members', MemberController::class);
    Route::get('/members/generate-pdf/{id}', [MemberController::class, 'generatePDF'])->name('members.generate-pdf');
});
