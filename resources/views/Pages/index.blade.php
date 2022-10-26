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
        <link rel="stylesheet" href={{ asset('css/design.css') }}>
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
                    lazyLoad: true,
                    loop: true,
                    nav:true,
                    navText: ['<',
                        '>'],
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
        <section class="main_image p-0 m-0" style="height: 100vh">
            <div class="container-fluid p-0 m-0 d-flex align-items-center justify-content-center align-items-center" style="height: 100vh" >
                <div class="p-0 m-0 row d-flex align-content-around" style="height: 80%">
                    <div class="row p-0 m-0">
                        <div class="col d-flex justify-content-center">
                            <img src="{{asset('images/icons/ico_logo_dark.png')}}" width="100">
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col text-center text-body">
                            <h1>РАЗРАБОТКА ИНДИВИДУАЛЬНОГО <br/>
                                ДИЗАЙН-ПРОЕКТА
                            </h1>
                            <p>Создаем стильный и современный дизайн!</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="btn btn-primary ">Пройти тест</div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid bg-light ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12  d-flex justify-content-between flex-wrap" style="min-height: 20vh">
                    <div class="col-5 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-around flex-wrap">
                        <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center" >
                            <p class="text-dark col-2" style="font-size: xxx-large">63</p>
                            <p class="text-body col-10 p-2">созданных дизайн-проекта</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center" >
                            <p class="text-dark col-2" style="font-size: xxx-large">16</p>
                            <p class="text-body col-10 p-2">подрядных организаций в разных направлениях</p>
                        </div>
                    </div>
                    <div class="col-5 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-around flex-wrap">
                        <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center " >
                            <p class="text-dark col-2" style="font-size: xxx-large">8</p>
                            <p class="text-body col-10 p-2">реализованных проектов ежегодно</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center" >
                            <p class="text-dark col-2" style="font-size: xxx-large">10</p>
                            <p class="text-body col-10 p-1">созданных дизайн-проектов ежегодно</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary" >
            <div class="col-7 m-3">
                <span class="text-white " style="font-size: xxx-large;">
                В НАШЕЙ КОМАНДЕ<br/>
                7 ШТАТНЫХ СОТРУДНИКОВ
                </span>
            </div>
        </section>
        <section class="d-flex justify-content-center" style="margin-bottom: 100px">
            <div class="owl-carousel owl-theme owl-loaded side col-10">
                <div class="owl-stage-outer ">
                    <div class="owl-stage ">
                        <div class="owl-item">
                            <div class="card bg-info m-2" style="min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0001.jpg')}}" width="auto" height="400" />
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>ИВАН</h3>
                                        <p class="text-dark">
                                            Руководитель студии
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info m-2" style="min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0002.jpg')}}" width="auto" height="400" />
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>Луиза</h3>
                                        <p class="text-dark">
                                            Дизайнер и проект-менеджер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info m-2" style=" min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0003.jpg')}}" width="auto" height="400"/>
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>ВАЛЕРИЯ</h3>
                                        <p class="text-dark">
                                            Дизайнер-визуализатор
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info m-2" style="min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0004.jpg')}}" width="auto" height="400"/>
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>АНДРЕЙ</h3>
                                        <p class="text-dark">
                                            Технолог по мебели
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info m-2" style="min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0005.jpg')}}" width="auto" height="400" />
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>ИРИНА</h3>
                                        <p class="text-dark">
                                            Дизайнер-проектировщик <br/> технической документации
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info m-2" style="min-height: 75vh; overflow: auto">
                                <img src="{{asset('images/team/0006.jpg')}}" width="auto" height="400"/>
                                <div class="card-body bg-info">
                                    <div class="card-header bg-info">
                                        <h3>ВИКТОРИЯ</h3>
                                        <p class="text-dark">
                                            Графический дизайнер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row d-flex justify-content-center align-content-around p-0 m-0" style="min-height: 100vh;">
            <div class="container-fluid d-flex justify-content-around flex-wrap p-0 m-0 col-10" >
                <div class="col-12 col-md-12 col-lg-4">
                    <span class="text-dark fs-1">VOZHEV_DESIGN</span><br/>
                    <span class="text-white fs-1"> НАШИ ОТЛИЧИЯ</span>
                </div>
                <div class="col-12 col-md-12 col-lg-7 bg-warning text-white" style="margin-bottom: 100px;">
                    <p class="p-3 fs-5" >Создание индивидуального дизайн-проекта, включая рабочую документацию,
                        для дальнейшей его реализации бригадой строителей в заранее установленные
                        сроки и в рамках оговоренного бюджета
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center flex-wrap p-0 m-0 col-12" style="min-height: 20vh">
                <div class="d-flex justify-content-center col-10 col-md-10 col-lg-4 trans m-2 order-last order-sm-last order-md-last order-lg-first order-xl-first order-xxl-first" >
                   <img class="img-fluid" src="{{asset('images/content/difference/1.png')}}" height="300" >
                </div>
                <div class="col-10 col-md-10 col-lg-7 d-flex flex-wrap justify-content-start order-first order-sm-first order-md-first order-lg-last order-xl-last order-xxl-last border-top border-primary">
                    <div class="col-12 col-md-12 col-lg-5 " >
                        <p class="text-dark fs-4 d-flex align-content-center p-3">
                            СКОРОСТЬ <br/> РЕАЛИЗАЦИИ
                        </p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 text-white fs-6 align-middle p-3">
                        <span >
                            — От 40-70 кв² - 30 рабочих дней
                        </span><br/>
                            <span >
                            — От 70-100 кв²- 50 рабочих дней
                        </span><br/>
                            <span >
                            — От 100-150 кв² - 60 рабочих дней
                        </span><br/>
                            <span >
                            — От 150 кв² - от 80 рабочих дней
                        </span>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center flex-wrap p-0 m-0 col-12" style="min-height: 20vh">
                <div class="d-flex justify-content-center col-10 col-md-10 col-lg-4 trans m-2 order-last order-sm-last order-md-last order-lg-first order-xl-first order-xxl-first" >
                    <img class="img-fluid" src="{{asset('images/content/difference/2.png')}}" height="300" >
                </div>
                <div class="col-10 col-md-10 col-lg-7 d-flex flex-wrap justify-content-start order-first order-sm-first order-md-first order-lg-last order-xl-last order-xxl-last border-top border-primary">
                    <div class="col-12 col-md-12 col-lg-5 " >
                        <p class="text-dark fs-4 d-flex align-content-center p-3">
                            УЧЕТ ВСЕХ <br/> ТРЕБОВАНИЙ
                        </p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 text-white fs-6 align-middle p-3">
                        <span >
                           Учет финансовых, стилистических требований клиента на этапе проектирования!
                        </span>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center flex-wrap p-0 m-0 col-12" style="min-height: 20vh">
                <div class="d-flex justify-content-center col-10 col-md-10 col-lg-4 trans m-2 order-last order-sm-last order-md-last order-lg-first order-xl-first order-xxl-first" >
                    <img class="img-fluid" src="{{asset('images/content/difference/3.png')}}" height="300" >
                </div>
                <div class="col-10 col-md-10 col-lg-7 d-flex flex-wrap justify-content-start order-first order-sm-first order-md-first order-lg-last order-xl-last order-xxl-last border-top border-primary">
                    <div class="col-12 col-md-12 col-lg-5 " >
                        <p class="text-dark fs-4 d-flex align-content-center p-3">
                            ЭКОНОМИЯ ВРЕМЕНИ<br/> И СРЕДСТВ
                        </p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 text-white fs-6 align-middle p-3">
                        <span >
                            Подбор оборудования, материалов, мебели и других элементов интерьера,
                            ориентируясь на ваши пожелания и бюджет.
                            Экономия средств от 15-20% от общей стоимости чистовых материалов
                            - по нашей скидке от поставщиков.
                        </span>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center flex-wrap p-0 m-0 col-12" style="min-height: 20vh">
                <div class="d-flex justify-content-center col-10 col-md-10 col-lg-4 trans m-2 order-last order-sm-last order-md-last order-lg-first order-xl-first order-xxl-first" >
                    <img class="img-fluid" src="{{asset('images/content/difference/4.png')}}" height="300" >
                </div>
                <div class="col-10 col-md-10 col-lg-7 d-flex flex-wrap justify-content-start order-first order-sm-first order-md-first order-lg-last order-xl-last order-xxl-last border-top border-primary">
                    <div class="col-12 col-md-12 col-lg-5 " >
                        <p class="text-dark fs-4 d-flex align-content-center p-3">
                            СОТРУДНИЧЕСТВО С КОМПАНИЯМИ
                        </p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 text-white fs-6 align-middle p-3">
                        <span>
                         Сотрудничество с ремонтно-строительными бригадами,
                            ландшафтными дизайнерами и технологами-проектировщиками,
                            работающими в разных направлениях в процессе реализации
                            дизайн-проектов квартир и домов.
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @include('pages/mainSections/footer')
    </body>
