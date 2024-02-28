<x-app-layout>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @include('partials/language_switcher')
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            {{ __('Welcome to our website!') }}
            <br>
                {{ __('Vladimir sucks') }}
                <br>
                {{ __('Welcome to our website, :Name', ['name' => 'amanda']) }}
                <br>
                {{ trans_choice('There is one apple|There are many apples', 2) }}
                <br>
                
            </div>
        </div>
    </div>
</body>
</x-app-layout>