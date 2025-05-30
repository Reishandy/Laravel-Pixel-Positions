@props(['label', 'name', 'placeholder' => ''])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full border focus:outline-none focus:border-main transition-colors duration-300',
        'value' => old($name),
        'placeholder' => $placeholder
    ];
@endphp

<x-forms.field :label="$label" :name="$name">
    <input {{ $attributes($defaults) }}>
</x-forms.field>
