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
    <!-- you can insert mobile menu here, to make it responsive -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Listings</a></li>
            <li><a href="">Companies</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
</div>

{{-- looks for @section('content')--}}
@yield('content')

{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>

</body>
</html>
