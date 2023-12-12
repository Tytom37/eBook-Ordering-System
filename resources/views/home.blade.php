<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FBAB7E;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);

            margin: 0;
            padding: 0;
        }

        .buttons {
            background-color: #452c63;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        li {
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover, a.active {
            background: white;
            color: black;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-left: 6%;
            margin-top: 2%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-pink {
            background-color: blue;
            color: #ffffff;
        }
        img{
            height: 50px;
            width: 40px;
            margin-left: 30%;
        }
        .mini-logo {
            display: flex;
            margin-left: -20px;
            justify-content: center;
            text-align: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="buttons">
        <div class="mini-logo">
            <img src="{{ asset('ebook.png') }}" alt="ebook" class="rev">
            <h1> eBook </h1>
        </div>
        <ul>
            <li><a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/ebook')}}" class="{{ Request::is('eBook') ? 'active' : '' }}"> Books </a></li>
            <li><a href="{{ url('/customer')}}" class="{{ Request::is('Customer') ? 'active' : '' }}"> Customers</a></li>
            <li><a href="{{ url('/order')}}" class="{{ Request::is('Order') ? 'active' : '' }}"> Orders </a></li>
            <li><a href="{{ url('/borrowing')}}" class="{{ Request::is('Borrowing') ? 'active' : '' }}"> Borrowing </a></li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
