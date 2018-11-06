<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#b2cb06">
    <meta name="msapplication-TileColor" content="#f8f8f8">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M9T3CNN');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <script>
        (function(i,s,o,g,r,a,m){
                i["esSdk"] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, a=s.createElement(o), m=s.getElementsByTagName(o)[0]; a.async=1; a.src=g;
                m.parentNode.insertBefore(a,m)}
        ) (window, document, "script", "https://esputnik.com/scripts/v1/public/scripts?apiKey=eyJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI0NTI0ZWZhYTJkYzI2MGRmYTM4YTE1NDBlMWI1YmE1M2Q0YjkyNzFmMjc0Njk0ODkxYThhNDc3MmQzOGE0MDQzMjVhZWZlN2EwMGY1YTkyOTM1MGU2ZGY5ZGUyNmZkMDA0NWJjYjIwMjVhMzM3MmE0YTE3NTAzYzQyMjI0ZWI1MmFiYzlhYzNkMzM3ZDdhNDJlMTM4ZWQ3M2EwOGI0MjE1MDU4YWUwOTI5YzE5NjA1OGY0MGJhY2Q4In0.XhoUmPurQvvtqmLyKvhFAcxg5xbZlVY1WBt_UZ7E5zwtoZG9iH1TqpDOxA2rJB7kakwPW1DUqayOjbMfuqCDrA&domain=07B4C09A-A69F-4231-A85D-3AC5CD874E9A", "es");
        es("pushOn");
    </script>

    <!--BEGIN PHONET CODE {literal}-->
    <script>var telerWdWidgetId="545c90e8-2234-4760-984d-43280e21a47a";var telerWdDomain="olvita.phonet.com.ua";</script>
    <script src="//olvita.phonet.com.ua/public/widget/call-catcher/lib-v3.js"></script>
    <!--{/literal} END PHONET CODE -->

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'EDzlyMGvWz';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9T3CNN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page">

    <header class="header-new">
        <div class="row row-top">
            <div class="header-contacts contacts">
                <p class="contacts-txt"><?php echo __('[:ru]г. Житомир, проспект Независимости, 29[:ua]м. Житомир, проспект Незалежності, 29[:]');?></p>
                <a href="tel:+380979040701" class="contacts-txt contacts-txt_focused">+380 ‎‎97 904 07 01</a>
            </div>
            <?php if (is_front_page()): ?>
                <div class="logo"></div>
            <?php else: ?>
                <a href="http://vernisazh.com.ua/" class="logo"></a>
            <?php endif; ?>
            <div class="header-socials socials">
                <a href="https://t.me/vernisazhcomua" rel="nofollow" target="_blank" class="socials-itm socials-itm_tel"></a>
                <a href="https://www.facebook.com/zhkVernisazh/" rel="nofollow" target="_blank" class="socials-itm socials-itm_fb"></a>
                <a href="https://www.youtube.com/channel/UC5MsdpXHEDPgtiJ7tP9Aj7Q/" rel="nofollow" target="_blank" class="socials-itm socials-itm_ytb"></a>
                <a href="https://www.instagram.com/vernissage_zhitomir/?hl=ru" rel="nofollow" target="_blank" class="socials-itm socials-itm_insta"></a>
            </div>
            <div class="burger_button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="menu_frame">
                <nav class="mobile-menu">
                    <?php
                    $args = array(
                        'container'       => false,
                        'echo'            => true,
                        'theme_location' => 'primary'
                    );

                    wp_nav_menu($args); ?>
                </nav>
            </div>
        </div>
        <div class="row row-bottom">
            <nav class="nav">
                <?php
                    $args = array(
                        'container'       => false,
                        'echo'            => true,
                        'theme_location' => 'primary'
                    );

                    wp_nav_menu($args); ?>
            </nav>
        </div>

        <div class="acs_bl">
            <a href="/bezvidsotkova-rozstrochka-vid-zabudovnyka-2/" class="last"><p><span>0%</span><?php echo __('[:ru]Беспроцентная рассрочка[:ua]Безвідсоткова розстрочка[:]');?></p></a>
            <a href="/category/novyny/hid-budivnytstva/" class="last2"><p><img src="/img/lines.png" alt="lines"><?php echo __('[:ru]Высокая строительная готовность[:ua]Висока будівельна готовність[:]');?></p></a>
        </div>
    </header>

