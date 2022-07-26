<x-layout>
    <div class="title">
        <br><br><br><br><br>
    </div>
    <section>
        <h1>Create Job!</h1>

        <form method="POST" action="/create">
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
            <p>{{ $message }}</p>
            @enderror

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
            @error('slug')
            <p>{{ $message }}</p>
            @enderror

            <label for="company">Company</label>
            <input type="text" name="company" id="company" value="{{ old('company') }}" required>
            @error('company')
            <p>{{ $message }}</p>
            @enderror

            <label for="location">Location</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}" required>
            @error('location')
            <p>{{ $message }}</p>
            @enderror

            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary" value="{{ old('salary') }}" required>
            @error('salary')
            <p>{{ $message }}</p>
            @enderror

            <label for="description">Description</label>
            <textarea name="description" id="description" required> {{ old('description') }} </textarea>
            @error('description')
            <p>{{ $message }}</p>
            @enderror

            <label for="requirements">Requirements</label>
            <textarea name="requirements" id="requirements" required> {{ old('requirements') }} </textarea>
            @error('requirements')
            <p>{{ $message }}</p>
            @enderror

            <label for="benefits">Benefits</label>
            <textarea name="benefits" id="benefits" required> {{ old('benefits') }} </textarea>
            @error('benefits')
            <p>{{ $message }}</p>
            @enderror

            <label for="body">Body</label>
            <textarea name="body" id="body" required> {{ old('body') }} </textarea>
            @error('body')
            <p>{{ $message }}</p>
            @enderror

            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @php
                    $categories = \App\Models\Category::all();
                @endphp

                @foreach(@$categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <p>{{ $message }}</p>
            @enderror

            <button type="submit">Publish</button>

            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </section>


    <div class="form-container">
        <form action="/action_page.php">
            <div class="form-container-row">
                <div class="form-container-col-25">
                    <label class="form-container-label" for="fname">First Name</label>
                </div>
                <div class="form-container-col-75">
                    <input class="form-container-input" type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="form-container-row">
                <div class="form-container-col-25">
                    <label class="form-container-label" for="lname">Last Name</label>
                </div>
                <div class="form-container-col-75">
                    <input class="form-container-input" type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="form-container-row">
                <div class="form-container-col-25">
                    <label class="form-container-label" for="country">Country</label>
                </div>
                <div class="form-container-col-75">
                    <select class="form-container-select">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>
            <div class="form-container-row">
                <div class="form-container-col-25">
                    <label class="form-container-label" for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea class="form-container-text" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <div class="form-container-row">
                <input type="submit" class="submit-form-btn " value="Submit">
            </div>
        </form>
    </div>

</x-layout>
