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
            });
            var styleimg = '';
            var typeimg = '';
            var square ='';
            $('.design-select').on('mousemove',function (){
                $(this).css('cursor','pointer');
            })
            $('.design-select').on('click',function (){

                if($(this).children().eq(0).attr('name') === 'design'){
                    styleimg = ($(this).children().eq(2).children().eq(0).attr('src'));
                }
                if($(this).children().eq(0).attr('name') === 'type-design'){
                    typeimg = ($(this).children().eq(2).children().eq(0).attr('src'));
                }
                $(this).children().eq(0).prop("checked",true);
                if($(this).children().eq(0).prop("checked") === true)
                {
                    $('.form-navigation .btn:eq(1)').prop("disabled", false);
                }
            });

            $("input[name='square']").on('input',function(){
                square = $(this).val();
                $('.form-navigation .btn:eq(1)').prop("disabled", false);
            })
            $('.number').on('click', function (){
                $('.form-navigation .btn:eq(1)').prop("disabled", false);
            })
            var validateName = 0;
            var validateEmail = 0;
            var validateTel = 0;

            $("input[name='nameUser']").on('input',function(){
                if($(this).val().match(/[А-Яа-яЁё]/) !== null )
                {
                    validateName+=1;
                }
                if(validateName > 0 && validateEmail > 0 && validateTel > 0)
                {
                    $('.form-navigation .btn:eq(1)').prop("disabled", false);
                }
            })
            $("input[name='emailUser']").on('input',function(){
                if($(this).val().match(/\w+@\w+\.\w+/) !== null )
                {
                    validateEmail+=1;
                }
                if(validateName > 0 && validateEmail > 0 && validateTel > 0)
                {
                    $('.form-navigation .btn:eq(1)').prop("disabled", false);
                }
            })
            $("input[name='telUser']").on('input',function(){
                if($(this).val().match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/) !== null )
                {
                    validateTel+=1;
                }
                if(validateName > 0 && validateEmail > 0 && validateTel > 0)
                {
                    $('.form-navigation .btn:eq(1)').prop("disabled", false);
                }
            })


            $('.quest:not(.quest:eq(0)) div').hide();
            var sum=0;

            $('.form-next').on('click',function (e){
                e.preventDefault();
                sum+=20;
                $('.progress-bar').css('width',''+sum+'%');
                if(validateName > 0 && validateEmail > 0 && validateTel > 0 || sum === 60)
                {
                    $('.form-navigation .btn:eq(1)').prop("disabled", false);
                }else {
                    $('.form-navigation .btn:eq(1)').prop("disabled", true);
                }
                square = $("input[name='square']").val();
                loop(sum);
            })
            $('.form-prev').on('click',function (e){
                e.preventDefault();
                sum-=20;
                $('.progress-bar').css('width',''+sum+'%');
                $('.form-navigation .btn:eq(1)').prop("disabled", false);
                loop(sum);
            })
            function loop(sum)
            {
                switch (sum){
                    case 0:
                        $('.quest:eq(0) div').show();
                        $('.form-navigation .btn:eq(0)').prop("disabled", true);
                        $('.quest:not(.quest:eq(0)) div').hide();
                        break;
                    case 20:
                        $('.quest:eq(1) div').show();
                        $('.quest:not(.quest:eq(1)) div').hide();
                        $('.form-navigation .btn:eq(0)').prop("disabled", false);
                        break;
                    case 40:
                        $('.quest:eq(2) div').show();
                        $('.quest:not(.quest:eq(2)) div').hide();
                        break;
                    case 60:
                        $('.quest:eq(3) div').show();
                        $('.quest:not(.quest:eq(3)) div').hide();
                        break;
                    case 80:
                        $('.quest:eq(4) div').show();
                        $('.quest:not(.quest:eq(4)) div').hide();
                        $('.form-navigation .btn:eq(1)').prop("disabled", true);
                        $('#resStyle').attr('src',styleimg);
                        $('#resType').attr('src',typeimg);
                        $('#resSquare').html(square);
                        $('#resFormContactName').html($("input[name='nameUser']").val());
                        $('#resFormContactEmail').html($("input[name='emailUser']").val());
                        $('#resFormContactTel').html($("input[name='telUser']").val());
                        break;
                        case 100:

                            break
                }
            }

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
        <section class="row" style="min-height: 80vh">
            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 bg-light d-flex justify-content-center align-items-center">
                <div class="bg-primary w-75" style="margin-top: 50px; margin-bottom: 50px">
                    <form>
                        <p class="fs-4">ПОДАЙТЕ ЗАЯВКУ</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="min-height: 50vh">
                            <div class="d-flex justify-content-around quest flex-wrap">
                                <div class="fs-4 text-warning p-3 col-12">ПОМЕЩЕНИЕ, ДЛЯ КОТОРОГО НУЖЕН ДИЗАЙН?</div>
                                @for($i=1; $i<=3; $i++)
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                        <input type="radio"  id="design"{{$i}} name="design">
                                        <label for="design{{$i}}" class="rounded-circle shadow d1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                            </svg>
                                        </label>
                                        <div class="overflow-hidden rounded-3 proporcional">
                                            <img src="{{asset('images/form/'. $i .'.jpg')}}" class="calc-height"/>
                                        </div>
                                        <p style="margin-top: 20px">Выбор</p>
                                    </div>
                                @endfor
                            </div>
                            <div class="d-flex justify-content-around quest flex-wrap">
                                <div class="fs-4 text-warning p-3 col-12">КАКОЙ СТИЛЬ ПРЕДПОЧИТАЕТЕ ?</div>
                                @for($i=4; $i<=6; $i++)
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                        <input type="radio"  id="type-design"{{$i}} name="type-design">
                                        <label for="type-design{{$i}}" class="rounded-circle shadow d1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                            </svg>
                                        </label>
                                        <div class="overflow-hidden rounded-3 proporcional">
                                            <img src="{{asset('images/form/'. $i .'.jpg')}}" class="calc-height"/>
                                        </div>
                                        <p style="margin-top: 20px">Выбор</p>
                                    </div>
                                @endfor
                            </div>
                            <div class="container-fluid row d-flex justify-content-around quest" >
                                <div class="fs-4 text-warning p-3 col-12">ПЛОЩАДЬ ПОМЕЩЕНИЯ?</div>
                                <div class="d-flex justify-content-center">
                                    <div class="number" style="min-height: 45vh">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                            </svg>
                                        </button>
                                        <input type="number" name="square" min="0" step="10"/>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid row d-flex justify-content-around quest" >
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div class="container-fluid d-flex justify-content-center flex-wrap user-form" style="min-height: 45vh">
                                            <div class="row col-12">
                                                <label for="nameUser">Имя пользователя</label>
                                                <input type="text" name="nameUser" id="nameUser" placeholder="Имя Фамилия"/>
                                            </div>
                                            <div class="row col-12">
                                                <label for="emailUser">Email</label>
                                                <input type="email" name="emailUser" id="emailUser" placeholder="example@mail.ru" />
                                            </div>
                                            <div class="row col-12">
                                                <label for="telUser">Телефон</label>
                                                <input type="tel" name="telUser" id="telUser" placeholder="+7900-000-00-00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid row d-flex justify-content-around quest">

                                    <div class="d-flex justify-content-center flex-wrap col-8" >
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                            <div class="overflow-hidden rounded-3 proporcional">
                                                <img src="" class="calc-height" id="resStyle" />
                                            </div>
                                            <p style="margin-top: 20px">Выбор</p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional" >
                                            <div class="overflow-hidden rounded-3 proporcional">
                                                <img src="" class="calc-height" id="resType" />
                                            </div>
                                            <p style="margin-top: 20px">Выбор</p>
                                        </div>
                                        <div class="col-12 design-select proporcional">
                                            <div class="overflow-hidden rounded-3 proporcional d-flex justify-content-center">
                                                <p class="fs-6" >
                                                    <span>Площадь:</span>
                                                    <span id="resSquare"></span>
                                                    <span>m2</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8 design-select proporcional">
                                        <span>Благодарим за обращение! </span>
                                        <span id="resFormContactName"></span>
                                        <span></span>
                                        <span>, пожалуйста, проверьте указанные данные.</span><br/>
                                        <span id="resFormContactEmail"></span><br/>
                                        <span id="resFormContactTel"></span><br/>
                                        <span>Если все указано верно, то нажмите "Дальше", мы получим вашу заявку, а вам подарим бонус за обращение к нам.</span>
                                    </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around form-navigation" style="margin-top: 20px; margin-bottom: 20px">
                            <button class="btn btn-outline-secondary form-prev" disabled>Назад</button>
                            <button class="btn btn-outline-primary form-next" disabled>Дальше</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @include('pages/mainSections/footer')
    </body>
