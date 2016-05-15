<?php
/**
 * The template for displaying all single posts.
 *
 * @package cosmomuse
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

                    <div class="floating-nav-widget">
                        <div class="floating-nav-previous"><a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>">PREVIOUS</a></div>
                        <div class="floating-nav-next"><a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>">NEXT</a></div>
                        <div class="floating-home-button"><a href="/"></a></div>
                        <div class="floating-archives-button"><a href="/categories"></a></div>
                    </div>             
            
			<?php //the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
