@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <div class="bg-black">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card">
                        <img class="my-img-container" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>

                        </div>
                    </div>

                </div>
                <div class="col p-4 text-white">
                    <h2>{{ $comic->title }} </h2>
                    <span class="fw-lighter fst-italic ">Sale date: {{ $comic->sale_date }} | Type : {{ $comic->type }}
                    </span>
                    <p class="mb-3 mt-3">{{ $comic->description }}</p>
                    <div class="mb-3 fw-bold">Price: {{ $comic->price }} </div>

                    <button class="btn btn-primary"><a href="{{ route('comics.edit', $comic->id) }}"> Edit
                            Comic</a></button>


                </div>


            </div>
        </div>


    @endsection
</div>
