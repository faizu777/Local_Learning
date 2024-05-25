<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\course;
use App\Http\Controllers\admin;
use App\Http\Controllers\LoginuserController;
use App\Http\Middleware\AuthUser;
use App\Http\Controllers\Register;
use App\Http\Controllers\Teacher_Register_Datas;
use App\Http\Controllers\Student_Register_Controller;
use App\Http\Controllers\Mailsending;
use App\Http\Controllers\Otp_verify;
Route::get('/privacy',[course::class,'privacy'])->name('privacy');
Route::get('/', [course::class, 'index'])->name('index');
Route::get('/courses',[admin::class,'courses'])->name('course');
Route::get('/about',[course::class,'about']);
Route::get('/contact',[course::class,'contact'])->name('contact');
Route::get('/RegisterTeacher',[course::class,'Teacher_Register_Page'])->name('RegisterTeacher');
Route::get('/RegisterStudent',[course::class,'Student_Register_Page'])->name('RegisterStudent');
Route::post('/Addteacher',[admin::class,'Add_Teacher']);
Route::post('/AddCourse',[admin::class,'Add_Course']);
Route::get('/admin',[admin::class,'Admin'])->name('admin')->middleware('auth');

Route::get('/Deleteteacher/{id}',[admin::class,'Delete_Teacher'])->name('deleteteacher');
Route::get('/Deletecourse/{id}',[admin::class,'Delete_Course'])->name('deletecourse');
Route::get('/Login',[LoginuserController::class,'loginpage'])->name('loginpage');
Route::get('/Register',[LoginuserController::class,'RegisterPage'])->name('RegisterPage');
Route::post('/UserLogin',[LoginuserController::class,'login'])->name('login');
Route::post('/UserRegister',[LoginuserController::class,'Register'])->name('Register');
Route::get('/UserLogout',[LoginuserController::class,'logout'])->name('logout');
Route::post('/RegisterTeacherData',[Teacher_Register_Datas::class,'RegisterTeacherData'])->name('RegisterTeacherData');
Route::any('Register_Student_Data',[Student_Register_Controller::class,'Student_Register_Detail'])->name('Student_Register_Detail');
Route::post('/SendMail',[Mailsending::class,'sendMail'])->name('sendMail');
Route::post('/verifyOTP',[Teacher_Register_Datas::class,'TeacherData_Save'])->name('verifyOTP');
