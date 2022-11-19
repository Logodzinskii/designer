
<section class="fool-window-width d-flex justify-content-center align-items-center row flex-wrap">
    <div id="projects" class="compressed-window-width d-flex align-self-center fs-1 marging-title">
        <div class="marging-title-border-bottom">
            НАШИ ПРОЕКТЫ
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap ">
        @for($i=2; $i<=7; $i++)
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 square-example-work bg-info align-items-center">
                    <div class="square-example-work-content">
                        <img  src="{{asset('images/projects/p'. $i .'/img.png')}}" />
                        <div class="universal-opacity-dark-3"></div>
                        <div>
                            <div class="square-example-work-content-info row d-flex justify-content-center align-items-end col-12">
                                <h2 class="text-center">«Горный щит» Кухня-Гостиная </h2>
                                <a href="/project/" class="col-12 transition d-flex justify-content-center align-items-center" style="padding-bottom: 8vh; height: 8vh">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        @endfor
    </div>
    <div class="">
        <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
            <a href="/portfolio/" class="btn btn-outline-primary fs-6 col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
        </div>
    </div>
</section>

