@props(['error' => false])

@if ($error)
    <p class="text-red-500 mt-2">{{ $error }}</p>
@endif
