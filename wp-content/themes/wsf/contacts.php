<?php
/**
 * By: WSF
 * Template Name: Контакти
 */
get_header(); ?>
    <div id="contacts">
        <div class="w">
            <h1><?php echo __('[:ru]Контакты[:ua]Контакти[:]');?></h1>
            <div class="descr">
                <p><?php echo __('[:ru]ЖК «Вернисаж» расположен в зеленой зоне рядом с центром города - в новом современном массиве на пересечении ул. Покровской и проспекта Независимости. За счет этого, комплекс олицетворяет собой микс всех удобств, необходимых для активной и комфортной жизни.[:ua]ЖК «Вернісаж» розташований в зеленій зоні поруч з центром міста - в новому сучасному масиві
                    на перетині вул. Покровської та проспекту Незалежності. За рахунок цього, комплекс
                    уособлює собою мікс усіх зручностей, необхідних для активного і комфортного життя.[:]');?></p>
            </div>
            <a href="https://goo.gl/maps/5eesQS5EvcR2" rel="nofollow" type="_blank" class="open_map"><?php echo __('[:ru]Открыть карту[:ua]Відкрити мапу[:]');?></a>
            <div class="bottom_bl">
                <div class="l_bl">
                    <div class="l_bl-1">
                        <a href="tel:0979040701" class="phone">+380 ‎‎97 904 07 01</a>
                    </div>
                    <div class="l_bl-2">
                        <a href="mailto:info@vernisazh.com.ua" rel="nofollow" target="_blank">info@vernisazh.com.ua</a>
                    </div>
                    <div class="l_bl-3">
                        <a href="https://goo.gl/maps/5eesQS5EvcR2" rel="nofollow" target="_blank"><?php echo __('[:ru]г. Житомир <br> проспект Независимости, 29[:ua]м. Житомир <br> проспект Незалежності, 29[:]');?></a>
                    </div>
                    <div class="l_bl-4">
                        <a href="http://vernisazh.com.ua/">vernisazh.com.ua</a>
                    </div>
                </div>
                <div class="r_bl">
                    <p><?php echo __('[:ru]Оставьте Ваш номер и мы Вам перезвоним[:ua]Залиште Ваш номер і ми Вам зателефонуємо[:]');?></p>
                    <form>
                        <label for="name"><?php echo __('[:ru]Ваше имя[:ua]Ваше ім\'я[:]');?></label>
                        <input type="text" name="name" id="name" class="name" required>
                        <label for="phone"><?php echo __('[:ru]Ваш телефон[:ua]Ваш телефон[:]');?></label>
                        <input type="tel" name="phone" id="phone" class="phone" required>
                        <input type="submit" class="submit" value="<?php echo __('[:ru]Отправить[:ua]Відправити[:]');?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>