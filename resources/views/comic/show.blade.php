@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="comic text-center">
            <h2>
                {{$comic->title}}
            </h2>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <p>
                {{$comic->description}}
            </p>
        </div>

    </div>

@endsection