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
        <p class="fs-1 text-decoration-underline m-3">
            НЕКОТОРЫЕ ИЗ НАШИХ РАБОТ
        </p>
        <section class="d-flex justify-content-center" style="margin-bottom: 100px">
            <div class="owl-carousel owl-theme owl-loaded side col-11">
                <div class="owl-stage-outer ">
                    <div class="owl-stage ">
                        <div class="owl-item ">
                            <div class="card bg-info" style="min-height: 80vh; overflow: auto; border-radius:30px">
                                <img src="{{asset('images/img.png')}}" width="auto" height="330px" />
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
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info" style="min-height: 80vh; overflow: auto; border-radius:30px">
                                <img src="{{asset('images/img.png')}}" width="auto" height="330px" />
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
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info" style="min-height: 80vh; overflow: auto; border-radius:30px">
                                <img src="{{asset('images/img.png')}}" width="auto" height="330px" />
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
                        </div>
                        <div class="owl-item">
                            <div class="card bg-info" style="min-height: 80vh; overflow: auto; border-radius:30px">
                                <img src="{{asset('images/img.png')}}" width="auto" height="330px"/>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p class="fs-1 text-decoration-underline m-3">
            ПОСМОТРЕТЬ ПРИМЕР ДИЗАЙН-ПРОЕКТА
        </p>
        <section class="bg-light d-flex justify-content-start flex-wrap p-3">
            <div class="p-3 w-100 d-flex justify-content-start flex-wrap align-items-center">
                <svg style="width:50px;" class="t432__btn-img t432__btn-img_md" fill="#b89535" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path class="st0" d="M80.6 90V16.4L64.2 0H10.6v90m55-81.5l6.5 6.5h-6.5V8.5zM15.6 85V5h45v15h15v65"></path><path d="M28.2 38h34.7v5H28.2zM28.2 50h34.7v5H28.2z"></path></svg>
                <div class="text-body fs-4 m-1">Техническая документация</div>
            </div>
            <div class="p-3 w-100 d-flex justify-content-start flex-wrap align-items-center">
                <svg style="width:50px;" class="t432__btn-img t432__btn-img_md" fill="#b89535" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path class="st0" d="M80.6 90V16.4L64.2 0H10.6v90m55-81.5l6.5 6.5h-6.5V8.5zM15.6 85V5h45v15h15v65"></path><path d="M28.2 38h34.7v5H28.2zM28.2 50h34.7v5H28.2z"></path></svg>
                <div class="text-body fs-4 m-1">Альбом визуализации</div>
            </div>
            <div class="p-3 w-100 d-flex justify-content-start flex-wrap align-items-center">
                <svg style="width:50px;" class="t432__btn-img t432__btn-img_md" fill="#b89535" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path class="st0" d="M80.6 90V16.4L64.2 0H10.6v90m55-81.5l6.5 6.5h-6.5V8.5zM15.6 85V5h45v15h15v65"></path><path d="M28.2 38h34.7v5H28.2zM28.2 50h34.7v5H28.2z"></path></svg>
                <div class="text-body fs-4 m-1">Спецификация</div>
            </div>
        </section>
        <p class="fs-1 m-3">
            ЭТАПЫ НАШЕГО <br/>
            СОТРУДНИЧЕСТВА
        </p>
        <section class="container-fluid">
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
        <section class="m-3">
            <div class="fs-1 row ">
                <span class="col-6 col-sm-5 col-lg-4 col-xl-4 col-xxl-4 text-dark">ИНТЕРВЬЮ:</span>
                <span class="col-6 col-sm-7 col-lg-8 col-xl-8 col-xxl-8 text-white">ВОЖЕВ ИВАН</span>
            </div>
            <div class="fs-1 row">
                <span class="col-6 col-sm-5 col-lg-4 col-xl-4 col-xxl-4 text-dark">ИНТЕРВЬЮЕР:</span>
                <span class="col-6 col-sm-7 col-lg-8 col-xl-8 col-xxl-8 text-white">ВИКТОРИЯ-ЖУРНАЛ «AD RUSSIA»</span>
            </div>
        </section>
        <section class="container-fluid bg-white">
            <div class="accordion row col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6"  id="accordionPanelsStayOpenExample">
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            Виктория: “Иван, задам несколько вопросов по вашей нише -«дизайн интерьера». Интересно услышать ответы от создателя дизайн-студии. Вопрос первый: “Для чего необходим дизайн и дизайн-проект?
                            Ведь человек может это сделать сам! Разве нет?”
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body text-body">
                            <strong>Иван:</strong> “Хороший вопрос, Виктория! Благодарю.
                            Однако по нашей статистике, каждый третий клиент приходит,
                            и рассказывает о своём первом ремонте без дизайнера.
                            Многие говорят о том, что не хватило «плюшек которые
                            могут предоставить профессионалы». Клиенту, как и всей
                            его семье, по их же словам, приходилось решать кучу задач,
                            и в окончании “не чувствовали кайфа от пройденного ремонта
                            и заезда в новое жилище”. Почему так происходит?
                            Первое, это конечно, незапланированные траты и выход за
                            рамки бюджета, иногда даже в 2 раза. Это крайне неприятно
                            и болезненно. Что делаем мы? Чтобы обезопасить клиента от
                            лишних расходов, мы заранее обговариваем бюджет уже на этапе
                            первой встречи, еще до подписания договора. Далее корректируем
                            пожелания, выбираем стилистику проекта, так как от этого очень
                            сильно зависит финальная стоимость, а также обговариваем
                            сложность дизайна, чтобы двигаться, не выходя за рамки бюджета.
                            Рассказываем подводные камни, где можно сэкономить, а где лучше
                            не жадничать! И это только первый пункт…”
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Виктория: “Как интересно!
                            А бывает такое, что человек не знает, чего хочет?”
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                        <div class="accordion-body text-body">
                            Иван: “Конечно! Именно для этого нужен профессиональный взгляд! Мы - дизайнеры = психологи = те, кто КОРРЕКТИРУЕТ БУДУЩЕЕ НАСТРОЕНИЕ КЛИЕНТА! Что это значит? К нам приходит заказчик, чтобы смоделировать для себя НОВУЮ ЖИЗНЬ. Чтобы это сделать, необходимо понимать, что будет в тренде ближайшие 5-10-15 лет, так как ремонт делается на продолжительный срок. Постоянно совершенствоваться, узнавать новые фишки в области дизайна интерьеров - это задача профессионалов! У клиентов, как правило, нет на это времени. Есть идея, или есть какой-то образ, но этого мало для реализации. Необходимо следить за топовыми дизайнерами по всему миру, отдельно - за мебельными инновациями, новинками в осветительном оборудовании, сантехнике. Немалую часть берут на себя декоративные, напольные и настенные покрытия, молдинги и профиля, краска и декоративная штукатурка. Это все требует огромного количества времени. Мы посещаем салоны русских и иностранных производителей и фабрик. Все для того, чтобы посмотреть весь процесс своими глазами, во всем личного убедиться. И плюс ко всему, составить личную картотеку и договориться о лучших ценах. Вернемся к предыдущему вопросу (улыбаясь говорит Иван), ведь гораздо лучше получать больше за меньшее деньги, вы согласны?”
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Виктория: “Да, с этим не поспоришь. Давайте тогда представим, что клиент уже много где побывал, посмотрел разные картинки в интернете, возможно он уже имеет представление, что хочет. Что происходит дальше?”
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                        <div class="accordion-body text-body">
                            Иван: “Да! Зачастую клиент много видит, знакомится с аналогами интерьеров, на таких платформах как HAUS, Pinterest и др.! Скажу так, там обширный визуальный ряд, но человек не придает значение таким базовым вещам, как габариты помещений, отделочные материалы, их стоимость, наличие в магазинах (некоторые позиции доставляются по несколько месяцев с фабрик, особенно сейчас). Еще важно, что очень многие проекты на таких порталах сделаны в 3D, в основном для портфолио, а не для конкретного человека или семьи! Студии часто выкладывают такие работы, это нормально, но цель у таких проектов - привлечения клиента. Это один из сотен подводных камней для обывателя в задаче создания проекта. При этом, мы сами ценим такие порталы и часто черпаем идеи и вдохновение в работах других дизайнеров, однако делаем это очень аккуратно и с умом, применяя свои технологии и материалы”
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Виктория: “Скажите, Иван, что делать, если площадь небольшая, а очень многое хочется туда уместить? Особенно актуален этот вопрос, на мой взгляд, для тех, кто живет на Урале, где и одежда на все сезоны, и могут быть велосипеды, доски для катания и другие сезонные вещи”                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                        <div class="accordion-body text-body">
                            Иван: “Первая рекомендация: необходимо эффективно и тщательно использовать площадь, за которую вы заплатили! Это важно, особенно когда в году все 4 сезона! Редкость, когда клиенту не нужна площадь для хранения межсезонной одежды. Мы часто используем встроенные шкафы в ниши, и используем верхнюю площадь помещения - антресоль. Многие, когда слышат это слово, вспоминают уродливые шкафы в хрущевках, крашенные на несколько раз и представляют, что это - не эстетично. Но все изменилось, и чтобы поддержать эстетику основного решения, мы используем эффект «маскировки». Например, заказываем фасады шкафа на антресоли в один цвет со стеной, остаются слегка видимые вертикальные и горизонтальные полосы фасадов, что создает дополнительный эффект, подчеркивая геометрию интерьера! Это только первый шаг. Остальные решения нужно смотреть по факту. И если вы столкнулись с тем, как все разместить, то можете связаться с нами и записаться на консультацию, мы расскажем”                        </div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Виктория: “Иван, а вот такой вопрос: у клиента готов проект, а где ему заказывать чистовой материал и мебель?
                            В IKEA уже не сходишь…”</button>
                    </h2>
                    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                        <div class="accordion-body text-body">
                            Иван: “Поиск материалов - это одна из ключевых компетенций дизайнера и очень интересная тема! Тут есть два решения:
                            Первое, клиент ищет сам, и это, как правило, получается ДОРОГО и ДОЛГО. Обычно после того, как заказчики прошли такой путь, они начинают задумываться о полезности нашей услуги «авторский надзор и комплектация».
                            И это второй вариант: работа с профессионалами. Чем это хорошо? Я уже говорил, для нас как для студии дизайна, имеются индивидуальные привилегии и скидки. Например, у нас был случай с нашим клиентом. Квартира 112 квадратных метров, мы полностью занимались комплектацией проекта. И приглашали клиента к нам в офис с уже предварительным подбором материала, который нам презентовали и советовали производители и подрядчики. Вишенкой на торте всегда является цена, которую нам предоставляют за оптовые покупки, ведь мы ведем сразу несколько проектов и закупаем значительно чаще, чем отдельно взятый клиент. Но что значит для вас? Клиент полностью окупил сумму, которую заплатил нам за дизайн проект, так как получал материал со скидкой 15-20% от поставщиков. Чудо! И самое главное - остался доволен, что не тратил свое личное время, а просвещал его семье и бизнесу, за счет того, что точечно ездил в назначенное время в те места, куда мы его приглашали”.
                            Виктория: “Звучит невероятно”
                            Иван: “Так и есть. Невероятно, но факт”</div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Виктория: “Иван, и финальный вопрос.
                            Вот вы закончили проект, порекомендовали строителей для реализации, провели авторский надзор на монтаже…А что дальше? Вы поддерживайте с клиентом дальнейший диалог? Можно ли получить советы по эксплуатации: подсказки, рекомендации?”</button>
                    </h2>
                    <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                        <div class="accordion-body text-body">
                            Иван: “Да, конечно! Больше скажу, с некоторыми мы даже дружим! Выезжаем на пикники и катаемся на сноубордах. Я кстати уже 16 лет в этом спорте, и обучаю как частный инструктор. Бывало, что мой клиент просил провести тренировку по сноуборду его детям! Конечно, не со всеми мы становимся прямо друзьями, но это происходит очень часто. При этом всем мы даём профессиональный дизайнерский совет по дальнейшим вопросам. И особенно гордимся, когда клиент возвращается к нам вновь!”</div>
                    </div>
                </div>
                <div class="accordion-item col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="accordion-header" id="panelsStayOpen-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Виктория: “Благодарю за интервью! Я убеждена, что многие читатели нашли ответы на свои вопросы”</button>
                    </h2>
                    <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
                        <div class="accordion-body text-body">
                            Иван: “Мне было приятно быть полезным!”</div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <p class="fs-1 m-3">
                НАМ ДОВЕРЯЮТ
            </p>
            <div>
                <p class="text-center">Производители чистовых и отделочных материалов <br/>
                    и бригады по строительным работам и инженерии.</p>
            </div>
        </section>
        <section class="container-fluid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-around flex-wrap">
                @for($i = 0; $i <= 9; $i++)
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 col-xxl-1 d-flex justify-content-start align-items-center row p-3">
                    <img src="{{asset('images/parters/img_'.$i.'.png')}}" width="320">
                </div>
                @endfor
            </div>
        </section>
        @include('pages/mainSections/footer')
    </body>
