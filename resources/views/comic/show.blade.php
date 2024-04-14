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
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection