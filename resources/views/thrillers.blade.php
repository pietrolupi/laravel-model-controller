@extends('layouts.main')

@section('content')



<h1 class="text-center">Thriller</h1>


<div class="container-custom  d-flex flex-wrap mb-5  ">
    @foreach ($movies as $movie )

    <div class="card-custom mx-3 d-flex ">
        <div class="img-container me-3 ">

          <img class="card-img-top" src="{{ 'img/' . $movie->img }}" alt="...">
        </div>
        <div class="card-body">
          <h4 class="card-title mt-2">{{$movie -> title}}</h4>
          <p class="card-text mb-5 description">{{$movie->original_title}}</p>
          <a href="{{route('movieDetail', ['id' => $movie->id])}}" class="btn btn-primary discover-btn">Scopri di più</a>

          <div class="datas">
            <p> Date: {{$movie->date}} </p>
            <span> Vote: {{$movie->vote}}</span>
            <p class="card-text genres">Nationality: {{$movie->nationality}}</p>
          </div>

        </div>

    </div>
    @endforeach

</div>


@endsection

