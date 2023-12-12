@extends('home')

@section('content')

    <h1>Add New Customer</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('customer.store') }}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="name"> Name </label>
                <input type="text" name='name' class='form-control'>
                @error('name')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="contact_number"> Contact Number </label>
                <input type="text" name='contact_number' class='form-control'>
                @error('contact_number')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="address"> Address </label>
                <input type="text" name='address' class='form-control'>
                @error('address')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="email"> Email </label>
                <input type="text" name='email' class='form-control'>
                @error('email')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit">
                    Add Customer
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
