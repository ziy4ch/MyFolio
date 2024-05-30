<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
Route::get('/', function () {
    return view('mainpage');

});
Route::get('/add-student', function() {

    return view('add-student');
    });

Route::get('/students', [StudentsController::class, 'index'] );
Route::resource ('addstudent', StudentsController::class);

