<?php

use App\Http\Controllers\Authorizeds\SearchAuthorizedController;
use App\Http\Controllers\Authorizeds\UpdateAuthorizedController;
use App\Http\Controllers\Courses\SearchCourseController;
use App\Http\Controllers\Retired\UpdateRetiredController;
use App\Http\Controllers\Students\SearchStudentController;
use App\Http\Controllers\Teachers\SearchTeacherController;
use App\Http\Controllers\Tutors\SearchTutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::patch('/ausent/{student_id}', [UpdateRetiredController::class,"markAsAbsent"]);
Route::patch('/retireds/{student_id}', [UpdateRetiredController::class,"markAsRetired"]);
Route::post('/authorizeds', UpdateAuthorizedController::class);
Route::get('/authorizeds', SearchAuthorizedController::class);
Route::get('/courses', SearchCourseController::class);
Route::get('/students', SearchStudentController::class);
Route::get('/teachers', SearchTeacherController::class);
Route::get('/tutors', SearchTutorController::class);

Route::get('/', function () {
    return "what's up my friend";
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
