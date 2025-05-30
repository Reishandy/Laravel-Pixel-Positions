@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <x-dot/>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
