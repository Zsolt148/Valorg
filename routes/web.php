<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('setCookie', [App\Http\Controllers\HomeController::class, 'cookie'])->name('set.cookie');

Route::post('contacts', [App\Http\Controllers\ContactsController::class, 'submit'])->name('send.email');

Route::get('/about-us', function() {
    return view('about-us');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/links', function() {
    return view('links');
});

Route::get('/services', function() {
    return view('services');
});

Route::get('news', [App\Http\Controllers\newsController::class, 'index_guest'])->name('news.index');
Route::get('news/{news:slug}', [App\Http\Controllers\newsController::class, 'show'])->name('news.show');

Route::get('/file/{name}/download', [\App\Http\Controllers\fileController::class, 'download'])->name('file.download');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    //Route::get('index', [\App\Http\Controllers\adminController::class, 'index'])->name('index');
    Route::resource('news', \App\Http\Controllers\newsController::class)->except('index_guest', 'show');
    Route::resource('files', \App\Http\Controllers\fileController::class)->except('download');
    Route::resource('contacts', \App\Http\Controllers\ContactsController::class)->except('submit');
    Route::resource('links', \App\Http\Controllers\LinksController::class);
    Route::resource('companies', \App\Http\Controllers\companyController::class);
});

//guest group
Route::middleware(['guest'])->group(function () {
    Route::get('login/google', [\App\Http\Controllers\Auth\LoginController::class, 'google']);
    Route::get('login/google/redirect', [\App\Http\Controllers\Auth\LoginController::class, 'googleRedirect']);

    //Route::get('forget-password', 'Auth\ForgotPasswordController@getEmail')->name('password.forget');
    //Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword')->name('reset.password');
});

//File megtekintes
Route::get('/file/{filename}', function ($filename = '') {
    $path = storage_path('app/public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
});

