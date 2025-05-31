<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('store-job') }}">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.currency-input label="Salary" name="salary" placeholder="90000" :countryCode="$country_code" />
        <x-forms.input label="Location" name="location" placeholder="East Java, Indonesia"/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="Remote">Remote</option>
            <option value="Office">Office</option>
            <option value="Hybrid">Hybrid</option>
        </x-forms.select>

        <x-forms.tag-checkboxes label="Tags" name="tags" :tags="$tags" />

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

        <x-forms.featured-checkbox name="featured" />

        <div class="flex justify-center mt-10">
            <x-forms.button>Create</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
