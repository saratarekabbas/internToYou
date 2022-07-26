<x-layout>
    @include('_jobs-header')
    <section>
        <div class="content">
            {{--    column cards for job listings--}}
            @if ($jobs->count())
                <div class="row">
                    @foreach($jobs as $job)
                        <div class="column">
                            <x-job-card :job="$job"/>
                        </div>
                    @endforeach
                </div>
                    @else
                        <p style="text-align: center">Sorry, no results were found. Please check back later.</p>
                    @endif
        </div>
    </section>
</x-layout>
