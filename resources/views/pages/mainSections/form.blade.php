<section style="min-height: 80vh">
    <div class="fool-window-width bg-light d-flex justify-content-center align-items-center">
        <div class="compressed-window-width bg-primary" style="margin-top: 50px; margin-bottom: 50px">
            <form>
                <p class="fs-4">ЗАПОЛНИТЬ</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div style="min-height: 50vh">
                    <div class="d-flex justify-content-around quest flex-wrap">
                        <div class="fs-4 text-warning p-3 col-12">ВЫБЕРИТЕ ПОМЕЩЕНИЕ, ДЛЯ КОТОРОГО НУЖЕН ДИЗАЙН?</div>
                        @php
                            $arr=['0','ДОМ', 'ОФИС', 'КВАРТИРА', 'СОВРЕМЕННЫЙ', 'NEO-ЛАССИКА', 'АМЕРИКАНСКИЙ'];
                        @endphp
                        @for($i=1; $i<=3; $i++)
                            <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                <input type="radio"  id="design"{{$i}} name="design">
                                <label for="design{{$i}}" class="rounded-circle shadow d1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                </label>
                                <div class="overflow-hidden rounded-3 proporcional">
                                    <img src="{{asset('images/form/'. $i .'.jpg')}}" class="calc-height"/>
                                </div>
                                <p style="margin-top: 20px; font-size: 1rem;">{{$arr[$i]}}</p>
                            </div>
                        @endfor
                    </div>
                    <div class="d-flex justify-content-around quest flex-wrap">
                        <div class="fs-4 text-warning p-3 col-12">КАКОЙ СТИЛЬ ПРЕДПОЧИТАЕТЕ ?</div>
                        @for($i=4; $i<=6; $i++)
                            <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                <input type="radio"  id="type-design"{{$i}} name="type-design">
                                <label for="type-design{{$i}}" class="rounded-circle shadow d1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                </label>
                                <div class="overflow-hidden rounded-3 proporcional">
                                    <img src="{{asset('images/form/'. $i .'.jpg')}}" class="calc-height"/>
                                </div>
                                <p style="margin-top: 20px; " class="fs-6">{{$arr[$i]}}</p>
                            </div>
                        @endfor
                    </div>
                    <div class="container-fluid row d-flex justify-content-around quest" >
                        <div class="fs-4 text-warning p-3 col-12">ПЛОЩАДЬ ПОМЕЩЕНИЯ?</div>
                        <div class="d-flex justify-content-center">
                            <div class="number" style="min-height: 45vh">
                                <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                                <input type="number" name="square" min="0" step="10"/>
                                <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid row d-flex justify-content-around quest" >
                        <div class="d-flex justify-content-center">
                            <div>
                                <div class="container-fluid d-flex justify-content-center flex-wrap user-form" style="min-height: 45vh">
                                    <div class="row col-12">
                                        <label for="nameUser">Имя пользователя</label>
                                        <input type="text" name="nameUser" id="nameUser" placeholder="Имя Фамилия"/>
                                    </div>
                                    <div class="row col-12">
                                        <label for="emailUser">Email</label>
                                        <input type="email" name="emailUser" id="emailUser" placeholder="example@mail.ru" />
                                    </div>
                                    <div class="row col-12">
                                        <label for="telUser">Телефон</label>
                                        <input type="tel" name="telUser" id="telUser" placeholder="+7900-000-00-00" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid row d-flex justify-content-around quest">
                        <div class="d-flex justify-content-center flex-wrap col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" >
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional">
                                <div class="overflow-hidden rounded-3 proporcional">
                                    <img src="" class="calc-height" id="resStyle" />
                                </div>
                                <p style="margin-top: 20px" id="resStyleText"></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 design-select proporcional" >
                                <div class="overflow-hidden rounded-3 proporcional">
                                    <img src="" class="calc-height" id="resType" />
                                </div>
                                <p style="margin-top: 20px" id="resTypeText"></p>
                            </div>
                            <div class="col-12 design-select proporcional">
                                <div class="overflow-hidden rounded-3 proporcional d-flex justify-content-center">
                                    <p class="fs-6" >
                                        <span>Площадь:</span>
                                        <span id="resSquare"></span>
                                        <span>m2</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 design-select proporcional">
                            <span>Благодарим за обращение! </span>
                            <span id="resFormContactName"></span>
                            <span></span>
                            <span>, пожалуйста, проверьте указанные данные.</span><br/>
                            <span id="resFormContactEmail"></span><br/>
                            <span id="resFormContactTel"></span><br/>
                            <span></span>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around quest" >
                        <div class="fs-4 text-warning p-3 col-12">БЛАГОДАРИМ ЗА ОБРАЩЕНИЕ!</div>
                        <div class="d-flex justify-content-center align-items-center row" >
                            <div id="resultPost" class="fs-4 text-center">Форма успешно отправлена!<br/>Мы свяжемся с вами в ближайшее время!</div>
                            <div style="color: #b89535" >
                                <a href="/public/files/bonus/VD.pdf" download="vozhevdesign" class="d-flex justify-content-center row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
                                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                                    </svg>
                                    <br/>
                                    <p class="text-center">Получить бонус</p>
                                </a>
                                <div class="d-flex row align-content-around justify-content-center" style="min-height: 190px">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{asset('images/icons/tel.png')}}" width="30" height="30">
                                        <span class="fs-4 align-self-start" style="margin-left: 10px;">
                                                        <a href=":tel" class="transition" style="text-decoration: none">8 912 688-08-92</a>
                                                    </span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{asset('images/icons/insta.png')}}" width="30" height="30">
                                        <span class="fs-5 align-self-start" style="margin-left: 10px;">
                                                        <a href="https://www.instagram.com/vozhev_design/" class="transition" style="text-decoration: none">VOZHEV_DESIGN</a>
                                                    </span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{asset('images/icons/vk.png')}}" width="30" height="30">
                                        <span class="fs-5 align-self-start" style="margin-left: 10px;">
                                                        <a href="https://vk.com/design_vozhev" class="transition" style="text-decoration: none">DESIGN_VOZHEV</a>
                                                    </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around form-navigation" style="margin-top: 20px; margin-bottom: 20px">
                    <button class="btn btn-outline-secondary form-prev" disabled>Назад</button>
                    <button class="btn btn-outline-primary form-next" disabled>Дальше</button>
                </div>
            </form>
        </div>
    </div>
</section>
