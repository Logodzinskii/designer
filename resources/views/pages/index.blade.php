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
        <script type="text/javascript">

        $(document).ready(function(){
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })

            $(".owl-carousel:eq(0)").owlCarousel(
                {
                    margin:40,
                    dots: false,
                    autoplay:false,
                    lazyLoad: true,
                    loop: true,
                    nav:true,
                    navText: ['',
                        ''],
                    responsive:{
                        0:{
                            items:2
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:5
                        },
                        1800:{
                            items:5
                        }

                    }
                }
            );
            $(".owl-carousel:eq(1)").owlCarousel(
                {
                    margin:2,
                    dots: false,
                    autoplay:false,
                    lazyLoad: true,
                    loop: true,
                    nav:true,
                    navText: ['',
                        ''],
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:2
                        },
                        1800:{
                            items:3
                        }

                    }
                }
            );

        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('pages/mainSections/header')
        <section class="main_image p-0 m-0" style="height: 100vh">
            <div class="container-fluid p-0 m-0 d-flex align-items-center justify-content-center align-items-center" style="height: 100vh" >
                <div class="p-0 m-0 row d-flex align-content-around" style="height: 80%">
                    <div class="row text-title d-flex align-items-center justify-content-center text-body">
                        <div style="width: 180px; height: 30vh">
                            <img src="{{asset('images/icons/main_index_logo.png')}}" width="180" height="80">
                        </div>
                            <h1 class="text-center">РАЗРАБОТКА ИНДИВИДУАЛЬНОГО <br/>
                                ДИЗАЙН-ПРОЕКТА
                            </h1>
                            <p class="h1 text-center upper-case">Создаем стильный и современный дизайн!</p>
                    </div>
                </div>
            </div>
        </section>
        @include('pages/mainSections/progress')
        @include('pages/mainSections/examplework')
        @include('pages/mainSections/techdockuments')
        @include('pages/mainSections/cooperation')
        @include('pages/mainSections/form')
        <p class="marging-title bg-primary"></p>
        @include('pages/mainSections/positive')
        @include('pages/mainSections/services')
        <p class="marging-title"></p>
        @include('pages/mainSections/trust')
        @include('pages/mainSections/personal')
        @include('pages/mainSections/footer')
    </body>
