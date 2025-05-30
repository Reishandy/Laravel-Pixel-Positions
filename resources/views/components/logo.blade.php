@props(['logo', 'name', 'size'])

@if($logo === 'default')
    <img src="{{ Vite::asset('resources/images/favicon.svg') }}" alt="{{ $name }} Logo" class="rounded-xl {{ $size }}">
@else
    <img src="{{ $logo }}" alt="{{ $name }} Logo" class="rounded-xl {{ $size }}">
@endif
