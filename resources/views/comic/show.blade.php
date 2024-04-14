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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal" tabindex="-1" id="deleteModal">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Delete Comic</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure you want to delete the comic {{$comic->title}}?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection