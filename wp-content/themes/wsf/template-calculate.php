<?php
/**
 * Template name: Calculate Template
 */

get_header() ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="main-content-wrapper">

            <header class="page-header"><p></p><div class="sold-out">Квартири від&nbsp;<strong>10 000</strong> грн за м<sup>2</sup></div><p></p></header>

            <div class="about-flat">

                <div class="descr-flat"><h2>Как приобрести квартиру?</h2></div>
                <div class="items-descr">


                    <div class="f-col">

                        <div class="item">
                            <img src="/img/calculate/phone.png" alt="phone">
                            <p>Позвонить в отдел продаж, договориться о встрече</p>
                        </div>
                        <div class="item">
                            <img src="/img/calculate/map.png" alt="map">
                            <p>Приехать в отдел продаж и выбрать квартиру</p>
                        </div>
                        <div class="item">
                            <img src="/img/calculate/procent.png" alt="sale">
                            <p>Получить скидку, забронировать квартиру</p>
                        </div>

                    </div>

                    <div class="s-col">

                        <div class="item title-item">
                            <img src="/img/calculate/profile.png" alt="title">
                            <p>Взять с собой:</p>
                            <ul>
                                <li>Паспорт</li>
                                <li>Код</li>
                                <li>Свидетельство о браке</li>
                            </ul>
                        </div>
                        <div class="item last">
                            <img src="/img/calculate/list.png" alt="list">
                            <p>Подписать договор (Договір майнових прав*)</p>
                        </div>

                    </div>



                </div>

                <div class="cons-but-wrap"><a href="#" class="consualt-but">Получить Консультацию</a></div>

            </div>
            <div class="calculate-wrap">

                <div class="calculate-descr"><h2>Расчитать стоимость квартиры</h2></div>

                    <div class="calculate-blocks">

                        <div class="calculate-block">
                            <form class="cal-form">
                                <div class="room-amount">
                                    <h4>Выберите количество комнат:</h4>
                                    <p class="throwdown">Сбросить все</p>
                                    <div class="radio-wrap">
                                        <!-- <div class="f-col"> -->
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="oneroom" value="oneroom">
                                                <span class="f-room"></span>
                                                1-комнатная
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="tworooms" value="tworooms">
                                                <span></span>
                                                2-комнатная
                                            </label>
                                        </div>
                                        <!-- </div> -->
                                        <!-- <div class="s-col"> -->

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="threerooms" value="threerooms">
                                                <span></span>
                                                3-комнатная
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="smart" value="smart">
                                                <span class="lm"></span>
                                                Smart
                                            </label>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="section-amount">
                                    <h4>Выберите секцию:</h4>
                                    <div class="radio-wrap">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="fsect" value="fsect">
                                                <span class="f-room"></span>
                                                1 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="ssect" value="ssect">
                                                <span></span>
                                                2 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="tsect" value="tsect">
                                                <span></span>
                                                3 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="ssmart" value="ssmart">
                                                <span class="lm"></span>
                                                Smart
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="square">

                                    <div class="square-header">
                                        <label>
                                            <h4>Выберите площадь вашей квартиры:</h4>
                                            <input type="text" value="56,22 uhy" name="swuarevalue" id="squareVal" disabled>
                                        </label>
                                    </div>
                                    <div class="square-calc">
                                        <p>56,22 м^2</p>
                                        <input type="range" name="square" id="squareMeasure" min="56.22" max="84.88" value="57" step="0.1">
                                        <p>84,88 м^2</p>
                                    </div>

                                </div>

                                <div class="credit-amount">
                                    <h4>Выберите удобный Вам период рассрочки:</h4>
                                    <div class="radio-wrap">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="sixm" value="sixm">
                                                <span class="f-room"></span>
                                                6 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="twm" value="twm">
                                                <span></span>
                                                12 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="eightm" value="eightm">
                                                <span></span>
                                                18 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="twfm" value="twfm">
                                                <span class="lm"></span>
                                                24 месяца
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="installment">

                                    <div class="installment-header">
                                        <label>
                                            <h4>Укажите первый взнос:</h4>
                                            <input type="text" value="90 000 грн" name="installmentevalue" id="instVal" disabled>
                                        </label>
                                    </div>
                                    <div class="installment-calc">
                                        <p>50 000 грн</p>
                                        <input type="range" name="intallment" id="frstIns" min="50000" max="368000" value="90000" step="1000">
                                        <p>368 000 грн</p>
                                    </div>

                                </div>

                                <div class="send-wrap">

                                    <input type="text" name="name" placeholder="Ваше имя" id="fname" required>
                                    <input type="text" name="phone" placeholder="Номер телефона" id="ffone" required>
                                    <input type="button" name="sendbut" id="sendbut" value="ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ">

                                </div>

                            </form>
                        </div>
                        <div class="calculate-res">

                            <div class="res-descr">
                                <h4>Сума рассрочки:</h4>
                                <p>278 000 грн</p>
                                <h4>Стоимость м^2:</h4>
                                <p>11 000 грн</p>
                            </div>

                            <div class="res-price">
                                <h4>При первичном взносе в <span>30%</span>:</h4>
                                <p>1700 грн/мес и 0% скидки</p>
                                <h4>При первичном взносе в <span>50%</span>:</h4>
                                <p>1100 грн/мес и 3% скидки</p>
                                <h4>При первичном взносе в <span>75%</span>:</h4>
                                <p>865 грн/мес и 5% скидки</p>
                            </div>

                            <div class="res-all">
                                <h4>Платеж по рассрочке:</h4>
                                <p>2 829 грн/мес</p>
                            </div>

                            <div class="save-count">
                                <a href="#">Cкачать просчет</a>
                            </div>

                        </div>


                </div>

            </div>

        </div>
    </main>
</section>


<?php get_footer() ?>
