@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')

    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h2 class="text-center"> Add new Comic:</h2>
                    <form action="{{ route('comics.store') }}" method="POST">
                        {{-- token --}}
                        @csrf
                        <label for="title">Title:</label>
                        <input id="title" type="text" name="title" class="mb-3 form-control">
                        <label for="description">Description:</label>
                        <input id="description" type="text" name="description" class="mb-3 form-control">
                        <label for="thumb">Image Link:</label>
                        <input id="thumb" type="text" name="thumb" class="mb-3 form-control">
                        <label for="price">Price:</label>
                        <input id="price" type="text" name="price" class="mb-3 form-control">
                        <label for="sale_date">Sale Date:</label>
                        <input id="sale_date" type="text" name="sale_date" class="mb-3 form-control">
                        <label for="series">Serie:</label>
                        <input id="series" type="text" name="series" class="mb-3 form-control">
                        <label for="type">Type:</label>
                        <input id="type" type="text" name="type" class="mb-3 form-control">

                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                    </form>
                </div>
            </div>

        </div>


    @endsection
</div>
