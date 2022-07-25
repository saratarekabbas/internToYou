<x-layout>
        @include('_jobs-header')
    <section>
        <div class="content">
            {{--    column cards for job listings--}}
            <div class="row">
                @foreach($jobs as $job)
                    <div class="column">
                        <x-job-card :job="$job" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
