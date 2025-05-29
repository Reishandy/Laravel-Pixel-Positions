<x-panel class="flex gap-6">
    <div>
        <x-employer-logo :dimension="90"></x-employer-logo>
    </div>

    <div class="flex flex-col md:flex-row md:w-full md:justify-between">
        <div class="flex-1">
            <a href="#" class="self-start text-sm text-gray">Employer</a>

            <h3 class="font-bold text-xl mt-1 group-hover:text-main transition-colors duration-300">Job Title</h3>

            <p class="text-sm text-gray mt-auto">Full time - From $60,000</p>
        </div>

        <div class="mt-3 md:mt-0 flex flex-wrap gap-2 h-max">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </div>
</x-panel>
