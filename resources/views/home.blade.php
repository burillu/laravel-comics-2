@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="bg-black">
        <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-4 col=lg-3">
                <div class="card">
                    <img class="my-img-container" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{{substr($comic['description'], 0, 50) .'...'}}</p>
                        
                      </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>


@endsection
    </div>
    