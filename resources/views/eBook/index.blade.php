@extends('home')

@section('content')

@if (session('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<style>

    .box-container {
        margin: auto;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        padding: 20px;
        margin: 10px 5px 10px 5px;
        background-color: #85FFBD;
        background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
    }
    
    h1 {
        color: black;
    }

    .price {
        width: 14%;
        text-align: center;
        border-radius: 15px;
        background-color: blue;
        color: white;
    }

    p {
        background-color: whitesmoke;
        padding: 10px;
        border-top-left-radius: 25px;
        border-bottom-right-radius: 25px;
        text-align: center;
    }

    .upper-section {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }
</style>

<div class='d-grip gap-2 d-md-flex justify-content-md-end mb-3'>
    <a href="{{ route('ebook.create') }}" class='btn btn-primary mo-md-2' type='button'>
        Add New Book
    </a>
</div>

<?php foreach($ebooks as $ebook): ?>

    <div class="box-container">
        <div class="book-container">
            <div class="upper-section">
                <h1> "{{ $ebook->title }}"</h1>
                <a href="{{ route('ebook.edit', $ebook) }}" class='btn btn-info'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                </a>
            </div>
            <p>{{ $ebook->description }}</p>
            <h6>by: {{ $ebook->author }}</h6>
            <h1 class="price">₱{{ $ebook->price }}</h1>
        </div>
    </div>
<?php endforeach; ?>
@endsection
</body>
</html>