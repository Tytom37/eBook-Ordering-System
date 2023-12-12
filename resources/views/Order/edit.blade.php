@extends('home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteOrderModalLabel">Delete Order - {{$order->id}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('order/'.$order->id) }}" method="POST">
            @csrf 
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this order?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete Order</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  
<h1>Edit Order</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ url('order/'.$order->id) }}" method="POST">
            @csrf 
            @method('POST')

            <div class="form-group mt-2">
                <label for="title"> Title of Book </label>
                <input type="text" name='title' class='form-control' value='{{ $order->ebook->title }}'>
                @error('title')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="name"> Name of Customer </label>
                <input type="text" name='name' class='form-control' value='{{ $order->name }}'>
                @error('name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="date_ordered"> Date Ordered </label>
                <input type="text" name='date_ordered' class='form-control' value='{{ $order->date_ordered }}'>
                @error('date_ordered')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                    Delete Order
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Order
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
