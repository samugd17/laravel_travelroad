<html>
<head>
    <title>Wished Places</title>
</head>

<body>
    <h1>Places I'd Like to Visit</h1>
    <ul>
        @foreach ($wished as $place)
            <li>{{ $place->name }}</li>
        @endforeach
    </ul>
    
    <p><a href="{{ url('/') }}"><-- Back to Home</a></p>
</body>
</html>
