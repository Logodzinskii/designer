<header class="p-0 m-0">
    <nav class="p-0 m-0 navbar navbar-light navbar-expand-md navbar-expand-md fixed-top d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
            <div class="row col-12 d-flex justify-content-end ">
                    <button class="navbar-toggler rounded-circle bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" style="width: 60px; height: 60px">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            </div>

        <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <button type="button" class=" m-3 btn-close text-reset align-self-end" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            <ul class="text-white list-unstyled text-start navbar-nav row col-md-12 mb-2 mb-lg-0 d-flex col justify-content-start align-content-between p-0 m-0">
                <li class="nav-item m-2">
                    <a  href="/admin/portfolios/view/" class="transition">Все работы</a>
                </li>
                <li class="nav-item  m-2">
                    <a  href="/admin/create/portfolio/" class=" transition">Добавить работу</a>
                </li>
                <li class="nav-item m-2">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="col-md-12 d-flex justify-content-center m-3"><b><a href=":tel" class="transition">8 912 688-08-92</a></b></div>
        </div>
    </nav>

    <!--экран размер md-->
    <nav class="navbar-dark bg-primary navbar-expand-md d-md-block d-lg-none d-xl-none d-xxl-none">
        <div class="container-lg">
            <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                <div class="navbar-brand m-3 col-md-12 d-flex align-items-center justify-content-center" style="min-height: 80px">
                    <img src="{{asset('images/logo/large_light.png')}}" width="220" height="40"/>
                </div>
                <ul class="navbar-nav row col-md-12 mb-2 mb-lg-0 d-flex col justify-content-center p-0 m-0">
                    <li class="nav-item m-2">
                        <a  href="/admin/portfolios/view/" class="transition">Все работы</a>
                    </li>
                    <li class="nav-item  m-2">
                        <a  href="/admin/create/portfolio/" class=" transition">Добавить работу</a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="col-md-12 d-flex justify-content-center"><b><a href=":tel" class="transition">8 912 688-08-92</a></b></div>
            </div>
        </div>
    </nav>
    <!--экран размер xl-->
    <nav class="fixed-top navbar-dark bg-primary navbar-expand-lg">
        <div class="container-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-brand col-md-3 d-flex align-items-center justify-content-center" style="min-height: 80px">
                    <img src="{{asset('images/logo/large_light.png')}}" width="220" height="40"/>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav col-md-7 mb-2 mb-lg-0 d-flex col justify-content-around">
                    <li class="nav-item m-2">
                        <a  href="/admin/portfolios/view/" class="transition">Все работы</a>
                    </li>
                    <li class="nav-item  m-2">
                        <a  href="/admin/create/portfolio/" class=" transition">Добавить работу</a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="col-md-2 d-flex justify-content-center"><b><a href=":tel" class="transition">8 912 688-08-92</a></b></div>
            </div>
        </div>
    </nav>
</header>
