<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/profile', [ProfilController::class, 'profil']);

Route::get('/kontak', [ContactController::class, 'contact',]);

Route::get('/home', [HomeController::class,'index']);

Route::get('/student', [StudentController::class, 'index',]);

Route::get('/wali', [GuardianController::class, 'index',]);

Route::get('/classroom', [ClassroomController::class, 'index',]);
Route::get('/teacher', [TeacherController::class, 'index',]);
Route::get('/subject', [SubjectController::class, 'index',]);

