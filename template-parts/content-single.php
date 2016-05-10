<?php
/**
 * Template part for displaying single posts.
 *
 * @package cosmomuse
 */

?>

<?php $category = get_the_category(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
            
        <div class="post-banner">
            <div class="category <?php echo $category[0]->slug; ?>">
                <?php echo $category[0]->cat_name; ?>
            </div>
            <div class="title-sign-container ink-<?php echo $category[0]->slug; ?>">
                <div class="feature-sign"><img src="/wp-content/themes/cosmomuse/images/signs/<?php echo rwmb_meta( 'cosmo_sign' ); ?>.png" /></div>
                <div class="feature-title">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <p>Read more</p>
                    <div class="arrow"> </div>
                </div>
            </div>
            <div class="feature-image post-feature-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
            <br clear="all" />
        </div>         

	</header><!-- .entry-header -->

    <div class="post-body">
        <div class="entry-content">
            <div class="tiles">
                <?php the_content(); ?>
                
                <br clear="all" /><br clear="all" />
                
                <!--<div class="tile-break">&nbsp;<br clear="all" />&nbsp;</div>
                
                <div class="list-container">
                    <div class="list">
                        <?php echo rwmb_meta( 'cosmo_list_title' ); ?><br />

                        <?php echo rwmb_meta( 'cosmo_list' ); ?>                    
                    </div>
                    <div class="list-image">
                        <?php 
                            $images = rwmb_meta( 'cosmo_list_image', 'type=image' );
                            foreach ( $images as $image )
                            {
                                echo "<img src='{$image['url']}' />";
                            }
                        ?>                    
                    </div>
                </div>-->
                
            </div>
            
            
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cosmomuse' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php //cosmomuse_entry_footer(); ?>
        </footer><!-- .entry-footer --> 
        
      
                
        
        
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                echo '<div class="tile-break"><br clear="all" />&nbsp;</div>';
                comments_template();
            endif;
        ?>   
        
        <br clear="all" />
        
    </div>
        
</article><!-- #post-## -->

