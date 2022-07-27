<x-layout>
    <div class="title">
        <br><br><br><br><br>
    </div>
    <section>


        <h1>Edit Internship Listing: {{ $job->title }}</h1>
        <br>

        @if ($errors->any())
            @foreach($errors->all() as $error)

                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Error:</strong> {{ $error  }}
                </div>
                <br>
            @endforeach
        @endif

        <div class="form-container">
            <form method="POST" action="/jobs/{{ $job->id }}">
                @csrf
                @method('PATCH')
                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="Title">Internship Listing Title</label>
                    </div>
                    <div class="form-container-col-75">
                        <input placeholder="Internship Listing Title.." class="form-container-input" type="text"
                               name="title" id="title" value="{{ old('title') }}" required>
                    </div>
                </div>
                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="Slug">Internship Listing Slug</label>
                    </div>
                    <div class="form-container-col-75">
                        <input placeholder="Internship Listing Slug.." class="form-container-input" type="text"
                               name="slug" id="slug" value="{{ old('slug') }}" required>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="Company">Company Name</label>
                    </div>
                    <div class="form-container-col-75">
                        <input placeholder="Company Name.." class="form-container-input" type="text"
                               name="company" id="company" value="{{ old('company') }}" required>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="Location">Internship Location</label>
                    </div>
                    <div class="form-container-col-75">
                        <input placeholder="Internship Location.." class="form-container-input" type="text"
                               name="location" id="location" value="{{ old('location') }}" required>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="Salary">Internship Salary</label>
                    </div>
                    <div class="form-container-col-75">
                        <input placeholder="Internship Salary.." class="form-container-input" type="text"
                               name="salary" id="salary" value="{{ old('salary') }}" required>

                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="category_id">Category</label>
                    </div>
                    <div class="form-container-col-75">
                        <select class="form-container-select" name="category_id" id="category_id">
                            @php
                                $categories = \App\Models\Category::all();
                            @endphp
                            @foreach(@$categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="description">Internship Description</label>
                    </div>
                    <div class="col-75">
                        <textarea class="form-container-text" id="description" name="description"
                                  placeholder="Internship Description.." style="height:50px"
                                  required>{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="requirements">Internship Requirements</label>
                    </div>
                    <div class="col-75">
                        <textarea class="form-container-text" id="requirements" name="requirements"
                                  placeholder="Internship Requirements.." style="height:50px"
                                  required>{{ old('requirements') }}</textarea>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="benefits">Internship Benefits</label>
                    </div>
                    <div class="col-75">
                        <textarea class="form-container-text" id="benefits" name="benefits"
                                  placeholder="Internship Benefits.." style="height:50px"
                                  required>{{ old('benefits') }}</textarea>
                    </div>
                </div>

                <div class="form-container-row">
                    <div class="form-container-col-25">
                        <label class="form-container-label" for="benefits">Internship Body</label>
                    </div>
                    <div class="col-75">
                        <textarea class="form-container-text" id="body" name="body"
                                  placeholder="Internship Body.." style="height:100px"
                                  required>{{ old('body') }}</textarea>
                    </div>
                </div>


                <br>
                <div class="form-container-row">
                    <input type="submit" class="submit-form-btn " value="Update Listing">
                </div>


            </form>
        </div>

    </section>

</x-layout>
