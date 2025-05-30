<x-layout>
    <div class="space-y-10">
        <x-search heading="Search" route="{{ route('search-job') }}" placeholder="Full-Stack Developer..." :query="$query"/>

        <section>
            <x-section-heading>Search result for "{{ $query }}"</x-section-heading>

            @if($jobs->count() > 0)
                <div class="mt-6">
                    {{ $jobs->links() }}
                </div>

                <div class="mt-6 space-y-6">
                    @foreach($jobs as $job)
                        <x-job-card-wide :job="$job" />
                    @endforeach
                </div>

                <div class="my-6">
                    {{ $jobs->links() }}
                </div>
            @else
                <x-not-found item="jobs">
                    There are no jobs found with the title "{{ $query }}".
                </x-not-found>
            @endif
        </section>
    </div>
</x-layout>
