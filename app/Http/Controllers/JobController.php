<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Validation\Rule;

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

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('jobs', 'slug')],
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'benefits' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')], //id must exist in table categories
        ]);

        $attributes['user_id'] = auth()->id();

        Job::create($attributes);

        return redirect('/');
    }
}
