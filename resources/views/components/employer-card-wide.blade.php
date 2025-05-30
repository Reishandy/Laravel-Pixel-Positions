@props(['employer', 'country'])

<x-panel class="flex gap-6">
    <div class="flex-shrink-0 w-[60px] sm:w-[90px]">
        <x-logo :logo="$employer->logo" :name="$employer->name" size="w-full"/>
    </div>

    <div class="flex flex-row w-full justify-between">
        <div class="flex flex-col justify-center">
            <h3 class="font-bold text-2xl mt-1 group-hover:text-main transition-colors duration-300">{{ $employer->name }}</h3>

            <div class="inline-flex space-x-3">
                <p class="text-gray mt-1">{{ $country->getCountry($employer->country_code)['name'] }}</p>
                <p class="text-gray mt-1">- {{ $employer->jobs->count() }} Jobs posted</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-2 h-max">
            {{-- TODO: List jobs --}}
        </div>
    </div>
</x-panel>
