<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern To You</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
<!-- Header -->
<div class="header">
    <div class="logo">
        <h1>internToYou</h1>
    </div>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="">Listings</a></li>
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


{{$slot}}

{{--@auth()--}}
{{--    <br>--}}
{{--    <div class="alert success">--}}
{{--        <span class="closebtn">&times;</span>--}}
{{--        <strong>Success!</strong> Welcome, {{auth()->user()->name}}--}}
{{--    </div>--}}
{{--@endauth--}}


{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>

<x-flash/>

<script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function () {
                div.style.display = "none";
            }, 600);
        }
    }
</script>
</body>
</html>
