<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorHomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ServiceController;

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
//Route::get('/', function () {return view('home.index');})->name('home');
Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/doctor',[DoctorHomeController::class,'doctor'])->name('doctor');
Route::get('/doctor-details/{id}',[DoctorHomeController::class,'doctorDetails'])->name('doctor.details');
Route::get('/departments',[HomeController::class,'departments'])->name('departments');
Route::get('/single-department/{slug}',[HomeController::class,'singleDepartment'])->name('single.department');
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
Route::get('/shop',[MedicineController::class,'home'])->name('product');
Route::get('/cart/{id}',[CartController::class,'cart'])->name('cart');


Route::post('/register',[UserAuthController::class,'store'])->name('user.register');
Route::post('/login/check',[UserAuthController::class,'login'])->name('user.login');
Route::get('/logout',[UserAuthController::class,'logout'])->name('user.logout');

Route::get('/carousel',[CarouselController::class,'carousel'])->name('carousel.index');
Route::get('/carousel_Add',[CarouselController::class,'carouselAdd'])->name('carousel.add');
Route::post('/carousel_store',[CarouselController::class,'carouselStore'])->name('carousel.store');
Route::get('/carousel_edit/{id}',[CarouselController::class,'carouselEdit'])->name('carousel.edit');
Route::post('/carousel_update',[CarouselController::class,'carouselUpdate'])->name('carousel.update');
Route::post('/carousel_delete',[CarouselController::class,'carouselDelete'])->name('carousel.delete');

Route::get('/service',[ServiceController::class,'service'])->name('service.index');
Route::get('/service_add',[ServiceController::class,'serviceAdd'])->name('service.add');
Route::post('/service_store',[ServiceController::class,'serviceStore'])->name('service.store');
Route::get('/service_edit/{id}',[ServiceController::class,'serviceEdit'])->name('service.edit');
Route::post('/service_update',[ServiceController::class,'serviceUpdate'])->name('service.update');
Route::post('/service_delete',[ServiceController::class,'serviceDelete'])->name('service.delete');
Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/doctor', [DoctorHomeController::class, 'doctor'])->name('doctor');
Route::get('/doctor-details/{id}', [DoctorHomeController::class, 'doctorDetails'])->name('doctor.details');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');
Route::get('/department/{slug}', [HomeController::class, 'singleDepartment'])->name('single.department');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
route::post('/contact-us',[HomeController::class,'contactUs'])->name('contact.us');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/price-table', [HomeController::class, 'priceTable'])->name('price.table');
Route::get('/coming-soon', [HomeController::class, 'comingSoon'])->name('coming.soon');
Route::get('/error', [HomeController::class, 'error'])->name('error');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/medicine/show/{slug}', [MedicineController::class, 'show'])->name('medicine.show');
Route::get('/shop', [MedicineController::class, 'home'])->name('product');
Route::post('/register', [UserAuthController::class, 'store'])->name('user.register');
Route::post('/login/check', [UserAuthController::class, 'login'])->name('user.login');
Route::get('/password/forgot',[UserAuthController::class,'showForgotForm'])->name('forgot.password.form');
Route::post('/password/forgot',[UserAuthController::class,'sendResetLink'])->name('forgot.password.link');
Route::get('/password/reset/{token}',[UserAuthController::class,'showResetForm'])->name('user.reset.password.form');
Route::post('/password/reset',[UserAuthController::class,'resetPassword'])->name('user.reset.password');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/bag/{id}', [CartController::class, 'bag'])->name('bag');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/post/cart/', [CartController::class, 'postCart'])->name('post.cart');
    Route::get('/cart/delete/{id}', [CartController::class, 'cartDelete'])->name('cart.delete');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'saveShipping'])->name('place.order');
});
