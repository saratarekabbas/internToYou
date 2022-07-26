<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::latest();

        if (request('search')){
            $jobs->where('title', 'like', '%'.request('search').'%')->orWhere('body', 'like', '%'.request('search').'%')->orWhere('company', 'like', '%'.request('search').'%');
        }

        return view('jobs', [
            //latest means display the latest at the top
//        'jobs' => Job::latest()->with('category', 'employer')->get(),
            'jobs' => $jobs->get(),
            'categories' => Category::all()
        ]); //returns the view of the jobs file, which redirects us to jobs.blade.php
    }
}
