@extends('layouts.app')

@section('title', 'Edit : ' . $comic->title)

@section('content')

    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h2 class="text-center"> Editing {{ $comic->title }}</h2>
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        {{-- token --}}
                        @csrf

                        @method('PUT')


                        <label for="title">Title:</label>
                        <input id="title" type="text" value="{{ old('title', $comic->title) }}" name="title"
                            class="mb-3 form-control @error('title') is-invalid @enderror" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="description">Description:</label>
                        <textarea id="description" type="text" name="description"
                            class="mb-3 form-control @error('description') is-invalid @enderror">{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="thumb">Image Link:</label>
                        <input id="thumb" type="text" value="{{ old('thumb', $comic->thumb) }}" name="thumb"
                            class="mb-3 form-control @error('thumb') is-invalid @enderror" required>
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="price">Price:</label>
                        <input id="price" type="text" value="{{ old('price', $comic->price) }}" name="price"
                            class="mb-3 form-control @error('price') is-invalid @enderror" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="sale_date">Sale Date:</label>
                        <input id="sale_date" type="text" value="{{ old('sale_date', $comic->sale_date) }}"
                            name="sale_date" class="mb-3 form-control @error('sale_date') is-invalid @enderror" required>
                        @error('sale_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="series">Serie:</label>
                        <input id="series" type="text" value="{{ old('series', $comic->series) }}" name="series"
                            class="mb-3 form-control @error('series') is-invalid @enderror" required>
                        @error('series')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="type">Type:</label>
                        <input id="type" type="text" value="{{ old('type', $comic->type) }}" name="type"
                            class="mb-3 form-control @error('type') is-invalid @enderror">
                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                    </form>
                </div>
            </div>

        </div>


    @endsection
</div>
