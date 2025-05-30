@props(['item'])

<div class="flex flex-col items-center justify-center py-12 px-4">
    <div class="text-main text-5xl mb-4">
        <i class="far fa-folder-open"></i>
    </div>
    <h3 class="text-xl font-bold mb-2">No {{ $item }} found</h3>
    <p class="text-gray text-center max-w-md">
        {{ $slot }}
    </p>
</div>
