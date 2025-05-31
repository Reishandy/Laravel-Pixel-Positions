<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('store-job') }}">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.currency-input label="Salary" name="salary" placeholder="90000" :countryCode="$country_code" />
        <x-forms.input label="Location" name="location" placeholder="East Java, Indonesia"/>
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

        <x-forms.divider/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.tag-checkboxes label="Tags" name="tags" :tags="$tags" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />

        <div class="flex justify-center mt-10">
            <x-forms.button>Publish</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
