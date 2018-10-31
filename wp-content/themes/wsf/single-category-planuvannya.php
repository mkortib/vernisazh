<?php
/**
 * By: WSF
 * Template Name: Картка планування
 */
get_header();

    ?>

    <div class="page-plan-card">
        <span><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></span>

        <div class="plan__content">
            <div class="layouts-nav">
                <?php previous_post_link( '<span class="layouts-nav-itm layouts-nav-prev"> %link </span>', _x( '[:ua]Попереднє планування[:ru]Предыдущая планировка[:]'), true ); ?>
                <?php next_post_link( '<span class="layouts-nav-itm layouts-nav-next"> %link </span>', _x( '[:ua]Наступне планування[:ru]Следующая планировка[:]'), true ); ?>
            </div>
            <div class="left">
                <img src="<?php the_field('plan_thumb'); ?>" alt="<?php echo __('[:ru]Планировка[:ua]Планування[:]');?> <?php the_field('plan_name'); ?>">
            </div>
            <div class="right plan__information">
                <div class="plan__main">
                    <div class="plan__total-sq">
                        <?php echo __('[:ru]Общая площадь[:ua]Загальна площа[:]');?>
                        <span class="<?php echo 'section-' . get_field('section') . '">'; the_field('total_sq') ?></span>
                    </div>
                    <div class="plan__living-sq">
                        <?php echo __('[:ru]Жилая площадь[:ua]Житлова площа[:]');?>
                        <span class="<?php echo 'section-' . get_field('section') . '">'; the_field('living_sq') ?></span>
                    </div>
                    <div class="plan__section">
                        <?php echo __('[:ru]Секция[:ua]Секція[:]');?>
                        <span class="<?php echo 'section-' . get_field('section') . '">'; the_field('section') ?></span>
                    </div>
                </div>

                <h2><?php echo __('[:ru]Экспликация помещений[:ua]Експлікація приміщень[:]');?></h2>
                <div class="plan__inner">
                    <div class="left-block">
                        <ol class="features">
                            <li>
                                <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-08.svg" alt="Передпокій" class="ico">
                                <p><?php echo __('[:ru]Прихожая[:ua]Передпокій[:]');?>:</p>
                                <span><?php the_field('hall') ?> м<sup>2</sup></span>
                            </li>
                            <?php if( get_field('wardrobe') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-02.svg" alt="Гардеробна" class="ico">
                                    <p><?php echo __('[:ru]Гардеробная[:ua]Гардеробна[:]');?>:</p>
                                    <span><?php the_field('wardrobe') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('toilet') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-06.svg" alt="Санвузел" class="ico">
                                    <p><?php echo __('[:ru]Санузел[:ua]Санвузел[:]');?>:</p>
                                    <span><?php the_field('toilet') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <li>
                                <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-07.svg" alt="Ванна кімната" class="ico">
                                <p><?php echo __('[:ru]Ванная комната[:ua]Ванна кімната[:]');?>:</p>
                                <span><?php the_field('wc') ?> м<sup>2</sup></span>
                            </li>
                            <?php if( get_field('kitchen') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-05.svg" alt="Кухня" class="ico">
                                    <p>Кухня:</p>
                                    <span><?php the_field('kitchen') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('living_room') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-04.svg" alt="Вітальня" class="ico">
                                    <p><?php echo __('[:ru]Гостиная[:ua]Вітальня[:]');?>:</p>
                                    <span><?php the_field('living_room') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('studio_room') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-04.svg" alt="Кімната-студія" class="ico">
                                    <p><?php echo __('[:ru]Комната-студия[:ua]Кімната-студія[:]');?>:</p>
                                    <span><?php the_field('studio_room') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('bedroom-1') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-03.svg" alt="Спальная 1" class="ico">
                                    <p><?php echo __('[:ru]Спальная[:ua]Спальна[:]');?>:</p>
                                    <span><?php the_field('bedroom-1') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('bedroom-2') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-03.svg" alt="Спальная 2" class="ico">
                                    <p><?php echo __('[:ru]Спальная[:ua]Спальня[:]');?>:</p>
                                    <span><?php the_field('bedroom-2') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('balcony') ): ?>
                            <li>
                                <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-01.svg" alt="Балкон" class="ico">
                                <p>Балкон:</p>
                                <span><?php the_field('balcony') ?> м<sup>2</sup></span>
                            </li>
                            <?php endif; ?>
                            <?php if( get_field('balcony-2') ): ?>
                                <li>
                                    <img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/info/0-01.svg" alt="Балкон" class="ico">
                                    <p>Балкон:</p>
                                    <span><?php the_field('balcony-2') ?> м<sup>2</sup></span>
                                </li>
                            <?php endif; ?>
                        </ol>
                    </div>

                    <div class="right-block">
                        <img src="<?php the_field('floor_placement'); ?>">
                        <h3><?php echo __('[:ru]Расположение на этаже[:ua]Розташування на поверсі[:]');?></h3>
                    </div>
                </div>

                <div class="plan__order">
                    <a><img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/apps/1.png" alt=""></a>
                    <a><img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/apps/2.png" alt=""></a>
                    <a><img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/apps/3.png" alt=""></a>
                    <a><img src="/img/layouts/<?php echo 'section-' . get_field('section');?>/apps/4.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="other-layouts">
            <h2 class="other-layouts-title"><?php echo __('[:ru]Другие квартиры[:ua]Інші квартири[:]');?></h2>
            <div class=" plans-board">
                <?php
                $randomLayouts = new WP_Query(array(
                    'cat' => 6,
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ));

                if (have_posts()):
                    while ($randomLayouts->have_posts()):
                        $randomLayouts->the_post();
                        (get_field('hit')) ? $class = 'hit' : null; ?>
                        <div class="post single-layout <?php echo $class ?>" id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <p class="plan-name <?php echo 'section-' . get_field('section');?>"><?php the_field('plan_name'); ?></p>
                                <p class="total-sq"><?php echo __('[:ru]Общая площадь:[:ua]Загальна площа:[:]');?> <?php the_field('total_sq'); ?> м<sup>2</sup></p>
                                <?php the_post_thumbnail(); ?>
                                <p class="open"><?php echo __('[:ru]СМОТРЕТЬ[:ua]ДИВИТИСЬ[:]');?></p>
                            </a>
                        </div>
                    <?php
                    endwhile;
                endif; ?>
            </div>

        </div>
    </div>
<?php get_footer(); ?>