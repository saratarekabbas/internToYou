<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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

//Below are the routes of the application

//this is the home path
Route::get('/', [JobController::class, 'index']);

Route::get('job-record/{job:slug}', [JobController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view(
        'jobs', [
        "jobs" => $category->jobs,
        'categories' => Category::all()
    ]);
});

//returns all job listings written by the employer
Route::get('employers/{employer:username}', function (User $employer) {
    return view('jobs', [
        'jobs' => $employer->jobs
    ]);
});

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');

Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('create', [JobController::class, 'create'])->middleware('auth');

Route::post('create', [JobController::class, 'store'])->middleware('auth');
