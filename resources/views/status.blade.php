<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Status botec-web') }}
        </h2>
    </x-slot>
    {{ __('Here you can see Database Status') }}
    @foreach ($statusArray as $status)
    <p>{{$status->getname()}}:
        {{$status->getStatus()}}

        @if ($status->getError())
             : {{$status->getError()->getMessage()}}
        @endif

    </p>
    @endforeach
</x-app-layout>