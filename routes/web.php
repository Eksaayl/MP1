<?php

use App\Http\Livewire\Contact;
use App\Http\Livewire\ImageUpload;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Todos\ListTodos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about'); // Points to the Blade view
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // Points to the Blade view
})->name('contact');
Route::post('/contact', [Contact::class, 'send'])->name('contact.send');

Route::get('/faq', function () {
    return view('faq'); // Points to the Blade view
})->name('faq');

Route::get('/team', function () {
    return view('team'); // Points to the Blade view
})->name('team');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/todos', ListTodos::class)->name('todos');
    Route::get('/image-upload', ImageUpload::class)->name('image-upload');
});
