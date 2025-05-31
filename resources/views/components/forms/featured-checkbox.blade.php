@props(['name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => '1',
        'class' => 'mr-2'
    ];
@endphp

<div class="flex items-center justify-end">
    <input {{ $attributes($defaults) }}>
    <label for="{{ $name }}" class="cursor-pointer">Featured job</label>
</div>
