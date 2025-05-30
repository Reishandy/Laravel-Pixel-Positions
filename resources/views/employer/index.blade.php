<x-layout>
    <div class="space-y-10">
        <x-search heading="Search Companies" route="{{ route('search-company') }}" placeholder="Company..."/>

        <section>
            <x-section-heading>Companies</x-section-heading>

            @if($employers->count() > 0)
                <div class="mt-6">
                    {{ $employers->links() }}
                </div>

                <div class="mt-6 space-y-6">
                    @foreach($employers as $employer)
                        <x-employer-card-wide :employer="$employer" :country="$country"/>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $employers->links() }}
                </div>
            @else
                <x-not-found item="company">
                    There are currently no company available.
                    Check back later.
                </x-not-found>
            @endif
        </section>
    </div>
</x-layout>
