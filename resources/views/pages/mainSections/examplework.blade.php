<section class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="margin-bottom: 100px">
    <p id="projects" class="fs-1 text-decoration-underline marging-title">
        НЕКОТОРЫЕ ИЗ НАШИХ РАБОТ
    </p>
    <div class="d-flex justify-content-around flex-wrap ">
        @for($i=2; $i<=7; $i++)
            <div class="owl-item slider-up-info col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4  p-0">
                <div class="card bg-primary zoom-img" style=" position: relative">
                    <img  src="{{asset('images/projects/p'. $i .'/img.png')}}" width="auto" height="400"  />
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
    <div class="">
        <div class=" d-flex justify-content-center align-items-center flex-wrap row " style="min-height: 100px">
            <a href="/#projects" class="btn btn-outline-primary fs-6 col-8 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">Посмотреть другие проекты</a>
        </div>
    </div>
</section>

