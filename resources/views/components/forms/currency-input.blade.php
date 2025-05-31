@props(['label', 'name', 'placeholder' => '', 'countryCode' => 'US'])

@php
    $defaults = [
        'type' => 'number',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full border focus:outline-none focus:border-main transition-colors duration-300',
        'value' => old($name),
        'placeholder' => $placeholder
    ];

    $country = app(App\Models\Country::class);
    $symbol = $country->getSymbol($countryCode);
@endphp

<x-forms.field :label="$label" :name="$name">
    <div class="relative">
        @if($symbol)
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <span class="text-gray">{{ $symbol }}</span>
        </div>
        @endif
        <input {{ $attributes->merge($defaults)->merge(['class' => $symbol ? 'pl-10 ' . $defaults['class'] : $defaults['class']]) }}>
    </div>
</x-forms.field>
