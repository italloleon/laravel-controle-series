<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $title !!} - Controle de Series</title>
    @vite(['resources/css/app.scss'])
</head>
<body class="bg-body-tertiary">

<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route("series.index") }}">Controle Series</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route("series.index") }}">Lista de Series</a>
                </li>
            </ul>
{{--            <form class="d-flex" role="search">--}}
{{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </form>--}}
        </div>
    </div>
</nav>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger my-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="mt-5 display-1">{!! $title !!}</h1>
    {{ $slot }}
</div>
@vite(['resources/js/app.js'])
</body>
</html>
