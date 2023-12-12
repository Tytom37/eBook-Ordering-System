@extends('home')

@section('content')

<style>
    .row {
        justify-content: center;
    }
</style>

    <h1>Add New Order</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('borrowing.store') }}" method="POST">
                @csrf 
                <div class="form-group mt-2">
                    <label for="ebook_id"> ID of Book </label>
                    <input type="text" name='ebook_id' class='form-control'>
                    @error('ebook_id')
                        <p class='text-danger'>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="name"> Name </label>
                    <input type="text" name='name' class='form-control'>
                    @error('name')
                        <p class='text-danger'>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="borrowed_at"> Date Borrowed </label>
                    <input type="text" name='borrowed_at' class='form-control'>
                    @error('borrowed_at')
                        <p class='text-danger'>{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="returned_at"> Date Returned </label>
                    <input type="text" name='returned_at' class='form-control'>
                    @error('returned_at')
                        <p class='text-danger'>{{$message}}</p>
                    @enderror
                </div>
                
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Add Record
                    </button>
                </div>
            </form>
        </div>

        <div class="col-md-5">
            <h2>Books</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ebooks as $ebook)
                        <tr>
                            <td>{{ $ebook->id }}</td>
                            <td>{{ $ebook->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
