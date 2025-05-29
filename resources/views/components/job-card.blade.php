<x-panel class="flex flex-col text-center items-center">
    <div class="self-start text-sm">Employer</div>

    <div class="py-8 w-full max-w-xs">
        <h3 class="text-2xl font-bold group-hover:text-main transition-colors duration-300">Full-Stack Developer</h3>
        <p class="text-sm mt-4">Full time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto w-full">
        <div class="flex flex-wrap gap-2 h-max">
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
        </div>

        <x-employer-logo :dimension="42"></x-employer-logo>
    </div>
</x-panel>
