@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')

    <div class="bg-black">
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                {{-- token --}}
                @csrf
                <input type="text" name="title" class="form-control" placeholder="title">
                <input type="text" name="description" class="form-control" placeholder="description">
                <input type="text" name="thumb" class="form-control" placeholder="thumb">

                <input type="text" name="price" class="form-control" placeholder="price">
                <input type="text" name="sale_date" class="form-control" placeholder="sale_date">
                <input type="text" name="series" class="form-control" placeholder="series">
                <input type="text" name="type" class="form-control" placeholder="type">
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>


    @endsection
</div>
