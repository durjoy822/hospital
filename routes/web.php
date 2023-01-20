<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;


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
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::get('/doctor-details',[HomeController::class,'doctorDetails'])->name('doctor.details');
Route::get('/departments',[HomeController::class,'departments'])->name('departments');
Route::get('/single-department',[HomeController::class,'singleDepartment'])->name('single.department');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/medicine',[HomeController::class,'product'])->name('product');
Route::get('/medicine/single',[HomeController::class,'singleProduct'])->name('single.product');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
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


// Admin routes starts from here:
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[AdminController::class,'loginForm'])->name('admin.login');
    Route::post('/auth',[AdminAuthController::class,'authCheck'])->name('admin.auth');
    Route::middleware(admin::class)->group(function () {
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/register',[AdminController::class,'registerForm'])->name('admin.register');
        Route::post('/new',[AdminAuthController::class,'newAdmin'])->name('admin.new');
        Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin.logout');

// patient 
        Route::get('/patient',[PatientController::class,'patientIndex'])->name('admin.patient');
        Route::get('/patient_add',[PatientController::class,'patientAdd'])->name('admin.patientAdd');
        Route::post('/patient_save',[PatientController::class,'patientSave'])->name('admin.patientSave');
        Route::get('/patient_edit/{id}',[PatientController::class,'patientEdit'])->name('admin.patientEdit');
        Route::post('/patient_update',[PatientController::class,'patientUpdate'])->name('admin.patientUpdate');
        Route::post('/patient_delete',[PatientController::class,'patientDelete'])->name('admin.patientDelete');
        Route::get('/patient/details/{id}',[PatientController::class,'singlePatient'])->name('patient.details');


    //    doctor
        Route::resource('/doctor', DoctorController::class);
        Route::get('/status/{id}',[DoctorController::class,'status'])->name('doctor.status');

    //room
        Route::get('/room',[RoomController::class,'roomIndex'])->name('admin.room');
        Route::get('/room/add',[RoomController::class,'roomAdd'])->name('admin.roomAdd');
        Route::post('/room_save',[RoomController::class,'roomSave'])->name('admin.roomSave');
        Route::get('/room/edit/{id}',[RoomController::class,'roomEdit'])->name('admin.roomEdit');
        Route::post('/room/update',[RoomController::class,'roomUpdate'])->name('admin.roomUpdate');
        Route::post('/room/delete',[RoomController::class,'roomDelete'])->name('admin.roomDelete');

//    department
        Route::resource('/department', DepartmentController::class);
//   doctor
        Route::resource('/doctor', DoctorController::class);
        Route::get('/status/{id}',[DoctorController::class,'status'])->name('doctor.status');
        // appointment 
        Route::resource('/appointment', AppointmentController::class);
        Route::get('/appointment/my-doctor/{id}',[AppointmentController::class,'findDoctor']);
    });
});
