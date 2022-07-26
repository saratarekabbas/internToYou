<x-layout>
    <section>
        <h1>Manage Job!</h1>

        <table border="1">
            <tr>
                <th>Job Listings</th>
                <th>Edit Job</th>
                <th>Delete Job</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>
                        <a href="/job-record/{{ $job->slug }}">
                            {{ $job->title }}
                        </a>
                    </td>
                    <td>
                        <a href="/jobs/{{ $job->id }}/edit">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/jobs/{{$job->id }}">
                            @csrf
                            @method('DELETE')
                            <button>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>

</x-layout>
