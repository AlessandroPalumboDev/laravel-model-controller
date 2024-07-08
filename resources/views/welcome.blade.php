<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>

    <div class="container text-center">
        <div class="row  ">
            <div class="col">
                <h1>
                    Movies
                </h1>
            </div>
        </div>
        <div class="row align-item-center justify-content-center">
            @foreach ($movies as $movie )
            <div class="col-5">
                <div class="card my-3">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie['title']}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$movie['original_title']}}</h6>
                      <p class="card-text">Nationality: {{$movie['nationality']}}</p>
                      <p class="card-text">Year: {{$movie['date']}}</p>
                      <p class="card-text">Vote: {{$movie['vote']}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
            
    </div>



    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}

</body>

</html>
