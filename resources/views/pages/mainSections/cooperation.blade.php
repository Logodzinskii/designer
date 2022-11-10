<section class="bg-primary fool-window-width d-flex justify-content-center align-items-center row flex-wrap" style="margin-bottom: 100px">
    <div id="projects" class="compressed-window-width d-flex align-self-center fs-1">
        <div class="marging-title-border-bottom">
            ЭТАПЫ НАШЕГО СОТРУДНИЧЕСТВА
        </div>
    </div>
    <div class="compressed-window-width d-flex justify-content-around flex-wrap">
        @php
            $arrPoint=[ '',
                        'Заявка на нашем сайте или по телефону и WA',
                        'Встреча на объекте (замеры помещения) или у нас в офисе',
                        'Заполнение ТЗ и брифа, составление концепции проекта',
                        'Подписание договора',
                        'Планы: перепланировки, план мебели',
                        'Визуализация каждого из помещений',
                        'Техническая документация',
                        'Спецификация оборудования и материалов, чертежи мебели',
                        'Авторский надзор',
                        ];
        @endphp
        @for($i=1; $i<=9; $i++)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-start align-items-center row" style="padding-right: 8px">
                <div class="d-flex justify-content-start flex-wrap align-items-center row p-0 m-0">
                    <p class="col-2 p-0 m-0 text-warning fs-6">0{{$i}}.</p>
                    <div class="border-bottom border-primary col p-1"></div>
                </div>
                <div class=" d-flex justify-content-start flex-wrap align-items-center row p-0 m-0" style="height:100%">
                    <div class="col-2 m-0 p-0">
                        <img src="{{asset('images/icons/block/'.$i.'.png')}}" width="40" />
                    </div>
                    <p class="col p-3 fs-6" style="max-height: 200px">{{$arrPoint[$i]}}</p>
                </div>
            </div>
        @endfor
    </div>
    <p class="marging-title"></p>
</section>
