@props(['job'])

<x-panel class="flex gap-6">
    <div class="flex-shrink-0 w-[60px] sm:w-[90px]">
        <x-logo :logo="$job->employer->logo" :name="$job->employer->name" size="w-full"/>
    </div>

    <div class="flex flex-col lg:flex-row lg:w-full lg:justify-between">
        <div class="flex-1">
            <a href="/company/{{ $job->employer->name }}" class="self-start text-sm text-gray hover:text-white transition-colors duration-300">{{ $job->employer->name }}</a>

            <h3 class="font-bold text-xl mt-1 group-hover:text-main transition-colors duration-300">{{ $job->title }}</h3>

            <p class="text-sm text-gray mt-auto">{{ $job->schedule }} - From {{ $job->formatted_salary }}</p>
        </div>

        <div class="mt-3 lg:mt-0 flex flex-wrap gap-2 h-max">
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
    </div>
</x-panel>
