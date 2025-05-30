@props(['job'])

<x-panel class="flex flex-col text-center items-center">
    <a href="/company/{{ $job->employer->name }}" class="self-start text-sm text-gray hover:text-white transition-colors duration-300">{{ $job->employer->name }}</a>

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

        <x-logo :logo="$job->employer->logo" :name="$job->employer->name" size="w-[42px]"/>
    </div>
</x-panel>
