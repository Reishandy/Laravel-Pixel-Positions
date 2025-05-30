<x-layout>
    <div class="space-y-10">
        <x-search heading="Let's Find Your Next Job!" route="{{ route('search-job') }}" placeholder="Full-Stack Developer..." />

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            @if($featuredJobs->count() > 0)
                <div class="grid md:grid-cols-3 gap-8 mt-6">
                    @foreach($featuredJobs as $job)
                        <x-job-card :job="$job"/>
                    @endforeach
                </div>
            @else
                <x-not-found item="jobs">
                    There are currently no featured jobs available.
                    Check back later or explore recents jobs.
                </x-not-found>
            @endif
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            @if($jobs->count() > 0)
                <div class="flex flex-wrap gap-3 mt-6">
                    @foreach($tags->sortBy('name') as $tag)
                        <x-tag :tag="$tag"/>
                    @endforeach
                </div>
            @else
                <x-not-found item="tags">
                    There are currently no tags available.
                    Check back later.
                </x-not-found>
            @endif
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            @if($jobs->count() > 0)
                <div class="mt-6">
                    {{ $jobs->links() }}
                </div>

                <div class="mt-6 space-y-6">
                    @foreach($jobs as $job)
                        <x-job-card-wide :job="$job"/>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $jobs->links() }}
                </div>
            @else
                <x-not-found item="jobs">
                    There are currently no jobs available.
                    Check back later.
                </x-not-found>
            @endif
        </section>
    </div>
</x-layout>
