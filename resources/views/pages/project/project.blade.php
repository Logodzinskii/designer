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
                (function( $ ){

                    $.fn.myPlugin = function() {
                        const pageWidth = document.documentElement.scrollWidth;
                        const pageHeight = document.documentElement.scrollHeight;
                        // нет необходимости писать $(this), так как "this" - это уже объект jQuery
                        // выражение $(this) будет эквивалентно $($('#element'));
                        var img = this.find('img');

                        img.each(function (i){
                            var width_div = $(this).parent().parent().width();
                            var height_img = this.height;
                            var width_img = this.width;
                            var width_new_img = width_div;

                            var height_new_img = width_new_img*(3/4);
                            //$(this).css('height', height_new_img);
                            //$(this).css('width', width_new_img);
                            if(width_img/height_img > 1){
                                //альбомный формат
                                height_new_img = (width_new_img*(3/4));
                                //$(this).css('height', height_new_img);
                                $('#album').append(this);
                            }else{
                                //книжный

                                $('#book').append('<div>');

                                $('#book div:last').addClass('col-6');
                                $('#book div:last').append(this);

                            }
                            console.log('w' + width_img + 'x' + width_new_img + 'div' + width_div);
                            console.log('h' + height_img + 'x' + height_new_img);
                        })

                        this.fadeIn('normal', function(){

                            // тут "this" - это элемент дерева DOM

                        });

                    };
                })( jQuery );
            $(".plugin").myPlugin();

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
    <body class="">
        @include('pages/mainSections/header')
        <section class="bg-primary fool-window-width d-flex row justify-content-center zoom-img">
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/projects/p1/1.jpg')}}" style="max-height: 90vh">
            </div>
            <div class=" bg-light ">
                <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10" style="min-height: 20vh">
                <h1 class="fs-1 text-body"></h1>
                    <p class="fs-5 text-body">
                        Дизайн интерьера загородного дома в КП Горный щит, общей площадью 82 м².
                    </p>
                </div>
            </div>
            <div class="plugin fool-window-width d-flex justify-content-center flex-wrap">
                @for($i = 1; $i <= 7; $i++)
                    <div>
                        <img src="{{asset('images/projects/p1/'. $i .'.jpg')}}">
                    </div>
                @endfor
            </div>

        <div class="bg-light">
            <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
                <a href="/portfolio/" class="btn btn-outline-primary fs-6 col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
            </div>
        </div>
            <div id="album" class="fool-window-width">

            </div>
            <hr/>
            <div id="book" class="fool-window-width d-flex justify-content-center flex-wrap">

            </div>
        </section>
        @include('pages/mainSections/cooperation')
        @include('pages/mainSections/form')
        @include('pages/mainSections/footer')
    </body>
