<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Seeking System</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

<!-- Header -->
<div class="header">
    <div class="logo">
        <h1>SEEKER</h1>
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


<!-- Hero starts here -->
<div class="hero">
    <div class="alpha-bg"></div>
    <div class="center">
        <div class="content-wrap">
            <h2 class="catch-phrase">Find the <span>right job</span> for you.</h2>
        </div>
    </div>
</div>


<!-- random content -->
<section>
    <header>
        <h1>Why Seeker?</h1>
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

{{--MINEEEEEEEEEE--}}
<div class="title">
    <h1 class="title">Jobs</h1>
    <p>Explore positions top companies are hiring for!</p>
</div>

<section>
    <div class="content">


        {{--    column cards for job listings--}}

        <div class="row">
            <?php foreach ($jobs as $job) : ?>
            <div class="column">
                <div class="card">
                    <h2><?= $job->title; ?></h2>
                    <p><img src="company.jpg" alt="company" width="20" height="16"> <?= $job->company; ?></p>
                    <p><img src="location.png" alt="location" width="16" height="16"> <?= $job->location; ?></p>
                    <p><strong>$ </strong><?= $job->salary; ?></p>
                    <p class="description"><?= $job->description; ?></p>
                    <a href="/job-record/<?= $job->slug; ?>" class="view-button"><span
                            class="span-button">View</span></a>
                </div>

            </div>
            <?php endforeach;?>
        </div>

    </div>
</section>

{{--footer--}}
<div class="footer">Created by Sara Tarek. © 2022</div>

</body>
</html>
