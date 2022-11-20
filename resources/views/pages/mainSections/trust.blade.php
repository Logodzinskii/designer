
<section class="bg-light fool-window-width d-flex justify-content-center align-items-center row flex-wrap" style="padding-bottom: 10vh">
    <div id="projects" class="compressed-window-width d-flex align-self-center">
        <div class="marging-title marging-title-border-bottom">
            <h2 class="fs-1 text-body">НАМ ДОВЕРЯЮТ</h2>
        </div>
    </div>
    <div>
        <p class="text-center text-dark upper-case">Производители чистовых и отделочных материалов /
            бригады по строительным работам / инженерии</p>
    </div>
    <div class="fool-window-width container">
        <div class="row d-flex justify-content-between flex-wrap">
            @for($i = 0; $i <= 9; $i++)
                <div class="m-2 d-flex align-items-center col bg-secondary" style="min-height: 90px">
                    <img src="{{asset('images/parters/img_'.$i.'.png')}}" width="90">
                </div>
            @endfor
        </div>
    </div>
</section>
