<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorHomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserAuthController;

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


// Frontend route starts from here :
Route::get('/', function () {return view('home.index');})->name('home');
Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/doctor',[DoctorHomeController::class,'doctor'])->name('doctor');
Route::get('/doctor-details/{id}',[DoctorHomeController::class,'doctorDetails'])->name('doctor.details');
Route::get('/departments',[HomeController::class,'departments'])->name('departments');
Route::get('/single-department',[HomeController::class,'singleDepartment'])->name('single.department');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about.us');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/price-table',[HomeController::class,'priceTable'])->name('price.table');
Route::get('/coming-soon',[HomeController::class,'comingSoon'])->name('coming.soon');
Route::get('/error',[HomeController::class,'error'])->name('error');
Route::get('/terms',[HomeController::class,'terms'])->name('terms');
Route::get('/blog/show/{id}',[BlogController::class,'show'])->name('blog.show');
Route::get('/medicine/show/{slug}',[MedicineController::class,'show'])->name('medicine.show');
Route::get('/medicine',[MedicineController::class,'home'])->name('product');
Route::get('/cart/{id}',[CartController::class,'cart'])->name('cart');


Route::post('/register',[UserAuthController::class,'store'])->name('user.register');
Route::post('/login/check',[UserAuthController::class,'login'])->name('user.login');
Route::get('/logout',[UserAuthController::class,'logout'])->name('user.logout');
