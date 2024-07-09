<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller</title>
    @vite('resources/js/app.js')

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>
    <header class="p-2 mb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>
                        Movies
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container text-center">
            <div class="row align-item-center justify-content-center">
                @foreach ($movies as $movie )
                    <div class="col-5">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title">{{$movie['title']}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$movie['original_title']}}</h6>
                                <p class="card-text">Nationality: {{$movie['nationality']}}</p>
                                {{-- <p class="card-text">Year: {{$movie['date']}}</p> --}}
                                <p class="card-text">Year: {{\Carbon\Carbon::parse($movie['date'])->format('d/m/Y')}}</p>
                                <p class="card-text">Vote: {{$movie['vote']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <span class="rock-salt-regular p-3">AP</span>
    </footer>

    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}

</body>

</html>
