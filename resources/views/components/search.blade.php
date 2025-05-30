@props(['heading', 'route', 'placeholder', 'query'])

<section class="text-center pt-6">
    <h1 class="font-bold text-4xl"> {{ $heading }} </h1>

    <x-forms.form action="{{ $route }}" class="mt-6 relative">
        <div class="relative max-w-xl mx-auto">
            <x-forms.input label="" name="query" placeholder="{{ $placeholder }}" value="{{ isset($query) ? $query : '' }}" />
            <span class="w-4 h-4 bg-main absolute top-1/2 right-5 transform -translate-y-1/2"></span>
        </div>
    </x-forms.form>
</section>
