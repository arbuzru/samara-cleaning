@extends('layouts.app')

@section('content')

<main>

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-6 ftco-animate text-left">
                    <h2 class="subheading">Перевозим. Сохраняем. Доставляем.</h2>
                    <h1 class="mb-4">Доверьте груз нам
                        Мы доставим точно, безопасно и вовремя</h1>
                    <p>
                        <a href="#" class="btn btn-primary mr-md-4 py-2 px-4">
                            Learn more <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
                        <form action="#" class="appointment w-100">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Phone number</label>
                                        <input type="text" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Select Services</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Services</option>
                                                    <option value="">Spinal Manupulation</option>
                                                    <option value="">Electrotherapy</option>
                                                    <option value="">Manual Lymphatic</option>
                                                    <option value="">Medical Acupuncture</option>
                                                    <option value="">Therapeutic Exercise</option>
                                                    <option value="">Joint Mobilization</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Name</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Cleaners</option>
                                                    <option value="">John Doe</option>
                                                    <option value="">William Smith</option>
                                                    <option value="">Danny Green</option>
                                                    <option value="">Jason Thompson</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>PROJECTS
                                <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                                        <input type="submit" value="Make an Appointment" class="btn btn-primary py-3 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 pt-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">WELCOME TO MOVELINE</span>
                            <h2 class="mb-4">Движем ваш груз — двигаем ваш бизнес</h2>
                            <p>
                                MoveLine — это надёжная компания по грузоперевозкам для частных и корпоративных клиентов.
                                Мы берём на себя весь процесс доставки: от планирования маршрута до аккуратной выгрузки.
                                Чёткие сроки, опытные водители и современный автопарк — основа нашей работы.
                            </p>
                        </div>
                    </div>
                    <div class="row ftco-counter py-5" id="section-counter">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="12">0</strong>
                                </div>
                                <div class="text">
                                    <span>Лет в<br>логистике</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30000">0</strong>
                                </div>
                                <div class="text">
                                    <span>довольных <br>клиентов</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30000">0</strong>
                                </div>
                                <div class="text">
                                    <span>успешных <br>перевозок</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Услуги MoveLine</span>
                    <h2>Наши услуги</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-workplace"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Грузоперевозки по городу</h3>
                            <p>Быстрая доставка грузов любого объёма по городу и области.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-pool"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Квартирные и офисные переезды</h3>
                            <p>Полный переезд под ключ: упаковка, погрузка, доставка.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-rug"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Коммерческие грузы</h3>
                            <p>Перевозка товаров, оборудования и паллет.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-kitchen"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Срочная доставка</h3>
                            <p>Экспресс-перевозки, когда важна каждая минута.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-garden"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Междугородние перевозки</h3>
                            <p>Надёжная доставка по регионам с соблюдением сроков.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-balcony"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Складская логистика</h3>
                            <p>Временное хранение и распределение грузов.</p>
                            <p><a href="#" class="btn-custom">Подробнее</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">

        </div>
    </section>

    <section class="ftco-section testimony-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Happy Customer</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-12 heading-section  text-center ftco-animate">
                    <span class="subheading">Наши перевозки</span>
                    <h2>Мы успешно реализовали сотни проектов разной сложности —
                        от небольших переездов до крупных коммерческих поставок.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-1.jpg);">
                        <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Квартирные переезды</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-2.jpg);">
                        <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Офисные переезды</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-3.jpg);">
                        <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Междугородние перевозки</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-4.jpg);">
                        <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Коммерческие грузы</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-5.jpg);">
                        <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Срочная доставка</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-6.jpg);">--}}
{{--                        <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">--}}
{{--                            <span class="fa fa-expand"></span>--}}
{{--                        </a>--}}
{{--                        <div class="desc w-100 px-4 text-center pt-5 mt-5">--}}
{{--                            <div class="text w-100 mb-3 mt-4">--}}
{{--                                <h2><a href="work-single.html">Garden Cleaning</a></h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-7.jpg);">--}}
{{--                        <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">--}}
{{--                            <span class="fa fa-expand"></span>--}}
{{--                        </a>--}}
{{--                        <div class="desc w-100 px-4 text-center pt-5 mt-5">--}}
{{--                            <div class="text w-100 mb-3 mt-4">--}}
{{--                                <h2><a href="work-single.html">Carpet Cleaning</a></h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-8.jpg);">--}}
{{--                        <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">--}}
{{--                            <span class="fa fa-expand"></span>--}}
{{--                        </a>--}}
{{--                        <div class="desc w-100 px-4 text-center pt-5 mt-5">--}}
{{--                            <div class="text w-100 mb-3 mt-4">--}}
{{--                                <h2><a href="work-single.html">Pool Cleaning</a></h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
</section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading mb-3">ТАРИФЫ &amp; ЦЕНЫ MOVELINE </span>
                    <h2>Выберите подходящий вариант перевозки</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-sprayer"></span></div>
                            <h4 class="heading-2">Тариф Starter</h4>
                            <span class="price"><sup>₽</sup> <span class="number">3000</span></span>

                            <ul class="pricing-text mb-5">
                                <li>Подходит для:</li>
                                <li><span class="fa fa-check mr-2"></span>Небольших грузов</li>
                                <li><span class="fa fa-check mr-2"></span>Перевозок по городу</li>
                                <li><span class="fa fa-check mr-2"></span>Срочных доставок</li>
                                <li>Включено:</li>
                                <li><span class="fa fa-check mr-2"></span>Подача автомобиля</li>
                                <li><span class="fa fa-check mr-2"></span>Погрузка и разгрузка</li>
                                <li><span class="fa fa-check mr-2"></span>Короткий маршрут</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Заказать перевозку</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-tap"></span></div>
                            <h4 class="heading-2">Тариф Standard</h4>
                            <span class="price"><sup>₽</sup> <span class="number">15000</span></span>

                            <ul class="pricing-text mb-5">
                                <li>Подходит для:</li>
                                <li><span class="fa fa-check mr-2"></span>Квартирных переездов</li>
                                <li><span class="fa fa-check mr-2"></span>Средних объёмов груза</li>
                                <li>Включено:</li>
                                <li><span class="fa fa-check mr-2"></span>Автомобиль с водителем</li>
                                <li><span class="fa fa-check mr-2"></span>Погрузка и разгрузка</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Заказать перевозку</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-tap"></span></div>
                            <h4 class="heading-2">Тариф Premium</h4>
                            <span class="price"><sup>₽</sup> <span class="number">30000</span></span>

                            <ul class="pricing-text mb-5">
                                <li>Подходит для:</li>
                                <li><span class="fa fa-check mr-2"></span>Междугородних перевозок</li>
                                <li><span class="fa fa-check mr-2"></span>Коммерческих грузов</li>
                                <li>Включено:</li>
                                <li><span class="fa fa-check mr-2"></span>Оптимальный маршрут</li>
                                <li><span class="fa fa-check mr-2"></span>Контроль доставки</li>

                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Рассчитать стоимость</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-cleaning"></span></div>
                            <h4 class="heading-2">Тариф Platinum</h4>
                            <span class="price"><sup>₽</sup> <span class="number">45000</span></span>

                            <ul class="pricing-text mb-5">
                                <li>Подходит для:</li>
                                <li><span class="fa fa-check mr-2"></span>Срочных и сложных перевозок</li>
                                <li><span class="fa fa-check mr-2"></span>Индивидуальных логистических решений</li>
                                <li>Включено:</li>
                                <li><span class="fa fa-check mr-2"></span>Экспресс-доставка</li>
                                <li><span class="fa fa-check mr-2"></span>Полное сопровождение</li>
                                <li><span class="fa fa-check mr-2"></span>Гарантия сроков</li>

                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Получить предложение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>>
