<x-panel class="flex flex-col text-center ">
    <div class="self-start text-sm">Employer</div>

    <div class="py-8">
        <h3 class="text-xl font-bold group-hover:text-blue transition-colors duration-300">Job Title</h3>
        <p class="text-sm mt-4">Full time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
        </div>

        <x-employer-logo :dimension="42"></x-employer-logo>
    </div>
</x-panel>
