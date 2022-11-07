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
            <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
                <a href="/#projects" class="btn btn-outline-primary fs-6 col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
            </div>
        </div>
        </section>
        <section class="container-fluid col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
            <p class="fs-1 marging-title ">
                ЭТАПЫ НАШЕГО <br/>
                СОТРУДНИЧЕСТВА
            </p>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-around flex-wrap">
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">01.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/1.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Заявка на нашем сайте или по телефону и WA</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">02.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/2.png')}}" width="40" />
                        </div>
                        <p class="col p-3 " style="max-height: 200px">Встреча на объекте (замеры помещения) или у нас в офисе</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">03.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/3.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Заполнение ТЗ и брифа, составление концепции проекта</p>
                    </div>
                </div>

                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">04.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/4.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Подписание договора</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">05.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/5.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Планы: перепланировки, план мебели</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">06.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/6.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Визуализация каждого из помещений</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">07.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/7.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Техническая документация</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">08.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/8.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Спецификация оборудования и материалов, чертежи мебели</p>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row p-3">
                    <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <p class="col-2 p-0 m-0 text-warning">09.</p>
                        <div class="border-bottom border-primary col"></div>
                    </div>
                    <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                        <div class="col-2 m-0 p-0">
                            <img src="{{asset('images/icons/block/9.png')}}" width="40" />
                        </div>
                        <p class="col p-3" style="max-height: 200px">Авторский надзор</p>
                    </div>
                </div>
            </div>
        </section>
        @include('pages/mainSections/form')
        @include('pages/mainSections/footer')
    </body>
