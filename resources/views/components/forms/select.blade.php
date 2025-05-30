@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full border focus:outline-none focus:border-main transition-colors duration-300'
    ];
@endphp

<x-forms.field :label="$label" :name="$name">
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>

    <style>
        select option {
            background-color: #060606 !important;
            color: white !important;
        }
    </style>
</x-forms.field>
