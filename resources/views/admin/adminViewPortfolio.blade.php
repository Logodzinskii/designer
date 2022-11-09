<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Создать портфолио</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=TTCommons:wght@400;600;700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/design.css') }}>
    </head>
    <body class="container d-flex justify-content-center row">
    @include('admin/adminHeader')
    <p class="marging-title"></p>
        <p class="fs-1">Все работы</p>
        <form class="d-flex justify-content-around flex-wrap user-form col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" method="post" enctype="multipart/form-data" action="{{route('create.portfolio')}}">
            @csrf
            @foreach($portfolios as $portfolio)
                <div class="col-4 row d-flex justify-content-center">
                    <div class="fs-5 text-dark">
                        <p>Название: {{$portfolio->name}}</p>
                    </div>
                    <div class="fs-6 text-white">
                        <p>Категория: {{$portfolio->category}}</p>
                    </div>
                    <div class="fs-6 text-white">
                        <p>Описание: {{$portfolio->options}}</p>
                    </div>
                    <div>
                        <p>Тэг: {{$portfolio->tag}}</p>
                    </div>
                    <div>
                        <img src="{{asset($portfolio->images)}}" height="150"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </div>
            @endforeach
        </form>
    </body>
