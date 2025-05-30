@props(['job'])

<x-panel class="flex gap-6">
    <div>
        <x-employer-logo :dimension="90"></x-employer-logo>
    </div>

    <div class="flex flex-col md:flex-row md:w-full md:justify-between">
        <div class="flex-1">
            <a href="#" class="self-start text-sm text-gray">{{ $job->employer->name }}</a>

            <h3 class="font-bold text-xl mt-1 group-hover:text-main transition-colors duration-300">{{ $job->title }}</h3>

            <p class="text-sm text-gray mt-auto">{{ $job->schedule }} - From {{ $job->formatted_salary }}</p>
        </div>

        <div class="mt-3 md:mt-0 flex flex-wrap gap-2 h-max">
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
    </div>
</x-panel>
