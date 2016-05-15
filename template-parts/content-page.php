<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package cosmomuse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post-body">
        
        <header class="entry-header page-top-margin">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->        
        
        <div class="entry-content page-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cosmomuse' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
    </div>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'cosmomuse' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

