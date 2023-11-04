<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FiturLandingController;
use App\Http\Controllers\FiturPosController;
use App\Http\Controllers\FiturSpController;
use App\Http\Controllers\PluginPosController;
use App\Http\Controllers\PluginSpController;
use App\Http\Controllers\PricingPosController;
use App\Http\Controllers\PricingSpController;
use App\Http\Controllers\FaqLandingController;
use App\Http\Controllers\FaqPosController;
use App\Http\Controllers\FaqSpController;

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
    return view('auth.login');
});

// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/sp/preview/', [FaqSpController::class, 'preview'])->name('sp.preview');
Route::get('/pos/preview/', [FaqPosController::class, 'preview'])->name('pos.preview');
Route::get('/preview/{id}', [FaqLandingController::class, 'preview'])->name('faq.preview');
Route::get('/previewall', [FaqLandingController::class, 'previewall'])->name('previewall');
Route::get('/sp/preview/{id}', [FaqSpController::class, 'preview'])->name('sp.preview');
Route::get('/sp/previewall', [FaqSpController::class, 'previewall'])->name('sp.previewall');
Route::get('/pos/preview/{id}', [FaqPosController::class, 'preview'])->name('pos.preview');
Route::get('/pos/previewall', [FaqPosController::class, 'previewall'])->name('pos.previewall');



Route::get('/home', [AuthController::class, 'setelahLogin'])->name('home');

//Landing Page - Fitur
Route::get('/fitur', [FiturLandingController::class, 'index'])->name('fitur');
Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
Route::delete('/post/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/faq/preview/{id}', [FiturLandingController::class, 'preview'])->name('faq.preview');
// Route::get('/previewall', [FiturLandingController::class, 'preview'])->name('previewall');

//Landing Page - Pricing
Route::get('/pricing', [PricingLandingController::class, 'index'])->name('pricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//Landing Page - Faq
Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
Route::post('/store', [FaqLandingController::class, 'store'])->name('store');
Route::delete('/posts/{id}', [FaqLandingController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [FaqLandingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FaqLandingController::class, 'update'])->name('update');
// Route::get('/preview', [FaqLandingController::class, 'preview'])->name('landing.preview');
// Route::get('/previewall', [FaqLandingController::class, 'preview'])->name('previewall');


//DIKO POS - Fitur
Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('posFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Pricing
Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('posPricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Plugin
Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Faq
Route::get('/pos/faq/list', [FaqPosController::class, 'index'])->name('pos.faq');
Route::post('/pos/store', [FaqPosController::class, 'store'])->name('pos.store');
Route::delete('/pos/posts/{id}', [FaqPosController::class, 'destroy'])->name('pos.destroy');
Route::get('/pos/edit/{id}', [FaqPosController::class, 'edit'])->name('pos.edit');
Route::put('/pos/update/{id}', [FaqPosController::class, 'update'])->name('pos.update');
// Route::get('/pos/preview/', [FaqPosController::class, 'preview'])->name('pos.preview');



//DIKO SP - Fitur
Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('spFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Plugin
Route::get('/sp/plugin/list', [PluginSpController::class, 'index'])->name('spPlugin');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Pricing
Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('spPricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Faq
Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('sp.faq');
Route::post('/sp/store', [FaqSpController::class, 'store'])->name('sp.store');
Route::delete('/sp/posts/{id}', [FaqSpController::class, 'destroy'])->name('sp.destroy');
Route::get('/sp/edit/{id}', [FaqSpController::class, 'edit'])->name('sp.edit');
Route::put('/sp/update/{id}', [FaqSpController::class, 'update'])->name('sp.update');
// Route::get('/sp/preview/', [FaqSpController::class, 'preview'])->name('sp.preview');


