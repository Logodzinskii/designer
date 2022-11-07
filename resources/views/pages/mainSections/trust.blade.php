<section class="container-fluid col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
    <p class="fs-1 marging-title">
        НАМ ДОВЕРЯЮТ
    </p>
    <div>
        <p class="text-center">Производители чистовых и отделочных материалов <br/>
            и бригады по строительным работам и инженерии.</p>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-around flex-wrap">
        @for($i = 0; $i <= 9; $i++)
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 col-xxl-2 d-flex justify-content-start align-items-center row p-3">
                <img src="{{asset('images/parters/img_'.$i.'.png')}}" width="320">
            </div>
        @endfor
    </div>
</section>
