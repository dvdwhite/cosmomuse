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
                
                
                
                <br clear="all" />
                
                
                
                <?php
                    $post_tags = wp_get_post_tags($post->ID);
                    $tag_count = count($post_tags);
                    if ( $tag_count >= 1 ) {
                    ?>

                    <div class="relatedposts">  
                        <h2>YOU MAY ALSO LIKE</h2>
                        <div class="eq-ht-wrapper clearfix">
                        <?php  
                            $orig_post = $post;  
                            global $post;
                            $tags = wp_get_post_tags($post->ID);  

                            if ($tags) {  
                            $tag_ids = array();  
                            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
                            $args=array(  
                            'tag__in' => $tag_ids,  
                            'post__not_in' => array($post->ID),  
                            'posts_per_page'=>4, // Number of related posts to display.  
                            'ignore_sticky_posts'=>1  
                            );  

                            $my_query = new wp_query( $args );  

                            while( $my_query->have_posts() ) {  
                            $my_query->the_post();  
                            ?>  

                            <div class="relatedthumb eq-ht col-4">  
                                <a rel="external" href="<? the_permalink()?>">
                                <?php
                                    $featured_thumb = rwmb_meta( 'cosmo_post_thumb', 'type=image' );
                                    foreach ( $featured_thumb as $image ) {
                                        echo "<a href='" . get_the_permalink() . "'><img src='{$image['url']}' /></a>";
                                    }  
                                ?>
                                </a>
                                 <a class="title" rel="external" href="<? the_permalink()?>"><?php the_title(); ?></a>
                            </div>  

                            <?php }  
                            }  
                            $post = $orig_post;  
                            wp_reset_query();  
                            ?>
                        </div><br clear="all" />    <!-- End Four Columns Wrapper-->
                    </div> <!-- End related posts by tag -->                

                    

                      <?php
                    }
                    else {}
                ?><!-- End has tag ? -->

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
                echo '<div class="tile-break-circles"><br clear="all" />&nbsp;</div>';
                comments_template();
            endif;
        ?>   
        
        <br clear="all" />
        
    </div>
        
</article><!-- #post-## -->

