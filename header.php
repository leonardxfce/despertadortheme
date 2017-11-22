<?php
//error_reporting(0);
//ob_start("ob_gzhandler");

/**
 *  Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <link rel="alternate" hreflang="es-ar" href="http://despertadorlavalle.com.ar/" />
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>El Despertador - Noticias de Lavalle, Mendoza y El Mundo</title>
        <meta property="fb:pages" content="364842676926469" />
        <?php if (curPageURL() == get_site_url() . "/") { ?>
            <link rel="canonical" href="http://despertadorlavalle.com.ar/" />
            <link href="https://plus.google.com/110576088749422697808" rel="publisher">
            <link rel="image_src" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/logo.png" />
            <meta property='fb:app_id' content='517649738391808'/>
            <meta property="og:locale" content="es_ES" />
            <meta property="og:title" content="Periodico El Despertador" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="http://despertadorlavalle.com.ar/" />
            <meta property="og:image" content="http://static4.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/logo.jpg" />
            <meta property="og:image:type" content="image/png" />
            <meta property="og:image:width" content="200" />
            <meta property="og:image:height" content="224" />
            <meta property="og:description" content="Periodico Semanal - Lavalle Mendoza Argentina. El Despertador es una publicaci&oacute;n que apunta a brindar no s&oacute;lo informaci&oacute;n sino un servicio a la comunidad a trav&eacute;s de prensa comprometida y responsable">
            <meta name="description" content="Periodico Semanal - Lavalle Mendoza Argentina. El Despertador es una publicaci&oacute;n que apunta a brindar no s&oacute;lo informaci&oacute;n sino un servicio a la comunidad a trav&eacute;s de prensa comprometida y responsable">
<?php
}
if (is_single()) {
    while (have_posts()) : the_post();

        function new_excerpt_more($more) {
            return '';
        }

        add_filter('excerpt_more', 'new_excerpt_more');
        $resumen = get_the_excerpt();
    endwhile;
    $thumbID = get_post_thumbnail_id();
    $imgDestacada = wp_get_attachment_url($thumbID);
    ?>
            <meta name="description" content="<?php echo $resumen; ?>"/>
            <meta property='fb:app_id' content='517649738391808' />
            <meta property='fb:admins' content='1416093550' />
            <meta property="og:image" content="<?php echo $imgDestacada ?>" />
            <meta property="og:title" content="<?php echo get_the_title(); ?>" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="<?php echo curPageURL() ?>" />
            <meta property="og:description" content="<?php echo $resumen; ?>" />
            <meta property="og:image" content="http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/logo.jpg" />
            <link href="<?php echo $imgDestacada; ?>" rel="image_src" />
            <link rel="amphtml" href="<?php echo curPageURL() ?>amp/">
<?php } ?>
        <meta name="robots" CONTENT="NOODP">
        <link rel="alternate" hreflang="es" href="http://despertadorlavalle.com.ar/" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="http://despertadorlavalle.com.ar/xmlrpc.php" />
        <link rel="shortcut icon" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/icono.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/favicon-16x16.png">
        <link rel="manifest" href="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/fav/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--[if lt IE 9]>
        <script src="/<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->

    </head>
    <body>
        <div id="fb-root"></div>
        <header class="encabezado">
            <a href="http://despertadorlavalle.com.ar/">
                <img src="http://static4.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/banner.jpg" alt="Despertador Digital" height="110" >
            </a>
        </header>
        <nav id="menubar">
            <button id="menu" type="button">&equiv;</button>
            <div id="sidenav">
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
            <div id="buscar">
<?php get_search_form(); ?>
            </div>
            <div class="fb-like" data-href="https://www.facebook.com/PeriodicoElDespertador" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </nav>

        <?php
        if (is_single()) {
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
        }?>