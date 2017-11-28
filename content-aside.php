<?php
/**
 * The template for displaying posts in the Aside Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <hgroup>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'twentyeleven'), the_title_attribute('echo=0'))); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <h3 class="entry-format"><?php _e('Aside', 'twentyeleven'); ?></h3>
            </hgroup>

        </header><!-- .entry-header -->

    <?php if (is_search()) : // Only display Excerpts for Search?>
        <div class="entry-summary">
    <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
    <?php the_content(__('Mas Info <span class="meta-nav">&rarr;</span>', 'twentyeleven')); ?>
    <?php wp_link_pages(array( 'before' => '<div class="page-link"><span>' . __('Pages:', 'twentyeleven') . '</span>', 'after' => '</div>' )); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

        <footer class="entry-meta">
    <?php twentyeleven_posted_on(); ?>
    <?php edit_post_link(__('Edit', 'twentyeleven'), '<span class="edit-link">', '</span>'); ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
