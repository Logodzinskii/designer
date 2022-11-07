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
            $(document).ready(function() {

                $(".owl-carousel").owlCarousel(
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
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:3
                            },
                            1800:{
                                items:4
                            }

                        }
                    }
                );

        });
    </script>
    </head>
    <body class="container-fluid">
        @include('pages/mainSections/header')
        @include('pages/mainSections/personal')
        @include('pages/mainSections/interview')
        @include('pages/mainSections/footer')
    </body>
