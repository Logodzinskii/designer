<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description" content="Мебель на заказ в Екатеринбурге по вашим размерам. Узнай стоимость новой кухни в калькуляторе на сайте. Звони +7 963 272 72 82">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Мебель на заказ в Екатеринбурге. Мебельный интерьер кухни, визуализация проекта.</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=TTCommons:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/main.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
        <script src={{ asset('js/owl.carousel.min.js')}}></script>

        <script type="text/javascript">

        $(document).ready(function(){

            $(".owl-carousel:eq(0)").owlCarousel(
                {

                    margin:10,
                    dots: false,
                    autoplay:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                }
            );
            $(".owl-carousel:eq(1)").owlCarousel(
                {

                    margin:10,

                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                }
            );
            $(".owl-carousel:eq(2)").owlCarousel(
                {

                    margin:10,

                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                }
            );
            $(".owl-carousel:eq(3)").owlCarousel(
                {

                    margin:10,
                    autoplay:true,
                    responsive:{
                        0:{
                            items:4
                        },
                        600:{
                            items:4
                        },
                        1000:{
                            items:8
                        }
                    }
                }
            );
        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('pages/mainSections/header')
        <div class="bg-dark">
            <h1 class="text-dark">Заголовок</h1>
            <p>Текст</p>
        </div>
        <div class="bg-light">
            <h1 class="text-dark">Заголовок</h1>
            <p class="text-body">Текст</p>
        </div>

        <div class="bg-warning">
            <h1 class="text-white">Заголовок</h1>
            <p class="text-white">Текст</p>
        </div>

        <div class="card bg-info m-2" style="max-width: 27vw; border-radius: 30px;">
            <img src="{{asset('images/img.png')}}" width="auto" />
            <div class="card-body bg-info">
                <div class="card-header bg-info">
                    <h3 >«Горный щит» Кухня-Гостиная </h3>
                    <p class="text-dark">
                        S=25.2м2
                    </p>
                </div>
                <div class="card-footer bg-info">
                    <div class="btn btn-primary m-1">Посмотреть</div>
                    <div class="btn btn-info m-1">Узнать стоимость</div>
                </div>
            </div>
        </div>

        <div class="btn btn-primary">Primary</div>
        <div class="btn btn-outline-primary">Primary</div>
        <div class="btn btn-info">Primary</div>
        <div class="btn btn-secondary">secondary</div>
        <div class="btn btn-outline-secondary">secondary</div>

        @include('pages/mainSections/footer')
    </body>
