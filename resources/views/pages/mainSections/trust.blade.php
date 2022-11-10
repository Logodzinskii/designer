<section class="bg-primary fool-window-width d-flex justify-content-center align-items-center row flex-wrap" style="margin-bottom: 100px">
    <div id="projects" class="compressed-window-width d-flex align-self-center fs-1">
        <div class="marging-title-border-bottom">
            НАМ ДОВЕРЯЮТ
        </div>
    </div>
    <div>
        <p class="text-center">Производители чистовых и отделочных материалов <br/>
            и бригады по строительным работам и инженерии.</p>
    </div>
    <div class="compressed-window-width d-flex justify-content-around flex-wrap">
        @for($i = 0; $i <= 9; $i++)
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 col-xxl-2 d-flex justify-content-start align-items-center row p-3">
                <img src="{{asset('images/parters/img_'.$i.'.png')}}" width="320">
            </div>
        @endfor
    </div>
</section>
