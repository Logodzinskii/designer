<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description" content="Разработка индивидуального интерьера с гарантией!">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Студия дизайна интерьера. Заказать дизайн проект!</title>
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
    <body class="container-fluid">
        @include('pages/mainSections/header')
        <p class="marging-title"></p>
        <section class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="margin-bottom: 100px">
            <p id="projects" class="fs-1 text-decoration-underline marging-title">
                НЕКОТОРЫЕ ИЗ НАШИХ РАБОТ
            </p>
            <div class="d-flex justify-content-around flex-wrap ">
                @foreach($allportfolio as $portfolio)
                    <div class="owl-item slider-up-info col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4  p-0">
                        <div class="card bg-primary zoom-img" style=" position: relative">
                            <img  src="{{asset($portfolio->main_images)}}" width="auto" height="400"  />
                            <div class="card-body upper row">
                                <h3 class="fs-3 col-10">{{$portfolio->name}}</h3>
                                <a href="/project/{{$portfolio->category}}/{{$portfolio->id}}" class="col-2 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="">
                <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
                    <a href="/#projects" class="btn btn-outline-primary fs-6 col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
                </div>
            </div>
        </section>
        @include('pages/mainSections/form')
        @include('pages/mainSections/footer')
    </body>
