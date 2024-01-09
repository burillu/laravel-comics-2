@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <div class="bg-black">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="row gy-3 py-4">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="my-img-container" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ substr($comic->title, 0, 20) . '...' }}</h5>
                                <a class="btn btn-primary" href=" {{ route('comics.show', $comic->id) }}">Comic Details</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('comics.create') }}"><i
                            class="fa-solid fa-plus"></i> Add new Comic</a></button>
            </div>


        </div>


    @endsection
</div>
