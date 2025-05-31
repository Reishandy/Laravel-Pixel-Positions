<x-layout>
    <x-page-heading>Edit Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('update-job', $job) }}">
        @method('POST')
        <x-forms.input label="Title" name="title" placeholder="CEO" :value="$job->title"/>
        <x-forms.currency-input label="Salary" name="salary" placeholder="90000" :value="$job->salary" :countryCode="$country_code" />
        <x-forms.input label="Location" name="location" placeholder="East Java, Indonesia" :value="$job->location"/>
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" :value="$job->url"/>

        <x-forms.divider/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time" {{ $job->schedule === 'Part Time' ? 'selected' : '' }}>Part Time</option>
            <option value="Full Time" {{ $job->schedule === 'Full Time' ? 'selected' : '' }}>Full Time</option>
        </x-forms.select>

        <x-forms.tag-checkboxes label="Tags" name="tags" :tags="$tags" :selected="$job->tags->pluck('id')->toArray()" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" :checked="$job->featured" />

        <div class="flex justify-center mt-10 gap-4">
            <x-forms.button>Update Job</x-forms.button>
            <a href="{{ route('home') }}" class="hover:text-red-500 px-5 py-4 inline-block text-center transition-colors duration-300">Cancel</a>
        </div>
    </x-forms.form>
</x-layout>
