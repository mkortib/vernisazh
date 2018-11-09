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
                            <form class="cal-form" name="contactform">
                                <div class="room-amount">
                                    <h4>Выберите количество комнат:</h4>
                                    <p class="throwdown">Сбросить все</p>
                                    <div class="radio-wrap">
                                        <!-- <div class="f-col"> -->
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="oneroom" value="oneroom" />
                                                <span class="f-room"></span>
                                                1-комнатная
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="tworooms" value="tworooms" />
                                                <span></span>
                                                2-комнатная
                                            </label>
                                        </div>
                                        <!-- </div> -->
                                        <!-- <div class="s-col"> -->

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="threerooms" value="threerooms" />
                                                <span></span>
                                                3-комнатная
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rooms" id="smart" value="smart" />
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
                                                <input type="radio" name="sect" id="fsect" value="11000" />
                                                <span class="f-room"></span>
                                                1 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="ssect" value="11000" />
                                                <span></span>
                                                2 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="tsect" value="12000" />
                                                <span></span>
                                                3 секция
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sect" id="ssmart" value="12000" />
                                                <span class="lm"></span>
                                                4 секция
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="square">

                                    <div class="square-header">
                                        <label>
                                            <h4>Выберите площадь вашей квартиры:</h4>
                                            <div class="inp-block">
                                                <input type="text" value="" name="swuarevalue" id="squareVal" placeholder="22"/>
                                                <p>м<sup>2</sup></p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="square-calc">
                                        <p>22 м<sup>2</sup></p>
                                        <input type="range" name="square" id="squareMeasure" min="22" max="114" value="22" step="0.1" />
                                        <p>114 м<sup>2</sup></p>
                                    </div>

                                </div>

                                <div class="credit-amount">
                                    <h4>Выберите удобный Вам период рассрочки:</h4>
                                    <div class="radio-wrap">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="sixm" value="6" />
                                                <span class="f-room"></span>
                                                6 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="twm" value="12" />
                                                <span></span>
                                                12 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="eightm" value="18" />
                                                <span></span>
                                                18 месяцев
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="mounth" id="twfm" value="24" />
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
                                            <div class="bl-all">
                                                <div class="inp-block">
                                                    <input type="text" value="" name="installmentevalue" id="instVal"  placeholder="0"/>
                                                    <p>грн</p>
                                                </div>
                                                <div class="inp-block">
                                                    <input type="text" value="0" name="installmentevalue" id="pers" disabled/>
                                                    <p>%</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="installment-calc">
                                        <p id="minval">0 грн</p>
                                        <input type="range" value="0" name="intallment" id="frstIns" min="0" max="0" step="1000" />
                                        <p id="maxval">0 грн</p>
                                    </div>

                                </div>

                                <div class="send-wrap">

                                    <input type="text" name="name" placeholder="Ваше имя" id="fname" required />
                                    <input type="text" name="phone" placeholder="Номер телефона" id="ffone" required />
<!--                                    <input type="button" name="sendbut" id="sendbut" value="ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ" />-->
                                    <button name="sendbut" id="sendbut">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>

                                </div>

                            </form>
                        </div>
                        <div class="calculate-res">

                            <div class="res-all">
                                <h4>Платеж по рассрочке:</h4>
                                <p class="payformouth">0 грн/мес</p>
                            </div>

                            <div class="res-descr">
                                <h4>Сума рассрочки:</h4>
                                <p class="rostr-sum">0 грн</p>
                                <h4>Стоимость м<sup>2</sup>:</h4>
                                <p class="priseofmtr">0 грн</p>
                                <h4>Первый взнос:</h4>
                                <p class="finst">0 грн</p>
                            </div>

                            <div class="res-price">
                                <h4>При первичном взносе в <span>30%</span>:</h4>
                                <p><span id="dis0">0</span> грн/мес и 0% скидки</p>
                                <h4>При первичном взносе в <span>50%</span>:</h4>
                                <p><span id="dis1">0</span> грн/мес и 3% скидки</p>
                                <h4>При первичном взносе в <span>75%</span>:</h4>
                                <p><span id="dis2">0</span> грн/мес и 5% скидки</p>
                            </div>


                            <div class="save-count">
                                <a href="#">Cкачать просчет</a>
                            </div>

                        </div>


                </div>

            </div>

            <div class="advanteges-wrap">

                <h2>Выгоды инвестирования в ЖК “Вернисаж”</h2>

                <div class="adw-items">

                    <div class="frst-col">
                        <div class="item">
                            <img src="/img/advantages/item1.png" alt="shops">
                            <h4>Магазины и отделы бытовых услуг</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                        <div class="item">
                            <img src="/img/advantages/item3.png" alt="restourants">
                            <h4>Кафе, пабы, кофейни, рестораны</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                        <div class="item">
                            <img src="/img/advantages/item5.png" alt="many people">
                            <h4>Высокая загруженность людьми</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                    </div>
                    <div class="scnd-col">
                        <div class="item">
                            <img src="/img/advantages/item2.png" alt="medicine">
                            <h4>Аптеки и частные больницы (стоматологии, частные консультации)</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                        <div class="item">
                            <img src="/img/advantages/item4.png" alt="kids center">
                            <h4>Развлекательные детские центры и студии танцев</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                        <div class="item">
                            <img src="/img/advantages/item6.png" alt="gym">
                            <h4>Фитнес-центр, салон красоты</h4>
                            <p>Жилой комплекс «Вернисаж» - это идеальное место для инвестиций в объекты малого бизнеса.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>
</section>


<?php get_footer() ?>
