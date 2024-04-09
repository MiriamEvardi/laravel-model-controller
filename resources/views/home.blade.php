@extends('layouts/app')

@section('content')

<div class="container">

    <h1>MOVIE LIST</h1>
    <ul class="d-flex justify-content-between list-unstyled">

        @foreach($movies as $movie)
        <li>
            {{$movie->title}}
            <p>
                {{$movie->original_title}}
            </p>
            <p>
                {{$movie->nationality}}
            </p>
            <p>
                {{$movie->date}}
            </p>
            <p>
                {{$movie->vote}}
            </p>
        </li>
        @endforeach

    </ul>
</div>

@endsection