<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-old'); ?>>
    <div class="img-date-w">
        <?php the_post_thumbnail(); ?>

        <p class="date-cnt">
            <?php echo get_the_date('d.m.y'); ?>
        </p>
    </div>

    <div class="post-cnt">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title title">', '</h1>');
        else :
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        endif;
        ?>

        <?php the_excerpt(); ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="morelink"><?php echo __('[:ru]Смотреть[:ua]Читати[:]');?></a>
    </div>
    <header class="entry-header">
    </header><!-- .entry-header -->

    <div class="entry-content">

        <?php
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
        <?php edit_post_link(__('Edit', 'wsf'), '<span class="edit-link">', '</span>'); ?>
    </footer><!-- .entry-footer -->

</article>
