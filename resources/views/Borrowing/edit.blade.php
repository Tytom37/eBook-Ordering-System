@extends('home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
<div class="modal fade" id="deleteBorrowingModal" tabindex="-1" aria-labelledby="deleteBorrowingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteBorrowingModalLabel">Delete Borrowing - {{$borrowing->id}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('borrowing/'.$borrowing->id) }}" method="POST">
                @csrf 
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this record?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete record</button>
                </div>
            </form>
        </div>
    </div>
</div>

<h1>Edit Record</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ url('borrowing/'.$borrowing->id) }}" method="POST">
            @csrf 
            @method('POST')

            <div class="form-group mt-2">
                <label for="title"> Title of Book </label>
                <input type="text" name='title' class='form-control' value='{{ $borrowing->ebook->title }}'>
                @error('title')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="name"> Name of Customer </label>
                <input type="text" name='name' class='form-control' value='{{ $borrowing->name }}'>
                @error('name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="borrowed_at"> Date Borrowed </label>
                <input type="text" name='borrowed_at' class='form-control' value='{{ $borrowing->borrowed_at }}'>
                @error('borrowed_at')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="returned_at"> Date Returned </label>
                <input type="text" name='returned_at' class='form-control' value='{{ $borrowing->returned_at }}'>
                @error('returned_at')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBorrowingModal">
                    Delete Record
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Record
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
