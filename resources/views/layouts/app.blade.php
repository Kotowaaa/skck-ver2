<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>{{ $title }} | Page</title>

        {{-- Style css untuk login dan register --}}
    <style>
        *body{
            margin: auto;
        }

        body{
            background-color: #18122B;
        }

        .kartu{
            width: 30rem; 
            height: 22rem;
            border: 1px solid white;
            border-radius: 8px;
            padding: 20px;
            color: white
        }

        .kartu2{
            width: 30rem; 
            height: 33rem;
            border: 1px solid white;
            border-radius: 8px;
            padding: 20px;
            color: white
        }
    </style>

</head>

<body>
        {{-- Isi content --}}
    <div class="container d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
        @yield('content')
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
