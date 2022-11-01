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
        <section class="bg-primary">
            <span class="fs-1 p-3">ОСНОВНЫЕ УСЛУГИ</span>
            <div class="container-fluid p-0 m-0">
                <div class="p-0 m-0 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-around flex-wrap">
                    <div class="p-0 m-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xl-6 col-xxl-6" >
                        <div class="row bg-warning d-flex align-content-between m-3" style="height: 95%; width: 92%;">
                            <div>
                                <p class="fs-3 text-body p-3">ДИЗАЙН ПРОЕКТ</p>
                                <ul class="list-unstyled p-3 row d-flex align-items-start">
                                    <li>— Замер помещения</li>
                                    <li>— Разработка планировочных решений</li>
                                    <li>— 3D визуализация помещений</li>
                                    <li>— Техническая документация</li>
                                    <li>— Комплектация проекта</li>
                                    <li>— Смета строительных работ</li>
                                    <li>— Состав материалов с добавлением, мебель и оборудование, и где закупка!</li>
                                </ul>
                            </div>
                            <div class="row justify-content-between m-3" style="position: relative; height: 45px;" >
                                <button type="button" class="rounded-circle bg-dark align-self-start fs-6 " style="width: 32px; height: 32px; color: white; border: none" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Проектирование площадей до 25 м² выполняется по фиксированной цене. Работы выполняются по договору и оплачиваются по этапам.">
                                    !
                                </button>
                                <div class="btn btn-secondary col-4 align-self-end text-nowrap" style="position: absolute; right: -10px">Оставить заявку</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 m-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xl-6 col-xxl-6">
                        <div class="row bg-dark d-flex align-content-between m-3" style="height: 95%; width: 92%">
                            <div>
                                <p class="fs-3 text-white p-3">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</p>
                                <ul class="list-unstyled p-3 d-flex row align-items-start">
                                    <li>— Разберем планировочное решение квартиры</li>
                                    <li>— Определим стиль будущего интерьера</li>
                                    <li>— Производим прибыль дизайн проекта</li>
                                    <li>— Рекомендации от дизайнера</li>
                                    <li>— Ответим на ваши вопросы</li>
                                </ul>
                            </div>
                            <div class="row justify-content-end m-3" style="position: relative; height: 45px;">
                                <div class="btn btn-primary m-1 col-4 text-nowrap" style=" position: absolute; right: -10px">Записаться</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="fs-1 p-3 m-3">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</p>
            <div class="container-fluid p-0 m-0">
                <div class="p-0 m-0 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-around flex-wrap">
                    <div class="p-0 m-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xl-6 col-xxl-6" >
                        <div class="row bg-dark d-flex align-content-between m-3" style="height: 95%; width: 92%;">
                            <div>
                                <p class="fs-3 text-white p-3">ОТДЕЛЬНЫЕ УСЛУГИ</p>
                                <ul class="list-unstyled p-3 row d-flex align-items-start">
                                    <li>— План расстановки мебели от 5 м2</li>
                                    <li>— Разработка планировочных решений от 20 м2</li>
                                    <li>— Техническая документация от 50 м2</li>
                                    <li>— 3D визуализация помещения от 50 м2</li>
                                    <li>— Выезд дизайнера на объект</li>
                                    <li>— Комплектация проекта</li>
                                </ul>
                            </div>
                            <div class="row justify-content-between m-3" style="position: relative; height: 45px;" >
                                <div class="btn btn-primary col-4 align-self-end text-nowrap" style="position: absolute; right: -10px">Оставить заявку</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 m-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xl-6 col-xxl-6">
                        <div class="row bg-warning d-flex align-content-between m-3" style="height: 95%; width: 92%">
                            <div>
                                <p class="fs-3 text-body p-3">АВТОРСКИЙ НАДЗОР</p>
                                <ul class="list-unstyled p-3 d-flex row align-items-start">
                                    <li>— Еженедельное посещение объекта</li>
                                    <li>— Надзор за начальными строительно-отделочными работами</li>
                                    <li>— Проверка проектной документации подрядных организаций</li>
                                    <li>— Контроль исполнительской деятельности подрядных организаций</li>
                                    <li>— Предоставление прибыли о выполненных работах на объекте</li>
                                    <li>— Оперативное решение спорных вопросов</li>
                                    <li>— Доукомплектация объекта</li>
                                    <li>— Профессиональная фотофиксация готового интерьера
                                        (с семьей)</li>
                                </ul>
                            </div>
                            <div class="row justify-content-end m-3" style="position: relative; height: 45px;">
                                <div class="btn btn-secondary m-1 col-4 text-nowrap" style=" position: absolute; right: -10px">30 000 р/мес.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="d-flex justify-content-around flex-wrap ">

            @for($i=0; $i<=5; $i++)
                <div class="owl-item slider-up-info w-50 p-2">
                    <div class="card zoom-img" style=" position: relative">
                        <img  src="{{asset('images/img.png')}}" width="auto" height="auto"  />
                        <div class="card-body upper row">
                            <h3 class="fs-3 col-10">«Горный щит» Кухня-Гостиная </h3>
                            <a href="/project/" class="col-2 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor

        </div>


        @include('pages/mainSections/footer')
    </body>
