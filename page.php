<?php 
$comp = get_the_ID();
if ($comp == 21) {
    get_header(); ?>

    <div id="primary">
            <div id="content" role="main">
                <div id="cats"><h1 id="categoriamain">ARCHIVO</h1></div>
                <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                                  'posts_per_page' => 10    ,
                                  'paged' => $paged
                                );
                query_posts($args); ?>
                <?php while ( have_posts() ) : the_post(); ?>                
                    <div class="noticia-categoria">
                        <div id="titulo">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><h2><?php the_title();?></h2></a>
                            <h5>Publicado el: <?php the_time('j F, Y');?></h5>
                        </div>
                        <div id="contenido-noticia">
        <?php the_excerpt() ?>
                        </div>
                    </div>    
                <?php endwhile; // end of the loop. ?>
            </div>
                <div id="navegaciones">
        <?php previous_posts_link(); ?> ||
                    || <?php next_posts_link(); ?>
                </div>
    </div><!-- #content -->    
<?php
} 
else {
    /**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */

    get_header(); ?>

        <div id="primary">
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('content', 'page'); ?>


                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->
<?php } get_footer(); ?>