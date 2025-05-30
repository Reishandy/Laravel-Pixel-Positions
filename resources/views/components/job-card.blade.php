@props(['job'])

<x-panel class="flex flex-col text-center items-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8 w-full max-w-xs">
        <h3 class="text-2xl font-bold group-hover:text-main transition-colors duration-300">{{ $job->title }}</h3>

        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->formatted_salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto w-full">
        <div class="flex flex-wrap gap-2 h-max">
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>

        <x-employer-logo :dimension="42"></x-employer-logo>
    </div>
</x-panel>
