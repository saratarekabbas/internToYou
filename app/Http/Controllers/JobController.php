<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
//        Getting all latest jobs, as well as filtering for the job search are done in the eloquent model Job.php
//        Here, we are only interested in returning the view

        return view('jobs', [
            'jobs' => Job::latest()->filter(request(['search']))->get(), //the filter is coming from scopeFilter from the eloquent model
            'categories' => Category::all()
        ]); //returns the view of the jobs file, which redirects us to jobs.blade.php
    }

    public function show(Job $job)
    {
        return view(
            'job-record', [
            "job" => $job
        ]);
    }
}
