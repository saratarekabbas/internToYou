<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern To You</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<!-- Header -->
<div class="header">
    <div class="logo">
        <h1>internToYou</h1>
    </div>
    <!-- you can insert mobile menu here, to make it responsive -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/listings">Listings</a></li>
            @auth()
                {{--                <strong>Success!</strong> Welcome, {{auth()->user()->name}}--}}
                <li><a href="/create">Create Listing</a></li>
                <li><a href="/manage/{{auth()->user()->username}}">Manage</a></li>

                <li><a href="">
                        <form method="POST" action="logout" id="logout-form">
                            @csrf
                            <button class="logout-button" type="submit">Logout</button>
                        </form>
                    </a></li>
                <li class="text-user">[{{auth()->user()->name}}]</li>
            @else
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>
</div>


<!-- Hero starts here -->
<div class="hero">
    <div class="alpha-bg"></div>
    <div class="center">
        <div class="content-wrap">
            <h2 class="catch-phrase">Find the <span>right internship</span> for you.</h2>
        </div>
    </div>
</div>


<!-- random content -->
<section>
    <header>
        <h1>Why Intern To You?</h1>
    </header>
    <article>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged.<br><br>Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
            unchanged.<br><br></p>
    </article>
</section>


<div class="title">
    <br><br><br>
    <h1 class="title">Internships</h1>
    <p>Explore positions top companies are hiring for!</p>
</div>

<section>
    <header>
        <h1>Job Listings</h1>
    </header>
    <article>
        <p>Add Listings from your very own company!<br><br></p>
    </article>
</section>
{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>

</body>
</html>
