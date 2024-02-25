<x-app-layout>
    <h1>Status botec-web</h1>
    @foreach ($statusArray as $status)
    <p>{{$status->getname()}}:
        {{$status->getStatus()}}

        @if ($status->getError())
             : {{$status->getError()->getMessage()}}
        @endif

    </p>
    @endforeach
</x-app-layout>