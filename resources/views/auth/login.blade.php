<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="{{ route('login') }}">
        <x-forms.input label="Email" name="email" type="email" placeholder="example@example.com"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <div class="flex justify-center mt-10">
            <x-forms.button>Log In</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
