@extends('home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <div class="modal fade" id="deleteBookModal" tabindex="-1" aria-labelledby="deleteBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBookModalLabel">Delete Book - {{$ebook->title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('ebook/'.$ebook->id) }}" method="POST">
            @csrf 
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this book?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete Book</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  
<h1>Edit Book</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ url('ebook/'.$ebook->id) }}" method="POST">
            @csrf 
            @method('POST')

            <div class="form-group mt-2">
                <label for="title"> Title </label>
                <input type="text" name='title' class='form-control' value='{{ $ebook->title }}'>
                @error('title')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="description"> Description </label>
                <input type="text" name='description' class='form-control' value='{{ $ebook->description }}'>
                @error('description')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="author"> Author </label>
                <input type="text" name='author' class='form-control' value='{{ $ebook->author }}'>
                @error('author')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="price"> Price </label>
                <input type="text" name='price' class='form-control' value='{{ $ebook->price }}'>
                @error('price')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBookModal">
                    Delete Book
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Book
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
