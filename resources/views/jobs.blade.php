<x-layout>

{{--<!-- Header -->--}}
{{--<div class="header">--}}
{{--    <div class="logo">--}}
{{--        <h1>internToYou</h1>--}}
{{--    </div>--}}
{{--    <!-- you can insert mobile menu here, to make it responsive -->--}}
{{--    <nav>--}}
{{--        <ul>--}}
{{--            <li><a href="/">Home</a></li>--}}
{{--            <li><a href="">About Us</a></li>--}}
{{--            <li><a href="">Listings</a></li>--}}
{{--            <li><a href="">Companies</a></li>--}}
{{--            <li><a href="">Contact Us</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</div>--}}


{{--<!-- Hero starts here -->--}}
{{--<div class="hero">--}}
{{--    <div class="alpha-bg"></div>--}}
{{--    <div class="center">--}}
{{--        <div class="content-wrap">--}}
{{--            <h2 class="catch-phrase">Find the <span>right internship</span> for you.</h2>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- random content -->--}}
{{--<section>--}}
{{--    <header>--}}
{{--        <h1>Why Intern To You?</h1>--}}
{{--    </header>--}}
{{--    <article>--}}
{{--        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the--}}
{{--            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and--}}
{{--            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into--}}
{{--            electronic typesetting, remaining essentially unchanged.<br><br>Lorem Ipsum is simply dummy text of the--}}
{{--            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the--}}
{{--            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has--}}
{{--            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially--}}
{{--            unchanged.<br><br></p>--}}
{{--    </article>--}}
{{--</section>--}}

{{--Main content for the internship listings exists here--}}
{{--<div class="title">--}}
{{--    <h1 class="title">Internships</h1>--}}
{{--    <p>Explore positions top companies are hiring for!</p>--}}
{{--</div>--}}
    @include('_jobs-header')

    <section>
        <div class="content">
            {{--    column cards for job listings--}}
            <div class="row">
                @foreach($jobs as $job)
                    <div class="column">
                        <div class="card">
                            <h2> {{$job->title}}</h2>
                            <p>Time:
                                <time> {{$job->created_at->diffForHumans()}}</time>
                            </p>
                            <p>By <a href="/employers/{{$job->employer->username}}">{{$job->employer->name}}</a></p>
                            <p><img src="category.png" alt="category" width="16" height="16"><a
                                    href="/categories/{{$job->category->slug}}">{{$job->category->name}}</a></p>
                            <p><img src="company.jpg" alt="company" width="20" height="16">{{$job->company}}</p>
                            <p><img src="location.png" alt="location" width="16" height="16">{{$job->location}}</p>
                            <p><strong>$ </strong>{{$job->salary}}</p>
                            <p class="description">{{$job->description}}</p>
                            <a href="/job-record/{{$job->slug}}" class="view-button"><span
                                    class="span-button">View</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
