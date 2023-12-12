@extends('home')

@section('content')

@if (session('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div class='d-grip gap-2 d-md-flex justify-content-md-end mb-3'>
    <a href="{{ route('order.create') }}" class='btn btn-primary mo-md-2' type='button'>
        Add New Order
    </a>
</div>

<div class="table">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title of Book</th>
                <th>Name of Customer Who Ordered</th>
                <th>Date of the Order</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->ebook->title }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->date_ordered }}</td>
                    <td class='text-center'>
                        <a href="{{ route('order.edit', $order) }}" class='btn btn-info'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>