<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SearchController;
use Laravel\Socialite\Facades\Socialite;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about_us', [PageController::class, 'index'])->name('about_us');
Route::get('/manufacturing', [PageController::class, 'index'])->name('manufacturing');
Route::get('/facility', [PageController::class, 'index'])->name('facility');
Route::get('/quality', [PageController::class, 'index'])->name('quality');
Route::get('/certificates', [PageController::class, 'index'])->name('certificates');
Route::get('/services', [PageController::class, 'index'])->name('services');

// Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'send'])->name('contactsSend');
Route::get('/contacts/result', [ContactController::class, 'result'])->name('sendResult');

// Search
Route::post('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/{id}', [SearchController::class, 'showItem'])->name('showItem');

Route::prefix('faq')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('faq');
    Route::post('/store', [FaqController::class, 'store'])->name('faqsend');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('faqedit');
    Route::post('/{id}/update', [FaqController::class, 'update'])->name('faqupdate');
    Route::post('/{id}/delete', [FaqController::class, 'delete'])->name('faqdelete');
});

// Settings
Route::prefix('settings')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/', [SettingsController::class, 'index'])->name('settings');
    Route::post('/store', [SettingsController::class, 'store'])->name('settingsstore');
    Route::get('/{id}/edit', [SettingsController::class, 'edit'])->name('settingsedit');
    Route::post('/update', [SettingsController::class, 'update'])->name('settingsupdate');
    Route::get('/user/create', [UserController::class, 'create'])->name('usercreate');
    Route::post('/user', [UserController::class, 'store'])->name('userstore');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('useredit');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('userupdate');
    Route::post('/user/{id}/delete', [UserController::class, 'delete'])->name('userdelete');
    Route::post('/contact/{id}/delete', [ContactController::class, 'delete'])->name('contactdelete');
});

// Blog

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/add', [BlogController::class, 'create'])->name('postcreate')->middleware(['auth','isAdmin']);
    Route::get('/{id}', [BlogController::class, 'show'])->name('postshow');
    Route::post('/store', [BlogController::class, 'store'])->name('poststore')->middleware(['auth','isAdmin']);
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('postedit')->middleware(['auth','isAdmin']);
    Route::post('/{id}/update', [BlogController::class, 'update'])->name('postupdate')->middleware(['auth','isAdmin']);
    Route::post('/{id}/delete', [BlogController::class, 'delete'])->name('postdelete')->middleware(['auth','isAdmin']);
});

Route::get('/google/redirect', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.callback');


require __DIR__.'/auth.php';
