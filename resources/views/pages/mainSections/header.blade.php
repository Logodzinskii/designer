@php
    $arrLink=[ 'about'=>'O нас',
                'portfolio'=>'Портфолио',
                'cooperation'=>'Этапы работ',
                'services'=>'Услуги',
                'personal'=>'Сотрудники',
                'contact'=>'Контакты',
                ];
@endphp
<header class="fool-window-width upper-case">
    <nav class="p-0 m-0 navbar navbar-light navbar-expand-md navbar-expand-md fixed-top d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
            <div class="row col-12 d-flex justify-content-end ">
                    <button class="navbar-toggler rounded-circle bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" style="width: 60px; height: 60px">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
        <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <button type="button" class="btn-close text-reset align-self-end" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            <ul class="text-white list-unstyled text-start navbar-nav row col-md-12 mb-2 mb-lg-0 d-flex col justify-content-start align-content-between p-0 m-0">
                <li class="nav-item m-2">
                    <a href="/" >
                        <img src="{{asset('images/logo/large_light.png')}}" width="220" height="40"/>
                    </a>
                </li>
                @foreach($arrLink as $link=>$val)
                <li class="nav-item m-2">
                    <a  href="/{{$link}}/" class="transition">{{$val}}</a>
                </li>
                @endforeach
                <li>
                    <a  href="/home/" class=" transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                </li>
                <li>
                <li class="nav-item m-2">
                    <div class="d-flex justify-content-start">
                        <div class="btn btn-primary" style="font-size: 70%!important;">Узнать стоимость проекта</div>
                    </div>
                </li>
            </ul>
            <div class="col-md-12 d-flex justify-content-center m-3"><b><a href=":tel" class="transition">8 912 688-08-92</a></b></div>
        </div>
    </nav>
    <!--экран размер md-->
    <nav class="navbar-dark bg-primary navbar-expand-md d-md-block d-lg-none d-xl-none d-xxl-none p-0 m-0">
        <div>
            <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                    <div class="navbar-brand col-md-12 d-flex align-items-center justify-content-center" style="min-height: 80px">
                        <a href="/" >
                            <img src="{{asset('images/logo/large_light.png')}}" width="220" height="40"/>
                        </a>
                    </div>
                <ul class="navbar-nav row col-md-12 mb-2 mb-lg-0 d-flex justify-content-center">
                    @foreach($arrLink as $link=>$val)
                        <li class="nav-item m-2 text-center">
                            <a  href="/{{$link}}/" class="transition">{{$val}}</a>
                        </li>
                    @endforeach
                    <li class="nav-item text-center m-3">
                        <a  href="/home/" class=" transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item m-2 align-self-end">
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary" style="font-size: 70%!important;">Узнать стоимость проекта</div>
                        </div>
                    </li>
                </ul>
                <div class="col-md-12 d-flex justify-content-center"><b><a href=":tel" class="transition">8 912 688-08-92</a></b></div>
            </div>
        </div>
    </nav>
    <!--экран размер xl-->
    <nav class="fixed-top navbar-dark bg-primary navbar-expand-lg d-flex justify-content-center">
        <div class="fool-window-width">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex justify-content-between align-items-center col-12 m-3">
                    <div class="navbar-brand d-flex align-items-center p-0 m-0" style="min-height: 80px; margin-left: 10px">
                        <a href="/" >
                            <img src="{{asset('images/logo/large_light.png')}}" width="220" height="40"/>
                        </a>
                    </div>
                    <ul class="navbar-nav col-md-7 col-lg-7  mb-2 mb-lg-0 d-flex justify-content-around flex-wrap">
                        @foreach($arrLink as $link=>$val)
                            <li class="nav-item m-2 align-self-center">
                                <a  href="/{{$link}}/" class="transition">{{$val}}</a>
                            </li>
                        @endforeach
                        <li class="nav-item m-2 align-self-center">
                            <div>
                                <a href=":tel" class="transition">8 912 688-08-92</a>
                            </div>
                        </li>
                            <li class="nav-item m-2 align-self-center">
                                <a  href="/home/" class=" transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                </a>
                            </li>
                    </ul>
                    <div class="d-flex justify-content-end" style="margin-right: 30px; ">
                        <div class="btn btn-primary" style="font-size: 70%!important;">Узнать стоимость проекта</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
