<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
use App\Http\Controllers\admin;
use App\Http\Controllers\LoginuserController;
use App\Http\Middleware\AuthUser;
use App\Http\Controllers\Register;
use App\Http\Controllers\Teacher_Register_Datas;
use App\Http\Controllers\Student_Register_Controller;
use App\Http\Controllers\Mailsending;
use App\Http\Controllers\Otp_verify;
use App\Http\Controllers\Register_Teacher_Con;
use App\Http\Controllers\User_login;
Route::get('/privacy',[page::class,'privacy'])->name('privacy');
Route::get('/', [page::class, 'index'])->name('index');
Route::get('/pages',[admin::class,'pages'])->name('course');
Route::get('/about',[page::class,'about']);
Route::get('/contact',[page::class,'contact'])->name('contact');
Route::get('/RegisterTeacher',[page::class,'Teacher_Register_Page'])->name('RegisterTeacher');
Route::get('/RegisterStudent',[page::class,'Student_Register_Page'])->name('RegisterStudent');
Route::get('/login-user',[page::class,'login_user'])->name('login-user-page');
Route::post('/Addteacher',[admin::class,'Add_Teacher']);
Route::get('/profile',[page::class,'profile'])->name('profile');

Route::post('/Addpage',[admin::class,'Add_page']);
Route::get('/admin',[admin::class,'Admin'])->name('admin')->middleware('auth');
Route::get('/changestatus/{id}',[admin::class,'Change_Status'])->name('changestatus');
Route::get('/teacherdetail/{id}',[admin::class,'teacherdetail'])->name('teacherdetail');


Route::get('/Deleteteacher/{id}',[admin::class,'Delete_Teacher'])->name('deleteteacher');
Route::get('/Deletepage/{id}',[admin::class,'Delete_page'])->name('deletepage');
Route::get('/Login',[LoginuserController::class,'loginpage'])->name('loginpage');
Route::get('/Register',[LoginuserController::class,'RegisterPage'])->name('RegisterPage');
Route::post('/UserLogin',[LoginuserController::class,'login'])->name('login');
Route::post('/UserRegister',[LoginuserController::class,'Register'])->name('Register');
Route::get('/UserLogout',[LoginuserController::class,'logout'])->name('logout');
Route::post('/RegisterTeacherData',[Register_Teacher_Con::class,'RegisterTeacherData'])->name('RegisterTeacherData');
Route::any('Register_Student_Data',[Student_Register_Controller::class,'Student_Register_Detail'])->name('Student_Register_Detail');
Route::post('/SendMail',[Mailsending::class,'sendMail'])->name('sendMail');
// Route::post('/verifyOTP',[Teacher_Register_Datas::class,'TeacherData_Save'])->name('verifyOTP');
Route::post('/update_teacher',[Register_Teacher_Con::class,'update_teacher'])->name('update_teacher');
Route::post('/update-profile',[Register_Teacher_Con::class,'update_profile'])->name('update-profile');
Route::get('/teacher/{id}',[Register_Teacher_Con::class,'Teacher_Detail'])->name('Teacher_Detail');
Route::post('login-user',[User_login::class,'login_user'])->name('login-user');

