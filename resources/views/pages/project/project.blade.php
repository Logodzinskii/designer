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

        <script type="text/javascript">

        $(document).ready(function(){

            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })

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
        <section class="bg-primary d-flex row justify-content-center zoom-img">
            <div class="d-flex justify-content-center row col-xxl-10">
                <img src="{{asset('images/projects/p1/1.jpg')}}" style="max-height: 90vh">
            </div>
            <div class=" bg-light ">
                <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10" style="min-height: 20vh">
                <h1 class="fs-1 text-body">Загородный дом</h1>
                    <p class="fs-5 text-body">
                        Дизайн интерьера загородного дома в КП Горный щит, общей площадью 82 м².
                    </p>
                </div>
            </div>
            <div class="d-none">{{$sum = 2}}</div>
            @for($i = 2; $i <= 7; $i++)
                @if($i % 2 && is_file('images/projects/p1/'. $sum+1 .'.jpg'))
                    <div class="d-flex justify-content-center row  flex-wrap col-xxl-10">
                        <img src="{{asset('images/projects/p1/'. $sum .'.jpg')}}" class="col-6" style="max-height: 60vh">
                        <img src="{{asset('images/projects/p1/'. $sum+1 . '.jpg')}}" class="col-6" style="max-height: 60vh">
                    </div>
                    <div class="d-none">{{$sum+=2 }}</div>
                @else
                    @if(is_file('images/projects/p1/'. $sum .'.jpg'))
                        <div class="d-flex justify-content-center row  col-xxl-10" >
                            <img src="{{asset('images/projects/p1/'. $sum .'.jpg')}}" style="max-height: 90vh">
                        </div>
                        <div class="d-none">{{$sum++}}</div>
                    @endif
                @endif
            @endfor

        <div class="bg-light">
            <div class=" d-flex justify-content-end align-items-center flex-wrap row " style="min-height: 100px">
                <a href="/#projects" class="btn btn-outline-primary fs-6 col-6 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
            </div>
        </div>
        </section>
        @include('pages/mainSections/footer')
    </body>
