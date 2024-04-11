@extends('layouts.app')

@section('content')

    <div class="container">

        <h2 class="mb-3">
            Comics List:
        </h2>

        <div class="list-group">

            @foreach($comics as $comic)
            <a href="{{route('comics.show', $comic->id)}}" class="list-group-item list-group-item-action" aria-current="true">
              {{$comic->title}}
            </a>
            @endforeach

          </div>
    </div>

@endsection