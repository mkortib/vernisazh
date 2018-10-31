<?php
/**
 * By: WSF
 * Template Name: Документи
 */
get_header(); ?>

    <div id="docs">
        <div class="w">
            <h1><?php echo __('[:ru]Документы[:ua]Документи[:]');?></h1>
            <div class="docs-txt">
                <p><?php echo __('[:ru]Выполнения строительных работ на строительной площадке регулируется законом Украины «О регулировании в области городского планирования», а именно: 
                    <a href="http://zakon.rada.gov.ua/laws/show/3038-17" rel="nofollow" target="_blank">статьями 34 и 37</a>
                    [:ua]Виконання будівельних робіт на будівельному майданчику регулюється законом України «Про регулювання у сфері містобудівної діяльності», а саме:
                    <a href="http://zakon.rada.gov.ua/laws/show/3038-17" rel="nofollow" target="_blank">статтею 34 та 37</a>.[:]');?></p>
                <p><?php echo __('[:ru]На сегодняшний день, наличие всех разрешительных документов на строительство – это залог успеха и надежности. Поэтому все строительные работы на нашем объекте начались только после получения полного пакета документов. С перечнем которых сможете ознакомится ниже.
                    [:ua]На сьогоднішній день, наявність всіх дозвільних документів на будівництво – це надійність та запорука
                    успіху. Тому будівельні роботи на нашому об’єкті було розпочато тільки після отримання повного пакету
                    документів. З переліком можете ознайомитись нижче[:]');?>.</p>
            </div>
            <div class="docs-bl">
                <a href="/img/docs/1.jpg" data-fancybox data-pdf="1.pdf" class="img-w">
                    <img src="/img/docs/1.jpg" alt="">
                </a>
                <a href="/img/docs/2.jpg" data-fancybox data-pdf="2.pdf" class="img-w">
                    <img src="/img/docs/2.jpg" alt="">
                </a>
                <a href="/img/docs/3.jpg" data-fancybox data-pdf="3.pdf" class="img-w">
                    <img src="/img/docs/3.jpg" alt="">
                </a>
                <a href="/img/docs/4.jpg" data-fancybox data-pdf="4.pdf" class="img-w">
                    <img src="/img/docs/4.jpg" alt="">
                </a>
                <a href="/img/docs/5.jpg" data-fancybox data-pdf="5.pdf" class="img-w">
                    <img src="/img/docs/5.jpg" alt="">
                </a>
                <a href="/img/docs/6.jpg" data-fancybox data-pdf="6.pdf" class="img-w">
                    <img src="/img/docs/6.jpg" alt="">
                </a>
                <a href="/img/docs/7.jpg" data-fancybox data-pdf="7.pdf" class="img-w">
                    <img src="/img/docs/7.jpg" alt="">
                </a>
                <a href="/img/docs/8.jpg" data-fancybox data-pdf="8.pdf" class="img-w">
                    <img src="/img/docs/8.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="popup-overlay-d">
            <div class="popup-d">
                <div class="caption">
                    <h2>Для завантаження заповніть всі поля</h2>
                </div>
                <div class="close-btn-d"></div>
                <form class="download-form">
                    <input type="text" name="name" class="name" placeholder="Ваше ім'я" required>
                    <input type="tel" name="tel" class="phone" placeholder="Номер телефону" required>
                    <input type="email" name="email" class="email" placeholder="Email">
                    <input type="submit" value="Завантажити">
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>