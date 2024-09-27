<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Login;
use \App\Livewire\Posts\Index as PostIndex;
use App\Livewire\Users\Show as UsersShow;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/posts', PostIndex::class)->name('posts');
    Route::get('/users/{user}', UsersShow::class)->name('users.show');
});
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::post('logout', LogoutController::class)->name('logout');
