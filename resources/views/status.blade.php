<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>botec-web</title>
</head>
<body>
    <h1>Status botec-web</h1>
    @foreach ($statusArray as $status)
    <p>{{$status->getname()}}:
        {{$status->getStatus()}}

        @if ($status->getError())
             : {{$status->getError()->getMessage()}}
        @endif

    </p>
    @endforeach
</body>
</html>
