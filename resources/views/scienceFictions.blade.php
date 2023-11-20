@extends('layouts.main')

@section('content')

    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie )

            <div class="card m-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ 'img/' . $movie->img }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$movie -> title}}</h2>
                    <h6>{{$movie->original_title}}</h6>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                    <p class="card-text">Vote: {{$movie->vote}}</p>
                    <a href="{{route('movieDetail', ['id' => $movie->id])}}" class="btn btn-primary">Scopri di più</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
