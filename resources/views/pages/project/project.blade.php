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
        <link rel="stylesheet" href={{ asset('/public/css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('/public/css/owl.theme.default.min.css') }}>
        <link rel="stylesheet" href={{ asset('/public/css/design.css') }}>
        <link rel="stylesheet" href={{ asset('/public/css/bootstrap.css') }}>
        <script src="{{asset('/public/js/bootstrap.bundle.js')}}"></script>
        <script src={{ asset('/public/js/owl.carousel.min.js')}}></script>
    <script src={{ asset('/public/js/design.js')}}></script>
        <script type="text/javascript">
            $(window).on('load', function() {

                (function( $ ){

                    $.fn.myPlugin = function() {
                        const pageWidth = document.documentElement.scrollWidth;
                        const pageHeight = document.documentElement.scrollHeight;
                        // нет необходимости писать $(this), так как "this" - это уже объект jQuery
                        // выражение $(this) будет эквивалентно $($('#element'));
                        var img = this.find('img');
                        var arr = [];
                        img.each(function (){
                            var width_div = $(this).parent().parent().width();
                            var height_img = this.height;
                            var width_img = this.width;
                            if(width_img/height_img > 1){
                                //альбомный формат
                                var albumImg = $('<div>',{
                                    'class': 'd-flex row justify-content-between aspect-ratio-box flex-wrap p-0 m-0 albums',
                                });
                                console.log(this.src);
                                var Img=$('<img>',{
                                    src: this.src,
                                    alt: '',
                                });
                                albumImg.append(Img);
                                $('#album').append(albumImg);

                            }else{
                                //книжный
                                arr.push(this);
                            }
                            img.remove();
                        })
                        var sum = 0;
                        for(let i=0; i<=(arr.length/2); i+=2)
                        {
                            $('#book').append('<div>');
                            $('#book').children().last().addClass('d-flex fool-window-width justify-content-between flex-wrap books');
                            $.each(arr.slice(i,i+2),function(index, value){

                                $('#book').children().last().append('<div>');
                                $('#book').children().last().children().addClass('col-6 square');

                                $('#book').children().last().children().last().append(value);
                                $('#book').children().last().children().last().children().addClass('square-content-project');

                            });
                            sum++;
                        }
                        for(let i=0; i<=sum; i++){
                            var elem_book = $('.books:eq('+i+')').clone();
                            $('.books:eq('+i+')').remove();
                            $('#album').children().eq(i+2).after(elem_book);
                        };
                        var books = $('.books').length;
                        var albums = $('.albums').length;

                        if(albums > 2 && books > 1){
                            $('.books:eq(0)').insertAfter($('.albums:eq(0)'));
                        }
                    };

                })( jQuery );

           $(".plugin").myPlugin();

     });
    </script>
    </head>
    <body class="">
        @include('pages/mainSections/header')
        <section class="bg-primary fool-window-width d-flex row justify-content-center zoom-img mains">
            <div class="d-flex row justify-content-center project-scheme">
                <img src="{{asset($portfolios[0]['main_images'])}}">
            </div>
            <div class="d-flex justify-content-center bg-light flex-wrap" style="min-height: 85vh">
                <div class="project-card col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 position-relative" style="min-height: 85vh">
                    <div class="project-information row d-flex align-items-center" style="height: 100%">
                        <div style="position: absolute; top: 0; width: 100%; height: 100%; background-color: #FFFFFF; opacity: 0.7;"></div>
                        <div class="col d-flex justify-content-center align-items-center" style="opacity: 0.5">
                            <img src="{{asset('images/icons/main_index_logo.png')}}" height="90">
                        </div>
                        <h1 class="fs-1 text-body align-self-center text-center" style="z-index: 2">
                            {{$portfolios[0]['name']}}
                        </h1>
                        <p class="text-center text-body fs-3" style="z-index: 2">{{$portfolios[0]['options']}}</p>
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2 align-self-center d-flex justify-content-center" data-curtain data-size="m" data-shape="round" data-color-scheme="blackwhite" data-services="messenger,vkontakte,odnoklassniki,telegram,twitter,viber,whatsapp">
                        </div>
                    </div>
                </div>
                <div class="project-scheme col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-center align-items-center " style="max-height: 85vh">
                        <img src="{{asset($portfolios[0]['scheme_images'])}}" alt=""/>
                </div>
            </div>
            <div class="plugin">
                @foreach(json_decode($portfolios[0]['images'],true) as $images)
                    <div class="album-item">
                        <img src="{{asset($images)}}">
                    </div>
                @endforeach
            </div>
            <div id="album" class= "d-flex row justify-content-center flex-wrap aspect-ratio-box zoom-img">

            </div>
            <div id="book" class=" d-flex justify-content-center flex-wrap zoom-img">

            </div>
        <div class="bg-light">
            <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
                <a href="/portfolio/" class="btn btn-outline-primary fs-6 col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
            </div>
        </div>

        </section>
        @include('pages/mainSections/cooperation')
        @include('pages/mainSections/form')
        @include('pages/mainSections/footer')
    </body>
