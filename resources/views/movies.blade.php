@extends('layout.app')

@section('content')

<div class="container">
    <div class="row row-cols-4">
        @foreach($movies as $movie)
        <div class="col">
            <div class="card">
                <h3>{{$movie->title}}</h3>
                <h4>{{$movie->nationality}}</h4>
                <p>{{$movie->vote}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection