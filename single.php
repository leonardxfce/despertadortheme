<?php
/**
 * The Template for displaying all single posts.
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */
get_header(); ?>
<main id="content">
    <?php while (have_posts()) : the_post(); ?>                
        <article class="noticia-singular" id="nota" >
            <div id="titulo">
                <h1><?php the_title();?></h1>
            </div>
            <span id="fecha"><?php the_time('j F, Y');?></span>
            <div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-type="button_count"></div>
            <h2>Por: <?php the_author();?></h2>
            <div id="contenido-noticia">
                <?php the_content();?>    
            </div>    
            <div id="compartir">
                <div id="impresion">
                    <a href="javascript:imprSelec('nota')">
                        <img src="http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/imprimir.png" width="24" height="24" alt="imprimir articulo"/>
                        Imprimir
                    </a>
                </div>
                <div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-type="box_count"></div>
            </div>
            <div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-numposts="10" data-colorscheme="light"></div>
    <?php endwhile; // end of the loop.?>
    </article>
    <aside id="relacionadas">
        <h3>Relacionadas</h3>
        <ul id="related">
    <?php
    $category = get_the_category();
    $ct=$category[0]->cat_name;

    $args = array( 'numberposts' => '6','post_status' => 'publish','category' => get_cat_ID($ct));
    $recent_posts = wp_get_recent_posts($args);
    foreach ($recent_posts as $recent) {
        echo '<li class="titr">'.'<a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail($recent["ID"], 'medium');
        echo '<h4>'.$recent["post_title"].' </h4> </a> </li> ';
    }
    ?>
        </ul>
    </aside>
    <?php ad(); ?>
</main><!-- #content -->
<?php 
$thumbID = get_post_thumbnail_id();
$imgDestacada = wp_get_attachment_url($thumbID);
?>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php echo get_the_title($ID); ?> ",
        "image": "<?php echo $imgDestacada; ?>",
        "datePublished": "<?php echo get_the_time('Y-m-d'); ?> ",
        "dateModified" : "<?php echo get_the_time('Y-m-d'); ?> ",
        "description": "<?php echo get_the_excerpt(); ?>",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "http://despertadorlavalle.com.ar/"
        },
        "author": {
            "@type": "Person",
            "name": "Periodico El Despertador"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Editorial Cuyum",
            "logo": {
                "@type": "ImageObject",
                "url": "http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/logo.jpg"
            }
        },
        "image": {
            "@type": "ImageObject",
            "url": "<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>",
            "width": 600,
            "height": 60
        }
    }
</script>
<script type="text/javascript">
    function imprSelec(nota)
    {
        var ficha=document.getElementById(nota);
        var ventimp=window.open(' ','popimpr');
        ventimp.document.write(ficha.innerHTML);
        ventimp.document.close();ventimp.print();
        ventimp.close();
    }
</script>	
<?php get_footer(); ?>