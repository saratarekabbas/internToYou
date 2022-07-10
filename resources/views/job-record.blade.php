@extends('layout')

@section('content')

<div class="job-details">
    <h1>Job Title: {{ $job->title }}</h1>
    <p>Company: {{$job->company}}</p>
   <p> By <a href="/employers/{{$job->employer->username}}"> {{$job->employer->name}}</a> in <a href="/categories/{{$job->category->slug}}">{{$job->category->name}}</a></p>
    <p>Company: {{$job->company}}</p>
    <p>Location: {{$job->location}}</p>
    <p>Salary: <strong>$ </strong> {{$job->salary}}</p>
    <p>Description: {{$job->description}}</p>
    <p>Body: {{$job->body}}</p>
    <br>
</div>
<br>
<a href="/">Go Back</a>

@endsection
