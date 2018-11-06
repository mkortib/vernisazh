<?php get_header(); ?>

    <div class="page-plans-list">
            <?php

            echo category_description(6);

            wp_nav_menu( array(
                'container'      => 'div',
                'echo'           => true,
                'depth'          => 0,
                'menu'           => 'plans',
                'items_wrap'     => '%3$s'
            ) );
        ?>
            <div class="plans-board">
            <?php
                $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


            $posts = new WP_Query( array (
                    'cat' => $cat_id,
                    'posts_per_page' => 9,
                    'paged'       => $paged,
                    'orderby'     => 'date',
                    'order'       => 'ASC'
                ));

            if (have_posts()) :
                while ($posts->have_posts()) :
                    $posts->the_post();
                    (get_field('hit')) ? $class = 'hit' : null; ?>
                        <div class="post single-layout <?php echo $class; ?>" id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <p class="plan-name <?php echo 'section-' . get_field('section');?>"><?php the_field('plan_name'); ?></p>
                                <p class="total-sq"><?php echo __('[:ru]Общая площадь[:ua]Загальна площа[:]');?>: <?php the_field('total_sq'); ?> м<sup>2</sup></p>
                                <?php the_post_thumbnail(); ?>
                                <p class="open"><?php echo __('[:ru]СМОТРЕТЬ[:ua]ДИВИТИСЬ[:]');?></p>
                            </a>
                            <?php if (($class != null) and (get_field('plan_name') != '1В') and (get_field('plan_name') != '1Г') and (get_field('plan_name') != '1И')): ?>
                                <img src="/img/<?php echo __('[:ru]hit-label-ru[:ua]hit-label[:]');?>.png" class="label">
                            <?php endif; ?>
                        </div>
            <?php
                endwhile;
                else : ?>
                <h2 class="no-layouts"><?php echo __('[:ru]К сожелению планировок еще нет.[:ua]На жаль планувань ще немає.[:]');?></h2>
            <?php endif; ?>
        </div>
    </div>
<?php
    function_exists( 'wp_pagenavi' ) ? wp_pagenavi(array('query' => $posts)) : null;
    wp_reset_postdata(); ?>

<?php get_footer(); ?>