<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6 relative">
                <div class="relative max-w-xl mx-auto">
                    <input type="text" placeholder="Full-Stack Developer"
                           class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full border focus:outline-none focus:border-main transition-colors duration-300">
                    <span class="w-4 h-4 bg-main absolute top-1/2 right-5 transform -translate-y-1/2"></span>
                </div>
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid md:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="flex flex-wrap gap-3 mt-6">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

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
