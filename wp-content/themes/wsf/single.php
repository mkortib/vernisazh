<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while (have_posts()) : the_post();
$current_category = single_cat_title('', false);
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h3><?php echo $current_category; ?></h3>

                <div class="date">
                    <p class="date-cnt">
                        <?php echo get_the_date('j.m.y'); ?>
                    </p>
                </div>

                <header class="entry-header">
                    <?php
                    if (is_single()) :
                        the_title('<h1 class="entry-title">', '</h1>');
                    else :
                        the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
                    endif;
                    ?>
                </header><!-- .entry-header -->

                <img class="art-thumb" src="<?php the_field('big_thumb'); ?>" alt=""/>

                <div class="entry-content">
                    <?php
                    /* translators: %s: Name of current post */

                    the_content('<span class="moretext">Читать далее</span> ' . the_title('', '', false));
                    ?>

                    <?php
                    if (get_field('video')) {
                        the_field('video');
                    }
                    wp_link_pages(array(
                        'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'wsf') . '</span>',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'pagelink' => '<span class="screen-reader-text">' . __('Page', 'wsf') . ' </span>%',
                        'separator' => '<span class="screen-reader-text">, </span>',
                    ));
                    ?>
                </div><!-- .entry-content -->

                <?php
                // Author bio.
                if (is_single() && get_the_author_meta('description')) :
                    get_template_part('author-bio');
                endif;
                ?>

                <footer class="entry-footer">
                    <!--                    --><?php //edit_post_link(__('Edit', 'wsf'), '<span class="edit-link">', '</span>'); ?>



                    <div class="n-cta">
                        <div class="col">
                            <h4><?php echo __('[:ru]Остались вопросы?[:ua]Є запитання?[:]');?></h4>
                            <p><?php echo __('[:ru]Звоните на номер[:ua]Телефонуйте на номер[:]');?></p>
                        </div>

                        <div class="col flex">
                            <img src="/img/news/phone.png" alt="Зателефонувати до Вернісаж">
                            <a href="tel:0‎‎979040701" class="phone">+380 ‎‎97 904 07 01</a>
                        </div>

                        <div class="col flex">
                            <span class="or"><?php echo __('[:ru]или[:ua]або[:]');?></span>
                            <div class="btn cb"><?php echo __('[:ru]Задайте их нашему менеджеру[:ua]Задайте їх нашому менеджеру[:]');?></div>
                        </div>
                    </div>


                </footer><!-- .entry-footer -->

            </article><!-- #post-## -->

            <?php

            //			/*
//			 * Include the post format-specific template for the content. If you want to
//			 * use this in a child theme, then include a file called called content-___.php
//			 * (where ___ is the post format) and that will be used instead.
//			 */
//			get_template_part( 'content', get_post_format() );
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;
//
//			// Previous/next post navigation.
//			the_post_navigation( array(
//				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'wsf' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Next post:', 'wsf' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'wsf' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Previous post:', 'wsf' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//			) );
//
//		// End the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
