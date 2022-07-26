<div class="title">
    <br><br><br>
    <h1 class="title">Internships</h1>
    <p>Explore positions top companies are hiring for!</p>
</div>

@auth()
    <br>
    <div class="alert success">
        <span class="closebtn">&times;</span>
        <strong>Success!</strong> Welcome, {{auth()->user()->name}}
    </div>
@endauth

{{--dropdown--}}
<div class="filtering-area">
    <div class="dropdown" class="filtering-area-col">
        <button onclick="myFunction()" class="dropbtn">Category</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}">{{$category->slug}}</a>
            @endforeach
        </div>
    </div>

    {{--Search--}}
    <form class="filtering-area-col search" method="GET" action="#" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

</div>
