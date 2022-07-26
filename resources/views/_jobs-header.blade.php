<div class="title">
    <h1 class="title">Internships</h1>
    <p>Explore positions top companies are hiring for!</p>
</div>

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Category</button>
    <div id="myDropdown" class="dropdown-content">
        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
        @foreach($categories as $category)
            <a href="/categories/{{$category->slug}}">{{$category->slug}}</a>
        @endforeach
    </div>
</div>

{{--Search--}}
<form class="example" method="GET" action="#" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>
