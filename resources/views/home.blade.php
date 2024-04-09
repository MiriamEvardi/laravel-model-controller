@extends('layouts/app')

@section('content')

<div class="container text-center">

    <h1 class="my-5 display-2">MOVIE LIST</h1>
    <ul class="row justify-content-center list-unstyled gap-4">

        @foreach($movies as $movie)
        <li class=" p-3 rounded-5 col-5">
            <h2>{{$movie->title}}</h2>
            <iframe src="{{ $movie->trailer }}" frameborder="0" allowfullscreen width='500' height='300'></iframe>
            <p>
                Original title: <strong>{{$movie->original_title}}</strong>
            </p>
            <p>
                Nationality: <i>{{$movie->nationality}}</i>
            </p>
            <p>
                Release date: {{$movie->date}}
            </p>
            <p>
                Vote: {{$movie->vote}}/10
            </p>
        </li>
        @endforeach

    </ul>
</div>

@endsection