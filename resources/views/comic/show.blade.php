@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="comic text-center">
            <h2 class="mb-4">
                {{$comic->title}}
            </h2>
            <div class="row">
                <div class="col-6">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <div class="col-6 text-start">
                    <ul class="list-group mb-3">
                        <li class="list-group-item">
                            {{$comic->description}}
                        </li>
                        <li class="list-group-item">
                            Price: {{$comic->price}}
                        </li>
                        <li class="list-group-item">
                            Series: {{$comic->series}}
                        </li>
                        <li class="list-group-item">
                            Sale Date: {{$comic->sale_date}}
                        </li>
                        <li class="list-group-item">
                            Type: {{$comic->type}}
                        </li>
                        <li class="list-group-item">
                            Artists: {{$comic->artists}}
                        </li>
                        <li class="list-group-item">
                            Writers: {{$comic->writers}}
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection