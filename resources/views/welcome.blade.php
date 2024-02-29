<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome') }}
        </h2>
        </x-slot>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            {{ __('Welcome to our website!') }}
            <br>
                {{ __('Welcome to our website, :Name', ['name' => 'amanda']) }}
            </div>
        </div>
    </div>
</body>
</x-app-layout>