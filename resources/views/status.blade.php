<x-app-layout>
Status botec-web
    @foreach ($statusArray as $status)
    <p>{{$status->getname()}}:
        {{$status->getStatus()}}

        @if ($status->getError())
             : {{$status->getError()->getMessage()}}
        @endif

    </p>
    @endforeach
</x-app-layout>