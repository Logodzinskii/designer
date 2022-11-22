<section class="fool-window-width row d-flex justify-content-center flex-wrap align-content-around" >
    @php
        $arr=[
            ['title'=>'СКОРОСТЬ РЕАЛИЗАЦИИ',
             'body'=>
             'От 40-70 кв² - 30 рабочих дней;
              От 70-100 кв²- 50 рабочих дней;
              От 100-150 кв² - 60 рабочих дней;
              От 150 кв² - от 80 рабочих дней '],
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

    <div id="positive" class="compressed-window-width d-flex flex-wrap justify-content-center" style="min-height: 85vh;">
            <div class="d-flex justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 85vh; margin-top: 10vh;">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-items-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[0]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p class="p-1 fs-6">От 40-70 кв² - 30 рабочих дней</p>
                        <p class="p-1 fs-6">От 70-100 кв²- 50 рабочих дней</p>
                        <p class="p-1 fs-6">От 100-150 кв² - 60 рабочих дней</p>
                        <p class="p-1 fs-6">От 150 кв² - от 80 рабочих дней </p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-items-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[1]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p class="p-1 fs-6">{{$arr[1]['body']}}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="height: 85vh; margin-top: 10vh;">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-items-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[2]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p class="p-1 fs-6">{{$arr[2]['body']}}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 difference" >
                    <div class="text-dark fs-4 d-flex align-items-center difference-header text-center" style="padding-left: 5px; padding-right: 5px">
                        <h2>{{$arr[3]['title']}}</h2>
                    </div>
                    <div class="text-white fs-6 align-middle difference-body" style="padding-left: 5px; padding-right: 5px">
                        <p class="p-1 fs-6">{{$arr[3]['body']}}</p>
                    </div>
                </div>
            </div>
    </div>
</section>
