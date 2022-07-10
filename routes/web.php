<?php

use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
Route::get('/', function () {
    $jobs = Job::all();

    return view('jobs', [
        'jobs' => $jobs
    ]); //returns the view of the jobs file, which redirects us to jobs.blade.php
});

Route::get('job-record/{job:slug}', function (Job $job) { // {job:slug} we put slug to prevent it from showing in the URL job-record/1
    return view(
        'job-record', [
        "job" => $job
    ]);
});

Route::get('categories/{category:slug}', function (Category $category){
    return view(
        'jobs', [
        "jobs" => $category->jobs
    ]);
});
