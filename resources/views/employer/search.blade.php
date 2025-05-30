<x-layout>
    <div class="space-y-10">
        <x-search heading="Search" route="{{ route('search-company') }}" placeholder="Company..." :query="$query"/>

        <section>
            <x-section-heading>Search result for "{{ $query }}"</x-section-heading>

            @if($employers->count() > 0)
                <div class="mt-6">
                    {{ $employers->links() }}
                </div>

                <div class="mt-6 space-y-6">
                    @foreach($employers as $employer)
                        <x-employer-card-wide :employer="$employer" :country="$country" />
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $employers->links() }}
                </div>
            @else
                <x-not-found item="company">
                    There are no company found with the title "{{ $query }}".
                </x-not-found>
            @endif
        </section>
    </div>
</x-layout>
