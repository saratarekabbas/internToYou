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
                    <form method="POST" action="logout" id="logout-form">
                @csrf
                    <button class="logout-button" type="submit">Logout</button>
                </form>
                <?php echo '<script>alert("Welcome," {{auth()->user()->name}})</script>'; ?>
            @else
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>
</div>


{{$slot}}

{{--@auth()--}}
{{--    Welcome, {{auth()->user()->name}}--}}
{{--    <form method="POST" action="logout">--}}
{{--        @csrf--}}
{{--        <button type="submit">Logout</button>--}}
{{--    </form>--}}

{{--@else--}}
{{--    <a href="/register">Register</a>--}}
{{--    <a href="/login">Login</a>--}}
{{--@endauth--}}

{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>

<x-flash/>

</body>
</html>
