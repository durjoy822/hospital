<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;

// Admin routes starts from here:
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[AdminController::class,'loginForm'])->name('admin.login');
    Route::post('/auth',[AdminAuthController::class,'authCheck'])->name('admin.auth');
    Route::middleware(admin::class)->group(function () {
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/register',[AdminController::class,'registerForm'])->name('admin.register');
        Route::post('/new',[AdminAuthController::class,'newAdmin'])->name('admin.new');
        Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin.logout');
        Route::get('/patient',[PatientController::class,'patientIndex'])->name('admin.patient');
        Route::get('/patient_add',[PatientController::class,'patientAdd'])->name('admin.patientAdd');
        Route::post('/patient_save',[PatientController::class,'patientSave'])->name('admin.patientSave');
        Route::get('/patient_edit/{id}',[PatientController::class,'patientEdit'])->name('admin.patientEdit');
        Route::post('/patient_update',[PatientController::class,'patientUpdate'])->name('admin.patientUpdate');
        Route::post('/patient_delete',[PatientController::class,'patientDelete'])->name('admin.patientDelete');
        Route::get('/patient/details/{id}',[PatientController::class,'singlePatient'])->name('patient.details');
        Route::resource('/doctor', DoctorController::class);
        Route::get('/status/{id}',[DoctorController::class,'status'])->name('doctor.status');
        Route::get('/room',[RoomController::class,'roomIndex'])->name('admin.room');
        Route::get('/room/add',[RoomController::class,'roomAdd'])->name('admin.roomAdd');
        Route::post('/room_save',[RoomController::class,'roomSave'])->name('admin.roomSave');
        Route::get('/room/edit/{id}',[RoomController::class,'roomEdit'])->name('admin.roomEdit');
        Route::post('/room/update',[RoomController::class,'roomUpdate'])->name('admin.roomUpdate');
        Route::post('/room/delete',[RoomController::class,'roomDelete'])->name('admin.roomDelete');
        Route::resource('/department', DepartmentController::class);
        Route::get('/status/{id}',[DoctorController::class,'status'])->name('doctor.status');
        Route::resource('/appointment', AppointmentController::class);
        Route::get('/appointment/my-doctor/{id}',[AppointmentController::class,'findDoctor']);
        Route::get('/payment',[PaymentController::class,'index'])->name('payment.index');
        Route::get('/payment/create',[PaymentController::class,'create'])->name('payment.create');
        Route::post('/payment/store',[PaymentController::class,'store'])->name('payment.store');
        Route::get('/invoice/{id}',[PaymentController::class,'invoice'])->name('admin.invoice');
        Route::get('/payment/my-doctor/{id}',[AppointmentController::class,'findDoctor']);
        Route::get('/send/app/mail/{id}',[MailController::class,'sendMail'])->name('send.appo.mail');
        Route::get('/blog',[BlogController::class,'index'])->name('admin.blog');
        Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
        Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
        Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
        Route::get('/blog/destroy/{id}',[BlogController::class,'distroy'])->name('blog.destroy');
        Route::get('/medicine',[MedicineController::class,'index'])->name('medicine.index');
        Route::get('/medicine/create',[MedicineController::class,'create'])->name('medicine.create');
        Route::post('/medicine/store',[MedicineController::class,'store'])->name('medicine.store');
        Route::get('/medicine/edit/{id}',[MedicineController::class,'edit'])->name('medicine.edit');
        Route::post('/medicine/update/{id}',[MedicineController::class,'update'])->name('medicine.update');
        Route::get('/medicine/delete/{id}',[MedicineController::class,'delete'])->name('medicine.delete');
        Route::get('/orders',[OrderController::class,'orders'])->name('orders');
        Route::post('/orders/update/{id}',[OrderController::class,'update'])->name('order.update');
        Route::get('/reviews',[OrderController::class,'index'])->name('review.index');
        Route::post('/review/update/{id}',[OrderController::class,'reviewUpdate'])->name('review.update');
    });
});
