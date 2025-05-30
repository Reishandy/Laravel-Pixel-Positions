<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" placeholder="Your Name"/>
        <x-forms.input label="Email" name="email" type="email" placeholder="example@example.com"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>

        <x-forms.divider/>

        <x-forms.input label="Company Name" name="employer" placeholder="Your Company Name"/>
        <div>
            <x-forms.input label="Company Logo" name="logo" type="file"/>
            <div class="mt-2 text-gray-400">
                (Optional) Maximum file size: 2MB
            </div>
        </div>

        <x-forms.select label="Origin Country" name="country_code">
            <option value="">Select a country</option>
            @foreach ($countries as $code => $details)
                <option value="{{ $code }}" {{ old('country_code') == $code ? 'selected' : '' }}>
                    {{ $details['name'] }} ({{ $code }})
                </option>
            @endforeach
        </x-forms.select>

        <div class="flex justify-center mt-10">
            <x-forms.button>Create Account</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
