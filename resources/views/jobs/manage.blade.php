<x-layout>
    <div class="title">
        <br><br><br><br><br>
    </div>

    <section id="job">
        <h1>Manage Your Listings!</h1>

        <table id="listing">
            <tr>
                <th>Job Listings</th>
                <th>Edit Job</th>
                <th>Delete Job</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>
                        <a href="/job-record/{{ $job->slug }}" class="job-listing">
                            {{ $job->title }}
                        </a>
                    </td>
                    <td>
                        <a href="/jobs/{{ $job->id }}/edit" class="edit-btn">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/jobs/{{$job->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-listing">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <x-flash/>

    </section>

</x-layout>
