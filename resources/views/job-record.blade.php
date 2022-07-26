<x-layout>

    <div class="job-view-header">
        {{--        <img class="job-header-image" src="/job-header-image.jpeg">--}}
        <img class="job-header-image">
        <div class="job-card">
            <h1 class="job-title">{{ $job->title }}</h1>
            <div class="job-details">
                <p><img src="/person.png" width="13" height="16"> <b class="col-yellow">Posted by </b><a
                        class="job-link-color"
                        href="/employers/{{$job->employer->username}}"> {{$job->employer->name}} </a></p>
                <p><img src="/category-yellow.png" alt="category" width="16" height="16"> <b class="col-yellow">In</b>
                    <a class="job-link-color" href="/categories/{{$job->category->slug}}">{{$job->category->name}}</a>
                </p>
            </div>
        </div>
    </div>

    <div class="jobrow">
        <h1>Job Details</h1>
        <div class="jobcolumn side">
            <h2>Description</h2>
            <p>{{$job->description}}</p>
            <hr>
            <h2>About</h2>
            <p>{{$job->body}}</p>
            <hr>
            <h2>Requirements</h2>
            <p>{{$job->requirements}}</p>
            <hr>
            <h2>Benefits</h2>
            <p>{{$job->benefits}}</p>
            <br>
            <br> <a href="/" class="back-button"><span>Back</span></a>
        </div>

        <div class="jobcolumn right">
            <div class="job-details-card">
                <div class="job-details-container">
                    <p><img src="/company.jpg" alt="company" width="20" height="16"> {{$job->company}}</p>
                    <p><img src="/location.png" alt="location" width="16" height="16"> {{$job->location}}</p>
                    <p><strong>$ </strong> {{$job->salary}}</p>
                    <p><img src="/clock.png" alt="location" width="15" height="15">
                        <time> {{$job->created_at->diffForHumans()}}</time>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>
