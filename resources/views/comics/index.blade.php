@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <div class="bg-black">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="my-img-container" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <a class="btn btn-primary" href=" {{ route('comics.show', $comic->id) }}">Comic Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    @endsection
</div>
