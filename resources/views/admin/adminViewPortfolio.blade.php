<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Создать портфолио</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=TTCommons:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/design.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src={{ asset('js/owl.carousel.min.js')}}></script>
    <script src={{ asset('js/design.js')}}></script>
    </head>
    <body class="container d-flex justify-content-center row">
    @include('admin/adminHeader')
    <p class="marging-title"></p>
        <p class="fs-1">Все работы</p>
        <form class="d-flex justify-content-around flex-wrap user-form col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" method="post" enctype="multipart/form-data" action="{{route('create.portfolio')}}">
            @csrf
            @foreach($portfolios as $portfolio)
                <div class="card bg-info col-12 col-lg-4" style="min-height: 80vh; overflow: auto; border-radius:30px">
                    <img src="{{asset($portfolio->main_images)}}" width="auto" height="330px" />
                    <div class="card-body bg-info ">
                        <div class="card-header bg-info">
                            <h3 >{{$portfolio->name}}</h3>
                            <p class="text-dark">
                                {{$portfolio->options}}
                            </p>
                        </div>
                        <div class="card-footer bg-info">
                            <div class="btn btn-primary m-1"><a href="{{route('admin.delete.portfolio',['id'=>$portfolio->id])}}">Удалить</a></div>
                            <div class="btn btn-info m-1">Редактировать</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </form>
    </body>
