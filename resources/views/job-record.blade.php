<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Record</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>

<!-- Header -->
<div class="header2">
    <div class="logo">
        <h1>SEEKER</h1>
    </div>
    <!-- you can insert mobile menu here, to make it responsive -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="">Listings</a></li>
            <li><a href="">Companies</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
</div>

    <div class="beta-bg"></div>
        <div class="content-wrap">

        </div>
    </div>





<div class="job-details">
    <h1><?= $job->title; ?></h1>
    <p><?= $job->company; ?></p>
   <p> By <a href="/employers/<?= $job->employer->id ?>"> <?= $job->employer->name; ?></a> in <a href="/categories/<?= $job->category->slug; ?>"><?= $job->category->name ?></a></p>
    <p><img src="company.jpg" alt="company" width="20" height="16"><?= $job->company; ?></p>
    <p><img src="location.png" alt="location" width="16" height="16"> <?= $job->location; ?></p>
    <p><strong>$ </strong><?= $job->salary; ?></p>
    <p class="description"><?= $job->description; ?></p>
    <?= $job->body; ?>
    <br>
</div>
<br>
<a href="/">Go Back</a>

{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>
</body>
</html>
