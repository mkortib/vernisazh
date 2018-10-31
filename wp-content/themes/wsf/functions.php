<?php

if ( ! function_exists( 'wsf_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function wsf_setup() {
        /*
         * Make theme available for translation.
         */
        
        if (qtranxf_getLanguage() == 'UA') {
            echo "<script>alert('UA');</script>";
        } elseif (qtranxf_getLanguage() == 'RU') {
            echo "<style>#main .w { background - color: aliceblue; }</style>";
        }
        load_theme_textdomain( 'wsf', get_template_directory() . '/languages' );

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 377, 190, array( 'center', 'center') );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu',      'wsf' ),
            'social'  => __( 'Social Links Menu', 'wsf' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        /*
         * Enable support for Post Formats.
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );
    }
endif;
add_action( 'after_setup_theme', 'wsf_setup' );

remove_action ('wp_head', 'wp_generator');
remove_filter('the_content', 'wptexturize');

function remove_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'remove_admin_bar');

add_action( 'wp_ajax_do_something',        'do_something_callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something', 'do_something_callback' ); // For anonymous users
add_action( 'wp_ajax_download',        'download' ); // For logged in users
add_action( 'wp_ajax_nopriv_download', 'download' ); // For anonymous users

function do_something_callback(){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'] ? $_POST['subject'] : 'Обратный звонок';

    $to      = 'murashenkorb@gmail.com, denis.barcoffee@gmail.com';
    $message = "<strong>Имя:</strong> $name<br>
                <strong>Номер телефона:</strong> $phone";

    $header = "From: vernisazh@info.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'phone' => $phone,
            //'mail' => $email,
        )
    );
    wp_die();
}

function download(){

    ob_start();
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $subject = 'Скачивание документов';

    $to      = 'murashenkorb@gmail.com, denis.barcoffee@gmail.com';
    $message = "<strong>Имя:</strong> $name<br>
                <strong>Номер телефона:</strong> $phone<br>
                <strong>Номер телефона:</strong> $email";

    $header = "From: vernisazh@info.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'phone' => $phone,
            'mail' => $email,
        )
    );
    wp_die();
}

/**
 * Register widget area.
 *
 * @since wsf 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wsf_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'wsf' ),
        'id'            => 'sidebar-1'
    ) );

    register_sidebar( array(
        'name'          => __( 'Lang Switcher', 'wsf' ),
        'id'            => 'switcher'
    ) );
}
add_action( 'widgets_init', 'wsf_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since wsf 1.0
 */
function wsf_scripts() {

    // Load our main stylesheet.
    wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css' );
    wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
    wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
    wp_enqueue_style( 'wsf-style', get_template_directory_uri() . '/style.css', 'stylesheet', null );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'fancy', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'viewport', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.7/jquery.viewportchecker.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'progress', 'https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'wsf-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/mask.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'history', 'https://cdnjs.cloudflare.com/ajax/libs/history.js/1.8/bundled-uncompressed/html4+html5/jquery.history.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'wsf_scripts' );

if( !is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://code.jquery.com/jquery-2.2.4.min.js"), false, '2.2.4');
    wp_enqueue_script('jquery');
}

function dimox_breadcrumbs()
{

    /* === ОПЦИИ === */
    $text['home'] = 'Головна'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результати пошука по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Записи автора %s'; // текст для страницы автора
    $text['404'] = 'Помилка 404'; // текст для страницы 404
    $text['page'] = 'Сторінка %s'; // текст 'Страница N'
    $text['cpage'] = 'Сторінка коментарів %s'; // текст 'Страница комментариев N'

    $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '›'; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</span>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && !$parent_id) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }

        echo $wrap_after;

    }
}

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t ){
    foreach( (array) get_the_category() as $cat ){
        if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        if($cat->parent){
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        }
    }
    return $t;
}

function new_excerpt_length($length) {
    return 10;//кол-во слов цитаты
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
    return '...';
});

add_action('template_redirect', 'myTemplateSelect');

// make category use parent category template
function load_cat_parent_template($template) {

    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );

    $templates = array();

    if ( !is_wp_error($category) )
        $templates[] = "category-{$category->slug}.php";

    $templates[] = "category-$cat_ID.php";

    // trace back the parent hierarchy and locate a template
    if ( !is_wp_error($category) ) {
        $category = $category->parent ? get_category($category->parent) : '';

        if( !empty($category) ) {
            if ( !is_wp_error($category) )
                $templates[] = "category-{$category->slug}.php";

            $templates[] = "category-{$category->term_id}.php";
        }
    }

    $templates[] = "category.php";
    $template = locate_template($templates);

    return $template;
}

add_action('category_template', 'load_cat_parent_template');