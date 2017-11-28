<?php
$estaticos1 = "http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos2 = "http://static2.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos3 = "http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos4 = "http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
?>
<?php get_header(); ?>
<div id="content" class="primary">
    <h1>Noticias de Lavalle, Mendoza y El Mundo</h1>
    <section id="columna1">
        <h2 class="ocultas">Noticias de Actualidad</h2>
        <?php query_posts('posts_per_page=5&cat=-14,-4,-572,-2') ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="noticia">
                <h3 class="categoria"><?php echo the_category(" "); ?></h3>
                <?php if (has_post_thumbnail()) {
    ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php
} ?>
                <h4 class="post-<?php the_ID(); ?>" >
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <h5>Por <?php the_author() ?></h5>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>
    </section>
    <section id="columna2">
        <h2 class="ocultas">Noticias Deportivas</h2>
        <?php $loop2 = new WP_Query('posts_per_page=5&category_name=deportes') ?>
        <?php while ($loop2->have_posts()): $loop2->the_post(); ?>
            <article class="noticia">
                <h3 class="categoria"><?php echo the_category(" "); ?></h3>
                <?php if (has_post_thumbnail()) {
        ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php
    } ?>
                <h4 id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <h5>Por <?php the_author() ?></h5>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
    <section id="columna3">
        <h2 class="ocultas">Ultimas Noticias</h2>
        <?php $loop3 = new WP_Query('posts_per_page=13&category_name=titulares') ?>
        <?php while ($loop3->have_posts()): $loop3->the_post(); ?>
            <article class="noticia">
                <div class="smallnews">
                    <h3 class="categoria"><?php echo the_category(" "); ?></h3>
                    <h4 class="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <h5>Por <?php the_author() ?></h5>
                </div>
                <div class="imageCol3">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>
                </div>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
    <?php ad(); ?>
</div>
<div id="secondary">
    <section class="yt_holder">
        <h2>Contenido Multimedia</h2>
        <article id="ytvideo">
            <h3>Video Youtube</h3>
            <?php videos(); ?>
        </article>
        <article id=periodico>
            <h3>Periodico Online</h3>
            <?php periodico(); ?>
        </article>
    </section> 
    <?php $loop4 = new WP_Query('category_name=agro&posts_per_page=1') ?>
    <?php while ($loop4->have_posts()): $loop4->the_post(); ?>
        <section id="rurales">
            <h2>Noticias Rurales</h2>
            <article class="noticia_rural">
                <img src="http://despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/campo.jpg?v=1" width="300" height="73" alt="Rurales">
                <h3 id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <?php the_excerpt(); ?>    
            </article>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <section id="tec">
        <h2>El Despertador - Tecno </h2>
        <?php $loop8 = new WP_Query('category_name=tecnologia&posts_per_page=1') ?>
        <?php while ($loop8->have_posts()): $loop8->the_post(); ?>
            <article>
                <?php the_post_thumbnail('large'); ?>
                <h3 id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>     
    </section>
</div>	
<?php get_footer(); ?>