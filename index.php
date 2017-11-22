<?php
$estaticos1 = "http://static1.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos2 = "http://static2.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos3 = "http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$estaticos4 = "http://static3.despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/";
$queryDeportes = new WP_Query('posts_per_page=5&category_name=deportes');
$queryTitutlares = new WP_Query('posts_per_page=13&category_name=titulares');
$queryAgro = new WP_Query('category_name=agro&posts_per_page=1');
$queryTecnologia = new WP_Query('category_name=tecnologia&posts_per_page=1');
get_header();
?>
<div id="content" class="primary">
    <h1>Noticias de Lavalle, Mendoza y El Mundo</h1>
    <section id="columna1">
        <h2 class="ocultas">Noticias de Actualidad</h2>
        <?php
        query_posts('posts_per_page=5&cat=-14,-4,-572,-2');
        while (have_posts()) : the_post();
            ?>
            <article class="noticia">
                <h3 class="categoria"><?= the_category(" ") ?></h3>
                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                        <?= the_post_thumbnail('medium'); ?>
                    </a>
                <?php } ?>
                <h4 class="post-<?= the_ID(); ?>" >
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                        <?= the_title(); ?>
                    </a>
                </h4>
                <h5>Por <?= the_author() ?></h5>
                <?= the_excerpt(); ?>
            </article>
        <?php endwhile; ?>
    </section>
    <section id="columna2">
        <h2 class="ocultas">Noticias Deportivas</h2>
        <?php while ($queryDeportes->have_posts()): $queryDeportes->the_post(); ?>
            <article class="noticia">
                <h3 class="categoria"><?= the_category(" "); ?></h3>
                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                        <?= the_post_thumbnail('medium'); ?>
                    </a>
                <?php } ?>
                <h4 id="post-<?= the_ID(); ?>">
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <h5>Por <?= the_author() ?></h5>
                <?= the_excerpt(); ?>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
    <section id="columna3">
        <h2 class="ocultas">Ultimas Noticias</h2>
        <?php while ($queryTitutlares->have_posts()): $queryTitutlares->the_post(); ?>
            <article class="noticia">
                <div class="smallnews">
                    <h3 class="categoria"><?= the_category(" "); ?></h3>
                    <h4 class="post-<?= the_ID(); ?>">
                        <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                            <?= the_title(); ?>
                        </a>
                    </h4>
                    <h5>Por <?= the_author() ?></h5>
                </div>
                <div class="imageCol3">
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="Permanent Link to <?= the_title(); ?>">
                        <?= the_post_thumbnail('thumbnail'); ?>
                    </a>
                </div>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
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
    <?php while ($queryAgro->have_posts()): $queryAgro->the_post(); ?>
        <section id="rurales">
            <h2>Noticias Rurales</h2>
            <article class="noticia_rural">
                <img src="http://despertadorlavalle.com.ar/wp-content/themes/eldespertadortheme/img/campo.jpg?v=1" width="300" height="73" alt="Rurales">
                <h3 id="post-<?= the_ID(); ?>">
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
        <?php while ($queryTecnologia->have_posts()): $queryTecnologia->the_post(); ?>
            <article>
                <?php the_post_thumbnail('large'); ?>
                <h3 id="post-<?= the_ID(); ?>">
                    <a href="<?= the_permalink() ?>" rel="bookmark" title="<?= the_title(); ?>">
                        <?= the_title(); ?>
                    </a>
                </h3>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
</div>	
<?php get_footer(); ?>