<div class="title">
    <br><br><br><br><br>
</div>

{{--dropdown--}}
<div class="content-lisitng">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Category</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}">{{$category->slug}}</a>
            @endforeach
        </div>
    </div>

{{--    Search--}}
    <div class="search">
        <form method="GET" action="#" style="margin:auto;max-width:300px">
            <input id="myInput" type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="searchbtn" type="submit">Search</button>
        </form>
    </div>
</div>
