<section class="fool-window-width row d-flex justify-content-center align-content-around" >
    @php
        $arr=[
            ['title'=>'СКОРОСТЬ РЕАЛИЗАЦИИ',
             'body'=>
             '— До 70 кв² - 30 р.д.;
              — До 100 кв²- 50 р. д.;
              — До 150 кв² - 60 р. д.;
              — 150 и более кв² - от 80 р. д.'],
              ['title'=>'УЧЕТ ВСЕХ ТРЕБОВАНИЙ',
               'body'=>
               'Учет финансовых, стилистических требований клиента на этапе проектирования !'],
            ['title'=>'ЭКОНОМИЯ ВРЕМЕНИ И СРЕДСТВ',
             'body' => 'Подбор оборудования, материалов, мебели
и других элементов интерьера, ориентируясь на ваши пожелания и бюджет. Экономия средств от 15-20% от общей стоимости чистовых материалов - по нашей скидке от поставщиков'],
            ['title'=>'СОТРУДНИЧЕСТВО С КОМПАНИЯМИ',
             'body'=> 'Сотрудничество с ремонтно-строительными бригадами, ландшафтными дизайнерами и технологами-проектировщиками, работающими
в разных направлениях в процессе реализации дизайн-проектов квартир и домов'],

                ];
    @endphp

    <div class="compressed-window-width d-flex justify-content-center">
            <div class="d-flex justify-content-between flex-wrap col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 60vh; margin-top: 10vh;">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-content-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[0]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p>{{$arr[0]['body']}}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-content-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[1]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p>{{$arr[1]['body']}}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 60vh; margin-top: 10vh;">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-content-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[2]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p>{{$arr[2]['body']}}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-content-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[3]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p>{{$arr[3]['body']}}</p>
                    </div>
                </div>
            </div>
    </div>
</section>
