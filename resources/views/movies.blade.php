<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel controller</title>

    {{-- @vite('resources/js/app.js') --}}

</head>


<body>
    <div class="container">
        <div class="card-wrapper">
            <div class="card" style="width: 18rem;">
                @foreach ( $movies as $movie)
                    <div class="card-body">
                    <h3 class="card-title">{{$movie -> original_title}}</h5>
                    <h5 class="card-title">{{$movie -> title}}</h5>
                    <p class="card-text">{{$movie -> nationality}}</p>
                    <p class="card-text">{{$movie -> date}}</p>
                    <p class="card-text">{{$movie -> vote}}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

    </div>

</body>


</html>
