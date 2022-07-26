<?php

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

Route::get('job-record/{job:slug}', function (Job $job) { // {job:slug} we put slug to prevent it from showing in the URL job-record/1
    return view(
        'job-record', [
        "job" => $job
    ]);
});

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
