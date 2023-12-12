@extends('home')

@section('content')

    <h1>Add New Book</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('ebook.store') }}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="title"> Title </label>
                <input type="text" name='title' class='form-control'>
                @error('title')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="description"> Description </label>
                <input type="text" name='description' class='form-control'>
                @error('description')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="author"> Author </label>
                <input type="text" name='author' class='form-control'>
                @error('author')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="price"> Price </label>
                <input type="text" name='price' class='form-control'>
                @error('price')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit">
                    Add Book
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
