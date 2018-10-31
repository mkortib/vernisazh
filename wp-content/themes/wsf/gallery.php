<?php
/**
 * By: WSF
 * Template Name: Галерея
 */
get_header(); ?>
    <div id="gallery">
        <div class="w">
            <h1>Галерея</h1>
            <?php
            if (!is_category(5)):
                wp_nav_menu(
                    array(
                        'menu'            => 'news-nav',
                        'container'       => 'div',
                        'container_class' => 'news-nav',
                        'echo'            => true,
                    )
                );
            endif;
            ?>
            <div class="bl">
                <div>
                    <a href="/galereya/vizualizatsiyi.html">
                </a>
                <p class="n"><a href="/galereya/vizualizatsiyi.html"><?php echo __('[:ru]Визуализации[:ua]Візуалізації[:]');?></a></p>
                </div>
                <div>
                <a href="/galereya/hid-budivnytsvta.html">
                    <div class="progress">
                        <p style="color: white;"><?php echo __('[:ru]Готовность 1 очереди[:ua]Готовність 1 черги[:]');?></p>
                        <div id="container"></div>
                    </div>
                </a>
                <p class="n"><a href="/galereya/hid-budivnytsvta.html"><?php echo __('[:ru]Ход строительства[:ua]Хід будівництва[:]');?></a></p>
                </div>
                <div>
                    <a href="/galereya/vyglyad-iz-vikna.html">
                </a>
                <p class="n"><a href="/galereya/vyglyad-iz-vikna.html"><?php echo __('[:ru]Вид с окна[:ua]Вигляд із вікна[:]');?></a></p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>