<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Jobs from "{{ $employer->name }}"</x-section-heading>

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
        </section>
    </div>
</x-layout>
