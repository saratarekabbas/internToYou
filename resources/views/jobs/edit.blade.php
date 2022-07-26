<x-layout>
    <div class="title">
        <br><br><br><br><br>
    </div>
    <section>
        <h1>Edit Job: {{ $job->title }} </h1>

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')

            <label for=" title">Title</label>
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

            <button type="submit">Update</button>

            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </section>
</x-layout>
