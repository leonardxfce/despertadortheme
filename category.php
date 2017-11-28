<?php
get_header(); ?>
<div id="primary">
    <div id="content" role="main">
        <div class="categorias">
            <h1 id="categoriamain"><?php single_cat_title(); ?></h1>
    <?php 
    /* $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array ( 'category' => ID, 'posts_per_page' => 15,'paged' => $paged);
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) :	setup_postdata($post);*/
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>                
        <div class="noticia-categoria">
                <div id="titulo">
                    <h2 class="tituloCategorizado"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <small> Publicado el: <?php the_time('d M Y'); ?> </small>
                <div id="contenido-noticia">
        <?php the_excerpt(); ?>
                </div>
    </div>    
        <?php endwhile;
    }
    // end of the loop.?>
        <div class="pagination">
            <div class="nav-previous alignleft"><?php next_posts_link('< Noticias Anteriores'); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link('Noticias mas Recientes >'); ?></div>
        </div>
    </div>
    <?php ad(); ?>
</div>
</div>
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>

